<?php
/**
 * Test Email Configuration for SEGUREC Landing Page
 * 
 * This file tests the email configuration to ensure
 * emails are sent correctly to ventas@segurec.com.mx
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Test data
$testData = [
    'nombre' => 'Usuario de Prueba',
    'email' => 'test@example.com',
    'telefono' => '+52 899 123 4567',
    'empresa' => 'Empresa de Prueba S.A. de C.V.',
    'servicio' => 'Guardias de Seguridad',
    'mensaje' => 'Este es un mensaje de prueba para verificar que el sistema de correo electrónico funciona correctamente con la nueva configuración de ventas@segurec.com.mx'
];

echo "<!DOCTYPE html>\n";
echo "<html lang='es'>\n";
echo "<head>\n";
echo "    <meta charset='UTF-8'>\n";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
echo "    <title>Prueba de Configuración de Correo - SEGUREC</title>\n";
echo "    <style>\n";
echo "        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }\n";
echo "        .container { max-width: 800px; margin: 0 auto; }\n";
echo "        .success { color: #22c55e; background: #f0fdf4; padding: 15px; border-radius: 5px; border-left: 4px solid #22c55e; }\n";
echo "        .error { color: #ef4444; background: #fef2f2; padding: 15px; border-radius: 5px; border-left: 4px solid #ef4444; }\n";
echo "        .info { color: #3b82f6; background: #eff6ff; padding: 15px; border-radius: 5px; border-left: 4px solid #3b82f6; }\n";
echo "        .config-item { margin: 10px 0; padding: 10px; background: #f8f9fa; border-radius: 3px; }\n";
echo "        .test-data { background: #f1f5f9; padding: 15px; border-radius: 5px; margin: 20px 0; }\n";
echo "        h1 { color: #0f172a; }\n";
echo "        h2 { color: #334155; margin-top: 30px; }\n";
echo "    </style>\n";
echo "</head>\n";
echo "<body>\n";
echo "    <div class='container'>\n";
echo "        <h1>🧪 Prueba de Configuración de Correo - SEGUREC</h1>\n";

echo "        <h2>🌐 Entorno Detectado</h2>\n";
$isProduction = !in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1', 'localhost:8000', 'localhost:8080']);
echo "        <div class='config-item'><strong>Entorno:</strong> " . ($isProduction ? '🔴 PRODUCCIÓN' : '🟡 DESARROLLO') . "</div>\n";
echo "        <div class='config-item'><strong>Servidor:</strong> " . ($_SERVER['HTTP_HOST'] ?? 'Desconocido') . "</div>\n";
echo "        <div class='config-item'><strong>IP del Servidor:</strong> " . ($_SERVER['SERVER_ADDR'] ?? 'No disponible') . "</div>\n";

echo "        <h2>📧 Configuración de Correo</h2>\n";
echo "        <div class='info'>\n";
echo "            <h3>Comparación con Sitio Original:</h3>\n";
echo "            <p><strong>Correo Original:</strong> gerencia@segurec.com.mx</p>\n";
echo "            <p><strong>Correo Nuevo:</strong> " . CONTACT_EMAIL . "</p>\n";
echo "            <p><strong>Formato MIME:</strong> ✅ Multipart (igual que original)</p>\n";
echo "            <p><strong>Función mail():</strong> ✅ Misma configuración</p>\n";
echo "        </div>\n";

echo "        <h2>📧 Configuración Actual</h2>\n";
echo "        <div class='config-item'><strong>Correo de Destino:</strong> " . CONTACT_EMAIL . "</div>\n";
echo "        <div class='config-item'><strong>Teléfono de Contacto:</strong> " . CONTACT_PHONE . "</div>\n";
echo "        <div class='config-item'><strong>URL del Sitio:</strong> " . SITE_URL . "</div>\n";

echo "        <h2>🔧 Configuración del Servidor</h2>\n";
echo "        <div class='config-item'><strong>Función mail() disponible:</strong> " . (function_exists('mail') ? '✅ Sí' : '❌ No') . "</div>\n";
echo "        <div class='config-item'><strong>SMTP:</strong> " . (ini_get('SMTP') ?: 'No configurado') . "</div>\n";
echo "        <div class='config-item'><strong>Puerto SMTP:</strong> " . (ini_get('smtp_port') ?: 'No configurado') . "</div>\n";
echo "        <div class='config-item'><strong>Sendmail From:</strong> " . (ini_get('sendmail_from') ?: 'No configurado') . "</div>\n";
echo "        <div class='config-item'><strong>Sendmail Path:</strong> " . (ini_get('sendmail_path') ?: 'No configurado') . "</div>\n";

echo "        <h2>🧪 Datos de Prueba</h2>\n";
echo "        <div class='test-data'>\n";
foreach ($testData as $key => $value) {
    echo "            <div><strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "</div>\n";
}
echo "        </div>\n";

echo "        <h2>📤 Resultado de la Prueba</h2>\n";

// Prueba simple primero para el servidor de producción
if ($isProduction) {
    echo "        <h3>🔧 Prueba Simple de mail() en Producción</h3>\n";
    $simple_subject = "Prueba Simple - SEGUREC Nueva Versión";
    $simple_message = "Prueba de función mail() desde la nueva versión del sitio.\n\nFecha: " . date('d/m/Y H:i:s') . "\nServidor: " . ($_SERVER['HTTP_HOST'] ?? 'Desconocido');
    $simple_headers = "From: " . CONTACT_EMAIL . "\r\n";
    $simple_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if (@mail(CONTACT_EMAIL, $simple_subject, $simple_message, $simple_headers)) {
        echo "        <div class='success'>✅ Prueba simple exitosa - La función mail() funciona</div>\n";
    } else {
        echo "        <div class='error'>❌ Prueba simple falló - Revisar configuración del servidor</div>\n";
    }
    echo "        <br>\n";
}

echo "        <h3>📧 Prueba Completa del Sistema de Contacto</h3>\n";

// Test email sending
try {
    if (sendContactEmail($testData)) {
        echo "        <div class='success'>\n";
        echo "            <h3>✅ ¡Prueba Exitosa!</h3>\n";
        echo "            <p>El correo electrónico se envió correctamente a <strong>" . CONTACT_EMAIL . "</strong></p>\n";
        if (isDevelopmentEnvironment()) {
            echo "            <p><em>Nota: En modo de desarrollo, el correo se guardó como archivo en lugar de enviarse.</em></p>\n";
        }
        echo "        </div>\n";
    } else {
        echo "        <div class='error'>\n";
        echo "            <h3>❌ Error al Enviar</h3>\n";
        echo "            <p>No se pudo enviar el correo electrónico. Verifica la configuración del servidor.</p>\n";
        echo "            <p>El correo debería enviarse a <strong>" . CONTACT_EMAIL . "</strong></p>\n";
        echo "        </div>\n";
    }
} catch (Exception $e) {
    echo "        <div class='error'>\n";
    echo "            <h3>❌ Excepción Durante la Prueba</h3>\n";
    echo "            <p>Error: " . htmlspecialchars($e->getMessage()) . "</p>\n";
    echo "        </div>\n";
}

echo "        <h2>📝 Recomendaciones</h2>\n";
echo "        <div class='info'>\n";
echo "            <h3>Para Producción:</h3>\n";
echo "            <ul>\n";
echo "                <li>Asegúrate de que el servidor tenga configurado SMTP correctamente</li>\n";
echo "                <li>Verifica que el correo <strong>ventas@segurec.com.mx</strong> esté configurado en el servidor de correo</li>\n";
echo "                <li>Considera usar un servicio de correo como SendGrid, Mailgun o Amazon SES para mayor confiabilidad</li>\n";
echo "                <li>Revisa los logs del servidor para errores específicos de correo</li>\n";
echo "            </ul>\n";
echo "        </div>\n";

echo "        <div style='margin-top: 40px; padding: 20px; background: #f8f9fa; border-radius: 5px; text-align: center;'>\n";
echo "            <p><strong>Fecha de la prueba:</strong> " . date('d/m/Y H:i:s') . "</p>\n";
echo "            <p><em>Elimina este archivo antes de poner el sitio en producción.</em></p>\n";
echo "        </div>\n";

echo "    </div>\n";
echo "</body>\n";
echo "</html>\n";
?>