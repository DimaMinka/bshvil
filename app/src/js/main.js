// ==== CORE ==== //
;
(function ($) {
    $(function () {
    	if($('.owl-carousel-pic').length) {
    		$('.owl-carousel-pic').owlCarousel({
    			rtl:true,
			    loop:false,
			    dots: true,
			    nav:true,
			    lazyload: false,
					margin:38,
			    responsive:{
			        0:{
			            items:1
			        },
			        645:{
			            items:2
			        },
			        950:{
			            items:3
			        },
			        1240:{
			            items:4
			        }
				    }
	    		});
        };


    	if($('.owl-carousel-yt').length) {
    		$('.owl-carousel-yt').owlCarousel({
    			rtl:true,
			    loop:false,
			    dots: true,
			    nav:true,
			    lazyload: false,
			    margin: 33,
			    responsive:{
			        0:{
			            items:1
			        },
			        769:{
			            items:2,
			        }
				    }
	    		});
        };

				if($('.carousel__slide-playbtn').length) {
					$('.carousel__slide-playbtn').fancybox({
						fitToView	: true,
						width		: '80%',
						height		: '80%',
						autoSize	: true,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'fade'
					});
				};
    });

}(jQuery));

