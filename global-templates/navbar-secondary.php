<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

            $container = get_theme_mod( 'medplus_container_type' );
            ?>


         <nav class="navbar navbar-expand-md">
                <h2 id="main-nav-label" class="screen-reader-text">
                    <?php esc_html_e( 'Main Navigation', 'medplus' ); ?>
                </h2>
            <div class="<?php echo esc_attr( $container ); ?>">
                <!-- <a class="navbar-brand" href="./home.html">
                    <img class="img-fluid" src="./assets/images/mediplus-Logo-white.png" alt="Med Logo">
                </a> -->

                                        			<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

                        <?php if ( is_front_page() && is_home() ) : ?>

                            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                        <?php else : ?>

                            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                        <?php endif; ?>

                        <?php
                        } else {
                            ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img class="img-fluid" src="<?php echo get_theme_mod( 'medplus_theme_sticky_logo' ) ?>" alt="Med Logo">
                             
                            </a>
                    <?php
                        }
                    ?>
                        <!-- end custom logo -->


                <!--  *** Mobile Menu Toggler *** -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-md-0 tex">
                        <li class="px-4 nav-item">
                            <a class="py-2 nav-menu text-white fs-5 active" aria-current="page" href="./home.html">Home</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-2 nav-menu text-white fs-5" aria-current="page" href="./medical-specialities.html">Medical
                                Specialities</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-2 nav-menu text-white fs-5" aria-current="page" href="./our-services.html">Our Services</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-2 nav-menu text-white fs-5" aria-current="page" href="./gallery.html">Gallery</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-2 nav-menu text-white fs-5" aria-current="page" href="./blog-1.html">Blog</a>
                        </li>
                    </ul> -->

                <!-- The WordPress Menu goes here -->
                        <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'primary',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'navbarCollapse',
                                        'menu_class'      => 'navbar-nav me-auto mb-2 mb-md-0',
                                        'fallback_cb'     => '',
                                        'menu_id'         => 'main-menu',
                                        'items_wrap'      => '<li class="px-4 nav-item">%3$s</li>',
                                        'depth'           => 2,
                                        'walker'          => new Medplus_WP_Bootstrap_Navwalker(),
                                    )
                                );
                        ?>
                       

                    <form class="d-flex">
                        <button class="button button--state-active fs-20 fw-bold rounded-10" type="submit">Make
                            Appointment</button>
                    </form>
                </div>
            </div>
        </nav>