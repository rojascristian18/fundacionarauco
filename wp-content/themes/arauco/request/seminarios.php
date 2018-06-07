<?php 

function obtener_seminarios($limit = 0)
{
	if ($limit == 0) {
		$limit = get_option('posts_per_page');
	}

	$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'seminario',
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
					case 'tema':
						$args = array_replace_recursive($args, array(
							'tax_query' => array(
								array(
									'taxonomy' => 'temas_seminario',
									'field'    => 'slug',
									'terms'    => $value,
								),
							)));
						break;
					case 'comuna':
						$args = array_replace_recursive($args, array(
							'tax_query' => array(
								array(
									'taxonomy' => 'comunas_seminarios',
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

	$seminarios = new WP_Query($args);

	return $seminarios;

}