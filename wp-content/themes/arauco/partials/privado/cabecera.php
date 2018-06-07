<?php 

$cabecera = get_field('imagen_cabecera', get_the_ID());

if (!empty($cabecera)) : ?>

<div id="bootstrap-touch-slider" class="carousel bs-slider slide control-round indicators-line home-banner-carrusel" data-ride="carousel" data-pause="hover" data-interval="8000">
	<div class="carousel-inner" role="listbox">
		<div class="item active" style="background: url(<?php echo $cabecera['sizes']['cabecera_privada']; ?>);"></div>
	</div>
</div>
	
<?php
endif;
?>