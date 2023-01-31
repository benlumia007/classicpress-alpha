<?php
/**
 * Default index template
 *
 * @package   ClassicPress Alpha
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/classicpress-alpha
 */
?>
<?php get_header(); ?>
<section id="content" class="site-content">
	<div id="layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'no-sidebar' ) ); ?>">
		<main id="main" class="content-area">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
					the_posts_pagination();
				else :
						get_template_part( 'content', 'none' );
				endif;
			?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer();
