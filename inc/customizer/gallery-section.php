<?php



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
