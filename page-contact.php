


<?php
/**
 * The template for displaying contact page
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
        <section class="contact-page" id="">
            <div class="container">

                <article class="text-center mt-5 pt-5">
                    <h2 class="fs-24 fw-bold feature__caption--line">contact Us</h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w
                    </p>
                </article>
                    <?php echo do_shortcode( '[contact-form-7 id="88" title="Contact form 1"]')?>
                    
            </div>
        </section>
    </main>







<?php

get_footer();