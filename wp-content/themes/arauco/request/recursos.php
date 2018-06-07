<?php 

function obtener_mis_recursos()
{
	if (esProfesor()) {
		$id = get_current_user_id();
		#return get_userdata($id);
		$recursosIds = get_field('recursos', 'user_' . $id);

		if (!empty($recursosIds)) {
			$args = array(
				'post_type' => 'recurso_privado',
				'post_status' => 'publish',
				'post__in' => $recursosIds
			);

			$recursos = new WP_Query($args);

			if (!empty($recursos)) {
				return $recursos->posts;
			}
		}

		return array();
	}
}