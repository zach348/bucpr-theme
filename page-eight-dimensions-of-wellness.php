<?php /* Template Name: Eight Dimensions of Wellness */ ?>

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', 'eight-dimensions' ); ?>
	<div id="primary" class="content-area position-relative">
		<div class="page-overlay position-absolute h-100 w-100"></div>
		<main id="main" class="site-main">
			<?php if (have_rows('eight_dimensions_of_wellness_blocks')) : ?>
				<!-- <div class="spacer-top d-none d-lg-block py-5 my-5"></div>
				<div class="spacer-top d-none d-lg-block py-5 my-5"></div> -->
				<div class="eight-dimensions-of-wellness container py-5">
					<?php while(have_rows('eight_dimensions_of_wellness_blocks')) : the_row(); ?>

						<?php if (get_sub_field('eight_dimensions_of_wellness_block_color_picker')) : ?>
							<?php $color = get_sub_field('eight_dimensions_of_wellness_block_color_picker'); ?>
						<?php else : ?>
							<?php $color = '#019f9d'; ?>
						<?php endif; ?>

						<div class="dimension d-flex justify-content-center align-items-center mb-5">
							<div class="inner d-flex flex-wrap justify-content-center text-center p-5 mb-lg-4 position-relative">
								<div class="dimension-border py-2 w-100 position-absolute top-zero"></div>
								<div class="py-3 py-md-4">
									<?php if (get_sub_field('eight_dimensions_of_wellness_block_title')) : ?>
										<h3 class="h1 font-style-normal">
											<?php the_sub_field('eight_dimensions_of_wellness_block_title'); ?>
										</h3>
									<?php endif; ?>
									<?php if (get_sub_field('eight_dimensions_of_wellness_block_content')) : ?>
										<?php the_sub_field('eight_dimensions_of_wellness_block_content'); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<?php if (get_field('eight_dimensions_of_wellness_footnote')) : ?>
					<div class="footnote container mb-4">
						<div class="row">
							<div class="inner col pl-0 pl-md-3">
								<?php the_field('eight_dimensions_of_wellness_footnote'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
