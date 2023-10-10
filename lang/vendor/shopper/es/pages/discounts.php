<?php

declare(strict_types=1);

return [

    'title' => 'Gestionar descuentos y promociones',
    'description' => 'Crea y gestiona códigos de descuento y promociones que se aplican en el proceso de pago o en los pedidos de los clientes.',

    'actions' => [
        'create' => 'Crear código',
        'update' => 'Actualizar código :code',
    ],

    'empty_message' => 'No se encontraron descuentos...',
    'search' => 'Buscar código de descuento',
    'name_helptext' => 'Los clientes ingresarán este código de descuento al realizar el pago.',
    'percentage' => 'Porcentaje',
    'fixed_amount' => 'Monto fijo',
    'applies_to' => 'Aplica a',
    'entire_order' => 'Todo el pedido',
    'specific_products' => 'Productos específicos',
    'select_products' => 'Seleccionar productos',
    'min_requirement' => 'Requisitos mínimos',
    'none' => 'Ninguno',
    'min_amount' => 'Monto mínimo de compra (:currency)',
    'min_value' => 'Valor mínimo requerido',
    'applies_only_selected' => 'Se aplica solo a productos seleccionados.',
    'min_quantity' => 'Cantidad mínima de artículos',
    'customer_eligibility' => 'Elegibilidad del cliente',
    'everyone' => 'Todos',
    'specific_customers' => 'Clientes específicos',
    'select_customers' => 'Seleccionar clientes',
    'usage_limits' => 'Límites de uso',
    'usage_label' => 'Límite de veces que este descuento se puede usar en total',
    'usage_value' => 'Límite de uso',
    'limit_one_per_user' => 'Limitar a un uso por cliente',
    'active_dates' => 'Fechas activas',
    'start_date' => 'Fecha de inicio',
    'choose_start_date' => 'Elige el período de inicio',
    'end_date' => 'Fecha de finalización',
    'choose_end_date' => 'Elige la fecha de finalización',
    'empty_code' => 'Aún no se ha ingresado información.',
    'count_items' => ':count artículos',
    'min_purchase' => 'Compra mínima de',

    'modals' => [
        'stock_available' => ':stock disponible',
        'add_products' => 'Agregar productos',
        'add_selected_products' => 'Agregar productos seleccionados',
        'search_product' => 'Buscar producto por nombre',

        'add_customers' => 'Agregar clientes',
        'search_customer' => 'Buscar cliente por nombre',
        'add_selected_customers' => 'Agregar clientes seleccionados',

        'remove' => [
            'title' => 'Eliminar este código',
            'description' => '¿Estás seguro de que quieres eliminar este código? Todos los datos asociados se eliminarán. Esta acción no se puede deshacer.',
            'success_message' => '¡Código de descuento eliminado con éxito!',
        ],
    ],

    'active_today' => 'Activo hoy',
    'active_from_today' => 'Activo desde hoy',
    'active_from' => 'Activo desde :date',
    'active_date' => 'Activo el :date',
    'active_from_to' => 'Activo desde :start hasta :end',
    'one_per_customer' => 'uno por cliente',

    'add_message' => '¡Código de descuento :code creado con éxito!',
    'update_message' => '¡Código de descuento :code actualizado con éxito!',

];
