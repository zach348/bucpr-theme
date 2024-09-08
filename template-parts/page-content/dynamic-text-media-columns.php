<?php
//-----------------------------------------------------
// Dynamic Text/Media Columns
//-----------------------------------------------------
?>

<section class="container-fluid dynamic-text-media-columns">
	<div class="container">
		<?php if (have_rows('dynamic_text_media_column_repeater')) : ?>
			<?php while(have_rows('dynamic_text_media_column_repeater')) : the_row(); ?>
				<div class="row mx-0 <?php the_sub_field('dynamic_text_media_column_orientation'); ?>">
					<div class="col-lg d-flex pl-0">
						<div class="text d-flex justify-content-center align-items-start mt-3 mt-lg-0">
							<div class="container-fluid inner position-relative pl-0 pl-lg-5 ml-0 ml-lg-auto">
								<div class="d-none d-lg-block flourish position-relative mb-3"></div>
								<?php if (get_sub_field('dynamic_text_media_column_title')) : ?>
									<h2 class="primary-color mb-3">
										<?php the_sub_field('dynamic_text_media_column_title'); ?>
									</h2>
								<?php endif; ?>

								<?php if (get_sub_field('dynamic_text_media_column_body')) : ?>
									<p>
										<?php the_sub_field('dynamic_text_media_column_body'); ?>
									</p>
								<?php endif; ?>

								<?php if (get_sub_field('dynamic_text_media_column_cta')) : ?>
									<?php $dynamic_text_media_column_cta = get_sub_field('dynamic_text_media_column_cta'); ?>
									<a class="btn btn-secondary mb-0 mt-2 mt-lg-3" href="<?php echo $dynamic_text_media_column_cta['url']; ?>" target="<?php echo $dynamic_text_media_column_cta['target']; ?>">
										<?php echo $dynamic_text_media_column_cta['title']; ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php if (get_sub_field('dynamic_text_media_column_image')) : ?>
						<?php $dynamic_text_media_column_image = get_sub_field('dynamic_text_media_column_image'); ?>
						<div class="col-lg p-0 d-flex align-items-center">
							<!-- <div class="image d-block h-100 w-100" style="background-image:url('<?php echo $dynamic_text_media_column_image['url']; ?>');"></div> -->
							<div class="inner mx-0">
								<img src="<?php echo $dynamic_text_media_column_image['url']; ?>" />
								<p class="caption d-block w-100 clear-both">
									<?php echo $dynamic_text_media_column_image['caption']; ?>
								</p>
							</div>
						</div>
					<?php endif; ?>

				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
