<?php
/**
 * Hero Component
 */
?>

<section id="inicio" class="relative min-h-screen flex items-center bg-gradient-to-br from-navy-900 via-navy-800 to-navy-700 overflow-hidden pb-20">
  <!-- Professional corporate background -->
  <div class="absolute inset-0">
    <!-- Subtle geometric grid -->
    <div class="absolute inset-0 opacity-5">
      <svg class="w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid)" class="text-gold-500"/>
      </svg>
    </div>
    <!-- Professional overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-navy-900/95 via-navy-900/90 to-navy-800/90"></div>
    
    <!-- Corporate accent bar -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-500 to-gold-600"></div>
  </div>

  <!-- Elementos decorativos corporativos -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-20 right-20 w-32 h-32 border border-gold-500/10 rounded-full"></div>
    <div class="absolute bottom-20 left-20 w-24 h-24 border border-gold-500/10 rounded-full"></div>
    <div class="absolute top-1/2 right-32 w-16 h-16 border border-gold-500/10 rounded-full"></div>
    
    <!-- Líneas decorativas -->
    <div class="absolute top-0 right-0 w-px h-40 bg-gradient-to-b from-gold-500/20 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-40 h-px bg-gradient-to-r from-gold-500/20 to-transparent"></div>
  </div>

  <div class="relative z-10 section-container">
    <div class="grid lg:grid-cols-12 gap-4 lg:gap-8 items-center">
      
      <!-- Contenido principal -->
      <div class="lg:col-span-8 text-white">
        
        <!-- Headline principal corporativo -->
        <div class="space-y-6 mb-12">
          <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold leading-tight break-words" data-animate="fade-in">
            <span class="text-white block">SEGUREC</span>
            <span class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-normal block mt-4">
              Seguridad Privada 24/7
            </span>
          </h1>
        </div>

        <!-- Carrusel de Credenciales -->
        <div class="mb-12 relative" data-animate="slide-up">
          <div id="credentials-container" class="bg-white/10 backdrop-blur-sm rounded-xl p-3 sm:p-4 border border-white/20 overflow-hidden">
            <div id="credentials-track" class="flex space-x-3 sm:space-x-6 animate-scroll-credentials" style="width: max-content;">
              <!-- Set completo 1 -->
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">REPSE</p>
                  <p class="text-white text-xs sm:text-sm font-bold">AR163168/2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">POLICÍA FEDERAL</p>
                  <p class="text-white text-xs sm:text-sm font-bold">28-242-2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">AMESP</p>
                  <p class="text-white text-xs sm:text-sm font-bold">CERTIFICADO</p>
                </div>
              </div>
              
              <!-- Set completo 2 (duplicado para loop infinito) -->
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">REPSE</p>
                  <p class="text-white text-xs sm:text-sm font-bold">AR163168/2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">POLICÍA FEDERAL</p>
                  <p class="text-white text-xs sm:text-sm font-bold">28-242-2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">AMESP</p>
                  <p class="text-white text-xs sm:text-sm font-bold">CERTIFICADO</p>
                </div>
              </div>
              
              <!-- Set completo 3 (segundo duplicado para navegación fluida) -->
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">REPSE</p>
                  <p class="text-white text-xs sm:text-sm font-bold">AR163168/2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">POLICÍA FEDERAL</p>
                  <p class="text-white text-xs sm:text-sm font-bold">28-242-2024</p>
                </div>
              </div>
              
              <div class="credential-item flex-shrink-0 flex items-center space-x-2 sm:space-x-3 bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gold-500/20 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gold-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div>
                  <p class="text-gold-400 text-xs sm:text-sm font-semibold">AMESP</p>
                  <p class="text-white text-xs sm:text-sm font-bold">CERTIFICADO</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Call to Actions corporativos -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mb-8 max-w-full" data-animate="slide-left">
          <a href="<?= url('contacto.php') ?>" class="bg-gold-500 text-navy-900 px-4 sm:px-6 md:px-8 py-3 sm:py-4 rounded-lg font-semibold text-center hover:bg-gold-400 transition-all shadow-lg flex items-center justify-center group text-sm sm:text-base min-w-0 flex-1 sm:flex-none">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-1 sm:mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <span class="truncate">Solicitar Consultoría</span>
          </a>
          
          <a href="tel:<?= CONTACT_PHONE ?>" class="bg-transparent text-white px-4 sm:px-6 md:px-8 py-3 sm:py-4 rounded-lg font-semibold text-center border-2 border-white/30 hover:border-gold-500 hover:text-gold-400 transition-all flex items-center justify-center group text-sm sm:text-base min-w-0 flex-1 sm:flex-none">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-1 sm:mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <span class="truncate">(899) 113-5304</span>
          </a>
        </div>

      </div>

      <!-- Logo grande corporativo para desktop -->
      <div class="lg:col-span-4 hidden lg:flex lg:items-center lg:justify-center" data-animate="slide-right">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-16 border border-white/20">
          <img 
            src="<?= publicUrl('images/logo.svg') ?>" 
            alt="SEGUREC - Sistemas Corporativos de Seguridad" 
            class="w-96 lg:w-[28rem] xl:w-[32rem] h-auto filter drop-shadow-lg"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .particles div {
    animation: float 6s ease-in-out infinite;
  }
  
  @keyframes float {
    0%, 100% {
      transform: translateY(0px) rotate(0deg);
      opacity: 0.4;
    }
    50% {
      transform: translateY(-20px) rotate(180deg);
      opacity: 0.8;
    }
  }

  .animate-scroll-x {
    animation: scroll-x 15s linear infinite;
  }

  @keyframes scroll-x {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-scroll-credentials {
    animation: scroll-credentials 20s linear infinite;
  }

  @keyframes scroll-credentials {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .credentials-paused {
    animation-play-state: paused !important;
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const container = document.getElementById('credentials-container');
  const track = document.getElementById('credentials-track');
  
  if (!container || !track) return;
  
  let currentTranslate = 0;
  let animationPaused = false;
  let isTransitioning = false;
  const totalItems = 9; // 3 sets de 3 elementos cada uno
  const itemsPerSet = 3;
  
  // Calcular ancho de elemento dinámicamente
  function getItemWidth() {
    const items = track.querySelectorAll('.credential-item');
    if (items.length === 0) return 250;
    
    const firstItem = items[0];
    const styles = window.getComputedStyle(firstItem);
    const gap = parseInt(window.getComputedStyle(track).gap) || 12;
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
        if (Math.abs(currentTranslate) >= oneSetWidth * 2) {
          track.style.transition = 'none';
          currentTranslate = -oneSetWidth; // Volver al segundo set
          track.style.transform = `translateX(${currentTranslate}px)`;
        }
        // Si hemos ido antes del segundo set (hacia la izquierda)
        else if (currentTranslate > 0) {
          track.style.transition = 'none';
          currentTranslate = -oneSetWidth; // Ir al segundo set
          track.style.transform = `translateX(${currentTranslate}px)`;
        }
        
        isTransitioning = false;
      }, 400);
    }
  }
  
  // Función para pausar/reanudar animación CSS
  function toggleAnimation() {
    if (animationPaused) {
      track.classList.remove('credentials-paused');
      animationPaused = false;
    } else {
      track.classList.add('credentials-paused');
      animationPaused = true;
    }
  }
  
  // Cambiar hover por click para pausar/reanudar
  container.addEventListener('click', (e) => {
    toggleAnimation();
  });
  
  // Inicializar en el set del medio para navegación infinita
  const itemWidth = getItemWidth();
  currentTranslate = -itemWidth * itemsPerSet; // Empezar en el segundo set
  updateCarousel(false);
  
  // Recalcular en resize
  window.addEventListener('resize', () => {
    const newItemWidth = getItemWidth();
    currentTranslate = -newItemWidth * itemsPerSet;
    updateCarousel(false);
  });
});
</script>