<?php
/**
 * Set up the WordPress core custom header feature.
 */
function cm_wptheme_custom_header_setup() {

	/**
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-image     		Default image of the header.
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 *     @type string $flex-height     		Flex support for height of header.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'cm_wptheme_custom_header_args', array(
		'default-image' => 'https://dummyimage.com/300x100/000/fff',
		'width'         => 300,
		'height'        => 100,
		'flex-width'    => true,
		'flex-height'   => true
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => 'https://dummyimage.com/300x100/000/fff',
			'thumbnail_url' => 'https://dummyimage.com/300x100/000/fff',
			'description'   => __( 'Logo Fundación Arauco', 'fundacionarauco' ),
		),
	) );
}
add_action( 'after_setup_theme', 'cm_wptheme_custom_header_setup' );