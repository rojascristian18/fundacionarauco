<?php 

get_header(); 
require_once('partials/header-privado.php'); 
?>
<?php if ( is_active_sidebar( 'login' ) ) : ?>

<?php dynamic_sidebar( 'login' ); ?>

<?php endif; ?>
<?php get_footer(); ?>