<section class="seccion-donde-estamos">

	<div class="container">

		<div class="row">

			<div class="col-sm-6 mapa contenedor">
				<h3 class="titulo-seccion color-blanco wow fadeInUp"><?php echo __('Dónde estamos'); ?></h3>
				<img src="<?php echo get_template_directory_uri(); ?>/src/img/somos/mapa.svg" alt="Dónde estamos" class="wow fadeInUp" />
			</div>

			<div class="col-sm-6 logros contenedor">

				<h3 class="titulo-seccion color-blanco wow fadeInUp"><?php echo __('Lo que hemos logrado'); ?></h3>
				
				<?php 
					$logros = get_field('logros', get_the_ID());
				?>
				<?php for ($i = 0; $i < count($logros); $i++) : ?>
				<p class="top color-naranja wow fadeInUp"><?php echo $logros[$i]['titulo']; ?></p>
				<p class="bottom color-blanco wow fadeInUp"><?php echo $logros[$i]['detalle']; ?></p>
				<?php endfor; ?>
			</div>

		</div>

	</div>

</section>