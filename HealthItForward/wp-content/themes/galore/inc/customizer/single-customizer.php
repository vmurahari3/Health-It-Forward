<?php
/**
 * Single Post Customizer Options
 *
 * @package galore
 */

// Add excerpt section
$wp_customize->add_section( 'galore_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','galore' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'galore_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'galore_sanitize_select',
	'default'             => galore_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Galore_Radio_Image_Control ( $wp_customize, 'galore_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'galore' ),
	'section'             => 'galore_single_section',
	'choices'			  => galore_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_single_date]', array(
	'default'           => galore_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'galore' ),
	'section'           => 'galore_single_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_single_category]', array(
	'default'           => galore_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'galore' ),
	'section'           => 'galore_single_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_single_tags]', array(
	'default'           => galore_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'galore' ),
	'section'           => 'galore_single_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_single_author]', array(
	'default'           => galore_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'galore' ),
	'section'           => 'galore_single_section',
	'on_off_label' 		=> galore_show_options(),
) ) );
