<?php
/**
 * SEGUREC Landing Page - Contact Page
 * 
 * Contact page for the SEGUREC security services landing page
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Helper function for backward compatibility
function getValue($array, $key, $default = '') {
    return isset($array[$key]) ? $array[$key] : $default;
}

// Helper function for select options
function isSelected($array, $key, $value) {
    return getValue($array, $key) === $value ? 'selected' : '';
}

// Initialize session for CSRF protection
session_start();

// Initialize variables
$form_submitted = false;
$form_success = false;
$form_errors = array();
$form_data = array();
$response_message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    // Check if this is an AJAX request
    $is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
               strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    
    // For AJAX requests, capture any output and handle errors properly
    if ($is_ajax) {
        ob_start();
        error_reporting(0); // Suppress error output for AJAX
        ini_set('display_errors', 0);
    }
    
    try {
        // Get client IP for rate limiting
        $clientIP = getClientIP();
        
        // Security checks - Compatible con PHP 5.6
        $security_checks = array(
            'csrf' => validateCSRFToken(isset($_POST['csrf_token']) ? $_POST['csrf_token'] : ''),
            'rate_limit' => checkRateLimit($clientIP, 3, 300), // 3 attempts per 5 minutes
            'referrer' => $is_ajax || validateReferrer(), // Skip referrer check for AJAX
            'honeypot' => validateHoneypot(isset($_POST['website']) ? $_POST['website'] : '') // Hidden honeypot field
        );
        
        // Check security validations
        if (!$security_checks['csrf']) {
            $form_errors['csrf'] = 'Token de seguridad inválido. Por favor, intenta nuevamente.';
            logSecurityIncident('csrf_validation_failed', array('ip' => $clientIP));
        }
        
        if (!$security_checks['rate_limit']) {
            $form_errors['rate_limit'] = 'Demasiados intentos. Por favor, espera unos minutos antes de intentar nuevamente.';
            logSecurityIncident('rate_limit_exceeded', array('ip' => $clientIP));
        }
        
        if (!$security_checks['referrer']) {
            $form_errors['referrer'] = 'Solicitud no válida. Por favor, envía el formulario desde nuestro sitio web.';
            logSecurityIncident('invalid_referrer', array('ip' => $clientIP, 'referrer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'none'));
        }
        
        if (!$security_checks['honeypot']) {
            $form_errors['honeypot'] = 'Solicitud sospechosa detectada.';
            logSecurityIncident('honeypot_filled', array('ip' => $clientIP));
        }
        
        // If security checks pass, proceed with form validation
        if (empty($form_errors)) {
            // Validate form data
            $validation = validateContactForm($_POST);
            $form_errors = array_merge($form_errors, $validation['errors']);
            $form_data = $validation['data'];
            
            if ($validation['valid']) {
                // Attempt to send email
                if (sendContactEmail($form_data)) {
                    $form_success = true;
                    $response_message = '¡Gracias por contactarnos! Hemos recibido tu solicitud y nos pondremos en contacto contigo en menos de 24 horas.';
                    
                    // Log successful submission
                    logSecurityIncident('form_submission_success', array(
                        'ip' => $clientIP,
                        'email' => $form_data['email'],
                        'name' => $form_data['nombre']
                    ));
                    
                    // Clear form data on success
                    $form_data = array();
                } else {
                    $form_errors['email_send'] = 'Error al enviar el mensaje. Por favor, intenta nuevamente o contáctanos directamente por teléfono.';
                    
                    // Enhanced error message for production debugging
                    if (!isDevelopmentEnvironment()) {
                        $response_message = 'Mensaje recibido pero hubo un problema técnico con el envío. Hemos guardado tu información y te contactaremos pronto. Si es urgente, llámanos al (55) 1234-5678.';
                        
                        // Log detailed error information
                        error_log("Email send failed - Form data: " . json_encode($form_data));
                        error_log("Contact information - Phone: (55) 1234-5678, Email: gerencia@segurec.com.mx");
                    } else {
                        $response_message = 'Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.';
                    }
                    
                    // Log email send failure
                    logSecurityIncident('email_send_failed', array('ip' => $clientIP));
                }
            } else {
                $response_message = 'Por favor, corrige los errores en el formulario.';
            }
        } else {
            // Create a more specific error message based on which security check failed
            if (!$security_checks['csrf']) {
                $response_message = 'Token de seguridad inválido. Por favor, recarga la página e intenta nuevamente.';
            } elseif (!$security_checks['rate_limit']) {
                $response_message = 'Demasiados intentos. Por favor, espera unos minutos antes de intentar nuevamente.';
            } elseif (!$security_checks['referrer']) {
                $response_message = 'Solicitud no válida. Por favor, envía el formulario desde nuestro sitio web.';
            } elseif (!$security_checks['honeypot']) {
                $response_message = 'Solicitud sospechosa detectada.';
            } else {
                $response_message = 'Error de seguridad. Por favor, intenta nuevamente.';
            }
        }
        
    } catch (Exception $e) {
        $form_errors['system'] = 'Error del sistema. Por favor, intenta nuevamente.';
        $response_message = 'Error del sistema. Por favor, intenta nuevamente.';
        
        // Log the exception
        error_log('Contact form error: ' . $e->getMessage());
    }
    
    // Handle AJAX requests
    if ($is_ajax) {
        // Clean any output that might have been generated
        $unwanted_output = ob_get_clean();
        
        // Ensure clean JSON response
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code(200);
        
        $response = [
            'success' => $form_success,
            'message' => $response_message,
            'errors' => $form_errors
        ];
        
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
        exit;
    }
}

// Generate CSRF token
$csrf_token = generateCSRFToken();

// Page-specific SEO data
$seo = array(
    'title' => 'SEGUREC',
    'description' => 'Contáctanos para solicitar una cotización gratuita de nuestros servicios de seguridad privada en Reynosa, Tamaulipas. Respuesta garantizada en 24 horas.',
    'keywords' => 'contacto seguridad reynosa, cotización seguridad privada, SEGUREC contacto, servicios seguridad tamaulipas, seguridad privada reynosa, seguridad empresarial, seguridad residencial, guardias de seguridad, monitoreo 24/7, análisis de riesgos, control de acceso, consultoría de seguridad',
    'image' => publicUrl('images/logo.webp')
);

// Start output buffering to capture page content
ob_start();
?>

<!-- Include Header Component -->
<?php includeComponent('Header'); ?>

<main>
    <!-- Contact Hero Section -->
    <section class="pt-24 pb-16 bg-gradient-to-br from-navy-900 via-navy-800 to-navy-700 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-64 h-64 bg-gold-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-gold-600 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 section-container text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6" data-animate="fade-in">
                Contáctanos
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto" data-animate="slide-up">
                Estamos listos para proteger lo que más valoras. 
                Solicita tu cotización gratuita y personalizada.
            </p>
        </div>
    </section>

    <!-- Contact Information & Form -->
    <section class="py-20 bg-white">
        <div class="section-container">
            <div class="grid lg:grid-cols-3 gap-12">
                
                <!-- Contact Information -->
                <div class="lg:col-span-1" data-animate="slide-right">
                    <h2 class="text-3xl font-bold text-navy-900 mb-8">Información de Contacto</h2>
                    
                    <!-- Contact Items -->
                    <div class="space-y-8">
                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-navy-900 mb-1">Teléfono</h3>
                                <a href="tel:<?= CONTACT_PHONE ?>" class="text-gold-600 hover:text-gold-700 font-medium">
                                    (899) 107-7423
                                </a>
                                <p class="text-sm text-gray-600">Disponible 24/7</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-navy-900 mb-1">Email</h3>
                                <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-gold-600 hover:text-gold-700 font-medium">
                                    <?= CONTACT_EMAIL ?>
                                </a>
                                <p class="text-sm text-gray-600">Respuesta en 24 horas</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-navy-900 mb-1">Dirección</h3>
                                <p class="text-gray-600">
                                    Blvd del Maestro Col. Cumbres #238<br>
                                    Local #3, Reynosa, Tamaulipas
                                </p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gold-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-navy-900 mb-1">Horarios</h3>
                                <p class="text-gray-600 text-sm">
                                    Lun - Dom: 7:00 AM - 7:00 PM<br>
                                    Servicio continuo toda la semana<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <div class="mt-8 p-6 bg-green-50 rounded-xl border border-green-200">
                        <h3 class="font-semibold text-green-800 mb-2">¿Necesitas atención inmediata?</h3>
                        <p class="text-sm text-green-700 mb-4">Chatea con nosotros por WhatsApp</p>
                        <a 
                            href="https://wa.me/+528991077423?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20los%20servicios%20de%20seguridad%20de%20SEGUREC"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-semibold transition-colors"
                        >
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            Chatear por WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2" data-animate="slide-left">
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h2 class="text-3xl font-bold text-navy-900 mb-2">Solicita tu Cotización</h2>
                        <p class="text-gray-600 mb-8">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.</p>
                        
                        <!-- Success/Error Messages -->
                        <?php if ($form_submitted): ?>
                            <div id="form-message" class="mb-6 p-4 rounded-lg <?= $form_success ? 'bg-green-100 border border-green-200 text-green-700' : 'bg-red-100 border border-red-200 text-red-700' ?>">
                                <?= htmlspecialchars($response_message) ?>
                            </div>
                        <?php endif; ?>
                        
                        <form id="contact-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="space-y-6" novalidate>
                            <!-- CSRF Token -->
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
                            
                            <!-- Honeypot field (hidden from users, but visible to bots) -->
                            <div style="display: none;">
                                <label for="website">Website (leave blank):</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-2">Nombre Completo *</label>
                                    <input 
                                        type="text" 
                                        id="nombre" 
                                        name="nombre" 
                                        required
                                        value="<?= htmlspecialchars(getValue($form_data, 'nombre')) ?>"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors <?= isset($form_errors['nombre']) ? 'border-red-500' : '' ?>"
                                        placeholder="Tu nombre completo"
                                    >
                                    <?php if (isset($form_errors['nombre'])): ?>
                                        <p class="mt-1 text-sm text-red-600"><?= htmlspecialchars($form_errors['nombre']) ?></p>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <label for="empresa" class="block text-sm font-semibold text-gray-700 mb-2">Empresa</label>
                                    <input 
                                        type="text" 
                                        id="empresa" 
                                        name="empresa" 
                                        value="<?= htmlspecialchars(getValue($form_data, 'empresa')) ?>"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors"
                                        placeholder="Nombre de tu empresa"
                                    >
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        required
                                        value="<?= htmlspecialchars(getValue($form_data, 'email')) ?>"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors <?= isset($form_errors['email']) ? 'border-red-500' : '' ?>"
                                        placeholder="tu@email.com"
                                    >
                                    <?php if (isset($form_errors['email'])): ?>
                                        <p class="mt-1 text-sm text-red-600"><?= htmlspecialchars($form_errors['email']) ?></p>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <label for="telefono" class="block text-sm font-semibold text-gray-700 mb-2">Teléfono *</label>
                                    <input 
                                        type="tel" 
                                        id="telefono" 
                                        name="telefono" 
                                        required
                                        value="<?= htmlspecialchars(getValue($form_data, 'telefono')) ?>"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors <?= isset($form_errors['telefono']) ? 'border-red-500' : '' ?>"
                                        placeholder="(899) 107-7423"
                                    >
                                    <?php if (isset($form_errors['telefono'])): ?>
                                        <p class="mt-1 text-sm text-red-600"><?= htmlspecialchars($form_errors['telefono']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div>
                                <label for="servicio" class="block text-sm font-semibold text-gray-700 mb-2">Servicio de Interés</label>
                                <select 
                                    id="servicio" 
                                    name="servicio" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors"
                                >
                                    <option value="">Selecciona un servicio</option>
                                    <option value="guardia" <?= isSelected($form_data, 'servicio', 'guardia') ?>>Guardia de Seguridad</option>
                                    <option value="patrullaje" <?= isSelected($form_data, 'servicio', 'patrullaje') ?>>Patrullaje</option>
                                    <option value="monitoreo" <?= isSelected($form_data, 'servicio', 'monitoreo') ?>>Monitoreo 24/7</option>
                                    <option value="analisis" <?= isSelected($form_data, 'servicio', 'analisis') ?>>Análisis de Riesgos</option>
                                    <option value="control" <?= isSelected($form_data, 'servicio', 'control') ?>>Control de Acceso</option>
                                    <option value="consultoria" <?= isSelected($form_data, 'servicio', 'consultoria') ?>>Consultoría</option>
                                    <option value="otro" <?= isSelected($form_data, 'servicio', 'otro') ?>>Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="mensaje" class="block text-sm font-semibold text-gray-700 mb-2">Mensaje *</label>
                                <textarea 
                                    id="mensaje" 
                                    name="mensaje" 
                                    rows="5" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors resize-vertical <?= isset($form_errors['mensaje']) ? 'border-red-500' : '' ?>"
                                    placeholder="Cuéntanos sobre tus necesidades de seguridad..."
                                ><?= htmlspecialchars(getValue($form_data, 'mensaje')) ?></textarea>
                                <?php if (isset($form_errors['mensaje'])): ?>
                                    <p class="mt-1 text-sm text-red-600"><?= htmlspecialchars($form_errors['mensaje']) ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="flex items-start">
                                <input 
                                    type="checkbox" 
                                    id="acepto" 
                                    name="acepto" 
                                    required
                                    class="mt-1 w-4 h-4 text-gold-600 border-gray-300 rounded focus:ring-gold-500 <?= isset($form_errors['acepto']) ? 'border-red-500' : '' ?>"
                                >
                                <label for="acepto" class="ml-3 text-sm text-gray-600">
                                    Acepto la <a href="#" class="text-gold-600 hover:text-gold-700">política de privacidad</a> 
                                    y autorizo el tratamiento de mis datos personales *
                                </label>
                            </div>
                            <?php if (isset($form_errors['acepto'])): ?>
                                <p class="text-sm text-red-600"><?= htmlspecialchars($form_errors['acepto']) ?></p>
                            <?php endif; ?>

                            <!-- General form errors -->
                            <?php if (isset($form_errors['csrf']) || isset($form_errors['email_send'])): ?>
                                <div class="p-4 bg-red-100 border border-red-200 rounded-lg">
                                    <?php if (isset($form_errors['csrf'])): ?>
                                        <p class="text-sm text-red-600"><?= htmlspecialchars($form_errors['csrf']) ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($form_errors['email_send'])): ?>
                                        <p class="text-sm text-red-600"><?= htmlspecialchars($form_errors['email_send']) ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <button 
                                type="submit" 
                                id="submit-btn"
                                class="w-full btn-primary text-lg py-4 justify-center"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                <span id="submit-text">Enviar Solicitud</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="py-16 bg-gradient-to-r from-gray-50 to-gray-100">
        <div class="section-container text-center">
            <h2 class="text-3xl font-bold text-navy-900 mb-8" data-animate="fade-in">
                Confían en Nosotros
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-6 mb-12 max-w-4xl mx-auto" data-animate="slide-up">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold-600 mb-2">24h</div>
                    <div class="text-sm text-gray-600">Tiempo de respuesta máximo</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold-600 mb-2">100%</div>
                    <div class="text-sm text-gray-600">Cotizaciones gratuitas</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold-600 mb-2">10+</div>
                    <div class="text-sm text-gray-600">Años de experiencia</div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Include Footer Component -->
<?php includeComponent('Footer'); ?>

<!-- Include Floating Buttons Component -->
<?php includeComponent('FloatingButtons'); ?>

<!-- Contact Form JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const submitText = document.getElementById('submit-text');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Disable submit button and show loading state
            submitBtn.disabled = true;
            submitText.textContent = 'Enviando...';
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
            
            // Clear previous error states
            clearErrorStates();
            
            // Create FormData object
            const formData = new FormData(form);
            
            // Send AJAX request
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                // Check if response is ok
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                // Check content type
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    return response.text().then(text => {
                        console.error('Expected JSON but received:', text);
                        throw new Error('El servidor devolvió una respuesta no válida');
                    });
                }
                
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showMessage(data.message, 'success');
                    form.reset();
                } else {
                    showMessage(data.message, 'error');
                    
                    // Show field-specific errors
                    if (data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            showFieldError(field, data.errors[field]);
                        });
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('Error de conexión. Por favor, intenta nuevamente.', 'error');
            })
            .finally(() => {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitText.textContent = 'Enviar Solicitud';
                submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            });
        });
    }
    
    // Function to show messages
    function showMessage(message, type) {
        // Remove existing message
        const existingMessage = document.getElementById('form-message');
        if (existingMessage) {
            existingMessage.remove();
        }
        
        // Create new message element
        const messageDiv = document.createElement('div');
        messageDiv.id = 'form-message';
        messageDiv.className = `mb-6 p-4 rounded-lg ${
            type === 'success' 
                ? 'bg-green-100 border border-green-200 text-green-700' 
                : 'bg-red-100 border border-red-200 text-red-700'
        }`;
        messageDiv.textContent = message;
        
        // Insert message before form
        form.parentNode.insertBefore(messageDiv, form);
        
        // Scroll to message
        messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Auto-hide success message after 5 seconds
        if (type === 'success') {
            setTimeout(() => {
                messageDiv.style.transition = 'opacity 0.5s ease-out';
                messageDiv.style.opacity = '0';
                setTimeout(() => messageDiv.remove(), 500);
            }, 5000);
        }
    }
    
    // Function to show field-specific errors
    function showFieldError(fieldName, errorMessage) {
        const field = document.getElementById(fieldName);
        if (!field) return;
        
        // Add error styling to field
        field.classList.add('border-red-500');
        
        // Remove existing error message
        const existingError = field.parentNode.querySelector('.text-red-600');
        if (existingError) {
            existingError.remove();
        }
        
        // Add new error message
        const errorP = document.createElement('p');
        errorP.className = 'mt-1 text-sm text-red-600';
        errorP.textContent = errorMessage;
        field.parentNode.appendChild(errorP);
    }
    
    // Function to clear all error states
    function clearErrorStates() {
        // Remove error borders
        form.querySelectorAll('.border-red-500').forEach(field => {
            field.classList.remove('border-red-500');
        });
        
        // Remove error messages
        form.querySelectorAll('.text-red-600').forEach(error => {
            error.remove();
        });
    }
    
    // Real-time validation
    const requiredFields = ['nombre', 'email', 'telefono', 'mensaje'];
    
    requiredFields.forEach(fieldName => {
        const field = document.getElementById(fieldName);
        if (field) {
            field.addEventListener('blur', function() {
                validateField(fieldName, this.value.trim());
            });
            
            field.addEventListener('input', function() {
                // Remove error state on input
                this.classList.remove('border-red-500');
                const errorMsg = this.parentNode.querySelector('.text-red-600');
                if (errorMsg) {
                    errorMsg.remove();
                }
            });
        }
    });
    
    // Email specific validation
    const emailField = document.getElementById('email');
    if (emailField) {
        emailField.addEventListener('blur', function() {
            const email = this.value.trim();
            if (email && !isValidEmail(email)) {
                showFieldError('email', 'El formato del email no es válido');
            }
        });
    }
    
    // Function to validate individual fields
    function validateField(fieldName, value) {
        switch (fieldName) {
            case 'nombre':
                if (!value) {
                    showFieldError(fieldName, 'El nombre es obligatorio');
                } else if (value.length < 2) {
                    showFieldError(fieldName, 'El nombre debe tener al menos 2 caracteres');
                }
                break;
            case 'email':
                if (!value) {
                    showFieldError(fieldName, 'El email es obligatorio');
                } else if (!isValidEmail(value)) {
                    showFieldError(fieldName, 'El formato del email no es válido');
                }
                break;
            case 'telefono':
                if (!value) {
                    showFieldError(fieldName, 'El teléfono es obligatorio');
                } else if (value.replace(/[^0-9]/g, '').length < 10) {
                    showFieldError(fieldName, 'El teléfono debe tener al menos 10 dígitos');
                }
                break;
            case 'mensaje':
                if (!value) {
                    showFieldError(fieldName, 'El mensaje es obligatorio');
                } else if (value.length < 10) {
                    showFieldError(fieldName, 'El mensaje debe tener al menos 10 caracteres');
                }
                break;
        }
    }
    
    // Email validation helper
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Format phone number on input
    const phoneField = document.getElementById('telefono');
    if (phoneField) {
        phoneField.addEventListener('input', function() {
            let value = this.value.replace(/[^\d]/g, '');
            if (value.length >= 10) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            }
            this.value = value;
        });
    }
});
</script>

<?php
// Capture page content
$content = ob_get_clean();

// Include the layout template
include __DIR__ . '/templates/layout.php';
?>
