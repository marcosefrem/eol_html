/*	----------------------------------------------------------------------------------------------------
	 JS Global
------------------------------------------------------------------------------------------------------ */

/*	--------------------------------------------------
	Declaración de funciones y variables globales
-------------------------------------------------- */

/*	--------------------------------------------------
	Lógica de scripts
-------------------------------------------------- */
$(function() {
	placeVideo();	
	
	/*	--------------------------------------------------
		Menu
	-------------------------------------------------- */	
	
	$('.open-text').click(function(){
		$('body').addClass('open');
		$('.menu-container').addClass('open');
		$('.close-text').addClass('open');
	});	
	
	$('.close-text').click(function(){
		$('body').removeClass('open');

		$('.menu-container').removeClass('open');
		$('.close-text').removeClass('open');
	});	
		
	
	/*	--------------------------------------------------
		Funcionalidad buscador
	-------------------------------------------------- */

	$('#search-header + .input-group-addon').mouseenter(function() {
		$(this).prev().addClass('active');
	  });
	$('html').click(function() {
		$('header .input-group input[type="text"]').removeClass('active');
	});
	
	$('header .input-group').click(function(event){
		event.stopPropagation();
	});	

	/*	--------------------------------------------------
		Caja contacto
	-------------------------------------------------- */

	$('.contact-options a').click(function(){
		$('.contact-options').find('.info-hidden').hide();
		$(this).next().fadeIn(300);
		
	});	



	$('.js-close-parent').click(function(){
		$(this).parent().fadeOut(500);
		
	});	



	/*	--------------------------------------------------
		Carrusel logos
	-------------------------------------------------- */

	 $("#owl-logos").owlCarousel({
	 
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:4,
		            nav:true
		        },
		        600:{
		            items:8,
		            nav:false
		        },
		        1000:{
		            items:8,
		            nav:true,
		            loop:false
		        }
		    }
	 
	  });



	/*	--------------------------------------------------
		Carrusel logos
	-------------------------------------------------- */

	 $("#owl-events").owlCarousel({
	 
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:3,
		            nav:true,
		            loop:false
		        }
		    }
	 
	  });






	/*	--------------------------------------------------
		Carrusel de cursos
	-------------------------------------------------- */

	 $("#owl-other-courses").owlCarousel({
	 
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:4,
		            nav:true,
		            loop:false
		        }
		    }
	 
	  });

	/*	--------------------------------------------------
		Carrusel de alumnos
	-------------------------------------------------- */

	 $("#owl-testimonials-home").owlCarousel({
	 
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:2,
		            nav:true,
		            loop:false
		        }
		    }
	 
	  });
	/*	--------------------------------------------------
		Carrusel de alumnos
	-------------------------------------------------- */

	 $("#owl-testimonials").owlCarousel({
	 
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:false
		        },
		        1000:{
		            items:1,
		            nav:true,
		            loop:false
		        }
		    }
	 
	  });

	/*	--------------------------------------------------
		Empresas Alumnos
	-------------------------------------------------- */	
	
	$('.js-open-next').click(function(){
		
		$(this).next().toggleClass('hide');
		$(this).parent().toggleClass('opened');
	}); 	
	
	
	
	
	
	/*	--------------------------------------------------
		Llamada de funciones
	-------------------------------------------------- */

	/*	--------------------------------------------------
		Averiguamos el núemro de pestañas y le damos un ancho
	-------------------------------------------------- */

	var numTabs= $('.nav-tabs.auto-size li').length;
	var sizeTab=  100 / numTabs;

	$('.nav-tabs li').css('width', sizeTab+'%' );
	
	/*	--------------------------------------------------
		Llamada de funciones en resize
	-------------------------------------------------- */
	$( window ).on('resize', function() {

		placeVideo();

	});
	



});
		

function placeVideo(){

	windowWidth =$(window).width();
	windowHeight =$(window).height();
	
	
	$('#video-home').css('width', windowWidth);
	$('#video-home').css('height', windowHeight);
	
}		
