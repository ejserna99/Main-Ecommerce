<?php

declare(strict_types=1);

return [

    'login' => [
        'title' => '¡Bienvenido de nuevo!',
        'or' => 'O',
        'return_landing' => 'Volver a la página de inicio',
        'forgot_password' => '¿Olvidaste tu contraseña?',
        'action' => 'Iniciar sesión',
    ],

    'reset' => [
        'title' => 'Restablecer contraseña',
        'message' => 'Ingresa tu correo electrónico y la nueva contraseña que deseas usar para acceder a tu cuenta.',
        'action' => 'Actualizar contraseña',
    ],

    'email' => [
        'title' => 'Restablece tu contraseña',
        'message' => 'Ingresa la dirección de correo electrónico que utilizaste al crear tu cuenta y te enviaremos instrucciones para restablecer tu contraseña.',
        'action' => 'Enviar correo de restablecimiento de contraseña',
        'return_to_login' => 'Volver a la página de inicio de sesión',
        'mail' => [
            'content' => 'Estás recibiendo este correo electrónico porque recibimos una solicitud para restablecer la contraseña de tu cuenta.',
            'action' => 'Restablecer contraseña',
            'message' => 'Si no solicitaste restablecer la contraseña, no es necesario que hagas nada más.',
        ],
    ],

    'two_factor' => [
        'title' => 'Inicio de sesión con autenticación de dos factores',
        'subtitle' => 'Autentica tu cuenta',
        'authentication_code' => 'Confirma el acceso a tu cuenta ingresando el código de autenticación proporcionado por tu aplicación de autenticación.',
        'recovery_code' => 'Confirma el acceso a tu cuenta ingresando uno de tus códigos de recuperación de emergencia.',
        'remember' => '¿No recuerdas este código?',
        'use_recovery_code' => 'Usar un código de recuperación',
        'use_authentication_code' => 'Usar un código de autenticación',
        'action' => 'Iniciar sesión',
    ],

    'account' => [
        'meta_title' => 'Perfil de cuenta',
        'title' => 'Mi perfil',

        'device_title' => 'Dispositivos',
        'device_description' => 'Actualmente has iniciado sesión en estos dispositivos. Si no reconoces un dispositivo, cierra sesión para mantener segura tu cuenta.',
        'empty_device' => 'Si es necesario, puedes cerrar sesión en todas tus otras sesiones de navegador en todos tus dispositivos.',
        'current_device' => 'Este dispositivo',
        'device_last_activity' => 'Última actividad',
        'device_location' => 'No se puede recuperar esta ubicación.',
        'device_enabled_feature' => 'Se necesita el controlador de sesión de base de datos para habilitar esta función.',

        'password_title' => 'Actualizar contraseña',
        'password_description' => 'Asegúrate de que tu cuenta esté utilizando una contraseña larga y aleatoria para mantenerla segura.',
        'password_helper_validation' => 'Tu contraseña debe tener más de 8 caracteres y debe contener al menos 1 mayúscula, 1 minúscula y 1 dígito.',

        'two_factor_title' => 'Autenticación de dos factores',
        'two_factor_description' => 'Después de ingresar tu contraseña, verifica tu identidad con un segundo método de autenticación.',
        'two_factor_enabled' => 'Has habilitado la autenticación de dos factores.',
        'two_factor_disabled' => 'No has habilitado la autenticación de dos factores.',
        'two_factor_install_message' => 'Para usar la autenticación de dos factores, debes instalar la aplicación Google Authenticator en tu smartphone.',
        'two_factor_secure' => 'Con la autenticación de dos factores, solo tú puedes acceder a tu cuenta, incluso si alguien más tiene tu contraseña.',
        'two_factor_activation_message' => 'Cuando se habilita la autenticación de dos factores, se te pedirá un token seguro y aleatorio durante la autenticación. Puedes obtener este token desde la aplicación Google Authenticator de tu teléfono.',
        'two_factor_is_enabled' => 'La autenticación de dos factores está habilitada. Escanea el siguiente código QR usando la aplicación de autenticación de tu teléfono.',
        'two_factor_store_recovery_codes' => 'Guarda estos códigos de recuperación en un administrador de contraseñas seguro. Pueden usarse para recuperar el acceso a tu cuenta si pierdes el dispositivo de autenticación de dos factores.',

        'profile_title' => 'Información del perfil',
        'profile_description' => 'Actualiza la información de perfil y la dirección de correo electrónico de tu cuenta.',
    ],
];
