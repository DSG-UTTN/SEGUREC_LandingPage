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
      <div class="lg:col-span-8 text-white max-w-full overflow-hidden">
        
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
        <div class="mb-12 relative max-w-full overflow-hidden" data-animate="slide-up">
          <div id="credentials-container" class="bg-white/10 backdrop-blur-sm rounded-xl p-3 sm:p-4 border border-white/20 overflow-hidden max-w-full">
            <div id="credentials-track" class="flex space-x-3 sm:space-x-6 animate-scroll-credentials" style="width: max-content;">
              <!-- Set completo 1 (con imágenes) -->
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/repse-small.webp') ?>">
                  <img src="<?= publicUrl('images/repse-large.webp') ?>" alt="Registro REPSE" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">REPSE</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/amesp-small.webp') ?>">
                  <img src="<?= publicUrl('images/amesp-large.webp') ?>" alt="AMESP" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">AMESP</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/iso_9001-small.webp') ?>">
                  <img src="<?= publicUrl('images/iso_9001-large.webp') ?>" alt="ISO 9001" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">ISO 9001</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/ctpat-small.webp') ?>">
                  <img src="<?= publicUrl('images/ctpat-large.webp') ?>" alt="CTPAT" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">CTPAT</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/oea-small.webp') ?>">
                  <img src="<?= publicUrl('images/oea-large.webp') ?>" alt="OEA" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">OEA</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/policia-small.webp') ?>">
                  <img src="<?= publicUrl('images/policia-large.webp') ?>" alt="Registro Policía" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">Policía Federal</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/stps-small.webp') ?>">
                  <img src="<?= publicUrl('images/stps-large.webp') ?>" alt="STPS" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">STPS</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/imss-small.webp') ?>">
                  <img src="<?= publicUrl('images/imss-large.webp') ?>" alt="IMSS" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">IMSS</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/infonavit-small.webp') ?>">
                  <img src="<?= publicUrl('images/infonavit-large.webp') ?>" alt="INFONAVIT" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">INFONAVIT</span>
              </div>
              
              <!-- Set completo 2 (duplicado para loop infinito) -->
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/repse-small.webp') ?>">
                  <img src="<?= publicUrl('images/repse-large.webp') ?>" alt="Registro REPSE" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">REPSE</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/amesp-small.webp') ?>">
                  <img src="<?= publicUrl('images/amesp-large.webp') ?>" alt="AMESP" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">AMESP</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/policia-small.webp') ?>">
                  <img src="<?= publicUrl('images/policia-large.webp') ?>" alt="Registro Policía" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">Policía Federal</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/oea-small.webp') ?>">
                  <img src="<?= publicUrl('images/oea-large.webp') ?>" alt="OEA" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">OEA</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/ctpat-small.webp') ?>">
                  <img src="<?= publicUrl('images/ctpat-large.webp') ?>" alt="CTPAT" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">CTPAT</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/iso_9001-small.webp') ?>">
                  <img src="<?= publicUrl('images/iso_9001-large.webp') ?>" alt="ISO 9001" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">ISO 9001</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/stps-small.webp') ?>">
                  <img src="<?= publicUrl('images/stps-large.webp') ?>" alt="STPS" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">STPS</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/imss-small.webp') ?>">
                  <img src="<?= publicUrl('images/imss-large.webp') ?>" alt="IMSS" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">IMSS</span>
              </div>
              <div class="credential-item flex-shrink-0 flex flex-col items-center bg-white/10 rounded-lg p-3 sm:p-4 min-w-max">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?= publicUrl('images/infonavit-small.webp') ?>">
                  <img src="<?= publicUrl('images/infonavit-large.webp') ?>" alt="INFONAVIT" class="h-10 w-auto mb-2" loading="lazy" />
                </picture>
                <span class="text-gold-300 text-xs sm:text-sm font-medium">INFONAVIT</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Call to Actions corporativos -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mb-8 w-full max-w-full overflow-hidden" data-animate="slide-left">
          <a href="<?= url('contacto') ?>" class="bg-gold-500 text-navy-900 px-3 sm:px-4 py-3 sm:py-4 rounded-lg font-semibold text-center hover:bg-gold-400 transition-all shadow-lg flex items-center justify-center group text-sm sm:text-base w-full sm:flex-1 min-w-0" aria-label="Solicitar consultoría gratuita de seguridad empresarial">
            <svg class="w-4 h-4 mr-1 sm:mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <span class="truncate">Consultoría Gratuita</span>
          </a>
          
          <a href="tel:<?= CONTACT_PHONE ?>" class="bg-transparent text-white px-3 sm:px-4 py-3 sm:py-4 rounded-lg font-semibold text-center border-2 border-white/30 hover:border-gold-500 hover:text-gold-400 transition-all flex items-center justify-center group text-sm sm:text-base w-full sm:flex-1 min-w-0">
            <svg class="w-4 h-4 mr-1 sm:mr-2 group-hover:scale-110 transition-transform flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <span class="truncate">(899) 107-7423</span>
          </a>
        </div>

      </div>

      <!-- Logo grande corporativo para desktop -->
      <div class="lg:col-span-4 hidden lg:flex lg:items-center lg:justify-center" data-animate="slide-right">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-16 border border-white/20">
          <img 
            src="<?= publicUrl('images/logo_completo.webp') ?>" 
            alt="SEGUREC Seguridad Privada" 
            class="w-96 lg:w-[28rem] xl:w-[32rem] h-auto filter drop-shadow-lg"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .particles div {
    animation: float 25s ease-in-out infinite;
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
    animation: scroll-x 25s linear infinite;
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
    animation: scroll-credentials 30s linear infinite;
  }

  @keyframes scroll-credentials {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .credentials-paused {
    animation-play-state: paused !important;
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Credentials carousel functionality - Same as clients carousel
  const container = document.getElementById('credentials-container');
  const track = document.getElementById('credentials-track');
  
  if (!container || !track) return;
  
  let animationPaused = false;
  const totalItems = 18; // 9 credentials x 2 sets
  const itemsPerSet = 9;
  
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
  
  // Pausar en hover, reanudar en mouse leave (como el carrusel de clientes)
  container.addEventListener('mouseenter', () => {
    track.classList.add('credentials-paused');
    animationPaused = true;
  });
  
  container.addEventListener('mouseleave', () => {
    track.classList.remove('credentials-paused');
    animationPaused = false;
  });
  
  // Inicializar - sin configuración especial, deja que CSS maneje todo
  // El carrusel funciona automáticamente con la animación CSS
});
</script>
