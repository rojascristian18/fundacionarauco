  </div>

    <footer>

      <div class="top fondo-verde">

        <div class="container">

          <div class="row">

            <div class="col-xs-6 col-sm-4 col-md-2 wow fadeInUp col">
              <img src="<?= get_template_directory_uri() ?>/src/img/footer/logo-fundacion-arauco-footer.svg" />
            </div>

            <?php
                # Menú principal                       
                wp_nav_menu( array(
                  'menu'              => 'footer',
                  'theme_location'    => 'footer',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'col-sm-12 col-md-10 wow fadeInUp col col-menu',
                  'container_id'      => 'footer-menu',
                  'menu_class'        => '',
                  'menu_id'           => 'footer-ul',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>

          </div>

          <div class="row">
            <div class="col-sm-12 wow fadeInUp">
              <p class="color-blanco">Avenida Santa María 2120, Providencia &nbsp;&nbsp;|&nbsp;&nbsp; Teléfono: <a class="link animated color-blanco" href="tel:+56224994800">(56-2) 2499 4800</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a class="link animated color-blanco" href="<?= $CFG_RootDirectory; ?>contacto/"><i class="fa fa-envelope-o"></i> Contáctanos</a></p>
            </div>
          </div>

        </div>

      </div>

      <div class="bottom fondo-gris">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 wow fadeInUp left color-blanco">© Todos los derechos reservados (2017) Fundación Arauco ltd.</div>
            <div class="col-sm-4 wow text-right right fadeInUp">
              <a class="link animated color-blanco" href="http://www.arauco.cl/" target="_blank">www.arauco.cl</a>
            </div>
          </div>
        </div>
      </div>

    </footer>

    <?php wp_footer(); ?>

  </body>
</html>