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
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
				<svg width="3065" height="85" viewBox="0 0 3065 85">
					<text id="SalonamMoritzplatz" data-name="Salon AM Moritzplatz          Salon AM Moritzplatz          Salon AM Moritzplatz          " transform="translate(0 66)" fill="#3e3e3e" font-size="60" font-family="sam-arial-black" font-weight="800" letter-spacing="-0.015em"><tspan x="0" y="0" font-family="sam-arial-black" xml:space="preserve">SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          SALON AM MORITZPLATZ          </tspan></text>
				</svg>
			</div>
		</div>

		<div id="stickyTickertape">
			<div class="logo-banner-small">
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<svg width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
				<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
					<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
				</svg>
			</div>
		</div>

				
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" id="menu-toggleMobile" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'salonammoritzplatz' ); ?></button>
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
			<div class="column" id="column--hidden_mobile">
				<h4>EDITORIAL OFFICE</h4>
				<p>
				GUP Magazine<br>
				Lindengracht 35<br>
				1015 KB Amsterdam<br>
				The Netherlands<br>
				<a href="mailto:info@gupmagazine.com" target="_blank">info@gupmagazine.com</a>
				</p>
				<!-- NEWSLETTER -->
				<h4>NEWSLETTER</h4>
				<form style="padding:0; text-align:center;" 
						action="https://tinyletter.com/gupmagazine" 
						method="post" 
						target="popupwindow" 
						onsubmit="window.open('https://tinyletter.com/gupmagazine', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
					<p style="text-align: left; margin-bottom: 5px;"><label for="tlemail">Stay updated on our latest publications, events, articles and open calls</label></p>
					<input type="text" style="width: 100%; height: 30px; margin-bottom: 3px; background-color: transparent; border-radius: 0;" name="email" id="tlemail" />
					<input type="hidden" value="1" name="embed"/>
					<input type="submit" value="Subscribe" style="width: 100%; background-color: transparent; border-radius: 0; color: black; text-transform: uppercase;" />
				</form>
				<!-- NEWSLETTER -->
			</div>
			<div class="column" id="column--hidden_mobile">
				<h4>COLLABORATION</h4>
				<div>
					<p>Are you a publisher, fair or festival and you want to collaborate with us? Contact us at:
						<a href="mailto:info@gupmagazine.com" target="_blank" rel="noopener noreferrer">info@gupmagazine.com</a>
					</p>
					<p>Or ask for our media kit <a href="mailto:info@gupmagazine.com?subject=MEDIA KIT&amp;" target="_blank" rel="noopener noreferrer">here</a></p>
				</div>
				<h4>FOLLOW US</h4>
				<div class="social-footer" style="margin: 0;">
					<div><a href="https://www.facebook.com/GUP.magazine/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></div>
					<div><a href="https://www.instagram.com/gupmagazine/" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a></div>
					<div><a href="https://twitter.com/gupmagazine" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></div>
				</div>
				<h4>CONTACT US</h4>
				<a href="mailto:info@gupmagazine.com" target="_blank">info@gupmagazine.com</a>
			</div>
			<div class="column" id="column--hidden_mobile">
				<h4>CURRENT ISSUE</h4>
				<div><img src="https://gupmagazine.com/wp-content/uploads/2020/06/cover_gup65.jpg" alt=""></div>
				<div class="buy--button"><a href="https://shop.gupmagazine.com/collections/single-issues/products/gup-65-euro" target="_blank">BUY</a></div>
			</div>
			<div class="sponsor-image"><img src="https://gupmagazine.com/wp-content/uploads/2020/06/FRESH-EYES-LOGO-BLACK-2.png" alt="Logo Fresh Eyes"></div>
			<div class="sponsor-image"><img src="https://gupmagazine.com/wp-content/uploads/2020/04/GUP-NEW-logo-2019.1.png" alt="Logo GUP New"></div>
			<div class="sponsor-image"><img src="https://gupmagazine.com/wp-content/uploads/2020/06/artibooks-logo_black-3.png" alt="Logo Arti Books"></div>
		</main>
	</section>
