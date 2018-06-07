<?php
/*
Template Name: Search
*/
?>

<?php get_header(); require_once('partials/header-publico.php'); ?>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->


<?php
$pagina = get_queried_object();
$postsType = get_field('buscar_en', $pagina->ID);
$posts_per_page = get_field('posts_por_pagina', $pagina->ID);

global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
$sitio_url = site_url();

$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$q = array(
	'post_type'      => $postsType,
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'paged'          => $paged,
	's'              => $_GET['k']
);

$resultados = new WP_Query( $q );

# Variable para paginación
$max_num_pages = 0;

?>
<section class="seccion-busqueda">

	<div class="container">

		<div class="row">
		<?php
		if ($resultados->have_posts()) :
			$i = 0;
			while ($resultados->have_posts()) : $resultados->the_post(); ?>
				<?php $max_num_pages = $resultados->max_num_pages; ?>
				<?php include('partials/busqueda/item.php'); ?>
			<?php
			$i++;
			endwhile;
			wp_reset_postdata();
		else : ?>
		<h3 class="h3"><?php _e('No se encontraron resultados para '. $_GET['k']); ?></h3>
		<?php
		endif;
		?>
		</div>
		
		<?php include('partials/paginate.php'); ?>	

	</div>
</section>


<?php get_footer(); ?>
