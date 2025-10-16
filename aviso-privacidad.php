<?php
/**
 * SEGUREC - Aviso de Privacidad
 * 
 * Página de aviso de privacidad sobre el tratamiento de datos personales
 */

// Include configuration and functions
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Page-specific SEO data
$seo = array(
    'title' => 'SEGUREC - Aviso de Privacidad',
    'description' => 'Aviso de privacidad sobre el tratamiento de datos personales recopilados a través del formulario de contacto de SEGUREC.',
    'keywords' => 'aviso privacidad, datos personales, SEGUREC, protección datos, formulario contacto, ley protección datos',
    'image' => publicUrl('images/logo.webp')
);

// Start output buffering to capture page content
ob_start();
?>

<!-- Include Header Component -->
<?php includeComponent('Header'); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center bg-gradient-to-br from-navy-900 via-navy-800 to-navy-700 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <!-- Subtle legal pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="legal-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                            <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="0.5"/>
                            <circle cx="0" cy="0" r="1" fill="currentColor"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#legal-grid)" class="text-gold-500"/>
                </svg>
            </div>
            <!-- Professional overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-navy-900/95 via-navy-900/90 to-navy-800/90"></div>
        </div>

        <!-- Floating shield elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-20 w-32 h-32 border border-gold-500/20 rounded-lg rotate-12 animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 border border-gold-500/15 rounded-full"></div>
            <div class="absolute top-1/2 right-32 w-16 h-16 bg-gold-500/10 rounded-lg rotate-45"></div>
        </div>

        <div class="relative z-10 section-container">
            <div class="max-w-4xl">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-gold-500/20 text-gold-300 rounded-full text-sm font-semibold mb-6" data-animate="fade-in">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Protección de Datos
                </div>

                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight" data-animate="slide-up">
                    Aviso de<br>
                    <span class="text-gold-400 block">Privacidad</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl leading-relaxed" data-animate="slide-up">
                        En cumplimiento con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, 
                        SEGUREC pone a su disposición el presente Aviso de Privacidad con la finalidad de informarle sobre 
                        el tratamiento que se dará a sus datos personales.
                </p>
            </div>
        </div>
    </section>

    <!-- Contenido del Documento -->
    <section class="py-8 sm:py-12 lg:py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Contenido del Aviso -->
            <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none">
                
                <!-- Introducción -->
                <div class="mb-8 sm:mb-12 pb-6 sm:pb-8 border-b border-gray-200">
                    <p class="text-xs sm:text-sm text-gray-600">
                        <strong>Fecha de última actualización:</strong> <?= date('d/m/Y') ?>
                    </p>
                </div>

                <!-- 1. Identidad del Responsable -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        1. IDENTIDAD Y DOMICILIO DEL RESPONSABLE
                    </h2>
                    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg mb-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 text-sm">
                            <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                <p><strong>Denominación o Razón Social:</strong></p>
                                <p class="text-gray-700">SEGUREC</p>
                            </div>
                            <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                <p><strong>Domicilio:</strong></p>
                                <p class="text-gray-700">Blvd del Maestro Col. Cumbres #238, Local #3<br>Reynosa, Tamaulipas, México</p>
                            </div>
                            <div>
                                <p><strong>Teléfono:</strong></p>
                                <p class="text-gray-700 break-all sm:break-normal"><?= CONTACT_PHONE ?></p>
                            </div>
                            <div>
                                <p><strong>Correo electrónico:</strong></p>
                                <p class="text-gray-700 break-all sm:break-normal"><?= CONTACT_EMAIL ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Datos Personales -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        2. DATOS PERSONALES QUE SE RECABAN
                    </h2>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 leading-relaxed">
                        Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales 
                        de distintas formas: cuando usted nos los proporciona directamente a través del formulario de contacto 
                        en nuestro sitio web.
                    </p>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4">Los datos personales que recabamos de usted son los siguientes:</p>
                    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg">
                        <h3 class="font-semibold text-navy-900 mb-2 sm:mb-3 text-sm sm:text-base">Datos de Identificación y Contacto:</h3>
                        <ul class="list-disc pl-4 sm:pl-6 space-y-1 text-gray-700 text-sm sm:text-base">
                            <li>Nombre completo</li>
                            <li>Correo electrónico</li>
                            <li>Número telefónico</li>
                            <li>Empresa o razón social (cuando aplique)</li>
                            <li>Mensaje o consulta específica</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Finalidades -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        3. FINALIDADES DEL TRATAMIENTO
                    </h2>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 leading-relaxed">
                        Sus datos personales serán utilizados para las siguientes finalidades que son necesarias para 
                        el servicio que solicita:
                    </p>
                    
                    <div class="mb-4 sm:mb-6">
                        <h3 class="font-semibold text-navy-900 mb-2 sm:mb-3 text-sm sm:text-base">Finalidades Primarias:</h3>
                        <div class="bg-navy-50 p-3 sm:p-4 rounded-lg">
                            <ul class="list-disc pl-4 sm:pl-6 space-y-1 text-gray-700 text-sm sm:text-base">
                                <li>Responder a su solicitud de información sobre nuestros servicios de seguridad</li>
                                <li>Establecer comunicación para aclarar dudas sobre servicios</li>
                                <li>Proporcionar cotizaciones personalizadas</li>
                                <li>Gestionar el proceso de contratación de servicios</li>
                                <li>Cumplir con obligaciones legales y regulatorias</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 sm:mb-6">
                        <h3 class="font-semibold text-navy-900 mb-2 sm:mb-3 text-sm sm:text-base">Finalidades Secundarias:</h3>
                        <div class="bg-gold-50 p-3 sm:p-4 rounded-lg">
                            <ul class="list-disc pl-4 sm:pl-6 space-y-1 text-gray-700 text-sm sm:text-base">
                                <li>Envío de información promocional sobre nuestros servicios</li>
                                <li>Invitaciones a eventos, capacitaciones y conferencias</li>
                                <li>Encuestas de satisfacción y calidad del servicio</li>
                                <li>Análisis estadísticos para mejora continua de servicios</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Fundamento Legal -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        4. FUNDAMENTO LEGAL PARA EL TRATAMIENTO
                    </h2>
                    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg">
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                            El tratamiento de sus datos personales se fundamenta en su <strong>consentimiento expreso</strong> 
                            otorgado al aceptar el presente aviso de privacidad en nuestro formulario de contacto, así como en el 
                            <strong>interés legítimo</strong> para la prestación de los servicios de seguridad solicitados.
                        </p>
                    </div>
                </div>

                <!-- 5. Transferencias -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        5. TRANSFERENCIAS DE DATOS PERSONALES
                    </h2>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 leading-relaxed">
                        Le informamos que sus datos personales <strong>no serán transferidos</strong> a terceros dentro o fuera del país, 
                        salvo en los siguientes casos:
                    </p>
                    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg">
                        <ul class="list-disc pl-4 sm:pl-6 space-y-2 text-gray-700 text-sm sm:text-base">
                            <li>Cuando sea requerido por autoridades competentes en ejercicio de sus facultades</li>
                            <li>Cuando usted haya otorgado su consentimiento expreso para casos específicos</li>
                            <li>En los casos previstos en la Ley Federal de Protección de Datos Personales</li>
                        </ul>
                    </div>
                </div>

                <!-- 6. Derechos ARCO -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        6. DERECHOS ARCO
                    </h2>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 leading-relaxed">
                        Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las 
                        condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su 
                        información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); 
                        que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo 
                        utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines 
                        específicos (Oposición). Estos derechos se conocen como derechos ARCO.
                    </p>
                    
                    <div class="bg-navy-50 p-4 sm:p-6 rounded-lg mb-3 sm:mb-4">
                        <h3 class="font-semibold text-navy-900 mb-2 sm:mb-3 text-sm sm:text-base">Para ejercer cualquiera de los derechos ARCO, deberá:</h3>
                        <ol class="list-decimal pl-4 sm:pl-6 space-y-1 text-gray-700 text-sm sm:text-base">
                            <li>Presentar la solicitud por escrito a través del correo electrónico: <strong class="break-all sm:break-normal"><?= CONTACT_EMAIL ?></strong></li>
                            <li>Incluir en el asunto: "Ejercicio de Derechos ARCO"</li>
                            <li>Proporcionar su nombre completo</li>
                            <li>Acreditar su identidad mediante copia de documento oficial vigente</li>
                            <li>Describir de manera clara y precisa los datos respecto de los que busca ejercer alguno de los derechos</li>
                            <li>Señalar las razones por las que desea acceder, rectificar, cancelar u oponerse</li>
                        </ol>
                    </div>
                </div>

                <!-- 7. Modificaciones -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        7. MODIFICACIONES AL AVISO DE PRIVACIDAD
                    </h2>
                    <div class="bg-gold-50 p-4 sm:p-6 rounded-lg">
                        <p class="text-sm sm:text-base text-gray-700 mb-2 sm:mb-3 leading-relaxed">
                            El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas 
                            de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios 
                            que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por 
                            otras causas.
                        </p>
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                            Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de 
                            privacidad, a través de actualizaciones en nuestro sitio web: <strong class="break-all sm:break-normal">https://segurec.com.mx/aviso-privacidad></strong>
                        </p>
                    </div>
                </div>

                <!-- 8. Consentimiento -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-navy-900 mb-3 sm:mb-4 border-l-4 border-gold-500 pl-3 sm:pl-4">
                        8. CONSENTIMIENTO DE TRATAMIENTO DE DATOS PERSONALES
                    </h2>
                    <div class="bg-navy-50 p-4 sm:p-6 rounded-lg border-l-4 border-navy-500">
                        <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                            Al proporcionar sus datos personales a través del formulario de contacto así como los distintos medios de contacto presentes en nuestro sitio web y 
                            marcar la casilla de aceptación correspondiente, usted otorga su consentimiento expreso para que 
                            SEGUREC trate sus datos personales de conformidad con los términos y condiciones establecidos en 
                            el presente Aviso de Privacidad.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- Include Footer Component -->
<?php includeComponent('Footer'); ?>

<!-- Floating Buttons Component -->
<?php includeComponent('FloatingButtons'); ?>

<?php
// Capture page content
$content = ob_get_clean();

// Render the page using layout template
include __DIR__ . '/templates/layout.php';
?>