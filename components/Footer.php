<?php
/**
 * Footer Component
 */

$quickLinks = [
    ['text' => 'Inicio', 'href' => '#inicio'],
    ['text' => 'Nosotros', 'href' => '#nosotros'],
    ['text' => 'Servicios', 'href' => '#servicios'],
    ['text' => '¿Por qué elegirnos?', 'href' => '#por-que-elegirnos'],
    ['text' => 'Tecnología', 'href' => 'tecnologia.php'],
    ['text' => 'Contacto', 'href' => url('contacto.php')]
];
?>

<footer class="bg-gradient-to-br from-navy-900 via-navy-800 to-navy-900 text-white relative overflow-hidden">
  <!-- Decorative background elements -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-0 left-0 w-64 h-64 bg-gold-500 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-gold-600 rounded-full blur-3xl"></div>
  </div>

  <!-- Main footer content -->
  <div class="relative z-10 section-container py-16">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
      
      <!-- Company info -->
      <div class="lg:col-span-2">
        <div class="mb-6">
          <img src="<?= publicUrl('images/logo.svg') ?>" alt="SEGUREC Logo" class="h-16 w-auto mb-4" />
          <h3 class="text-2xl font-bold text-gold-400 mb-4">SEGUREC</h3>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Con más de 10 años de experiencia 
            en servicios de seguridad integral. Brindamos confianza y protección garantizada las 24 horas del día.
          </p>
        </div>
        
        <!-- Certifications -->
        <div class="flex items-center space-x-4 mb-6">
          <div class="text-xs">
            <div class="text-gold-400 font-semibold">CERTIFICACIONES:</div>
            <div class="text-gray-400">REPSE: AR163168/2024</div>
            <div class="text-gray-400">Policía: 28-242-2024</div>
          </div>
        </div>

        <!-- Social links -->
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/segurec" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/>
            </svg>
          </a>
          <a href="https://www.instagram.com/segurec_reynosa/" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
          </a>
          <a href="https://www.tiktok.com/@segurec_mx" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group" aria-label="TikTok">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
              <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
            </svg>
          </a>
          <a href="https://www.linkedin.com/company/segurec-seguridad-privada/" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Quick links -->
      <div>
        <h4 class="text-lg font-bold text-gold-400 mb-6">Enlaces Rápidos</h4>
        <ul class="space-y-3">
          <?php foreach($quickLinks as $link): ?>
            <li>
              <a 
                href="<?= $link['href'] ?>" 
                class="text-gray-300 hover:text-gold-400 transition-colors flex items-center group"
              >
                <svg class="w-4 h-4 mr-2 text-gold-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <?= e($link['text']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact info -->
      <div>
        <h4 class="text-lg font-bold text-gold-400 mb-6">Información de Contacto</h4>
        <div class="space-y-4">
          
          <!-- Phone -->
          <div class="flex items-start space-x-3">
            <div class="w-5 h-5 text-gold-500 mt-1 flex-shrink-0">
              <svg fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
              </svg>
            </div>
            <div>
              <a href="tel:<?= CONTACT_PHONE ?>" class="text-gray-300 hover:text-gold-400 transition-colors">
                (899) 107-7423
              </a>
              <p class="text-sm text-gray-400">Disponible 24/7</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start space-x-3">
            <div class="w-5 h-5 text-gold-500 mt-1 flex-shrink-0">
              <svg fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
              </svg>
            </div>
            <div>
              <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-gray-300 hover:text-gold-400 transition-colors">
                <?= CONTACT_EMAIL ?>
              </a>
              <p class="text-sm text-gray-400">Respuesta en 24 horas</p>
            </div>
          </div>

          <!-- Address -->
          <div class="flex items-start space-x-3">
            <div class="w-5 h-5 text-gold-500 mt-1 flex-shrink-0">
              <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-300">
                Blvd del Maestro Col. Cumbres #238<br>
                Local #3, Reynosa, Tamaulipas
              </p>
            </div>
          </div>

          <!-- Hours -->
          <div class="flex items-start space-x-3">
            <div class="w-5 h-5 text-gold-500 mt-1 flex-shrink-0">
              <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
              </svg>
            </div>
            <div>
              <p class="text-gray-300">
                <span>Oficinas: <?= BUSINESS_HOURS ?></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="relative z-10 border-t border-white/10">
    <div class="section-container py-6">
      <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
        <div class="mb-4 md:mb-0">
          <p>&copy; <?= date('Y') ?> SEGUREC. Todos los derechos reservados.</p>
        </div>
        <!-- <div class="flex items-center space-x-6">
          <a href="#" class="hover:text-gold-400 transition-colors">Política de Privacidad</a>
          <span class="text-gold-500">•</span>
          <a href="#" class="hover:text-gold-400 transition-colors">Términos de Servicio</a>
        </div> -->
      </div>
    </div>
  </div>
</footer>

<style>
.btn-secondary {
    background: transparent;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.btn-secondary:hover {
    border-color: #b8860b;
    color: #b8860b;
}
</style>