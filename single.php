<?php
/**
 * The template for displaying all single posts
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'medplus_container_type' );
?>

	<main>
        <!-- === **** Article Blog(Page-2) *** ===  -->
        <section class="article__blog--2 my-5" id="">
            <div class="container">
                <div class="row">
                    <!-- Article (Blog--2) Left side -->
                    <div class="col-md-4">
                        <h2 class="fs-24 fw-bold mb-3">Related Articles</h2>
                        <!-- Article--1 (Left__Side)-->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img class="img-fluid" src="./assets/images/blog-1.png" alt="Mediplus Blog">
                            </div>
                            <div class="col-md-6">
                                <span class="fs-14 fw-normal clr-text-light"><i>Published on 29 Dec 2021 / 1K
                                        views</i></span>
                                <h3 class="fs-18 fw-semibold clr-text mt-2">Kids' Treatment Correctly</h3>
                            </div>
                        </div>
                        <hr>
                        <!-- Article--2 (Left__Side)-->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img class="img-fluid" src="./assets/images/blog-2.png" alt="Mediplus Blog">
                            </div>
                            <div class="col-md-6">
                                <span class="fs-14 fw-normal clr-text-light"><i>Published on 29 Dec 2021 / 1K
                                        views</i></span>
                                <h3 class="fs-18 fw-semibold clr-text mt-2">Kids' Treatment Correctly</h3>
                            </div>
                        </div>
                        <hr>
                        <!-- Article--3 (Left__Side)-->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img class="img-fluid" src="./assets/images/blog-3.png" alt="Mediplus Blog">
                            </div>
                            <div class="col-md-6">
                                <span class="fs-14 fw-normal clr-text-light"><i>Published on 29 Dec 2021 / 1K
                                        views</i></span>
                                <h3 class="fs-18 fw-semibold clr-text mt-2">Kids' Treatment Correctly</h3>
                            </div>
                        </div>
                        <hr>
                        <!-- Article--4 (Left__Side)-->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img class="img-fluid" src="./assets/images/blog-1.png" alt="Mediplus Blog">
                            </div>
                            <div class="col-md-6">
                                <span class="fs-14 fw-normal clr-text-light"><i>Published on 29 Dec 2021 / 1K
                                        views</i></span>
                                <h3 class="fs-18 fw-semibold clr-text mt-2">Kids' Treatment Correctly</h3>
                            </div>
                        </div>
                        <hr>
                        <!-- Article--4 (Left__Side)-->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img class="img-fluid" src="./assets/images/blog-2.png" alt="Mediplus Blog">
                            </div>
                            <div class="col-md-6">
                                <span class="fs-14 fw-normal clr-text-light"><i>Published on 29 Dec 2021 / 1K
                                        views</i></span>
                                <h3 class="fs-18 fw-semibold clr-text mt-2">Kids' Treatment Correctly</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Article (Blog--2) Right side -->
					<?php 
					// get_template_part( 'global-templates/left-sidebar-check' );
					 ?>
                    	<div class="col-md-8">
							<h2 class="fs-24 fw-bold mb-3">Related Articles</h2>
							<?php
									while ( have_posts() ) {
										the_post();
										get_template_part( 'loop-templates/content', 'single' );
										medplus_post_nav();

										// If comments are open or we have at least one comment, load up the comment template.
										// if ( comments_open() || get_comments_number() ) {
										// 	comments_template();
										// }
									}
								?>
                        </div>
					<?php
					//  get_template_part( 'global-templates/right-sidebar-check' );
					  ?>			
					
                    </div>
                </div>
            </div>
        </section>
    </main>



<?php
get_footer();
