<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MW_Theme
 */

if ( ! is_active_sidebar( 'page-widgets' ) ) {
	return;
}
?>

<aside id="page-widgets" class="widget-area page-widgets">
	<?php dynamic_sidebar( 'page-widgets' ); ?>
</aside><!-- #secondary -->
