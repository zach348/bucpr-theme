<?php
//-----------------------------------------------------
// Intro Text
//-----------------------------------------------------
?>

<section class="container-fluid intro-text pb-0">
	<div class="container pt-0 position-relative">
		<div class="flourish"></div>
		<div class="row m-0 p-0">
			<div class="col-12 col-xl-10 p-0">

				<?php if (get_sub_field('intro_text_header')) : ?>
					<h2 class="primary-color">
						<?php the_sub_field('intro_text_header'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_sub_field('intro_text_html')) : ?>
					<div class="mt-2 mt-lg-0">
						<?php the_sub_field('intro_text_html'); ?>
					</div>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_body')) : ?>
					<?php the_sub_field('full_width_text_body'); ?>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_flourish')) :
					$image = get_sub_field('full_width_text_flourish'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
