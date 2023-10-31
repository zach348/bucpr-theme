<?php /* Template Name: Page */ ?>

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', 'page' ); ?>
	<div id="primary" class="content-area position-relative">
		<div class="page-overlay position-absolute h-100 w-100"></div>
		<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; ?>
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
