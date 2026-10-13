<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Modelo Order (stub) — pedidos, estados y relación con PayPal.
 */
class Order
{
    public int $id;
    public int $userId;
    public string $estado;
    public float $total;

    public static function find(int $id): ?self
    {
        return null;
    }

    /** @return list<array<string, mixed>> */
    public function lineas(): array
    {
        return [];
    }
}
