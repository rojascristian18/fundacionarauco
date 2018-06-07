<section class="wrapper-detalle-noticia">

	<div class="container">

		<div class="row">

			<div class="col-sm-8 col-md-9 detalle-noticia">

				<h2 class="color-gris wow fadeInUp"><?php the_title(); ?></h2>

				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="img-principal wow fadeInUp" />

				<p class="color-gris fecha wow fadeInUp"><?php echo get_the_date('d/m/Y'); ?> &nbsp; | &nbsp; 
				
				<?php 

				$cate = get_the_terms(get_the_ID(), 'tipos_actualidades');
				
				foreach ($cate as $ic => $tipoPost) : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/actualidad/icon-<?php echo strtolower($tipoPost->name); ?>.svg"> <?php echo strtoupper($tipoPost->name); ?>
				<?
				endforeach;
				?>

				</p>

				<div class="contenido color-gris wow fadeInUp">

					<?php the_content(); ?>

					<div class="redes-compartir-detalles wow fadeInUp">
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-facebook"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-twitter"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-linkedin"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-whatsapp"></i></a>
					</div>

				</div>

			</div>
			
			<!--SIDEBAR-->
			<?php if ( is_active_sidebar( sprintf('widget-aside-%s', strtolower($tipoNombre)) ) ) : ?>

				<?php dynamic_sidebar( sprintf('widget-aside-%s', strtolower($tipoNombre)) ); ?>

			<?php endif; ?>
			<!--FIN SIDEBAR-->

		</div>

	</div>

</section>