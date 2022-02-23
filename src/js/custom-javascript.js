import $ from "jquery";
import AOS from "aos_scripts";


// Our modules / classes
// import AOS from "./aos"

// AOS.init();


$(document).ready(function(){ 



    // active and inactive menu items
    $('ul li a').click(function(){
        alert("menu click");
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
});

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



//mySidenav

function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}




