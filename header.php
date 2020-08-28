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

	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/vremena" type="text/css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

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
				<svg class="first" width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
				<svg width="2401" height="115" viewBox="0 0 2401 115">
					<text id="SalonamMoritzplatz" data-name="Salon am Moritzplatz   Salon am Moritzplatz" transform="translate(0 90)" fill="#3e3e3e" font-size="82" font-family="Arial Black" font-weight="800"><tspan x="0" y="0" font-family="Arial Black" xml:space="preserve">SALON AM MORITZPLATZ   SALON AM MORITZPLATZ</tspan></text>
				</svg>
			</div>
		</div>

		<div class="tickerTapeMobile">
			<div class="text">
				<img class="first" src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<!-- repeated images below to keep up with animation -->
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/header-logo-color.png">
			</div>
		</div>

				
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'salonammoritzplatz' ); ?></button>
			<div id="stickyPrimaryMenu">
				<div class="logo-banner-small">
					<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/logo-banner-small.png" alt="Logo">
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
