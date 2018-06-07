<?php 

$premios = obtener_premios();


if (!empty($premios)) : ?>

<section class="seccion-programas-destacados lista-premios">

	<div class="container">

		<div class="row">

			<?php for ($i = 0; $i < count($premios); $i++) { ?>

				<div class="col-sm-4 wow fadeInUp contenedor">
					<a class="link animated" href="<?php echo get_permalink($premios[$i]->ID); ?>">
						<img src="<?php echo get_the_post_thumbnail_url($premios[$i]->ID, 'thumb_programa'); ?>" />
						<div class="capa animated">
							<h4 class="color-blanco"><?php echo $premios[$i]->post_title; ?></h4>
							<span class="animated color-blanco"><?php echo __('Más información'); ?></span>
						</div>
					</a>
				</div>

			<?php } ?>

		</div>

	</div>

</section>

<?php 

endif;

?>