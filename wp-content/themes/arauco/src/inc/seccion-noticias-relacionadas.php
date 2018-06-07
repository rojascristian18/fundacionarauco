<section class="seccion-noticias-relacionadas">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="titulo-seccion color-gris wow fadeInUp">Noticias relacionadas</h3>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<?php for ($i = 0; $i < 2; $i++) { ?>

				<div class="col-sm-6 noticia wow fadeInUp">
					<div class="contenedor-imagen">
						<a class="link animated imagen" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">
							<img src="<?= $CFG_RootDirectory; ?>img/actualidad/noticia.jpg" alt="El liderazgo educativo, clave en la transformación escolar">
						</a>
					</div>
					<div class="contenedor-descripcion">
						<a class="link animated titulo" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">
							<h4 class="color-verde">El liderazgo educativo, clave en la transformación escolar</h4>
						</a>
						<p class="fecha color-gris">14/01/2018 &nbsp; | &nbsp; <img src="<?= $CFG_RootDirectory; ?>img/actualidad/icon-noticia.svg"> Noticia</p>
						<p class="descripcion color-gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan</p>
						<p class="mas text-right">
							<a class="link animated color-naranja" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">Leer noticia</a>
						</p>
					</div>
					<div class="break"></div>
				</div>
				
			<?php } ?>

		</div>

	</div>

</section>