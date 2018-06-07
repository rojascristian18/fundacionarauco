<?php 

/****************************************************************************************************
Custom Post Type ediciones
*/
function eventos_custom_post_type()
{
	register_post_type('evento', array(
		'description'			=> 'Evento',
		'labels'				=> array(
			'name'					=> 'Evento',
			'singular_name'			=> 'Evento',
			'menu_name'				=> 'Eventos',
			'parent_item_colon'		=> 'Evento Padre:',
			'all_items'				=> 'Todos los Eventos',
			'view_item'				=> 'Ver Evento',
			'add_new_item'			=> 'Nuevo Evento',
			'add_new'				=> 'Nuevo Evento',
			'edit_item'				=> 'Editar Evento',
			'update_item'			=> 'Editar Evento',
			'search_items'			=> 'Buscar Evento',
			'not_found'				=> 'No se encontraron Eventos',
			'not_found_in_trash'	=> 'No se encontraron Eventos en la Papelera',
		),
		'supports'				=> array('title', 'editor'),
		'taxonomies'			=> array('eventos'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-awards',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'evento',///%categoria_producto%',
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

add_action('init', 'eventos_custom_post_type', 0);