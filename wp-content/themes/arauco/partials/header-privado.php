<header>
			
	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<a class="link animated logo" href="<?= site_url(); ?>/private">
					<img src="<?= get_template_directory_uri(); ?>/src/img/header/logo-fundacion-arauco.svg" alt="Fundación Arauco" />
				</a>
				
				<?php  ?>
				<?php if ( is_active_sidebar( 'widget-menu-privado' ) ) : ?>

					<?php dynamic_sidebar( 'widget-menu-privado' ); ?>

				<?php endif; ?>

			</div>

		</div>

	</div>

</header>

<div class="contenedor-principal animated">