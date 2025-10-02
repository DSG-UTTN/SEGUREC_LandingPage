<?php
/**
 * SEGUREC Landing Page - Home Page
 * 
 * Main homepage for the SEGUREC security services landing page
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Page-specific SEO data
$seo = [
    'title' => 'SEGUREC',
    'description' => 'Empresa líder en servicios de seguridad privada en Reynosa, Tamaulipas. Ofrecemos guardias capacitados, patrullaje, monitoreo 24/7 y soluciones integrales de protección.',
    'keywords' => SITE_KEYWORDS,
    'image' => publicUrl('images/portada.png')
];

// Start output buffering to capture page content
ob_start();
?>

<!-- Include Header Component -->
<?php includeComponent('Header'); ?>

<main>
    <!-- Hero Section -->
    <section id="inicio">
        <?php includeComponent('Hero'); ?>
    </section>

    <!-- Mission, Vision & Values -->
    <section id="mision-vision" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <?php includeComponent('MissionVision'); ?>
    </section>

    <!-- About Us -->
    <section id="nosotros" class="py-20 bg-white">
        <?php includeComponent('About'); ?>
    </section>

    <!-- Services -->
    <section id="servicios" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <?php includeComponent('Services'); ?>
    </section>

    <!-- Why Choose Us -->
    <section id="por-que-elegirnos" class="py-20 bg-white">
        <?php includeComponent('WhyChooseUs'); ?>
    </section>

    <!-- Call to Action - Contact -->
    <section class="py-20 bg-gradient-to-br from-navy-900 via-navy-800 to-navy-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-[url('<?= publicUrl('images/fondo_servicios.jpg') ?>')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-navy-900/95 via-navy-800/90 to-navy-900/95"></div>
        
        <!-- Floating geometric shapes -->
        <div class="absolute top-10 left-10 w-16 h-16 border border-gold-500/30 rotate-45 animate-pulse"></div>
        <div class="absolute top-20 right-20 w-20 h-20 border border-gold-400/20 rounded-full animate-bounce-slow"></div>
        <div class="absolute bottom-16 left-1/4 w-12 h-12 bg-gold-500/10 rotate-12 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-14 h-14 border border-gold-600/25 rotate-45"></div>
        
        <div class="relative z-10 section-container text-center">
            <div class="max-w-4xl mx-auto" data-animate="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    ¿Listo para <span class="text-gold-400">Proteger</span> tu Empresa?
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    No esperes a ser víctima de la inseguridad. Contrata nuestros servicios profesionales 
                    de seguridad y mantén protegido lo que más valoras.
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-6 mb-12 max-w-4xl mx-auto">
                    <div class="text-center" data-animate="slide-up">
                        <div class="text-3xl md:text-4xl font-bold text-gold-400 mb-2">10+</div>
                        <div class="text-sm text-gray-300">Años de Experiencia</div>
                    </div>
                    <div class="text-center" data-animate="slide-up">
                        <div class="text-3xl md:text-4xl font-bold text-gold-400 mb-2">24/7</div>
                        <div class="text-sm text-gray-300">Servicio Continuo</div>
                    </div>
                    <div class="text-center" data-animate="slide-up">
                        <div class="text-3xl md:text-4xl font-bold text-gold-400 mb-2">100%</div>
                        <div class="text-sm text-gray-300">Garantía</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-animate="slide-up">
                    <a href="<?= url('contacto.php') ?>" class="bg-gold-500 text-navy-900 px-8 py-4 rounded-xl font-semibold text-lg text-center hover:bg-gold-400 transition-all shadow-lg flex items-center justify-center group">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-1 sm:mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        Solicitar Cotización Gratuita
                    </a>
                    <a href="tel:<?= CONTACT_PHONE ?>" class="bg-transparent text-white px-8 py-4 rounded-xl font-semibold text-lg text-center border-2 border-white/30 hover:border-gold-500 hover:text-gold-400 transition-all flex items-center justify-center group">
                        <svg class="w-6 h-6 mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        Llamar Ahora: (899) 113-5304
                    </a>
                </div>
                
                <!-- Trust indicators -->
                <div class="mt-12 pt-8 border-t border-white/20">
                    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8 text-sm text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Respuesta inmediata
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Sin compromiso
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Profesionales certificados
                        </div>
                    </div>
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