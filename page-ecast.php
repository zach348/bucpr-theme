<?php /* Template Name: eCast */ ?>

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', 'landing' ); ?>
	<div id="primary" class="content-area position-relative">
		<div class="page-overlay position-absolute h-100 w-100"></div>
		<main id="main" class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; ?>

			<?php if (get_the_content()): ?>
				<div class="col-lg-6 mx-auto my-5">
					<?php echo get_the_content(); ?>
				</div>
			<?php endif; ?>
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
