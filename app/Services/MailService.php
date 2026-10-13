<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Envío de emails transaccionales (stub).
 * Implementación real basada en PHPMailer (carpeta PHPMailer/ aquí).
 */
class MailService
{
    public function pedidoConfirmado(string $to, array $pedido): bool
    {
        return false;
    }

    public function recuperarClave(string $to, string $token): bool
    {
        return false;
    }
}
