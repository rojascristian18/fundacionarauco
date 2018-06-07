<section class="wrapper-detalle-noticia wrapper-detalle-programa">

	<div class="container">

		<div class="row">

			<div class="col-sm-12 detalle-noticia detalle-programa">

				<h2 class="color-gris wow fadeInUp"><?php the_title(); ?></h2>

				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'detalle_programa'); ?>" alt="<?php the_title(); ?>" class="img-principal wow fadeInUp" />

				<div class="contenido color-gris wow fadeInUp">

					<?php the_content(); ?>

					<div class="break"></div>

					<div class="redes-compartir-detalles wow fadeInUp">
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-facebook"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-twitter"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-linkedin"></i></a>
						<a class="link animated fondo-verde color-blanco"><i class="fa fa-whatsapp"></i></a>
					</div>

				</div>

			</div>
			
		</div>

	</div>

</section>