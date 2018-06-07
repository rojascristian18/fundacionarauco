<?php 

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Custom post type
 */
require_once(get_template_directory() . '/inc/cpt-programas.php');
require_once(get_template_directory() . '/inc/cpt-seminarios.php');
require_once(get_template_directory() . '/inc/cpt-recursos.php');
require_once(get_template_directory() . '/inc/cpt-premios.php');
require_once(get_template_directory() . '/inc/cpt-actualidades.php');
require_once(get_template_directory() . '/inc/cpt-eventos.php');
require_once(get_template_directory() . '/inc/cpt-foros.php');
require_once(get_template_directory() . '/inc/cpt-locales.php');
require_once(get_template_directory() . '/inc/cpt-recursos-privados.php');


/**
 * Cortes de imagenes
 */
if (function_exists('add_theme_support')) {

	add_theme_support( 'post-thumbnails' );
	add_image_size('slider', 1920, 1080, true);
	add_image_size('cabecera_privada', 1440, 400, true);
	add_image_size('thumb_programa', 360, 359, true);
	add_image_size('lista_programa', 264, 175, true);
	add_image_size('thumb_testimonio', 164, 164, true);
	add_image_size('thumb_noticia', 166, 166, true);
	add_image_size('thumb_galeria', 195, 136, true);
	add_image_size('galeria_full', 1000, 700, true);
	add_image_size('thumb_directivos', 100, 100, true);
	add_image_size('cabecera_interna', 1440, 200, true);
	add_image_size('detalle_programa', 1140, 400, true);
	add_image_size('background', 1920, 1080, true);
}


/**
 * Registrar archivos CSS y JS
 *
 */
function add_theme_scripts() {

	# CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/src/css/bootstrap.min.css', array(), 1.2);
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/src/css/font-awesome.min.css', array(), 1.2);
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/src/css/animate.css', array(), 1.2);
	wp_enqueue_style( 'bs-slider', get_template_directory_uri() . '/src/css/bs-slider.css', array(), 1.2);
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/src/css/owl.theme.default.min.css', array(), 1.2);
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/src/css/owl.carousel.min.css', array(), 1.2);
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/src/css/jquery-ui.css', array(), 1.2);
	wp_enqueue_style( 'blueimp-gallery', get_template_directory_uri() . '/src/css/blueimp-gallery.min.css', array(), 1.2);

	wp_enqueue_style( 'main', get_template_directory_uri() . '/src/css/main.css', array(), 1.2);
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	# JS
	# Quitamos jQuery de Wordpress para añadir el nuestro
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/src/js/jquery-3.1.1.min.js', array (), 1.2, true);
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/src/js/jquery-ui.min.js', array (), 1.2, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', array (), 1.2, true);
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/src/js/SmoothScroll.js', array (), 1.2, true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/src/js/owl.carousel.min.js', array (), 1.2, true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/src/js/wow.min.js', array (), 1.2, true);
	wp_enqueue_script( 'bs-slider', get_template_directory_uri() . '/src/js/bs-slider.js', array (), 1.2, true);
	wp_enqueue_script( 'blueimp-gallery', get_template_directory_uri() . '/src/js/jquery.blueimp-gallery.min.js', array (), 1.2, true);
	wp_enqueue_script( 'YTPlayer', get_template_directory_uri() . '/src/js/jquery.mb.YTPlayer.js', array (), 1.2, true);
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/main.js', array (), 1.2, true);

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/**
 * Soporte para SVG
 * @param  array  	$existing_mimes 	extensiones permitidas
 * @return array                 		extensiones permitidas
 */
function svg_mime_type( $existing_mimes = array() ) {
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}

add_filter( 'upload_mimes', 'svg_mime_type' );


/**
 * Custom excerpt
 * @param  [type] $charlength [description]
 * @param  [type] $text       [description]
 * @return [type]             [description]
 */
function the_excerpt_max_charlength_custom($charlength, $text) {
	$excerpt = $text;
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			return mb_substr( $subex, 0, $excut );
		} else {
			return $subex;
		}
		return '...';
	} else {
		return $excerpt;
	}
}


/**
 * Obtiene un CTP segun su post_type
 * @param  string $name [description]
 * @return [type]       [description]
 */
function get_custom_post_type($name = '')
{
	$arg = array(
		'post_type'      => $name,
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => array('menu_order' => 'ASC')
	);

	$cpt = new WP_Query( $arg );
	
	if ($cpt->posts) {
		return $cpt->posts;
	}else{
		return array();
	}
}


/**
 * Registramos el área del widget para el login
 *
 */
function login_widgets_init() {

	register_sidebar( array(
		'name'          => 'Login',
		'id'            => 'login',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'login_widgets_init' );


/**
 * Elimina menues del admin
 */
function remove_menus(){
    //remove_menu_page('index.php');					//Dashboard
    remove_menu_page('edit.php');						//Posts
    remove_menu_page('post-new.php');						//Posts
    //remove_menu_page('upload.php');
    remove_submenu_page('index', 'update-core');
    //remove_submenu_page( 'themes.php', 'theme-editor.php' ); //editor
    //remove_submenu_page('themes', 'edit');
    //remove_submenu_page('CF7DBPluginSubmissions', 'CF7DBPluginSettings');
    //remove_submenu_page('CF7DBPluginSubmissions', 'CF7DBPluginShortCodeBuilder');
    //remove_menu_page('wpcf7', 'wpcf7-integration');
    //remove_menu_page('edit-comments.php');			//Comments
	//remove_menu_page('themes.php');					//Appearance
	//remove_menu_page('plugins.php');					//Plugins
	//remove_menu_page('users.php');					//Users
	//remove_menu_page('tools.php');					//Tools
	//remove_menu_page('options-general.php');			//Settings
	//remove_menu_page('edit.php?post_type=acf-field-group');		//Custom Fields
}

add_action('admin_menu', 'remove_menus', 999);


/**
 * Quitar noticias de actualización del dashboard
 */
function remove_update_nag() {
    if ( ! current_user_can( 'update_core' ) ) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}

add_action( 'admin_head', 'remove_update_nag' );

/**
 * Determina si es un profesor quine está logeado
 * @return bool
 */
function esProfesor(){

	$user = wp_get_current_user();
	if ( in_array( 'profesor', (array) $user->roles ) ) {
		return true;
	}

	return false;
}


/**
 * Quitar widgets del dashboard para el profesor
 */
function quitar_widget_dashboard() {

	$user = wp_get_current_user();

	if ( in_array( 'profesor', (array) $user->roles ) ) {

	 	global $wp_meta_boxes;

		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);	
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);	
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	}

}


/**
 * Hacemos un "Hook" o gancho a la acción 'wp_dashboard_setup' para registrar nuestra propia función
 */
add_action('wp_dashboard_setup', 'quitar_widget_dashboard' );


/**
 * Información para el widget
 */
function dashboard_widget_function() {
	echo "Bienvenido Fundación Arauco.";
}


/**
 * Crea la función usando la accion de un "hook" o gancho
 */
function agregar_widget_dashboard() {
	wp_add_dashboard_widget('agregar_widget_dashboard', 'Bienvenido a Fundación Arauco', 'dashboard_widget_function');
}

add_action('wp_dashboard_setup', 'agregar_widget_dashboard' );


/**
 * Registar menus
 *
 */
register_nav_menus( array(
	'primary'         => 'Menú cabecera',
	'footer'      => 'Menú pie de página',
));


/**
 * Obtiene el valor de un campo agregado con ACF
 * @param 	$id 	int 		Identificador de la pagina
 * @param 	$field 	string 		Nombre del campo que queremos obtener desde ACF
 * @return 	array
 */
function get_post_acf($id = null, $field = '') {
	$field = get_field($field, $id);
	return $field;
}


/**
 * Implementar custom roles
 */
require get_parent_theme_file_path( '/custom/custom-roles.php' );


/**
 * Implementar custom logo header
 */
require get_parent_theme_file_path( '/custom/custom-header.php' );


/**
 * Implementar custom menu para profesor
 */
require get_parent_theme_file_path( '/custom/custom-menu-profesor.php' );


/**
 * Bootstrap menu walker
 */
require_once get_template_directory() . '/walker/wp-bootstrap-navwalker.php';


/**
 * Request programas
 */
require_once get_template_directory() . '/request/programas.php';


/**
 * Request actualidad
 */
require_once get_template_directory() . '/request/actualidades.php';


/**
 * Request seminario
 */
require_once get_template_directory() . '/request/seminarios.php';


/**
 * Request recursos
 */
require_once get_template_directory() . '/request/recursos.php';


/**
 * Request eventos
 */
require_once get_template_directory() . '/request/eventos.php';


/**
 * Request premios
 */
require_once get_template_directory() . '/request/premios.php';


/**
 * Request locales
 */
require_once get_template_directory() . '/request/locales.php';


/**
 * Request foros
 */
require_once get_template_directory() . '/request/foros.php';


/**
 * Sidebar 
 */
require get_parent_theme_file_path( '/custom/custom-widgets-area.php' );


/**
 * Widgets 
 */
require get_parent_theme_file_path( '/custom/custom-ultimas.php' );