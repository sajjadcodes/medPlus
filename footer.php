<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'medplus_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

 <!-- Section: Footer -->
 	<section class="footer bg-dark-blue py-5" id="main_footer">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="row">

                <!-- Info & Contact (Footer) -->
                <div class="col-md-4">
                    <address>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid pb-4" src="<?php echo get_theme_mod( 'medplus_theme_sticky_logo' ) ?>"
                                alt="MediPlus Logo"></a>
                        <ul class="text-white fs-18 ps-3">
                            <li class="d-flex align-items-start py-2">
                                <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/Pin-Icon.png"
                                    alt="Pin Location Mediplus">
                                <span><?php echo get_theme_mod('medplus_footer_contact_address_setting');?></span>
                            </li>
                            <li class="py-2"><img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/Phone-Icon.png"
                                    alt="Phone contact Mediplus"><?php echo get_theme_mod('medplus_footer_contact_phone_setting');?></li>
                            <li class="py-2"><img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/Email-Icon.png"
                                    alt="Email Mediplus"><?php echo get_theme_mod('medplus_footer_contact_email_setting');?></li>
                        </ul>
                    </address>
                </div>

                <!-- About Us(Footer) -->
                <div class="col-md-2 col-6 text-white">
                    <h4 class="fs-20 fw-normal text-white">About Us</h4>
                    <ul>
                        <li class="py-2 fs-18 fw-normal clr-gray">Our Mission, Vision and Values</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Transformation</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Awards</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Publications & Reports</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Policies & Procedures </li>
                    </ul>
                </div>

                <!-- Our Services(Footer) -->
                <div class="col-md-2 col-6 text-white">
                    <h4 class="fs-20 fw-normal text-white">Our Services</h4>
                    <ul>
                        <li class="py-2 fs-18 fw-normal clr-gray">General Dentistry</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Orthodontics</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Dental Implant</li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Teeth Whitening </li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Gum Treatment </li>
                        <li class="py-2 fs-18 fw-normal clr-gray">Emergency</li>
                    </ul>
                </div>

                <!-- Our Services(Footer) -->
                <div class="col-md-4 text-white">
                    <h4 class="fs-20 fw-normal text-white">Working Hours</h4>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0">+Monday - Friday <?php echo get_theme_mod('medplus_footer_weekday_setting');?></p>
                        </span>
                        <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_start_time_setting');?> - <?php echo get_theme_mod('medplus_footer_end_time_setting');?></p>
                    </time>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0">+Saturday</p>
                        </span>
                        <p class="fs-18 fw-normal m-0">9:00 - 4:00</p>
                    </time>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>./assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0">+Sunday</p>
                        </span>
                        <p class="fs-18 fw-normal m-0">9:00 - 4:00</p>
                    </time>
                </div>
            </div>
        </div>
    </section>

    <!-- Copy Rifgt's -->
    <footer class="copy__right bg-light-gray py-3 border text-center">
        <p class="fs-16 m-0">
		<?php medplus_site_info(); ?>
		</p>
	</footer>

    <!--+++++++ ========== Inlcudees Js ========== +++++++-->
  

    <!-- +++  **** Script For Testimonial Slider ***  +++ -->
    <!-- <script type="text/javascript">
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
    </script> -->
    <!-- +++  **** Script For Mobile Menu Toggler ***  +++ -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
      <!-- +++  **** INITIALIZE AOS ***  +++ -->
   	 <script>
        // AOS.init();

        // scrolling menu background

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
						$(".nav-item a").css('color', '#FFFF');
						$('.active').css("border-bottom-color", "#fff");
						$('.logo-static').hide(); 
						$('.logo-sticky').show(); 
						
							} 
					else {
						$('.navbar').css('background-color', 'transparent');
						$(".nav-item a").css('color', '#0f223c');
						$('.active').css("border-bottom-color", "transparent");
						
						$('.logo-static').show(); 
						$('.logo-sticky').hide(); 
					}
				});
					}
				});

	// end of scrolling menu background cde

      	</script>

	<?php wp_footer(); ?>	  
</body>

</html>