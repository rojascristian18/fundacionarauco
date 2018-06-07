<?php 

$sliders = get_field('sliders_imagen', get_the_ID());


if (!empty($sliders)) : ?>

<div id="bootstrap-touch-slider" class="carousel bs-slider slide control-round indicators-line home-banner-carrusel" data-ride="carousel" data-pause="hover" data-interval="8000">

	<div class="carousel-inner" role="listbox">
		<?php for ($i=0; $i < count($sliders); $i++) : ?>
			<div class="item <?php echo $active = ($i == 0) ? 'active' : '' ; ?>" style="background: url(<?php echo $sliders[$i]['imagen_grande']['sizes']['slider']; ?>);"></div>
		<?php endfor; ?>
	</div>

	<div class="controles">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<a class="left carousel-control animated" href="#bootstrap-touch-slider" role="button" data-slide="prev">
						<span class="fa fa-angle-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="right carousel-control animated" href="#bootstrap-touch-slider" role="button" data-slide="next">
						<span class="fa fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					
				</div>
			</div>
		</div>
	</div>

</div>
<?php 
endif;
?>