<?php
//-----------------------------------------------------
// Image CTA Grids
//-----------------------------------------------------
?>

<section class="container-fluid p-0 image-cta-grids">
	<div class="container-fluid">
		<div class="row ">
			<?php if (have_rows('image_cta_grid')) : ?>
				<?php while(have_rows('image_cta_grid')) : the_row(); ?>

					<?php if (get_field('image_cta_grid_image')) : ?>
						<img src="<?php the_field('image_cta_grid_image'); ?>" alt="<?php the_field(''); ?>">
					<?php endif; ?>
					<?php if (get_sub_field('image_cta_grid_title')) : ?>
						<?php the_sub_field('image_cta_grid_title'); ?>
					<?php endif; ?>

					<?php if (have_rows('image_cta_grid_ctas')) : ?>
						<?php while(have_rows('image_cta_grid_ctas')) : the_row(); ?>

							<?php if (get_sub_field('image_cta_grid_cta')) : ?>
								<?php the_sub_field('image_cta_grid_cta'); ?>
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
