<?php 

if (!esProfesor()) {
	wp_redirect(site_url());
	exit;
}

get_header();
require_once('partials/header-privado.php');
?>

<!-- Cabecera -->
<?php include('partials/privado/cabecera.php'); ?>
<!-- Fin Cabecera -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="seccion-home-privado">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<p class="wow fadeInUp color-gris texto-principal"><?php the_content(); ?></p>
			</div>
		</div>
		
		<div class="row">

			<div class="col-sm-12 col-md-4 caja wow fadeInUp">
				<div class="titulo fondo-gris">
					<div class="imagen">
						<img src="<?php echo get_template_directory_uri() ?>/src/img/home-privado/icon-recursos-blanco.svg" />
					</div>
					<h3 class="color-blanco"><?php echo __('Recursos'); ?></h3>
				</div>
				<div class="contenido fondo-gris-medium recursos">
					
					<?php 
					
					$misRecursos = obtener_mis_recursos(); 

					if (!empty($misRecursos)) : ?>
					
					<ul>
					<?php
					foreach ($misRecursos as $ir => $recurso) : ?>
						<li><a class="link animated color-verde" href="<?php echo get_permalink($recurso->ID); ?>"><?php echo $recurso->post_title; ?></a></li>
					<?php 
					endforeach;
					?>
					</ul>

					<?php 
					else :
						echo __('No tiene recursos disponibles'); 
					endif;
					?>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 caja wow fadeInUp">
				<div class="titulo fondo-gris">
					<div class="imagen">
						<img src="<?php echo get_template_directory_uri() ?>/src/img/home-privado/icon-calendario-blanco.svg" />
					</div>
					<h3 class="color-blanco"><?php _e('Calendario'); ?></h3>
				</div>
				<div class="contenido fondo-gris-medium calendario">
					
					<?php 

					$proximosEventos = obtener_proximos_eventos();

					if (!empty($proximosEventos)) : ?>
						<ul>
						<?php foreach ($proximosEventos as $ipe => $evento) : ?>
							<li><a class="link animated color-verde" href="<?php echo get_permalink($evento->ID); ?>"><strong><?php echo get_field('fecha_del_evento', $evento->ID); ?></strong> <?php echo $evento->post_title; ?></a></li>
						<?php endforeach; ?>
						</ul>
					<?php
					else : 
						echo __('No hay eventos próximos');
					endif; ?>

				</div>
			</div>
			
			<div class="col-sm-12 col-md-4 caja wow fadeInUp">
				<div class="titulo fondo-gris">
					<div class="imagen">
						<img src="<?php echo get_template_directory_uri() ?>/src/img/home-privado/icon-foro-blanco.svg" />
					</div>
					<h3 class="color-blanco"><?php _e('Foro'); ?></h3>
				</div>
				<div class="contenido fondo-gris-medium foro">
					
					<?php 

					$foros = obtener_foros();

					if (!empty($foros)) : ?>
						<ul>
						<?php foreach ($foros as $if => $foro) : ?>
							<li><a class="link animated color-verde" href="<?php echo get_permalink($foro->ID); ?>"><?php echo $foro->post_title; ?></a></li>
						<?php endforeach; ?>
						</ul>
					<?php
					else : 
						echo __('No hay eventos próximos');
					endif; ?>

					<div class="text-right">
						<a class="link animated boton-seccion fondo-verde color-blanco" href="<?php echo get_permalink(341); ?>"><?php _e('Entrar al foro<i class="fa fa-angle-right"></i>'); ?></a>
					</div>

				</div>
			</div>

		</div>

	</div>

</section>
<?php endwhile; endif; ?>
<?php 

get_footer();

?>