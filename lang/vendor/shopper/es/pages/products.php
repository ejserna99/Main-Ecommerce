<?php

declare(strict_types=1);

return [

    'title' => 'Gestionar Catálogo',
    'content' => 'Acércate a tu primera venta añadiendo y gestionando productos.',
    'about_pricing' => 'Acerca de la visualización de precios',
    'about_pricing_content' => 'Todos los precios están en centavos por defecto. Para ahorrar 10€ (o 10$), debes ingresar 1000 centavos para que el formato de la moneda sea correcto.',

    'cost_per_items_help_text' => 'Los clientes no verán esto.',
    'safety_security_help_text' => 'El stock de seguridad es el límite de stock para tus productos que te alerta si el stock del producto pronto se quedará sin existencias.',
    'quantity_inventory' => 'Inventario de Cantidad',
    'manage_inventories' => 'Gestionar Inventarios',
    'inventory_name' => 'Nombre del Inventario',
    'product_can_returned' => 'Este producto puede ser devuelto',
    'product_can_returned_help_text' => 'Los usuarios tienen la opción de devolver este producto si hay algún problema o insatisfacción.',
    'product_shipped' => 'Este producto será enviado',
    'product_shipped_help_text' => 'Asegúrate de completar la información sobre el envío del producto.',
    'weight_dimension_help_text' => 'Se utiliza para calcular los cargos de envío durante el proceso de pago y para etiquetar precios durante el procesamiento del pedido.',
    'status' => 'Estado del Producto',
    'visible_help_text' => 'Este producto estará oculto en todos los canales de venta.',
    'availability_description' => 'Especifica una fecha de publicación para que tus productos estén programados en tu tienda.',
    'product_associations' => 'Asociaciones del Producto',
    'product_categories' => 'Categorías del Producto',
    'no_category' => 'Sin Categorías',
    'no_category_text' => 'Empieza creando una nueva categoría.',
    'new_category' => 'Nueva categoría',
    'related_products' => 'Productos Relacionados',
    'quantity_available' => 'Cantidad Disponible',
    'current_qty_inventory' => 'Cantidad actual en este inventario',

    'modals' => [
        'title' => 'Eliminar este :item',
        'message' => '¿Estás seguro de que quieres eliminar este producto? Toda la información asociada con este producto será eliminada.',

        'variants' => [
            'title' => 'Gestión de Stock para esta variante',
            'select' => 'Seleccionar inventario',
        ],
    ],

    'variants' => [
        'title' => 'Variaciones del Producto',
        'description' => 'Todas las variaciones de tu producto. Las variaciones pueden tener su propio stock y precio.',
        'add' => 'Agregar variante',
        'variant_title' => 'Variantes ~ :name',
        'empty' => 'No se encontraron variantes',
        'search_label' => 'Buscar variante',
        'search_placeholder' => 'Buscar variante del producto',
        'variant_information' => 'Información de la Variante',

        'actions' => [
            'update' => 'Actualizar variante',
            'update_stock' => 'Actualizar stock',
            'manage_inventory' => 'Gestionar Inventarios',
        ],

        'modal' => [
            'title' => 'Acerca de la variación',
            'description' => 'Nombre y precio de la variante. Si el precio está vacío, se aplicará el precio del producto.',
        ],
    ],

    'reviews' => [
        'title' => 'Opiniones de los Clientes',
        'description' => 'Aquí verás las opiniones de tus clientes y las calificaciones dadas a tus productos.',
        'view' => 'Opiniones para :product',
        'published' => 'Publicado',
        'pending' => 'Pendiente',
        'approved' => 'Opinión Aprobada',
        'approved_status' => 'Estado de Aprobación',
        'approved_message' => '¡Estado de aprobación de la opinión actualizado!',

        'subtitle' => 'Opinión sobre este producto.',
        'reviewer' => 'Revisor',
        'review' => 'Opinión',
        'review_content' => 'Contenido',
        'status' => 'Estado',
        'rating' => 'Calificación',

        'modal' => [
            'title' => 'Eliminar Opinión',
            'description' => '¿Estás seguro de que quieres eliminar esta opinión? Esta opinión no se podrá recuperar.',
            'success_message' => '¡Opinión eliminada correctamente!',
        ],
    ],

    'attributes' => [
        'title' => 'Atributos del Producto',
        'description' => 'Todos los atributos asociados con este producto.',
        'add' => 'Agregar atributo',
        'empty_title' => 'No hay Atributos Habilitados',
        'empty_values' => 'Los atributos asociados con este producto se enumeran aquí.',

        'session' => [
            'delete' => 'Atributo eliminado',
            'delete_message' => '¡Has eliminado este atributo del producto con éxito!',
            'delete_value' => 'Valor del atributo eliminado',
            'delete_value_message' => '¡Has eliminado con éxito el valor de este atributo!',
            'added' => 'Atributo Agregado',
            'added_message' => '¡Has agregado un atributo a este producto con éxito!',
        ],

        'modals' => [
            'title' => 'Agregar nuevo atributo con valor',
            'input_placeholder' => 'Selecciona el atributo para agregar',
        ],
    ],

    'inventory' => [
        'title' => 'Atributos de Inventario',
        'description' => 'Campos relacionados con la gestión de stock en tu tienda.',
        'stock_title' => 'Gestión de Stock',
        'stock_description' => 'Gestión de stock en tus diferentes inventarios.',
        'empty' => 'No se han hecho ajustes al inventario.',
        'movement' => 'Movimiento de Cantidad',
        'initial' => 'Inventario Inicial',
        'add' => 'Añadido manualmente',
        'remove' => 'Eliminado manualmente',
    ],

    'seo' => [
        'title' => 'Optimización para Motores de Búsqueda',
        'description' => 'Mejora tu clasificación y cómo aparecerá tu página de producto en los resultados de los motores de búsqueda.',
        'sub_description' => 'Aquí tienes una vista previa de los resultados en los motores de búsqueda, ¡juega con ellos!',
    ],

    'shipping' => [
        'description' => 'Información del producto sobre devoluciones o para definir si el producto puede ser enviado al cliente.',
        'package_dimension' => 'Dimensión del Paquete',
        'package_dimension_description' => 'Cobra costos de envío adicionales en función de las dimensiones del paquete especificadas aquí.',
    ],

    'related' => [
        'title' => 'Productos Similares',
        'description' => 'Todos los productos que pueden considerarse similares o complementarios a tu producto.',
        'empty' => 'No se encontraron productos similares',
        'add_content' => 'Empieza añadiendo un producto relacionado a tu producto.',

        'modal' => [
            'title' => 'Añadir Productos Similares a este producto',
            'search' => 'Buscar producto',
            'search_placeholder' => 'Buscar producto por nombre',
            'action' => 'Añadir Productos Seleccionados',
            'success_message' => 'Producto(s) seleccionado(s) añadido(s)',
            'no_results' => 'No se encontraron productos',
        ],
    ],

    'notifications' => [
        'create' => '¡Producto añadido con éxito!',
        'update' => '¡Producto actualizado con éxito!',
        'stock_update' => '¡Stock del producto actualizado con éxito!',
        'seo_update' => '¡SEO del producto actualizado con éxito!',
        'shipping_update' => '¡Envío del producto actualizado con éxito!',
        'variation_create' => '¡Variante del producto añadida con éxito!',
        'variation_delete' => '¡La variante se ha eliminado correctamente!',
        'variation_update' => '¡Variante actualizada con éxito!',
        'related_added' => '¡El producto se ha añadido correctamente a los productos relacionados!',
        'remove_related' => '¡El producto se ha eliminado correctamente de los productos relacionados!',
    ],

];
