jQuery(document).ready(function($) {

    $('#backtop').hide();

    $('#backtop').click(function(){
        $('html,body').animate({scrollTop: 0}, 700);
    });

    if ($(window.location.hash).length) {
        $('html, body').animate({
            scrollTop: $('#about-us').offset().top-250
        }, 700);
    }

    $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll > 80) {          
			$("header").css({
                "border-bottom" : "4px solid #ecf0f1",
                "background" : "#fff" 
            });
            $('#backtop').fadeIn(500); 
		} else {
			$("header").css({
                "border-bottom" : "none",
                "background" : "rgba(240, 236, 236, 0.65)" 
            });
            $('#backtop').fadeOut(500);
        }
    });

    $('iframe').attr("width", "80%");
    $('iframe').attr("height", "150px");
    

    $('a[href= "#about-us"]').addClass('smooth');
    $('a[href="http://localhost/wordpress/#about-us"]').click(function(event){
        event.preventDefault();
        url = "http://localhost/wordpress/#about-us";
        window.location = url; 
    });
    
    
    $('.smooth').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr("href")).offset().top
        }, 700);
    });
 
    //Lightbox effects
    $('#lightbox-container').hide();
    $('.lightbox').click(function(){
        $imagesrc = $(this).attr('src');
        $imagetitle = $(this).data('title');
        $('#lightbox-inside img').attr('src', $imagesrc);
        $('.lightbox-caption p').html($imagetitle);
        $('#lightbox-container').slideDown();
    });
    $('#close-lightbox').click(function(){
        $('#lightbox-container').slideUp();
    });

    //Mobile menu 
    $('#close-menu').hide();
    $('#open-menu').click(function(){
        $('#open-menu').hide();
        $('.menu-mobile').fadeIn(500);
        $('#close-menu').delay(500).fadeIn(500);
    });
    $('#close-menu').click(function(){
        $('#close-menu').hide();
        $('.menu-mobile').fadeOut(500);
        $('#open-menu').delay(500).fadeIn(500);
    });
});