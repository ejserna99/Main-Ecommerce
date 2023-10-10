<?php

declare(strict_types=1);

return [
    'permissions' => [
        'new' => 'Nueva permiso',
        'new_description' => 'Agregar un nuevo permiso y asignarlo directamente a este rol',
        'labels' => [
            'name' => 'Nombre del permiso (en minúsculas)',
        ],
    ],

    'roles' => [
        'new' => 'Agregar nuevo rol',
        'new_description' => 'Agregar un nuevo rol y asignar permisos para los administradores.',
        'labels' => [
            'name' => 'Nombre (en minúsculas)',
        ],
        'confirm_delete_msg' => '¿Estás seguro de que quieres eliminar este rol? Todos los usuarios que tenían este rol ya no podrán acceder a las acciones otorgadas por este rol',
    ],

    'attributes' => [
        'new_value' => 'Agregar nuevo valor para :attribute',
        'key_description' => 'La clave se utilizará para los valores en el almacenamiento para los formularios (opciones, radio, etc.). Debe estar en formato de slug',
        'update_value' => 'Actualizar valor para :name',
    ],

    'inventories' => [
        'confirm_delete_msg' => '¿Estás seguro de que quieres eliminar este inventario? Todos estos datos serán eliminados. Esta acción no se puede deshacer',
    ],

    'mailable' => [
        'delete_title' => 'Eliminar clase :class de Mailable',
        'confirm_delete_msg' => '¿Estás seguro de que quieres eliminar esta clase de Mailable? Si esta clase se utiliza en tu proyecto, esta acción creará un error en tu sitio',
        'delete_template' => 'Eliminar plantilla :template',
        'confirm_delete_template' => '¿Estás seguro de que quieres eliminar esta plantilla?',
    ],

    'payment_method' => [
        'update_title' => 'Actualizar método de pago',
    ],
];
