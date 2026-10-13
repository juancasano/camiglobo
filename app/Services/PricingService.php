<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Cálculo de precios, zonas del personalizador y promociones (stub).
 * Lógica legacy de referencia: pricing_legacy.php en este mismo directorio.
 */
class PricingService
{
    public function precioBase(int $productId): float
    {
        return 0.0;
    }

    /**
     * @param list<string> $zonas  ej. frontal, espalda, mangas
     */
    public function precioConPersonalizacion(float $base, array $zonas): float
    {
        return $base;
    }
}
