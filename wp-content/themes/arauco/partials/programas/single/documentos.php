<?php 

$documentos = get_field('documentos');

if (!empty($documentos)) :
?>

<section class="seccion-preview-documentos fondo-verde">

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h3 class="titulo-seccion color-blanco text-center wow fadeInUp"><?php echo __('Documentos'); ?></h3>
			</div>
		</div>

		<div class="row">
			<?php for ($i=0; $i < count($documentos); $i++) : ?>
				<div class="col-sm-4 wow fadeInUp documento">
					<a class="link animated boton-seccion fondo-blanco color-verde" href="<?php echo $documentos[$i]['documento']; ?>" target="_blank"><?php echo $documentos[$i]['nombre_del_documento']; ?><i class="fa fa-file-pdf-o"></i></a>
				</div>
			<?php endfor; ?>

		</div>

	</div>

</section>
<?php 
endif;
?>