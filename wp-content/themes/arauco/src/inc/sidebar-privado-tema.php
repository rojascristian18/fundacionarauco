<div class="col-sm-4 col-md-3 sidebar-noticias sidebar-privado-tema">

	<h3 class="color-gris wow fadeInUp">Lo último en foro</h3>

	<?php for ($i = 0; $i < 4; $i++) { ?>

		<div class="noticia wow fadeInUp">
			<a class="link animated titulo" href="<?= $CFG_RootDirectory; ?>privado/foro/detalle-tema/">
				<h4 class="color-verde">Consectetur vel diam sit amet, suscipit suscipit diam</h4>
			</a>
			<p class="usuario color-gris"><strong>Iniciado por:</strong> Alberto Lopez</p>
		</div>
		
	<?php } ?>

</div>