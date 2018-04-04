<?php
/**
 * Footer Customizer Options
 *
 * @package galore
 */

// Add footer section
$wp_customize->add_section( 'galore_footer_section', array(
	'title'             => esc_html__( 'Footer Section','galore' ),
	'description'       => esc_html__( 'Footer Setting Options', 'galore' ),
	'panel'             => 'galore_theme_options_panel',
) );

// slide to top enable setting and control.
$wp_customize->add_setting( 'galore_theme_options[slide_to_top]', array(
	'default'           => galore_theme_option('slide_to_top'),
	'sanitize_callback' => 'galore_sanitize_switch',
) );

$wp_customize->add_control( new Galore_Switch_Control( $wp_customize, 'galore_theme_options[slide_to_top]', array(
	'label'             => esc_html__( 'Show Slide to Top', 'galore' ),
	'section'           => 'galore_footer_section',
	'on_off_label' 		=> galore_show_options(),
) ) );

// copyright text
$wp_customize->add_setting( 'galore_theme_options[copyright_text]',
	array(
		'default'       		=> galore_theme_option('copyright_text'),
		'sanitize_callback'		=> 'galore_santize_allow_tags',
	)
);
$wp_customize->add_control( 'galore_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'galore' ),
		'section'    			=> 'galore_footer_section',
		'type'		 			=> 'textarea',
    )
);
