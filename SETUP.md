# Cómo Trabajar con este Repositorio

## Descripción

Este es el repositorio de **Camiglobo Barcelona**, un e-commerce de camisetas personalizadas en producción. El código se muestra aquí con una estructura profesional y organizada para demostrar buenas prácticas en la arquitectura PHP.

**⚠️ Nota:** Este repositorio está diseñado para mostrar la **organización y estructura del código**, no para ser un clone funcional. Para usar la tienda real, visita **[camiglobo.com](https://camiglobo.com)**.

---

## 📦 Requisitos

- PHP 7.4 o superior
- MySQL/MariaDB
- Composer (para dependencias)
- Git

## 🚀 Instalación Local

### 1. Clonar el repositorio
```bash
git clone https://github.com/juancasano/camiglobo.git
cd camiglobo
```

### 2. Configurar variables de entorno
```bash
cp config/.env-example config/.env
# Editar config/.env con tus datos de BD y API keys
```

### 3. Instalar dependencias (si aplica)
```bash
composer install
```

### 4. Configurar servidor web
Apuntar el DocumentRoot del servidor Apache a la carpeta raíz del proyecto. Asegurar que `.htaccess` está activo.

### 5. Crear base de datos
Importar el dump SQL (si está disponible) en tu instancia MySQL.

---

## 📁 Guía de Carpetas

| Carpeta | Propósito |
|---------|-----------|
| `/src/controllers/` | Lógica de vistas y enrutamiento (40+ archivos) |
| `/src/helpers/` | Funciones auxiliares, PHPMailer, configuración local |
| `/public/css/` | Estilos CSS |
| `/public/js/` | Scripts JavaScript (incluyendo Fabric.js) |
| `/public/images/` | Imágenes y recursos |
| `/config/` | Configuración (BD, variables de entorno) |
| `/admin/` | Panel de administración |
| `/uploads/` | Directorio de subidas de usuarios |

Para más detalles, ver [ARCHITECTURE.md](ARCHITECTURE.md).

---

## 🔧 Desarrollo

### Estructura de Código

El proyecto sigue convenciones de nomenclatura:
- **Controllers públicos:** `nombrePagina.php` (ej: `productos.php`)
- **Procesamiento:** `procesar_*.php` (ej: `procesar_pedido.php`)
- **Administración:** `admin_*.php` (ej: `admin_productos.php`)

### Agregar una Página Nueva

1. Crear archivo en `/src/controllers/mi_pagina.php`
2. Incluir configuración: `require_once __DIR__ . '/../helpers/config.php';`
3. Agregar lógica HTML/PHP
4. Hacer commit: `git add . && git commit -m "Feat: Nueva página"`

### Seguridad

- **No incluir `.env` en Git** (proteger credenciales)
- **Validar entradas** (usuarios, formularios)
- **Usar HTTPS** en producción
- **Sanitizar outputs** contra XSS

---

## 📤 Actualizar Producción

Este repositorio es de **referencia**. Para actualizar Camiglobo en producción:

1. SSH a servidor Hostinger
2. `cd /home/camiglobo/public_html`
3. `git pull origin main`
4. Probar cambios
5. Reload aplicación

---

## 🤝 Contribuciones

Este es un proyecto personal. Si deseas colaborar:

1. Fork el repositorio
2. Crea una rama: `git checkout -b feature/tu-feature`
3. Commit cambios: `git commit -m "Feat: descripción"`
4. Push: `git push origin feature/tu-feature`
5. Abre un Pull Request

---

## 📚 Documentación Adicional

- [ARCHITECTURE.md](ARCHITECTURE.md) — Arquitectura completa del proyecto
- [Documentación Técnica](https://juancasano.github.io/documentacion-camiglobo.html) — Detalle técnico completo
- [Camiglobo.com](https://camiglobo.com) — Tienda en producción

---

## 📞 Contacto

**Desarrollador:** Juan Casano  
**Email:** juancasano@gmail.com  
**Web:** [juancasano.github.io](https://juancasano.github.io)

---

**Última actualización:** 2026-07-01
