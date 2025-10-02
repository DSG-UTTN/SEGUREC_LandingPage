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
            Somos líderes en seguridad privada porque combinamos experiencia, profesionalismo y tecnología 
            para brindarte la mejor protección.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <?php foreach($reasons as $index => $reason): ?>
            <div class="text-center group" data-animate="slide-up">
                <div class="w-20 h-20 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $reason['icon'] ?>"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-4"><?= e($reason['title']) ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= e($reason['description']) ?></p>
            </div>
        <?php endforeach; ?>
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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>