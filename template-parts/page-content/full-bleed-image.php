<?php
//-----------------------------------------------------
// Full Bleed Image
//-----------------------------------------------------
?>

<section class="container-fluid px-0 full-bleed-image">
	<div class="container">
		<div class="row col m-0 p-0">
			<?php if (get_sub_field('full_bleed_image')) : ?>
				<?php $full_bleed_image = get_sub_field('full_bleed_image'); ?>
				<figure>
					<img src="<?php echo $full_bleed_image['url']; ?>" alt="<?php echo $full_bleed_image['alt']; ?>">
					<figcaption class="col d-flex justify-content-start w-100 mt-2 px-lg-0 pl-xl-0">
						<?php echo $full_bleed_image['caption']; ?>
					</figcaption>
				</figure>
			<?php endif; ?>
		</div>
	</div>
</section>
