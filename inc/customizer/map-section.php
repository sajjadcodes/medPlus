<?php


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
