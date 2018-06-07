<?php 

/****************************************************************************************************
Custom Post Type ediciones
*/
function foros_custom_post_type()
{
	register_post_type('foro', array(
		'description'			=> 'Foro',
		'labels'				=> array(
			'name'					=> 'Foro',
			'singular_name'			=> 'Foro',
			'menu_name'				=> 'Foros',
			'parent_item_colon'		=> 'Foro Padre:',
			'all_items'				=> 'Todos los Foros',
			'view_item'				=> 'Ver Foro',
			'add_new_item'			=> 'Nuevo Foro',
			'add_new'				=> 'Nuevo Foro',
			'edit_item'				=> 'Editar Foro',
			'update_item'			=> 'Editar Foro',
			'search_items'			=> 'Buscar Foro',
			'not_found'				=> 'No se encontraron Foros',
			'not_found_in_trash'	=> 'No se encontraron Foros en la Papelera',
		),
		'supports'				=> array('title', 'editor', 'thumbnail', 'comments'),
		'taxonomies'			=> array(),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-format-status',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'foro',///%categoria_producto%',
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

add_action('init', 'foros_custom_post_type', 0);