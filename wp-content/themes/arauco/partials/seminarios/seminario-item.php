<div class="col-sm-12 contenedor wow fadeInUp">

	<div class="col-xs-12 col-sm-4 col-md-3 <?php if ($i % 2 != 0) {echo "pull-right";} ?>">
		<a class="link animated imagen" href="<?php the_permalink(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'lista_programa'); ?>" alt="<?php the_title(); ?>">
		</a>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-9 contenedor-descripcion">
		<a class="link animated titulo" href="<?php the_permalink(); ?>">
			<h4 class="color-verde"><?php the_title(); ?></h4>
		</a>
		<p class="descripcion color-gris"><?php echo strip_tags(the_excerpt_max_charlength_custom(600, get_the_content())); ?></p>
		<p class="mas text-right">
			<a class="link animated color-naranja" href="<?php echo the_permalink(); ?>"><?php echo __('Leer más sobre el seminario'); ?></a>
		</p>
	</div>

	<div class="break"></div>

	<div class="col-sm-12">
		<div class="borde"></div>
	</div>

</div>