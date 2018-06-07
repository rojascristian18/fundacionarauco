<?php 

get_header();
require_once('partials/header-publico.php');
?>

<?php 

$cabecera = get_field('imagen_cabecera', 117);

if (!empty($cabecera)) : ?>

<div id="bootstrap-touch-slider" class="carousel bs-slider slide control-round indicators-line actualidad-banner-carrusel" data-ride="carousel" data-pause="hover" data-interval="8000">
	<div class="carousel-inner" role="listbox">
		<div class="item active" style="background: url(<?php echo $cabecera['sizes']['cabecera_interna']; ?>);"></div>
	</div>
</div>
	
<?php
endif;
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php

	$tipoNombre = ''; 
	$cate = get_the_terms(get_the_ID(), 'tipos_actualidades');
	
	foreach ($cate as $ic => $tipoPost) : $tipoNombre = $tipoPost->name; endforeach; ?>
	
	<?php 

	if (!empty($tipoNombre)) :

		include( sprintf('partials/actualidad/content-%s.php', strtolower($tipoNombre)) );
		include( sprintf('partials/actualidad/noticia-relacionadas.php') );

	endif;
	?>


<?php endwhile; endif; ?>
<?php 

get_footer();

?>