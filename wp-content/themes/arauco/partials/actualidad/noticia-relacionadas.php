<?php 

$relacionadas = get_field('noticias_relacionadas');

if (!empty($relacionadas)) : ?>

<section class="seccion-noticias-relacionadas">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="titulo-seccion color-gris wow fadeInUp"><?php echo __('Noticias relacionadas'); ?></h3>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<?php for ($i = 0; $i < count($relacionadas); $i++) { ?>

				<div class="col-sm-6 noticia wow fadeInUp">
					<div class="contenedor-imagen">
						<a class="link animated imagen" href="<?php echo get_the_permalink($relacionadas[$i]); ?>">
							<img src="<?php echo get_the_post_thumbnail_url($relacionadas[$i]); ?>" alt="<?php echo get_the_title($relacionadas[$i]); ?>">
						</a>
					</div>
					<div class="contenedor-descripcion">
						<a class="link animated titulo" href="<?php echo get_the_permalink($relacionadas[$i]); ?>">
							<h4 class="color-verde"><?php echo get_the_title($relacionadas[$i]); ?></h4>
						</a>
						<p class="fecha color-gris"><?php echo get_the_date('d/m/Y', $relacionadas[$i]); ?> &nbsp; | &nbsp; 
				        <?php 
				        $tipo = '';
				        $cate = get_the_terms($relacionadas[$i], 'tipos_actualidades');
				        
				        foreach ($cate as $ic => $tipoPost) : ?>
				          <img src="<?php echo get_template_directory_uri(); ?>/src/img/actualidad/icon-<?php echo strtolower($tipoPost->name); ?>.svg"> <?php echo strtoupper($tipoPost->name); ?>
				        <?
				          $tipo = strtolower($tipoPost->name);
				        endforeach;
				        ?></p>
						<p class="descripcion color-gris"><?php echo the_excerpt_max_charlength_custom(50, get_the_content($relacionadas[$i])); ?></p>
						<p class="mas text-right">
							<a class="link animated color-naranja" href="<?php echo get_the_permalink($relacionadas[$i]); ?>"><?php echo __('Ver ' . $tipo); ?></a>
						</p>
					</div>
					<div class="break"></div>
				</div>
				
			<?php } ?>

		</div>

	</div>

</section>

<?php 

endif;

?>