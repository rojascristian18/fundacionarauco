<?php 

/**
 * Área sidebar noticias
 */
function sidebar_noticias_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right-sidebar noticias',
		'id'            => 'widget-aside-noticia',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'sidebar_noticias_widgets_init' );


/**
 * Área sidebar videos
 */
function sidebar_videos_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right-sidebar videos',
		'id'            => 'widget-aside-video',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'sidebar_videos_widgets_init' );


/**
 * Área sidebar galerias
 */
function sidebar_galerias_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right-sidebar galerias',
		'id'            => 'widget-aside-galeria',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'sidebar_galerias_widgets_init' );


/**
 * Área sidebar testimonios
 */
function sidebar_testimonios_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right-sidebar testimonios',
		'id'            => 'widget-aside-testimonio',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'sidebar_testimonios_widgets_init' );


/**
 * Área header privado
 */
function menu_privado_widgets_init() {

	register_sidebar( array(
		'name'          => 'Menú privado',
		'id'            => 'widget-menu-privado',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'menu_privado_widgets_init' );


/**
 * Área header publico
 */
function menu_publico_widgets_init() {

	register_sidebar( array(
		'name'          => 'Área de Links en cabecera',
		'id'            => 'widget-links-cabeceras',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'menu_publico_widgets_init' );


/**
 * Área header publico 2
 */
function menu_publico_dos_widgets_init() {

	register_sidebar( array(
		'name'          => 'Área de Links en cabecera mobile',
		'id'            => 'widget-links-cabeceras-mobile',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'menu_publico_dos_widgets_init' );