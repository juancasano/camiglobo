# Camiglobo Barcelona — Demo de arquitectura (estilo Laravel)

> **Este repo no es el deploy en producción.**  
> Es una **reestructura / demo de arquitectura**: el e-commerce organizado como un proyecto PHP moderno (convenciones tipo Laravel) para mostrar capas, dominios y rutas.  
> **No está pensado para clonar y arrancar** como la tienda en vivo.

**[Tienda en producción → camiglobo.com](https://camiglobo.com)**

---

## Estructura (Laravel-like)

```
camiglobo/
├── app/
│   ├── Http/Controllers/
│   │   ├── Shop/          # catálogo, carrito, checkout, personalizar, legales
│   │   ├── Auth/          # login, registro, recuperar, Google OAuth
│   │   ├── Account/       # perfil y pedidos del usuario
│   │   ├── Admin/         # panel de administración
│   │   └── Api/           # AJAX, pagos, uploads
│   ├── Models/            # stubs Product, User, Order, CartItem
│   └── Services/          # PricingService, MailService, PHPMailer
├── bootstrap/             # arranque stub
├── config/                # configuración y .env-example
├── database/schema/       # placeholder de esquema (sin datos sensibles)
├── public/                # entrypoint + assets (css, js, images)
├── resources/views/       # layouts (header/footer) + vistas por área
├── routes/web.php         # mapa de rutas (documentación)
├── storage/app/uploads/   # subidas de usuarios
└── docs/                  # documentación
```

Flujo conceptual:

```
Request → public/index.php → bootstrap → routes/web.php → Controller → View / JSON
```

Los controladores están **agrupados por dominio** (Shop, Auth, Account, Admin, Api). Los Models y Services son **stubs** que muestran cómo encapsularía la lógica; el deploy real en Hostinger es PHP clásico en el document root (`public_html`).

---

## Stack

| Capa | Tecnologías |
|---|---|
| Frontend | HTML5, CSS3, JavaScript ES6+ |
| Backend | PHP, MySQL |
| Email | PHPMailer / SMTP |
| Pagos | PayPal API |
| SEO | Sitemap XML, Search Console, Analytics |
| Seguridad | HTTPS/SSL, variables de entorno, capas anti-abuso |
| Deploy real | Hostinger (`public_html`) |
| Control de versiones | Git / GitHub |

---

## Características del producto (en producción)

- Catálogo dinámico (+100 productos)
- Carrito, checkout y PayPal
- Personalizador online (Fabric.js)
- Usuarios (login + Google OAuth)
- Emails transaccionales
- Panel admin
- SEO técnico y seguridad multicapa

---

## Objetivo de este repositorio

Demostrar organización PHP profesional (estilo Laravel):

- `public/` como único entrypoint documentado
- Controladores por dominio bajo `app/Http/Controllers`
- Models / Services como capas separadas
- `routes/web.php` como mapa legible de la app
- Views/layouts fuera de la lógica

La tienda real se construyó primero; esta carpeta es **portafolio de arquitectura**, no el código desplegado.

---

## Notas

- **Producción** = [camiglobo.com](https://camiglobo.com) (Hostinger / `public_html`)
- **Este repo** = misma base de negocio **reordenada** + stubs de framework (portafolio)
- Más detalle: [ARCHITECTURE.md](ARCHITECTURE.md) · [documentación web](https://juancasano.github.io/documentacion-camiglobo.html)

---

**Desarrollado por:** Juan Casano  
**Estado:** Demo de arquitectura (no es el deploy)  
**Última actualización:** 2026-10-14
