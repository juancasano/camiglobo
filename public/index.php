<?php
/**
 * Front controller (stub) — único entrypoint público en un setup tipo Laravel.
 *
 * Flujo conceptual:
 *   Request → public/index.php → bootstrap → router → Controller → View
 *
 * Este archivo documenta el patrón. La tienda en producción sigue
 * sirviendo scripts PHP directamente desde el `public_html` de Hostinger.
 */

declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap/app.php';

// En un framework real:
// $response = $kernel->handle(Request::capture());
// $response->send();

http_response_code(501);
header('Content-Type: text/plain; charset=utf-8');
echo "Camiglobo — demo de arquitectura (no es el deploy).\n";
echo "Producción: https://camiglobo.com\n";
