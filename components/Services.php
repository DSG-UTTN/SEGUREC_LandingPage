<?php
/**
 * Services Component (Placeholder)
 */

$services = [
    [
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'title' => 'Guardia de Seguridad',
        'description' => 'Personal capacitado y certificado para la protección de instalaciones, personas y bienes.'
    ],
    [
        'icon' => 'M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z',
        'title' => 'Patrullaje',
        'description' => 'Servicio de vigilancia móvil para monitoreo preventivo y respuesta rápida ante incidencias.'
    ],
    [
        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
        'title' => 'Monitoreo 24/7',
        'description' => 'Vigilancia continua con sistemas de monitoreo avanzados y respuesta inmediata.'
    ],
    [
        'icon' => 'M9 17v-2.118a3 3 0 00-.879-2.121L5 9.739V9a1 1 0 01.707-.293l4-4a1 1 0 011.414 1.414L8 9.293V15a1 1 0 11-2 0zM15 15v-4.261l-2.121 2.121A3 3 0 0012 15.118V17a1 1 0 01-2 0v-1.882a3 3 0 00.879-2.121L13 9.739V9a1 1 0 01.707-.293l4-4a1 1 0 011.414 1.414L16 9.293V15a1 1 0 11-2 0z',
        'title' => 'Análisis de Riesgos',
        'description' => 'Evaluación profesional de vulnerabilidades y diseño de estrategias de seguridad.'
    ],
    [
        'icon' => 'M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z',
        'title' => 'Control de Acceso',
        'description' => 'Sistemas de control y registro de entrada y salida de personal y visitantes.'
    ],
    [
        'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
        'title' => 'Consultoría',
        'description' => 'Asesoramiento especializado en seguridad integral y planes de contingencia.'
    ]
];
?>

<div class="section-container">
    <div class="text-center mb-16" data-animate="fade-in">
        <h2 class="text-4xl md:text-5xl font-bold text-navy-900 mb-6">
            Nuestros <span class="text-gold-600">Servicios</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Ofrecemos una amplia gama de servicios de seguridad profesional adaptados a las necesidades específicas de cada cliente.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach($services as $index => $service): ?>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-animate="slide-up">
                <div class="w-16 h-16 bg-gold-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $service['icon'] ?>"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-4"><?= e($service['title']) ?></h3>
                <p class="text-gray-600 leading-relaxed mb-6"><?= e($service['description']) ?></p>
                <a href="<?= url('contacto.php') ?>" class="text-gold-600 hover:text-gold-700 font-semibold flex items-center group">
                    Más información
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- CTA Section -->
    <div class="mt-16 text-center" data-animate="fade-in">
        <div class="bg-gradient-to-r from-gold-50 to-gold-100 p-8 rounded-2xl border border-gold-200">
            <h3 class="text-2xl font-bold text-navy-900 mb-4">¿Necesitas un servicio personalizado?</h3>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                Diseñamos soluciones de seguridad a medida según las necesidades específicas de tu empresa o evento.
            </p>
            <a href="<?= url('contacto.php') ?>" class="btn-primary">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                Solicitar Cotización Personalizada
            </a>
        </div>
    </div>
</div>