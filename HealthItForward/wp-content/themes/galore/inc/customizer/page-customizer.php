<?php
/**
 * Page Customizer Options
 *
 * @package galore
 */

// Add excerpt section
$wp_customize->add_section( 'galore_page_section', array(
	'title'             => esc_html__( 'Page Setting','galore' ),
	'description'       => esc_html__( 'Page Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'galore_theme_options[sidebar_page_layout]', array(
	'sanitize_callback'   => 'galore_sanitize_select',
	'default'             => galore_theme_option('sidebar_page_layout'),
) );

$wp_customize->add_control(  new Galore_Radio_Image_Control ( $wp_customize, 'galore_theme_options[sidebar_page_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'galore' ),
	'section'             => 'galore_page_section',
	'choices'			  => galore_sidebar_position(),
) ) );
