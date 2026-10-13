<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Modelo CartItem (stub) — ítems de carrito / sesión.
 */
class CartItem
{
    public int $productId;
    public int $cantidad;
    public ?string $disenoJson = null;

    public function subtotal(float $precioUnitario): float
    {
        return $precioUnitario * $this->cantidad;
    }
}
