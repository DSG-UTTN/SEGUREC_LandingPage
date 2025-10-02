<?php
/**
 * SEGUREC Landing Page - Contact Page
 * 
 * Contact page for the SEGUREC security services landing page
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Page-specific SEO data
$seo = [
    'title' => 'Contacto - SEGUREC Servicios de Seguridad',
    'description' => 'Contáctanos para solicitar una cotización gratuita de nuestros servicios de seguridad privada en Reynosa, Tamaulipas. Respuesta garantizada en 24 horas.',
    'keywords' => 'contacto seguridad reynosa, cotización seguridad privada, SEGUREC contacto, servicios seguridad tamaulipas',
    'image' => publicUrl('images/contacto.jpg')
];

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
                                    (899) 113-5304
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
                                    Lun - Vie: 8:00 AM - 6:00 PM<br>
                                    Sáb: 9:00 AM - 2:00 PM<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <div class="mt-8 p-6 bg-green-50 rounded-xl border border-green-200">
                        <h3 class="font-semibold text-green-800 mb-2">¿Necesitas atención inmediata?</h3>
                        <p class="text-sm text-green-700 mb-4">Chatea con nosotros por WhatsApp</p>
                        <a 
                            href="https://wa.me/+5218991248906?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20los%20servicios%20de%20seguridad%20de%20SEGUREC"
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
                        
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-2">Nombre Completo *</label>
                                    <input 
                                        type="text" 
                                        id="nombre" 
                                        name="nombre" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors"
                                        placeholder="Tu nombre completo"
                                    >
                                </div>
                                <div>
                                    <label for="empresa" class="block text-sm font-semibold text-gray-700 mb-2">Empresa</label>
                                    <input 
                                        type="text" 
                                        id="empresa" 
                                        name="empresa" 
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
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors"
                                        placeholder="tu@email.com"
                                    >
                                </div>
                                <div>
                                    <label for="telefono" class="block text-sm font-semibold text-gray-700 mb-2">Teléfono *</label>
                                    <input 
                                        type="tel" 
                                        id="telefono" 
                                        name="telefono" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors"
                                        placeholder="(899) 123-4567"
                                    >
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
                                    <option value="guardia">Guardia de Seguridad</option>
                                    <option value="patrullaje">Patrullaje</option>
                                    <option value="monitoreo">Monitoreo 24/7</option>
                                    <option value="analisis">Análisis de Riesgos</option>
                                    <option value="control">Control de Acceso</option>
                                    <option value="consultoria">Consultoría</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="mensaje" class="block text-sm font-semibold text-gray-700 mb-2">Mensaje *</label>
                                <textarea 
                                    id="mensaje" 
                                    name="mensaje" 
                                    rows="5" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-colors resize-vertical"
                                    placeholder="Cuéntanos sobre tus necesidades de seguridad..."
                                ></textarea>
                            </div>

                            <div class="flex items-start">
                                <input 
                                    type="checkbox" 
                                    id="acepto" 
                                    name="acepto" 
                                    required
                                    class="mt-1 w-4 h-4 text-gold-600 border-gray-300 rounded focus:ring-gold-500"
                                >
                                <label for="acepto" class="ml-3 text-sm text-gray-600">
                                    Acepto la <a href="#" class="text-gold-600 hover:text-gold-700">política de privacidad</a> 
                                    y autorizo el tratamiento de mis datos personales *
                                </label>
                            </div>

                            <button 
                                type="submit" 
                                class="w-full btn-primary text-lg py-4 justify-center"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                Enviar Solicitud
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

<?php
// Capture page content
$content = ob_get_clean();

// Include the layout template
include __DIR__ . '/templates/layout.php';
?>