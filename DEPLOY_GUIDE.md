# 🚀 Guía Completa de Despliegue Seguro - SEGUREC Landing Page

## 📋 Resumen del Proyecto

**Objetivo:** Reemplazar el sitio original de SEGUREC con la nueva versión PHP mejorada
**Servidor:** Mismo servidor que el sitio original (servidor PHP con función mail())
**Email:** Configurado para `ventas@segurec.com.mx`
**Método:** Despliegue seguro con rollback automático

---

## 🎯 Estrategia de Despliegue

### **Por qué esta estrategia es segura:**
- ✅ **Zero Downtime**: El sitio original sigue funcionando durante las pruebas
- ✅ **Rollback Instantáneo**: Si algo falla, vuelves al original en segundos
- ✅ **Pruebas Reales**: Testas en el servidor real con la configuración real
- ✅ **Sin Riesgo**: Nunca tocas el sitio original hasta estar 100% seguro

---

## 📁 Estructura de Archivos para Despliegue

```
/public_html/                     (Sitio original - NO TOCAR)
├── index.php                    (sitio original funcional)
├── estilos.css                  (CSS original)
├── envio_formulario.php         (email original)
├── jquery.js
├── animate.css
├── video.mp4
├── images/                      (carpeta original)
└── aos/                         (carpeta original)

/public_html/prueba/             (Nueva versión para testing)
├── index.php                   (nueva versión PHP)
├── config/
│   └── config.php              (ventas@segurec.com.mx)
├── includes/
│   └── functions.php           (sendContactEmail mejorado)
├── components/
├── templates/
├── public/
├── test_email.php              (solo para pruebas)
└── deploy.php                  (gestión de despliegue)

/public_html/backup_original/    (Backup antes de migrar)
├── (todos los archivos originales)
```

---

## 🔧 **PASO A PASO: Despliegue Seguro**

### **Fase 1: Preparación (5 minutos)**

1. **Verificar acceso FTP/SFTP**
   ```bash
   # Conectar a tu servidor
   # Navegar a /public_html/
   # Verificar que puedes crear carpetas
   ```

2. **Crear estructura de directorios**
   ```bash
   mkdir /public_html/prueba
   mkdir /public_html/backup_original
   ```

### **Fase 2: Subir Nueva Versión (10 minutos)**

1. **Subir TODA la carpeta PHP a `/prueba/`**
   - Incluir todos los archivos de la nueva versión
   - **IMPORTANTE**: Mantener la estructura de carpetas exacta
   - Incluir `test_email.php` y `deploy.php`

2. **Verificar archivos subidos**
   ```
   /public_html/prueba/
   ├── index.php              ✅
   ├── config/config.php      ✅
   ├── includes/functions.php ✅
   ├── test_email.php         ✅
   └── deploy.php             ✅
   ```

### **Fase 3: Pruebas de Funcionalidad (15 minutos)**

1. **Probar detección de entorno**
   - Visitar: `https://tudominio.com/prueba/deploy.php`
   - Debe mostrar "🔴 PRODUCCIÓN"

2. **Probar configuración de email**
   - Visitar: `https://tudominio.com/prueba/test_email.php`
   - Verificar que muestre configuración correcta

3. **Probar envío de email**
   - En `test_email.php`, debe ejecutar las pruebas
   - **Resultado esperado**: ✅ Email enviado a `ventas@segurec.com.mx`
   - **Verificar**: Revisar bandeja de entrada de `ventas@segurec.com.mx`

4. **Probar sitio completo**
   - Visitar: `https://tudominio.com/prueba/`
   - Verificar navegación, estilos, componentes
   - Probar formulario de contacto real

### **Fase 4: Backup del Original (5 minutos)**

```bash
# Copiar TODOS los archivos originales a backup
cp -r /public_html/* /public_html/backup_original/
# Excepto la carpeta /prueba/ y /backup_original/
```

### **Fase 5: Migración Final (10 minutos)**

**Solo si TODAS las pruebas fueron exitosas:**

1. **Eliminar archivos originales**
   ```bash
   # Eliminar todo EXCEPTO /prueba/ y /backup_original/
   rm /public_html/index.php
   rm /public_html/estilos.css
   rm -rf /public_html/images/
   # etc...
   ```

2. **Mover nueva versión**
   ```bash
   # Mover contenido de /prueba/ a /public_html/
   mv /public_html/prueba/* /public_html/
   ```

3. **Limpiar archivos de desarrollo**
   ```bash
   rm /public_html/test_email.php
   rm /public_html/deploy.php
   rmdir /public_html/prueba/
   ```

4. **Verificar sitio final**
   - Visitar: `https://tudominio.com/`
   - Probar formulario de contacto
   - Verificar que llegue email a `ventas@segurec.com.mx`

---

## 🆘 **Rollback de Emergencia**

### **Si algo sale mal en cualquier momento:**

```bash
# 1. Eliminar archivos problemáticos
rm -rf /public_html/*

# 2. Restaurar desde backup
cp -r /public_html/backup_original/* /public_html/

# 3. Verificar sitio original
# Visitar: https://tudominio.com/
# Debe funcionar como antes
```

### **Tiempo de rollback:** 2-3 minutos

---

## ✅ **Checklist Final**

### **Antes de comenzar:**
- [ ] Acceso FTP/SFTP funcionando
- [ ] Archivos de nueva versión listos
- [ ] Email `ventas@segurec.com.mx` configurado en servidor
- [ ] Horario de bajo tráfico seleccionado

### **Durante las pruebas:**
- [ ] `test_email.php` funciona correctamente
- [ ] Email de prueba llegó a `ventas@segurec.com.mx`
- [ ] Sitio de prueba se ve correctamente
- [ ] Formulario de contacto funciona
- [ ] No hay errores en logs del servidor

### **Después de migrar:**
- [ ] Sitio principal funciona correctamente
- [ ] Formulario envía emails correctamente
- [ ] Archivos de desarrollo eliminados
- [ ] Backup del original guardado
- [ ] Cliente notificado del cambio exitoso

---

## 📊 **Comparación de Configuraciones**

| Aspecto | Sitio Original | Nueva Versión | Status |
|---------|----------------|---------------|---------|
| Destinatario | `gerencia@segurec.com.mx` | `ventas@segurec.com.mx` | ✅ Actualizado |
| Función mail() | ✅ Sí | ✅ Sí | ✅ Compatible |
| Headers MIME | Multipart | Multipart | ✅ Compatible |
| Codificación | UTF-8 | UTF-8 | ✅ Compatible |
| Plantilla HTML | Archivo separado | Embebida | ✅ Mejorada |
| Validación | Básica | Avanzada + CSRF | ✅ Mejorada |
| Confirmación | ❌ No | ✅ Sí | ✅ Nueva característica |

---

## 📞 **Contacto de Soporte**

**En caso de problemas durante el despliegue:**

- **Email**: ventas@segurec.com.mx
- **Teléfono**: +52 899 113 5304
- **Desarrollador**: DSG-UTTN
- **Repositorio**: SEGUREC_LandingPage

---

## 🕐 **Tiempo Estimado Total**

- **Preparación**: 5 minutos
- **Subida de archivos**: 10 minutos
- **Pruebas**: 15 minutos
- **Backup**: 5 minutos
- **Migración**: 10 minutos
- **Verificación final**: 5 minutos

**Total**: ~50 minutos (incluyendo verificaciones)

---

*Guía actualizada: Octubre 2025*  
*Versión: 1.0 - Despliegue Seguro*