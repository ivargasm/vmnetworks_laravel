/*$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();

	$('#negro').on('click',function(){
		$(this).css({
			"display": "none"
		});
		$("#dialogo").css({
			"display": "none"
		});
	});
	$('#dialogo').on('click',function(){
		$(this).css({
		$("#negro").css({
			"display": "none"
		});
			"display": "none"
		});
	});
});*/

$(document).ready(function(){

	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();

	var ancho=$('.video').width();
	var alto=(ancho*360)/640;
	$('.vy').css({
			'width':ancho,
			'height':alto
		});
	$(window).resize(function(){
		var ancho=$('.video').width();
		var alto=(ancho*360)/640;
		$('.vy').css({
			'width':ancho,
			'height':alto
		});	
	});

	var banner = {
		padre: $('#banner'),
		numeroSlides: $('#banner').children('.slide').length,
		posicion: 1
	}

	var info = {
		padre: $('#info'),
		numeroSlides: $('#info').children('.slide').length,
		posicion: 1
	}

	banner.padre.children('.slide').first().css({
		'left': 0
	});

	info.padre.children('.slide').first().css({
		'left': 0
	});

	var altoBanner = function(){
		var alto = banner.padre.children('.slide').outerHeight();
		banner.padre.css({
			'height': alto + 'px'
		});
	}

	var altoInfo = function(){
		var alto = info.padre.children('.active').outerHeight();
		info.padre.animate({
			'height': alto + 'px'
		});
	}

	var altoContenedor = function(){
		var altoVentana = $(window).height();

		if(altoVentana <= $('#contenedor').outerHeight() + 200){
			$('#contenedor').css({
				'height': ''
			});
		} else {
			$('#contenedor').css({
				'height': altoVentana + 'px'
			});
		}
	}

	altoBanner();
	altoInfo();
	altoContenedor();

	$(window).resize(function(){
		altoBanner();
		altoInfo();
		altoContenedor();
	});

	$('#info').children('.slide').each(function(){
		$('#botones').append('<span>');
	});

	$('#botones').children('span').first().addClass('active');

/*********** Banner *************

//Boton siguiente

	$('#banner-next').on('click', function(e){
		e.preventDefault();

		if(banner.posicion < banner.numeroSlides){
			banner.padre.children().not('.active').css({
				'left': '100%'
			});
			$('#banner .active').removeClass('active').next().addClass('active').animate({
				'left': '0%'
			});

			$('#banner .active').prev().animate({
				'left': '-100%'
			});

			banner.posicion = banner.posicion + 1;
		} else{
			$('#banner .active').animate({
				'left': '-100%'
			});

			banner.padre.children().not('.active').css({
				'left': '100%'
			});

			$('#banner .active').removeClass('active');
			banner.padre.children('.slide').first().addClass('active').animate({
				'left': 0
			});

			banner.posicion = 1;
		}
	});

//Boton anterios
	$('#banner-prev').on('click',function(e){
		e.preventDefault();

		if(banner.posicion > 1){
			banner.padre.children().not('.active').css({
				'left': '-100%'
			});

			$('#banner .active').animate({
				'left': '100%'
			});

			$('#banner .active').removeClass('active').prev().addClass('active').animate({
				'left': 0
			});

			banner.posicion = banner.posicion - 1;
		} else {
			banner.padre.children().not('.active').css({
				'left': '-100%'
			});

			$('#banner .active').animate({
				'left': '100%'
			});

			$('#banner .active').removeClass('active');
			banner.padre.children().last().addClass('active').animate({
				'left': 0
			});

			banner.posicion = banner.numeroSlides;
		}

	});*/

	/********** Info *************/

//Boton siguiente

	$('#info-next').on('click', function(e){
		e.preventDefault();

		if(info.posicion < info.numeroSlides){
			info.padre.children().not('.active').css({
				'left': '100%'
			});
			$('#info .active').removeClass('active').next().addClass('active').animate({
				'left': '0%'
			});

			$('#info .active').prev().animate({
				'left': '-100%'
			});

			$('#botones').children('.active').removeClass('active').next().addClass('active');

			info.posicion = info.posicion + 1;
		} else{
			$('#info .active').animate({
				'left': '-100%'
			});

			info.padre.children().not('.active').css({
				'left': '100%'
			});

			$('#info .active').removeClass('active');
			info.padre.children('.slide').first().addClass('active').animate({
				'left': 0
			});

			$('#botones').children('.active').removeClass('active');
			$('#botones').children('span').first().addClass('active');


			info.posicion = 1;
		}
		altoInfo();
	});

//Boton anterios
	$('#info-prev').on('click',function(e){
		e.preventDefault();

		if(info.posicion > 1){
			info.padre.children().not('.active').css({
				'left': '-100%'
			});

			$('#info .active').animate({
				'left': '100%'
			});

			$('#info .active').removeClass('active').prev().addClass('active').animate({
				'left': 0
			});

			$('#botones').children('.active').removeClass('active').prev().addClass('active');

			info.posicion = info.posicion - 1;
		} else {
			info.padre.children().not('.active').css({
				'left': '-100%'
			});

			$('#info .active').animate({
				'left': '100%'
			});

			$('#info .active').removeClass('active');
			info.padre.children().last().addClass('active').animate({
				'left': 0
			});

			$('#botones').children('.active').removeClass('active');
			$('#botones').children('span').last().addClass('active');

			info.posicion = info.numeroSlides;
		}
		altoInfo();

	});


});

+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.3.7'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = $(selector === '#' ? [] : selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);