<div class="col-sm-4 col-md-3 sidebar-noticias">

	<h3 class="color-gris wow fadeInUp">Lo último de actualidad</h3>

	<?php for ($i = 0; $i < 3; $i++) { ?>

		<div class="noticia wow fadeInUp">
			<a class="link animated imagen" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">
				<img src="<?= $CFG_RootDirectory; ?>img/actualidad/noticia.jpg" alt="El liderazgo educativo, clave en la transformación escolar">
			</a>
			<a class="link animated titulo" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">
				<h4 class="color-verde">El liderazgo educativo, clave en la transformación escolar</h4>
			</a>
			<p class="fecha color-gris">14/01/2018 &nbsp; | &nbsp; <img src="<?= $CFG_RootDirectory; ?>img/actualidad/icon-noticia.svg"> Noticia</p>
			<p class="descripcion color-gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan</p>
			<p class="mas text-right">
				<a class="link animated color-naranja" href="<?= $CFG_RootDirectory; ?>actualidad/detalle-noticia/">Leer noticia</a>
			</p>
		</div>
		
	<?php } ?>

</div>