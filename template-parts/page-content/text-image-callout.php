<?php
//-----------------------------------------------------
// Text and Image Callout
//-----------------------------------------------------
?>

<section class="container-fluid text-image-callout">

	<?php if( get_sub_field('text_and_image_callout_orientation') == 'image-left-text-right' ): ?>
		<?php $orientation = 'flex-row-reverse';?>
	<?php else : ?>
		<?php $orientation = 'flex-row';?>
	<?php endif; ?>

	<div class="container">
		<div class="inner">
			<div class="row <?php echo $orientation; ?>">
				<?php if (get_sub_field('text_and_image_callout_image')) : ?>
					<?php $text_align = 'text-left'; ?>
					<?php $text_and_image_callout_image = get_sub_field('text_and_image_callout_image'); ?>
					<div class="col-lg-7 d-flex d-lg-none">
						<div class="image background-image w-100 h-100" style="background-image:url('<?php echo $text_and_image_callout_image['url']; ?>');"></div>
					</div>
				<?php else: ?>
					<?php $text_align = 'text-center'; ?>
				<?php endif; ?>
				<?php if (get_sub_field('text_and_image_callout_text')) : ?>
					<div class="col text d-flex align-items-center p-5">
						<h3 class="m-0 m-lg-3 <?php echo $text_align; ?>">
							<?php the_sub_field('text_and_image_callout_text'); ?>
						</h3>
					</div>
				<?php endif; ?>
				<?php if (get_sub_field('text_and_image_callout_image')) : ?>
					<?php $text_align = 'text-left'; ?>
					<?php $text_and_image_callout_image = get_sub_field('text_and_image_callout_image'); ?>
					<div class="col-lg-7 d-none d-lg-flex">
						<div class="image background-image w-100 h-100" style="background-image:url('<?php echo $text_and_image_callout_image['url']; ?>');"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
