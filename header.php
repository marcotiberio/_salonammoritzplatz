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
			
				<div id="tickerTape">
					<div class="text">
						<svg class="first" width="3065" height="85" viewBox="0 0 3065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<!-- repeated images below to keep up with animation -->
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
						<svg width="3065" height="85" viewBox="0 0 2065 85">
							<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 46)" fill="#3e3e3e" font-size="40" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
						</svg>
					</div>
				</div>
			

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div id="stickyTickertape">
					<div class="logo-banner-small">
						<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<!-- repeated images below to keep up with animation -->
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
						<svg width="2058" height="28" viewBox="0 0 2058 28">
							<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="16" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
						</svg>
					</div>
				</div>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div id="homeStickytickertape">
				<div class="inside">
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<!-- repeated images below to keep up with animation -->
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
				</div>
			</div>
			<button class="menu-toggle" id="menu-toggleMobile" aria-controls="primary-menu" aria-expanded="false">
				<div class="bar1"></div>
  				<div class="bar2"></div>
  				<div class="bar3"></div>
			</button>
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

	<section id="menuOverlay">
		<main class="menuOverlay--inside">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'mobile-menu',
				'menu_id'        => 'mobile-menu',
			) );
			?>
		</main>
	</section>
