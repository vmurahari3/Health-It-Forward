<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galore
 */

/**
 * galore_doctype_action hook
 *
 * @hooked galore_doctype -  10
 *
 */
do_action( 'galore_doctype_action' );

/**
 * galore_head_action hook
 *
 * @hooked galore_head -  10
 *
 */
do_action( 'galore_head_action' );

/**
 * galore_body_start_action hook
 *
 * @hooked galore_body_start -  10
 *
 */
do_action( 'galore_body_start_action' );
 
/**
 * galore_page_start_action hook
 *
 * @hooked galore_page_start -  10
 * @hooked galore_loader -  20
 *
 */
do_action( 'galore_page_start_action' );

/**
 * galore_header_start_action hook
 *
 * @hooked galore_header_start -  10
 *
 */
do_action( 'galore_header_start_action' );

/**
 * galore_site_branding_action hook
 *
 * @hooked galore_site_branding -  10
 *
 */
do_action( 'galore_site_branding_action' );

/**
 * galore_primary_nav_action hook
 *
 * @hooked galore_primary_nav -  10
 *
 */
do_action( 'galore_primary_nav_action' );

/**
 * galore_header_ends_action hook
 *
 * @hooked galore_header_ends -  10
 *
 */
do_action( 'galore_header_ends_action' );

/**
 * galore_site_content_start_action hook
 *
 * @hooked galore_site_content_start -  10
 *
 */
do_action( 'galore_site_content_start_action' );

/**
 * galore_primary_content_action hook
 *
 * @hooked galore_add_slider_section -  10
 *
 */
do_action( 'galore_primary_content_action' );