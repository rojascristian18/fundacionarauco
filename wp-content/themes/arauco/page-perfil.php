<?php get_header(); ?>
<?php if ( is_active_sidebar( 'login' ) ) : ?>

<?php dynamic_sidebar( 'login' ); ?>

<?php endif; ?>
<?php get_footer(); ?>