<header>
      
  <div class="container">

    <div class="row">

      <div class="col-sm-12">

        <a class="link animated logo" href="<?= site_url(); ?>">
			<img src="<?= get_template_directory_uri(); ?>/src/img/header/logo-fundacion-arauco.svg" alt="Fundación Arauco" />
		</a>

        <div class="links-header">

		<?php if ( is_active_sidebar( 'widget-links-cabeceras' ) ) : ?>

			<?php dynamic_sidebar( 'widget-links-cabeceras' ); ?>

		<?php endif; ?>

        </div>

        <?php if ( is_active_sidebar( 'widget-links-cabeceras-mobile' ) ) : ?>

			<?php dynamic_sidebar( 'widget-links-cabeceras-mobile' ); ?>

		<?php endif; ?>

        <a class="link animated visible-xs boton-buscar" onclick="DesplegarCampoBuscar();"><i class="fa fa-search"></i></a>

        <button>
          <span></span>
          <span></span>
          <span></span>
        </button>
        
        <?php
        # Menú principal                       
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 0,
          'container'         => 'nav',
          'container_class'   => '',
          'container_id'      => 'primary-menu-header',
          'menu_class'        => '',
          'menu_id'           => 'primary-ul',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>

        <div class="buscador-header animated">
          <form method="get" action="<?php echo home_url( '/' ); ?>busqueda/">
            <input type="text" placeholder="Buscar" name="k" value="<?php echo get_search_query(); ?>" />
          </form>
        </div>

      </div>

    </div>

  </div>

</header>

<div class="contenedor-principal animated">