<section class="seccion-filtros fondo-gris">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h5 class="color-blanco text-center wow fadeInUp"><?php echo __('¿Buscas algún <span>programa</span> específico?'); ?></h5>
			</div>
		</div>

		<?php

		$tipos   = get_terms( array( 'taxonomy' => 'tipos_programas', 'hide_empty' => false) );
		$comunas = get_terms( array( 'taxonomy' => 'comunas_programas', 'hide_empty' => false) );
		
		$tipoSelect   = '';
		if (isset($_GET['tipo'])) {
			$tipoSelect   = $_GET['tipo'];
		}

		$comunaSelect   = '';
		if (isset($_GET['comuna'])) {
			$comunaSelect   = $_GET['comuna'];
		}

		?>
		
		<form method="GET" action="<?php the_permalink();?>">

			<div class="row">

				<div class="col-sm-6 col-md-4 wow fadeInUp col">
					<input type="text" name="clave" placeholder="Palabra clave" value="<?php echo $val = (isset($_GET['clave'])) ? $_GET['clave'] : '' ; ?>" />
				</div>

				<div class="col-sm-6 col-md-3 wow fadeInUp col">
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

				<div class="col-sm-6 col-md-3 wow fadeInUp col">
					<select type="text" name="tipo">
						<option value="">Tipo</option>
						<?php 
						foreach ($tipos as $it => $tipo) : ?>
							<option value="<?php echo $tipo->slug; ?>" <?php echo $select = ($tipo->slug == $tipoSelect) ? 'selected' : '' ; ?>><?php echo $tipo->name; ?></option>
						<?php 
						endforeach;
						?>
					</select>
				</div>

				<div class="col-sm-3 col-sm-offset-3 col-md-2 col-md-offset-0 wow fadeInUp col">
					<input type="submit" class="link animated boton color-blanco fondo-verde" value="Filtrar">
				</div>

			</div>

		</form>

	</div>

</section>