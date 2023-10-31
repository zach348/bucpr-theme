

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', '404' ); ?>
	<div id="primary" class="content-area pt-5">
		<main id="main" class="site-main">
			<?php get_template_part( 'template-parts/content', '404' ); ?>
			<article id="post-0" class="post error404 not-found container mx-auto	">

				<div class="entry-content row d-flex justify-content-center align-items-center my-5 pb-4">

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
