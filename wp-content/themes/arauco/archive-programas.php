<?php

/*
Template Name: Archivos de programas
*/

get_header(); 
require_once('partials/header-publico.php');
?>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->

<!-- Filtro -->
<?php include('partials/programas/filtro.php'); ?>
<!-- Fin Filtro -->

<section class="lista-noticias lista-programas">

  <div class="container">

    <div class="row">
    <?php
    $programas     = obtener_programas(); 

    # Variable para paginación
    $max_num_pages = 0;

    if ($programas->have_posts()) {

      $max_num_pages = $programas->max_num_pages;
      $i = 0;
      while ($programas->have_posts()) {
        $programas->the_post();
        include('partials/programas/programa-item.php');
      $i++;
      }

    }else{
      echo '<div class="col-12"><h3 class="h3">No se encontraron programas</h3><div>';
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