# SEGUREC Landing Page

Sitio web corporativo para SEGUREC, empresa de servicios de seguridad privada en Reynosa, Tamaulipas.

## �️ Stack Tecnológico

- **PHP 5.6+**: Compatible con servidores legacy
- **TailwindCSS**: Framework CSS compilado
- **JavaScript Vanilla**: Sin dependencias externas
- **HTML Semántico**: Estructura SEO-optimizada
- **Sistema de Componentes**: Arquitectura modular PHP

## � Sistema de Correo

### Configuración
```php
// config/config.php
define('CONTACT_EMAIL', 'ventas@segurec.com.mx');

// includes/functions.php - Doble destinatario
$to = CONTACT_EMAIL . ', gerencia@segurec.com.mx';
```

### Funcionalidad
- **Envío dual**: `ventas@segurec.com.mx` y `gerencia@segurec.com.mx`
- **Formato MIME**: Soporte HTML y texto plano
- **Confirmación WhatsApp**: Enlaces automáticos en emails
- **Validación CSRF**: Token de seguridad en formularios
- **Compatible PHP 5.6**: Sin dependencias modernas

## 📁 Estructura para FTP

```
public_html/              # Raíz del servidor
├── index.php            # Página principal
├── contacto.php         # Formulario de contacto
├── tecnologia.php       # Página adicional
├── config/
│   └── config.php       # Variables del sitio
├── includes/
│   └── functions.php    # Lógica de correo
├── components/          # Componentes reutilizables
│   ├── Header.php
│   ├── Hero.php
│   ├── Footer.php
│   └── FloatingButtons.php
└── public/
    └── images/          # Recursos gráficos
```

### Archivos NO Subir
- `node_modules/`
- `package.json`
- `tailwind.config.js`
- `postcss.config.js`
- `src/` (código fuente TailwindCSS)
- `*.md` (documentación)

## ⚡ Desarrollo Local

### Compilar CSS
```bash
npm install
npm run build:css
```

### Servidor Local
```bash
php -S localhost:8000
```

## 🚀 Deploy FTP

1. **Compilar assets**: `npm run build:css`
2. **Subir archivos**: Solo contenido de producción (ver estructura arriba)
3. **Verificar permisos**: `chmod 755` para directorios
4. **Probar email**: Validar envío a ambos destinatarios

## 📞 Contacto

- **Email**: ventas@segurec.com.mx | gerencia@segurec.com.mx
- **WhatsApp**: +528991077423
- **Horarios**: Lunes a Domingo 7:00-19:00

---

*© 2025 SEGUREC - Servicios de Seguridad Privada*