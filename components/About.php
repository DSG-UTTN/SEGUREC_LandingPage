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
          
          <!-- Badge flotante -->
          <div class="absolute top-6 right-6 bg-white rounded-xl shadow-lg p-4 text-center border border-gold-200">
            <div class="text-2xl font-bold text-gold-600">10+</div>
            <div class="text-xs text-gray-600 font-medium">Años de Experiencia</div>
          </div>
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
            dedicada a la prestación de servicios de Seguridad Integral con una amplia gama de servicios 
            y soluciones, brindando a nuestros clientes confianza y protección garantizada.
          </p>

          <!-- Características destacadas -->
          <div class="space-y-4 mb-8">
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Empresa nacional con sede en Reynosa, Tamaulipas</p>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a1.5 1.5 0 01-3 0 1.5 1.5 0 013 0zm-3-3a1.5 1.5 0 01-3 0 1.5 1.5 0 013 0z"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Personal altamente capacitado y certificado</p>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <p class="text-gray-700 font-medium">Servicio de monitoreo 24 horas al día</p>
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

          <!-- Call to action -->
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contacto" class="btn-primary">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
              </svg>
              Solicitar Información
            </a>
            
            <a href="tel:<?= CONTACT_PHONE ?>" class="btn-secondary">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
              </svg>
              Llamar Ahora
            </a>
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
      
      <div class="grid grid-cols-2 md:grid-cols-3 gap-8 items-center justify-items-center opacity-75 hover:opacity-100 transition-opacity">
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl hover:bg-navy-800 transition-colors">
          <img src="<?= publicUrl('images/repse.png') ?>" alt="Registro REPSE" class="h-16 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium">REPSE</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl hover:bg-navy-800 transition-colors">
          <img src="<?= publicUrl('images/amesp.png') ?>" alt="AMESP" class="h-16 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium">AMESP</span>
        </div>
        
        <div class="flex flex-col items-center p-4 bg-navy-900 rounded-xl hover:bg-navy-800 transition-colors col-span-2 md:col-span-1">
          <img src="<?= publicUrl('images/logo-policia.png') ?>" alt="Registro Policía" class="h-16 w-auto mb-2" loading="lazy" />
          <span class="text-xs text-gold-300 font-medium">Policía Federal</span>
        </div>
      </div>
    </div>
  </div>
</section>