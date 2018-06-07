<?php 

$testimonios     = obtener_ultimas_actualidad(10, 'testimonio');
$ultimasNoticias = obtener_ultimas_actualidad(2, 'noticia');

?>

<section class="seccion-testimonios-noticias fondo-gris-claro">

	<div class="container">

		<div class="row">

			<div class="col-sm-12 col-md-6 wow fadeInUp testimonios">

				<h3 class="titulo-seccion color-gris"><?php echo __('Testimonios'); ?></h3>
				
				<ul class="carrusel-testimonios owl-carousel">
				<?php for ( $i = 0; $i < count($testimonios) ; $i++) : ?>
					<li class="item">
						<div class="contenedor">
							<?php 
							$fotoAutor = get_field('foto_del_autor', $testimonios[$i]);
							?>
							<img src="<?php echo $fotoAutor['sizes']['thumb_testimonio']; ?>" />
							<h5 class="color-gris"><?php echo get_field('nombre_del_autor', $testimonios[$i]->ID); ?></h5>
							<h6 class="color-gris"><?php echo get_field('informacion_del_autor', $testimonios[$i]->ID); ?></h6>
							<p class="color-gris"><?php echo the_excerpt_max_charlength_custom(100, $testimonios[$i]->post_content); ?></p>
							<a class="link animated color-naranja" href="<?php echo the_permalink($testimonios[$i]->ID); ?>"><?php echo __('Ver testimonio completo'); ?></a>
						</div>
					</li>
				<?php endfor; ?>

				</ul>

				<div class="text-right">

					<a class="link animated boton-seccion color-blanco fondo-verde" href="<?php echo get_permalink(117); ?>?tipo=testimonio"><?php echo __('Más testimonios<i class="fa fa-angle-right"></i>'); ?></a>

				</div>

			</div>

			<div class="col-sm-12 col-md-6 noticias">

				<h3 class="titulo-seccion color-gris wow fadeInUp"><?php echo __('Últimas noticias'); ?></h3>
				
				<?php for ( $i = 0; $i < count($ultimasNoticias) ; $i++) : ?>
					<?php 
					$fotoNoticia = get_field('imagen_de_la_noticia', $ultimasNoticias[$i]->ID);
					?>
					<div class="noticia wow fadeInUp">

					<div class="col-sm-3 col-md-4">
						<a class="link animated imagen" href="<?php echo the_permalink($ultimasNoticias[$i]->ID); ?>">
							<img src="<?php echo get_the_post_thumbnail_url($ultimasNoticias[$i]->ID, 'thumb_noticia'); ?>" alt="<?php echo $ultimasNoticias[$i]->post_title; ?>" />
						</a>
					</div>

					<div class="col-sm-9 col-md-8">

						<a class="link animated titulo" href="<?= $CFG_RootDirectory; ?>noticias/detalle-noticia/">
							<h4 class="color-verde"><?php echo $ultimasNoticias[$i]->post_title; ?></h4>
						</a>

						<p class="color-gris"><?php echo the_excerpt_max_charlength_custom(100, $ultimasNoticias[$i]->post_content); ?></p>

						<div class="text-right">
							<a class="link animated color-naranja mas" href="<?php echo the_permalink($ultimasNoticias[$i]->ID); ?>"><?php echo __('Leer noticia'); ?></a>
						</div>

					</div>

					<div class="break"></div>

				</div>
				<?php endfor; ?>

				<div class="text-right wow fadeInUp">

					<a class="link animated boton-seccion color-blanco fondo-verde" href="<?php echo get_permalink(117); ?>?tipo=noticia"><?php echo _('Ver todas las noticias<i class="fa fa-angle-right"></i>'); ?></a>

				</div>
				
			</div>

		</div>

	</div>

</section>