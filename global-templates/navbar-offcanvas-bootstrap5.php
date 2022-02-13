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


<!-- MePlus Nav -->

		<nav class="navbar fixed-top">	

		<h2 id="main-nav-label" class="screen-reader-text">
			<?php esc_html_e( 'Main Navigation', 'medplus' ); ?>
		</h2>
            <div class="<?php echo esc_attr( $container ); ?>">
             
                <!-- Header Nav Menu for Desktop View -->
                <div class="desktop__menu d-lg-flex d-none">
                    <!-- <a class="navbar-brand logo-static" href="./home.html">
                        <img class="img-fluid" src="./assets/images/Medplus-Logo.png" alt="Med Logo">
                    </a>
                    <a class="navbar-brand logo-sticky" href="./home.html">
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
							the_custom_logo();
                            ?>
                                   <!-- <a class="navbar-brand logo-static" href="./home.html">
                                <img class="img-fluid" src="./assets/images/Medplus-Logo.png" alt="Med Logo">
                                     </a> -->
                             <a class="navbar-brand logo-sticky" href="./home.html">
                            <img class="img-fluid" src="<?php echo get_theme_mod( 'medplus_theme_sticky_logo' ) ?>" alt="Med Logo">
                             
                            </a>

                                <?php
							}
					?>
<!-- end custom logo -->
					

                    

							<!-- The WordPress Menu goes here -->
								<?php
										wp_nav_menu(
											array(
												'theme_location'  => 'primary',
												'container_class' => 'desktop__menu d-lg-flex d-none',
												'container_id'    => '',
												'menu_class'      => 'px-4 nav-item',
												'fallback_cb'     => '',
												'menu_id'         => 'main-menu',
												'items_wrap'      => '<ul class="d-flex align-items-center m-0t">%3$s</ul>',
												'depth'           => 2,
												'walker'          => new Medplus_WP_Bootstrap_Navwalker(),
											)
										);
								?>
                       
                    <!-- </ul> -->
                   
                </div>
                <form class="d-lg-flex d-none">
                    <button class="button button--state-active fs-20 fw-bold rounded-10 shadow" type="submit">Make
                        Appointment</button>
                </form>
                <!-- Header Nav For Mobile View -->
                <div class="mobile__menu d-lg-none d-block">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">
                        <img class="img-fluid" src="./assets/images/side-menu.png" alt="Side Menu Icon">
                    </span>
                    <ul class="sidenav bg-dark-blue" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <li class="px-4 nav-item">
                            <a class="py-3 d-block nav text-white fs-5 fw-medium active" aria-current="page"
                                href="#">Home</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-3 d-block nav text-white fs-5 fw-medium" aria-current="page" href="#">Medical
                                Specialities</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-3 d-block nav text-white fs-5 fw-medium" aria-current="page" href="#">Our
                                Services</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-3 d-block nav text-white fs-5 fw-medium" aria-current="page"
                                href="#">Gallery</a>
                        </li>
                        <li class="px-4 nav-item">
                            <a class="py-3 d-block nav text-white fs-5 fw-medium" aria-current="page" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>