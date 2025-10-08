<?php
/**
 * Layout Helper Functions
 * 
 * Common functions used across the application
 */

/**
 * Include component file
 */
function includeComponent($componentName, $data = array()) {
    $componentFile = COMPONENTS_PATH . '/' . $componentName . '.php';
    if (file_exists($componentFile)) {
        // Extract data array to variables
        extract($data);
        include $componentFile;
    } else {
        echo "<!-- Component not found: {$componentName} -->";
    }
}

/**
 * Render SEO meta tags
 */
function renderSeoMeta($seo = array()) {
    global $seoDefaults;
    
    // Merge with defaults
    $seo = array_merge($seoDefaults, $seo);
    
    $currentUrl = getCurrentUrl();
    $imageUrl = $seo['image'];
    
    // Basic SEO tags
    echo '<title>' . e($seo['title']) . '</title>' . "\n";
    echo '<meta name="description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta name="keywords" content="' . e($seo['keywords']) . '">' . "\n";
    echo '<meta name="author" content="' . e($seo['author']) . '">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
    echo '<link rel="canonical" href="' . e($currentUrl) . '">' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . e($currentUrl) . '">' . "\n";
    echo '<meta property="og:title" content="' . e($seo['title']) . '">' . "\n";
    echo '<meta property="og:description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta property="og:image" content="' . e($imageUrl) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . e(SITE_NAME) . '">' . "\n";
    echo '<meta property="og:locale" content="' . e($seo['locale']) . '">' . "\n";
    
    // Twitter Card tags
    echo '<meta property="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta property="twitter:url" content="' . e($currentUrl) . '">' . "\n";
    echo '<meta property="twitter:title" content="' . e($seo['title']) . '">' . "\n";
    echo '<meta property="twitter:description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta property="twitter:image" content="' . e($imageUrl) . '">' . "\n";
}

/**
 * Render favicon links
 */
function renderFavicons() {
    ?>
    <!-- Favicon y App Icons - Rutas absolutas para Railway -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#0f172a">
    <meta name="msapplication-TileImage" content="/public/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#0f172a">
    <?php
}

/**
 * Check if current page is active
 */
function isActivePage($page) {
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
    return $currentPage === $page ? 'active' : '';
}

/**
 * Get page title based on current page
 */
function getPageTitle($customTitle = null) {
    if ($customTitle) {
        return $customTitle;
    }
    
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
    
    switch ($currentPage) {
        case 'index':
            return 'SEGUREC - Servicios Integrales de Seguridad en Reynosa, Tamaulipas';
        case 'contacto':
            return 'Contacto - SEGUREC Servicios de Seguridad';
        default:
            return 'SEGUREC - Servicios de Seguridad Privada';
    }
}

/**
 * Contact Form Functions
 */

/**
 * Validate and sanitize contact form data
 */
function validateContactForm($data) {
    $errors = array();
    $sanitized = array();
    
    // Nombre - Required
    if (empty($data['nombre'])) {
        $errors['nombre'] = 'El nombre es obligatorio';
    } else {
        $sanitized['nombre'] = trim(filter_var($data['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if (strlen($sanitized['nombre']) < 2) {
            $errors['nombre'] = 'El nombre debe tener al menos 2 caracteres';
        }
    }
    
    // Email - Required and valid format
    if (empty($data['email'])) {
        $errors['email'] = 'El email es obligatorio';
    } else {
        $sanitized['email'] = filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL);
        if (!$sanitized['email']) {
            $errors['email'] = 'El formato del email no es válido';
        }
    }
    
    // Teléfono - Required
    if (empty($data['telefono'])) {
        $errors['telefono'] = 'El teléfono es obligatorio';
    } else {
        $sanitized['telefono'] = preg_replace('/[^0-9+\-\(\)\s]/', '', trim($data['telefono']));
        if (strlen($sanitized['telefono']) < 10) {
            $errors['telefono'] = 'El teléfono debe tener al menos 10 dígitos';
        }
    }
    
    // Empresa - Optional
    $sanitized['empresa'] = !empty($data['empresa']) ? trim(filter_var($data['empresa'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)) : '';
    
    // Servicio - Optional
    $sanitized['servicio'] = !empty($data['servicio']) ? trim(filter_var($data['servicio'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)) : '';
    
    // Mensaje - Required
    if (empty($data['mensaje'])) {
        $errors['mensaje'] = 'El mensaje es obligatorio';
    } else {
        $sanitized['mensaje'] = trim(filter_var($data['mensaje'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if (strlen($sanitized['mensaje']) < 10) {
            $errors['mensaje'] = 'El mensaje debe tener al menos 10 caracteres';
        }
    }
    
    // Acepto términos - Required
    if (empty($data['acepto'])) {
        $errors['acepto'] = 'Debes aceptar la política de privacidad';
    }
    
    return [
        'errors' => $errors,
        'data' => $sanitized,
        'valid' => empty($errors)
    ];
}

/**
 * Send contact email - Enhanced version compatible with original configuration
 */
function sendContactEmail($data) {
    try {
        // Use configuration from config.php
        $to = CONTACT_EMAIL . ', gerencia@segurec.com.mx'; // Enviar a ambos correos
        $subject = 'Nueva consulta desde el sitio web - SEGUREC';
        
        // Get sender information
        $fromName = htmlspecialchars($data['nombre']);
        $fromEmail = CONTACT_EMAIL; // Use our domain email as sender
        $replyToEmail = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        
        // Create HTML email content (similar to original envio_formulario.php)
        $htmlContent = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Nueva consulta desde el sitio web</title>
            <style>
                body { 
                    font-family: 'Arial', sans-serif; 
                    line-height: 1.6; 
                    color: #333; 
                    margin: 0; 
                    padding: 0; 
                    background-color: #f3f3f3; 
                }
                .container {
                    margin: 0 auto;
                    width: 90%;
                    max-width: 600px;
                    background-color: #ffffff;
                    margin-top: 20px;
                }
                .header { 
                    background-color: #0f172a; 
                    color: #d4af37; 
                    padding: 20px; 
                    text-align: center; 
                    border-radius: 5px 5px 0 0;
                }
                .content { 
                    padding: 40px; 
                    background-color: #ffffff; 
                    border-radius: 0 0 5px 5px;
                }
                .field { 
                    margin-bottom: 15px; 
                }
                .label { 
                    font-weight: bold; 
                    color: #0f172a; 
                    display: block;
                    margin-bottom: 5px;
                }
                .value { 
                    padding: 10px; 
                    background-color: #f9f9f9; 
                    border-radius: 5px; 
                    border-left: 4px solid #d4af37;
                }
                .logo {
                    max-width: 150px;
                    height: auto;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>SEGUREC - Nueva Consulta Web</h2>
                    <p style='margin: 0; font-size: 14px;'>Formulario de contacto del sitio web</p>
                </div>
                <div class='content'>
                    <p>Se ha recibido una nueva consulta desde el sitio web:</p>
                    
                    <div class='field'>
                        <span class='label'>Nombre:</span>
                        <div class='value'>" . htmlspecialchars($data['nombre']) . "</div>
                    </div>
                    
                    <div class='field'>
                        <span class='label'>Correo Electrónico:</span>
                        <div class='value'>" . htmlspecialchars($data['email']) . "</div>
                    </div>
                    
                    <div class='field'>
                        <span class='label'>Teléfono:</span>
                        <div class='value'>" . htmlspecialchars($data['telefono']) . "</div>
                    </div>";
        
        if (!empty($data['empresa'])) {
            $htmlContent .= "
                    <div class='field'>
                        <span class='label'>Empresa:</span>
                        <div class='value'>" . htmlspecialchars($data['empresa']) . "</div>
                    </div>";
        }
        
        if (!empty($data['servicio'])) {
            $htmlContent .= "
                    <div class='field'>
                        <span class='label'>Servicio de Interés:</span>
                        <div class='value'>" . htmlspecialchars($data['servicio']) . "</div>
                    </div>";
        }
        
        $htmlContent .= "
                    <div class='field'>
                        <span class='label'>Mensaje:</span>
                        <div class='value'>" . nl2br(htmlspecialchars($data['mensaje'])) . "</div>
                    </div>
                    
                    <div class='field'>
                        <span class='label'>Fecha y Hora:</span>
                        <div class='value'>" . date('d/m/Y H:i:s') . "</div>
                    </div>
                    
                    <hr style='margin: 30px 0; border: none; border-top: 1px solid #ddd;'>
                    <p style='font-size: 12px; color: #666; text-align: center;'>
                        Este mensaje fue enviado desde el formulario de contacto en segurec.com.mx
                    </p>
                </div>
            </div>
        </body>
        </html>";
        
        // Enhanced headers similar to original version
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        
        $headers = "From: $fromName <$fromEmail>\r\n";
        $headers .= "Reply-To: $replyToEmail\r\n";
        $headers .= "Return-Path: $fromEmail\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"{$mime_boundary}\"\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        
        // Multipart message body
        $message = "--{$mime_boundary}\r\n";
        $message .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $htmlContent . "\r\n\r\n";
        $message .= "--{$mime_boundary}--";
        
        $returnpath = "-f" . $fromEmail;
        
        // In development environment, save email to file instead of sending
        if (isDevelopmentEnvironment()) {
            return saveEmailToFile($to, $subject, $message, $data);
        }
        
        // Send email using mail() function like original version
        $success = @mail($to, $subject, $message, $headers, $returnpath);
        
        // Enhanced logging for debugging
        if (!isDevelopmentEnvironment()) {
            error_log("Email attempt - To: $to, From: $fromEmail, Reply-To: $replyToEmail");
            error_log("Mail function result: " . ($success ? 'SUCCESS' : 'FAILED'));
            if (!$success) {
                error_log("Last PHP error: " . print_r(error_get_last(), true));
                error_log("Mail configuration check:");
                error_log("- SMTP: " . ini_get('SMTP'));
                error_log("- smtp_port: " . ini_get('smtp_port'));
                error_log("- sendmail_from: " . ini_get('sendmail_from'));
                error_log("- sendmail_path: " . ini_get('sendmail_path'));
            }
        }
        
        // Log email attempt
        if ($success) {
            error_log("Contact email sent successfully to: $to");
            // Send confirmation email to user
            sendConfirmationEmail($data);
        } else {
            error_log("Failed to send contact email to: $to");
            
            // If mail() fails in production, save to file as backup
            if (!isDevelopmentEnvironment()) {
                error_log("Attempting to save email to file as backup...");
                $fileSuccess = saveEmailToFile($to, $subject, $message, $data, 'failed_emails');
                error_log("File backup result: " . ($fileSuccess ? 'SUCCESS' : 'FAILED'));
                
                // For now, return true if we at least saved to file
                // This prevents the user from seeing an error when hosting doesn't support mail()
                return $fileSuccess;
            }
        }
        
        return $success;
    } catch (Exception $e) {
        error_log("Exception in sendContactEmail: " . $e->getMessage());
        return false;
        return $success;
        
    } catch (Exception $e) {
        error_log("Exception in sendContactEmail: " . $e->getMessage());
        return false;
    }
}

/**
 * Check if we're in development environment
 */
function isDevelopmentEnvironment() {
    // Check if running from command line (CLI)
    $isCLI = php_sapi_name() === 'cli';
    
    // Check for localhost in various ways
    $isLocalhost = in_array(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '', [
        'localhost',
        '127.0.0.1',
        'localhost:8000',
        'localhost:8080',
        'localhost:3000'
    ]);
    
    // Check server name
    $isLocalServer = in_array(isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '', [
        'localhost',
        '127.0.0.1'
    ]);
    
    // Check for Railway deployment (should NOT be considered development)
    $isRailway = strpos(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '', '.up.railway.app') !== false;
    
    // Force development mode for local testing only
    $isLocalDevelopment = ($isCLI || $isLocalhost || $isLocalServer || 
                          strpos(__DIR__, 'localhost') !== false ||
                          strpos(__DIR__, 'DevHub') !== false) && !$isRailway;
    
    return $isLocalDevelopment;
}

/**
 * Save email to file for development purposes
 */
function saveEmailToFile($to, $subject, $message, $data, $subdir = 'emails') {
    try {
        // Create emails directory if it doesn't exist
        $emailDir = BASE_PATH . '/logs/' . $subdir;
        if (!is_dir($emailDir)) {
            if (!mkdir($emailDir, 0755, true)) {
                return false;
            }
        }
        
        // Create email file
        $timestamp = date('Y-m-d_H-i-s');
        $filename = "contact_email_{$timestamp}.html";
        $filepath = $emailDir . '/' . $filename;
        
        // Email content with metadata
        $emailContent = "<!--\nTo: $to\nSubject: $subject\nFrom: " . $data['email'] . "\nDate: " . date('Y-m-d H:i:s') . "\n-->\n\n" . $message;
        
        // Save to file
        if (file_put_contents($filepath, $emailContent)) {
            error_log("Contact email saved to file: $filepath");
            
            // Also send confirmation email to user in development
            sendConfirmationEmail($data);
            
            return true;
        }
        
        return false;
        
    } catch (Exception $e) {
        error_log("Failed to save email to file: " . $e->getMessage());
        return false;
    }
}

/**
 * Send confirmation email to user
 */
function sendConfirmationEmail($data) {
    $to = $data['email'];
    $subject = 'Confirmación de solicitud recibida - SEGUREC';
    
    $message = "
    <html>
    <head>
        <title>Confirmación de solicitud</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background-color: #0f172a; color: #d4af37; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .footer { background-color: #e5e7eb; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>SEGUREC - Confirmación de Solicitud</h2>
        </div>
        <div class='content'>
            <p>Estimado/a " . htmlspecialchars($data['nombre']) . ",</p>
            
            <p>Hemos recibido su solicitud de cotización correctamente. Nuestro equipo de especialistas la revisará y se pondrá en contacto con usted en un plazo máximo de 24 horas.</p>
            
            <p><strong>Resumen de su solicitud:</strong></p>
            <ul>
                <li><strong>Nombre:</strong> " . htmlspecialchars($data['nombre']) . "</li>
                <li><strong>Email:</strong> " . htmlspecialchars($data['email']) . "</li>
                <li><strong>Teléfono:</strong> " . htmlspecialchars($data['telefono']) . "</li>";
    
    if (!empty($data['empresa'])) {
        $message .= "<li><strong>Empresa:</strong> " . htmlspecialchars($data['empresa']) . "</li>";
    }
    
    if (!empty($data['servicio'])) {
        $message .= "<li><strong>Servicio:</strong> " . htmlspecialchars($data['servicio']) . "</li>";
    }
    
    $message .= "
            </ul>
            
            <p>Mientras tanto, si tiene alguna consulta urgente, puede contactarnos directamente:</p>
            <ul>
                <li><strong>Teléfono:</strong> " . CONTACT_PHONE . "</li>
                <li><strong>Email:</strong> " . CONTACT_EMAIL . "</li>
                <li><strong>WhatsApp:</strong> <a href='https://wa.me/+528991077423'>+52 899 107 7423</a></li>
            </ul>
            
            <p>Gracias por confiar en SEGUREC para sus necesidades de seguridad.</p>
            
            <p>Atentamente,<br>
            El equipo de SEGUREC</p>
        </div>
        <div class='footer'>
            <p>SEGUREC - Servicios Integrales de Seguridad<br>
            Blvd del Maestro Col. Cumbres #238, Local #3, Reynosa, Tamaulipas<br>
            www.segurec.com.mx</p>
        </div>
    </body>
    </html>";
    
    $headers = array(
        'MIME-Version' => '1.0',
        'Content-type' => 'text/html; charset=UTF-8',
        'From' => 'ventas@segurec.com.mx',
        'Return-Path' => 'ventas@segurec.com.mx',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    
    $headerString = '';
    foreach ($headers as $key => $value) {
        $headerString .= $key . ': ' . $value . "\r\n";
    }
    
    // In development, save confirmation email to file
    if (isDevelopmentEnvironment()) {
        try {
            $emailDir = BASE_PATH . '/logs/emails';
            if (!is_dir($emailDir)) {
                mkdir($emailDir, 0755, true);
            }
            
            $timestamp = date('Y-m-d_H-i-s');
            $filename = "confirmation_email_{$timestamp}.html";
            $filepath = $emailDir . '/' . $filename;
            
            $emailContent = "<!--\nTo: $to\nSubject: $subject\nFrom: no-reply@segurec.com.mx\nDate: " . date('Y-m-d H:i:s') . "\n-->\n\n" . $message;
            
            if (file_put_contents($filepath, $emailContent)) {
                error_log("Confirmation email saved to file: $filepath");
                return true;
            }
        } catch (Exception $e) {
            error_log("Failed to save confirmation email: " . $e->getMessage());
        }
        return false;
    }
    
    return mail($to, $subject, $message, $headerString);
}

/**
 * Generate CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (!isset($_SESSION['csrf_token'])) {
        // Generar token CSRF compatible con PHP 5.6
        $token = '';
        for ($i = 0; $i < 32; $i++) {
            $token .= dechex(mt_rand(0, 15));
        }
        $_SESSION['csrf_token'] = $token;
    }
    
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 */
function validateCSRFToken($token) {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Rate limiting for form submissions
 */
function checkRateLimit($identifier, $maxAttempts = 5, $timeWindow = 300) {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $key = 'rate_limit_' . md5($identifier);
    $now = time();
    
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = array();
    }
    
    // Remove old attempts outside time window
    $_SESSION[$key] = array_filter($_SESSION[$key], function($timestamp) use ($now, $timeWindow) {
        return ($now - $timestamp) < $timeWindow;
    });
    
    // Check if rate limit exceeded
    if (count($_SESSION[$key]) >= $maxAttempts) {
        return false;
    }
    
    // Add current attempt
    $_SESSION[$key][] = $now;
    
    return true;
}

/**
 * Get client IP address
 */
function getClientIP() {
    $ipKeys = ['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 
               'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 
               'REMOTE_ADDR'];
    
    foreach ($ipKeys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            $ip = trim($_SERVER[$key]);
            if (filter_var($ip, FILTER_VALIDATE_IP, 
                FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                return $ip;
            }
        }
    }
    
    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
}

/**
 * Validate referrer for additional security
 */
function validateReferrer() {
    $validDomains = [
        'segurec.com.mx',
        'www.segurec.com.mx',
        'localhost',
        '127.0.0.1',
        'localhost:8000',
        'localhost:8080',
        'localhost:3000'
    ];
    
    // Add Railway domain pattern (Railway generates URLs like: project-name.up.railway.app)
    $railwayPattern = '/\.up\.railway\.app$/';
    
    if (!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])) {
        return true; // Allow empty referrer for direct access and some AJAX requests
    }
    
    $referrerHost = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    $referrerPort = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PORT);
    
    // Build referrer with port if exists
    $fullReferrer = $referrerHost;
    if ($referrerPort) {
        $fullReferrer .= ':' . $referrerPort;
    }
    
    // Check against valid domains
    $isValidDomain = in_array($referrerHost, $validDomains) || in_array($fullReferrer, $validDomains);
    
    // Check if it's a Railway domain
    $isRailwayDomain = preg_match($railwayPattern, $referrerHost);
    
    return $isValidDomain || $isRailwayDomain;
}

/**
 * Honeypot field validation
 */
function validateHoneypot($honeypotValue) {
    // Honeypot field should be empty (filled by bots)
    return empty($honeypotValue);
}

/**
 * Log security incidents
 */
function logSecurityIncident($type, $details = array()) {
    try {
        $logData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'ip' => getClientIP(),
            'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'unknown',
            'type' => $type,
            'details' => $details
        ];
        
        $logEntry = date('Y-m-d H:i:s') . " [SECURITY] " . json_encode($logData) . "\n";
        
        // Create logs directory if it doesn't exist
        $logDir = BASE_PATH . '/logs';
        if (!is_dir($logDir)) {
            if (!mkdir($logDir, 0755, true)) {
                // If can't create directory, just return silently
                return;
            }
        }
        
        // Write to log file
        $logFile = $logDir . '/security.log';
        file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
    } catch (Exception $e) {
        // Log to PHP error log if our logging fails
        error_log('Failed to write security log: ' . $e->getMessage());
    }
}