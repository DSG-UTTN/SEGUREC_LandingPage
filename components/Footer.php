<?php
/**
 * Footer Component
 */

$quickLinks = [
    ['text' => 'Inicio', 'href' => '#inicio'],
    ['text' => 'Nosotros', 'href' => '#nosotros'],
    ['text' => 'Servicios', 'href' => '#servicios'],
    ['text' => '¿Por qué elegirnos?', 'href' => '#por-que-elegirnos'],
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
            Empresa nacional originaria de Reynosa, Tamaulipas, con más de 10 años de experiencia 
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
          <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg>
          </a>
          <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
            </svg>
          </a>
          <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
            <svg class="w-5 h-5 text-gray-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.754-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
            </svg>
          </a>
          <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors group">
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
                (899) 113-5304
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
              <p class="text-gray-300 text-sm">
                Lun - Vie: 8:00 AM - 6:00 PM<br>
                Sáb: 9:00 AM - 2:00 PM<br>
                <span class="text-green-400 font-semibold">Emergencias: 24/7</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Newsletter/CTA section -->
    <div class="mt-12 pt-8 border-t border-white/10">
      <div class="bg-white/5 rounded-2xl p-8 text-center backdrop-blur-sm border border-white/10">
        <h4 class="text-xl font-bold text-white mb-2">¿Necesitas protección inmediata?</h4>
        <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
          No esperes más. Contacta con nuestros expertos en seguridad y obtén una cotización personalizada 
          para proteger lo que más valoras.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="<?= url('contacto.php') ?>" class="btn-primary">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
            </svg>
            Solicitar Cotización Gratuita
          </a>
          <a href="tel:<?= CONTACT_PHONE ?>" class="btn-secondary">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Llamada de Emergencia
          </a>
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
        <div class="flex items-center space-x-6">
          <a href="#" class="hover:text-gold-400 transition-colors">Política de Privacidad</a>
          <a href="#" class="hover:text-gold-400 transition-colors">Términos de Servicio</a>
          <span class="text-gold-500">•</span>
          <span>Sitio desarrollado con PHP + Tailwind CSS</span>
        </div>
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