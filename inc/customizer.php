<?php
/**
 * Medplus Theme Customizer
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'medplus_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function medplus_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'medplus_customize_register' );

if ( ! function_exists( 'medplus_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function medplus_theme_customize_register( $wp_customize ) {


		// secondary logo

		// add a setting 
		$wp_customize->add_setting('medplus_theme_sticky_logo');
		// Add a control to upload the hover logo
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'medplus_theme_sticky_logo', array(
				'label' => 'Upload sticky Logo',
				'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
				'settings' => 'medplus_theme_sticky_logo',
				'priority' => 8 // show it just below the custom-logo
			)));
	

		// Theme layout settings.
		$wp_customize->add_section(
			'medplus_theme_layout_options',
			array(
				'title'       => __( 'Theme Layout Settings', 'medplus' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'medplus' ),
				'priority'    => apply_filters( 'medplus_theme_layout_options_priority', 160 ),
			)
		);

		/**
		 * Select sanitization function
		 *
		 * @param string               $input   Slug to sanitize.
		 * @param WP_Customize_Setting $setting Setting instance.
		 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
		 */
		function medplus_theme_slug_sanitize_select( $input, $setting ) {

			// Ensure input is a slug (lowercase alphanumeric characters, dashes and underscores are allowed only).
			$input = sanitize_key( $input );

			// Get the list of possible select options.
			$choices = $setting->manager->get_control( $setting->id )->choices;

			// If the input is a valid key, return it; otherwise, return the default.
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

		}

		$wp_customize->get_section('static_front_page')->priority = 2;

		$wp_customize->add_setting(
			'medplus_bootstrap_version',
			array(
				'default'           => 'bootstrap5',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'medplus_bootstrap_version',
				array(
					'label'       => __( 'Bootstrap Version', 'medplus' ),
					'description' => __( 'Choose between Bootstrap 4 or Bootstrap 5', 'medplus' ),
					'section'     => 'medplus_theme_layout_options',
					'settings'    => 'medplus_bootstrap_version',
					'type'        => 'select',
					'choices'     => array(
						'bootstrap4' => __( 'Bootstrap 4', 'medplus' ),
						'bootstrap5' => __( 'Bootstrap 5', 'medplus' ),
					),
					'priority'    => apply_filters( 'medplus_bootstrap_version_priority', 10 ),
				)
			)
		);

		$wp_customize->add_setting(
			'medplus_container_type',
			array(
				'default'           => 'container',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'medplus_theme_slug_sanitize_select',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'medplus_container_type',
				array(
					'label'       => __( 'Container Width', 'medplus' ),
					'description' => __( 'Choose between Bootstrap\'s container and container-fluid', 'medplus' ),
					'section'     => 'medplus_theme_layout_options',
					'settings'    => 'medplus_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'medplus' ),
						'container-fluid' => __( 'Full width container', 'medplus' ),
					),
					'priority'    => apply_filters( 'medplus_container_type_priority', 10 ),
				)
			)
		);

		$wp_customize->add_setting(
			'medplus_navbar_type',
			array(
				'default'           => 'collapse',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'medplus_navbar_type',
				array(
					'label'             => __( 'Responsive Navigation Type', 'medplus' ),
					'description'       => __(
						'Choose between an expanding and collapsing navbar or an offcanvas drawer.',
						'medplus'
					),
					'section'           => 'medplus_theme_layout_options',
					'settings'          => 'medplus_navbar_type',
					'type'              => 'select',
					'sanitize_callback' => 'medplus_theme_slug_sanitize_select',
					'choices'           => array(
						'collapse'  => __( 'Collapse', 'medplus' ),
						'offcanvas' => __( 'Offcanvas', 'medplus' ),
					),
					'priority'          => apply_filters( 'medplus_navbar_type_priority', 20 ),
				)
			)
		);

		$wp_customize->add_setting(
			'medplus_sidebar_position',
			array(
				'default'           => 'right',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'medplus_sidebar_position',
				array(
					'label'             => __( 'Sidebar Positioning', 'medplus' ),
					'description'       => __(
						'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.',
						'medplus'
					),
					'section'           => 'medplus_theme_layout_options',
					'settings'          => 'medplus_sidebar_position',
					'type'              => 'select',
					'sanitize_callback' => 'medplus_theme_slug_sanitize_select',
					'choices'           => array(
						'right' => __( 'Right sidebar', 'medplus' ),
						'left'  => __( 'Left sidebar', 'medplus' ),
						'both'  => __( 'Left & Right sidebars', 'medplus' ),
						'none'  => __( 'No sidebar', 'medplus' ),
					),
					'priority'          => apply_filters( 'medplus_sidebar_position_priority', 20 ),
				)
			)
		);

		$wp_customize->add_setting(
			'medplus_site_info_override',
			array(
				'default'           => '',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'wp_kses_post',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'medplus_site_info_override',
				array(
					'label'       => __( 'Footer Site Info', 'medplus' ),
					'description' => __( 'Override Medplus\'s site info located at the footer of the page.', 'medplus' ),
					'section'     => 'medplus_theme_layout_options',
					'settings'    => 'medplus_site_info_override',
					'type'        => 'textarea',
					'priority'    => 20,
				)
			)
		);


		// Custom user

		// Custom panel

				$wp_customize->add_panel( 'medplus_front_page_panel', 
					array(
						'priority'       => 0,
						'title'            => __( 'MedPlus Theme Options', 'medplus' ),
						'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'medplus' ),
					) 

	
				);

				// Text Options Section Inside Theme
				$wp_customize->add_section( 'front_page_hero_section', 
				array(
					'title'         => __( 'Hero Section', 'medplus' ),
					'priority'      => 1,
					'panel'         => 'medplus_front_page_panel'
				) 
				);

				// Setting for Copyright text.
			$wp_customize->add_setting( 'medplus_hero_headline_text_setting',
			array(
				'default'           => __( 'We Provide High Solutions For Your Health', 'medplus' ),
				// 'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_hero_headline_text_setting', 
			array(
				'type'        => 'text',
				'priority'    => 10,
				'section'     => 'front_page_hero_section',
				'label'       => 'Hero Headline',
				'description' => 'Text put here will be outputted in the Hero Headline',
			) 
			);



			// Hero section banner 
			$wp_customize->add_setting( 'medplus_hero_image_setting', array(
				'default'  => ''
			));


			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'Banner',
					array(
						'label'      => __( 'Upload a Banner', 'medplus' ),
						'section'    => 'front_page_hero_section',
						'settings'   => 'medplus_hero_image_setting',
					
					)
				)
			);


			// Feature section 

			$wp_customize->add_section( 'front_page_features_section', 
			array(
				'title'         => __( 'Features Section', 'medplus' ),
				'priority'      => 2,
				'panel'         => 'medplus_front_page_panel'
			) 
			);

			// feature Section setting one

			$wp_customize->add_setting( 'medplus_hero_freatue_one_text_setting',
			array(
				'default'           => __( 'We Provide High Solutions For Your Health', 'medplus' ),
				// 'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
			);

			// feature Section setting two
			$wp_customize->add_setting( 'medplus_hero_freatue_two_text_setting',
			array(
				'default'           => __( 'We Provide High Solutions For Your Health', 'medplus' ),
				// 'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
			);


			// feature Section setting Three
			$wp_customize->add_setting( 'medplus_hero_freatue_three_text_setting',
			array(
				'default'           => __( 'We Provide High Solutions For Your Health', 'medplus' ),
				// 'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_hero_freatue_one_text_setting', 
			array(
				'type'        => 'text',
				'priority'    => 10,
				'section'     => 'front_page_features_section',
				'label'       => 'Featured One',
				'description' => '',
			) 
			);

				// Control feature one controller
				$wp_customize->add_control( 'medplus_hero_freatue_two_text_setting', 
				array(
					'type'        => 'text',
					'priority'    => 10,
					'section'     => 'front_page_features_section',
					'label'       => 'Featured two',
					'description' => '',
				) 
				);

				// Control feature one controller
				$wp_customize->add_control( 'medplus_hero_freatue_three_text_setting', 
				array(
					'type'        => 'text',
					'priority'    => 10,
					'section'     => 'front_page_features_section',
					'label'       => 'Featured three',
					'description' => '',
				) 
				);


				// feature section icons

					// Hero section banner 
			$wp_customize->add_setting( 'medplus_featured_icon_one_setting', array(
				'default'  => ''
			));


			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'Icon One',
					array(
						'label'      => __( 'Featured One Icon', 'medplus' ),
						'section'    => 'front_page_features_section',
						'settings'   => 'medplus_featured_icon_one_setting',
					
					)
				)
			);

			$wp_customize->add_setting( 'medplus_featured_icon_two_setting', array(
				'default'  => ''
			));


			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'Icon Two',
					array(
						'label'      => __( 'Featured Two Icon', 'medplus' ),
						'section'    => 'front_page_features_section',
						'settings'   => 'medplus_featured_icon_two_setting',
					
					)
				)
			);

			$wp_customize->add_setting( 'medplus_featured_icon_three_setting', array(
				'default'  => ''
			));


			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'Icon Three',
					array(
						'label'      => __( 'Featured Three Icon', 'medplus' ),
						'section'    => 'front_page_features_section',
						'settings'   => 'medplus_featured_icon_three_setting',
					
					)
				)
			);



				// Gallery section 

				$wp_customize->add_section( 'front_page__section_gallery', 
				array(
					'title'         => __( 'Gallery Section', 'medplus' ),
					'priority'      => 3,
					'panel'         => 'medplus_front_page_panel'
				) 
				);

				// Gallery section Setting 

			$wp_customize->add_setting( 'medplus_gallary_section_title_setting',
				array(
					'default'           => __( 'Before & After Gallery', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_gallary_section_title_setting', 
				array(
					'type'        => 'text',
					'priority'    => 10,
					'section'     => 'front_page__section_gallery',
					'label'       => 'Featured One',
					'description' => '',
				) 
				);


				// Gallary SubTitle

				$wp_customize->add_setting( 'medplus_gallary_section_subtitle_setting',
				array(
					'default'           => __( 'Before & After Gallery', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_gallary_section_subtitle_setting', 
				array(
					'type'        => 'textarea',
					'priority'    => 20,
					'section'     => 'front_page__section_gallery',
					'label'       => 'Featured One',
					'description' => '',
				) 
				);



					$wp_customize->add_setting( 'medplus_gallery_image_setting', array(
						'default'  => ''
					));
				// Gallery section Controller
					$wp_customize->add_control(
						new WP_Customize_Image_Control(
							$wp_customize,
							'Icon One',
							array(
								'label'      => __( 'Gallary Image', 'medplus' ),
								'priority'    => 30,
								'section'    => 'front_page__section_gallery',
								'settings'   => 'medplus_gallery_image_setting',
							
							)
						)
					);


				// About Section customizer

				$wp_customize->add_section( 'front_page__section_about', 
				array(
					'title'         => __( 'About Section', 'medplus' ),
					'priority'      => 3,
					'panel'         => 'medplus_front_page_panel'
				) 
				);




				$wp_customize->add_setting( 'medplus_about_section_title_setting',
				array(
					'default'           => __( 'About Us', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_about_section_title_setting', 
				array(
					'type'        => 'text',
					'priority'    => 10,
					'section'     => 'front_page__section_about',
					'label'       => 'About Us Title',
					'description' => '',
				) 
				);


				// Gallary SubTitle

				$wp_customize->add_setting( 'medplus_about_section_subtitle_setting',
				array(
					'default'           => __( 'About Section SubTitle', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for 
			$wp_customize->add_control( 'medplus_about_section_subtitle_setting', 
				array(
					'type'        => 'textarea',
					'priority'    => 20,
					'section'     => 'front_page__section_about',
					'label'       => 'About Us Section SubTitle',
					'description' => '',
				) 
				);


				// About us Control

				$wp_customize->add_setting( 'medplus_about_section_doctor_counter_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for 
			$wp_customize->add_control( 'medplus_about_section_doctor_counter_setting', 
				array(
					'type'        => 'number',
					'priority'    => 20,
					'section'     => 'front_page__section_about',
					'label'       => 'Number of Doctors',
					'description' => '',
				) 
				);



				// counter for Nurses

				$wp_customize->add_setting( 'medplus_about_section_nurse_counter_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for 
			$wp_customize->add_control( 'medplus_about_section_nurse_counter_setting', 
				array(
					'type'        => 'number',
					'priority'    => 30,
					'section'     => 'front_page__section_about',
					'label'       => 'Number of Nurse',
					'description' => '',
				) 
				);

				// Patient

				$wp_customize->add_setting( 'medplus_about_section_patient_counter_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for 
			$wp_customize->add_control( 'medplus_about_section_patient_counter_setting', 
				array(
					'type'        => 'number',
					'priority'    => 40,
					'section'     => 'front_page__section_about',
					'label'       => 'Number of Patient',
					'description' => '',
				) 
				);


				$wp_customize->add_setting( 'medplus_about_section_case_studies_counter_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);

			// Control for 
			$wp_customize->add_control( 'medplus_about_section_case_studies_counter_setting', 
				array(
					'type'        => 'number',
					'priority'    => 50,
					'section'     => 'front_page__section_about',
					'label'       => 'Number of Case Studies',
					'description' => '',
				) 
				);


				// About us images

				
				$wp_customize->add_setting( 'medplus_about_image_one_setting', array(
					'default'  => ''
				));
			// Gallery section Controller
				$wp_customize->add_control(
					new WP_Customize_Image_Control(
						$wp_customize,
						'About Image One',
						array(
							'label'      => __( 'About Us Image One', 'medplus' ),
							'priority'    => 60,
							'section'    => 'front_page__section_about',
							'settings'   => 'medplus_about_image_one_setting',
						
						)
					)
				);



				$wp_customize->add_setting( 'medplus_about_image_two_setting', array(
					'default'  => ''
				));
			// Gallery section Controller
				$wp_customize->add_control(
					new WP_Customize_Image_Control(
						$wp_customize,
						'About Image two',
						array(
							'label'      => __( 'About Us Image Two', 'medplus' ),
							'priority'    => 60,
							'section'    => 'front_page__section_about',
							'settings'   => 'medplus_about_image_two_setting',
						
						)
					)
				);


				$wp_customize->add_setting( 'medplus_about_image_three_setting', array(
					'default'  => ''
				));
			// Gallery section Controller
				$wp_customize->add_control(
					new WP_Customize_Image_Control(
						$wp_customize,
						'About Image Three',
						array(
							'label'      => __( 'About Us Image Three', 'medplus' ),
							'priority'    => 70,
							'section'    => 'front_page__section_about',
							'settings'   => 'medplus_about_image_three_setting',
						
						)
					)
				);


				//************************************************************/
					// Map Customizer
				// ***********************************************************/

				$wp_customize->add_section( 'front_page__section_map', 
				array(
					'title'         => __( 'Map Section', 'medplus' ),
					'priority'      => 3,
					'panel'         => 'medplus_front_page_panel'
				) 
				);


				$wp_customize->add_setting( 'medplus_map_url_setting',
				array(
					'default'           => __( 'Please Enter Your Map URL', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_map_url_setting', 
				array(
					'type'        => 'url',
					'priority'    => 10,
					'section'     => 'front_page__section_map',
					'label'       => 'Map url',
					'description' => '',
				) 
				);


					//************************************************************/
					// Footer Contact Customizer
				// ***********************************************************/

				$wp_customize->add_section( 'front_page__section_footer', 
				array(
					'title'         => __( 'Footer Address Section', 'medplus' ),
					'priority'      => 3,
					'panel'         => 'medplus_front_page_panel'
				) 
				);


				$wp_customize->add_setting( 'medplus_footer_contact_address_setting',
				array(
					'default'           => __( 'Please Enter Your Address', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_contact_address_setting', 
				array(
					'type'        => 'text',
					'priority'    => 10,
					'section'     => 'front_page__section_footer',
					'label'       => 'Address',
					'description' => 'Write street, Plaza,City and Country',
				) 
				);

				$wp_customize->add_setting( 'medplus_footer_contact_phone_setting',
				array(
					'default'           => __( 'Please Enter Your Pnone', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_contact_phone_setting', 
				array(
					'type'        => 'text',
					'priority'    => 40,
					'section'     => 'front_page__section_footer',
					'label'       => 'Address',
					'description' => 'Write down Phone number',
				) 
				);


				$wp_customize->add_setting( 'medplus_footer_contact_email_setting',
				array(
					'default'           => __( 'Please Enter Your Address', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_contact_email_setting', 
				array(
					'type'        => 'text',
					'priority'    => 50,
					'section'     => 'front_page__section_footer',
					'label'       => 'Address',
					'description' => 'Write Email Address',
				) 
				);


							//************************************************************/
					// Footer Working hours Customizer
				// ***********************************************************/

				$wp_customize->add_section( 'front_page__section_working_footer', 
					array(
						'title'         => __( 'Footer Working Hours Section', 'medplus' ),
						'priority'      => 3,
						'panel'         => 'medplus_front_page_panel'
					) 
				);


				$wp_customize->add_setting( 'medplus_footer_weekdays_setting',
					array(
						'default'           => __( '', 'medplus' ),
						// 'sanitize_callback' => 'sanitize_text_field',
						'transport'         => 'refresh',
					)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_weekdays_setting', 
					array(
						'type'        => 'textarea',
						'priority'    => 10,
						'section'     => 'front_page__section_working_footer',
						'label'       => 'Working days of the Week',
						'description' => 'Please write avialability days',
					) 
				);


				$wp_customize->add_setting( 'medplus_footer_start_time_setting',
					array(
						'default'           => __( '', 'medplus' ),
						// 'sanitize_callback' => 'sanitize_text_field',
						'transport'         => 'refresh',
					)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_start_time_setting', 
					array(
						'type'        => 'time',
						'priority'    => 10,
						'section'     => 'front_page__section_working_footer',
						'label'       => 'Day start timing',
						'description' => 'Please select start timing',
					) 
				);
				$wp_customize->add_setting( 'medplus_footer_end_time_setting',
					array(
						'default'           => __( '', 'medplus' ),
						// 'sanitize_callback' => 'sanitize_text_field',
						'transport'         => 'refresh',
					)
				);
	
				// Control for Copyright text
				$wp_customize->add_control( 'medplus_footer_end_time_setting', 
					array(
						'type'        => 'time',
						'priority'    => 10,
						'section'     => 'front_page__section_working_footer',
						'label'       => 'Day End timing',
						'description' => 'Please select closing timing',
					) 
				);


				// -----------------------------------------------------------
				// Saturday
				// ------------------------------------------------------

				$wp_customize->add_setting( 'medplus_footer_saturday_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_saturday_setting', 
				array(
					'type'        => 'textarea',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Working Time Staturday',
					'description' => '',
				) 
			);


			$wp_customize->add_setting( 'medplus_footer_saturday_start_time_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_saturday_start_time_setting', 
				array(
					'type'        => 'time',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Day start timing',
					'description' => '',
				) 
			);
			$wp_customize->add_setting( 'medplus_footer_saturday_end_time_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_saturday_end_time_setting', 
				array(
					'type'        => 'time',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Day End timing',
					'description' => 'Please select closing timing',
				) 
			);



			// -----------------------------------------------------------
				// Sunday
				// ------------------------------------------------------

				$wp_customize->add_setting( 'medplus_footer_sunday_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_sunday_setting', 
				array(
					'type'        => 'textarea',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Working Time Sunday',
					'description' => '',
				) 
			);


			$wp_customize->add_setting( 'medplus_footer_sunday_start_time_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_sunday_start_time_setting', 
				array(
					'type'        => 'time',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Day start timing',
					'description' => '',
				) 
			);
			$wp_customize->add_setting( 'medplus_footer_sunday_end_time_setting',
				array(
					'default'           => __( '', 'medplus' ),
					// 'sanitize_callback' => 'sanitize_text_field',
					'transport'         => 'refresh',
				)
			);

			// Control for Copyright text
			$wp_customize->add_control( 'medplus_footer_sunday_end_time_setting', 
				array(
					'type'        => 'time',
					'priority'    => 10,
					'section'     => 'front_page__section_working_footer',
					'label'       => 'Day End timing',
					'description' => 'Please select closing timing',
				) 
			);





	

	}
} // End of if function_exists( 'medplus_theme_customize_register' ).
add_action( 'customize_register', 'medplus_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'medplus_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function medplus_customize_preview_js() {
		wp_enqueue_script(
			'medplus_customizer',
			get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ),
			'20130508',
			true
		);
	}
}
add_action( 'customize_preview_init', 'medplus_customize_preview_js' );

/**
 * Loads javascript for conditionally showing customizer controls.
 */
if ( ! function_exists( 'medplus_customize_controls_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function medplus_customize_controls_js() {
		wp_enqueue_script(
			'medplus_customizer',
			get_template_directory_uri() . '/js/customizer-controls.js',
			array( 'customize-preview' ),
			'20130508',
			true
		);
	}
}
add_action( 'customize_controls_enqueue_scripts', 'medplus_customize_controls_js' );



if ( ! function_exists( 'medplus_default_navbar_type' ) ) {
	/**
	 * Overrides the responsive navbar type for Bootstrap 4
	 *
	 * @param string $current_mod
	 * @return string
	 */
	function medplus_default_navbar_type( $current_mod ) {

		if ( 'bootstrap5' !== get_theme_mod( 'medplus_bootstrap_version' ) ) {
			$current_mod = 'collapse';
		}

		return $current_mod;
	}
}
add_filter( 'theme_mod_medplus_navbar_type', 'medplus_default_navbar_type', 20 );
