<?php 

$seccionLogros = get_field('contenido_logros', get_the_ID());

if (!empty($seccionLogros)) : ?>

<section class="seccion-preview-logros fondo-verde">

	<div class="container">

		<div class="row">
		<?php for ( $i = 0; $i < count($seccionLogros) ; $i++) : ?>
			<div class="col-sm-6 col-md-3 wow fadeInUp contenedor">
				<p class="top color-amarillo"><?php echo $seccionLogros[$i]['titulo']; ?></p>
				<p class="bottom color-blanco"><?php echo $seccionLogros[$i]['parrafo']; ?></p>
			</div>
		<?php endfor; ?>
		</div>

		<div class="row">
			<div class="col-sm-12 wow fadeInUp text-center">
				<a class="link animated boton-seccion color-verde fondo-blanco" href="<?php echo get_field('url_boton_logros', get_the_ID()); ?>"><?php echo __('Ver todos nuestros logros<i class="fa fa-angle-right"></i>'); ?></a>
			</div>
		</div>

	</div>

</section>
<?php 

endif;

?>