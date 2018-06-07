<?php

/****************************************************************************************************
Custom Taxonomy Comunas programas
*/
register_taxonomy('comunas_programas', array('programa'), array(
	'labels'					=> array(
		'name'					=> 'Comuna',
		'singular_name'			=> 'Comuna',
		'menu_name'				=> 'Comunas',
		'parent_item_colon'		=> 'Comuna Padre:',
		'all_items'				=> 'Comunas',
		'view_item'				=> 'Ver Comuna',
		'add_new_item'			=> 'Nueva Comuna',
		'add_new'				=> 'Nueva Comuna',
		'edit_item'				=> 'Editar Comuna',
		'update_item'			=> 'Editar Comuna',
		'search_items'			=> 'Buscar Comuna',
		'not_found'				=> 'No se encontraron Comunas',
		'not_found_in_trash'	=> 'No se encontraron Comunas en la Papelera',
	),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Taxonomy Tipos programas
*/
register_taxonomy('tipos_programas', array('programa'), array(
	'labels'					=> array(
		'name'					=> 'Tipo de programa',
		'singular_name'			=> 'Tipo de programa',
		'menu_name'				=> 'Tipos de programas',
		'parent_item_colon'		=> 'Tipo de programa Padre:',
		'all_items'				=> 'Tipos de programas',
		'view_item'				=> 'Ver Tipo de programa',
		'add_new_item'			=> 'Nuevo Tipo de programa',
		'add_new'				=> 'Nuevo Tipo de programa',
		'edit_item'				=> 'Editar Tipo de programa',
		'update_item'			=> 'Editar Tipo de programa',
		'search_items'			=> 'Buscar Tipo de programa',
		'not_found'				=> 'No se encontraron Tipos de programas',
		'not_found_in_trash'	=> 'No se encontraron Tipos de programas en la Papelera',
	),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type programas
*/
function programas_custom_post_type()
{
	register_post_type('programa', array(
		'description'			=> 'Programa',
		'labels'				=> array(
			'name'					=> 'Programa',
			'singular_name'			=> 'Programa',
			'menu_name'				=> 'Programas',
			'parent_item_colon'		=> 'Programa Padre:',
			'all_items'				=> 'Todos los Programas',
			'view_item'				=> 'Ver Programa',
			'add_new_item'			=> 'Nuevo Programa',
			'add_new'				=> 'Nuevo Programa',
			'edit_item'				=> 'Editar Programa',
			'update_item'			=> 'Editar Programa',
			'search_items'			=> 'Buscar Programa',
			'not_found'				=> 'No se encontraron Programas',
			'not_found_in_trash'	=> 'No se encontraron Programas en la Papelera',
		),
		'supports'				=> array('title', 'editor', 'page-attributes', 'thumbnail'),
		'taxonomies'			=> array('programas'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-welcome-learn-more',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'programa',///%categoria_producto%',
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

add_action('init', 'programas_custom_post_type', 0);

function quitar_categorias_box() {
	remove_meta_box( 'documentosdiv', 'documento', 'side' );
}

add_action( 'admin_menu', 'quitar_categorias_box' );