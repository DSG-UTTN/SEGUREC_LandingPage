# Configuración de Correo Electrónico - SEGUREC Landing Page

## 📧 Cambios Realizados

La configuración de correo electrónico ha sido actualizada para usar **ventas@segurec.com.mx** como destinatario principal, basándose en la configuración de la versión original del sitio.

### Archivos Modificados

1. **`config/config.php`**
   - ✅ Cambiado `CONTACT_EMAIL` de `dsg.segurec@gmail.com` a `ventas@segurec.com.mx`

2. **`includes/functions.php`**
   - ✅ Función `sendContactEmail()` mejorada con configuración MIME multipart
   - ✅ Headers compatibles con la versión original
   - ✅ Función `sendConfirmationEmail()` actualizada
   - ✅ Remitente configurado como `ventas@segurec.com.mx`

## 🔧 Configuración Técnica

### Características Implementadas

- **Destinatario**: `ventas@segurec.com.mx`
- **Remitente**: `ventas@segurec.com.mx`
- **Reply-To**: Email del usuario que envía el formulario
- **Formato**: HTML con MIME multipart (compatible con versión original)
- **Codificación**: UTF-8
- **Plantilla**: Mejorada con estilos corporativos

### Comparación con Versión Original

| Aspecto | Versión Original | Nueva Versión PHP |
|---------|------------------|-------------------|
| Destinatario | `gerencia@segurec.com.mx` | `ventas@segurec.com.mx` |
| Headers MIME | ✅ Multipart | ✅ Multipart |
| Codificación | UTF-8 | UTF-8 |
| Plantilla HTML | Archivo separado | Embebida con estilos |
| Confirmación | ❌ No | ✅ Sí |
| Validación | Básica | Avanzada + CSRF |

## 🧪 Pruebas

### Archivo de Prueba
Se ha creado `test_email.php` para verificar la configuración:

```bash
http://tu-dominio.com/test_email.php
```

**⚠️ IMPORTANTE**: Eliminar `test_email.php` antes de producción.

### Verificaciones que Realiza
- ✅ Función `mail()` disponible
- ✅ Configuración SMTP del servidor
- ✅ Envío de correo de prueba
- ✅ Modo desarrollo vs producción

## 🚀 Configuración en Producción

### 1. Configuración del Servidor de Correo

Asegúrate de que tu servidor tenga configurado:

```ini
; php.ini
SMTP = tu.servidor.smtp.com
smtp_port = 587
sendmail_from = ventas@segurec.com.mx
```

### 2. Cuenta de Correo

La cuenta `ventas@segurec.com.mx` debe estar creada y configurada en tu servidor de correo.

### 3. Prueba en Producción

1. Sube los archivos al servidor
2. Visita `test_email.php`
3. Verifica que llegue el correo
4. Elimina `test_email.php`

## 🔒 Seguridad Implementada

- **CSRF Protection**: Token de seguridad
- **Rate Limiting**: Máximo 3 intentos por IP cada 5 minutos
- **Honeypot**: Campo oculto anti-spam
- **Validación de Referrer**: Solo acepta envíos desde el sitio
- **Sanitización**: Todos los datos se sanitizan antes del envío

## 📋 Campos del Formulario

El formulario captura y envía:

- ✅ **Nombre** (requerido)
- ✅ **Email** (requerido, validado)
- ✅ **Teléfono** (requerido)
- ✅ **Empresa** (opcional)
- ✅ **Servicio de Interés** (opcional)
- ✅ **Mensaje** (requerido)
- ✅ **Fecha y hora** (automático)

## 🚨 Solución de Problemas

### Correo No Se Envía

1. **Verifica la función mail()**:
   ```php
   var_dump(function_exists('mail'));
   ```

2. **Revisa logs del servidor**:
   ```bash
   tail -f /var/log/mail.log
   tail -f /var/log/apache2/error.log
   ```

3. **Configuración PHP**:
   ```bash
   php -m | grep mail
   phpinfo() | grep mail
   ```

### Alternativas Recomendadas

Si `mail()` no funciona, considera:

- **SendGrid** (recomendado para empresas)
- **Mailgun**
- **Amazon SES**
- **PHPMailer con SMTP**

## 📞 Contacto para Soporte

Si necesitas ayuda con la configuración:

- **Email**: ventas@segurec.com.mx
- **Teléfono**: +52 899 113 5304

---

*Configuración actualizada: Octubre 2025*
*Compatible con versión original de SEGUREC*