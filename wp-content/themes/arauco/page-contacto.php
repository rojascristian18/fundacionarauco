<?php 

get_header();
require_once('partials/header-publico.php');
	
	$regiones = get_terms( array( 'taxonomy' => 'regiones_locales', 'hide_empty' => true) );

	$regionSelect   = '';
	if (isset($_POST['region']) && !empty($_POST['region'])) {
		$regionSelect   = $_POST['region'];
	}

	$regionDefault = get_field('region_default', get_the_ID());

	if (empty($regionSelect)) {
		$locales = obtener_local_por_region($regionDefault->slug);
	}else{
		$locales = obtener_local_por_region($regionSelect);
	}
	

	$ArrayMarkers = array();

	if (!empty($locales)) {
		for ($i=0; $i < count($locales); $i++) { 
			$ArrayMarkers[$i]['latitud'] = get_field('latitud', $locales[$i]->ID);
			$ArrayMarkers[$i]['longitud'] = get_field('longitud', $locales[$i]->ID); 
			$ArrayMarkers[$i]['direccion'] = get_field('direccion', $locales[$i]->ID); 
			$ArrayMarkers[$i]['email'] = get_field('email', $locales[$i]->ID); 
			$ArrayMarkers[$i]['telefono'] = get_field('telefono', $locales[$i]->ID); 
		}
	}

?>


<!-- Cabecera -->
<?php include('partials/cabecera.php'); ?>
<!-- Fin Cabecera -->

<section class="seccion-mapa-sucursales">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<h3 class="titulo-seccion color-gris text-center wow fadeInUp">Selecciona tu Región</h3>

				<form method="POST" onchange="this.submit()" action="<?php echo get_permalink(get_the_ID()); ?>" class="wow fadeInUp">
					<div class="form-group">
						<select class="form-control" name="region">
							<option value="">Región</option>
							<?php 
							foreach ($regiones as $ir => $region) : ?>
								<option value="<?php echo $region->slug; ?>" <?php echo $select = ($region->slug == $regionSelect) ? 'selected' : '' ; ?>><?php echo $region->name; ?></option>
							<?php 
							endforeach;
							?>
						</select>
					</div>
				</form>

				<div class="contenedor-mapa wow fadeInUp" id="contenedormapa"></div>

			</div>

		</div>

	</div>

</section>

<section class="formulario-contacto fondo-gris">

	<div class="container">

		<div class="row">
			<div class="col-sm-12 text-center wow fadeInUp">
				<h3 class="titulo-seccion color-blanco">Formulario de Contacto</h3>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 wow fadeInUp contenedor">

				<div role="form" class="wpcf7" id="wpcf7-f305-o1" lang="es-CL" dir="ltr">
					<div class="screen-reader-response"></div>
					<form action="<?php echo get_permalink(get_the_ID()); ?>#wpcf7-f305-o1" method="post" class="wpcf7-form" novalidate="novalidate">
						<div style="display: none;">
						<input type="hidden" name="_wpcf7" value="305">
						<input type="hidden" name="_wpcf7_version" value="4.9.2">
						<input type="hidden" name="_wpcf7_locale" value="es_CL">
						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f305-o1">
						<input type="hidden" name="_wpcf7_container_post" value="0">
						</div>
						<div class="form-group">
						<div class="col-sm-12">
								<span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nombre completo*"></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="form-group">
						<div class="col-sm-12">
								<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email*"></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="form-group">
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap telfijo"><input type="tel" name="telfijo" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" aria-invalid="false" placeholder="Teléfono fijo"></span>
							</div>
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap telmovil"><input type="tel" name="telmovil" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" aria-invalid="false" placeholder="Teléfono móvil"></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="form-group">
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap region"><select name="region" class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false"><option value="">---</option><option value="Región">Región</option></select></span>
							</div>
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap comuna"><select name="comuna" class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false"><option value="">---</option><option value="Comuna">Comuna</option></select></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="form-group">
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap institucion"><input type="text" name="institucion" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Institución"></span>
							</div>
						<div class="col-xs-6 col-sm-6">
								<span class="wpcf7-form-control-wrap cargo"><input type="text" name="cargo" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Cargo"></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="form-group">
						<div class="col-sm-12">
								<span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Mensaje"></textarea></span>
							</div>
						<div class="break"></div>
						</div>
						<div class="col-sm-12 text-right">
							<input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit link animated boton color-blanco fondo-verde"><span class="ajax-loader"></span><p></p>
						<div class="break"></div>
						</div>
						<div class="wpcf7-response-output wpcf7-display-none"></div>
					</form>
				</div>

			</div>

		</div>

	</div>

</section>


<script type="text/javascript">

    function iniciarmapa () {

        var map;
        
        var map = new google.maps.Map(document.getElementById('contenedormapa'), {
            zoom: 16,
            disableDefaultUI: true,
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": 33
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f7f7f7"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#deecdb"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "saturation": "-90"
                        },
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#e0f1f9"
                        }
                    ]
                }
            ]
        });
        
        var bounds = new google.maps.LatLngBounds();
        
        <?php $i = 0; foreach ($ArrayMarkers as $marker) { $i++; ?>

            var ubicacion<?= $i; ?> = {lat: <?= $marker['latitud']; ?>, lng: <?= $marker['longitud']; ?>};

            var InfoVentana<?= $i; ?> = "";
            InfoVentana<?= $i; ?> += "<div class = 'mapa-ventana'>";
            InfoVentana<?= $i; ?> += "    <h4 class = 'mapa-direccion'><?= $marker['direccion']; ?></h4>";
            InfoVentana<?= $i; ?> += "    <p class = 'mapa-email'><?= $marker['email'] ;?></p>";
            InfoVentana<?= $i; ?> += "    <p class = 'mapa-telefono'><?= $marker['telefono'] ;?></p>";
            InfoVentana<?= $i; ?> += "</div>";
            
            var PinVentana<?= $i; ?> = new google.maps.InfoWindow({
                content: InfoVentana<?= $i; ?>,
                maxWidth: 300
            });

            var pin<?= $i; ?> = {
                url:  '<?php echo get_template_directory_uri(); ?>/src/img/varios/pin-map.png',
                size: new google.maps.Size(30, 40)
            }

            var marker<?= $i; ?> = new google.maps.Marker({
                position: ubicacion<?= $i; ?>,
                map: map,
                icon: pin<?= $i; ?>,
                animation:google.maps.Animation.BOUNCE
            });

            bounds.extend(marker<?= $i; ?>.position);

            marker<?= $i; ?>.addListener('click', function() {
                PinVentana<?= $i; ?>.open(map, marker<?= $i; ?>);
            });
            
        <?php } ?>

        map.fitBounds(bounds);

    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jI7XGBlFsdo2ArRySD_daVJZ2fIPzUo&callback=iniciarmapa"async defer></script>

<?php 

get_footer();

?>