<article class="container mb-5" id="post-<?php // the_ID(); ?>" <?php post_class(); ?>>
	<div class="row mb-2">

		<?php if (get_field('resource_image')) : ?>
			<div class="image col-sm d-flex align-items-center">
				<?php $product_image = get_field('product_image'); ?>
				<img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>"/>
			</div>
		<?php endif; ?>

		<div class="content col-sm-9 d-flex align-items-center justify-content-left flex-wrap">
			<div>
				<div class="w-100">
					<p class="mb-0 color-secondary">
						<?php get_template_part( 'template-parts/helpers/primary-category' ); ?>
					</p>
				</div>
				<h2 class="h4 h5-mobile mb-2 mb-lg-1 w-100">
					<a class="color-primary" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php if (get_field('product_author') || get_field('product_editor')) : ?>
					<p class="author-editor h6-mobile font-weight-bold-mobile mb-0">
						<?php the_field('product_author'); ?><?php if (get_field('product_editor')) : ?> and <?php endif; ?><?php the_field('product_editor'); ?>
					</p>
				<?php endif; ?>
				<a class="btn btn-text color-primary w-100 text-left justify-content-start mt-4 pl-0" href="<?php the_permalink(); ?>" title="">
					Learn More <i class="fas fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</article>
