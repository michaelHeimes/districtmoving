(function($) {
	$(document).ready(function(){
		
		jQuery('.pro-primary-slider').slick({
			infinite: true,
			arrows: true,
			autoplay: false,
			autoplaySpeed: 4000,
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						arrows: false,
		
					}
				}
			]
		});
		
		// dropdown toggle
		jQuery(".caret").on("click", function (e) {
			  e.preventDefault();
			jQuery('.sub-menu').toggle(); 
		});
	
		var url = jQuery(location).attr('href');
		var parts = url.split("/");
		var last_part = parts[parts.length-2];
		if( last_part == "government-moving-services"){
			jQuery("#input_1_5").val("Govemment");
		}else if(last_part == "storage-services"){
			jQuery("#input_1_5").val("Storage");
		}else if(last_part == "residential-moving-services"){
			jQuery("#input_1_5").val("Household");
		}else if(last_part == "commercial-moving-services"){
			jQuery("#input_1_5").val("Commercial");
		}

    $(window).scroll(function() {
			if ($(this).scrollTop() > 50) {
      	$('#header').addClass('fixed');
      } else {
        $('#header').removeClass('fixed');
      }
		});

		//fake link
		$('a[href="#"]').on('click',function(){
			return false;
		});

		// slider-logo
		$('.slider-logo').slick({
			arrows: false,
			dots: false,
			autoplay: true,
			autoplaySpeed: 5000,
			adaptiveHeight: true,
			slidesToShow: 5,
			slidesToScroll: 5,
			responsive: [
				{
				  breakpoint: 1300,
				  settings: {
						slidesToShow: 4,
			  		slidesToScroll: 4,
				  }
				},
				{
		      breakpoint: 980,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3
		      }
		    },
				{
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
			]
		});

		$('.primary-slider').slick({
			arrows: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 3000,
			adaptiveHeight: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
				{
				  breakpoint: 767,
				  settings: {
						arrows: false
				  }
				}
			]
		});

		$('.services-slider').slick({
			arrows: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 5000,
			adaptiveHeight: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
		      breakpoint: 980,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
				{
				  breakpoint: 767,
				  settings: {
						slidesToShow: 1,
		        slidesToScroll: 1,
						arrows: false,
						dots: true
				  }
				}
			]
		});

		$('.slider-value').slick({
			arrows: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 5000,
			adaptiveHeight: true,
			responsive: [
				{
				  breakpoint: 767,
				  settings: {
						arrows: false
				  }
				}
			]
		});


		new WOW().init();

		$(window).load(function(){
			$(".style-input input,textarea").focus(function() {
				$(this).parent().parent().addClass("not-empty");
			});
			$(".style-input input,textarea").val("");
			$(".style-input input,textarea").focusout(function(){
				if($(this).val() != ""){
					$(this).parent().parent().addClass("not-empty");
				}else{
					$(this).parent().parent().removeClass("not-empty");
				}
			})
		});

		$('.style-file input').change(function() {
	    var label = $(this).parent().parent().find('.chose-file');
	    if(typeof(this.files) !='undefined'){
	      if(this.files.length == 0){
	        label.removeClass('withFile').text(label.data('default'));
	      } else {
	        var file = this.files[0];
	        var name = file.name;
	        var size = (file.size / 1048576).toFixed(3);
	        label.addClass('withFile').text(name + ' (' + size + 'mb)');
	      }
	    }
	    else{
	      var name = this.value.split("\\");
		      label.addClass('withFile').text(name[name.length-1]);
	    }
	    return false;
	  });

		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 800);
		});
		// $('a[href*="#"]')
		// // Remove links that don't actually link to anything
		// 	.not('[href="#"]')
		// 	.not('[href="#0"]')
		// 	.click(function(event) {
		// 	// On-page links
		// 	if (
		// 	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		// 	&&
		// 	location.hostname == this.hostname
		// 	) {
		// 		// Figure out element to scroll to
		// 		var target = $(this.hash);
		// 		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		// 		// Does a scroll target exist?
		// 		if (target.length) {
		// 		// Only prevent default if animation is actually gonna happen
		// 			event.preventDefault();
		// 			$('html, body').animate({
		// 			  scrollTop: target.offset().top - 200
		// 			}, 1000, function() {
		// 			  // Callback after animation
		// 			  // Must change focus!
		// 			  var $target = $(target);
		// 			  $target.focus();
		// 			  if ($target.is(":focus")) { // Checking if the target was focused
		// 			    return false;
		// 			  } else {
		// 			    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		// 			    $target.focus(); // Set focus again
		// 			  };
		// 			});
		// 		}
		// 	}
		// });
	});
	
	
	
	//Imports from Custom JS Plugin
	
	// Blue Border
	$('img.blue-border').each(function() {
		// Wrap the image in a figure tag
		$(this).wrap('<figure class="blue-box"></figure>');
	
	  });
		
		
	// mobile menu js
	if ($(window).width() < 768) {
		jQuery('.top-header').find('.info-left li').addClass('new_menu');
	   let tg = jQuery('.top-header').find('.info-left').html();
		let tg2 = jQuery('.top-header').find('#cnss_widget-2').html();
		$( tg ).insertAfter( "#menu-item-25" );
		$( '<li class="social_icons_custom">'+tg2+'</li>' ).insertBefore( "#menu-item-428" );
	}

})( jQuery );
