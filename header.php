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
				<svg class="first" width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
			</div>
		</div>

		<div class="tickerTapeMobile">
			<div class="text">
			<svg class="first" width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="Arial-Black, Arial Black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="Arial-Black, Arial Black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
			</div>
		</div>

				
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'salonammoritzplatz' ); ?></button>
			<div id="stickyPrimaryMenu">
				<div class="logo-banner-small">
					<svg xmlns="http://www.w3.org/2000/svg" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
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
