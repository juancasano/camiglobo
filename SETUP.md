# Cómo trabajar con este repositorio

## Descripción

Demo de arquitectura del e-commerce **Camiglobo Barcelona**, organizada con convenciones tipo Laravel.

**Este repo no es un clone funcional del deploy.** La tienda real está en [camiglobo.com](https://camiglobo.com) y el código desplegado en [juancasano/proyecto](https://github.com/juancasano/proyecto).

---

## Estructura relevante

- `public/` — entrypoint documentado (`index.php`) y assets
- `app/Http/Controllers/{Shop,Auth,Account,Admin,Api}/` — lógica por dominio
- `app/Models/` y `app/Services/` — stubs de capas
- `routes/web.php` — mapa de rutas
- `resources/views/layouts/` — header / footer
- `config/` — configuración y `.env-example`
- `storage/app/uploads/` — subidas (ignoradas en git)

Ver [ARCHITECTURE.md](ARCHITECTURE.md) y [README.md](README.md).

---

## Exploración local

```bash
git clone https://github.com/juancasano/camiglobo.git
cd camiglobo
```

Puedes leer el árbol y los stubs sin necesidad de BD ni Composer.  
No se garantiza que `php -S` sirva la tienda completa desde este repo.

Para desarrollo real del e-commerce, usa el repo `proyecto` y el entorno de Hostinger.
