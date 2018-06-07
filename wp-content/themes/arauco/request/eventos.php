<?php 

function obtener_proximos_eventos($posts_per_page = -1)
{	
	$q     = get_queried_object();

	$today = date('Ymd');

	$args = array(
		'post_type'      => 'evento',
		'orderby'        => array('meta_value' => 'ASC'),
		'meta_key'       => 'fecha_del_evento',
		'post_status'    => 'publish',
		'posts_per_page' => $posts_per_page,
		'post__not_in'   => array($q->ID),
		'meta_query' => array(
			array(
		        'key'		=> 'fecha_del_evento',
		        'compare'	=> '>',
		        'value'		=> $today,
		    )
	    )
	);

	$eventos = new WP_Query($args);

	if ($eventos->have_posts())
	{
		return $eventos->posts;
	}

	return array();
}