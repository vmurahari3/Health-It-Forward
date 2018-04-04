<?php
/**
 * Functions which construct the theme by hooking into WordPress
 *
 * @package galore
 */


/*------------------------------------------------
            HEADER HOOK
------------------------------------------------*/

if ( ! function_exists( 'galore_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Galore 1.0.0
	 */
	function galore_doctype() { ?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php }
endif;
add_action( 'galore_doctype_action', 'galore_doctype', 10 );

if ( ! function_exists( 'galore_head' ) ) :
	/**
	 * head Codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_head() { ?>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
				<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<?php endif; ?>
			<?php wp_head(); ?>
		</head>
	<?php }
endif;
add_action( 'galore_head_action', 'galore_head', 10 );

if ( ! function_exists( 'galore_body_start' ) ) :
	/**
	 * Body start codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_body_start() { ?>
		<body <?php body_class(); ?>>
	<?php }
endif;
add_action( 'galore_body_start_action', 'galore_body_start', 10 );


if ( ! function_exists( 'galore_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_page_start() { ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'galore' ); ?></a>
	<?php }
endif;
add_action( 'galore_page_start_action', 'galore_page_start', 10 );


if ( ! function_exists( 'galore_loader' ) ) :
	/**
	 * loader html codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_loader() { 
		if ( ! galore_theme_option( 'enable_loader' ) )
			return;
		
		$loader = galore_theme_option( 'loader_type' )
		?>
		<div id="loader">
            <div class="loader-container">
               	<?php echo galore_get_svg( array( 'icon' => esc_attr( $loader ) ) ); ?>
            </div>
        </div><!-- #loader -->
	<?php }
endif;
add_action( 'galore_page_start_action', 'galore_loader', 20 );


if ( ! function_exists( 'galore_top_bar' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_top_bar() { 
		if ( ! galore_theme_option( 'show_topbar_menu' ) && ! galore_theme_option( 'show_social_menu' ) )
			return;
		?>
		<div id="top-menu">
            <?php 
            echo galore_get_svg( array( 'icon' => 'up', 'class' => 'dropdown-icon' ) );
            echo galore_get_svg( array( 'icon' => 'down', 'class' => 'dropdown-icon' ) ); 
            ?>
            
            <div class="wrapper">
            	<?php if ( galore_theme_option( 'show_topbar_menu' ) && has_nav_menu( 'topbar' ) ) : ?>
	                <div class="secondary-menu">
	                	<?php  
	                	wp_nav_menu( array(
	                		'theme_location'  	=> 'topbar',
	                		'container' 		=> false,
	                		'menu_class'      	=> 'menu',
	                		'fallback_cb'     	=> false,
	                		'depth'           	=> 1,
	                	) );
	                	?>
	                </div><!-- .secondary-menu -->
	            <?php endif; 

	            if ( galore_theme_option( 'show_top_search' ) ) : ?>
		            <div id="top-search" class="social-menu">
	                	<ul>
	                		<li>
	                			<div id="search"><?php get_search_form(); ?></div>
	                			<a href="#" class="search">
	                				<?php echo galore_get_svg( array( 'icon' => 'search' ) ); ?>
	            				</a>
	                		</li>
	                	</ul>
	                </div>
	            <?php endif; 

	            if ( galore_theme_option( 'show_social_menu' ) && has_nav_menu( 'social' ) ) : ?>
	                <div class="social-menu">
	                    <?php  
	                	wp_nav_menu( array(
	                		'theme_location'	=> 'social',
	                		'container'			=> false,
	                		'menu_class'      	=> 'menu',
	                		'fallback_cb'		=> true,
	                		'depth'           	=> 1,
	            			'link_before' 		=> '<span class="screen-reader-text">',
							'link_after' 		=> '</span>',
	                	) );
	                	?>
	                </div><!-- .social-menu -->
                <?php endif; ?>
            </div><!-- .wrapper -->
        </div><!-- #top-menu -->
	<?php }
endif;
add_action( 'galore_page_start_action', 'galore_top_bar', 20 );


if ( ! function_exists( 'galore_header_start' ) ) :
	/**
	 * Header starts html codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_header_start() { ?>
		<header id="masthead" class="site-header">
		<div class="wrapper">
	<?php }
endif;
add_action( 'galore_header_start_action', 'galore_header_start', 10 );


if ( ! function_exists( 'galore_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_site_branding() { ?>
		<div class="site-branding">
			<?php
			// site logo
			the_custom_logo();

			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	<?php }
endif;
add_action( 'galore_site_branding_action', 'galore_site_branding', 10 );


if ( ! function_exists( 'galore_primary_nav' ) ) :
	/**
	 * Primary nav codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_primary_nav() { ?>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'galore' ); ?></span>
                <svg viewBox="0 0 40 40" class="icon-menu">
                    <g>
                        <rect y="7" width="40" height="2"/>
                        <rect y="19" width="40" height="2"/>
                        <rect y="31" width="40" height="2"/>
                    </g>
                </svg>
                <?php echo galore_get_svg( array( 'icon' => 'close' ) ); ?>
            </button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
        			'container' => false,
        			'menu_class' => 'menu nav-menu',
        			'menu_id' => 'primary-menu',
        			'fallback_cb' => 'galore_menu_fallback_cb',
				) );
			?>
		</nav><!-- #site-navigation -->
	<?php }
endif;
add_action( 'galore_primary_nav_action', 'galore_primary_nav', 10 );


if ( ! function_exists( 'galore_header_ends' ) ) :
	/**
	 * Header ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_header_ends() { ?>
		</div><!-- .wrapper -->
		</header><!-- #masthead -->
	<?php }
endif;
add_action( 'galore_header_ends_action', 'galore_header_ends', 10 );


if ( ! function_exists( 'galore_site_content_start' ) ) :
	/**
	 * Site content start codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_site_content_start() { ?>
		<div id="content" class="site-content">
	<?php }
endif;
add_action( 'galore_site_content_start_action', 'galore_site_content_start', 10 );


/*------------------------------------------------
            FOOTER HOOK
------------------------------------------------*/

if ( ! function_exists( 'galore_site_content_ends' ) ) :
	/**
	 * Site content ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_site_content_ends() { ?>
		</div><!-- #content -->
	<?php }
endif;
add_action( 'galore_site_content_ends_action', 'galore_site_content_ends', 10 );


if ( ! function_exists( 'galore_footer_start' ) ) :
	/**
	 * Footer start codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_footer_start() { ?>
		<footer id="colophon" class="site-footer">
	<?php }
endif;
add_action( 'galore_footer_start_action', 'galore_footer_start', 10 );


if ( ! function_exists( 'galore_site_info' ) ) :
	/**
	 * Site info codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_site_info() { 
		$copyright = galore_theme_option('copyright_text');
		$poweredby = sprintf( esc_html__( ' Galore by %1$s Shark Themes %2$s', 'galore' ), '<a href="' . esc_url( 'http://sharkthemes.com/' ) . '" target="_blank">','</a>' );
		?>
		<div class="site-info">
            <div class="wrapper">
            	<?php if ( ! empty( $copyright ) ) : ?>
	                <div class="copyright">
	                    <p><?php echo galore_santize_allow_tags( $copyright ); ?></p>
	                </div><!-- .copyright -->
	            <?php endif; ?>
	            
                <div class="powered-by">
                    <p><?php echo galore_santize_allow_tags( $poweredby ); ?></p>
                </div><!-- .powered-by -->
            </div><!-- .wrapper -->    
        </div><!-- .site-info -->
	<?php }
endif;
add_action( 'galore_site_info_action', 'galore_site_info', 10 );


if ( ! function_exists( 'galore_footer_ends' ) ) :
	/**
	 * Footer ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_footer_ends() { ?>
		</footer><!-- #colophon -->
	<?php }
endif;
add_action( 'galore_footer_ends_action', 'galore_footer_ends', 10 );


if ( ! function_exists( 'galore_slide_to_top' ) ) :
	/**
	 * Footer ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_slide_to_top() { ?>
		<div class="backtotop">
            <?php echo galore_get_svg( array( 'icon' => 'up' ) ); ?>
        </div><!-- .backtotop -->
	<?php }
endif;
add_action( 'galore_footer_ends_action', 'galore_slide_to_top', 20 );


if ( ! function_exists( 'galore_page_ends' ) ) :
	/**
	 * Page ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_page_ends() { ?>
		</div><!-- #page -->
	<?php }
endif;
add_action( 'galore_page_ends_action', 'galore_page_ends', 10 );


if ( ! function_exists( 'galore_body_html_ends' ) ) :
	/**
	 * Body & Html ends codes
	 *
	 * @since Galore 1.0.0
	 */
	function galore_body_html_ends() { ?>
		</body>
		</html>
	<?php }
endif;
add_action( 'galore_body_html_ends_action', 'galore_body_html_ends', 10 );
