<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galore
 */

/**
 * galore_site_content_ends_action hook
 *
 * @hooked galore_site_content_ends -  10
 *
 */
do_action( 'galore_site_content_ends_action' );

/**
 * galore_footer_start_action hook
 *
 * @hooked galore_footer_start -  10
 *
 */
do_action( 'galore_footer_start_action' );

/**
 * galore_site_info_action hook
 *
 * @hooked galore_site_info -  10
 *
 */
do_action( 'galore_site_info_action' );

/**
 * galore_footer_ends_action hook
 *
 * @hooked galore_footer_ends -  10
 * @hooked galore_slide_to_top -  20
 *
 */
do_action( 'galore_footer_ends_action' );

/**
 * galore_page_ends_action hook
 *
 * @hooked galore_page_ends -  10
 *
 */
do_action( 'galore_page_ends_action' );

wp_footer();

/**
 * galore_body_html_ends_action hook
 *
 * @hooked galore_body_html_ends -  10
 *
 */
do_action( 'galore_body_html_ends_action' );
