<?php 
/*
Plugin Name: Link con Imagen
Version: 1.0
Description: Permite agregar una imagen con link
Author: Cristian Rojas <cristian@mediawolves.cl>
Author URI: http://mediawolves.cl
Text Domain: link-imagen
*/

add_action( 'widgets_init', 'mfc_init' );

function mfc_init() {
	register_widget( 'link_imagen' );
}

class link_imagen extends WP_Widget
{

    public function __construct()
    {
        $widget_details = array(
            'classname' => 'link_imagen',
            'description' => 'Permite crear una imagen con texto y un link'
        );

        parent::__construct( 'link_imagen', 'Imagen con link', $widget_details );

        add_action('admin_enqueue_scripts', array($this, 'mfc_assets'));
    }


public function mfc_assets()
{
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('mfc-media-upload', plugin_dir_url(__FILE__) . 'mfc-media-upload.js', array('jquery'));
    wp_enqueue_style('thickbox');
}


    public function widget( $args, $instance )
    {
		echo $args['before_widget']; ?>
		
		<a class="<?php echo $css = (!empty($instance['css_class'])) ? $instance['css_class'] : 'link'; ?>" href="<?php echo $url = (!empty($instance['link_url'])) ? $instance['link_url'] : '#' ; ?>" <?php echo $nw = ($instance['new_window']) ? 'target="_blank"' : ''; ?> >
			<?php 
			if (!empty($instance['image'])) : ?>
				<img src="<?php echo $instance['image']; ?>" alt="<?php echo $txt = (!empty($instance['title'])) ? $instance['title'] : '' ;?>" /> <?php echo $txt = (!empty($instance['title'])) ? $instance['title'] : '' ;?>
			<?php
			else : ?>
				<?php echo $txt = (!empty($instance['title'])) ? $instance['title'] : '' ;?>
			<?php
			endif;
			?>
		</a>
		
		<?php
		echo $args['after_widget'];
    }

	public function update( $new_instance, $old_instance ) {  
	    return $new_instance;
	}

    public function form( $instance )
    {	
    	$css_class = '';
	    if( !empty( $instance['css_class'] ) ) {
	        $css_class = $instance['css_class'];
	    }

	    $title = '';
	    if( !empty( $instance['title'] ) ) {
	        $title = $instance['title'];
	    }

	    $link_url = '';
	    if( !empty( $instance['link_url'] ) ) {
	        $link_url = $instance['link_url'];
	    }

	    $new_window = '';
	    if( !empty( $instance['new_window'] ) ) {
	        $new_window = $instance['new_window'];
	    }

		$image = '';
		if(isset($instance['image']))
		{
		    $image = $instance['image'];
		}
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Texto:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'css_class' ); ?>"><?php _e( 'CSS etiqueta A:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'css_class' ); ?>" name="<?php echo $this->get_field_name( 'css_class' ); ?>" type="text" value="<?php echo esc_attr( $css_class ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'link_url' ); ?>"><?php _e( 'Link URL:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" type="text" value="<?php echo esc_attr( $link_url ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'new_window' ); ?>"><?php _e( 'Nueva ventana:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'new_window' ); ?>" name="<?php echo $this->get_field_name( 'new_window' ); ?>" type="checkbox" value="<?php echo esc_attr( $new_window ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Imagen:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button" type="button" value="Cargar imagen" />
        </p>
    <?php
    }
}