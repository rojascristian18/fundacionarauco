<?php 

function obtener_foros()
{
		
	$args = array(
		'post_type' => 'foro',
		'post_status' => 'publish',
		'orderby' => array('date', 'DESC'),
		'posts_per_page' => 4,

	);

	$foros = new WP_Query($args);

	if (!empty($foros)) {
		return $foros->posts;
	}

	return array();

}



function obtener_foros_page($limit = 0)
{	
	if ($limit == 0) {
		$limit = get_option('posts_per_page');
	}
		
	$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'foro',
		'post_status' => 'publish',
		'posts_per_page' => $limit,
		'paged' => $paged,
	);

	$foro = new WP_Query($args);

	return $foro;

}