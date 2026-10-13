# Camiglobo Barcelona — Reestructuración MVC (demo de arquitectura)

> ⚠️ **Este repo no es el deploy en producción.**  
> Es una **reestructura / demo de arquitectura**: el mismo e-commerce organizado en carpetas tipo framework (MVC) para mostrar cómo estructuraría el proyecto.  
> **No está pensado para clonar y arrancar** como la tienda en vivo.

**[🌐 Tienda en producción → camiglobo.com](https://camiglobo.com)** · **[📦 Código en producción → repo proyecto](https://github.com/juancasano/proyecto)**

---

## 📁 Estructura del Proyecto

Esta reorganización sigue convenciones modernas de arquitectura, similares a frameworks como Angular:

```
camiglobo/
├── public/                 # Archivos públicos (assets)
│   ├── css/               # Estilos CSS
│   ├── js/                # Scripts JavaScript
│   └── images/            # Imágenes y recursos
├── src/                    # Código fuente principal
│   ├── controllers/        # Lógica de vistas (40+ archivos .php)
│   ├── models/            # Modelos de datos
│   ├── views/             # Templates (si aplica)
│   └── helpers/           # Funciones auxiliares y librerías
├── admin/                 # Panel de administración
├── uploads/               # Directorio de subidas de usuarios
├── config/                # Archivos de configuración
└── docs/                  # Documentación
```

---

## 🎯 Stack Tecnológico

| Capa | Tecnologías |
|---|---|
| **Frontend** | HTML5, CSS3, JavaScript ES6+ |
| **Backend** | PHP, MySQL |
| **Email** | PHPMailer / SMTP |
| **Pagos** | PayPal API |
| **SEO** | Sitemap XML, Google Search Console, Analytics |
| **Seguridad** | HTTPS/SSL, .htaccess, variables de entorno |
| **Despliegue** | Hostinger, DNS, servidor en producción |
| **Control de versiones** | Git / GitHub |

---

## ✨ Características Principales

- 🛍️ **Catálogo dinámico** — +100 productos activos en MySQL
- 🛒 **Carrito y checkout** — flujo completo de compra
- 💳 **Pasarela PayPal** — integración completa
- ✏️ **Personalizador online** — editor con Fabric.js, 5 zonas edibles, 20+ efectos
- 🔐 **Sistema de usuarios** — login propio + Google OAuth
- 📧 **Emails transaccionales** — PHPMailer con confirmaciones
- 📱 **Responsive** — mobile, tablet y escritorio
- 🛡️ **Seguridad multicapa** — 18+ medidas anti-vulnerabilidades
- 📊 **Panel admin** — gestión de pedidos, productos, clientes
- 🔍 **SEO técnico** — Sitemap XML, Analytics, Search Console

---

## 💡 Objetivo del Repositorio

Demostrar la capacidad de **organizar y estructurar código PHP** con capas claras (`public/`, `controllers/`, `models/`, `helpers/`, etc.), más allá del PHP “plano” o espagueti. La tienda real se desarrolló primero; esta reorganización sirve como **portfolio de arquitectura**, no como sustituto del código desplegado.

---

## 📝 Notas

- **Producción** = [camiglobo.com](https://camiglobo.com) · código desplegado en [`proyecto`](https://github.com/juancasano/proyecto)
- **Este repo** = misma base de archivos **reordenados** en estructura MVC / tipo framework (demo)
- Para más detalles técnicos: [documentación](https://juancasano.github.io/documentacion-camiglobo.html)

---

**Desarrollado por:** Juan Casano  
**Estado:** 📐 Demo de arquitectura (no es el deploy)  
**Última actualización:** 2026-10-14
