<?php get_header(); ?>

<div id="primary" class="content-area position-relative">

	<main id="main" class="site-main">
		<?php get_template_part( 'template-parts/heros/hero', 'resources' ); ?>

		<?php if (get_field('resources_featured_posts_toggle', 'option')) : ?>
			<?php $resources_featured_posts = get_field('resources_featured_posts','option'); ?>
			<?php if ($resources_featured_posts): ?>
				<div class="featured">
					<!-- <div class="page-overlay position-absolute h-100 w-100"></div> -->
					<div class="container mt-5 my-lg-5 py-4 px-0">
						<div class="inner row d-flex flex-wrap m-0">

							<?php if( get_field('resources_featured_posts_text_toggle','option') == 'posts' ) { ?>

								<div class="title mb-4 w-100">
									<div class="flourish mb-2"></div>
									<h2 class="primary-color w-100">Featured</h2>
								</div>

								<?php if (have_rows('resource_featured_posts_selection','option')) : ?>
									<?php while(have_rows('resource_featured_posts_selection','option')) : the_row(); ?>
										<?php $post = get_sub_field('resource_featured_post');
											if ($post) : setup_postdata($post); ?>
											<div class="col-sm row pl-0 mx-0 mb-5 mb-lg-0">

												<?php $resource_image = get_field('resource_image'); ?>
												<?php if ($resource_image): ?>
													<div class="image col-lg pl-0 pr-0 pr-lg-4">
														<img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>"/>
													</div>
												<?php endif; ?>

												<div class="content col-lg px-0 pr-lg-3 mt-2 mt-lg-0">
													<h6 class="color-secondary w-100 text-uppercase">
														<?php get_template_part( 'template-parts/helpers/primary-category' ); ?>
													</h6>
													<h4 class="h2-mobile my-1">
														<a class="color-primary" href="<?php the_permalink(); ?>">
															<?php the_title(); ?>
														</a>
													</h4>
													<div class="mb-3">
														<?php global $post; ?>
														<?php $product_and_resource_topics = wp_get_post_terms($post->ID, 'product_and_resource_topics', array("fields" => "names")); ?>
														<?php if (count($product_and_resource_topics) > 0) { ?>
															<?php echo '<p class="topics secondary-color mb-3 line-height-normal">'; ?>
															<?php echo implode(', ', $product_and_resource_topics); ?>
															<?php echo '</p>';?>
														<?php } ?>
													</div>
													<div class="excerpt">
														<p><?php echo get_the_excerpt(); ?></p>
													</div>
												</div>
											</div>
										<?php wp_reset_postdata(); endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php } ?>

							<?php if( get_field('resources_featured_posts_text_toggle','option') == 'text' ) { ?>
								<?php if (get_field('resource_featured_text', 'option')) : ?>
									<?php the_field('resource_featured_text', 'option'); ?>
								<?php endif; ?>
							<?php } ?>

						</div>
					</div>
				</div>
			<?php wp_reset_postdata(); endif; ?>
		<?php wp_reset_postdata(); endif; ?>
		<div class="filters background-primary-color py-5">
			<div class="container my-3 my-lg-0">
				<div class="titles">
					<div class="flourish"></div>
					<h2 class="h1 color-white">Explore Resources</h2>
					<p class="color-white d-none d-md-block">You may select more than one</p>
				</div>
				<div class="row facets mb-4">
					<div class="col-md-4">
						<?php echo facetwp_display( 'facet', 'resources_type' ); ?>
					</div>
					<div class="col-md-4">
						<?php echo facetwp_display( 'facet', 'resources_topics' ); ?>
					</div>
				</div>
			</div>
		</div>
    <?php if ( have_posts() ) : ?>
			<div class="facetwp-template py-5">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
        <?php endwhile; ?>
				<?php wp_reset_query(); ?>
        <?php // the_posts_navigation(); ?>
      	<?php else : ?>
					<div class="border p-5">
						<div class="inner container p-5 text-center">
							<h2>No posts to display!</h2>
							<h3>Reset your filters and try again.</h3>
							<h4>Contact us with any questions regarding your search!</h4>
						</div>
					</div>
			</div>
    <?php endif; ?>

		<div class="pagination">
			<div class="d-flex container justify-content-center">
				<?php echo facetwp_display( 'pager' ); ?>
			</div>
		</div>

		<?php get_template_part( 'template-parts/content', 'resource-archive-page' ); ?>

	</main>
</div>
<?php get_footer(); ?>
