<?php 
/*
Template Name: Template página premios
*/

get_header();
require_once('partials/header-publico.php');
?>

<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->


<!-- Premios -->
<?php include('partials/premios/premios.php'); ?>
<!-- Fin Premios -->


<!-- Testimonio noticias -->
<?php include("partials/home/seccion-testimonios-noticias.php"); ?>
<!-- Fin Testimonio noticias -->

<?php 

get_footer();

?>