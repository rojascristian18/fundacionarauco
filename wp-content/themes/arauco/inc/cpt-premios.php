<?php 

/****************************************************************************************************
Custom Post Type ediciones
*/
function premios_custom_post_type()
{
	register_post_type('premio', array(
		'description'			=> 'Premio',
		'labels'				=> array(
			'name'					=> 'Premio',
			'singular_name'			=> 'Premio',
			'menu_name'				=> 'Premios',
			'parent_item_colon'		=> 'Premio Padre:',
			'all_items'				=> 'Todos los Premios',
			'view_item'				=> 'Ver Premio',
			'add_new_item'			=> 'Nuevo Premio',
			'add_new'				=> 'Nuevo Premio',
			'edit_item'				=> 'Editar Premio',
			'update_item'			=> 'Editar Premio',
			'search_items'			=> 'Buscar Premio',
			'not_found'				=> 'No se encontraron Premios',
			'not_found_in_trash'	=> 'No se encontraron Premios en la Papelera',
		),
		'supports'				=> array('title', 'editor', 'thumbnail', 'page-attributes'),
		'taxonomies'			=> array(''),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-star-filled',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'premio',///%categoria_producto%',
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

add_action('init', 'premios_custom_post_type', 0);