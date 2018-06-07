<?php 

$seccionProgramas = get_field('seccion_programas', get_the_ID());

if (!empty($seccionProgramas)) : ?>

<section class="seccion-programas-destacados">

	<div class="container">

		<div class="row">
		<?php for ( $i = 0; $i < count($seccionProgramas) ; $i++) : ?>
			<div class="col-sm-4 wow fadeInUp contenedor">
				<a class="link animated" href="<?php echo get_permalink($seccionProgramas[$i]); ?>">
					<img src="<?php echo get_the_post_thumbnail_url($seccionProgramas[$i], 'thumb_programa'); ?>" />
					<div class="capa animated">
						<h4 class="color-blanco"><?php echo get_the_title($seccionProgramas[$i]); ?></h4>
						<i class="fa fa-angle-right color-blanco"></i>
					</div>
				</a>
			</div>
		<?php endfor; ?>
			
		</div>

		<div class="row">
			<div class="col-sm-12 wow fadeInUp text-center">
				<a class="link animated boton-seccion color-blanco fondo-verde" href="<?php echo get_field('url_boton_programas', get_the_ID()); ?>"><?php echo __('Ver todos los programas<i class="fa fa-angle-right"></i>'); ?></a>
			</div>
		</div>

	</div>

</section>

<?php 
endif;
?>