<?php 

//remove_role( 'profesor' );
add_role( 'profesor', 'Profesor', array( 
	'edit_posts'             => true, 
	'delete_posts'           => true, 
	'publish_posts'          => true, 
	'edit_published_posts'   => true,
	'delete_posts'           => true,
	'delete_published_posts' => true
) );
