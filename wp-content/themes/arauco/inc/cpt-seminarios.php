<?php

/****************************************************************************************************
Custom Taxonomy Comunas seminarios
*/
register_taxonomy('comunas_seminarios', array('seminario'), array(
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
Custom Taxonomy temas seminario
*/
register_taxonomy('temas_seminario', array('seminario'), array(
	'labels'					=> array(
		'name'					=> 'Tema',
		'singular_name'			=> 'Tema',
		'menu_name'				=> 'Temas',
		'parent_item_colon'		=> 'Tema Padre:',
		'all_items'				=> 'Temas',
		'view_item'				=> 'Ver Tema',
		'add_new_item'			=> 'Nuevo Tema',
		'add_new'				=> 'Nuevo Tema',
		'edit_item'				=> 'Editar Tema',
		'update_item'			=> 'Editar Tema',
		'search_items'			=> 'Buscar Tema',
		'not_found'				=> 'No se encontraron Temas',
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
Custom Post Type ediciones
*/
function seminarios_custom_post_type()
{
	register_post_type('seminario', array(
		'description'			=> 'Seminario',
		'labels'				=> array(
			'name'					=> 'Seminario',
			'singular_name'			=> 'Seminario',
			'menu_name'				=> 'Seminarios',
			'parent_item_colon'		=> 'Seminario Padre:',
			'all_items'				=> 'Todos los Seminarios',
			'view_item'				=> 'Ver Seminario',
			'add_new_item'			=> 'Nuevo Seminario',
			'add_new'				=> 'Nuevo Seminario',
			'edit_item'				=> 'Editar Seminario',
			'update_item'			=> 'Editar Seminario',
			'search_items'			=> 'Buscar Seminario',
			'not_found'				=> 'No se encontraron Seminarios',
			'not_found_in_trash'	=> 'No se encontraron Seminarios en la Papelera',
		),
		'supports'				=> array('title', 'editor' , 'page-attributes', 'thumbnail'),
		'taxonomies'			=> array('seminarios'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-tickets',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'seminario',///%categoria_producto%',
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

add_action('init', 'seminarios_custom_post_type', 0);