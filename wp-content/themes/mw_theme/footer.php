<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MW_Theme
 */

?>

	</div><!-- #content -->
        
        <?php get_sidebar('footer');?>
	<footer id="colophon" class="site-footer">
           
            <div class="site-footer__wrap">
			<?php
			// Make sure there is a social menu to display.
			if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-menu" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'mw_theme' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . mw_theme_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;?>

			<div class="site-info">
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mw_theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mw_theme' ), 'WordPress' ); ?></a></div>
				<div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'mw_theme' ), 'mw_theme', '<a href="https://maryweisedev.com" rel="designer">Mary Weise</a>' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
