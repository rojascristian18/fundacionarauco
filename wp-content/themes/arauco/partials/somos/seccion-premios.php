<section class="seccion-preview-premios fondo-gris-claro">

	<div class="container">

		<div class="row">
			<div class="col-sm-12 wow fadeInUp">
				<h3 class="titulo-seccion color-gris text-center"><?php echo __('Premios'); ?></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 wow fadeInUp text-center">
				<p class="color-gris"><?php echo get_field('contenido_premios', get_the_ID()); ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 wow fadeInUp text-center">
				<a class="link animated boton-seccion color-blanco fondo-verde" href="<?php echo get_field('url_boton_premios', get_the_ID()); ?>"><?php echo __('Ver premios<i class="fa fa-angle-right"></i>'); ?></a>
			</div>
		</div>

	</div>

</section>