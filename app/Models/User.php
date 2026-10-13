<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Modelo User (stub) — cuentas, login propio y Google OAuth.
 */
class User
{
    public int $id;
    public string $email;
    public string $nombre;

    public static function findByEmail(string $email): ?self
    {
        return null;
    }

    public function pedidos(): array
    {
        return [];
    }
}
