<?php
/**
 * SEGUREC - Página de Tecnología
 * 
 * Página informativa sobre el departamento de desarrollo de software y tecnología de SEGUREC
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Page-specific SEO data
$seo = [
    'title' => 'Tecnología e Innovación - SEGUREC | Desarrollo de Software para Seguridad',
    'description' => 'Conoce el departamento de desarrollo de software y tecnología de SEGUREC. Innovamos creando herramientas que mejoran y facilitan el trabajo de nuestros guardias de seguridad.',
    'keywords' => 'desarrollo software seguridad, tecnología SEGUREC, innovación seguridad privada, herramientas guardias, Track Vigilante, departamento tecnología',
    'image' => publicUrl('images/tecnologia-banner.jpg')
];

// Start output buffering to capture page content
ob_start();
?>

<!-- Include Header Component -->
<?php includeComponent('Header'); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center bg-gradient-to-br from-navy-900 via-navy-800 to-navy-700 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <!-- Subtle tech grid -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="tech-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                            <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="0.5"/>
                            <circle cx="0" cy="0" r="1" fill="currentColor"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#tech-grid)" class="text-gold-500"/>
                </svg>
            </div>
            <!-- Professional overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-navy-900/95 via-navy-900/90 to-navy-800/90"></div>
        </div>

        <!-- Floating tech elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-20 w-32 h-32 border border-gold-500/20 rounded-lg rotate-12 animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 border border-gold-500/15 rounded-full"></div>
            <div class="absolute top-1/2 right-32 w-16 h-16 bg-gold-500/10 rounded-lg rotate-45"></div>
        </div>

        <div class="relative z-10 section-container">
            <div class="max-w-4xl">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-gold-500/20 text-gold-300 rounded-full text-sm font-semibold mb-6" data-animate="fade-in">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17l6-6 5 5 5-9"/>
                    </svg>
                    Innovación Tecnológica
                </div>

                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight" data-animate="slide-up">
                    Innovación<br>
                    <span class="text-gold-400 block">Tecnológica</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl leading-relaxed" data-animate="slide-up">
                    En SEGUREC creemos que la tecnología es clave para ofrecer servicios de seguridad superiores. 
                    Por eso hemos creado nuestro propio departamento de desarrollo para diseñar soluciones 
                    que revolucionen la industria de la seguridad privada.
                </p>
            </div>
        </div>
    </section>

    <!-- Innovation Section -->
    <section id="innovacion" class="py-20 bg-white">
        <div class="section-container">

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Content -->
                <div data-animate="slide-left">
                    
                    <h3 class="text-3xl font-bold text-navy-900 mb-6">
                        Desarrollamos Tecnología Propia
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Nuestro equipo trabaja constantemente en la creación 
                        de herramientas digitales que optimizan cada aspecto del trabajo de seguridad, 
                        desde la gestión de turnos hasta el monitoreo en tiempo real.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-gray-700">Aplicaciones móviles personalizadas para guardias</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-gray-700">Sistemas de gestión y monitoreo</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-gray-700">Herramientas de análisis y reportes automatizados</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div data-animate="slide-right">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-navy-900 to-navy-700 rounded-2xl p-8 text-white">
                            <div class="text-center">
                                <h4 class="text-2xl font-bold mb-6 text-gold-400">Tecnologías</h4>
                                
                                <!-- Tech Stack Icons -->
                                <div class="grid grid-cols-2 gap-4 max-w-xs mx-auto">
                                    <div class="flex flex-col items-center group">
                                        <div class="w-12 h-12 bg-gradient-to-br from-white to-gray-100 rounded-lg p-2 mb-2 shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                            <img 
                                                src="<?= publicUrl('images/python.svg') ?>" 
                                                alt="Python" 
                                                class="w-full h-full object-contain"
                                                loading="lazy"
                                            />
                                        </div>
                                        <span class="text-xs font-medium text-gray-300 group-hover:text-gold-300 transition-colors">Python</span>
                                    </div>
                                    
                                    <div class="flex flex-col items-center group">
                                        <div class="w-12 h-12 bg-gradient-to-br from-white to-gray-100 rounded-lg p-2 mb-2 shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                            <img 
                                                src="<?= publicUrl('images/tailwindcss.svg') ?>" 
                                                alt="Tailwind CSS" 
                                                class="w-full h-full object-contain"
                                                loading="lazy"
                                            />
                                        </div>
                                        <span class="text-xs font-medium text-gray-300 group-hover:text-gold-300 transition-colors">Tailwind</span>
                                    </div>
                                    
                                    <div class="flex flex-col items-center group">
                                        <div class="w-12 h-12 bg-gradient-to-br from-white to-gray-100 rounded-lg p-2 mb-2 shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                            <img 
                                                src="<?= publicUrl('images/fastapi.svg') ?>" 
                                                alt="FastAPI" 
                                                class="w-full h-full object-contain"
                                                loading="lazy"
                                            />
                                        </div>
                                        <span class="text-xs font-medium text-gray-300 group-hover:text-gold-300 transition-colors">FastAPI</span>
                                    </div>
                                    
                                    <div class="flex flex-col items-center group">
                                        <div class="w-12 h-12 bg-gradient-to-br from-white to-gray-100 rounded-lg p-2 mb-2 shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                            <img 
                                                src="<?= publicUrl('images/react.svg') ?>" 
                                                alt="React" 
                                                class="w-full h-full object-contain"
                                                loading="lazy"
                                            />
                                        </div>
                                        <span class="text-xs font-medium text-gray-300 group-hover:text-gold-300 transition-colors">React</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -left-4 w-16 h-16 bg-gold-500 rounded-xl opacity-20 -z-10"></div>
                        <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-navy-500 rounded-xl opacity-20 -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Track Vigilante Partnership -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="section-container">
            <div class="bg-gradient-to-r from-navy-900 to-navy-700 rounded-3xl p-8 md:p-12 relative overflow-hidden">
                <!-- Background elements -->
                <div class="absolute inset-0 bg-gradient-to-br from-navy-900/95 to-navy-700/90"></div>
                <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500/10 rounded-full -translate-y-32 translate-x-32"></div>
                
                <div class="relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="text-white" data-animate="slide-left">
                            <div class="inline-flex items-center px-4 py-2 bg-gold-500/20 rounded-full text-sm font-semibold mb-6 text-gold-300">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                Alianza Estratégica
                            </div>
                            
                            <h3 class="text-3xl md:text-4xl font-bold mb-6">
                                Potenciados por
                                <span class="text-gold-400">Track Vigilante</span>
                            </h3>
                            
                            <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                                Mientras desarrollamos nuestras propias herramientas, utilizamos 
                                <strong class="text-white">Track Vigilante</strong>, el software líder 
                                en gestión de seguridad privada, para garantizar la máxima eficiencia 
                                en nuestras operaciones actuales.
                            </p>
                            
                            <div class="grid grid-cols-2 gap-6 max-w-sm">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-gold-400 mb-2">24/7</div>
                                    <div class="text-sm text-gray-300">Monitoreo Continuo</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-gold-400 mb-2">100%</div>
                                    <div class="text-sm text-gray-300">Digital</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Logo -->
                        <div class="flex justify-center lg:justify-end" data-animate="slide-right">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20">
                                <div class="rounded-lg p-6 mb-4">
                                    <img 
                                        src="<?= publicUrl('images/track_vigilante.svg') ?>" 
                                        alt="Track Vigilante" 
                                        class="w-full h-auto max-w-xs"
                                        loading="lazy"
                                    />
                                </div>
                                <div class="text-center text-white">
                                    <p class="font-semibold">Software de Gestión de Seguridad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Vision -->
    <section class="py-20 bg-white">
        <div class="section-container">
            <div class="text-center mb-16" data-animate="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-navy-900 mb-6">
                    El Futuro de la <span class="text-gold-600">Seguridad</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Estamos construyendo el futuro de la seguridad privada con tecnología de vanguardia
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center group" data-animate="slide-up">
                    <div class="w-20 h-20 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Apps Móviles</h3>
                    <p class="text-gray-600">
                        Aplicaciones intuitivas que facilitan el trabajo diario de nuestros guardias de seguridad.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center group" data-animate="slide-up">
                    <div class="w-20 h-20 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Análisis de Datos</h3>
                    <p class="text-gray-600">
                        Sistemas inteligentes que analizan patrones para mejorar la eficiencia operativa.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center group" data-animate="slide-up">
                    <div class="w-20 h-20 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Automatización</h3>
                    <p class="text-gray-600">
                        Procesos automatizados que reducen errores y aumentan la productividad del equipo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-navy-900 via-navy-800 to-navy-900">
        <div class="relative z-10 section-container text-center">
            <div class="max-w-4xl mx-auto" data-animate="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    ¿Listo para <span class="text-gold-400">Proteger</span> tu Empresa?
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    No esperes a ser víctima de la inseguridad. Contrata nuestros servicios profesionales 
                    de seguridad y mantén protegido lo que más valoras.
                </p>
                
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