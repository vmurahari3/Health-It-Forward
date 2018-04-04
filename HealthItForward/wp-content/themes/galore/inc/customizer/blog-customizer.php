<?php
/**
 * Blog / Archive / Search Customizer Options
 *
 * @package galore
 */

// Add blog section
$wp_customize->add_section( 'galore_blog_section', array(
	'title'             => esc_html__( 'Blog/Archive Page Setting','galore' ),
	'description'       => esc_html__( 'Blog/Archive/Search Page Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'galore_theme_options[sidebar_layout]', array(
	'sanitize_callback'   => 'galore_sanitize_select',
	'default'             => galore_theme_option('sidebar_layout'),
) );

$wp_customize->add_control(  new Galore_Radio_Image_Control ( $wp_customize, 'galore_theme_options[sidebar_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'galore' ),
	'section'             => 'galore_blog_section',
	'choices'			  => galore_sidebar_position(),
) ) );

// column control and setting
$wp_customize->add_setting( 'galore_theme_options[column_type]', array(
	'default'          	=> galore_theme_option('column_type'),
	'sanitize_callback' => 'galore_sanitize_select',
) );

$wp_customize->add_control( 'galore_theme_options[column_type]', array(
	'label'             => esc_html__( 'Column Layout', 'galore' ),
	'section'           => 'galore_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'column-1' 		=> esc_html__( 'One Column', 'galore' ),
		'column-2' 		=> esc_html__( 'Two Column', 'galore' ),
	),
) );

// excerpt count control and setting
$wp_customize->add_setting( 'galore_theme_options[excerpt_count]', array(
	'default'          	=> galore_theme_option('excerpt_count'),
	'sanitize_callback' => 'galore_sanitize_number_range',
	'validate_callback' => 'galore_validate_excerpt_count',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'galore_theme_options[excerpt_count]', array(
	'label'             => esc_html__( 'Excerpt Length', 'galore' ),
	'description'       => esc_html__( 'Note: Min 1 & Max 50.', 'galore' ),
	'section'           => 'galore_blog_section',
	'type'				=> 'number',
	'input_attrs'		=> array(
		'min'	=> 1,
		'max'	=> 50,
		),
) );

// pagination control and setting
$wp_customize->add_setting( 'galore_theme_options[pagination_type]', array(
	'default'          	=> galore_theme_option('pagination_type'),
	'sanitize_callback' => 'galore_sanitize_select',
) );

$wp_customize->add_control( 'galore_theme_options[pagination_type]', array(
	'label'             => esc_html__( 'Pagination Type', 'galore' ),
	'section'           => 'galore_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'default' 		=> esc_html__( 'Default', 'galore' ),
		'numeric' 		=> esc_html__( 'Numeric', 'galore' ),
	),
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_date]', array(
	'default'           => galore_theme_option( 'show_date' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_date]', array(
	'label'             => esc_html__( 'Show Date', 'galore' ),
	'section'           => 'galore_blog_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_category]', array(
	'default'           => galore_theme_option( 'show_category' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_category]', array(
	'label'             => esc_html__( 'Show Category', 'galore' ),
	'section'           => 'galore_blog_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_author]', array(
	'default'           => galore_theme_option( 'show_author' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_author]', array(
	'label'             => esc_html__( 'Show Author', 'galore' ),
	'section'           => 'galore_blog_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// Archive comment meta setting and control.
$wp_customize->add_setting( 'galore_theme_options[show_comment]', array(
	'default'           => galore_theme_option( 'show_comment' ),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[show_comment]', array(
	'label'             => esc_html__( 'Show Comment', 'galore' ),
	'section'           => 'galore_blog_section',
	'on_off_label' 		=> galore_show_options(),
) ) );