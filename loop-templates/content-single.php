<?php
/**
 * Single post partial template
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			
					<?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'img-fluid') ); ?>
							<span class="fs-16 fw-normal clr-text-light pt-4 d-block">
								<i>
									<span><?php _e('Published On ','medplus'); ?> <?php echo get_the_date('d M Y'); ?>/<?php gt_set_post_view(); ?></span>
								</i>
							</span>
					
							<?php the_title( '<h3 class="fs-26 fw-semibold clr-text my-3">', '</h3>' ); ?>
							<p class="fs-18 fw-normal">
									<?php
										the_content();
										medplus_link_pages();
									?>
							</p>
							

						<footer class="entry-footer">
						<div class="blog--footer d-flex align-items-center pt-2">

							<span class="fs-16 fw-normal clr-text-light d-flex align-items-center">
								<img class="img-fluid pe-2" src="<?php echo  get_template_directory_uri(); ?>./assets/images/news-icon.png" alt="">
								<?php the_category(",");?>
							</span>
						</div>	

						</footer>
				</article><!-- #post-## -->


				