<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Modelo Product (stub).
 * En producción la lógica vive en consultas PDO dentro de las páginas PHP.
 * Aquí se muestra cómo quedaría encapsulado en un modelo.
 */
class Product
{
    public int $id;
    public string $nombre;
    public float $precio;
    public bool $activo;

    /** @return list<self> */
    public static function activos(): array
    {
        // SELECT * FROM productos WHERE activo = 1 ...
        return [];
    }

    public static function find(int $id): ?self
    {
        // SELECT * FROM productos WHERE id = ? ...
        return null;
    }
}
