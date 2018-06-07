<?php

/*
Template Name: Archivos de seminarios
*/

get_header(); 
require_once('partials/header-publico.php');
?>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->

<!-- Filtro -->
<?php include('partials/seminarios/filtro.php'); ?>


<section class="lista-noticias lista-programas">

	<div class="container">
		
		<div class="row">
		<?php
	    $seminarios     = obtener_seminarios(); 

	    # Variable para paginación
	    $max_num_pages = 0;

	    if ($seminarios->have_posts()) {

	      $max_num_pages = $seminarios->max_num_pages;
	      $i = 0;
	      while ($seminarios->have_posts()) {
	        $seminarios->the_post();
	        include('partials/seminarios/seminario-item.php');
	      $i++;
	      }

	    }else{
	      echo '<div class="col-12"><h3 class="h3">No se encontraron seminarios</h3><div>';
	    }

	    wp_reset_postdata();
	    ?>
	    </div>

	    <?php

	    #Paginación
	    require_once('partials/paginate.php');

	    ?>
	
	</div>

</section>

<?php 
	get_footer();
?>