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
    <!-- Meta Tags Básicos -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="SEGUREC PHP Landing Page" />
    
    <!-- SEO Meta Tags -->
    <?php renderSeoMeta($seo); ?>
    
    <!-- Favicons -->
    <?php renderFavicons(); ?>
    
    <!-- Preconnect para optimización -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            300: '#d6d3d1',
                            400: '#a8a29e',
                            500: '#b8860b',
                            600: '#a16207',
                            700: '#854d0e',
                            800: '#713f12',
                            900: '#581c0c',
                        },
                        navy: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        red: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'slide-in-right': 'slideInRight 0.8s ease-out',
                        'slide-in-left': 'slideInLeft 0.8s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(100px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-100px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                    },
                    screens: {
                        'xs': '475px',
                    },
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        .section-container {
            max-width: 80rem; /* max-w-7xl */
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem; /* px-4 */
            padding-right: 1rem;
        }
        @media (min-width: 640px) { /* sm */
            .section-container {
                padding-left: 1.5rem; /* sm:px-6 */
                padding-right: 1.5rem;
            }
        }
        @media (min-width: 1024px) { /* lg */
            .section-container {
                padding-left: 2rem; /* lg:px-8 */
                padding-right: 2rem;
            }
        }
        
        .nav-link {
            @apply relative;
        }
        
        .nav-link:hover::after {
            content: '';
            @apply absolute bottom-0 left-0 w-full h-0.5 bg-gold-600 transform scale-x-100 transition-transform duration-300;
        }
        
        .nav-link::after {
            content: '';
            @apply absolute bottom-0 left-0 w-full h-0.5 bg-gold-600 transform scale-x-0 transition-transform duration-300;
        }
        
        .animate-on-scroll {
            @apply animate-fade-in;
        }
        
        /* Custom animations for scroll */
        [data-animate="slide-up"] {
            @apply opacity-0 translate-y-8;
            transition: all 0.8s ease-out;
        }
        
        [data-animate="slide-up"].animate-on-scroll {
            @apply opacity-100 translate-y-0;
        }
        
        [data-animate="slide-left"] {
            @apply opacity-0 translate-x-8;
            transition: all 0.8s ease-out;
        }
        
        [data-animate="slide-left"].animate-on-scroll {
            @apply opacity-100 translate-x-0;
        }
        
        [data-animate="slide-right"] {
            @apply opacity-0 -translate-x-8;
            transition: all 0.8s ease-out;
        }
        
        [data-animate="slide-right"].animate-on-scroll {
            @apply opacity-100 translate-x-0;
        }
        
        [data-animate="fade-in"] {
            @apply opacity-0;
            transition: opacity 0.8s ease-out;
        }
        
        [data-animate="fade-in"].animate-on-scroll {
            @apply opacity-100;
        }
        
        /* Button styles matching Astro exactly */
        .btn-primary {
            background-color: #0f172a; /* navy-900 */
            color: #b8860b; /* gold-500 */
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border: 1px solid #b8860b;
        }
        
        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .btn-secondary {
            background-color: #dc2626; /* red-600 */
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border: 1px solid #b91c1c;
        }
        
        .btn-secondary:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .gradient-text {
            background: linear-gradient(to right, #b8860b, #a16207);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }
        
        .corporate-card {
            background-color: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            border-radius: 0.75rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .corporate-card:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Keyframes for scroll animations */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 0.4;
            }
        }
        
        /* Hero animations */
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
        
        /* Body font family */
        body {
            font-family: 'Poppins', system-ui, sans-serif;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background-color: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #b8860b;
            border-radius: 9999px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background-color: #a16207;
        }
    </style>
    
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
        // Observador de intersección para animaciones
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

        // Observar elementos cuando el DOM esté listo
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

        // Scroll suave para navegación
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