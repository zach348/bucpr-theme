<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap; ?>

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php if (is_archive()): ?>
		<?php get_template_part( 'template-parts/heros/hero', 'calendar' ); ?>
	<?php elseif(is_single()) : ?>
	<?php endif; ?>

	<div id="primary" class="content-area position-relative">
		<!--  -->
		<main id="main" class="site-main">

			<?php if (is_archive()): ?>
				<?php get_template_part( 'template-parts/content', 'page-options' ); ?>
			<?php endif; ?>

			<?php echo tribe( Template_Bootstrap::class )->get_view_html(); ?>

		</main>
	</div>
</div>
<?php get_footer(); ?>
