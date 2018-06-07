<?php

/****************************************************************************************************
Custom Post Type ediciones
*/
function recursos_privados_custom_post_type()
{
	register_post_type('recurso_privado', array(
		'description'			=> 'Recurso privado',
		'labels'				=> array(
			'name'					=> 'Recurso privado',
			'singular_name'			=> 'Recurso privado',
			'menu_name'				=> 'Recurso privados',
			'parent_item_colon'		=> 'Recurso privado Padre:',
			'all_items'				=> 'Todos los Recurso privados',
			'view_item'				=> 'Ver Recurso privado',
			'add_new_item'			=> 'Nuevo Recurso privado',
			'add_new'				=> 'Nuevo Recurso privado',
			'edit_item'				=> 'Editar Recurso privado',
			'update_item'			=> 'Editar Recurso privado',
			'search_items'			=> 'Buscar Recurso privado',
			'not_found'				=> 'No se encontraron Recurso privados',
			'not_found_in_trash'	=> 'No se encontraron Recurso privados en la Papelera',
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
			'slug'					=> 'recurso_privado',///%categoria_producto%',
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

add_action('init', 'recursos_privados_custom_post_type', 0);