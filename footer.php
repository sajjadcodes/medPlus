<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'medplus_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

 <!-- Section: Footer -->
 	<section class="footer bg-dark-blue py-5" id="main_footer">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="row">
                <!-- Info & Contact (Footer) -->
                <div class="col-md-4">
                    <address>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid pb-4" src="<?php echo get_theme_mod( 'medplus_theme_sticky_logo' ) ?>"
                                alt="MediPlus Logo"></a>
                        <ul class="text-white fs-18 ps-3">
                            <li class="d-flex align-items-start py-2">
                                <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/Pin-Icon.png" alt="Pin Location Mediplus">
                                <span><?php echo get_theme_mod('medplus_footer_contact_address_setting');?></span>
                            </li>
                            <li class="py-2"><img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/Phone-Icon.png" alt="Phone contact Mediplus"><?php echo get_theme_mod('medplus_footer_contact_phone_setting');?></li>
                            <li class="py-2"><img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/Email-Icon.png" alt="Email Mediplus"><?php echo get_theme_mod('medplus_footer_contact_email_setting');?></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-2 col-6 text-white">
                    <h4 class="fs-20 fw-normal text-white"><?php esc_html_e("About Us","medplus"); ?></h4>
                    <ul>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'about',
                                    // 'container_class' => 'col-md-2 col-6 text-white',
                                    'container_id'    => '',
                                    // 'menu_class'      => 'px-4 nav-item',
                                    'fallback_cb'     => '',
                                    'menu_id'         => 'main-menu',
                                    // 'items_wrap'      => '',
                                    'depth'           => 2,
                                    'walker'          => new Medplus_WP_Bootstrap_Navwalker(),
                                )
                            );
                        ?>
                    </ul>
                </div>
                <div class="col-md-2 col-6 text-white">
                    <h4 class="fs-20 fw-normal text-white"><?php esc_html_e("Our Services","medplus"); ?></h4>
                    <ul>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'services',
                                    // 'container_class' => 'col-md-2 col-6 text-white',
                                    'container_id'    => '',
                                    // 'menu_class'      => 'px-4 nav-item',
                                    'fallback_cb'     => '',
                                    'menu_id'         => 'main-menu',
                                    // 'items_wrap'      => '',
                                    'depth'           => 2,
                                    'walker'          => new Medplus_WP_Bootstrap_Navwalker(),
                                )
                            );
                        ?>
                    </ul>
                </div>

                <!-- Our Services(Footer) -->
                <div class="col-md-4 text-white">
                    <h4 class="fs-20 fw-normal text-white"><?php esc_html_e("Working Hours","medplus"); ?></h4>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_weekdays_setting');?></p>
                        </span>
                        <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_start_time_setting');?> - <?php echo get_theme_mod('medplus_footer_end_time_setting');?></p>
                    </time>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_saturday_setting');?></p>
                        </span>
                        <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_saturday_start_time_setting');?> - <?php echo get_theme_mod('medplus_footer_saturday_end_time_setting');?></p>
                    </time>
                    <time class="py-2 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center">
                            <img class="img-fluid pe-3" src="<?php echo get_template_directory_uri() ?>/assets/images/clock.png" alt="Phone contact Mediplus">
                            <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_sunday_setting');?></p>
                        </span>
                        <p class="fs-18 fw-normal m-0"><?php echo get_theme_mod('medplus_footer_sunday_start_time_setting');?> - <?php echo get_theme_mod('medplus_footer_sunday_end_time_setting');?></p>
                    </time>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Copy Rifgt's -->
    <footer class="copy__right bg-light-gray py-3 border text-center">
        <p class="fs-16 m-0">
		<?php medplus_site_info(); ?>
		</p>
	</footer>
	<?php wp_footer(); ?>	  
</body>

</html>