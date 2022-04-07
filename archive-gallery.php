


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
                    <h2 class="fs-24 fw-bold feature__caption--line"><?php esc_html_e('Photo Gallery','medplus');?></h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">
                        <?php esc_html_e('Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem Ipsum has been the the 1500s,ining It was popularised in the 1960s w', 'medplus'); ?>
                    </p>
                </article>
                <!-- Photo Gallery (Caption) -->
                <article class="overflow-hidden pt-4">
                    <?php $gallery_groups = get_terms( array( 'taxonomy' => 'group') ); ?>
                    <ul class="nav nav-pills mb-5 justify-content-center" id="gallery-tabs">
                        <?php $active =0; ?>
                        <?php foreach($gallery_groups as $group) : ?>                            
                            <li class="nav-item mx-2" role="presentation">
                                <button 
                                    class="nav-link fs-18 fw-medium <?php echo ($active==0)?"active":" "; ?>" 
                                    data-gallery-group="<?php echo $group->slug; ?>"
                                    type="button"><?php echo $group->name; ?></button>
                            </li>
                            <?php $active++; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="gallery-items" id="gallery-tabs-content">
                   
                         <div class="gallery">
                            <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-4" id="gallery-images">
                                   
                            </div>
                         </div>
                            
                    </div>
                    <div class="container readmore text-center p-4 ">
                        <h2 class="fs-18 readmore__btn--line"><?php esc_html_e('Read More','medplus');?></h2>
                    </div>
                </article>
            </div>
        </section>
        
    </main>


                
<?php



get_footer();