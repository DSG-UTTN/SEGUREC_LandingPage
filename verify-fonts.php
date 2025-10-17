#!/usr/bin/env php
<?php
/**
 * Script de Verificación de Optimización de Fuentes
 * Verifica que todas las fuentes locales estén correctamente configuradas
 */

echo "═══════════════════════════════════════════════════════════════\n";
echo "🔍 VERIFICACIÓN DE OPTIMIZACIÓN DE FUENTES LOCALES\n";
echo "═══════════════════════════════════════════════════════════════\n\n";

$baseDir = __DIR__;
$fontsDir = $baseDir . '/public/fonts';
$cssDir = $baseDir . '/public/css';
$templateDir = $baseDir . '/templates';

$checks = [
    'pass' => 0,
    'fail' => 0,
    'warning' => 0
];

// ============================================
// CHECK 1: Verificar archivos de fuentes
// ============================================
echo "📁 CHECK 1: Archivos de Fuentes\n";
echo "────────────────────────────────────────────────────────────────\n";

$requiredFonts = [
    'Poppins-Regular.woff2',
    'Poppins-Regular.woff',
    'Poppins-SemiBold.woff2',
    'Poppins-SemiBold.woff',
    'Poppins-Bold.woff2',
    'Poppins-Bold.woff',
];

foreach ($requiredFonts as $font) {
    $filePath = $fontsDir . '/' . $font;
    if (file_exists($filePath)) {
        $size = round(filesize($filePath) / 1024, 2);
        echo "✅ $font ($size KB)\n";
        $checks['pass']++;
    } else {
        echo "❌ $font - NO ENCONTRADO\n";
        $checks['fail']++;
    }
}

echo "\n";

// ============================================
// CHECK 2: Verificar CSS de fuentes
// ============================================
echo "🎨 CHECK 2: Archivo CSS de Fuentes Locales\n";
echo "────────────────────────────────────────────────────────────────\n";

$fontsCss = $cssDir . '/fonts-local.css';
if (file_exists($fontsCss)) {
    $content = file_get_contents($fontsCss);
    
    // Verificar @font-face declarations
    preg_match_all('/@font-face/', $content, $matches);
    $fontFaceCount = count($matches[0]);
    
    echo "✅ Archivo existe\n";
    echo "   @font-face declarations: $fontFaceCount\n";
    $checks['pass']++;
    
    // Verificar font-display: swap
    if (strpos($content, 'font-display: swap') !== false) {
        echo "✅ font-display: swap configurado\n";
        $checks['pass']++;
    } else {
        echo "❌ font-display: swap NO configurado\n";
        $checks['fail']++;
    }
    
    // Verificar rutas de fuentes
    if (strpos($content, '/public/fonts/') !== false) {
        echo "✅ Rutas de fuentes correctas (/public/fonts/)\n";
        $checks['pass']++;
    } else {
        echo "❌ Rutas de fuentes incorrectas\n";
        $checks['fail']++;
    }
} else {
    echo "❌ fonts-local.css NO ENCONTRADO\n";
    $checks['fail']++;
}

echo "\n";

// ============================================
// CHECK 3: Verificar layout.php
// ============================================
echo "📄 CHECK 3: Configuración en templates/layout.php\n";
echo "────────────────────────────────────────────────────────────────\n";

$layoutFile = $templateDir . '/layout.php';
if (file_exists($layoutFile)) {
    $layoutContent = file_get_contents($layoutFile);
    
    // Verificar que NO tiene Google Fonts
    if (strpos($layoutContent, 'googleapis.com') === false) {
        echo "✅ Sin referencias a googleapis.com\n";
        $checks['pass']++;
    } else {
        echo "❌ Aún hay referencias a googleapis.com\n";
        $checks['fail']++;
    }
    
    if (strpos($layoutContent, 'fonts.gstatic.com') === false) {
        echo "✅ Sin referencias a fonts.gstatic.com\n";
        $checks['pass']++;
    } else {
        echo "❌ Aún hay referencias a fonts.gstatic.com\n";
        $checks['fail']++;
    }
    
    // Verificar que SÍ tiene fuentes locales
    if (strpos($layoutContent, '/public/css/fonts-local.css') !== false) {
        echo "✅ Link a fonts-local.css presente\n";
        $checks['pass']++;
    } else {
        echo "❌ Link a fonts-local.css NO encontrado\n";
        $checks['fail']++;
    }
    
    // Verificar preload de fuentes críticas
    $preloadCount = preg_match_all('/rel="preload".*fonts/', $layoutContent);
    if ($preloadCount >= 3) {
        echo "✅ Preload de 3+ fuentes críticas configurado\n";
        $checks['pass']++;
    } else {
        echo "⚠️  Preload de fuentes encontrado: $preloadCount (esperado 3)\n";
        $checks['warning']++;
    }
} else {
    echo "❌ templates/layout.php NO ENCONTRADO\n";
    $checks['fail']++;
}

echo "\n";

// ============================================
// CHECK 4: Verificar Tailwind CSS
// ============================================
echo "🎯 CHECK 4: Configuración Tailwind\n";
echo "────────────────────────────────────────────────────────────────\n";

$tailwindFile = $cssDir . '/tailwind.css';
if (file_exists($tailwindFile)) {
    $tailwindContent = file_get_contents($tailwindFile);
    
    if (strpos($tailwindContent, 'Poppins') !== false) {
        echo "✅ Tailwind configurado con Poppins\n";
        $checks['pass']++;
    } else {
        echo "⚠️  Tailwind podría no tener Poppins configurado\n";
        $checks['warning']++;
    }
} else {
    echo "❌ tailwind.css NO ENCONTRADO\n";
    $checks['fail']++;
}

echo "\n";

// ============================================
// CHECK 5: Verificar tamaño total de fuentes
// ============================================
echo "📊 CHECK 5: Análisis de Tamaño\n";
echo "────────────────────────────────────────────────────────────────\n";

$totalSize = 0;
if (is_dir($fontsDir)) {
    $files = scandir($fontsDir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && is_file($fontsDir . '/' . $file)) {
            $totalSize += filesize($fontsDir . '/' . $file);
        }
    }
}

$totalSizeMB = round($totalSize / (1024 * 1024), 2);
echo "Tamaño total de fuentes: $totalSizeMB MB\n";

if ($totalSize < 5 * 1024 * 1024) { // Menos de 5MB
    echo "✅ Tamaño razonable para fuentes WOFF2\n";
    $checks['pass']++;
} else {
    echo "⚠️  Tamaño de fuentes podría ser optimizado\n";
    $checks['warning']++;
}

echo "\n";

// ============================================
// RESUMEN FINAL
// ============================================
echo "═══════════════════════════════════════════════════════════════\n";
echo "📊 RESUMEN FINAL\n";
echo "═══════════════════════════════════════════════════════════════\n";
echo "✅ Pasadas: " . $checks['pass'] . "\n";
echo "⚠️  Advertencias: " . $checks['warning'] . "\n";
echo "❌ Fallos: " . $checks['fail'] . "\n";
echo "\n";

if ($checks['fail'] === 0 && $checks['warning'] === 0) {
    echo "🎉 ¡TODAS LAS VERIFICACIONES PASARON!\n";
    echo "\n";
    echo "Próximos pasos:\n";
    echo "1. Reinicia el servidor PHP\n";
    echo "2. Abre http://localhost (o tu URL)\n";
    echo "3. Verifica en Google PageSpeed Insights\n";
    echo "4. Espera 5-10 minutos para que se indexe\n";
    exit(0);
} else if ($checks['fail'] === 0) {
    echo "⚠️  REVISIÓN RECOMENDADA\n";
    echo "Las advertencias pueden afectar el performance.\n";
    exit(1);
} else {
    echo "❌ PROBLEMAS ENCONTRADOS\n";
    echo "Por favor revisa los errores arriba.\n";
    exit(1);
}
?>
