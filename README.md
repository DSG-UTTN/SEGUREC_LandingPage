# SEGUREC Landing Page - PHP Version

Esta es la versión migrada en PHP del sitio web de SEGUREC, una empresa de servicios de seguridad privada en Reynosa, Tamaulipas.

## 🚀 Características

- **Responsive Design**: Optimizado para dispositivos móviles y desktop
- **SEO Optimizado**: Meta tags, Schema.org, Open Graph
- **Componentes Modulares**: Arquitectura PHP basada en componentes
- **TailwindCSS**: Framework CSS para diseño moderno
- **Animaciones**: Efectos de scroll y transiciones suaves
- **Formulario de Contacto**: Sistema de cotizaciones integrado

## 📁 Estructura del Proyecto

```
PHP/
├── index.php              # Página principal
├── contacto.php           # Página de contacto
├── config/
│   └── config.php         # Configuración general
├── includes/
│   └── functions.php      # Funciones auxiliares
├── templates/
│   └── layout.php         # Plantilla principal
├── components/
│   ├── Header.php         # Componente cabecera
│   ├── Hero.php           # Sección hero
│   ├── About.php          # Sección sobre nosotros
│   ├── Services.php       # Servicios
│   ├── WhyChooseUs.php    # Por qué elegirnos
│   ├── MissionVision.php  # Misión y visión
│   ├── Footer.php         # Pie de página
│   └── FloatingButtons.php # Botones flotantes
├── public/
│   ├── images/            # Imágenes del sitio
│   └── favicon/           # Iconos y favicons
└── assets/
    ├── css/               # Estilos CSS
    └── js/                # JavaScript personalizado
```

## ⚡ Instalación y Configuración

### Requisitos
- PHP 7.4 o superior
- Servidor web (Apache/Nginx)
- Extensión PHP para envío de emails (opcional)

### Configuración del Servidor

1. **Apache (.htaccess)**
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^.]+)$ $1.php [NC,L]

# Comprimir archivos
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>

# Cache para archivos estáticos
<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
</IfModule>
```

2. **Nginx**
```nginx
location / {
    try_files $uri $uri.php $uri/ =404;
}

location ~ \.php$ {
    fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}
```

### Configuración del Proyecto

1. **Configurar variables en `config/config.php`:**
```php
// Información de contacto
define('CONTACT_PHONE', '+528991135304');
define('CONTACT_EMAIL', 'gerencia@segurec.com.mx');

// URL del sitio
define('SITE_URL', 'https://tusitio.com');
```

2. **Verificar permisos de archivos:**
```bash
chmod 755 public/
chmod 644 public/images/*
```

## 🎨 Personalización

### Colores del Tema
El sitio utiliza una paleta de colores corporativa definida en TailwindCSS:

- **Navy**: Azul corporativo (#0f172a - #334155)
- **Gold**: Dorado corporativo (#b8860b - #854d0e)
- **Red**: Rojo de seguridad (#dc2626)

### Componentes

Cada componente es un archivo PHP independiente que puede ser modificado fácilmente:

```php
<?php includeComponent('NombreComponente', ['data' => $valor]); ?>
```

### SEO

El sistema incluye funciones para manejar SEO automáticamente:

```php
$seo = [
    'title' => 'Título de la página',
    'description' => 'Descripción de la página',
    'keywords' => 'palabras, clave, separadas',
    'image' => publicUrl('images/imagen.jpg')
];
```

## 🛠️ Funcionalidades

### Sistema de Componentes
- Componentes reutilizables con PHP
- Paso de datos entre componentes
- Inclusión condicional de archivos

### Helpers y Utilidades
- Funciones para URLs y assets
- Funciones de escape HTML
- Gestión automática de rutas

### Optimizaciones
- Minificación HTML (en producción)
- Compresión de archivos estáticos
- Cache de navegador configurado
- Carga optimizada de recursos

## 📱 Características Responsive

- Diseño mobile-first
- Menú hamburguesa en móviles
- Componentes adaptables
- Imágenes responsive

## 🔐 Seguridad

- Escape de datos de salida
- Validación de formularios
- Configuración de headers de seguridad
- Protección contra inyección SQL (en formularios)

## 🚀 Deployment

1. **Subir archivos al servidor**
2. **Configurar base de datos** (si es necesario)
3. **Configurar variables de entorno**
4. **Verificar permisos**
5. **Probar funcionalidad**

## 📞 Soporte

Para soporte técnico o dudas sobre la implementación, contacta al equipo de desarrollo.

## 📄 Licencia

© 2024 SEGUREC. Todos los derechos reservados.

---

*Migrado de Astro a PHP por el equipo de desarrollo de SEGUREC*