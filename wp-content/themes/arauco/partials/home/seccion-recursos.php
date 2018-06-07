<section class="seccion-preview-recursos fondo-naranja">

	<div class="container">

		<div class="row">
			<div class="col-sm-12 wow fadeInUp">
				<h3 class="titulo-seccion color-blanco text-center"><?php echo __('¿Necesitas algún recurso?'); ?></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 wow fadeInUp text-center">
				<p class="color-blanco"><?php echo get_field('contenido_recursos', get_the_ID()); ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 wow fadeInUp text-center">
				<a class="link animated boton-seccion color-blanco fondo-verde" href="<?php echo get_field('url_boton_recursos', get_the_ID()); ?>"><?php echo __('Ver todos nuestros recursos<i class="fa fa-angle-right"></i>'); ?></a>
			</div>
		</div>

	</div>

</section>