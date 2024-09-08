<?php
//-----------------------------------------------------
// Reusable CTA Block
//-----------------------------------------------------
?>

<section class="container-fluid reusable-cta-block">
	<div class="container px-3">
		<div class="inner background-primary-color p-0">

			<?php if( get_sub_field('reusable_cta_block_orientation') == 'cta-left' ): ?>
				<div class="row d-flex flex-row-reverse m-0 p-0">
			<?php endif; ?>

			<?php if( get_sub_field('reusable_cta_block_orientation') == 'cta-right' ): ?>
				<div class="row d-flex flex-row m-0 p-0">
			<?php endif; ?>

				<?php if (get_sub_field('reusable_cta_block_text')) : ?>
					<div class="text col-md-9 p-5 d-flex justify-content-center align-items-center">
						<h3 class="secondary-font color-white my-0 mx-0 mx-lg-5">
							<?php the_sub_field('reusable_cta_block_text'); ?>
						</h3>
					</div>
				<?php endif; ?>

				<?php if( get_sub_field('reusable_cta_block_cta_toggle') == 'link' ): ?>
					<?php if (get_sub_field('reusable_cta_block_link')) : ?>
						<div class="cta background-secondary-color col-md-3 py-4 py-md-5 d-flex justify-content-center align-items-center">
							<?php $reusable_cta_block_link = get_sub_field('reusable_cta_block_link'); ?>
							<a class="btn btn-outline-light" href="<?php echo $reusable_cta_block_link['url']; ?>" title="<?php echo $reusable_cta_block_link['title']; ?>" target="<?php echo $reusable_cta_block_link['target']; ?>">
								<?php echo $reusable_cta_block_link['title']; ?>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php if( get_sub_field('reusable_cta_block_cta_toggle') == 'download' ): ?>
					<?php if (get_sub_field('reusable_cta_block_download')) : ?>
						<div class="cta background-secondary-color col-md-3 py-4 py-md-5 d-flex justify-content-center align-items-center">
							<?php $reusable_cta_block_download = get_sub_field('reusable_cta_block_download'); ?>
							<a class="btn btn-outline-light" href="<?php echo $reusable_cta_block_download['url']; ?>" title="<?php echo $reusable_cta_block_download['title']; ?>" target="<?php echo $reusable_cta_block_download['target']; ?>">
								<?php // echo $reusable_cta_block_download['title']; ?>
								Download
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>


			</div>
		</div>
	</div>
</section>
