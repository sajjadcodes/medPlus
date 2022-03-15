<?php
/**
 * The template for displaying all single posts
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('secondary');
$container = get_theme_mod( 'medplus_container_type' );
?>

	<main>
      
        <!-- === **** Article Blog(Page-2) *** ===  -->
        <section class="article__blog--2 my-5" id="">
            <div class="container">
                <div class="row">
                    <!-- Article (Blog--2) Left side -->
                    <div class="col-md-4">
                        <h2 class="fs-24 fw-bold mb-3"><?php esc_html_e('Related Articles','medplus') ?></h2>
                        
                        <?php
                        
                            $orig_post = $post;
                            global $post;
                            $categories = get_the_category($post->ID);
                                if ($categories) {
                                        $category_ids = array();
                                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                        $args=array(
                                                    'category__in' => $category_ids,
                                                    'post__not_in' => array($post->ID),
                                                    'posts_per_page'=> 2, // Number of related posts that will be shown.
                                                    'ignore_sticky_posts'=>1
                                                );

                                        $my_query = new wp_query( $args );

                                        if( $my_query->have_posts() ) {
                                    
                                                        while( $my_query->have_posts() ) {
                                                        $my_query->the_post();
                                                        ?>

                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('class' => 'img-fluid') );?>
                                                </div>
                                                <div class="col-md-6">
                                                    <span><?php _e('Published On ','medplus'); ?> <?php echo get_the_date('d M Y'); ?>/<?php gt_set_post_view(); ?></span>
                                                    <?php the_title('<h3 class="fs-18 fw-semibold clr-text mt-2">','</h3>'); ?>
                                                </div>
                                            </div>
                                            <hr>

                                                        <?php
                                                        }
                                            }
                                $post = $orig_post;
                                wp_reset_query();
                            }
                                            
                        ?>
                    
                    </div>
                
					<?php 
				
					 ?>
                    	<div class="col-md-8">
						
							<?php
									while ( have_posts() ) {
										the_post();
										get_template_part( 'loop-templates/content', 'single' );
						
									}
								?>
                        </div>
					<?php
				
					  ?>			
					
                    </div>
                </div>
            </div>
        </section>
    </main>



<?php
get_footer();
