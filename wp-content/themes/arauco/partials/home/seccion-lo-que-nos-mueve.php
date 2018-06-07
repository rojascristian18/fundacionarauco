<?php 
	$seccionSomos = get_field('contenido_somos', get_the_ID());
?>
<section class="seccion-lo-que-nos-mueve">

	<div class="container">

		<div class="row">
			<div class="col-sm-12 wow fadeInUp">
				<h3 class="titulo-seccion color-gris text-center"><?echo __('Lo que nos <span class="color-naranja">mueve</span>');?></h3>
			</div>
		</div>

		<div class="row">
		<?php for ( $i = 0; $i < count($seccionSomos) ; $i++) : ?>
			<div class="col-sm-4 wow fadeInUp contenedor">
				<img src="<?php echo $seccionSomos[$i]['icono']['url']; ?>" />
				<h4 class="color-gris"><?php echo $seccionSomos[$i]['titulo'];  ?></h4>
				<p class="color-gris"><?php echo $seccionSomos[$i]['parrafo'];  ?></p>
			</div>
		<?php endfor; ?>
		</div>

	</div>

</section>