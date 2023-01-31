<?php
/**
 * Default header template
 *
 * @package   ClassicPress Alpha
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/classicpress-alpha
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'classicpress-alpha' ) ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php Alpha\Site\display_site_title(); ?>
			<?php Alpha\Site\display_site_description(); ?>
		</div>
		<?php
			if ( has_nav_menu( 'primary' ) ) { ?>
				<nav id="primary" class="primary-navigation">
					<button class="menu-toggle" aria-control="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'classicpress-alpha' ); ?></button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => '',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'menu-items',
								'depth'          => 2
							)
						);
					?>
				</nav>
			<?php }
		?>
	</header>
