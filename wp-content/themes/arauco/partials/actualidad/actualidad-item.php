<div class="col-sm-6 col-md-3 contenedor wow fadeInUp">
	<a class="link animated imagen" href="<?php the_permalink(); ?>">
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'lista_programa'); ?>" alt="<?php the_title();  ?>">
	</a>
	<a class="link animated titulo" href="<?php echo get_permalink(get_the_ID()); ?>">
		<h4 class="color-verde"><?php the_title();  ?></h4>
	</a>
	<p class="fecha color-gris"><?php echo get_the_date('d/m/Y'); ?> &nbsp; | &nbsp; 

		<?php 
		$tipoNombre = ''; 
		$cate = get_the_terms(get_the_ID(), 'tipos_actualidades');
		
		foreach ($cate as $ic => $tipoPost) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/src/img/actualidad/icon-<?php echo strtolower($tipoPost->name); ?>.svg"> <?php echo strtoupper($tipoPost->name); ?>

			<?php $tipoNombre = $tipoPost->name; ?>
		<?
		endforeach;
		?>
		
		

	</p>
	<p class="descripcion color-gris"><?php echo the_excerpt_max_charlength_custom(150, get_the_content()); ?></p>
	<p class="mas text-right">
		<a class="link animated color-naranja" href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo __('Ver ' . $tipoNombre); ?></a>
	</p>
</div>