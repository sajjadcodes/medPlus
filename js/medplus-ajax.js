
(function($) {
    $(window).load(()=>{
        const galleryOnLoad = document.querySelector("#gallery-tabs li .active");
        const galleryGroup= galleryOnLoad.textContent;
        console.log(galleryGroup);
        $.ajax({
            type : "post",
            url :GalleryGroup.ajaxurl,
            data :{action: "gallery_group",galleryGroup},
            success: function(response) {
                $('#gallery-images').html(response);
                baguetteBox.run('.gallery');
            }
         })   

    });
    $(document).on('click', '#gallery-tabs li .nav-link', function() {
        const galleryGroup = $(this).data('gallery-group');

        $("#gallery-tabs li .nav-link").removeClass("active");
        $(this).addClass('active');
        $.ajax({
            type : "post",
            url :GalleryGroup.ajaxurl,
            data :{action: "gallery_group",galleryGroup},
            success: function(response) {
                console.log(response);
                $('#gallery-images').html(response);
                baguetteBox.run('.gallery');
            }
         })   

    })

})(jQuery);


window.addEventListener('load', function() {
    baguetteBox.run('.gallery');
});
baguetteBox.run('.gallery', {
    buttons:'auto',
    fullScreen:true,
});



// 

function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}