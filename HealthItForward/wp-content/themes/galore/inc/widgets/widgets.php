<?php
/**
 * Register Widgets
 *
 * @package galore
 */

/**
 * Load dynamic logic for the widgets.
 */
function galore_widget_js( $hook ) {
	if ( 'widgets.php' === $hook ) :
		wp_enqueue_script( 'media-upload' );
	   	wp_enqueue_media();
	   	
		// Choose from select jquery.
		wp_enqueue_style( 'jquery-chosen-css', get_template_directory_uri() . '/assets/css/chosen' . galore_min() . '.css' );
		wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen' . galore_min() . '.js', array( 'jquery' ), '1.4.2', true );

		// admin script
		wp_enqueue_style( 'galore-admin-css', get_template_directory_uri() . '/assets/css/admin' . galore_min() . '.css' );
		wp_enqueue_script( 'galore-admin-script', get_template_directory_uri() . '/assets/js/admin' . galore_min() . '.js', array( 'jquery', 'jquery-chosen' ), '1.0.0', true );
	endif;

}
add_action( 'admin_enqueue_scripts', 'galore_widget_js' );

/*
 * Add introduction widget
 */
require get_template_directory() . '/inc/widgets/introduction-widget.php';

/*
 * Add featured widget
 */
require get_template_directory() . '/inc/widgets/featured-widget.php';

/*
 * Add portfolio widget
 */
require get_template_directory() . '/inc/widgets/portfolio-widget.php';

/*
 * Add author widget
 */
require get_template_directory() . '/inc/widgets/author-widget.php';

/*
 * Add recent widget
 */
require get_template_directory() . '/inc/widgets/recent-widget.php';

/*
 * Add contact widget
 */
require get_template_directory() . '/inc/widgets/contact-widget.php';


/**
 * Register widgets
 */
function galore_register_widgets() {
	
	register_widget( 'Galore_Introduction_Widget' );
	
	register_widget( 'Galore_Featured_Widget' );

	register_widget( 'Galore_Portfolio_Widget' );

	register_widget( 'Galore_Author_Widget' );

	register_widget( 'Galore_Recent_Widget' );

	register_widget( 'Galore_Contact_Widget' );

}
add_action( 'widgets_init', 'galore_register_widgets' );