<?php

declare(strict_types=1);

return [

    'title' => 'Organiza tus productos en diversas colecciones',
    'content' => 'Crea y administra todas tus colecciones para ayudar a tus clientes a encontrar fácilmente grupos o tipos de productos.',
    'automatic' => 'Automático',
    'automatic_description' => 'Los productos que cumplan con las condiciones que establezcas se agregarán automáticamente a la colección.',
    'manual' => 'Manual',
    'manual_description' => 'Agrega los productos a esta colección uno por uno.',
    'filter_type' => 'Tipo de Colección',
    'product_conditions' => 'Condiciones del Producto',

    'conditions' => [
        'title' => 'Condiciones',
        'products_match' => 'Los productos deben cumplir con:',
        'all' => 'Todas las condiciones',
        'any' => 'Cualquier condición',
        'rules' => 'Reglas',
        'choose_rule' => 'Elige una regla',
        'select_operator' => 'Selecciona un operador',
        'add' => 'Agregar condición',
        'add_another' => 'Agregar otra condición',
        'update' => 'Actualizar condiciones',
    ],

    'availability_description' => 'Especifica una fecha de publicación para programar tus colecciones en tu tienda.',

    'order' => [
        'alpha_asc' => 'Alfabético Ascendente',
        'alpha_desc' => 'Alfabético Descendente',
        'price_asc' => 'Precio Ascendente',
        'price_desc' => 'Precio Descendente',
        'created_asc' => 'Creado Ascendente',
        'created_desc' => 'Creado Descendente',
    ],

    'rules' => [
        'product_title' => 'Título del producto',
        'product_brand' => 'Marca del producto',
        'product_category' => 'Categoría del producto',
        'product_price' => 'Precio del producto',
        'compare_at_price' => 'Precio de comparación',
        'inventory_stock' => 'Inventario en stock',
    ],

    'operator' => [
        'equals_to' => 'Igual a',
        'not_equals_to' => 'No igual a',
        'less_than' => 'Menor que',
        'greater_than' => 'Mayor que',
        'starts_with' => 'Comienza con',
        'ends_with' => 'Termina con',
        'contains' => 'Contiene',
        'not_contains' => 'No contiene',
    ],

    'empty_collections' => 'No hay productos en esta colección. Agrega o cambia las condiciones para agregar productos dinámicamente.',

    'modal' => [
        'title' => 'Agregar productos a la colección',
        'search' => 'Buscar producto',
        'search_placeholder' => 'Buscar producto por nombre',
        'action' => 'Agregar productos seleccionados',
        'stock' => ':stock disponible',
        'success_message' => 'Producto(s) seleccionado(s) añadido(s)',
    ],
];
