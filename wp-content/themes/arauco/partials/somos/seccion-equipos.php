<?php 

$directivos = get_field('directorios', get_the_ID());
$equipo = get_field('equipo', get_the_ID());

?>


<section class="seccion-nuestra-gente">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h3 class="titulo-seccion color-gris text-center wow fadeInUp"><?php echo __('Nuestra gente'); ?></h3>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-12 wow fadeInUp">

				<ul class="nav nav-tabs">
					<?php if (!empty($directivos)) : ?>
						<li class="active"><a data-toggle="tab" href="#tab-1"><?php echo __('Directorio'); ?></a></li>
					<?php endif ?>

					<?php if (!empty($equipo)) : ?>
						<li><a data-toggle="tab" href="#tab-2"><?php echo __('Equipo Fundación'); ?></a></li>
					<?php endif ?>
					
				</ul>

				<div class="tab-content">	
					<?php if (!empty($directivos)) : ?>
					<div id="tab-1" class="tab-pane fade in active">
						
						<ul>

							<?php for ($i = 0; $i < count($directivos); $i++) {  ?>
								<li class="wow fadeInUp color-gris">
									<div class="imagen">
										<img src="<?php echo $directivos[$i]['foto']['sizes']['thumb_directivos'] ?>" alt="<?php echo $directivos[$i]['nombre']; ?>">
									</div>
									<h4><?php echo $directivos[$i]['nombre']; ?></h4>
									<h5><?php echo $directivos[$i]['cargo']; ?></h5>
								</li>
								
							<?php } ?>

						</ul>

					</div>
					<?php endif; ?>

					<?php if (!empty($equipo)) : ?>
					<div id="tab-2" class="tab-pane fade">
						<img src="<?php echo $equipo['url']; ?>" alt="Equipo Fundación" class="img-equipo" />
					</div>
					<?php endif ?>

				</div>

			</div>

		</div>

	</div>

</section>