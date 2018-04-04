<?php
/**
 * Topbar Customizer Options
 *
 * @package galore
 */

// Add topbar section
$wp_customize->add_section( 'galore_topbar_section', array(
	'title'             => esc_html__( 'Top Bar Section','galore' ),
	'description'       => sprintf( '%1$s <a class="menu_locations" href="#"> %2$s </a> %3$s', esc_html__( 'Note: To show topbar menu.', 'galore' ), esc_html__( 'Click Here', 'galore' ), esc_html__( 'to create menu.', 'galore' ) ),
	'panel'             => 'galore_theme_options_panel',
) );

// topbar menu enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_topbar_menu]', array(
	'default'           => galore_theme_option('show_topbar_menu'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_topbar_menu]', array(
	'label'             => esc_html__( 'Show Top Bar Menu', 'galore' ),
	'section'           => 'galore_topbar_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// topbar social menu enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_social_menu]', array(
	'default'           => galore_theme_option('show_social_menu'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_social_menu]', array(
	'label'             => esc_html__( 'Show Social Menu', 'galore' ),
	'section'           => 'galore_topbar_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// topbar search enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_top_search]', array(
	'default'           => galore_theme_option('show_top_search'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_top_search]', array(
	'label'             => esc_html__( 'Show Search', 'galore' ),
	'section'           => 'galore_topbar_section',
	'on_off_label' 		=> galore_show_options(),
) ) );