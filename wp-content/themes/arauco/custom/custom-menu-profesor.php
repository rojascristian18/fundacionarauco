<?php 

/**
 * Filtrar por autor
 */
function rudr_filter_by_the_author() {
    $user = wp_get_current_user();
    if ( in_array( 'profesor', (array) $user->roles ) ) {
        echo '<select name="author" id="author" class="">
                <option value="' . $user->ID . '" selected>' . $user->display_name .'</option>
            </select>';
    }
 
    
}
 
add_action('restrict_manage_posts', 'rudr_filter_by_the_author');


function remove_menues()
{   

  $user = wp_get_current_user();
    if ( in_array( 'profesor', (array) $user->roles ) ) {
        //remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                       //Posts
        remove_menu_page('post-new.php');                       //Posts
        remove_menu_page('upload.php');
        remove_submenu_page('index', 'update-core');
        remove_submenu_page( 'themes.php', 'theme-editor.php' ); //editor
        remove_submenu_page('themes', 'edit');
        remove_submenu_page('CF7DBPluginSubmissions', 'CF7DBPluginSettings');
        remove_submenu_page('CF7DBPluginSubmissions', 'CF7DBPluginShortCodeBuilder');
        remove_menu_page('wpcf7', 'wpcf7-integration');
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('themes.php');                 //Appearance
        remove_menu_page('plugins.php');                    //Plugins
        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
        remove_menu_page('options-general.php');            //Settings
        remove_menu_page('edit.php?post_type=programa');     //Custom Fields
        remove_menu_page('edit.php?post_type=seminario');        //Servicios
        remove_menu_page('edit.php?post_type=recurso');      //Paises
        remove_menu_page('edit.php?post_type=actualidad');       //Empleados
        remove_menu_page('edit.php?post_type=evento');       //Empleados
        remove_menu_page('edit.php?post_type=actualidad');       //Empleados
        remove_menu_page('edit.php?post_type=premio');       //Empleados
        remove_menu_page('edit.php?post_type=local');       //Empleados
        remove_menu_page('edit.php?post_type=recurso_privado');       //Empleados
    }
}

add_action( 'admin_menu', 'remove_menues' , 999);


add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
    
    $user = wp_get_current_user();
    if ( in_array( 'profesor', (array) $user->roles ) ) {

        $wp_admin_bar->remove_node( 'wp-logo' );
        $wp_admin_bar->remove_node( 'comments' );
        $wp_admin_bar->remove_node( 'new-content' );
        $wp_admin_bar->remove_node( 'archive' );
    }

}