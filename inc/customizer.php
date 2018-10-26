<?php
/**
 * vicem Theme Customizer.
 *
 * @package vicem
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vicem_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    $wp_customize->add_section( 'my_social_settings', array(
			'title'    => __('Social Media Icons', 'vicem'),
			'priority' => 1,
            'description' => __('This is the Social Media Section.Add URL to display Social Icons in footer.')
	) );
    
    $wp_customize->add_setting( 'Facebook', array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( 'Facebook', array(
				'label'    => __( "Facebook url:", 'vicem' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => 1,
		) );
    $wp_customize->add_setting( 'Google_plus', array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( 'Google_plus', array(
				'label'    => __( "Google plus url:", 'vicem' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => 2,
		) );
     $wp_customize->add_setting( 'Linkedin', array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control('Linkedin', array(
				'label'    => __( "Linkedin url:", 'vicem' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => 3,
		) );
     $wp_customize->add_setting( 'Twitter', array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( 'Twitter', array(
				'label'    => __( "Twitter url:", 'vicem' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => 4,
		) );
		$wp_customize->add_setting( 'Youtube', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
	) );

	     $wp_customize->add_control( 'Youtube', array(
			'label'    => __( "Youtube url:", 'vicem' ),
			'section'  => 'my_social_settings',
			'type'     => 'text',
			'priority' => 5,
	) );
	    $wp_customize->add_setting( 'Linkedin', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw'
    ) );

        $wp_customize->add_control( 'Linkedin', array(
		'label'    => __( "Linkedin url:", 'vicem' ),
		'section'  => 'my_social_settings',
		'type'     => 'text',
		'priority' => 6,
    ) );
        $wp_customize->add_setting( 'Pinterest', array(
	    'type'              => 'theme_mod',
	    'capability'        => 'edit_theme_options',
	    'sanitize_callback' => 'esc_url_raw'
    ) );

	    $wp_customize->add_control( 'Pinterest', array(
	    'label'    => __( "Pinterest url:", 'vicem' ),
	    'section'  => 'my_social_settings',
	    'type'     => 'text',
	    'priority' => 7,
	) );
	    $wp_customize->add_setting( 'Instagram', array(
	    'type'              => 'theme_mod',
	    'capability'        => 'edit_theme_options',
	    'sanitize_callback' => 'esc_url_raw'
    ) );

	    $wp_customize->add_control( 'Instagram', array(
	    'label'    => __( "Instagram url:", 'vicem' ),
	    'section'  => 'my_social_settings',
	    'type'     => 'text',
	    'priority' => 7,
	) );




}
add_action( 'customize_register', 'vicem_customize_register' );

