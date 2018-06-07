<?php 

$cantidad = $instance['cantidad'];
$titulo   = $instance['titulo'];
$tipos    = $instance['tipos_de_entradas'];

if (!empty($cantidad)) :

  $ultimas = obtener_ultimas_actualidad($cantidad, $tipos); 

  if (!empty($ultimas)) : ?>

  <div class="col-sm-4 col-md-3 sidebar-noticias">
    <?php if (!empty($titulo)) : ?>
    <h3 class="color-gris wow fadeInUp"><?php echo $titulo; ?></h3>
    <?php endif; ?>

    <?php foreach($ultimas as $iu => $ultima) : 
      $imagen = get_the_post_thumbnail_url($ultima->ID, 'sidebar');
    ?>
    <div class="noticia wow fadeInUp">
        <a class="link animated imagen" href="<?php echo get_the_permalink($ultima->ID); ?>">
          <img src="<?php echo $imagen; ?>" alt="<?php get_the_title($ultima->ID); ?>">
        </a>
        <a class="link animated titulo" href="<?php echo get_the_permalink($ultima->ID); ?>">
          <h4 class="color-verde"><?php get_the_title($ultima->ID); ?></h4>
        </a>
        <p class="fecha color-gris"><?php echo get_the_date('d/m/Y', $ultima->ID); ?> &nbsp; | &nbsp; 
        <?php 
        $tipo = '';
        $cate = get_the_terms($ultima->ID, 'tipos_actualidades');
        
        foreach ($cate as $ic => $tipoPost) : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/actualidad/icon-<?php echo strtolower($tipoPost->name); ?>.svg"> <?php echo strtoupper($tipoPost->name); ?>
        <?
          $tipo = strtolower($tipoPost->name);
        endforeach;
        ?>
        </p>
        <p class="descripcion color-gris"><?php echo the_excerpt_max_charlength_custom(50, get_the_content($ultima->ID)); ?></p>
        <p class="mas text-right">
          <a class="link animated color-naranja" href="<?php echo get_the_permalink($ultima->ID); ?>"><?php echo __('Ver ' . $tipo); ?></a>
        </p>
    </div>
    <?php endforeach; ?>
  </div>
<?php
  endif;
endif; ?>