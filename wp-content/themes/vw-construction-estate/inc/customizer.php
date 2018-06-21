<?php
/**
 * VW Construction Estate Theme Customizer
 *
 * @package VW Construction Estate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_construction_estate_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_construction_estate_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-construction-estate' ),
	    'description' => __( 'Description of what this panel does.', 'vw-construction-estate' ),
	) );

	$wp_customize->add_section( 'vw_construction_estate_left_right', array(
    	'title'      => __( 'General Settings', 'vw-construction-estate' ),
		'priority'   => 30,
		'panel' => 'vw_construction_estate_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_construction_estate_theme_options',array(
	        'default' =>  __( 'One Column', 'vw-construction-estate' ),
	        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_construction_estate_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'vw-construction-estate' ),
	        'section' => 'vw_construction_estate_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','vw-construction-estate'),
	            'Right Sidebar' => __('Right Sidebar','vw-construction-estate'),
	            'One Column' => __('One Column','vw-construction-estate'),
	            'Three Columns' => __('Three Columns','vw-construction-estate'),
	            'Four Columns' => __('Four Columns','vw-construction-estate'),
	            'Grid Layout' => __('Grid Layout','vw-construction-estate')
	        ),
	) );

	 $font_array = array(
        '' => __( 'No Fonts', 'vw-construction-estate' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-construction-estate' ),
        'Acme' => __( 'Acme', 'vw-construction-estate' ),
        'Anton' => __( 'Anton', 'vw-construction-estate' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-construction-estate' ),
        'Arimo' => __( 'Arimo', 'vw-construction-estate' ),
        'Arsenal' => __( 'Arsenal', 'vw-construction-estate' ),
        'Arvo' => __( 'Arvo', 'vw-construction-estate' ),
        'Alegreya' => __( 'Alegreya', 'vw-construction-estate' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-construction-estate' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-construction-estate' ),
        'Bangers' => __( 'Bangers', 'vw-construction-estate' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-construction-estate' ),
        'Bad Script' => __( 'Bad Script', 'vw-construction-estate' ),
        'Bitter' => __( 'Bitter', 'vw-construction-estate' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-construction-estate' ),
        'BenchNine' => __( 'BenchNine', 'vw-construction-estate' ),
        'Cabin' => __( 'Cabin', 'vw-construction-estate' ),
        'Cardo' => __( 'Cardo', 'vw-construction-estate' ),
        'Courgette' => __( 'Courgette', 'vw-construction-estate' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-construction-estate' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-construction-estate' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-construction-estate' ),
        'Cuprum' => __( 'Cuprum', 'vw-construction-estate' ),
        'Cookie' => __( 'Cookie', 'vw-construction-estate' ),
        'Chewy' => __( 'Chewy', 'vw-construction-estate' ),
        'Days One' => __( 'Days One', 'vw-construction-estate' ),
        'Dosis' => __( 'Dosis', 'vw-construction-estate' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-construction-estate' ),
        'Economica' => __( 'Economica', 'vw-construction-estate' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-construction-estate' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-construction-estate' ),
        'Francois One' => __( 'Francois One', 'vw-construction-estate' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-construction-estate' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-construction-estate' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-construction-estate' ),
        'Handlee' => __( 'Handlee', 'vw-construction-estate' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-construction-estate' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-construction-estate' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-construction-estate' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-construction-estate' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-construction-estate' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-construction-estate' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-construction-estate' ),
        'Kanit' => __( 'Kanit', 'vw-construction-estate' ),
        'Lobster' => __( 'Lobster', 'vw-construction-estate' ),
        'Lato' => __( 'Lato', 'vw-construction-estate' ),
        'Lora' => __( 'Lora', 'vw-construction-estate' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-construction-estate' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-construction-estate' ),
        'Merriweather' => __( 'Merriweather', 'vw-construction-estate' ),
        'Monda' => __( 'Monda', 'vw-construction-estate' ),
        'Montserrat' => __( 'Montserrat', 'vw-construction-estate' ),
        'Muli' => __( 'Muli', 'vw-construction-estate' ),
        'Marck Script' => __( 'Marck Script', 'vw-construction-estate' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-construction-estate' ),
        'Open Sans' => __( 'Open Sans', 'vw-construction-estate' ),
        'Overpass' => __( 'Overpass', 'vw-construction-estate' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-construction-estate' ),
        'Oxygen' => __( 'Oxygen', 'vw-construction-estate' ),
        'Orbitron' => __( 'Orbitron', 'vw-construction-estate' ),
        'Patua One' => __( 'Patua One', 'vw-construction-estate' ),
        'Pacifico' => __( 'Pacifico', 'vw-construction-estate' ),
        'Padauk' => __( 'Padauk', 'vw-construction-estate' ),
        'Playball' => __( 'Playball', 'vw-construction-estate' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-construction-estate' ),
        'PT Sans' => __( 'PT Sans', 'vw-construction-estate' ),
        'Philosopher' => __( 'Philosopher', 'vw-construction-estate' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-construction-estate' ),
        'Poiret One' => __( 'Poiret One', 'vw-construction-estate' ),
        'Quicksand' => __( 'Quicksand', 'vw-construction-estate' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-construction-estate' ),
        'Raleway' => __( 'Raleway', 'vw-construction-estate' ),
        'Rubik' => __( 'Rubik', 'vw-construction-estate' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-construction-estate' ),
        'Russo One' => __( 'Russo One', 'vw-construction-estate' ),
        'Righteous' => __( 'Righteous', 'vw-construction-estate' ),
        'Slabo' => __( 'Slabo', 'vw-construction-estate' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-construction-estate' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-construction-estate'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-construction-estate' ),
        'Sacramento' => __( 'Sacramento', 'vw-construction-estate' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-construction-estate' ),
        'Tangerine' => __( 'Tangerine', 'vw-construction-estate' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-construction-estate' ),
        'VT323' => __( 'VT323', 'vw-construction-estate' ),
        'Varela Round' => __( 'Varela Round', 'vw-construction-estate' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-construction-estate' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-construction-estate' ),
        'Volkhov' => __( 'Volkhov', 'vw-construction-estate' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-construction-estate' )
    );

	//Typography
	$wp_customize->add_section( 'vw_construction_estate_typography', array(
    	'title'      => __( 'Typography', 'vw-construction-estate' ),
		'priority'   => 30,
		'panel' => 'vw_construction_estate_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_paragraph_color', array(
		'label' => __('Paragraph Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_paragraph_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'Paragraph Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_construction_estate_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_atag_color', array(
		'label' => __('"a" Tag Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_atag_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( '"a" Tag Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_li_color', array(
		'label' => __('"li" Tag Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_li_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( '"li" Tag Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h1_color', array(
		'label' => __('H1 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h1_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'H1 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h1_font_size',array(
		'label'	=> __('H1 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h2_color', array(
		'label' => __('h2 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h2_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'h2 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h2_font_size',array(
		'label'	=> __('h2 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h3_color', array(
		'label' => __('h3 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h3_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'h3 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h3_font_size',array(
		'label'	=> __('h3 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h4_color', array(
		'label' => __('h4 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h4_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'h4 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h4_font_size',array(
		'label'	=> __('h4 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h5_color', array(
		'label' => __('h5 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h5_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'h5 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h5_font_size',array(
		'label'	=> __('h5 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'vw_construction_estate_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_construction_estate_h6_color', array(
		'label' => __('h6 Color', 'vw-construction-estate'),
		'section' => 'vw_construction_estate_typography',
		'settings' => 'vw_construction_estate_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('vw_construction_estate_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_construction_estate_h6_font_family', array(
	    'section'  => 'vw_construction_estate_typography',
	    'label'    => __( 'h6 Fonts','vw-construction-estate'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('vw_construction_estate_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_h6_font_size',array(
		'label'	=> __('h6 Font Size','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_typography',
		'setting'	=> 'vw_construction_estate_h6_font_size',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('vw_construction_estate_topbar_header',array(
		'title'	=> __('Social Icon Section','vw-construction-estate'),
		'description'	=> __('Add Header Content here','vw-construction-estate'),
		'priority'	=> null,
		'panel' => 'vw_construction_estate_panel_id',
	));

	$wp_customize->add_setting('vw_construction_estate_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_construction_estate_facebook_url',array(
		'label'	=> __('Add Facebook link','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_topbar_header',
		'setting'	=> 'vw_construction_estate_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_construction_estate_twitter_url',array(
		'label'	=> __('Add Twitter link','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_topbar_header',
		'setting'	=> 'vw_construction_estate_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_construction_estate_insta_url',array(
		'label'	=> __('Add Instagram link','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_topbar_header',
		'setting'	=> 'vw_construction_estate_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_construction_estate_linkdin_url',array(
		'label'	=> __('Add Linkdin link','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_topbar_header',
		'setting'	=> 'vw_construction_estate_linkdin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_construction_estate_youtube_url',array(
		'label'	=> __('Add Youtube link','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_topbar_header',
		'setting'	=> 'vw_construction_estate_youtube_url',
		'type'		=> 'url'
	));

	//Top Bar(topbar)
	$wp_customize->add_section('vw_construction_estate_contact',array(
		'title'	=> __('Contact Us','vw-construction-estate'),
		'description'	=> __('Add contact us here','vw-construction-estate'),
		'priority'	=> null,
		'panel' => 'vw_construction_estate_panel_id',
	));

	$wp_customize->add_setting('vw_construction_estate_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_location',array(
		'label'	=> __('Location','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_location1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_location1',array(
		'label'	=> __('Other Location','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_call',array(
		'label'	=> __('Phone Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_call1',array(
		'label'	=> __('Phone Number','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_mail',array(
		'label'	=> __('Email Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_mail1',array(
		'label'	=> __('Mail Address','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_time',array(
		'label'	=> __('Contact Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_time1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_time1',array(
		'label'	=> __('Working Time','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'vw_construction_estate_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-construction-estate' ),
		'priority'   => 30,
		'panel' => 'vw_construction_estate_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_construction_estate_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'vw_construction_estate_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-construction-estate' ),
			'section'  => 'vw_construction_estate_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Consultant
	$wp_customize->add_section('vw_construction_estate_consultant',array(
		'title'	=> __('Consultant Section','vw-construction-estate'),
		'description'	=> __('Add Consultant sections below.','vw-construction-estate'),
		'panel' => 'vw_construction_estate_panel_id',
	));

	$wp_customize->add_setting('vw_construction_estate_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_number',array(
		'label'	=> __('Contact Number','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_title',array(
		'label'	=> __('Contact Title','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_content',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_content',array(
		'label'	=> __('Contact content','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_link',array(
		'label'	=> __('Button Url','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_text',array(
		'label'	=> __('Button Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));
	
	//About
	$wp_customize->add_section('vw_construction_estate_about',array(
		'title'	=> __('About Section','vw-construction-estate'),
		'description'	=> __('Add About sections below.','vw-construction-estate'),
		'panel' => 'vw_construction_estate_panel_id',
	));

	$post_list = get_posts();
	$i = 0;
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('vw_construction_estate_about_setting',array(
		'sanitize_callback' => 'vw_construction_estate_sanitize_choices',
	));
	$wp_customize->add_control('vw_construction_estate_about_setting',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','vw-construction-estate'),
		'section' => 'vw_construction_estate_about',
	));

	//footer
	$wp_customize->add_section('vw_construction_estate_footer_section',array(
		'title'	=> __('Footer Text','vw-construction-estate'),
		'description'	=> __('Add some text for footer like copyright etc.','vw-construction-estate'),
		'priority'	=> null,
		'panel' => 'vw_construction_estate_panel_id',
	));
	
	$wp_customize->add_setting('vw_construction_estate_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_construction_estate_footer_copy',array(
		'label'	=> __('Copyright Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_footer_section',
		'type'		=> 'text'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'vw_construction_estate_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_construction_estate_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Construction_Estate_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Construction_Estate_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'VW Construction Pro', 'vw-construction-estate' ),
					'pro_text' => esc_html__( 'Upgarde Pro',         'vw-construction-estate' ),
					'pro_url'  => 'https://www.vwthemes.com/themes/premium-construction-wordpress-theme/'
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new VW_Construction_Estate_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Documentation', 'vw-construction-estate' ),
					'pro_text' => esc_html__( 'Docs', 'vw-construction-estate' ),
					'pro_url'  => admin_url( 'themes.php?page=vw_construction_estate_guide' )
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-construction-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-construction-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
vw_construction_estate_customize::get_instance();