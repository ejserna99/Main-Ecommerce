<?php

declare(strict_types=1);

return [

    'title' => 'Administrar pedidos y detalles de clientes',
    'content' => 'Aquí puedes gestionar la información de tus clientes y ver su historial de compras.',

    'overview' => 'Resumen del perfil',
    'overview_description' => 'Usa una dirección permanente donde el cliente pueda recibir correos.',
    'security_title' => 'Seguridad',
    'security_description' => 'Ingresa una contraseña aleatoria que este usuario usará para iniciar sesión en su cuenta.',
    'address_title' => 'Dirección',
    'address_description' => 'La dirección principal de este cliente. Esta dirección se definirá como la dirección de envío predeterminada.',
    'notification_title' => 'Notificaciones',
    'notification_description' => 'Informa a tus clientes sobre su cuenta.',
    'marketing_email' => 'El cliente aceptó recibir correos electrónicos de marketing.',
    'marketing_description' => 'Deberías pedir permiso a tus clientes antes de suscribirlos a tus correos electrónicos de marketing si tienes alguno.',
    'send_credentials' => 'Enviar credenciales al cliente.',
    'credential_description' => 'Se enviará un correo electrónico a este cliente con estas credenciales de conexión.',

    'period' => 'Cliente desde :period',

    'modal' => [
        'title' => 'Archivar este cliente',
        'description' => '¿Estás seguro de que quieres desactivar a este cliente? Todos sus datos (pedidos y direcciones) se eliminarán permanentemente de tu tienda para siempre. Esta acción no se puede deshacer.',
        'success_message' => 'Has archivado correctamente a este cliente, ya no está disponible en tu lista de clientes.',
    ],

    'profile' => [
        'title' => 'Perfil',
        'description' => 'Toda la información pública de tu cliente se encuentra aquí.',
        'account' => 'Cuenta',
        'account_description' => 'Gestiona cómo se utiliza la información en la cuenta del cliente.',
        'marketing' => 'Correo Electrónico de Marketing',
        'two_factor' => 'Autenticación de Dos Factores',
    ],

    'addresses' => [
        'title' => 'Direcciones',
        'shipping' => 'Dirección de Envío',
        'billing' => 'Dirección de Facturación',
        'default' => 'Dirección predeterminada',
        'customer' => 'Direcciones del cliente',
        'empty_text' => 'Este cliente aún no tiene una dirección de entrega o facturación.',
    ],

    'orders' => [
        'placed' => 'Pedido realizado',
        'total' => 'Total',
        'ship_to' => 'Enviar a',
        'order_number' => 'Pedido :number',
        'details' => 'Detalles del pedido',
        'items' => 'Artículos del pedido',
        'view' => 'Ver pedido',
        'empty_text' => 'No se encontraron pedidos...',
        'no_shipping' => 'Sin método de envío',
        'estimated' => 'Fecha de envío estimada',
    ],

];
