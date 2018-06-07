<?php

/****************************************************************************************************
Custom Taxonomy Regiones
*/
register_taxonomy('regiones_locales', array('local'), array(
	'labels'					=> array(
		'name'					=> 'Region',
		'singular_name'			=> 'Region',
		'menu_name'				=> 'Regiones',
		'parent_item_colon'		=> 'Region Padre:',
		'all_items'				=> 'Regiones',
		'view_item'				=> 'Ver Region',
		'add_new_item'			=> 'Nueva Region',
		'add_new'				=> 'Nueva Region',
		'edit_item'				=> 'Editar Region',
		'update_item'			=> 'Editar Region',
		'search_items'			=> 'Buscar Region',
		'not_found'				=> 'No se encontraron Regiones',
		'not_found_in_trash'	=> 'No se encontraron Regiones en la Papelera',
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
function region_custom_post_type()
{
	register_post_type('local', array(
		'description'			=> 'Local',
		'labels'				=> array(
			'name'					=> 'Local',
			'singular_name'			=> 'Local',
			'menu_name'				=> 'Locales',
			'parent_item_colon'		=> 'Local Padre:',
			'all_items'				=> 'Todos los Locales',
			'view_item'				=> 'Ver Local',
			'add_new_item'			=> 'Nuevo Local',
			'add_new'				=> 'Nuevo Local',
			'edit_item'				=> 'Editar Local',
			'update_item'			=> 'Editar Local',
			'search_items'			=> 'Buscar Local',
			'not_found'				=> 'No se encontraron Locales',
			'not_found_in_trash'	=> 'No se encontraron Locales en la Papelera',
		),
		'supports'				=> array('title', 'editor' , 'page-attributes', 'thumbnail'),
		'taxonomies'			=> array('regiones_locales'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-store',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'local',///%categoria_producto%',
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

add_action('init', 'region_custom_post_type', 0);