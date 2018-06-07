<?php 

get_header();
require_once('partials/header-publico.php');
?>

<!-- Sliders -->
	<? include('partials/somos/sliders.php'); ?>
<!-- End Sliders -->


<!-- Por que lo hacemos -->
	<? include('partials/somos/seccion-hacemos.php'); ?>
<!-- End Por que lo hacemos -->


<!-- Lo que nos mueve -->
	<? include('partials/home/seccion-lo-que-nos-mueve.php'); ?>
<!-- End Lo que nos mueve -->


<!-- Donde estamos y logros -->
	<? include('partials/somos/seccion-donde-estamos-logros.php'); ?>
<!-- End Donde estamos y logros -->


<!-- Premios -->
	<? include('partials/somos/seccion-premios.php'); ?>
<!-- End Premios -->

<!-- Nuestra gente -->
	<? include('partials/somos/seccion-equipos.php'); ?>
<!-- End Nuestra gente -->

<?php 

get_footer();

?>