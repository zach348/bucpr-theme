<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/heros/hero', 'home' ); ?>
<div id="content" class="site-content container-fluid p-0">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; ?>
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
