<?php
/**
 * Default footer template
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				printf(
					// Translators: 1 = Date, 2 = Site Link.
					esc_html__( 'Copyright &#169; %1$s. %2$s', 'classicpress-alpha' ),
					absint( date_i18n( 'Y' ) ),
					Alpha\Site\render_site_link()
				);
			?>
			<br />
			<?php
				printf(
					// Translators: 1 = WordPress Link, 2 = Theme Link.
					esc_html__( 'Powered By %1$s and %2$s', 'classicpress-alpha' ),
					Alpha\Site\render_cp_link(),
					Alpha\Site\render_theme_link()
				);
			?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
