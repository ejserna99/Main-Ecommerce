<?php

declare(strict_types=1);

return [

    'actions' => [
        'create' => ':item agregado exitosamente',
        'update' => ':item actualizado exitosamente',
        'remove' => ':item eliminado exitosamente',
    ],

    'attributes' => [
        'remove' => 'El atributo se ha eliminado correctamente',
        'enable' => 'El atributo se ha habilitado correctamente',
        'disable' => 'El atributo se ha deshabilitado correctamente',
    ],

    'auth' => [
        'password' => 'Esta contraseña no coincide con nuestros registros.',
    ],

    'analytics' => 'Tus configuraciones de analíticas se han actualizado correctamente',

    'store_info' => 'La información de la tienda se ha actualizado correctamente',

    'inventory' => [
        'removed' => 'Inventario eliminado correctamente.',
    ],

    'initialize' => 'La tienda se ha configurado correctamente, ahora puedes gestionarlo todo.',

    'legal' => 'Tu política legal se ha actualizado correctamente',

    'users_roles' => [
        'role_added' => 'Se ha creado correctamente un rol',
        'role_deleted' => 'Rol eliminado correctamente.',
        'admin_deleted' => 'Admin eliminado correctamente',
        'permission_add' => 'Se ha creado un nuevo permiso y se ha agregado a este rol',
        'permission_revoke' => 'Se ha revocado el permiso :permission a este rol',
        'permission_allow' => 'Se ha otorgado el permiso :permission a este rol',
        'password_changed' => 'Has actualizado tu contraseña correctamente',
        'current_password' => 'Esa no es tu contraseña actual.',
        'profile_update' => 'Tu perfil se ha actualizado correctamente',
        'two_factor_enabled' => 'Has habilitado la autenticación de dos factores correctamente',
        'two_factor_disabled' => 'Has deshabilitado la autenticación de dos factores correctamente',
        'two_factor_generate' => 'Has regenerado correctamente tus códigos de recuperación de autenticación de dos factores.',
    ],

    'orders' => [
        'archived' => 'Pedido archivado correctamente',
    ],

    'payment' => [
        'add' => '¡Tu método de pago se ha agregado correctamente!',
        'update' => 'Tu método de pago se ha actualizado correctamente',
    ],

    'products' => [
        'remove' => ':item se ha eliminado correctamente.',
    ],

];
