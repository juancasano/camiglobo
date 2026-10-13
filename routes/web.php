<?php
/**
 * Mapa de rutas (documentación / demo).
 * Estilo Laravel: URL → controlador en app/Http/Controllers/{Dominio}.
 *
 * No es un router ejecutable. Sirve para leer de un vistazo el flujo de la app.
 */

declare(strict_types=1);

return [

    // Shop
    'GET /'                      => 'Shop/index.php',
    'GET /productos'             => 'Shop/productos.php',
    'GET /producto'              => 'Shop/producto.php',
    'GET /carrito'               => 'Shop/carrito.php',
    'POST /carrito/modificar'    => 'Shop/carrito_modificar.php',
    'GET|POST /checkout'         => 'Shop/checkout.php',
    'GET|POST /personalizar'     => 'Shop/personalizar.php',
    'GET /contacto'              => 'Shop/contacto.php',
    'GET /faq'                   => 'Shop/faq.php',
    'GET /gracias'               => 'Shop/gracias.php',
    'GET /aviso-legal'           => 'Shop/aviso-legal.php',
    'GET /politica-privacidad'   => 'Shop/politica-privacidad.php',
    'GET /politica-envios'       => 'Shop/politica-envios.php',
    'GET /politica-reembolso'    => 'Shop/politica-reembolso.php',
    'GET /terminos-condiciones'  => 'Shop/terminos-condiciones.php',
    'GET /sitemap'               => 'Shop/sitemap.php',
    'GET /sitemap.xml'           => 'Shop/sitemap_xml.php',
    'GET /baja'                  => 'Shop/baja.php',

    // Auth
    'GET /login'                 => 'Auth/login.php',
    'POST /login'                => 'Auth/procesar_login.php',
    'GET /registro'              => 'Auth/registro.php',
    'POST /registro'             => 'Auth/procesar_registro.php',
    'GET /logout'                => 'Auth/logout.php',
    'GET /recuperar'             => 'Auth/recuperar.php',
    'POST /recuperar'            => 'Auth/procesar_recuperar.php',
    'GET /restablecer'           => 'Auth/restablecer.php',
    'POST /restablecer'          => 'Auth/procesar_nueva_clave.php',
    'POST /auth/google'          => 'Auth/procesar_google.php',

    // Account
    'GET /perfil'                => 'Account/perfil.php',
    'POST /perfil'               => 'Account/procesar_perfil.php',
    'GET /pedido'                => 'Account/mi_pedido_detalle.php',
    'GET /pedido/detalles'       => 'Account/ver_detalles.php',
    'POST /pedido/cancelar'      => 'Account/cancelar_pedido.php',

    // Admin
    'GET /admin/productos'       => 'Admin/admin_productos.php',
    'GET /admin/pedidos'         => 'Admin/admin_pedidos.php',
    'GET /admin/pagos'           => 'Admin/admin_pagos.php',
    'GET /admin/biblioteca'      => 'Admin/admin_biblioteca.php',
    'POST /admin/pedido/estado'  => 'Admin/cambiar_estado.php',
    'GET /admin/pedido'          => 'Admin/ver_pedido.php',
    'POST /admin/newsletter'     => 'Admin/enviar_masivo.php',

    // Api
    'GET /api/productos'         => 'Api/obtener_productos.php',
    'GET /api/recursos'          => 'Api/obtener_recursos.php',
    'POST /api/carrito'          => 'Api/carrito_accion.php',
    'POST /api/diseno'           => 'Api/guardar_diseno.php',
    'POST /api/progreso'         => 'Api/guardar_progreso.php',
    'POST /api/upload'           => 'Api/upload.php',
    'POST /api/recurso'          => 'Api/subir_recurso.php',
    'POST /api/recurso/borrar'   => 'Api/borrar_recurso.php',
    'POST /api/pedido'           => 'Api/procesar_pedido.php',
    'POST /api/pago'             => 'Api/procesar_pago.php',
    'POST /api/newsletter'       => 'Api/procesar_newsletter.php',
];
