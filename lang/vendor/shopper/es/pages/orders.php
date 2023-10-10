<?php

declare(strict_types=1);

return [
    'title' => 'Gestionar pedidos de clientes',
    'show_title' => 'Detalle del Pedido ~ :number',
    'content' => 'Cuando los clientes realizan pedidos, aquí es donde se realizará todo el procesamiento, la gestión de reembolsos y el seguimiento de su pedido.',
    'total_price_description' => 'Este precio no incluye impuestos aplicables al producto o al cliente.',

    'no_shipping_method' => 'Este pedido no tiene un método de envío',
    'read_about_shipping' => 'Leer más sobre envíos',
    'payment_actions' => 'Acciones de pago',
    'send_invoice' => 'Enviar factura',
    'private_notes' => 'Notas privadas',
    'customer_date' => 'Cliente desde :date',
    'customer_orders' => 'Este cliente ya ha realizado :number pedido(s)',
    'customer_infos' => 'Información de contacto',

    'modals' => [
        'archived_number' => 'Pedido archivado :number',
        'archived_notice' => '¿Estás seguro de que quieres archivar este pedido? Esta acción cambiará los ingresos que has obtenido hasta ahora en tu tienda.',
    ],

    'notifications' => [
        'archived' => '¡El pedido se ha archivado correctamente!',
        'cancelled' => '¡El pedido se ha cancelado correctamente!',
        'note_added' => 'Tu nota se ha añadido a este pedido.',
        'registered' => '¡El pedido se ha registrado correctamente!',
        'paid' => '¡El pedido se ha marcado como pagado!',
        'completed' => '¡El pedido se ha marcado como completado!',
    ],

];
