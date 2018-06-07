<?php 

class UltimasActualidadWidgets extends WP_Widget {

	function __construct() {

		// Instantiate the parent object
		parent::__construct( false, 'Lo último de actualidad' );
	
	}

	function widget( $args, $instance ) {
		
		include(get_template_directory() . '/partials/actualidad/content-ultimas-widget.php');
		
	}

	function update( $new_instance, $old_instance ) {
		$instance                      = $old_instance;
		$instance["titulo"]            = strip_tags($new_instance["titulo"]);
		$instance["cantidad"]          = strip_tags($new_instance["cantidad"]);
		$instance["tipos_de_entradas"] = strip_tags($new_instance["tipos_de_entradas"]);

        return $instance;
	}

	function form( $instance ) {
		

		$tipos = get_terms( array(
		    'taxonomy' => 'tipos_actualidades',
		    'hide_empty' => false,
		) );

		?>	
			<p>
	            <label for="<?php echo $this->get_field_name('titulo'); ?>">Título</label>
	            <input class="widefat" id="<?php echo $this->get_field_name('titulo'); ?>" name="<?php echo $this->get_field_name('titulo'); ?>" type="text" value="<?php echo esc_attr($instance["titulo"]); ?>" />
	        </p>

	        <p>
	            <label for="<?php echo $this->get_field_name('cantidad'); ?>">Cantidad de posts</label>
	            <input class="widefat" id="<?php echo $this->get_field_name('cantidad'); ?>" name="<?php echo $this->get_field_name('cantidad'); ?>" type="text" value="<?php echo esc_attr($instance["cantidad"]); ?>" />
	        </p>
				<label for="<?php echo $this->get_field_name('tipos_de_entradas'); ?>">Tipos de entradas</label>
				<select name="<?php echo $this->get_field_name('tipos_de_entradas'); ?>">
					<option value="">Entradas por fecha (mixto)</option>
					<?php 
					foreach ($tipos as $it => $tipo) : 
						if ($instance["tipos_de_entradas"] == $tipo->slug) : ?>
							<option value="<?php echo $tipo->slug;?>" selected>Sólo <?php echo $tipo->name; ?></option>
						<?php 
						else : ?>
							<option value="<?php echo $tipo->slug;?>">Sólo <?php echo $tipo->name; ?></option>
						<?php
						endif;
						?>
						
					<?php
					endforeach;
					?>
				</select>
	        <p>

	        </p>
	
		<?php
	}

}

function ultimas_register_widgets() {
	register_widget( 'UltimasActualidadWidgets' );
}

add_action( 'widgets_init', 'ultimas_register_widgets' );