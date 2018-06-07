<?php 
/*
Template Name: Archivos de actualidades
*/
get_header();
require_once('partials/header-publico.php');
?>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->


<!-- Filtro -->
<?php include('partials/actualidad/filtro.php'); ?>
<!-- Fin Filtro -->

<section class="lista-noticias">

	<div class="container">

		<div class="row">

			<?php 

			$actualidades = obtener_actualidades(1);

			# Variable para paginación
		    $max_num_pages = 0;

		    if ($actualidades->have_posts()) {

		      $max_num_pages = $actualidades->max_num_pages;
		      $i = 0;
		      while ($actualidades->have_posts()) {
		        $actualidades->the_post();
		        include('partials/actualidad/actualidad-item.php');
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