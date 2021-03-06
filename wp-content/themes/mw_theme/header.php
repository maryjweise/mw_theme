<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MW_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mw_theme' ); ?></a>
        
	<header id="masthead" class="site-header sticky-header">
		<div class="site-branding">
			<?php the_custom_logo();?>
                        <div class="site-branding__text">
                        
			<?php if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;?>
                    </div><!-- .site-branding__text-->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mw_theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
        <?php if(is_front_page() && get_header_image()):?>
        <div class="header-image" style="background-image:url('<?php echo get_header_image();?>');">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $mw_theme_description = get_bloginfo( 'description', 'display' );
                if ( $mw_theme_description || is_customize_preview() ) :
                        ?>
                        
                        <p class="site-description"><?php echo $mw_theme_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
        </div>
        <?php endif; //end header image check?>
	<div id="content" class="site-content">
