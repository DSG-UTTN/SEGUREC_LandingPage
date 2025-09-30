<?php
/**
 * Why Choose Us Component (Placeholder)
 */

$reasons = [
    [
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'title' => 'Experiencia Comprobada',
        'description' => 'Más de 10 años protegiendo empresas y familias con resultados excepcionales.'
    ],
    [
        'icon' => 'M12 6.253v13m0-13c-2.235 0-4.735-.999-5.26-3.131a1.87 1.87 0 012.235-2.235C9.737 4.508 10.98 5.507 12 5.507s2.263-.999 3.025-1.62a1.87 1.87 0 012.235 2.235C16.735 8.254 14.235 9.253 12 9.253z',
        'title' => 'Personal Certificado',
        'description' => 'Todo nuestro equipo cuenta con certificaciones oficiales y capacitación continua.'
    ],
    [
        'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
        'title' => 'Disponibilidad 24/7',
        'description' => 'Servicio ininterrumpido los 365 días del año para tu tranquilidad total.'
    ],
    [
        'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        'title' => 'Tecnología Avanzada',
        'description' => 'Utilizamos sistemas de monitoreo y comunicación de última generación.'
    ],
    [
        'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        'title' => 'Equipo Especializado',
        'description' => 'Profesionales con experiencia en diferentes sectores y tipos de seguridad.'
    ],
    [
        'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        'title' => 'Respuesta Inmediata',
        'description' => 'Protocolos de respuesta rápida ante cualquier situación de emergencia.'
    ]
];
?>

<div class="section-container">
    <div class="text-center mb-16" data-animate="fade-in">
        <h2 class="text-4xl md:text-5xl font-bold text-navy-900 mb-6">
            ¿Por qué elegir <span class="text-gold-600">SEGUREC</span>?
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Somos líderes en seguridad privada porque combinamos experiencia, profesionalismo y tecnología 
            para brindarte la mejor protección.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <?php foreach($reasons as $index => $reason): ?>
            <div class="text-center group" data-animate="slide-up">
                <div class="w-20 h-20 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $reason['icon'] ?>"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-4"><?= e($reason['title']) ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= e($reason['description']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-navy-900 to-navy-800 rounded-3xl p-8 md:p-12 text-white" data-animate="fade-in">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-bold text-gold-400 mb-2">10+</div>
                <div class="text-gray-300">Años de Experiencia</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-gold-400 mb-2">500+</div>
                <div class="text-gray-300">Clientes Satisfechos</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-gold-400 mb-2">24/7</div>
                <div class="text-gray-300">Disponibilidad</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-gold-400 mb-2">100%</div>
                <div class="text-gray-300">Garantía</div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <h3 class="text-2xl font-bold mb-4">Únete a las empresas que confían en nosotros</h3>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Cientos de empresas y familias en Reynosa ya disfrutan de la tranquilidad que brinda 
                contar con el mejor servicio de seguridad privada.
            </p>
            <a href="<?= url('contacto.php') ?>" class="btn-primary">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                </svg>
                Solicitar Información
            </a>
        </div>
    </div>
</div>