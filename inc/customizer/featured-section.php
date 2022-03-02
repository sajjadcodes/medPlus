<?php 


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
            'priority'    => 20,
            'section'     => 'front_page_features_section',
            'label'       => 'Featured two',
            'description' => '',
        ) 
        );

        // Control feature one controller
        $wp_customize->add_control( 'medplus_hero_freatue_three_text_setting', 
        array(
            'type'        => 'text',
            'priority'    => 30,
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
            'Feature Icon One',
            array(
                'label'      => __( 'Featured One Icon', 'medplus' ),
                'section'    => 'front_page_features_section',
                'settings'   => 'medplus_featured_icon_one_setting',
                'priority'    => 40,
            
            )
        )
    );

    $wp_customize->add_setting( 'medplus_featured_icon_two_setting', array(
        'default'  => ''
    ));


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'Feature Icon Two',
            array(
                'label'      => __( 'Featured Two Icon', 'medplus' ),
                'section'    => 'front_page_features_section',
                'settings'   => 'medplus_featured_icon_two_setting',
                'priority'    => 50,
            
            )
        )
    );

    $wp_customize->add_setting( 'medplus_featured_icon_three_setting', array(
        'default'  => ''
    ));


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'Feature Icon Three',
            array(
                'label'      => __( 'Featured Three Icon', 'medplus' ),
                'section'    => 'front_page_features_section',
                'settings'   => 'medplus_featured_icon_three_setting',
                'priority'    => 60,
            
            )
        )
    );

