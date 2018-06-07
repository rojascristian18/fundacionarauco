function DesplegarMenu () {
	$("header button, header nav, .contenedor-principal").toggleClass("menu-desplegado");
	$(".buscador-header").removeClass("desplegado");
}

function DesplegarCampoBuscar () {
	$(".buscador-header").toggleClass("desplegado");
	$("header button, header nav, .contenedor-principal").removeClass("menu-desplegado");
}

function AlturaSeccionDondeEstamos () {

	if ($('.seccion-donde-estamos').length > 0) {

		var AnchoNavegador = $(window).width();

		if (AnchoNavegador > 768) {

			$('.seccion-donde-estamos .contenedor').css("height", "auto");

			var altura = 0, aux = 0, i = 0;

			for (i = 0; i < $('.seccion-donde-estamos .contenedor').length; i++) {

				aux = parseInt($('.seccion-donde-estamos .contenedor').eq(i).css("height"));

				if (aux > altura) {
					altura = aux;
				}

			}

			$('.seccion-donde-estamos .contenedor').css("height", altura + "px");
			
		}

		else {
			$('.seccion-donde-estamos .contenedor').css("height", "auto");
		}

	}

}

function AlturaListaNuestraGente () {

	if ($('.lista-nuestra-gente').length > 0) {

		var AnchoNavegador = $(window).width();

		if (AnchoNavegador > 480) {

			$('.lista-nuestra-gente li').css("height", "auto");

			var altura = 0, aux = 0, i = 0;

			for (i = 0; i < $('.lista-nuestra-gente li').length; i++) {

				aux = parseInt($('.lista-nuestra-gente li').eq(i).css("height"));

				if (aux > altura) {
					altura = aux;
				}

			}

			$('.lista-nuestra-gente li').css("height", altura + "px");
			
		}

		else {
			$('.lista-nuestra-gente li').css("height", "auto");
		}

	}

}

function AlturaListaNoticias () {

	if ($('.lista-noticias').length > 0) {

		var AnchoNavegador = $(window).width();

		if (AnchoNavegador > 768) {

			$('.lista-noticias .contenedor').css("height", "auto");

			var altura = 0, aux = 0, i = 0;

			for (i = 0; i < $('.lista-noticias .contenedor').length; i++) {

				aux = parseInt($('.lista-noticias .contenedor').eq(i).css("height"));

				if (aux > altura) {
					altura = aux;
				}

			}

			$('.lista-noticias .contenedor').css("height", altura + "px");
			
		}

		else {
			$('.lista-noticias .contenedor').css("height", "auto");
		}

	}

}

function AlturaCaracteristicasProgramas () {

	if ($('.seccion-caracteristicas-programa').length > 0) {

		var AnchoNavegador = $(window).width();

		if (AnchoNavegador > 768) {

			$('.seccion-caracteristicas-programa .caracteristica').css("height", "auto");

			var altura = 0, aux = 0, i = 0;

			for (i = 0; i < $('.seccion-caracteristicas-programa .caracteristica').length; i++) {

				aux = parseInt($('.seccion-caracteristicas-programa .caracteristica').eq(i).css("height"));

				if (aux > altura) {
					altura = aux;
				}

			}

			$('.seccion-caracteristicas-programa .caracteristica').css("height", altura + "px");
			
		}

		else {
			$('.seccion-caracteristicas-programa .caracteristica').css("height", "auto");
		}

	}

}

function AlturaCajasHomePrivado () {

	if ($('.seccion-home-privado').length > 0) {

		var AnchoNavegador = $(window).width();

		if (AnchoNavegador > 991) {

			$('.seccion-home-privado .caja .contenido').css("height", "auto");

			var altura = 0, aux = 0, i = 0;

			for (i = 0; i < $('.seccion-home-privado .caja .contenido').length; i++) {

				aux = parseInt($('.seccion-home-privado .caja .contenido').eq(i).css("height"));

				if (aux > altura) {
					altura = aux;
				}

			}

			$('.seccion-home-privado .caja .contenido').css("height", altura + "px");
			
		}

		else {
			$('.seccion-home-privado .caja .contenido').css("height", "auto");
		}

	}

}

function AlturaVideoHome () {

	if ($(".contenedor-video-home").length > 0) {
        var AltoNavegador = parseInt($(window).height());
        var AltoHeader = parseInt($("header").height());
        var AlturaCalculada = (AltoNavegador - AltoHeader) + "px";
        $(".contenedor-video-home, .playerBox").css("height", AlturaCalculada);
    }

}

$(document).ready(function() {

	new WOW().init();

	if ($('#bootstrap-touch-slider').length > 0) {
		$('#bootstrap-touch-slider').bsTouchSlider();
	}

	if ($('.carrusel-testimonios').length > 0) {

		$('.carrusel-testimonios').owlCarousel({
			center: true,
			loop: true,
			autoplay: true,
			nav: true,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsiveClass: true,
			responsive:{
				0: {
					items: 1
				},
				768: {
					items: 3
				}
			}
		});

	}

	if ($(".fecha-desde").length > 0) {

		$(".fecha-desde").datepicker({
            dateFormat: "dd/mm/yy",
            defaultDate: "+0w",
            maxDate: '+0w +0w',
            changeMonth: false,
            numberOfMonths: 1,
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
            prevText: "Anterior",
            nextText: "Siguiente",
            onClose: function(selectedDate) {
                $(".fecha-hasta").datepicker("option", "minDate", selectedDate);
            }
        });

	}

	if ($(".fecha-hasta").length > 0) {

		$(".fecha-hasta").datepicker({
            dateFormat: "dd/mm/yy",
            defaultDate: "+0w",
            maxDate: '+0w +0w',
            changeMonth: false,
            numberOfMonths: 1,
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
            prevText: "Anterior",
            nextText: "Siguiente",
            onClose: function(selectedDate) {
                $(".fecha-desde").datepicker("option", "maxDate", selectedDate);
            }
        });

	}

	if ($("#galeria-fotos").length > 0) {

		document.getElementById('galeria-fotos').onclick = function (event) {
	        event = event || window.event;
	        var target = event.target || event.srcElement;
	        var link = target.src ? target.parentNode : target;
	        var options = {index: link, event: event,onclosed: function(){
	                setTimeout(function(){
	                    $("body").css("overflow","");
	                },200);
	            }};
	        var links = this.getElementsByTagName('a');
	        blueimp.Gallery(links, options);
	    };

	}

	if ($('.contenedor-video-home').length > 0) {
		var AnchoNavegador = parseInt($(window).height());
		if (AnchoNavegador > 768) {
			$(".player").mb_YTPlayer();
		}
	}

	AlturaVideoHome ();

	AlturaSeccionDondeEstamos ();

	AlturaListaNuestraGente ();

	AlturaListaNoticias ();

	AlturaCaracteristicasProgramas ();

	AlturaCajasHomePrivado ();

});

$("header button").on("click", function () {
	DesplegarMenu();
});

$(window).scroll(function() {
});

$(window).resize(function() {

	AlturaVideoHome ();

	AlturaSeccionDondeEstamos ();

	AlturaListaNuestraGente ();

	AlturaListaNoticias ();

	AlturaCaracteristicasProgramas ();

	AlturaCajasHomePrivado ();

});