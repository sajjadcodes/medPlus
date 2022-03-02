<?php



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
