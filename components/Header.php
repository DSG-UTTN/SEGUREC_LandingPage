<?php
/**
 * Header Component
 */
?>

<header class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300" id="header">
  <!-- Barra de contacto superior -->
  <div class="bg-gradient-to-r from-gold-500 to-gold-600 text-white py-2 hidden md:block">
    <div class="section-container">
      <div class="flex justify-between items-center text-sm">
        <div class="flex items-center space-x-6">
          <a href="tel:<?= CONTACT_PHONE ?>" class="flex items-center hover:text-gold-100 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Tel: (899) 113-5304
          </a>
          <a href="mailto:<?= CONTACT_EMAIL ?>" class="flex items-center hover:text-gold-100 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <?= CONTACT_EMAIL ?>
          </a>
        </div>
        <div class="flex items-center space-x-4">
          <span class="text-xs"><?= BUSINESS_HOURS ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Navegación principal -->
  <nav class="section-container py-4">
    <div class="flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="<?= url() ?>" class="flex items-center">
          <img src="<?= publicUrl('images/logo.svg') ?>" alt="SEGUREC Logo" class="h-12 w-auto">
        </a>
      </div>

      <!-- Navegación desktop -->
      <div class="hidden lg:flex items-center space-x-8">
        <a href="<?= url('#inicio') ?>" class="nav-link text-gray-700 hover:text-gold-600 font-medium transition-colors">
          Inicio
        </a>
        <a href="<?= url('#nosotros') ?>" class="nav-link text-gray-700 hover:text-gold-600 font-medium transition-colors">
          Nosotros
        </a>
        <a href="<?= url('#servicios') ?>" class="nav-link text-gray-700 hover:text-gold-600 font-medium transition-colors">
          Servicios
        </a>
        <a href="<?= url('#por-que-elegirnos') ?>" class="nav-link text-gray-700 hover:text-gold-600 font-medium transition-colors">
          ¿Por qué elegirnos?
        </a>
        <a href="<?= url('contacto.php') ?>" class="nav-link text-gray-700 hover:text-gold-600 font-medium transition-colors">
          Contacto
        </a>
      </div>

      <!-- Botón de contacto -->
      <div class="hidden lg:flex items-center">
        <a href="<?= url('contacto.php') ?>" class="btn-primary">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"/>
          </svg>
          Solicitar Cotización
        </a>
      </div>

      <!-- Botón menú móvil -->
      <button 
        id="mobile-menu-button" 
        class="lg:hidden p-2 rounded-md text-gray-700 hover:text-gold-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gold-500"
        aria-expanded="false"
      >
        <span class="sr-only">Abrir menú principal</span>
        <svg class="w-6 h-6 hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg class="w-6 h-6 close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="lg:hidden hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200 mt-4">
        <a href="<?= url('#inicio') ?>" class="block px-3 py-2 text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md font-medium mobile-menu-link">
          Inicio
        </a>
        <a href="<?= url('#nosotros') ?>" class="block px-3 py-2 text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md font-medium mobile-menu-link">
          Nosotros
        </a>
        <a href="<?= url('#servicios') ?>" class="block px-3 py-2 text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md font-medium mobile-menu-link">
          Servicios
        </a>
        <a href="<?= url('#por-que-elegirnos') ?>" class="block px-3 py-2 text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md font-medium mobile-menu-link">
          ¿Por qué elegirnos?
        </a>
        <a href="<?= url('contacto.php') ?>" class="block px-3 py-2 text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md font-medium mobile-menu-link">
          Contacto
        </a>
        <div class="pt-4 pb-2">
          <a href="<?= url('contacto.php') ?>" class="btn-primary w-full justify-center">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"/>
            </svg>
            Solicitar Cotización
          </a>
        </div>
        <!-- Información de contacto móvil -->
        <div class="pt-4 pb-2 border-t border-gray-200">
          <a href="tel:<?= CONTACT_PHONE ?>" class="flex items-center px-3 py-2 text-sm text-gray-600">
            <svg class="w-4 h-4 mr-3 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            (899) 113-5304
          </a>
          <a href="mailto:<?= CONTACT_EMAIL ?>" class="flex items-center px-3 py-2 text-sm text-gray-600">
            <svg class="w-4 h-4 mr-3 text-gold-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <?= CONTACT_EMAIL ?>
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>

<!-- Button styles are handled in the main layout template -->

<script>
  // Funcionalidad del menú móvil
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');

    mobileMenuButton?.addEventListener('click', () => {
      const isOpen = mobileMenu?.classList.contains('hidden');
      
      if (isOpen) {
        mobileMenu?.classList.remove('hidden');
        hamburgerIcon?.classList.add('hidden');
        closeIcon?.classList.remove('hidden');
        mobileMenuButton?.setAttribute('aria-expanded', 'true');
      } else {
        mobileMenu?.classList.add('hidden');
        hamburgerIcon?.classList.remove('hidden');
        closeIcon?.classList.add('hidden');
        mobileMenuButton?.setAttribute('aria-expanded', 'false');
      }
    });

    // Cerrar menú al hacer clic en un enlace
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu?.classList.add('hidden');
        hamburgerIcon?.classList.remove('hidden');
        closeIcon?.classList.add('hidden');
        mobileMenuButton?.setAttribute('aria-expanded', 'false');
      });
    });

    // Cambiar apariencia del header al hacer scroll
    window.addEventListener('scroll', () => {
      const header = document.getElementById('header');
      if (window.scrollY > 100) {
        header?.classList.add('shadow-xl');
      } else {
        header?.classList.remove('shadow-xl');
      }
    });

    // Highlighting del enlace activo
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= sectionTop - 200) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('text-gold-600');
        link.classList.add('text-gray-700');
        if (link.getAttribute('href') === `#${current}`) {
          link.classList.remove('text-gray-700');
          link.classList.add('text-gold-600');
        }
      });
    });
  });
</script>