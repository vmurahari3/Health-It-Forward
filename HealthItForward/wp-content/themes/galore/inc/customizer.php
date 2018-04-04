<?php
/**
 * Galore Theme Customizer
 *
 * @package galore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function galore_customize_register( $wp_customize ) {
	// Load custom control functions.
	require get_template_directory() . '/inc/customizer/controls.php';

	// Load validation functions.
	require get_template_directory() . '/inc/customizer/validate.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'galore_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'galore_customize_partial_blogdescription',
		) );
	}

	// Register custom section types.
	$wp_customize->register_section_type( 'Galore_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Galore_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Galore Pro', 'galore' ),
				'pro_text' => esc_html__( 'Buy Pro', 'galore' ),
				'pro_url'  => 'http://www.sharkthemes.com/downloads/galore-pro/',
				'priority'  => 10,
			)
		)
	);

	// Add panel for common Home Page Settings
	$wp_customize->add_panel( 'galore_theme_options_panel' , array(
	    'title'      => esc_html__( 'Theme Options','galore' ),
	    'description'=> esc_html__( 'Galore Theme Options.', 'galore' ),
	    'priority'   => 100,
	) );

	// topbar settings
	require get_template_directory() . '/inc/customizer/topbar-customizer.php';

	// slider settings
	require get_template_directory() . '/inc/customizer/slider-customizer.php';

	// footer settings
	require get_template_directory() . '/inc/customizer/footer-customizer.php';
	
	// blog/archive settings
	require get_template_directory() . '/inc/customizer/blog-customizer.php';

	// single settings
	require get_template_directory() . '/inc/customizer/single-customizer.php';

	// page settings
	require get_template_directory() . '/inc/customizer/page-customizer.php';

	// global settings
	require get_template_directory() . '/inc/customizer/global-customizer.php';

}
add_action( 'customize_register', 'galore_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function galore_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function galore_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function galore_customize_preview_js() {
	wp_enqueue_script( 'galore-customizer', get_template_directory_uri() . '/assets/js/customizer' . galore_min() . '.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'galore_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function galore_customize_control_js() {
	wp_enqueue_script( 'media-upload' );
   	wp_enqueue_media();
   	
	// Choose from select jquery.
	wp_enqueue_style( 'jquery-chosen', get_template_directory_uri() . '/assets/css/chosen' . galore_min() . '.css' );
	wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen' . galore_min() . '.js', array( 'jquery' ), '1.4.2', true );

	// admin script
	wp_enqueue_style( 'galore-admin-style', get_template_directory_uri() . '/assets/css/admin' . galore_min() . '.css' );
	wp_enqueue_script( 'galore-admin-script', get_template_directory_uri() . '/assets/js/admin' . galore_min() . '.js', array( 'jquery', 'jquery-chosen' ), '1.0.0', true );

	wp_enqueue_style( 'galore-customizer-style', get_template_directory_uri() . '/assets/css/customizer' . galore_min() . '.css' );
	wp_enqueue_script( 'galore-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls' . galore_min() . '.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'galore_customize_control_js' );
