<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salonammoritzplatz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'salonammoritzplatz' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$salonammoritzplatz_description = get_bloginfo( 'description', 'display' );
			if ( $salonammoritzplatz_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $salonammoritzplatz_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="tickerTape">
			<div class="text">
				<img class="first" src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<!-- repeated images below to keep up with animation -->
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png">
			</div>
		</div>

				<!-- <div class="tickerTape">
					<span class="text">
						<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo.png" alt="">
					<span>
				</div> -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'salonammoritzplatz' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
