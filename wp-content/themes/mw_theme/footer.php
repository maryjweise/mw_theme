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
        
 <?php if ( is_active_sidebar( 'footer-widgets' ) ) {?>

            <section id="footer-widgets" class="widget-area">
                    <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </section><!-- #footer-widgets -->
            <?php }
            ?>
	<footer id="colophon" class="site-footer">
           
            <nav id="footer-navigation" class="social-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mw_theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'social-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mw_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mw_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mw_theme' ), 'mw_theme', '<a href="http://maryweise.com">Mary Weise</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
