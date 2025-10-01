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
        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
        'title' => 'Monitoreo 24/7',
        'description' => 'Vigilancia continua con sistemas de monitoreo avanzados y respuesta inmediata.'
    ],
    [
        'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        'title' => 'Supervisión Constante',
        'description' => 'Eliminación de ausencias con nuestra supervisión constante la cual organiza horas antes los cambios de turno y asistencias del personal.'
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
    <!-- <div class="mt-16 text-center" data-animate="fade-in">
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
    </div> -->
</div>