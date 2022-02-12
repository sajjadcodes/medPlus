
<?php
/**
 * The template for displaying archive pages
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
        <!-- === **** Article Blog(Page-1) *** ===  -->
        <section class="article__blog--1 py-5" id="">
            <div class="<?php echo esc_attr( $container ); ?>">
                <h2 class="fs-24 fw-bold feature__caption--line text-center py-3">Medical Articles</h2>

                <!-- Article Blog(Page-1) -->
             
				<?php
				if ( have_posts() ) {
				
					?>
					<header class="page-header">
				
					</header><!-- .page-header -->
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
     
            
        </div>
        </section>
    </main>


<?php



get_footer();

