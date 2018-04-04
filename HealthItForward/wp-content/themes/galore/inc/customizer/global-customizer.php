<?php
/**
 * Global Customizer Options
 *
 * @package galore
 */

// Add Global section
$wp_customize->add_section( 'galore_global_section', array(
	'title'             => esc_html__( 'Global Setting','galore' ),
	'description'       => esc_html__( 'Global Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// site layout setting and control.
$wp_customize->add_setting( 'galore_theme_options[site_layout]', array(
	'sanitize_callback'   => 'galore_sanitize_select',
	'default'             => galore_theme_option('site_layout'),
) );

$wp_customize->add_control(  new Galore_Radio_Image_Control ( $wp_customize, 'galore_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'galore' ),
	'section'             => 'galore_global_section',
	'choices'			  => galore_site_layout(),
) ) );


// loader setting and control.
$wp_customize->add_setting( 'galore_theme_options[enable_loader]', array(
	'default'           => galore_theme_option( 'enable_loader' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[enable_loader]', array(
	'label'             => esc_html__( 'Enable Loader', 'galore' ),
	'section'           => 'galore_global_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// loader type control and setting
$wp_customize->add_setting( 'galore_theme_options[loader_type]', array(
	'default'          	=> galore_theme_option('loader_type'),
	'sanitize_callback' => 'galore_sanitize_select',
) );

$wp_customize->add_control( 'galore_theme_options[loader_type]', array(
	'label'             => esc_html__( 'Loader Type', 'galore' ),
	'section'           => 'galore_global_section',
	'type'				=> 'select',
	'choices'			=> galore_get_spinner_list(),
) );
