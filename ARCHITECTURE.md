# Arquitectura del Proyecto

## Visión General

El proyecto Camiglobo está organizado siguiendo una arquitectura moderna similar a la de frameworks frontend, separando responsabilidades en capas bien definidas.

## Estructura de Carpetas

### `/public` — Archivos Públicos (Assets)
Archivos accesibles directamente desde el navegador (solo lectura en producción).

- `css/` — Hojas de estilos CSS
- `js/` — Scripts JavaScript (ES6+, Fabric.js, etc.)
- `images/` — Imágenes, favicons y recursos gráficos

### `/src` — Código Fuente (Lógica de Negocio)
Núcleo de la aplicación, no debe ser accesible directamente desde HTTP.

#### `controllers/` (40+ archivos)
Archivos PHP que manejan la lógica de vistas y enrutamiento:
- **Públicas:** `index.php`, `productos.php`, `producto.php`, `carrito.php`, `checkout.php`, etc.
- **Autenticación:** `login.php`, `registro.php`, `logout.php`, `recuperar.php`
- **Usuario:** `perfil.php`, `mi_pedido_detalle.php`, `ver_detalles.php`
- **Procesamiento:** `procesar_login.php`, `procesar_pedido.php`, `procesar_pago.php`, `procesar_perfil.php`
- **Admin:** `admin_productos.php`, `admin_pedidos.php`, `admin_pagos.php`, `admin_clientes.php`
- **APIs:** `obtener_productos.php`, `obtener_recursos.php`, `carrito_accion.php`

#### `models/` (Vacío - Expandible)
Modelos de datos (clases para productos, usuarios, pedidos, etc.). Actualmente, la lógica está en los controllers, pero esta carpeta está lista para refactorización.

#### `views/` (Vacío - Expandible)
Templates HTML reutilizables. Actualmente, el HTML está incrustado en los controllers. Esta carpeta está lista para separación de concerns.

#### `helpers/` (Funciones Auxiliares)
- `config.php` — Configuración principal y constantes
- `colors.php` — Paleta de colores de la marca
- `header.php` — Template del header global
- `footer.php` — Template del footer global
- `pricing.php` — Lógica de precios y promociones
- `PHPMailer/` — Librería para envío de correos

### `/config` — Configuración del Proyecto
Archivos de configuración centralizada (no versionados en Git).

- `config.php` — Conexión a BD, variables globales
- `.env` — Variables de entorno (sensibles, ignorado por Git)
- `.env-example` — Ejemplo de variables requeridas

### `/admin` — Panel de Administración
Funcionalidades administrativas:
- `cambiar_estado.php` — Cambiar estado de pedidos
- `ver_pedido.php` — Detalle de pedido en admin

### `/uploads` — Directorio de Subidas
Área para archivos subidos por usuarios:
- `custom/` — Diseños personalizados guardados

### `/docs` — Documentación (Expandible)
Documentación técnica del proyecto.

## Patrones y Convenciones

### Nomenclatura de Archivos
- **Archivos públicos (controllers):** `nombreAccion.php` (ej: `productos.php`, `procesar_pedido.php`)
- **Archivos de procesamiento:** `procesar_*.php` (ej: `procesar_login.php`)
- **Archivos de administración:** `admin_*.php` (ej: `admin_productos.php`)
- **APIs:** `obtener_*.php` (ej: `obtener_productos.php`)

### Seguridad
- **Configuración sensible:** en `config/` y `.env` (no versionado)
- **PHPMailer:** en `src/helpers/` para centralizar email
- **Validación:** en cada controller o en helpers centralizados

### Escalabilidad Futura
La estructura permite evolucionar hacia:
1. **Separación MVC más estricta:** mover lógica a `models/`
2. **Templates separados:** usar `views/` para plantillas
3. **Namespaces:** organizar clases por namespace
4. **Autoload Composer:** implementar PSR-4

## Flujo Típico de Solicitud

```
Usuario →  index.php (enrutador)  →  controllers/pagina.php  →  src/helpers/*  →  HTML Response
                                         ↓
                                     procesar_*.php
                                         ↓
                                    Base de Datos
                                         ↓
                                    Email (PHPMailer)
```

## Tecnologías por Carpeta

| Carpeta | Tecnología |
|---------|-----------|
| `/public/css` | CSS3, Preprocesadores (opcional) |
| `/public/js` | JavaScript ES6+, Fabric.js |
| `/src/controllers` | PHP 7.4+ |
| `/src/helpers` | PHP, PHPMailer |
| `/config` | PHP, Variables de entorno |
| `/admin` | PHP |

---

**Última actualización:** 2026-07-01
