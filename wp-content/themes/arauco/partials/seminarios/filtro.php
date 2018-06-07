<section class="seccion-filtros fondo-gris">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h5 class="color-blanco text-center wow fadeInUp"><?php echo __('Puedes <span>filtrar</span> aquí el contenido de seminarios'); ?></h5>
			</div>
		</div>

		<?php

		$temas   = get_terms( array( 'taxonomy' => 'temas_seminario', 'hide_empty' => false) );
		$comunas = get_terms( array( 'taxonomy' => 'comunas_seminarios', 'hide_empty' => false) );
		
		$temaselect   = '';
		if (isset($_GET['tema'])) {
			$temaselect   = $_GET['tema'];
		}

		$comunaSelect   = '';
		if (isset($_GET['comuna'])) {
			$comunaSelect   = $_GET['comuna'];
		}

		?>
		
		<form method="GET" action="<?php the_permalink();?>">

			<div class="row">

				<div class="col-sm-6 col-md-2 col-lg-3 wow fadeInUp col">
					<input type="text" name="clave" placeholder="Palabra clave" value="<?php echo $val = (isset($_GET['clave'])) ? $_GET['clave'] : '' ; ?>" />
				</div>

				<div class="col-sm-6 col-md-2 col-lg-2 wow fadeInUp col">
					<select type="text" name="comuna">
						<option value="">Comuna</option>
						<?php 
						foreach ($comunas as $ic => $comuna) : ?>
							<option value="<?php echo $comuna->slug; ?>" <?php echo $comuna->slug; ?>" <?php echo $select = ($comuna->slug == $comunaSelect) ? 'selected' : '' ; ?>><?php echo $comuna->name; ?></option>
						<?php 
						endforeach;
						?>
					</select>
				</div>

				<div class="col-sm-6 col-md-2 col-lg-2 wow fadeInUp col">
					<select type="text" name="tema">
						<option value="">Tema</option>
						<?php 
						foreach ($temas as $it => $tema) : ?>
							<option value="<?php echo $tema->slug; ?>" <?php echo $select = ($tema->slug == $temaselect) ? 'selected' : '' ; ?>><?php echo $tema->name; ?></option>
						<?php 
						endforeach;
						?>
					</select>
				</div>

				<div class="col-sm-6 col-md-2 col-lg-2 wow fadeInUp col">
					<input type="text" name="desde" placeholder="Desde" class="fecha fecha-desde" value="<?php echo $val = (isset($_GET['desde'])) ? $_GET['desde'] : '' ; ?>" />
				</div>

				<div class="col-sm-6 col-md-2 col-lg-2 wow fadeInUp col">
					<input type="text" name="hasta" placeholder="Hasta" class="fecha fecha-hasta" value="<?php echo $val = (isset($_GET['hasta'])) ? $_GET['hasta'] : '' ; ?>" />
				</div>

				<div class="col-sm-3 col-sm-offset-3 col-md-2 col-md-offset-0 col-lg-1 col-lg-offset-0 wow fadeInUp col">
					<input type="submit" class="link animated boton color-blanco fondo-verde" value="Filtrar">
				</div>

			</div>

		</form>

	</div>

</section>