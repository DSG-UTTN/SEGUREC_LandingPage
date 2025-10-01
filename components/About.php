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
          <!-- Imagen principal -->
          <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
            <img 
              src="<?= publicUrl('images/carro.svg') ?>" 
              alt="Vehículo de seguridad SEGUREC" 
              class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700"
              loading="lazy"
            />
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

    <!-- Barra de certificaciones -->
    <div class="mt-16 pt-16 border-t border-gray-200" data-animate="fade-in">
      <div class="text-center mb-8">
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Certificaciones y Registros</h3>
        <p class="text-gray-600">Respaldados por las autoridades competentes</p>
      </div>
      
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4 sm:gap-6 items-stretch max-w-4xl mx-auto px-4">
        <!-- Primera fila -->
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/repse.png') ?>" alt="Registro REPSE" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">REPSE</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/amesp.png') ?>" alt="AMESP" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">AMESP</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/logo-policia.png') ?>" alt="Registro Policía" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">Policía Federal</span>
        </div>
        
        <!-- Segunda fila -->
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/oea.svg') ?>" alt="OEA" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">OEA</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/stps.svg') ?>" alt="STPS" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">STPS</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 w-full h-32 sm:h-36 justify-center">
          <img src="<?= publicUrl('images/iso_9001.svg') ?>" alt="ISO 9001" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">ISO 9001</span>
        </div>
        
        <!-- Tercera fila - CTPAT ocupando todo el ancho de la cuadrícula -->
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl opacity-75 hover:opacity-100 hover:bg-navy-800 transition-all duration-300 transform hover:scale-105 h-32 sm:h-36 justify-center col-span-2 sm:col-span-3 lg:col-span-3 w-full">
          <img src="<?= publicUrl('images/ctpat.svg') ?>" alt="CTPAT" class="h-12 sm:h-14 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium text-center">CTPAT</span>
        </div>
      </div>
    </div>
  </div>
</section>