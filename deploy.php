<?php
/**
 * SEGUREC - Script de Gestión de Despliegue
 * 
 * Este script ayuda con el proceso de despliegue y rollback seguro
 * 
 * IMPORTANTE: Eliminar este archivo después del despliegue exitoso
 */

// Configuración
$backupDir = './backup_original';
$testDir = './prueba';
$originalFiles = [
    'index.php',
    'estilos.css',
    'envio_formulario.php',
    'jquery.js',
    'animate.css',
    'video.mp4'
];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Despliegue - SEGUREC</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px; 
            line-height: 1.6; 
            background-color: #f8f9fa;
        }
        .container { 
            max-width: 900px; 
            margin: 0 auto; 
            background: white; 
            padding: 30px; 
            border-radius: 10px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .success { 
            color: #22c55e; 
            background: #f0fdf4; 
            padding: 15px; 
            border-radius: 5px; 
            border-left: 4px solid #22c55e; 
            margin: 10px 0;
        }
        .error { 
            color: #ef4444; 
            background: #fef2f2; 
            padding: 15px; 
            border-radius: 5px; 
            border-left: 4px solid #ef4444; 
            margin: 10px 0;
        }
        .warning { 
            color: #f59e0b; 
            background: #fffbeb; 
            padding: 15px; 
            border-radius: 5px; 
            border-left: 4px solid #f59e0b; 
            margin: 10px 0;
        }
        .info { 
            color: #3b82f6; 
            background: #eff6ff; 
            padding: 15px; 
            border-radius: 5px; 
            border-left: 4px solid #3b82f6; 
            margin: 10px 0;
        }
        .step { 
            background: #f8f9fa; 
            padding: 20px; 
            margin: 15px 0; 
            border-radius: 5px; 
            border: 1px solid #e5e7eb;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px 5px;
            background: #0f172a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        .btn:hover { background: #1e293b; }
        .btn-warning { background: #f59e0b; }
        .btn-warning:hover { background: #d97706; }
        .btn-danger { background: #ef4444; }
        .btn-danger:hover { background: #dc2626; }
        h1 { color: #0f172a; }
        h2 { color: #334155; margin-top: 30px; }
        .checklist { background: #f0fdf4; padding: 20px; border-radius: 5px; margin: 20px 0; }
        .checklist ul { list-style: none; padding: 0; }
        .checklist li { padding: 5px 0; }
        .checklist li:before { content: "☐ "; margin-right: 10px; }
        .checklist li.checked:before { content: "✅ "; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Gestión de Despliegue Seguro - SEGUREC</h1>
        
        <div class="warning">
            <h3>⚠️ IMPORTANTE</h3>
            <p>Este es el servidor de PRODUCCIÓN. Sigue el proceso paso a paso para evitar problemas.</p>
            <p><strong>Elimina este archivo después del despliegue exitoso.</strong></p>
        </div>

        <h2>📋 Lista de Verificación Pre-Despliegue</h2>
        <div class="checklist">
            <h3>Antes de comenzar, verifica:</h3>
            <ul>
                <li>☐ Backup del sitio original realizado</li>
                <li>☐ Nueva versión probada localmente</li>
                <li>☐ Correo ventas@segurec.com.mx configurado en el servidor</li>
                <li>☐ Acceso FTP/SFTP funcionando</li>
                <li>☐ test_email.php subido para pruebas</li>
            </ul>
        </div>

        <h2>🔄 Proceso de Despliegue Seguro</h2>
        
        <div class="step">
            <h3>Paso 1: Subir Nueva Versión a Subdirectorio</h3>
            <div class="info">
                <p><strong>Acción:</strong> Sube toda la carpeta PHP a <code>/public_html/prueba/</code></p>
                <p><strong>Resultado:</strong> El sitio original sigue funcionando en <code>/public_html/</code></p>
            </div>
            <p><strong>Estructura esperada:</strong></p>
            <pre>
/public_html/
├── index.php              (sitio original)
├── estilos.css           (sitio original)
└── /prueba/              (nueva versión)
    ├── index.php
    ├── config/
    ├── includes/
    └── test_email.php
            </pre>
        </div>

        <div class="step">
            <h3>Paso 2: Probar Email en Subdirectorio</h3>
            <div class="info">
                <p><strong>URL de prueba:</strong> <code>https://tudominio.com/prueba/test_email.php</code></p>
                <p><strong>Resultado esperado:</strong> ✅ Email enviado a ventas@segurec.com.mx</p>
            </div>
            <a href="./prueba/test_email.php" class="btn" target="_blank">🧪 Probar Email</a>
        </div>

        <div class="step">
            <h3>Paso 3: Probar Sitio Completo</h3>
            <div class="info">
                <p><strong>URL de prueba:</strong> <code>https://tudominio.com/prueba/</code></p>
                <p><strong>Verificar:</strong> Navegación, estilos, formulario de contacto</p>
            </div>
            <a href="./prueba/" class="btn" target="_blank">🌐 Ver Sitio de Prueba</a>
        </div>

        <div class="step">
            <h3>Paso 4: Hacer Backup del Sitio Original</h3>
            <div class="warning">
                <p><strong>CRÍTICO:</strong> Antes de reemplazar, hacer backup completo</p>
                <p>Crear carpeta <code>/backup_original/</code> con todos los archivos actuales</p>
            </div>
        </div>

        <div class="step">
            <h3>Paso 5: Migración Final</h3>
            <div class="info">
                <p>Si todas las pruebas son exitosas:</p>
                <ol>
                    <li>Mover contenido de <code>/prueba/</code> a <code>/public_html/</code></li>
                    <li>Eliminar carpeta <code>/prueba/</code></li>
                    <li>Eliminar <code>test_email.php</code></li>
                    <li>Eliminar <code>deploy.php</code> (este archivo)</li>
                </ol>
            </div>
        </div>

        <h2>🆘 Rollback de Emergencia</h2>
        <div class="step">
            <div class="error">
                <h3>Si algo sale mal:</h3>
                <ol>
                    <li>Eliminar todos los archivos de <code>/public_html/</code></li>
                    <li>Copiar archivos de <code>/backup_original/</code> a <code>/public_html/</code></li>
                    <li>Verificar que el sitio original funcione</li>
                </ol>
            </div>
            <a href="?action=rollback" class="btn btn-danger" onclick="return confirm('¿ESTÁS SEGURO de hacer rollback? Esta acción no se puede deshacer.')">🔄 ROLLBACK DE EMERGENCIA</a>
        </div>

        <h2>📞 Contacto de Soporte</h2>
        <div class="info">
            <p><strong>Email:</strong> ventas@segurec.com.mx</p>
            <p><strong>Teléfono:</strong> +52 899 113 5304</p>
            <p><strong>Desarrollador:</strong> DSG-UTTN</p>
        </div>

        <div style="margin-top: 40px; padding: 20px; background: #f8f9fa; border-radius: 5px; text-align: center;">
            <p><strong>Fecha:</strong> <?= date('d/m/Y H:i:s') ?></p>
            <p><em>Script de despliegue para SEGUREC Landing Page</em></p>
        </div>
    </div>

    <script>
        // Confirmaciones de seguridad
        document.addEventListener('DOMContentLoaded', function() {
            const dangerousLinks = document.querySelectorAll('.btn-danger, .btn-warning');
            dangerousLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (!confirm('¿Estás seguro de realizar esta acción?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
// Manejar acciones de rollback si se solicita
if (isset($_GET['action']) && $_GET['action'] === 'rollback') {
    echo "<div class='error'>";
    echo "<h3>🚨 Rollback solicitado</h3>";
    echo "<p>Por favor, realiza el rollback manualmente siguiendo los pasos descritos arriba.</p>";
    echo "<p>Este script no ejecuta el rollback automáticamente por seguridad.</p>";
    echo "</div>";
}
?>