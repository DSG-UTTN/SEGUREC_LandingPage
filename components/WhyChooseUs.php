<?php
/**
 * Why Choose Us Component (Placeholder)
 */

$reasons = [
    [
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'title' => 'Experiencia Comprobada',
        'description' => 'Más de 10 años protegiendo empresas con resultados excepcionales y un historial comprobado de éxito.'
    ],
    [
        'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        'title' => 'Personal Certificado',
        'description' => 'Todo nuestro equipo cuenta con certificaciones oficiales y capacitación continua especializada.'
    ],
    [
        'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
        'title' => 'Disponibilidad 24/7',
        'description' => 'Servicio ininterrumpido los 365 días del año para tu tranquilidad total sin excepciones.'
    ],
    [
        'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        'title' => 'Innovación Tecnológica',
        'description' => 'Desarrollamos nuestras propias soluciones tecnológicas como Track Vigilante para brindar el mejor servicio.'
    ],
    [
        'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
        'title' => 'Atención Personalizada al Cliente',
        'description' => 'Cada cliente recibe un servicio adaptado a sus necesidades específicas con atención directa y profesional.'
    ],
    [
        'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
        'title' => 'Patrullaje de Supervisión Continuo',
        'description' => 'Sistema de patrullaje constante que garantiza supervisión efectiva y prevención de incidentes.'
    ]
];
?>

<div class="section-container">
    <div class="text-center mb-16" data-animate="fade-in">
        <h2 class="text-4xl md:text-5xl font-bold text-navy-900 mb-6">
            ¿Por qué elegir <span class="text-gold-600">SEGUREC</span>?
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            El objetivo principal de nuestro trabajo responde a la necesidad de prevenir todo daño a inmuebles, 
            así como la sustracción de bienes materiales y todo tipo de actos delictivos.
        </p>
    </div>

    <!-- Layout con video central en desktop, vertical en móvil -->
    <div class="mb-20">
        <!-- Desktop Layout: Grid with video in center -->
        <div class="hidden lg:grid lg:grid-cols-5 gap-8 items-center">
            <!-- Columna izquierda: 3 reasons -->
            <div class="lg:col-span-2 space-y-6">
                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="text-right group" data-animate="slide-right">
                        <div class="flex items-center justify-end mb-4">
                            <div class="mr-4">
                                <h3 class="text-lg font-bold text-navy-900 mb-2"><?= e($reasons[$i]['title']) ?></h3>
                                <p class="text-gray-600 text-sm leading-relaxed"><?= e($reasons[$i]['description']) ?></p>
                            </div>
                            <div class="w-12 h-12 bg-gradient-to-br from-gold-400 to-gold-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $reasons[$i]['icon'] ?>"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <!-- Video central -->
            <div class="lg:col-span-1 flex justify-center" data-animate="fade-in">
                <div class="relative group">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <video 
                            id="why-choose-video"
                            class="w-full h-96 object-cover"
                            poster="<?= publicUrl('images/video.mp4') ?>"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="metadata"
                        >
                            <source src="<?= publicUrl('images/video.mp4') ?>" type="video/mp4">
                            <p class="text-gray-600">Tu navegador no soporta video HTML5.</p>
                        </video>
                        
                        <!-- Video overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 via-transparent to-navy-900/20 pointer-events-none"></div>
                        
                    </div>
                    
                    <!-- Decorative elements -->
                    <div class="absolute -top-3 -right-3 w-16 h-16 bg-gold-500 rounded-xl -z-10 opacity-20"></div>
                    <div class="absolute -bottom-3 -left-3 w-20 h-20 bg-navy-500 rounded-xl -z-10 opacity-20"></div>
                </div>
            </div>

            <!-- Columna derecha: 3 reasons -->
            <div class="lg:col-span-2 space-y-6">
                <?php for($i = 3; $i < 6; $i++): ?>
                    <div class="text-left group" data-animate="slide-left">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gold-400 to-gold-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $reasons[$i]['icon'] ?>"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-navy-900 mb-2"><?= e($reasons[$i]['title']) ?></h3>
                                <p class="text-gray-600 text-sm leading-relaxed"><?= e($reasons[$i]['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Mobile Layout: Vertical stack -->
        <div class="lg:hidden space-y-8">
            <!-- Video first on mobile -->
            <div class="flex justify-center" data-animate="fade-in">
                <div class="relative group max-w-sm w-full">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <video 
                            id="why-choose-video-mobile"
                            class="w-full h-96 object-cover"
                            poster="<?= publicUrl('images/video.mp4') ?>"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="metadata"
                        >
                            <source src="<?= publicUrl('images/video.mp4') ?>" type="video/mp4">
                            <p class="text-gray-600">Tu navegador no soporta video HTML5.</p>
                        </video>
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 via-transparent to-navy-900/20 pointer-events-none"></div>
                    </div>
                </div>
            </div>

            <!-- All reasons in mobile grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <?php foreach($reasons as $index => $reason): ?>
                    <div class="text-center group" data-animate="slide-up">
                        <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $reason['icon'] ?>"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-3"><?= e($reason['title']) ?></h3>
                        <p class="text-gray-600 leading-relaxed text-sm"><?= e($reason['description']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Nuestro Equipo en Acción Section - Integrada -->
    <div class="mb-20 pb-8" data-animate="fade-in">
        <div class="text-center mb-12">
            <div class="inline-flex items-center px-4 py-2 bg-gold-100 text-gold-800 rounded-full text-sm font-semibold mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Personal Certificado
            </div>
            
            <h3 class="text-3xl md:text-4xl font-bold text-navy-900 mb-6">
                Nuestro <span class="text-gold-600">Equipo en Acción</span>
            </h3>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Conoce a los profesionales que hacen posible la <strong class="text-navy-900">seguridad de clase mundial</strong> 
                que caracteriza a SEGUREC.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-center">
            <!-- LinkedIn Posts Carousel -->
            <div class="lg:col-span-12">
                <div class="relative overflow-hidden">
                    <!-- Carousel Container -->
                    <div id="linkedin-container" class="relative">
                        <!-- Navigation Buttons -->
                        <button id="linkedin-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-navy-900 p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button id="linkedin-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-navy-900 p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>

                        <!-- Carousel Track -->
                        <div id="linkedin-track" class="flex transition-transform duration-500 ease-in-out gap-6">
                            <!-- LinkedIn Post 1 - Real Post -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                                <div class="bg-white rounded-2xl shadow-lg overflow-hidden h-96">
                                    <iframe 
                                        src="https://www.linkedin.com/embed/feed/update/urn:li:share:7369046421716574209?collapsed=1" 
                                        height="100%" 
                                        width="100%" 
                                        frameborder="0" 
                                        allowfullscreen="" 
                                        title="Publicación SEGUREC LinkedIn"
                                        class="rounded-2xl">
                                    </iframe>
                                </div>
                            </div>

                            <!-- LinkedIn Post 2 - Pendiente URL real -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                                <div class="bg-white rounded-2xl shadow-lg overflow-hidden h-96">
                                    <iframe 
                                      src="https://www.linkedin.com/embed/feed/update/urn:li:share:7369046624351780866?collapsed=1" 
                                      height="100%" 
                                      width="100%" 
                                      frameborder="0" 
                                      allowfullscreen="" 
                                      title="Publicación SEGUREC LinkedIn"
                                      class="rounded-2xl">
                                    </iframe>
                                </div>
                            </div>

                            <!-- LinkedIn Post 3 - Pendiente URL real -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                                <div class="bg-white rounded-2xl shadow-lg overflow-hidden h-96">
                                  <iframe 
                                    src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:7358546899462725633?collapsed=1" 
                                    height="100%" 
                                    width="100%" 
                                    frameborder="0" 
                                    allowfullscreen="" 
                                    title="Publicación SEGUREC LinkedIn" 
                                    class="rounded-2xl">
                                  </iframe>
                                </div>
                            </div>

                            <!-- LinkedIn Post 4 - Pendiente URL real -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                                <div class="bg-white rounded-2xl shadow-lg overflow-hidden h-96">
                                  <iframe 
                                  src="https://www.linkedin.com/embed/feed/update/urn:li:share:7377345702160674816?collapsed=1"
                                  height="100%" 
                                  width="100%" 
                                  frameborder="0" 
                                  allowfullscreen="" 
                                  title="Publicación SEGUREC LinkedIn"
                                  class="rounded-2xl">
                                </iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Indicators -->
                        <div class="linkedin-indicators-container flex justify-center mt-8 mb-4 space-x-2">
                            <button class="linkedin-indicator w-3 h-3 rounded-full bg-gold-500 transition-all duration-300" data-slide="0"></button>
                            <button class="linkedin-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gold-400 transition-all duration-300" data-slide="1"></button>
                            <button class="linkedin-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gold-400 transition-all duration-300" data-slide="2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-navy-900 to-navy-800 rounded-3xl p-8 md:p-12 text-white" data-animate="fade-in">
        <div class="text-center mt-12">
            <h3 class="text-2xl font-bold mb-4">Únete a las empresas que confían en nosotros</h3>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Empieza a disfrutar de la tranquilidad que brinda 
                contar con el mejor servicio de seguridad privada.
            </p>
            
            <!-- Clientes Carousel dentro del CTA -->
            <div class="mb-8">
                <p class="text-gold-300 text-sm mb-4 font-medium">
                    Empresas que ya confían en nosotros:
                </p>
                
                <!-- Carousel Container -->
                <div class="relative max-w-full overflow-hidden">
                    <div id="clients-container" class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20 overflow-hidden max-w-full">
                        <div id="clients-track" class="flex space-x-6 animate-scroll-clients" style="width: max-content;">
                            <!-- Set 1 (Original) -->
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/smp.svg') ?>" alt="SMP" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">SMP</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/logimex.svg') ?>" alt="Logimex" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Logimex</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/almacenes_ibarra.svg') ?>" alt="Almacenes Ibarra" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Almacenes Ibarra</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/kenworth.svg') ?>" alt="Kenworth" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Kenworth</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/su_bodega.svg') ?>" alt="Su Bodega" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Su Bodega</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/maseca.svg') ?>" alt="Maseca" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Maseca</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/de_coss.svg') ?>" alt="De Coss" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">De Coss</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/jac.svg') ?>" alt="JAC" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">JAC</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/mazda.svg') ?>" alt="Mazda" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Mazda</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/chirey.svg') ?>" alt="Chirey" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Chirey</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/mg.svg') ?>" alt="MG" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">MG</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/hd_electronics.png') ?>" alt="HD Electronics" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">HD Electronics</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/elgo.png') ?>" alt="Elgo" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Elgo</span>
                            </div>
                            
                            <!-- Set 2 (Duplicado para loop infinito) -->
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/smp.svg') ?>" alt="SMP" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">SMP</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/logimex.svg') ?>" alt="Logimex" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Logimex</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/almacenes_ibarra.svg') ?>" alt="Almacenes Ibarra" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Almacenes Ibarra</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/kenworth.svg') ?>" alt="Kenworth" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Kenworth</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/su_bodega.svg') ?>" alt="Su Bodega" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Su Bodega</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/maseca.svg') ?>" alt="Maseca" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Maseca</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/de_coss.svg') ?>" alt="De Coss" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">De Coss</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/jac.svg') ?>" alt="JAC" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">JAC</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/mazda.svg') ?>" alt="Mazda" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Mazda</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/chirey.svg') ?>" alt="Chirey" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Chirey</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/mg.svg') ?>" alt="MG" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">MG</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/hd_electronics.png') ?>" alt="HD Electronics" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">HD Electronics</span>
                            </div>
                            <div class="client-item flex-shrink-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-3 min-w-max hover:bg-white/20 transition-all duration-300">
                                <img src="<?= publicUrl('images/elgo.png') ?>" alt="Elgo" class="h-8 w-auto opacity-70 hover:opacity-100 transition-opacity duration-300 mb-2" loading="lazy" />
                                <span class="text-gold-300 text-xs sm:text-sm font-medium">Elgo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="<?= url('contacto.php') ?>" class="btn-primary">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                </svg>
                Solicitar Información
            </a>
        </div>
    </div>
</div>

<style>
  .animate-scroll-clients {
    animation: scroll-clients 30s linear infinite;
  }

  @keyframes scroll-clients {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .clients-paused {
    animation-play-state: paused !important;
  }

  /* LinkedIn Carousel Styles */
  #linkedin-container {
    position: relative;
    overflow: hidden;
    padding: 0 60px; /* Space for navigation buttons */
    max-width: 100%;
  }

  #linkedin-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
    gap: 1.5rem;
    width: 100%;
  }

  /* Base post styling */
  #linkedin-track > div {
    flex: 0 0 auto;
    box-sizing: border-box;
  }

  /* Desktop: 3 posts visible */
  @media (min-width: 1024px) {
    #linkedin-track > div {
      width: calc(33.333% - 1rem);
      min-width: calc(33.333% - 1rem);
      flex: 0 0 calc(33.333% - 1rem);
    }
    
    #linkedin-container {
      padding: 0 60px;
    }
  }

  /* Tablet: 2 posts visible */
  @media (min-width: 768px) and (max-width: 1023px) {
    #linkedin-track > div {
      width: calc(50% - 0.75rem);
      min-width: calc(50% - 0.75rem);
      flex: 0 0 calc(50% - 0.75rem);
    }
    
    #linkedin-container {
      padding: 0 50px;
    }
    
    #linkedin-track {
      gap: 1.5rem;
    }
  }

  /* Mobile: 1 post visible */
  @media (max-width: 767px) {
    #linkedin-container {
      padding: 0 40px;
    }
    
    #linkedin-track > div {
      width: 100%;
      min-width: 100%;
      flex: 0 0 100%;
    }
    
    #linkedin-track {
      gap: 1rem;
    }
  }

  /* Very small screens */
  @media (max-width: 480px) {
    #linkedin-container {
      padding: 0 20px;
    }
  }

  /* Navigation buttons */
  #linkedin-prev,
  #linkedin-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    opacity: 0.8;
    backdrop-filter: blur(8px);
  }

  #linkedin-prev {
    left: 10px;
  }

  #linkedin-next {
    right: 10px;
  }

  #linkedin-prev:hover,
  #linkedin-next:hover {
    background: white;
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    opacity: 1;
  }

  /* Hide navigation on mobile - use swipe instead */
  @media (max-width: 767px) {
    #linkedin-prev,
    #linkedin-next {
      width: 40px;
      height: 40px;
    }
    
    #linkedin-prev {
      left: 5px;
    }
    
    #linkedin-next {
      right: 5px;
    }
  }

  @media (max-width: 480px) {
    #linkedin-prev,
    #linkedin-next {
      display: none;
    }
  }

  /* Indicators */
  .linkedin-indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    background-color: #d1d5db;
    margin: 4px 0; /* Add vertical margin to prevent clipping */
  }

  .linkedin-indicator.active {
    background-color: #f59e0b !important;
    transform: scale(1.3);
  }

  .linkedin-indicator:not(.active):hover {
    background-color: #d97706;
    transform: scale(1.1);
  }

  /* Responsive indicators */
  @media (max-width: 767px) {
    .linkedin-indicator {
      width: 10px;
      height: 10px;
      margin: 6px 0; /* More margin on mobile */
    }
  }

  /* Ensure indicators container has enough space */
  .linkedin-indicators-container {
    padding: 8px 0;
    min-height: 32px;
  }

  /* LinkedIn embed responsive styling */
  .linkedin-post-container {
    position: relative;
    width: 100%;
    height: 400px;
    overflow: hidden;
    border-radius: 1rem;
  }

  .linkedin-post-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 1rem;
  }

  /* Video and team styles */
  #why-choose-video,
  #why-choose-video-mobile,
  #team-action-video {
    border-radius: 1rem;
    /* Ensure vertical orientation and proper aspect ratio */
    object-fit: cover;
    object-position: center;
  }

  /* Hide video controls since we're using autoplay */
  #why-choose-video::-webkit-media-controls,
  #why-choose-video-mobile::-webkit-media-controls,
  #team-action-video::-webkit-media-controls {
    display: none !important;
  }

  /* Additional mobile-specific styles for vertical orientation */
  @media (max-width: 1024px) {
    #why-choose-video-mobile {
      /* Maintain vertical aspect ratio on mobile */
      height: 24rem !important; /* h-96 equivalent */
      width: 100%;
      max-width: 300px;
      margin: 0 auto;
    }
    
    /* Ensure mobile video container maintains proportion */
    .lg\:hidden .relative.group.max-w-sm {
      max-width: 300px;
      margin: 0 auto;
    }
  }

  /* Desktop video central positioning */
  @media (min-width: 1024px) {
    #why-choose-video {
      /* Ensure consistent vertical sizing on desktop */
      height: 24rem; /* h-96 */
      width: 100%;
      max-width: 250px;
    }
  }

  /* Stats cards animation */
  @keyframes bounce-in {
    0% {
      transform: scale(0.8);
      opacity: 0;
    }
    50% {
      transform: scale(1.05);
    }
    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  /* Hover effects for image grid */
  .group:hover img {
    filter: brightness(1.1);
  }

  /* Custom responsive grid adjustments */
  @media (max-width: 1024px) {
    .lg\:grid-cols-5 {
      grid-template-columns: 1fr;
    }
  }

  /* Smooth transitions for desktop layout */
  .lg\:col-span-2 > div,
  .lg\:col-span-1 > div {
    transition: transform 0.3s ease-in-out;
  }

  .lg\:col-span-2 > div:hover {
    transform: translateY(-2px);
  }

  /* Video container enhancements */
  .relative.group video {
    transition: transform 0.3s ease-in-out;
  }

  .relative.group:hover video {
    transform: scale(1.02);
  }

  /* Reason cards responsive adjustments */
  @media (min-width: 1024px) {
    .text-right .w-12,
    .text-left .w-12 {
      transition: all 0.3s ease-in-out;
    }
    
    .text-right:hover .w-12,
    .text-left:hover .w-12 {
      transform: scale(1.1);
      box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Video handling for multiple videos
  const videos = ['why-choose-video', 'why-choose-video-mobile', 'team-action-video'];
  
  videos.forEach(videoId => {
    const video = document.getElementById(videoId);
    if (video) {
      // Ensure autoplay works properly
      video.addEventListener('loadedmetadata', function() {
        // Attempt to play video when loaded
        video.play().catch(function(error) {
          console.log('Video autoplay prevented for ' + videoId + ':', error);
          // If autoplay fails, the poster will be shown
        });
      });
      
      // Intersection observer for better performance
      const videoObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            if (video.paused) {
              video.play().catch(error => {
                console.log('Video play failed for ' + videoId + ':', error);
              });
            }
          } else {
            // Pause video when out of view to save bandwidth
            if (!video.paused) {
              video.pause();
            }
          }
        });
      }, {
        threshold: 0.3
      });
      
      videoObserver.observe(video);
      
      // Handle video errors
      video.addEventListener('error', function(e) {
        console.log('Video loading error for ' + videoId + ':', e);
        // Show poster image on error
        video.style.opacity = '0';
      });
      
      // Ensure loop continues properly
      video.addEventListener('ended', function() {
        video.currentTime = 0;
        video.play().catch(error => {
          console.log('Video loop restart failed for ' + videoId + ':', error);
        });
      });
    }
  });

  // Clients carousel functionality
  const container = document.getElementById('clients-container');
  const track = document.getElementById('clients-track');
  
  if (!container || !track) return;
  
  let currentTranslate = 0;
  let animationPaused = false;
  let isTransitioning = false;
  const totalItems = 22; // 11 logos x 2 sets
  const itemsPerSet = 11;
  
  // Calcular ancho de elemento dinámicamente
  function getItemWidth() {
    const items = track.querySelectorAll('.client-item');
    if (items.length === 0) return 200;
    
    const firstItem = items[0];
    const styles = window.getComputedStyle(firstItem);
    const gap = parseInt(window.getComputedStyle(track).gap) || 32;
    return firstItem.offsetWidth + gap;
  }
  
  // Función para actualizar posición con loop infinito
  function updateCarousel(smooth = true) {
    if (isTransitioning && smooth) return;
    
    const itemWidth = getItemWidth();
    
    if (smooth) {
      isTransitioning = true;
      track.style.transition = 'transform 0.4s ease-out';
    } else {
      track.style.transition = 'none';
    }
    
    track.style.transform = `translateX(${currentTranslate}px)`;
    
    if (smooth) {
      setTimeout(() => {
        // Verificar si necesitamos resetear para loop infinito
        const oneSetWidth = itemWidth * itemsPerSet;
        
        // Si hemos pasado más allá del primer set (hacia la derecha)
        if (Math.abs(currentTranslate) >= oneSetWidth * 1.5) {
          track.style.transition = 'none';
          currentTranslate = 0; // Volver al primer set
          track.style.transform = `translateX(${currentTranslate}px)`;
        }
        
        isTransitioning = false;
      }, 400);
    }
  }
  
  // Función para pausar/reanudar animación CSS
  function toggleAnimation() {
    if (animationPaused) {
      track.classList.remove('clients-paused');
      animationPaused = false;
    } else {
      track.classList.add('clients-paused');
      animationPaused = true;
    }
  }
  
  // Pausar en hover, reanudar en mouse leave
  container.addEventListener('mouseenter', () => {
    track.classList.add('clients-paused');
    animationPaused = true;
  });
  
  container.addEventListener('mouseleave', () => {
    track.classList.remove('clients-paused');
    animationPaused = false;
  });
  
  // Inicializar
  updateCarousel(false);
  
  // Recalcular en resize
  window.addEventListener('resize', () => {
    updateCarousel(false);
  });
  
  // Animate statistics when they come into view
  const statsCards = document.querySelectorAll('.text-center.bg-white');
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animation = 'bounce-in 0.6s ease-out';
      }
    });
  }, {
    threshold: 0.3
  });
  
  statsCards.forEach(card => {
    statsObserver.observe(card);
  });

  // LinkedIn Carousel functionality
  const linkedinContainer = document.getElementById('linkedin-container');
  const linkedinTrack = document.getElementById('linkedin-track');
  const linkedinPrev = document.getElementById('linkedin-prev');
  const linkedinNext = document.getElementById('linkedin-next');
  const linkedinIndicators = document.querySelectorAll('.linkedin-indicator');
  
  if (linkedinTrack && linkedinPrev && linkedinNext) {
    let currentSlide = 0;
    let totalPosts = linkedinTrack.children.length;
    
    function getVisibleSlides() {
      if (window.innerWidth >= 1024) return 3; // Desktop: 3 posts
      if (window.innerWidth >= 768) return 2;  // Tablet: 2 posts
      return 1; // Mobile: 1 post
    }
    
    function getTotalSlides() {
      const visibleSlides = getVisibleSlides();
      return Math.max(1, totalPosts - visibleSlides + 1);
    }
    
    function updateCarousel() {
      const visibleSlides = getVisibleSlides();
      const slideWidth = 100 / visibleSlides;
      const translateX = -(currentSlide * slideWidth);
      
      linkedinTrack.style.transform = `translateX(${translateX}%)`;
      
      // Update indicators
      const totalSlidesForIndicators = getTotalSlides();
      linkedinIndicators.forEach((indicator, index) => {
        if (index < totalSlidesForIndicators) {
          indicator.style.display = 'block';
          indicator.classList.toggle('active', index === currentSlide);
        } else {
          indicator.style.display = 'none';
        }
      });
      
      // Update button states
      const totalSlidesForButtons = getTotalSlides();
      if (linkedinPrev) {
        linkedinPrev.style.opacity = currentSlide === 0 ? '0.5' : '1';
        linkedinPrev.style.pointerEvents = currentSlide === 0 ? 'none' : 'auto';
      }
      if (linkedinNext) {
        linkedinNext.style.opacity = currentSlide >= totalSlidesForButtons - 1 ? '0.5' : '1';
        linkedinNext.style.pointerEvents = currentSlide >= totalSlidesForButtons - 1 ? 'none' : 'auto';
      }
    }
    
    function nextSlide() {
      const maxSlides = getTotalSlides();
      if (currentSlide < maxSlides - 1) {
        currentSlide++;
        updateCarousel();
      }
    }
    
    function prevSlide() {
      if (currentSlide > 0) {
        currentSlide--;
        updateCarousel();
      }
    }
    
    function goToSlide(slideIndex) {
      const totalSlides = getTotalSlides();
      if (slideIndex >= 0 && slideIndex < totalSlides) {
        currentSlide = slideIndex;
        updateCarousel();
      }
    }
    
    // Event listeners
    if (linkedinNext) linkedinNext.addEventListener('click', nextSlide);
    if (linkedinPrev) linkedinPrev.addEventListener('click', prevSlide);
    
    // Indicator clicks
    linkedinIndicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => {
        goToSlide(index);
      });
    });
    
    // Touch/swipe support for mobile
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    let hasMoved = false;
    
    linkedinTrack.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
      currentX = startX;
      isDragging = true;
      hasMoved = false;
    }, { passive: true });
    
    linkedinTrack.addEventListener('touchmove', (e) => {
      if (!isDragging) return;
      currentX = e.touches[0].clientX;
      const diff = currentX - startX;
      if (Math.abs(diff) > 5) {
        hasMoved = true;
      }
    }, { passive: true });
    
    linkedinTrack.addEventListener('touchend', () => {
      if (!isDragging || !hasMoved) return;
      isDragging = false;
      
      const diff = startX - currentX;
      const threshold = 50;
      
      if (Math.abs(diff) > threshold) {
        if (diff > 0) {
          nextSlide();
        } else {
          prevSlide();
        }
      }
    }, { passive: true });
    
    // Prevent click events when swiping
    linkedinTrack.addEventListener('click', (e) => {
      if (hasMoved) {
        e.preventDefault();
        e.stopPropagation();
      }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        e.preventDefault();
        prevSlide();
      }
      if (e.key === 'ArrowRight') {
        e.preventDefault();
        nextSlide();
      }
    });
    
    // Responsive recalculation
    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        const previousVisibleSlides = getVisibleSlides();
        const maxSlide = getTotalSlides() - 1;
        if (currentSlide > maxSlide) {
          currentSlide = Math.max(0, maxSlide);
        }
        updateCarousel();
      }, 250);
    });
    
    // Initialize
    updateCarousel();
    
    // Auto-advance carousel (optional)
    /*
    setInterval(() => {
      const totalSlides = getTotalSlides();
      if (currentSlide >= totalSlides - 1) {
        currentSlide = 0;
      } else {
        currentSlide++;
      }
      updateCarousel();
    }, 5000);
    */
  }
});
</script>