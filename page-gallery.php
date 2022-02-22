


<?php
/**
 * The template for displaying gallery
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
        <!-- === **** Photo Gallery *** ===  -->
        <section class="photo__gallery my-5" id="">
            <div class="container">
                <!-- Photo Gallery (Head) -->
                <article class="text-center">
                    <h2 class="fs-24 fw-bold feature__caption--line">Photo Gallery</h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                </article>
                <!-- Photo Gallery (Caption) -->
                <article class="overflow-hidden pt-4">
                    <!-- Gallery Tab Buttons -->
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

                    <?php
                                  $args = array(
                                    'post_type'      => 'gallery',
                                    'posts_per_page' => 10,
                                );
                                $galleryQuery= new WP_Query($args);
    
    
                                while($galleryQuery->have_posts()) {
    
                                    $galleryQuery->the_post();
                                    $i=0;
                                    $terms = get_the_terms($post->ID, 'group');
                                    $termResults = array();
                                    foreach($terms as $term){

                                        echo $term->name . "<br>";

                                        $termResults[$i]=$term->name;
                                        $i++;

                                    }


                                }
                                    echo "<pre>";
                                        print_r($termResults);

                                        foreach($termsResults as $result) {
                                            echo $result . "<br>";

                                        }
                                    echo "</pre>";
                                    exit();
                    ?>
                        
                        <!-- <li class="nav-item mx-2" role="presentation">
                            <button class="nav-link fs-18 fw-medium" id="Hollywood-tab" data-bs-toggle="pill"
                                data-bs-target="#Hollywood" type="button" role="tab" aria-controls="Hollywood"
                                aria-selected="false">Hollywood Smile</button>
                        </li>
                        <li class="nav-item mx-2" role="presentation">
                            <button class="nav-link fs-18 fw-medium" id="Crown-tab" data-bs-toggle="pill"
                                data-bs-target="#Crown" type="button" role="tab" aria-controls="Crown"
                                aria-selected="false">Crown</button>
                        </li>

                        <li class="nav-item mx-2" role="presentation">
                            <button class="nav-link fs-18 fw-medium" id="Bleaching-tab" data-bs-toggle="pill"
                                data-bs-target="#Bleaching" type="button" role="tab" aria-controls="Bleaching"
                                aria-selected="false">Bleaching</button>
                        </li>

                        <li class="nav-item mx-2" role="presentation">
                            <button class="nav-link fs-18 fw-medium" id="Roots-Canal-tab" data-bs-toggle="pill"
                                data-bs-target="#Roots-Canal" type="button" role="tab" aria-controls="Roots-Canal"
                                aria-selected="false">Roots Canal</button>
                        </li> -->
                    </ul>
                    <!-- Gallery Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="Braces" role="tabpanel" aria-labelledby="Braces-tab">
                            <div class="gallery">
                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">

                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-5.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-5.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-3.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-3.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-3.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                       
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Hollywood" role="tabpanel" aria-labelledby="Hollywood-tab">
                            <div class="gallery">
                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">

                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                       
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Crown" role="tabpanel" aria-labelledby="Crown-tab">
                            <div class="gallery">
                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">

                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                       
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Bleaching" role="tabpanel" aria-labelledby="Bleaching-tab">
                            <div class="gallery">
                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">

                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                       
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Roots-Canal" role="tabpanel" aria-labelledby="Roots-Canal-tab">
                            <div class="gallery">
                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">

                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-2.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/gallery-1.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-1.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/service-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                                            <div class="col mb-4">
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" data-caption="Image caption">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/treatment.png" alt="First image" class="img-fluid mb-4">
                                                </a>
                                                <a href="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png">
                                                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/medical-2.png" alt="Second image" class="img-fluid mb-4">
                                                </a>
                                            </div>
                       
                                </div>
                            </div>
                          
                        </div>

                    </div>
                    <!-- <div id="overlay"></div> -->
                    <div class="container readmore text-center p-4 ">
                        <h2 class="fs-18 readmore__btn--line">Read More</h2>
                    </div>
                </article>
            </div>
        </section>
        
    </main>






    <script src="<?php echo get_template_directory_uri() ?>./assets/js/baguetteBox.min.js" async></script>
 
    <script>
        window.addEventListener('load', function() {
          baguetteBox.run('.gallery');
        });
        baguetteBox.run('.gallery', {
            buttons:'auto',
            fullScreen:true,
           
        });
        </script>

<?php

get_footer();