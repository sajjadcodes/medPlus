
<?php
/**
 * The template for displaying services
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('secondary');

$container = get_theme_mod( 'medplus_container_type' );
?>




    <main>
        <!-- === **** Our Services *** ===  -->
        <section class="Our-services my-5" id="">
            <div class="container">
                <!-- Our services (head) -->
                <article class="text-center">
                    <h2 class="fs-24 fw-bold feature__caption--line">Our Services</h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                </article>
          
                    <div class="container px-4">
                        <div class="row g-4 row-cols-1 row-cols-md-4 g-2 g-md-4">
                          <div class="col col-lg-3 text-center">
                           <div class="service-card border rounded-20">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/orthodontics.png" alt="Our services">
                            <h2 class="fs-24 fw-semibold clr-text mt-3">Orthodontics</h2>
                            <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                branch of medicine that consists.</p>
                           </div>
                          </div>
                          <div class="col col-lg-3 text-center">
                            <div class="service-card border rounded-20"> 
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/General Dentistry.png" alt="Our services">
                                <h2 class="fs-24 fw-semibold clr-text mt-3">General Dentistry</h2>
                                <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.
                                </p>
                            </div>
                          </div>
                          <div class="col col-lg-3 text-center">
                            <div class="service-card border rounded-20">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/Dental-implant.png" alt="Our services">
                                <h2 class="fs-24 fw-semibold clr-text mt-3">Dental Implant</h2>
                                <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.
                                </p>
                            </div>
                           </div>
                           <div class="col col-lg-3 text-center">
                            <div class="service-card border rounded-20">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/Gum-treatment.png" alt="Our services">
                                <h2 class="fs-24 fw-semibold clr-text mt-3">Gum Treatment</h2>
                                <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.
                                </p>
                            </div>
                           </div>
                           <div class="col col-lg-3 text-center">
                            <div class="service-card border rounded-20">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/kids-treatment.png" alt="Our services">
                                <h2 class="fs-24 fw-semibold clr-text mt-3">Kids treatment</h2>
                                <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.
                                </p>
                            </div>
                           </div>
                           <div class="col col-lg-3 text-center">
                            <div class="service-card border rounded-20">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/teeth-whitening.png" alt="Our services">
                                <h2 class="fs-24 fw-semibold clr-text mt-3">Teeth Whitening</h2>
                                <p class="fs-16 fw-normal p-2">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.
                                </p>
                            </div>
                           </div>
                        </div>
                      </div>


                <!-- </article> -->
            </div>
        </section>
    </main>







<?php

get_footer();