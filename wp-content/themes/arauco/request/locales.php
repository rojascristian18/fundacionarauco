<?php 

/**
 * [obtener_local_por_slug description]
 * @param  string $region slug de la región
 * @return obj | arr
 */
function obtener_local_por_region($region = '')
{
	$arg = array(
		'post_type' => 'local',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'regiones_locales',
				'field'    => 'slug',
				'terms'    => $region,
			),
		)
	);

	$locales = new WP_Query( $arg );

	if (!empty($locales)) {
		return $locales->posts;
	}

	return array();
}

