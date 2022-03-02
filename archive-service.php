<?php
/**
 * The template for displaying home for blog page
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
     
                    <h2 class="fs-24 fw-bold feature__caption--line"><?php echo post_type_archive_title( '', false );?></h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                        <?php the_archive_description( '<p class="w-50 fs-18 fw-normal mx-auto">', '</p>' ); ?>
                </article>
          
                    <div class="container px-4">
                        <div class="row g-4 row-cols-1 row-cols-md-4 g-2 g-md-4">

                        <?php
				if ( have_posts() ) {
				
				
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         * 
						 */
                        ?>
                        <div class="col col-lg-3 text-center">
                           <div class="service-card border rounded-20">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(  );?>" alt="Our services">
                           
                            <h2 class="fs-24 fw-semibold clr-text mt-3"><?php the_title();?></h2>
                                <div class="fs-16 fw-normal p-2">
                                <?php the_content(); ?>
                                </div>
                           </div>
                          </div>
				<?php
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

                          
                         
                        </div>
                      </div>


                <!-- </article> -->
            </div>
        </section>
    </main>


    <?php get_footer();?>