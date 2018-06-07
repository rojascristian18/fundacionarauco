<?php 

get_header();
require_once('partials/header-publico.php');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<?php include('partials/programas/single/breadcrumb.php'); ?>


<?php include('partials/programas/single/detalle.php'); ?>


<?php include('partials/programas/single/caracteristicas.php'); ?>


<?php include('partials/programas/single/documentos.php'); ?>


<?php include('partials/programas/single/acceso-privado.php'); ?>


<?php include('partials/home/seccion-testimonios-noticias.php'); ?>

<?php endwhile; endif; ?>

<?php 

get_footer();

?>