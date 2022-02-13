<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
	
	<div class="row g-0 overflow-hidden mb-5 position-relative align-items-center">
			<div class="col-md-6 p-4">
		
					<?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'img-fluid') ); ?>
			</div>

			<div class="col-md-6 p-4">
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<span class="fs-16 fw-normal clr-text-light">
						<!-- <i>Published on 29 Dec 2021 / 1K views</i> -->
						<i>
						<?php if ( 'post' === get_post_type() ) : ?>

								<div class="entry-meta">
									<?php medplus_posted_on(); ?>
								</div><!-- .entry-meta -->

						<?php endif; ?>
						</i>
					</span>
                
							<?php
								the_title(
									sprintf( '<h3 class="fs-26 fw-semibold clr-text my-3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
									'</a></h3>'
								);
							?>
							<p class="fs-18 fw-normal">
								<?php
									the_excerpt();
									// medplus_link_pages();
								?>

							</p>
                     
						<footer class="entry-footer">

								<?php 
								// medplus_entry_footer(); 
								?>
							   <div class="blog--footer d-flex align-items-center pt-2">

										<span class="fs-16 fw-normal clr-text-light d-flex align-items-center">
											<img class="img-fluid pe-2" src="<?php get_theme_file_path_uri(); ?>"./assets/images/news-icon.png" alt="mediPlus Blog Business">
											Blog, Business
										</span>
										<span class="fs-16 fw-normal clr-text-light d-flex align-items-center ps-5">
											<img class="img-fluid pe-2" src="./assets/images/news-icon.png" alt="mediPlus Blog News">
											Magazine, News
										</span>
								</div>

						</footer><!-- .entry-footer -->

				</article><!-- #post-## -->
			</div>					
	</div>

			