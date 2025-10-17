<?php
/**
 * SEGUREC Landing Page - Configuration File
 * 
 * Main configuration file for the PHP version of SEGUREC landing page
 */

// Site Configuration
define('SITE_NAME', 'SEGUREC');
define('SITE_URL', 'https://segurec.com.mx');
define('SITE_DESCRIPTION', 'Servicios Integrales de Seguridad en Reynosa, Tamaulipas');
define('SITE_KEYWORDS', 'Servicios de guardia capacitados, Patrullaje continuo, Monitoreo 24 horas, Análisis de riesgos, Supervisión de riesgos, Acciones preventivas, Manual de operaciones de seguridad, Guardias de seguridad, Guardias bilingües, Recepcionistas bilingües, Seguridad empresarial, Seguridad residencial, Servicios de seguridad personalizados, Protección 24/7, Seguridad y vigilancia, Servicios de vigilancia móvil, Monitoreo vía celular, Guardias de seguridad profesional, Personal de seguridad capacitado, Soluciones de seguridad, Control de acceso, Seguridad y protección, Seguridad corporativa, Seguridad para eventos, Servicios de seguridad integrales, Monitoreo en tiempo real, Vigilancia preventiva, Seguridad privada, Empresa de seguridad, Seguridad y control de riesgos');

// Contact Information
define('CONTACT_PHONE', '+528991077423');
define('CONTACT_EMAIL', 'ventas@segurec.com.mx');
define('BUSINESS_HOURS', 'Lunes a Domingo 7:00-19:00');

// Path Configuration
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('COMPONENTS_PATH', BASE_PATH . '/components');
define('TEMPLATES_PATH', BASE_PATH . '/templates');

// URL Configuration - Compatible con PHP 7.4+
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost:8002';

// For development server, use simple base URL
if ($host === 'localhost' || strpos($host, 'localhost:') === 0) {
    $baseUrl = $protocol . $host;
} else {
    $scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '/';
    $scriptDir = dirname($scriptName);
    $baseUrl = $protocol . $host . ($scriptDir !== '/' ? $scriptDir : '');
}

define('BASE_URL', rtrim($baseUrl, '/'));
define('ASSETS_URL', BASE_URL . '/assets');
define('PUBLIC_URL', BASE_URL . '/public');

// Asset Versioning for Cache Busting
define('ASSET_VERSION', '2025-10-17-fonts-optimization');
define('ASSET_VERSION_QUERY', '?v=' . ASSET_VERSION);

// SEO Defaults - Compatible con PHP 5.6
$seoDefaults = array(
    'title' => 'SEGUREC - Servicios Integrales de Seguridad en Reynosa, Tamaulipas',
    'description' => 'Empresa líder en servicios de seguridad privada en Reynosa, Tamaulipas. Ofrecemos guardias capacitados, patrullaje, monitoreo 24/7 y soluciones integrales de protección.',
    'keywords' => SITE_KEYWORDS,
    'image' => PUBLIC_URL . '/images/portada.webp',
    'author' => 'SEGUREC - Servicios de Seguridad Privada',
    'locale' => 'es_MX'
);

/**
 * Get current page URL
 */
function getCurrentUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    return $protocol . $host . $uri;
}

/**
 * Generate asset URL
 */
function asset($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

/**
 * Generate public URL
 */
function publicUrl($path) {
    return PUBLIC_URL . '/' . ltrim($path, '/');
}

/**
 * Generate base URL
 */
function url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}

/**
 * Escape HTML output
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
