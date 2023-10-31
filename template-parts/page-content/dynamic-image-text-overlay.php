<?php
//-----------------------------------------------------
// Dynamic Image w/ Text Overlay
//-----------------------------------------------------
?>
<section class="container-fluid p-0 dynamic-image-text-overlay">
	<div class="background-image py-1" style="background-image:url('<?php the_sub_field('dynamic_image_w_text_overlay_image'); ?>');">
		<div class="text container text-center py-4">
			<?php if (get_sub_field('dynamic_image_text_overlay_title')) : ?>
				<h2 class="color-white mb-3">
					<?php the_sub_field('dynamic_image_text_overlay_title'); ?>
				</h2>
			<?php endif; ?>

			<?php if (get_sub_field('dynamic_image_text_overlay_text')) : ?>
				<p class="color-white">
					<?php the_sub_field('dynamic_image_text_overlay_text'); ?>
				</p>
			<?php endif; ?>

			<?php if (get_sub_field('dynamic_image_text_overlay_cta')) : ?>
				<?php $dynamic_image_text_overlay_cta = get_sub_field('dynamic_image_text_overlay_cta'); ?>
				<a class="btn btn-outline-light" href="<?php echo $dynamic_image_text_overlay_cta['url']; ?>" target="<?php echo $dynamic_image_text_overlay_cta['target']; ?>">
					<?php echo $dynamic_image_text_overlay_cta['title']; ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="overlay"></div>
	</div>
</section>
