<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galore
 */
$sidebar_layout = galore_sidebar_layout();
if ( ! is_active_sidebar( 'sidebar-1' ) ||  'no-sidebar' == $sidebar_layout ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
