

<?php
/**
 * The template for displaying medical specialist
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
        <!-- === ****Sectionb (Medical Specialiest) *** ===  -->
        <section class="medical__special my-5" id="">
            <div class="container">
                <!-- Medical Specialiest(head) -->
                <article class="text-center">
                    <h2 class="fs-24 fw-bold feature__caption--line">Medical Specialities</h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                </article>
                <!-- Medical Specialiest(caption) -->
                <article class="overflow-hidden pt-4">
                    <div class="row row-cols-1 row-cols-md-3 g-2 g-md-3 text-center">
                        <!-- Medical Widget_1-->
                        <?php
                            $args = array(
                                'post_type'      => 'speciality',
                                'posts_per_page' => 10,
                            );
                            $specialist= new WP_Query($args);
                            ?>

                           <?php  while($specialist->have_posts()) {
                               $specialist->the_post();
                               ?>

                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-1"><?php the_title(); ?></h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">
                                        <?php the_content();?>
                                </p>
                            </div>
                        </div>
                            <?php
                            }
                            ?>

                    </div>
                </article>
            </div>
        </section>
    </main>






<?php

get_footer();