<?php 

$contenidos = get_field('elemento');

if (!empty($contenidos)) : ?>

<section class="seccion-caracteristicas-programa fondo-gris-claro">

	<div class="container">

		<div class="row">
			
			<?php for ($i=0; $i < count($contenidos); $i++) : ?>
				<div class="col-xs-6 col-sm-6 col-md-3 caracteristica color-gris wow fadeInUp">
					<div class="imagen">
						<img src="<?php echo $contenidos[$i]['icono']['url']; ?>" />
					</div>
					<h5 class="color-verde"><?php echo $contenidos[$i]['titulo']; ?></h5>
					<?php echo $contenidos[$i]['contenido']; ?>
				</div>
			<?php endfor; ?>
			

		</div>

	</div>

</section>

<?php 
endif;
?>