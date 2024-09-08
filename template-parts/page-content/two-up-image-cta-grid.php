<?php
//-----------------------------------------------------
// 2-Up Image CTA Grid
//-----------------------------------------------------
?>

<section class="container-fluid content-columns two-up-image-cta-grid">
	<div class="container position-relative px-0 pt-0">

		<?php if (get_sub_field('two_up_image_cta_grid_title')) : ?>
			<div class="col">
				<div class="flourish mb-3"></div>
				<h2 class="primary-color mb-4">
					<?php the_sub_field('two_up_image_cta_grid_title'); ?>
				</h2>
			</div>
		<?php endif; ?>

		<?php if (have_rows('two_up_image_cta_grid_columns')) : ?>
			<?php $i = 0; ?>
			<?php while(have_rows('two_up_image_cta_grid_columns')) : the_row(); ?>
				<?php $i++; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php // echo $i; ?>

		<?php if (have_rows('two_up_image_cta_grid_columns')) : ?>
			<?php // $i = 0; ?>
			<div class="same-height-wrapper content-column-wrapper row d-flex justify-content-center mx-0">
			<?php while(have_rows('two_up_image_cta_grid_columns')) : the_row(); ?>
				<?php if (get_sub_field('two_up_image_cta_grid_image')) :
					$two_up_image_cta_grid_image_class = 'has-image'; ?>
				<?php else: ?>
					<?php $two_up_image_cta_grid_image_class = 'no-image'; ?>
				<?php endif; ?>
				<div class="d-flex column col-lg mb-5 mb-lg-0 w-100 <?php echo $two_up_image_cta_grid_image_class; ?>">
					<div id="content-column-<?php echo $i; ?>" class="content-column mb-0 w-100">
						<?php if (get_sub_field('two_up_image_cta_grid_image')) : ?>
							<?php $two_up_image_cta_grid_image = get_sub_field('two_up_image_cta_grid_image'); ?>
							<?php // if ($i <= 2): ?>
								<div class="image background-image mb-1 mb-lg-2" style="background-image:url('<?php echo $two_up_image_cta_grid_image['url']; ?>');"></div>
								<?php //echo $two_up_image_cta_grid_image; ?>
								<p class="caption d-block w-100 clear-both mb-3 mb-lg-3">
									<?php echo $two_up_image_cta_grid_image['caption']; ?>
								</p>
							<?php // endif; ?>
							<?php // echo $i; ?>
							<?php /* if ($i > 2): ?>
								<div class="image background-image" style="height:224px; background-image:url('<?php echo $two_up_image_cta_grid_image['url']; ?>');"></div>
							<?php endif; */ ?>
						<?php endif; ?>

						<div class="same-height-wrapper position-relative text pt-1">

							<?php // if ($i <= 2): ?>
								<div style="left:0;" class="d-none flourish mb-2 mb-lg-3"></div>
							<?php // endif; ?>

							<?php if (get_sub_field('two_up_image_cta_grid_title')) : ?>
								<h3 class="same-height-h h2 primary-color mb-2">
									<?php the_sub_field('two_up_image_cta_grid_title'); ?>
								</h3>
							<?php endif; ?>

							<?php if (get_sub_field('two_up_image_cta_grid_text')) : ?>
								<div class="two-up-p same-height mb-2 mb-lg-4">
									<?php the_sub_field('two_up_image_cta_grid_text'); ?>
								</div>
							<?php endif; ?>

							<?php // if ($i <= 2): ?>
								<?php if (get_sub_field('two_up_image_cta_grid_cta')) : ?>
									<?php $two_up_image_cta_grid_cta = get_sub_field('two_up_image_cta_grid_cta'); ?>
									<a class="btn btn-secondary mt-2 mt-lg-0 mb-0" href="<?php echo $two_up_image_cta_grid_cta['url']; ?>" target="<?php echo $two_up_image_cta_grid_cta['target']; ?>">
										<?php echo $two_up_image_cta_grid_cta['title']; ?>
									</a>
								<?php endif; ?>
							<?php /* else : ?>
								<?php if (get_sub_field('content_column_cta')) : ?>
									<?php $two_up_image_cta_grid_cta = get_sub_field('content_column_cta'); ?>
									<a class="btn btn-text px-0" href="<?php echo $two_up_image_cta_grid_cta['url']; ?>" target="<?php echo $two_up_image_cta_grid_cta['target']; ?>">
										<span><?php echo $two_up_image_cta_grid_cta['title']; ?></span>
										<i class="fas fa-chevron-right"></i>
									</a>
								<?php endif; ?>
							<?php endif; */ ?>
						</div>
					</div>
				</div>
				<?php // $i++; ?>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
