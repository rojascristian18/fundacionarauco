<?php 

function obtener_ultimas_actualidad($limit = 0, $term = '')
{	
	$q = get_queried_object();

	$args = array(
		'post_type'      => 'actualidad',
		'post_status'    => 'publish',
		'posts_per_page' => $limit,
		'post__not_in'   => array($q->ID),
		'orderby'        => array('date', 'DESC')
	);

	if (!empty($term)) {
		$args = array_replace_recursive($args, 
			array('tax_query'      => array( 
		        array( 
					'taxonomy' => 'tipos_actualidades', 
					'field'    => 'slug', 
					'terms'    => array( 
						$term
					)
		        )
			))	
		);
	}

	$actualidad = new WP_Query($args);

	if ($actualidad->have_posts()) {
		return $actualidad->posts;
	}

	return array();
}



function obtener_actualidades($limit = 0)
{
	if ($limit == 0) {
		$limit = get_option('posts_per_page');
	}

	$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'actualidad',
		'posts_per_page' => $limit,
		'post_status' => 'publish',
		'paged' => $paged,
	);

	// Filtro
	if (isset($_GET)) {
		foreach ($_GET as $param => $value) {
			if (!empty($value)) {
				switch ($param) {
					case 'clave':
						$args = array_replace_recursive($args, array('s' => $value));
						break;
					case 'tipo':
						$args = array_replace_recursive($args, array(
							'tax_query' => array(
								array(
									'taxonomy' => 'tipos_actualidades',
									'field'    => 'slug',
									'terms'    => $value,
								),
							)));
						break;
					case 'desde':
						# Normalizar formato fecha
						$value = str_replace('/', '-', $value);
			
						$args = array_replace_recursive($args, array(
							'date_query' => array(
								array(
									'after'    => array(
										'year'  => date('Y', strtotime($value)),
										'month' => date('m', strtotime($value)),
										'day'   => date('d', strtotime($value))
									),
									'inclusive' => true,
								),
							)
						));
						break;
					case 'hasta':
						# Normalizar formato fecha
						$value = str_replace('/', '-', $value);

						$args = array_replace_recursive($args, array(
							'date_query' => array(
								array(
									'before'    => array(
										'year'  => date('Y', strtotime($value)),
										'month' => date('m', strtotime($value)),
										'day'   => date('d', strtotime($value))
									),
									'inclusive' => true,
								),
							)
						));
						break;
					
				}
			}
		}	
	}

	$actualidades = new WP_Query($args);

	return $actualidades;

}