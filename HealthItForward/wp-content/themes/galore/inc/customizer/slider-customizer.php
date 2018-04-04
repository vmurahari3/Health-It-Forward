<?php
/**
 * Slider Customizer Options
 *
 * @package galore
 */

// Add slider section
$wp_customize->add_section( 'galore_slider_section', array(
	'title'             => esc_html__( 'Slider Section','galore' ),
	'description'       => esc_html__( 'Slider Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// slider menu enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[enable_slider]', array(
	'default'           => galore_theme_option('enable_slider'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[enable_slider]', array(
	'label'             => esc_html__( 'Enable Slider', 'galore' ),
	'section'           => 'galore_slider_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// slider social menu enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[slider_entire_site]', array(
	'default'           => galore_theme_option('slider_entire_site'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[slider_entire_site]', array(
	'label'             => esc_html__( 'Show Entire Site', 'galore' ),
	'section'           => 'galore_slider_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// slider arrow control enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[slider_arrow]', array(
	'default'           => galore_theme_option('slider_arrow'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[slider_arrow]', array(
	'label'             => esc_html__( 'Show Arrow Controller', 'galore' ),
	'section'           => 'galore_slider_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

for ( $i = 1; $i <= 5; $i++ ) :

	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'galore_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'galore_sanitize_page_post',
	) );

	$wp_customize->add_control( new Galore_Dropdown_Chosen_Control( $wp_customize, 'galore_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'galore' ), $i ),
		'section'           => 'galore_slider_section',
		'choices'			=> galore_page_choices(),
	) ) );
endfor;