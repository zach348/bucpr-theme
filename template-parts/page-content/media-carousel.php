<?php
//-----------------------------------------------------
// Media Carousel
//-----------------------------------------------------
?>

<section class="container-fluid p-0 media-carousel d-flex align-items-center justify-content-center" style="background-image:url('<?php the_sub_field('media_carousel_background_image'); ?>');">
	<div class="container">
		<div class="section-title">
			<?php if (get_sub_field('media_carousel_title')) : ?>
				<h2 class="display-3">
					<?php the_sub_field('media_carousel_title'); ?>
				</h2>
			<?php endif; ?>
		</div>
		<div class="media-carousel-inner">
			<?php if (have_rows('media_carousel_repeater')) : ?>
				<?php while(have_rows('media_carousel_repeater')) : the_row(); ?>
					<?php if (get_sub_field('media_carousel_image')) : ?>
						<div class="col p-4">
						<?php $media_carousel_image = get_sub_field('media_carousel_image'); ?>
						<img src="<?php echo $media_carousel_image['sizes']['medium']; ?>" alt="<?php echo $media_carousel_image['alt']; ?>"/>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
