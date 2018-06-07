<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php if( is_front_page() ) { echo 'Fundción Arauco'; }else{ wp_title(''); } ?> | <?= bloginfo('site_title'); ?></title>
    
    <?php 
    $description = get_bloginfo('description');
    ?>
    <meta name="description" content="<?= (!empty($description) ? $description : "Fundación Arauco"); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $CFG_RootDirectory = get_template_directory_uri() . '/'; ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#00AFAA">
    <meta name="msapplication-navbutton-color" content="#00AFAA">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/src/img/template/favicon.png">

    <? if ( is_single() ) : ?>
    <meta property="og:url"                content="<?php echo get_the_permalink(get_the_ID()); ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?php echo get_the_title(get_the_ID()); ?>" />
    <meta property="og:description"        content="<?php echo get_the_excerpt(get_the_ID()); ?>" />
    <meta property="og:image"              content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" />
    <?php

    echo '<script type="text/javascript"> var current_url = "'.get_the_permalink(get_the_ID()).'"; </script>';

    ?>
    <? endif; ?>
    
    <?php wp_head(); ?>

  </head>

  <body>