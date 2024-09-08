<?php
//-----------------------------------------------------
// Resource Columns and Text
//-----------------------------------------------------
?>

<section class="container-fluid resource-columns-and-text">
	<div class="container position-relative">
		<div class="flourish"></div>
		<div class="row">
			<div class="col same-height-wrapper">

				<?php if (get_sub_field('resource_columns_and_text_title')) : ?>
					<h2 class="display-5">
						<?php the_sub_field('resource_columns_and_text_title'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_sub_field('resource_columns_and_text_body')) : ?>
					<p>
						<?php the_sub_field('resource_columns_and_text_body'); ?>
					</p>
				<?php endif; ?>

				<?php if (have_rows('resource_columns_and_text_repeater')) : ?>
					<div class="row m-0 mt-4 mt-lg-5 p-0 d-flex justify-content-between">
					<?php while(have_rows('resource_columns_and_text_repeater')) : the_row(); ?>
						<div class="column col-lg px-0 pr-md-3 pr-xl-0 pl-md-0 pr-md-4 mb-5 mb-lg-0">

							<?php if (get_sub_field('resource_columns_and_text_tag')) : ?>
								<div class="tag-title mt-4 mt-lg-0">
									<span><?php the_sub_field('resource_columns_and_text_tag'); ?></span>
								</div>
							<?php endif; ?>

							<?php if (get_sub_field('resource_columns_and_text_text')) : ?>
								<p class="same-height">
									<?php the_sub_field('resource_columns_and_text_text'); ?>
								</p>
							<?php endif; ?>

							<?php if (get_sub_field('resource_columns_and_text_cta')) : ?>
								<?php $resource_columns_and_text_cta = get_sub_field('resource_columns_and_text_cta'); ?>
								<a class="btn btn-text px-0" href="<?php echo $resource_columns_and_text_cta['url']; ?>" title="<?php echo $resource_columns_and_text_cta['title']; ?>" target="<?php echo $resource_columns_and_text_cta['target']; ?>" >
									<span>
										<?php echo $resource_columns_and_text_cta['title']; ?>
									</span>
									<i class="fas fa-chevron-right"></i>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
