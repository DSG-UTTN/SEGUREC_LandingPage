<?php
/**
 * Layout Helper Functions
 * 
 * Common functions used across the application
 */

/**
 * Include component file
 */
function includeComponent($componentName, $data = []) {
    $componentFile = COMPONENTS_PATH . '/' . $componentName . '.php';
    if (file_exists($componentFile)) {
        // Extract data array to variables
        extract($data);
        include $componentFile;
    } else {
        echo "<!-- Component not found: {$componentName} -->";
    }
}

/**
 * Render SEO meta tags
 */
function renderSeoMeta($seo = []) {
    global $seoDefaults;
    
    // Merge with defaults
    $seo = array_merge($seoDefaults, $seo);
    
    $currentUrl = getCurrentUrl();
    $imageUrl = $seo['image'];
    
    // Basic SEO tags
    echo '<title>' . e($seo['title']) . '</title>' . "\n";
    echo '<meta name="description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta name="keywords" content="' . e($seo['keywords']) . '">' . "\n";
    echo '<meta name="author" content="' . e($seo['author']) . '">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
    echo '<link rel="canonical" href="' . e($currentUrl) . '">' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . e($currentUrl) . '">' . "\n";
    echo '<meta property="og:title" content="' . e($seo['title']) . '">' . "\n";
    echo '<meta property="og:description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta property="og:image" content="' . e($imageUrl) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . e(SITE_NAME) . '">' . "\n";
    echo '<meta property="og:locale" content="' . e($seo['locale']) . '">' . "\n";
    
    // Twitter Card tags
    echo '<meta property="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta property="twitter:url" content="' . e($currentUrl) . '">' . "\n";
    echo '<meta property="twitter:title" content="' . e($seo['title']) . '">' . "\n";
    echo '<meta property="twitter:description" content="' . e($seo['description']) . '">' . "\n";
    echo '<meta property="twitter:image" content="' . e($imageUrl) . '">' . "\n";
}

/**
 * Render favicon links
 */
function renderFavicons() {
    $faviconPath = publicUrl('favicon/');
    ?>
    <!-- Favicon and App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $faviconPath ?>apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $faviconPath ?>apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $faviconPath ?>apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $faviconPath ?>apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $faviconPath ?>apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $faviconPath ?>apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $faviconPath ?>apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $faviconPath ?>apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $faviconPath ?>apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $faviconPath ?>android-icon-192x192.png">
    <link rel="icon" sizes="32x32" href="<?= $faviconPath ?>favicon.ico">
    <link rel="icon" sizes="96x96" href="<?= $faviconPath ?>favicon.ico">
    <link rel="icon" sizes="16x16" href="<?= $faviconPath ?>favicon.ico">
    <link rel="manifest" href="<?= $faviconPath ?>manifest.json">
    <meta name="msapplication-TileColor" content="#0f172a">
    <meta name="msapplication-TileImage" content="<?= $faviconPath ?>ms-icon-144x144.png">
    <meta name="theme-color" content="#0f172a">
    <?php
}

/**
 * Check if current page is active
 */
function isActivePage($page) {
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
    return $currentPage === $page ? 'active' : '';
}

/**
 * Get page title based on current page
 */
function getPageTitle($customTitle = null) {
    if ($customTitle) {
        return $customTitle;
    }
    
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');
    
    switch ($currentPage) {
        case 'index':
            return 'SEGUREC - Servicios Integrales de Seguridad en Reynosa, Tamaulipas';
        case 'contacto':
            return 'Contacto - SEGUREC Servicios de Seguridad';
        default:
            return 'SEGUREC - Servicios de Seguridad Privada';
    }
}