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
									Published on 29 Dec 2021 / 1K views
									<?php medplus_posted_on(); ?>
								</i>
								</span>
					
							<?php the_title( '<h3 class="fs-26 fw-semibold clr-text my-3">', '</h3>' ); ?>
							<p class="fs-18 fw-normal">
									<?php
										the_content();
										medplus_link_pages();
									?>
							</p>
							<div class="blog--footer d-flex align-items-center pt-2">
								<span class="fs-16 fw-normal clr-text-light d-flex align-items-center">
									<img class="img-fluid pe-2" src="./assets/images/news-icon.png"
										alt="mediPlus Blog Business">Blog, Business
								</span>
								<span class="fs-16 fw-normal clr-text-light d-flex align-items-center ps-5">
									<img class="img-fluid pe-2" src="./assets/images/news-icon.png"
										alt="mediPlus Blog News">Magazine, News
								</span>
						<footer class="entry-footer">

							<?php 
							// medplus_entry_footer(); 
							?>

						</footer>.entry-footer
				</article><!-- #post-## -->


				