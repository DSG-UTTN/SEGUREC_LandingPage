<?php
/**
 * About Component - Matching Astro version exactly
 */
?>

<section id="nosotros" class="py-20 bg-white">
  <div class="section-container">
    <div class="grid lg:grid-cols-2 gap-12 xl:gap-16 items-center">
      
      <!-- Imagen -->
      <div class="order-2 lg:order-1" data-animate="slide-left">
        <div class="relative">
          <!-- Carrusel de imágenes reales SEGUREC -->
          <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
            <div class="segurec-carousel relative w-full h-80 md:h-96">
              <!-- Imagen 1 - Guardia en acción -->
              <div class="carousel-slide active absolute inset-0 w-full h-full">
                <img 
                  src="<?= publicUrl('images/carro.svg') ?>" 
                  alt="Guardia de seguridad SEGUREC en servicio" 
                  class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                  loading="lazy"
                />
              </div>
              
              <!-- Imagen 2 - Equipo profesional -->
              <div class="carousel-slide absolute inset-0 w-full h-full opacity-0">
                <img 
                  src="<?= publicUrl('images/3.jpg') ?>" 
                  alt="Equipo de seguridad SEGUREC" 
                  class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                  loading="lazy"
                />
              </div>
              
              <!-- Imagen 3 - Tecnología y monitoreo -->
              <div class="carousel-slide absolute inset-0 w-full h-full opacity-0">
                <img 
                  src="<?= publicUrl('images/9.png') ?>" 
                  alt="Monitoreo y tecnología SEGUREC" 
                  class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                  loading="lazy"
                />
              </div>
              
              <!-- Imagen 4 - Patrullaje -->
              <div class="carousel-slide absolute inset-0 w-full h-full opacity-0">
                <img 
                  src="<?= publicUrl('images/6.png') ?>" 
                  alt="Servicios de patrullaje SEGUREC" 
                  class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                  loading="lazy"
                />
              </div>

              <!-- Imagen 4 - Patrullaje -->
              <div class="carousel-slide absolute inset-0 w-full h-full opacity-0">
                <img 
                  src="<?= publicUrl('images/1.png') ?>" 
                  alt="Servicios de patrullaje SEGUREC" 
                  class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                  loading="lazy"
                />
              </div>
              
              <!-- Controles del carrusel -->
              <div class="absolute top-4 right-4 flex space-x-2">
                <button id="prev-slide" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 rounded-full transition-all">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                  </svg>
                </button>
                <button id="next-slide" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 rounded-full transition-all">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </button>
              </div>
              
              <!-- Indicadores -->
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="slide-indicator active w-2 h-2 rounded-full bg-white transition-all" data-slide="0"></button>
                <button class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all" data-slide="1"></button>
                <button class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all" data-slide="2"></button>
                <button class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all" data-slide="3"></button>
              </div>
            </div>
          </div>
          
          <!-- Elementos decorativos -->
          <div class="absolute -top-4 -left-4 w-24 h-24 bg-gold-500 rounded-2xl -z-10 opacity-20"></div>
          <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-navy-500 rounded-2xl -z-10 opacity-20"></div>
        </div>
      </div>

      <!-- Contenido -->
      <div class="order-1 lg:order-2" data-animate="slide-right">
        <div class="max-w-xl">
          
          <!-- Badge -->
          <div class="inline-flex items-center px-4 py-2 bg-gold-100 text-gold-800 rounded-full text-sm font-semibold mb-6">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            Empresa Certificada
          </div>

          <!-- Título -->
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            Conoce más sobre
            <span class="gradient-text block">SEGUREC</span>
          </h2>
          <!-- Descripción -->
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            <strong class="text-navy-900">SEGUREC</strong> es una empresa nacional originaria de la ciudad 
            Reynosa, Tamaulipas, con más de <strong class="text-gold-600">10 años de experiencia</strong>, 
            dedicada a la prestación de servicios de seguridad integral con una amplia gama de servicios 
            y soluciones, brindando a nuestros clientes confianza y protección garantizada.
          </p>

          <!-- Características destacadas -->
          <div class="space-y-4 mb-8">
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Servicio de monitoreo 24/7</p>
            </div>
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-people" viewBox="0 0 16 16">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Personal altamente capacitado y certificado</p>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Compromiso total con la satisfacción del cliente</p>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Banner Track Vigilante -->
    <div class="mt-16 mb-12 px-4 sm:px-6 lg:px-8" data-animate="fade-in">
      <div class="max-w-6xl mx-auto">
        <div class="bg-gradient-to-r from-navy-900 via-navy-800 to-navy-700 rounded-2xl p-6 sm:p-8 md:p-12 relative overflow-hidden shadow-2xl">
          <!-- Elementos decorativos de fondo -->
          <div class="absolute inset-0 bg-gradient-to-br from-navy-900/95 to-navy-700/90"></div>
          <div class="absolute top-0 right-0 w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 bg-gold-500/10 rounded-full -translate-y-16 sm:-translate-y-24 md:-translate-y-32 translate-x-16 sm:translate-x-24 md:translate-x-32"></div>
          <div class="absolute bottom-0 left-0 w-24 sm:w-36 md:w-48 h-24 sm:h-36 md:h-48 bg-gold-500/10 rounded-full translate-y-12 sm:translate-y-18 md:translate-y-24 -translate-x-12 sm:-translate-x-18 md:-translate-x-24"></div>
          
          <div class="relative z-10">
            <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
              
              <!-- Contenido -->
              <div class="text-white order-2 lg:order-1">
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 sm:mb-4 leading-tight">
                  Potenciados por<br>
                  <span class="text-gold-400">Track Vigilante</span>
                </h3>
                
                <p class="text-gray-300 text-sm sm:text-base lg:text-lg mb-4 sm:mb-6 leading-relaxed">
                  SEGUREC utiliza <strong class="text-white">Track Vigilante</strong>, el software líder en gestión de seguridad privada, 
                  para optimizar nuestros servicios con control de rondines en tiempo real, geolocalización de guardias, 
                  reportes digitales y monitoreo 24/7.
                </p>
                
                <div class="space-y-2 sm:space-y-3">
                  <div class="flex items-start text-gray-300 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gold-400 mr-2 sm:mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Control de rondines y patrullajes en tiempo real</span>
                  </div>
                  <div class="flex items-start text-gray-300 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gold-400 mr-2 sm:mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Geolocalización precisa de todo el personal</span>
                  </div>
                  <div class="flex items-start text-gray-300 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gold-400 mr-2 sm:mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Reportes digitales automatizados y evidencias</span>
                  </div>
                </div>
              </div>
              
              <!-- Logo/Imagen -->
              <div class="flex justify-center lg:justify-end order-1 lg:order-2">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 sm:p-6 md:p-8 w-full max-w-xs sm:max-w-sm border border-white/20">
                  <div class="rounded-lg p-4 sm:p-6 mb-3 sm:mb-4">
                    <img 
                      src="<?= publicUrl('images/track_vigilante.svg') ?>" 
                      alt="Track Vigilante - Software de Seguridad Privada" 
                      class="w-full h-auto"
                      loading="lazy"
                    />
                  </div>
                  <div class="text-center">
                    <p class="text-gray-300 text-xs sm:text-sm font-medium">Software de Gestión</p>
                    <p class="text-white text-sm sm:text-base lg:text-lg font-bold">de Seguridad Privada</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Barra de certificaciones -->
    <div class="mt-16 pt-16 border-t border-gray-200" data-animate="fade-in">
      <div class="text-center mb-8">
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Certificaciones y Registros</h3>
        <p class="text-gray-600">Respaldados por las autoridades competentes</p>
      </div>
      
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4 sm:gap-6 items-stretch max-w-4xl mx-auto px-4">
        <!-- Primera fila -->
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/ctpat.svg') ?>" alt="CTPAT" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">CTPAT</span>
        </div>

         <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/oea.svg') ?>" alt="OEA" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">OEA</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/policia.svg') ?>" alt="Registro Policía" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">Policía Federal</span>
        </div>
        
        <!-- Segunda fila -->
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/repse.svg') ?>" alt="Registro REPSE" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">REPSE</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/amesp.svg') ?>" alt="AMESP" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">AMESP</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/iso_9001.svg') ?>" alt="ISO 9001" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">ISO 9001</span>
        </div>
        
        <!-- Tercera fila -->
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/stps.svg') ?>" alt="STPS" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">STPS</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/imss.svg') ?>" alt="IMSS" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">IMSS</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/infonavit.svg') ?>" alt="INFONAVIT" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">INFONAVIT</span>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
  .carousel-slide {
    transition: opacity 0.6s ease-in-out;
  }
  
  .carousel-slide.active {
    opacity: 1 !important;
  }
  
  .slide-indicator.active {
    background-color: #f59e0b !important;
    transform: scale(1.2);
  }
  
  .segurec-carousel:hover .carousel-slide img {
    transform: scale(1.02);
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.carousel-slide');
  const indicators = document.querySelectorAll('.slide-indicator');
  const prevBtn = document.getElementById('prev-slide');
  const nextBtn = document.getElementById('next-slide');
  
  if (slides.length === 0) return;
  
  let currentSlide = 0;
  let slideInterval;
  
  function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => {
      slide.classList.remove('active');
      slide.style.opacity = '0';
    });
    
    // Hide all indicators
    indicators.forEach(indicator => {
      indicator.classList.remove('active');
    });
    
    // Show current slide
    if (slides[index]) {
      slides[index].classList.add('active');
      slides[index].style.opacity = '1';
    }
    
    // Show current indicator
    if (indicators[index]) {
      indicators[index].classList.add('active');
    }
    
    currentSlide = index;
  }
  
  function nextSlide() {
    const next = (currentSlide + 1) % slides.length;
    showSlide(next);
  }
  
  function prevSlide() {
    const prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
  }
  
  function startAutoSlide() {
    slideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
  }
  
  function stopAutoSlide() {
    if (slideInterval) {
      clearInterval(slideInterval);
    }
  }
  
  // Event listeners
  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      stopAutoSlide();
      nextSlide();
      startAutoSlide();
    });
  }
  
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      stopAutoSlide();
      prevSlide();
      startAutoSlide();
    });
  }
  
  // Indicator click events
  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      stopAutoSlide();
      showSlide(index);
      startAutoSlide();
    });
  });
  
  // Pause on hover
  const carousel = document.querySelector('.segurec-carousel');
  if (carousel) {
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);
  }
  
  // Initialize
  showSlide(0);
  startAutoSlide();
});
</script>