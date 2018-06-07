<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div class="lista-respuestas-tema">

    <h3 class="titulo-seccion color-gris wow fadeInUp">Respuestas</h3>
 
    <?php if ( have_comments() ) : ?>
        
        <?php 

        $comentarios = get_comments(get_the_ID());
        echo "<pre>";
        print_r($comentarios);
        echo "</pre>";
        foreach ($comentarios as $ic => $comentario) : ?>
            <li class="wow fadeInUp">
                <p class="usuario color-gris"><strong>Iniciado por:</strong> <?php echo $comentario->comment_author; ?></p>
                <p class="comentario color-gris"><?php echo $comentario->comment_content; ?></p>
                <div class="text-right">
                    <a class="link animated boton-seccion fondo-verde color-blanco" onclick="IrAFormularioResponder();">Responder<i class="fa fa-comment-o"></i></a>
                </div>

                <ul>

                    <li class="wow fadeInUp">
                        <h4 class="color-verde">Felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</h4>
                        <p class="usuario color-gris"><strong>Iniciado por:</strong> Alberto Lopez</p>
                        <p class="comentario color-gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                        <div class="text-right">
                            <a class="link animated boton-seccion fondo-verde color-blanco" onclick="IrAFormularioResponder();">Responder<i class="fa fa-comment-o"></i></a>
                        </div>
                    </li>

                </ul>
                
            </li>
        <?
        endforeach;
        ?>
       
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php comment_form(); ?>
 
</div><!-- #comments -->