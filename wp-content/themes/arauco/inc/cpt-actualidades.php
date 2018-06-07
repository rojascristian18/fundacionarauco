<?php
/****************************************************************************************************
Custom Taxonomy tipos
*/
register_taxonomy('tipos_actualidades', array('actualidad'), array(
	'label'         			=> 'Tipos de entradas',
	'labels'					=> array(
		'name'					=> 'Tipo de entrada',
		'singular_name'			=> 'Tipo de entrada',
		'menu_name'				=> 'Tipos de entradas',
		'parent_item_colon'		=> 'Tipo de entrada Padre:',
		'all_items'				=> 'Tipos de entradas',
		'view_item'				=> 'Ver Tipo de entrada',
		'add_new_item'			=> 'Nuevo Tipo de entrada',
		'add_new'				=> 'Nuevo Tipo de entrada',
		'edit_item'				=> 'Editar Tipo de entrada',
		'update_item'			=> 'Editar Tipo de entrada',
		'search_items'			=> 'Buscar Tipo de entrada',
		'not_found'				=> 'No se encontraron Tipo de entrada',
		'not_found_in_trash'	=> 'No se encontraron Tipo de entrada en la Papelera',
	),
	'hierarchical'			=> true,
	'public'				=> true,
	'query_var' 			=> true, 
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true,
	'rewrite' 				=> array('slug' => 'tipos_actualidades')
));

/****************************************************************************************************
Custom Post Type ediciones
*/
function actualidad_custom_post_type()
{
	register_post_type('actualidad', array(
		'description'			=> 'Entrada',
		'labels'				=> array(
			'name'					=> 'Entrada',
			'singular_name'			=> 'Entrada',
			'menu_name'				=> 'Actualidad',
			'parent_item_colon'		=> 'Entrada Padre:',
			'all_items'				=> 'Todas las Entradas',
			'view_item'				=> 'Ver Entrada',
			'add_new_item'			=> 'Nueva Entrada',
			'add_new'				=> 'Nueva Entrada',
			'edit_item'				=> 'Editar Entrada',
			'update_item'			=> 'Editar Entrada',
			'search_items'			=> 'Buscar Entrada',
			'not_found'				=> 'No se encontraron Entradas',
			'not_found_in_trash'	=> 'No se encontraron Entradas en la Papelera',
		),
		'supports'				=> array('title' , 'page-attributes', 'thumbnail', 'editor'),
		'taxonomies'			=> array('tipos_actualidades'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-megaphone',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'actualidad',///%categoria_producto%',
			'hierarchical'			=> false,
			'with_front'			=> true,
			'pages'					=> true,
			'feeds'					=> false,
			//'ep_mask'				=> EP_PERMALINK
		),
		'query_var'				=> true,
		'_builtin'				=> false,
		'capability_type'		=> 'post'
	));
	flush_rewrite_rules();
}

add_action('init', 'actualidad_custom_post_type', 0);