<?php
/**
 * Main Layout Template
 * 
 * This is the main layout template that wraps all pages
 */

// Include configuration and functions
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';

// Set default SEO data if not provided
$seo = $seo ?? [];

?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <!-- Meta Tags BÃ¡sicos -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="SEGUREC PHP Landing Page" />
    
    <!-- SEO Meta Tags -->
    <?php renderSeoMeta($seo); ?>
    
    <!-- Favicons -->
    <?php renderFavicons(); ?>
    
    <!-- Preconnect para optimizaciÃ³n -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- TailwindCSS - Local Build -->
    <link href="/public/css/tailwind.css" rel="stylesheet">
    
    <!-- Schema.org JSON-LD -->

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SecurityCompany",
        "name": "SEGUREC",
        "description": "SEGUREC es una empresa nacional originaria de la ciudad Reynosa, Tamps; con más de 10 años de experiencia, dedicada a la prestación de servicios de Seguridad Integral.",
        "url": "<?= SITE_URL ?>",
        "logo": "<?= SITE_URL ?>/public/images/logo.svg",
        "image": "<?= SITE_URL ?>/public/images/portada.jpg",
        "telephone": "<?= CONTACT_PHONE ?>",
        "email": "<?= CONTACT_EMAIL ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Blvd del Maestro Col. Cumbres #238 local #3",
            "addressLocality": "Reynosa",
            "addressRegion": "Tamaulipas",
            "addressCountry": "MX"
        },
        "openingHours": [
            "Mo-Fr 08:00-18:00",
            "Sa 09:00-14:00"
        ],
        "serviceArea": {
            "@type": "State",
            "name": "Tamaulipas"
        },
        "foundingDate": "2014",
        "slogan": "Protegemos tu empresa"
    }
    </script>
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11522033873"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-11522033873');
    </script>
</head>

<body class="font-sans antialiased bg-white text-gray-900">
    <?php 
    // Include page content
    if (isset($content)) {
        echo $content;
    } else {
        // This is for direct template inclusion
        if (isset($pageContent)) {
            include $pageContent;
        }
    }
    ?>
    
    <!-- Script para animaciones scroll -->
    <script>
        // Observador de intersecciÃ³n para animaciones
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observar elementos cuando el DOM estÃ© listo
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('[data-animate]');
            animatedElements.forEach(el => observer.observe(el));
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });

        // Scroll suave para navegaciÃ³n
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>
