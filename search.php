<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', 'search' ); ?>
	<div id="primary" class="content-area position-relative">
		<div class="page-overlay position-absolute h-100 w-100"></div>
		<main id="main" class="site-main">

			<div class="d-none">
				<?php echo facetwp_display( 'facet', 'resources_type' ); ?>
			</div>

			<?php if ( have_posts() ) : ?>
				<div class="search-results facetwp-template container pt-5">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'search' ); ?>
					<?php endwhile; ?>
					<?php //the_posts_navigation(); ?>
				</div>
			<?php else : ?>
				<div class="container my-5">
					<section class="no-results not-found container">
						<div class="row d-flex flex-wrap justify-content-center">
							<?php if (get_field('search_no_results_text', 'option')) : ?>
								<div class="col-sm-8 mx-auto">
									<?php the_field('search_no_results_text', 'option'); ?>
								</div>
							<?php endif; ?>
							<div class="w-100 d-flex justify-content-center">
								<?php get_search_form(); ?>
							</div>
						</div>
					</section>
				</div>
			<?php endif; ?>

			<div class="pagination mb-5">
				<div class="d-flex container justify-content-center">
					<?php echo facetwp_display( 'pager' ); ?>
				</div>
			</div>

		</main>
	</div>
</div>
<?php get_footer(); ?>
