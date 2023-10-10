<?php

declare(strict_types=1);

return [

    'empty_country_selector' => 'Por favor, selecciona un país',
    'logo_description' => 'El logotipo de tu tienda que será visible en tu sitio. Este activo aparecerá en tus facturas.',
    'about_description' => 'Puedes añadir esta información a una página "Acerca de" en tu sitio web.',
    'currency_description' => 'Esta es la moneda en la que se venden tus productos. Después de tu primera venta, la moneda queda bloqueada y no se puede cambiar.',
    'mapbox_disabled' => 'Mapbox no ha sido activado.',

    'initialization' => [
        'title' => 'Inicialización de la Tienda',
        'step_one_title' => 'Información de la Tienda',
        'step_one_description' => 'Proporciona información útil para tu tienda.',
        'step_two_title' => 'Información de Dirección',
        'step_two_description' => 'Proporciona información de dirección de la tienda.',
        'step_tree_title' => 'Enlaces Sociales (Opcional)',
        'step_tree_description' => 'Enlaces a tus cuentas en redes sociales.',

        'step' => 'Paso :step de 3',
        'shop_configuration' => 'Configuración de la tienda',
        'step_1' => 'Paso 1 - Información de la tienda',
        'tell_about' => 'Cuéntanos sobre tu Tienda',
        'step_1_description' => 'Esta información será útil si quieres que los usuarios de tu sitio te contacten directamente por correo electrónico o por teléfono.',

        'step_2' => 'Paso 2 - Información de Dirección',
        'address_description' => 'Debes especificar la dirección y ubicación de tu tienda.',
        'step_2_description' => 'No te preocupes. Puedes cambiar esta configuración en cualquier momento. Shopper te permite comenzar con el nivel más pequeño para que puedas ver la evolución de tu tienda.',

        'step_3' => 'Paso 3 - Enlaces Sociales',
        'social_description' => 'Tu tienda en redes sociales.',
        'step_3_description' => 'Puedes añadir enlaces a tus cuentas en redes sociales para que tu tienda pueda encontrarse fácilmente en tus páginas de redes sociales.',
        'action' => 'Configurar mi tienda',
    ],

    'settings' => [
        'title' => 'Configuración de la Tienda',
        'store_details' => 'Detalles de la Tienda',
        'store_detail_summary' => 'Tus clientes usarán esta información para contactarte.',
        'email_helper' => 'Tus clientes usarán esta dirección si necesitan ponerse en contacto contigo por correo electrónico.',
        'phone_number_helper' => 'Tus clientes usarán este número de teléfono si necesitan llamarte directamente.',
        'assets' => 'Activos',
        'assets_summary' => 'El logotipo y la imagen de portada de tu tienda que serán visibles en tu sitio. Estos activos aparecerán en tus facturas.',
        'store_address' => 'Dirección de la Tienda',
        'store_address_summary' => 'Esta dirección aparecerá en tus facturas. Puedes editar la dirección utilizada.',
        'store_currency' => 'Moneda de la Tienda',
        'store_currency_summary' => 'Esta es la moneda en la que se venden tus productos. Después de tu primera venta, la moneda queda bloqueada y no se puede cambiar.',
        'social_links' => 'Enlaces Sociales',
        'social_links_summary' => 'Información sobre tus diferentes cuentas en redes sociales. Los usuarios podrán contactarte directamente en tus páginas oficiales.',
        'update_information' => 'Actualizar información',
    ],

    'payment' => [
        'title' => 'Métodos de Pago',
        'stripe_description' => 'Acepta pagos en tu tienda utilizando proveedores de terceros como Stripe.',
        'stripe_enabled' => 'Stripe está disponible para tu tienda.',
        'stripe_disabled' => 'Stripe no está habilitado.',
        'stripe_provider' => 'Este proveedor te permite integrar Stripe PHP en tu tienda para permitir que tus clientes realicen pagos.',
        'stripe_about' => 'Obtén más información sobre el Pago de Stripe',
        'stripe_actions' => 'Habilitar Pago con Stripe',
        'stripe_environment' => 'Stripe tiene dos entornos, Sandbox y Live, asegúrate de utilizar Sandbox para hacer pruebas antes de salir en vivo.',
        'stripe_dashboard' => 'Las Claves de API se pueden obtener en',
        'create_payment' => 'Crear método de pago',
        'no_method' => 'No se encontraron métodos de pago',
    ],

    'validations' => [
        'shop_name' => 'El nombre de la tienda es obligatorio',
        'country' => 'El país es obligatorio',
    ],

    'notifications' => [
        'create_inventory' => 'Inventario añadido correctamente',
        'update_inventory' => 'Inventario actualizado correctamente',
    ],

    'roles_permissions' => [
        'title' => 'Roles de Usuario y Gestión de Accesos',
        'header_title' => 'Administradores y roles',
        'role_available' => 'Rol de administrador disponible',
        'role_available_summary' => 'Un rol proporciona acceso a menús y características predefinidas para que, dependiendo del rol y los permisos asignados, un administrador pueda acceder a lo que necesita.',
        'new_role' => 'Añadir nuevo rol',
        'admin_accounts' => 'Cuentas de administradores',
        'admin_accounts_summary' => 'Estos son los miembros que ya están en tu tienda con sus roles asociados. Puedes asignar nuevos roles a los miembros existentes aquí.',
        'add_admin' => 'Añadir administrador',
        'users_role' => 'Usuarios y roles',
        'login_information' => 'Información de inicio de sesión',
        'login_information_summary' => 'Esta información será útil para que el administrador se conecte a la administración de Shopper.',
        'send_invite' => 'Enviar Invitación',
        'send_invite_summary' => 'Envía una invitación a este administrador por correo electrónico con su información de inicio de sesión.',
        'personal_information' => 'Información Personal',
        'personal_information_summary' => 'Información relacionada con el perfil del administrador.',
        'role_information' => 'Información del Rol',
        'role_information_summary' => 'Asigna roles a este administrador para limitar las acciones que puede realizar.',
        'roles' => 'Roles',
        'permissions' => 'Permisos',
        'choose_role' => 'Elige un rol para este administrador',
        'create_permission' => 'Crear permiso',
        'role_alert_msg' => 'Estás a punto de actualizar el rol de administrador, esto podría bloquear tu acceso al panel de administración.',
        'with_role_name' => 'con el rol :name',
        'permissions_in_role' => 'en el rol :name',
        'custom_permission' => 'Permiso personalizado',
    ],

    'location' => [
        'description' => 'Administra los lugares donde almacenas inventario, completas pedidos y vendes productos.',
        'count' => 'Estás usando :count de 4 ubicaciones disponibles.',
        'add' => 'Añadir ubicación',
        'detail' => 'Detalles',
        'detail_summary' => 'Dale a esta ubicación un nombre corto para identificarla fácilmente. Verás este nombre en áreas como productos.',
        'address' => 'Dirección del Inventario',
        'address_summary' => 'Información completa de tu inventario. Por favor, proporciona información válida que pueda ser accesible para tus clientes.',
        'set_default' => 'Establecer como inventario predeterminado',
        'set_default_summary' => 'El inventario en esta ubicación está disponible para la venta en línea y se usará como predeterminado.',
        'is_default' => 'Este es tu inventario predeterminado. Para cambiar si debes cumplir órdenes en línea desde este inventario, selecciona primero otro inventario predeterminado.',
    ],

    'analytics' => [
        'google' => 'Google Analytics',
        'google_description' => 'Google Analytics te permite hacer un seguimiento de los visitantes de tu sitio y genera informes que te ayudarán en tu marketing.',
        'gtag' => 'Google Tag Manager',
        'gtag_description' => 'Google Tag Manager permite a los gerentes de marketing añadir fácilmente etiquetas (Analytics, remarketing, etc.)',
        'pixel' => 'Pixel de Facebook',
        'pixel_description' => 'Facebook Pixel te ayuda a crear campañas publicitarias para encontrar nuevos clientes que sean más parecidos a tus compradores.',
        'no_json' => 'No se ha añadido ningún archivo JSON',
    ],

    'legal' => [
        'title' => 'Política Legal',
        'refund' => 'Política de Devolución',
        'privacy' => 'Política de Privacidad',
        'shipping' => 'Política de Envío',
        'terms_of_use' => 'Términos de Uso',
        'summary' => 'Define la :policy a la que estarán sujetos todos los usuarios y consumidores de los productos en tu tienda.',
    ],
];
