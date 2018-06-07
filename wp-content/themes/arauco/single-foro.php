<?php get_header(); require_once('partials/header-privado.php'); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>
<section class="seccion-privado-titulo fondo-gris-claro">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="color-gris"><?php _e('Programa "Acción de apoyo a la escuela"'); ?></h2>
			</div>
		</div>
	</div>
</section>

<section class="breadcrums">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeInUp color-gris">
				<a class="link animated color-naranja" href="<?php echo get_permalink('316'); ?>"><?php _e('Bienvenida'); ?></a> -
				<a class="link animated color-naranja" href="<?php echo get_permalink('341'); ?>"><?php _e('Foro'); ?></a> - <?php the_title(); ?>
			</div>
		</div>
	</div>
</section>


<section class="wrapper-detalle-noticia wrapper-detalle-tema">

	<div class="container">

		<div class="row">

			<div class="col-sm-8 col-md-9 detalle-noticia detalle-tema">

				<h2 class="color-gris wow fadeInUp"><?php the_title(); ?></h2>

				<p class="usuario color-gris wow fadeInUp"><strong><?php _e('Iniciado por:'); ?></strong> <?php the_author(); ?></p>

				<div class="contenido color-gris wow fadeInUp">

					<?php the_content(); ?>

					<div class="text-right">
						<a class="link animated boton-seccion fondo-verde color-blanco" onclick="IrAFormularioResponder();">Responder<i class="fa fa-comment-o"></i></a>
					</div>

				</div>

				<div class="lista-respuestas-tema">
					
					<h3 class="titulo-seccion color-gris wow fadeInUp">Respuestas</h3>

					<ul>

						<?php for ($i = 0; $i < 2; $i++) { ?>

							<li class="wow fadeInUp">

								<h4 class="color-verde">Felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</h4>
								<p class="usuario color-gris"><strong>Iniciado por:</strong> Alberto Lopez</p>
								<p class="comentario color-gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
								<div class="text-right">
									<a class="link animated boton-seccion fondo-verde color-blanco" onclick="IrAFormularioResponder();">Responder<i class="fa fa-comment-o"></i></a>
								</div>

								<ul>

									<li class="wow fadeInUp">
										<h4 class="color-verde">Felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</h4>
										<p class="usuario color-gris"><strong>Iniciado por:</strong> Alberto Lopez</p>
										<p class="comentario color-gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
										<div class="text-right">
											<a class="link animated boton-seccion fondo-verde color-blanco" onclick="IrAFormularioResponder();">Responder<i class="fa fa-comment-o"></i></a>
										</div>
									</li>

								</ul>
								
							</li>

						<?php } ?>

					</ul>

					<h3 class="titulo-seccion color-gris wow fadeInUp">Responder</h3>

					<form method="POST" action="<?= $CFG_RootDirectory; ?>privado/foro/detalle-tema/">

						<div class="form-group">
							<input type="text" class="form-control" name="titulo" placeholder="Título respuesta" />
						</div>

						<div class="form-group">
							<textarea name="titulo" class="form-control" placeholder="Tu respuesta" rows="5"></textarea>
						</div>

						<div class="text-right">
							<input type="submit" class="link animated boton-seccion color-blanco fondo-verde" value="Publicar Respuesta" />
						</div>

					</form>
					
				</div>

			</div>

			<?php include("inc/sidebar-privado-tema.php"); ?>
			
		</div>

	</div>

</section>


<?php


			the_title();
		if ( comments_open() || get_comments_number() ) :
		     comments_template();
		 endif;

 // End the loop.
		endwhile;
?>

<?php get_footer(); ?>