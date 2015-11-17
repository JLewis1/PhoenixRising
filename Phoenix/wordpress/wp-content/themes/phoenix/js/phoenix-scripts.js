
	//Init two sliders to sync as one
	$('.active-slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.strip'
	});

	$('.strip').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.active-slide',
	  dots: true,
	  speed: 300,
	  variableWidth: true,
	  centerMode: true
	});

	var slideshowPos,
		activeDistance;

	//Re-position the active slide on resize	
	$(window).resize(function(){

		slideshowPos = $("#slideshow-frame").offset();
		activeDistance = slideshowPos.left + 201;

		$(".active-slide").css("left", activeDistance);
	});

