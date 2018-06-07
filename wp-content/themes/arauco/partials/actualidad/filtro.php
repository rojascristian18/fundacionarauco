<section class="seccion-filtros fondo-gris">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h5 class="color-blanco text-center wow fadeInUp"><?php echo __('Puedes <span>filtrar</span> aquí el contenido de actualidad'); ?></h5>
			</div>
		</div>

		<?php

		$tipos   = get_terms( array( 'taxonomy' => 'tipos_actualidades', 'hide_empty' => false) );
		
		$tipoSelect   = '';
		if (isset($_GET['tipo'])) {
			$tipoSelect   = $_GET['tipo'];
		}

		?>

		<form method="GET" action="<?php the_permalink();?>">

			<div class="row">

				<div class="col-sm-6 col-md-3 wow fadeInUp col">
					<input type="text" name="clave" placeholder="Palabra clave" value="<?php echo $val = (isset($_GET['clave'])) ? $_GET['clave'] : '' ; ?>" />
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

				<div class="col-sm-6 col-md-2 wow fadeInUp col">
					<input type="text" name="desde" placeholder="Desde" class="fecha fecha-desde" value="<?php echo $val = (isset($_GET['desde'])) ? $_GET['desde'] : '' ; ?>" />
				</div>

				<div class="col-sm-6 col-md-2 wow fadeInUp col">
					<input type="text" name="hasta" placeholder="Hasta" class="fecha fecha-hasta" value="<?php echo $val = (isset($_GET['hasta'])) ? $_GET['hasta'] : '' ; ?>" />
				</div>

				<div class="col-sm-3 col-sm-offset-9 col-md-2 col-md-offset-0 wow fadeInUp col">
					<input type="submit" class="link animated boton color-blanco fondo-verde" value="Filtrar">
				</div>

			</div>

		</form>

	</div>

</section>