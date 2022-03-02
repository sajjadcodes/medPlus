<?php



				

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