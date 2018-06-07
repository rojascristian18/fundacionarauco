<?php 
/*
Template Name: Archivos de foros
*/
get_header();
require_once('partials/header-privado.php');
?>


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
				<a class="link animated color-naranja" href="<?php echo get_permalink('316'); ?>"><?php _e('Bienvenida'); ?></a> - <?php _e('Foro'); ?>
			</div>
		</div>
	</div>
</section>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->

<section class="seccion-lista-temas">

	<div class="container">

		<div class="row">

			<?php 

			$foros = obtener_foros_page(1);

			# Variable para paginación
		    $max_num_pages = 0;

		    if ($foros->have_posts()) {

		      $max_num_pages = $foros->max_num_pages;
		      $i = 0;
		      while ($foros->have_posts()) {
		        $foros->the_post(); ?>
	        	<div class="col-sm-12 col-md-8 col-md-offset-2 wow fadeInUp">
					<div class="tema">
						<h3 class="color-verde"><?php the_title(); ?></h3>
						<p class="color-gris"><?php echo the_excerpt_max_charlength_custom(200, get_the_content(get_the_ID())); ?></p>
						<div class="usuario">
							<span class="color-gris"><strong><?php _e('Iniciado por:'); ?></strong> <?php the_author(); ?></span>
							<a class="link animated boton-seccion fondo-verde color-blanco" href="<?php the_permalink(); ?>"><?php _e('Participar'); ?><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
		      <?php
		      $i++;
		      }

		    }else{
		      echo '<div class="col-12"><h3 class="h3">No se encontraron resultados</h3><div>';
		    }

		    wp_reset_postdata();
		    ?>

			

		</div>

		<!-- Paginate -->
		<?php include('partials/paginate.php'); ?>
		<!-- Fin Paginate -->

	</div>

</section>



<?php 

get_footer();

?>