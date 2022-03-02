<?php


				// Text Options Section Inside Theme
				$wp_customize->add_section( 'front_page_hero_section', 
				array(
					'title'         => __( 'Hero Section', 'medplus' ),
					'priority'      => 1,
					'panel'         => 'medplus_front_page_panel'
				) 
				);

				// Hero section headline settings
			$wp_customize->add_setting( 'medplus_hero_headline_text_setting',
			array(
				'default'           => __( 'We Provide High Solutions For Your Health', 'medplus' ),
				// 'sanitize_callback' => 'sanitize_text_field',
				'transport'         => 'refresh',
			)
			);

			// Hero section headline controller
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

			