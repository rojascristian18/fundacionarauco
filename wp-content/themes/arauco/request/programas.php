<?php 

function obtener_programas($limit = 0)
{
	if ($limit == 0) {
		$limit = get_option('posts_per_page');
	}

	$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'programa',
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
					case 'comuna':
						$args = array_replace_recursive($args, array(
							'tax_query' => array(
								array(
									'taxonomy' => 'comunas_programas',
									'field'    => 'slug',
									'terms'    => $value,
								),
							)));
						break;
					case 'tipo':
						$args = array_replace_recursive($args, array(
							'tax_query' => array(
								array(
									'taxonomy' => 'tipos_programas',
									'field'    => 'slug',
									'terms'    => $value,
								),
							)));
						break;
					
				}
			}
		}	
	}

	$programas = new WP_Query($args);

	return $programas;

}


function obtener_programa_por_id($id)
{
	$args = array(
		'p' => $id,
		'post_type' => 'programa',
		'post_status' => 'publish'
	);

	$programas = new WP_Query($args);

	if ($programas->have_posts()) {
		return $programas->posts;
	}

	return array();
}