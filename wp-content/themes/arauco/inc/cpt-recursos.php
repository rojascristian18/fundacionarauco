<?php
/****************************************************************************************************
Custom Taxonomy tipos
*/
register_taxonomy('tipos_recursos', array('recurso'), array(
	'labels'					=> array(
		'name'					=> 'Tipo de recurso',
		'singular_name'			=> 'Tipo de recurso',
		'menu_name'				=> 'Tipos de recursos',
		'parent_item_colon'		=> 'Tipo de recurso Padre:',
		'all_items'				=> 'Tipos de recursos',
		'view_item'				=> 'Ver Tipo de recurso',
		'add_new_item'			=> 'Nuevo Tipo de recurso',
		'add_new'				=> 'Nuevo Tipo de recurso',
		'edit_item'				=> 'Editar Tipo de recurso',
		'update_item'			=> 'Editar Tipo de recurso',
		'search_items'			=> 'Buscar Tipo de recurso',
		'not_found'				=> 'No se encontraron Tipo de recurso',
		'not_found_in_trash'	=> 'No se encontraron Tipo de recurso en la Papelera',
	),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type ediciones
*/
function recursos_custom_post_type()
{
	register_post_type('recurso', array(
		'description'			=> 'Recurso',
		'labels'				=> array(
			'name'					=> 'Recurso',
			'singular_name'			=> 'Recurso',
			'menu_name'				=> 'Recursos',
			'parent_item_colon'		=> 'Recurso Padre:',
			'all_items'				=> 'Todos los Recursos',
			'view_item'				=> 'Ver Recurso',
			'add_new_item'			=> 'Nuevo Recurso',
			'add_new'				=> 'Nuevo Recurso',
			'edit_item'				=> 'Editar Recurso',
			'update_item'			=> 'Editar Recurso',
			'search_items'			=> 'Buscar Recurso',
			'not_found'				=> 'No se encontraron Recursos',
			'not_found_in_trash'	=> 'No se encontraron Recursos en la Papelera',
		),
		'supports'				=> array('title', 'editor' , 'thumbnail'),
		'taxonomies'			=> array('recursos'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-portfolio',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'recurso',///%categoria_producto%',
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

add_action('init', 'recursos_custom_post_type', 0);