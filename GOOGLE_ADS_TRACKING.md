# 📊 Google Ads Conversion Tracking - Implementación Completa

## 📅 Fecha de Implementación
**Octubre 17, 2025**

---

## 🎯 **OBJETIVO**

Implementar el seguimiento de conversiones de Google Ads para medir los clicks en botones de contacto antes de que ocurra una conversión real.

---

## ✅ **IMPLEMENTACIÓN REALIZADA**

### **1. Código Base en `layout.php`**

Se agregó el snippet de Google Tag para conversiones después del Google Analytics tag:

```javascript
<!-- Google tag (gtag.js) event - delayed navigation helper -->
<script>
  // Helper function to delay opening a URL until a gtag event is sent.
  // Call it in response to an action that should navigate to a URL.
  function gtagSendEvent(url) {
    var callback = function () {
      if (typeof url === 'string') {
        window.location = url;
      }
    };
    gtag('event', 'conversion_event_contact_1', {
      'event_callback': callback,
      'event_timeout': 2000,
      // <event_parameters>
    });
    return false;
  }
</script>
```

**Ubicación:** `templates/layout.php` (líneas ~85-98)

---

## 🔘 **BOTONES CON TRACKING IMPLEMENTADO**

### **A. Header - Navegación Principal**

| Botón | Ubicación | Evento |
|-------|-----------|--------|
| **"Cotizar Servicios"** (Desktop) | `components/Header.php` línea ~75 | `onclick="return gtagSendEvent('<?= url('contacto') ?>')"` |
| **"Contactar Ahora"** (Móvil) | `components/Header.php` línea ~135 | `onclick="return gtagSendEvent('<?= url('contacto') ?>')"` |

```php
<!-- Ejemplo Desktop -->
<a href="<?= url('contacto') ?>" 
   class="btn-primary" 
   onclick="return gtagSendEvent('<?= url('contacto') ?>')">
   Cotizar Servicios
</a>
```

---

### **B. Hero Section - CTAs Principales**

| Botón | Ubicación | Evento |
|-------|-----------|--------|
| **"Solicitar Cotización Gratuita"** | `index.php` línea ~92 | `onclick="return gtagSendEvent('<?= url('contacto') ?>')"` |
| **"Llamar Ahora"** | `index.php` línea ~99 | `onclick="return gtagSendEvent('tel:<?= CONTACT_PHONE ?>')"` |

```php
<!-- CTA Principal -->
<a href="<?= url('contacto') ?>" 
   class="bg-gold-500 text-navy-900 px-8 py-4 rounded-xl" 
   onclick="return gtagSendEvent('<?= url('contacto') ?>')">
   Solicitar Cotización Gratuita
</a>

<!-- CTA Teléfono -->
<a href="tel:<?= CONTACT_PHONE ?>" 
   class="bg-transparent text-white px-8 py-4 rounded-xl" 
   onclick="return gtagSendEvent('tel:<?= CONTACT_PHONE ?>')">
   Llamar Ahora: (899) 107-7423
</a>
```

---

### **C. Página Tecnología - CTAs**

| Botón | Ubicación | Evento |
|-------|-----------|--------|
| **"Solicitar Cotización Gratuita"** | `tecnologia.php` línea ~329 | `onclick="return gtagSendEvent('<?= url('contacto') ?>')"` |
| **"Llamar Ahora"** | `tecnologia.php` línea ~336 | `onclick="return gtagSendEvent('tel:<?= CONTACT_PHONE ?>')"` |

---

### **D. Botón Flotante de WhatsApp**

| Botón | Ubicación | Evento |
|-------|-----------|--------|
| **WhatsApp Flotante** | `components/FloatingButtons.php` línea ~7 | `onclick="return gtagSendEvent('https://wa.me/+528991077423')"` |

```php
<a href="https://wa.me/+528991077423?text=..." 
   target="_blank"
   rel="noopener noreferrer"
   onclick="return gtagSendEvent('https://wa.me/+528991077423')">
   <!-- WhatsApp Icon -->
</a>
```

---

### **E. Formulario de Contacto**

**Evento especial:** Se dispara cuando el formulario se envía **exitosamente**.

**Ubicación:** `contacto.php` (línea ~547)

```javascript
.then(data => {
    if (data.success) {
        // Trigger Google Ads conversion event
        if (typeof gtag === 'function') {
            gtag('event', 'conversion_event_contact_1', {
                // <event_parameters>
            });
        }
        
        showMessage(data.message, 'success');
        form.reset();
    }
    // ...
})
```

---

## 📈 **EVENTOS TRACKEADOS**

### **Evento Principal: `conversion_event_contact_1`**

Este evento se dispara en las siguientes acciones:

1. ✅ **Click en "Cotizar Servicios"** (Header Desktop)
2. ✅ **Click en "Contactar Ahora"** (Header Móvil)
3. ✅ **Click en "Solicitar Cotización Gratuita"** (Hero Section)
4. ✅ **Click en "Llamar Ahora"** (Hero Section)
5. ✅ **Click en "Solicitar Cotización Gratuita"** (Tecnología Page)
6. ✅ **Click en "Llamar Ahora"** (Tecnología Page)
7. ✅ **Click en botón de WhatsApp flotante**
8. ✅ **Envío exitoso del formulario de contacto**

---

## 🔧 **CÓMO FUNCIONA**

### **Delayed Navigation Helper**

La función `gtagSendEvent(url)` implementa un patrón de **navegación retrasada**:

1. **Usuario hace click** en botón/enlace
2. **Se dispara el evento** `conversion_event_contact_1` a Google Ads
3. **Google Ads recibe el evento** (timeout máximo: 2 segundos)
4. **Callback ejecuta navegación** al URL destino
5. **Usuario llega a destino** (contacto, tel:, WhatsApp)

```javascript
function gtagSendEvent(url) {
  var callback = function () {
    if (typeof url === 'string') {
      window.location = url;  // ← Navegación después del evento
    }
  };
  gtag('event', 'conversion_event_contact_1', {
    'event_callback': callback,    // ← Callback de navegación
    'event_timeout': 2000,          // ← Máximo 2 segundos de espera
  });
  return false;  // ← Previene navegación inmediata
}
```

---

## 📊 **VALIDACIÓN EN GOOGLE ADS**

### **Paso 1: Verificar en Google Tag Assistant**

1. Instalar [Google Tag Assistant](https://chrome.google.com/webstore/detail/tag-assistant-legacy-by-g/kejbdjndbnbjgmefkgdddjlbokphdefk)
2. Visitar tu sitio web
3. Activar Tag Assistant
4. Hacer click en cualquier botón de contacto
5. Verificar que aparezca `conversion_event_contact_1`

### **Paso 2: Verificar en Google Ads Console**

1. Abrir Google Ads
2. Ir a **Tools & Settings** → **Conversions**
3. Buscar `conversion_event_contact_1`
4. Verificar que los clicks se estén registrando

### **Paso 3: Testing en Consola del Navegador**

Abrir DevTools (F12) → Console:

```javascript
// Test manual del evento
gtag('event', 'conversion_event_contact_1', {
  'debug_mode': true
});

// Verificar que gtag esté disponible
console.log(typeof gtag); // Debe devolver 'function'

// Test de gtagSendEvent (sin navegación real)
gtagSendEvent('#test');
```

---

## 🎯 **PARÁMETROS ADICIONALES (OPCIONAL)**

Puedes agregar parámetros personalizados al evento:

```javascript
gtag('event', 'conversion_event_contact_1', {
  'event_callback': callback,
  'event_timeout': 2000,
  'value': 1.0,                    // Valor de conversión
  'currency': 'MXN',               // Moneda
  'send_to': 'AW-XXXXXXXXX/XXX',  // ID de conversión específico
  'button_location': 'header',     // Ubicación del botón
  'button_text': 'Cotizar Servicios' // Texto del botón
});
```

---

## 🔍 **DEBUGGING**

### **Verificar eventos en tiempo real:**

```javascript
// Agregar listener temporal en layout.php (solo para debug)
window.addEventListener('gtag_event', function(e) {
  console.log('Google Ads Event:', e.detail);
});

// En gtagSendEvent, agregar:
console.log('Sending conversion event to Google Ads for URL:', url);
```

### **Errores Comunes:**

| Error | Causa | Solución |
|-------|-------|----------|
| `gtag is not defined` | Google tag no cargó | Verificar script en `<head>` |
| Evento no aparece en Google Ads | ID de conversión incorrecto | Verificar `conversion_event_contact_1` |
| Navegación no funciona | `return false` falta | Agregar `return` en `onclick` |
| Timeout muy corto | Red lenta | Aumentar `event_timeout` a 3000ms |

---

## 📝 **ARCHIVOS MODIFICADOS**

| Archivo | Cambios | Líneas |
|---------|---------|--------|
| `templates/layout.php` | ✅ Snippet de Google Tag | ~85-98 |
| `components/Header.php` | ✅ 2 botones con tracking | ~75, ~135 |
| `components/FloatingButtons.php` | ✅ Botón WhatsApp | ~7 |
| `index.php` | ✅ 2 CTAs Hero section | ~92, ~99 |
| `tecnologia.php` | ✅ 2 CTAs Tecnología | ~329, ~336 |
| `contacto.php` | ✅ Evento en formulario | ~547 |

---

## 🚀 **PRÓXIMOS PASOS**

### **1. Monitoreo Inicial (Primeros 7 días)**
- Verificar que eventos se estén registrando correctamente
- Analizar tasa de conversión por fuente de tráfico
- Identificar botones con mayor engagement

### **2. Optimización A/B Testing**
- Probar diferentes textos en CTAs
- Testear posiciones de botones
- Medir impacto de colores y diseños

### **3. Segmentación de Eventos (Opcional)**
- Crear eventos separados por tipo:
  - `conversion_event_contact_form` (Formulario)
  - `conversion_event_whatsapp_click` (WhatsApp)
  - `conversion_event_phone_call` (Llamadas)

### **4. Remarketing**
- Crear audiencias basadas en usuarios que hicieron click
- Configurar campañas de remarketing específicas

---

## 📞 **CONTACTO PARA SOPORTE**

Si tienes dudas sobre la implementación:

- **Google Ads Help:** https://support.google.com/google-ads/answer/6331304
- **Google Tag Manager:** https://tagmanager.google.com/
- **Google Analytics 4:** https://analytics.google.com/

---

## ✅ **CHECKLIST DE VALIDACIÓN**

- [x] Snippet de Google Tag agregado en `layout.php`
- [x] Función `gtagSendEvent()` implementada
- [x] Botones de Header con tracking
- [x] CTAs de Hero con tracking
- [x] CTAs de Tecnología con tracking
- [x] Botón WhatsApp con tracking
- [x] Formulario de contacto con tracking
- [ ] Validación en Google Tag Assistant
- [ ] Verificación en Google Ads Console
- [ ] Testing en dispositivos móviles
- [ ] Monitoreo de conversiones (7 días)

---

**Implementado por:** GitHub Copilot  
**Fecha:** Octubre 17, 2025  
**Versión:** 1.0
