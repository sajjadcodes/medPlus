


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
                    <?php
                                   $termsCPT = get_terms( array(
                                    'taxonomy' => 'group',
                                ) );

                                // echo "<pre>";
                                        
                                // print_r($termsCPT);
                                    
                                // echo"</pre>";
                                // exit();
                                //    $gallaryTerms = array(); 
                                // foreach($termsCPT as $term){

                                //     array_push($gallaryTerms, $term->name);
                                // }

                                //   echo "<pre>";
                                        
                                // print_r($termsCPT);
                                    
                                // echo"</pre>";
                                // exit();


                    ?>
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

                                    <?php
                                    
                                        foreach($termsCPT as $term){
                                            ?>

                                            <li class="nav-item mx-2" role="presentation">
                                                <button class="nav-link fs-18 fw-medium" id="<?php echo $term->name; ?>-tab" data-bs-toggle="pill"
                                                    data-bs-target="#<?php echo $term->name; ?>" type="button" role="tab" aria-controls="<?php echo $term->name; ?>"
                                                    aria-selected="false"><?php echo $term->name; ?></button>
                                            </li>
                                            <?php
                                        }
                                        
                                       
                                    ?>
                        
                    </ul>
                    <!-- Gallery Tab Content -->

                                   

                    <div class="tab-content" id="pills-tabContent">

                        <?php
                    
                                        foreach($termsCPT as $term){
                                            ?>
                                            <div class="tab-pane fade show active" id="<?php echo $term->name; ?>" role="tabpanel" aria-labelledby="<?php echo $term->name; ?>-tab">
                                            <div class="gallery">
                                       <?php 
                                        }
                                        ?>
                                                <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4">
                                                           <?php
                                                                         $args = array(
                                                                            'post_type'      => 'gallery',
                                                                            // 'posts_per_page' => 10,
                                                                            'group'  => $term->name,
                                                                            'term'      =>$term->name,
                                                                        );
                                                                        $galleryQuery= new WP_Query($args);

                                                                while($galleryQuery->have_posts()){
                                                                    $galleryQuery->the_post();?>
                                                                <div class="col mb-4">
                                                                    <a href="<?php the_post_thumbnail_url();?>" data-caption="Image caption">
                                                                        <img src="<?php the_post_thumbnail_url();?>" alt="First image" class="img-fluid mb-4">
                                                                    </a>
                                                                    <a href="<?php the_post_thumbnail_url();?>">
                                                                        <img src="<?php the_post_thumbnail_url();?>" alt="Second image" class="img-fluid mb-4">
                                                                    </a>
                                                                </div>


                                                                    <?php
                                                                }
                                                                wp_reset_postdata();

                                                           ?>
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