<?php 

function obtener_premios()
{

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'premio',
		'post_status' => 'publish',
		'orderby' => array('order', 'ASC')
	);

	$premios = new WP_Query($args);

	if ($premios->have_posts()) {
		return $premios->posts;
	}

	return array();
}