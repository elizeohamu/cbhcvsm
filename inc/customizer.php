<?php

function cvsm_customizer( $cvsm_customize ){ 

    //
    // Header E-mail
    //
    $cvsm_customize->add_section(
        'sec_header', array(
            'title' => __('Header E-mail', 'cvsm'),
            'description' => __('Header E-mail', 'cvsm')
        )
    );
    $cvsm_customize->add_setting(
        'set_header_email', array(
            'type' => 'theme_mod',
            'default' => 'E-mail',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_header_email', array(
            'label' => __('E-mail', 'cvsm'),
            'description' => __('Type your e-mail', 'cvsm'),
            'section' => 'sec_header',
            'type' => 'text'
        )
    );

    //
    // Banner
    //
    $cvsm_customize->add_section(
        'sec_banner', array(
            'title' => __('Banner', 'cvsm'),
            'description' => __('Banner', 'cvsm')
        )
    );
    $cvsm_customize->add_setting(
        'set_banner', array(
            'type' => 'theme_mod',
            'default' => 'Shortcode',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_banner', array(
            'label' => __('Shortcode', 'cvsm'),
            'description' => __('Insert your shortcode', 'cvsm'),
            'section' => 'sec_banner',
            'type' => 'text'
        )
    );


    //
    // Footer Contact
    //
    $cvsm_customize->add_section(
        'sec_contact', array(
            'title' => __('Footer Contact', 'cvsm'),
            'description' => __('Footer Contact Section', 'cvsm')
        )
    );
    //Title
    $cvsm_customize->add_setting(
        'set_contact_title', array(
            'type' => 'theme_mod',
            'default' => 'Title',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_contact_title', array(
            'label' => __('Title', 'cvsm'),
            'description' => __('Type your title', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );
    //Text
    $cvsm_customize->add_setting(
        'set_contact_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_contact_text', array(
            'label' => __('Text', 'cvsm'),
            'description' => __('Type your text', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'textarea'
        )
    );
    //Logo
    $cvsm_customize->add_setting(
        'set_logo', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'logo_control', array(
        'label' => __('Upload Logo', 'cvsm'),
        'priority' => 1,
        'section' => 'sec_contact',
        'settings' => 'set_logo',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );
    //Social
    $cvsm_customize->add_setting(
        'set_facebook_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cvsm_customize->add_control(
        'set_facebook_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your Facebook link', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cvsm_customize->add_setting(
        'set_instagram_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cvsm_customize->add_control(
        'set_instagram_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your Instagram link', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cvsm_customize->add_setting(
        'set_twitter_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cvsm_customize->add_control(
        'set_twitter_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your Twitter link', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cvsm_customize->add_setting(
        'set_linkedin_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cvsm_customize->add_control(
        'set_linkedin_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your Linkedin link', 'cvsm'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    //
    // Utilities Section
    //
    $cvsm_customize->add_section(
        'sec_utilities', array(
            'title' => __('Section Utilities', 'cvsm'),
            'description' => __('Utilities Section', 'cvsm')
        )
    );
    //Utilities 1
    $cvsm_customize->add_setting(
        'set_utilities_text_1', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_text_1', array(
            'label' => __('Events', 'cvsm'),
            'description' => __('Type your text', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cvsm_customize->add_setting(
        'set_utilities_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_link_1', array(
            'label' => __('Link for Events', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    //Utilities 2
    $cvsm_customize->add_setting(
        'set_utilities_text_2', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_text_2', array(
            'label' => __('Meets', 'cvsm'),
            'description' => __('Type your text', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cvsm_customize->add_setting(
        'set_utilities_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_link_2', array(
            'label' => __('Link for Meets', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    //Utilities 3
    $cvsm_customize->add_setting(
        'set_utilities_text_3', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_text_3', array(
            'label' => __('Documents', 'cvsm'),
            'description' => __('Type your text', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cvsm_customize->add_setting(
        'set_utilities_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_utilities_link_3', array(
            'label' => __('Link for Documents', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    
    //
    // About
    //
    $cvsm_customize->add_section(
        'sec_about', array(
            'title' => __('Section: About', 'cvsm'),
            'description' => __('About Section', 'cvsm')
        )
    );
    $cvsm_customize->add_setting(
        'set_about_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_about_text', array(
            'label' => __('Text', 'cvsm'),
            'description' => __('Type your text', 'cvsm'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    ); 
    $cvsm_customize->add_setting(
        'set_about_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_about_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_about',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    $cvsm_customize->add_setting(
        'set_about_img', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_control', array(
        'label' => __('Upload Image', 'cvsm'),        
        'section' => 'sec_about',
        'settings' => 'set_about_img',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Image', 'cvsm'),
                    'remove' => __('Remove Image', 'cvsm'),
                    'change' => __('Change Image', 'cvsm'),
                    )
        ))
    );

    //
    // Comites
    //
    $cvsm_customize->add_section(
        'sec_comites', array(
            'title' => __('Section: Comitês', 'cvsm'),
            'description' => __('Comitês Section', 'cvsm')
        )
    );
    //Comite 1
    $cvsm_customize->add_setting(
        'set_comites_title_1', array(
            'type' => 'theme_mod',
            'default' => 'Title 1',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_comites_title_1', array(
            'label' => __('Title 1', 'cvsm'),
            'description' => __('Type your title', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_comites_link_1', array(
            'label' => __('Link for Logo 1', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_comite_1', array(
        'label' => __('Upload Logo 1', 'cvsm'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );
    //Comite 2
    $cvsm_customize->add_setting(
        'set_comites_title_2', array(
            'type' => 'theme_mod',
            'default' => 'Title 2',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_comites_title_2', array(
            'label' => __('Title 2', 'cvsm'),
            'description' => __('Type your title', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_comites_link_2', array(
            'label' => __('Link for Logo 2', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_comite_2', array(
        'label' => __('Upload Logo 2', 'cvsm'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );
    //Comite 3
    $cvsm_customize->add_setting(
        'set_comites_title_3', array(
            'type' => 'theme_mod',
            'default' => 'Title 3',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_comites_title_3', array(
            'label' => __('Title 3', 'cvsm'),
            'description' => __('Type your title', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_comites_link_3', array(
            'label' => __('Link for Logo 3', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    $cvsm_customize->add_setting(
        'set_comites_img_3', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_comite_3', array(
        'label' => __('Upload Logo 3', 'cvsm'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_3',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );

    //
    // Partners
    //
    $cvsm_customize->add_section(
        'sec_partners', array(
            'title' => __('Section: Partners', 'cvsm'),
            'description' => __('Partners Section', 'cvsm')
        )
    );

    $cvsm_customize->add_setting(
        'set_partners_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_partners_1', array(
        'label' => __('Upload Logo 1', 'cvsm'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );

    $cvsm_customize->add_setting(
        'set_partners_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cvsm_customize->add_control( new WP_Customize_Image_Control( $cvsm_customize, 'image_partners_2', array(
        'label' => __('Upload Logo 2', 'cvsm'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cvsm'),
                    'remove' => __('Remove Logo', 'cvsm'),
                    'change' => __('Change Logo', 'cvsm'),
                    )
        ))
    );
    $cvsm_customize->add_setting(
        'set_partners_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cvsm_customize->add_control(
        'set_partners_link', array(
            'label' => __('Link for Page', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_partners',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );

    //
    // News
    //
    $cvsm_customize->add_section(
        'sec_news', array(
            'title' => __('News Link', 'cvsm'),
            'description' => __('News Link', 'cvsm')
        )
    );
    $cvsm_customize->add_setting(
        'set_news_link', array(
            'type' => 'theme_mod',
            'default' => 'Link',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cvsm_customize->add_control(
        'set_news_link', array(
            'label' => __('Link', 'cvsm'),
            'description' => __('Type your link', 'cvsm'),
            'section' => 'sec_news',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cvsm' ),
            )
        )
    );
    
}

add_action( 'customize_register', 'cvsm_customizer' );