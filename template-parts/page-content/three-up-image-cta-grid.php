<?php
//-----------------------------------------------------
// 3-Up Image CTA Grid
//-----------------------------------------------------
?>

<section class="container-fluid content-columns three-up-image-cta-grid">
	<div class="container position-relative px-0 pt-0">

		<?php if (get_sub_field('three_up_image_cta_grid_title')) : ?>
			<div class="col">
				<div class="flourish mb-2"></div>
				<h2 class="mb-4">
					<?php the_sub_field('three_up_image_cta_grid_title'); ?>
				</h2>
			</div>
		<?php endif; ?>

		<?php if (have_rows('three_up_image_cta_grid_columns')) : ?>
			<?php $i = 0; ?>
			<?php while(have_rows('three_up_image_cta_grid_columns')) : the_row(); ?>
				<?php $i++; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php // echo $i; ?>

		<?php if (have_rows('three_up_image_cta_grid_columns')) : ?>
			<?php // $i = 0; ?>
			<div class="same-height-wrapper content-column-wrapper row d-flex justify-content-center mx-0">
			<?php while(have_rows('three_up_image_cta_grid_columns')) : the_row(); ?>
				<?php if (get_sub_field('three_up_image_cta_grid_image')) :
					$three_up_image_cta_grid_image_class = 'has-image'; ?>
				<?php else: ?>
					<?php $three_up_image_cta_grid_image_class = 'no-image'; ?>
				<?php endif; ?>
				<div class="column col-lg mb-5 mb-lg-0 <?php echo $three_up_image_cta_grid_image_class; ?>">
					<div id="content-column-<?php echo $i; ?>" class="content-column mb-0">
						<?php if (get_sub_field('three_up_image_cta_grid_image')) :
							$three_up_image_cta_grid_image = get_sub_field('three_up_image_cta_grid_image'); ?>
							<?php /* if ($i <= 2): ?>
								<div class="image background-image" style="height:335px; background-image:url('<?php echo $three_up_image_cta_grid_image['url']; ?>');"></div>
							<?php endif; ?>
							<?php // echo $i; */ ?>
							<?php // if ($i > 2): ?>
								<div class="image background-image" style="height:224px; background-image:url('<?php echo $three_up_image_cta_grid_image['url']; ?>');"></div>
							<?php // endif; ?>
						<?php endif; ?>

						<div class="position-relative text pt-1">

							<?php /* if ($i <= 2): ?>
								<div style="left:0;" class="flourish"></div>
							<?php endif; */ ?>

							<?php if (get_sub_field('three_up_image_cta_grid_title')) : ?>
								<h3 class="h2 primary-color mb-2">
									<?php the_sub_field('three_up_image_cta_grid_title'); ?>
								</h3>
							<?php endif; ?>

							<?php if (get_sub_field('three_up_image_cta_grid_tag')) : ?>
								<div class="tag-title mt-4 mt-lg-0">
									<span>
										<?php the_sub_field('three_up_image_cta_grid_tag'); ?>
									</span>
								</div>
							<?php endif; ?>

							<?php if (get_sub_field('three_up_image_cta_grid_text')) : ?>
								<p class="same-height mb-2 mb-lg-4">
									<?php the_sub_field('three_up_image_cta_grid_text'); ?>
								</p>
							<?php endif; ?>

							<?php /*if ($i <= 2): ?>
								<?php if (get_sub_field('three_up_image_cta_grid_cta')) : ?>
									<?php $three_up_image_cta_grid_cta = get_sub_field('three_up_image_cta_grid_cta'); ?>
									<a class="btn btn-secondary" href="<?php echo $three_up_image_cta_grid_cta['url']; ?>" target="<?php echo $three_up_image_cta_grid_cta['target']; ?>">
										<?php echo $three_up_image_cta_grid_cta['title']; ?>
									</a>
								<?php endif; ?>
							<?php else : */?>
								<?php if (get_sub_field('three_up_image_cta_grid_cta')) : ?>
									<?php $three_up_image_cta_grid_cta = get_sub_field('three_up_image_cta_grid_cta'); ?>
									<a style="white-space: break-spaces;" class="text-left btn btn-text px-0" href="<?php echo $three_up_image_cta_grid_cta['url']; ?>" target="<?php echo $three_up_image_cta_grid_cta['target']; ?>">
										<span><?php echo $three_up_image_cta_grid_cta['title']; ?></span>
										<i class="fas fa-chevron-right"></i>
									</a>
								<?php endif; ?>
							<?php // endif; ?>
						</div>
					</div>
				</div>
				<?php // $i++; ?>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
