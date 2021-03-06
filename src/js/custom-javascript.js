import $ from "jquery";

AOS.init();


$(document).ready(function(){ 



    // active and inactive menu items
    $('ul li a').click(function(){
        
        $('.active').css("border-bottom-color", "#fff");
        $('ul li a').removeClass("active");
        $(this).addClass("active");
    });
 

    $('.logo-sticky').hide(); 

    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length){
        $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top) {
                $(".navbar").css('background-color', '#0f223c');
                $(".nav-link").css('color', '#FFFF');
                $('.active').css("border-bottom-color", "#fff");
                $('.logo-static').hide(); 
                $('.logo-sticky').show(); 
            } 
            else {
                $('.navbar').css('background-color', 'transparent');
                $(".nav-link").css('color', '#0f223c');
                $('.active').css("border-bottom-color", "transparent");
                $('.logo-static').show(); 
                $('.logo-sticky').hide(); 
            }
        });
    }

    
    $('.testimonial__slider').slick({

        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        arrows: false,
        dots: false,
        responsive: [{
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    
    $(document).on('click','.branch_address',function(){
        if ($('#branch_address_form_field').length) {
            $('#branch_address_form_field').val($(this).attr('data-id'))
        }else{
            $('#booking_form1').append("<input type='hidden' name='branch_address_form_field' id='branch_address_form_field'>")
            $('#branch_address_form_field').val($(this).attr('data-id'))
        }
    });
});






