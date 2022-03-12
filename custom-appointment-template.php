<?php
/* Template Name: Custom Appointment Template */
get_header();
?>
<main>
        <!-- === **** Our Services *** ===  -->
        <section class="Our-services my-5" id="">
            <div class="container">
                <!-- Our services (head) -->
                <article class="text-center">
     
                    <h2 class="fs-24 fw-bold feature__caption--line"><?php echo post_type_archive_title( '', false );?></h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                        <?php the_archive_description( '<p class="w-50 fs-18 fw-normal mx-auto">', '</p>' ); ?>
                </article>

            <article class="overflow-hidden pt-4 mb-5">
                <div class="row row-cols-1 row-cols-md-4 g-2 g-md-3 text-center">
                 <?php
                            $args = array(
                                'post_type'      => 'branch',
                                'posts_per_page' => 10,
                            );
                            $specialist= new WP_Query($args);
                            ?>

                           <?php  while($specialist->have_posts()) {
                               $specialist->the_post();
                               ?>

                        <div class="col branch_address" data-id="<?php echo get_the_id();?>">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-1"><?php the_title(); ?></h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">
                                        <?php the_content();?>
                                </p>
                                <p><i class='fa fa-clock-o'></i> <?php esc_html_e('Monday - Friday ','medplus')?>  <?php echo get_post_meta(get_the_id(),'monday_to_friday',true);?></p>
                                <p><i class='fa fa-clock-o'></i> <?php esc_html_e('Saturday ','medplus')?> <?php echo get_post_meta(get_the_id(),'saturday_time',true);?></p>
                                <p><i class='fa fa-clock-o'></i><?php esc_html_e('Sunday ','medplus')?>  <?php echo get_post_meta(get_the_id(),'sunday_time',true);?></p>
                            </div>
                        </div>
                            <?php
                            }
                            ?>
               
                <!-- </article> -->
                        </article>
                        <div class="booking-form pt-5">
                             <?php echo do_shortcode("[booking type=1 nummonths=1 form_type='standard']");?>
                        </div>


                        </div>
            </div>
        </section>
    </main>






<?php
get_footer();
?>