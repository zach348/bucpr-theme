<div class="product-content container" id="" data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

	<?php // DESCRIPTION ?>
	<?php if (get_field('product_description_tab_toggle')) : ?>
		<div class="product-section description-section pb-5 mb-5" id="<?php echo $product_description_tab_name; ?>">
			<?php if (get_field('product_description_tab_name')) : ?>
				<h2 class="color-primary"><?php the_field('product_description_tab_name'); ?></h2>
			<?php endif; ?>
			<?php if (get_field('product_description_tab_content')) : ?>
				<div><?php the_field('product_description_tab_content'); ?></div>
			<?php endif; ?>
			<?php if (get_field('product_description_tab_citation')) : ?>
				<div class="citation mb-5">
					<?php the_field('product_description_tab_citation'); ?>
				</div>
			<?php endif; ?>
			<?php if (get_field('product_description_tab_product_details')) : ?>
				<div class="mt-5">
					<h4 class="color-primary">
						Product Details
					</h4>
					<?php the_field('product_description_tab_product_details'); ?>
				</div>
			<?php endif; ?>
			<?php if (get_field('product_description_tab_companion_product')) : ?>
				<div class="mt-5 mb-5">
					<h4 class="color-primary">
						Companion Product
					</h4>
					<?php the_field('product_description_tab_companion_product'); ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // TABLE OF CONTENTS ?>
	<?php if (get_field('product_table_of_content_tab_toggle')) : ?>
		<div class="product-section pb-5 mb-5" id="<?php echo $product_table_of_content_tab_name; ?>">
			<?php if (get_field('product_table_of_content_tab_name')) : ?>
				<h2 class="color-primary">
					<?php the_field('product_table_of_content_tab_name'); ?>
				</h2>
			<?php endif; ?>
			<?php if (get_field('product_table_of_contents_content')) : ?>
				<div><?php the_field('product_table_of_contents_content'); ?></div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // AUTHORS ?>
	<?php if (get_field('product_author_tab_toggle')) : ?>
		<div class="product-section pb-5 mb-5" id="<?php echo $product_author_tab_name; ?>">
			<?php if (get_field('product_author_tab_name')) : ?>
				<h2 class="color-primary">
					<?php the_field('product_author_tab_name'); ?>
				</h2>
			<?php endif; ?>
			<?php if (have_rows('product_author_tab_authors')) : ?>
				<div class="row">
					<?php while(have_rows('product_author_tab_authors')) : the_row(); ?>
						<div class="author d-flex mb-5 row m-0">
							<?php if (get_sub_field('product_author_tab_author_image')) : ?>
								<div class="image col-sm-3 mb-3 mb-lg-0 pt-2">
									<?php $product_author_tab_author_image = get_sub_field('product_author_tab_author_image'); ?>
									<img src="<?php echo $product_author_tab_author_image['url']; ?>" alt="<?php echo $product_author_tab_author_image['alt']; ?>"/>
								</div>
							<?php endif; ?>
							<?php if (get_sub_field('product_author_tab_author_name') || get_sub_field('product_author_tab_author_bio')): ?>
								<div class="content col-sm-9">
									<?php if (get_sub_field('product_author_tab_author_name')) : ?>
										<h4 class="color-primary">
											<?php the_sub_field('product_author_tab_author_name'); ?>
										</h4>
									<?php endif; ?>
									<?php if (get_sub_field('product_author_tab_author_bio')) : ?>
										<div><?php the_sub_field('product_author_tab_author_bio'); ?></div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // REVIEWS ?>
	<?php if (get_field('product_reviews_tab_toggle')) : ?>
		<div class="product-section pb-5 mb-5" id="<?php echo $product_or_resources_reviews_tab_name; ?>">
			<?php if (get_field('product_reviews_tab_name')) : ?>
				<h2 class="color-primary">
					<?php the_field('product_reviews_tab_name'); ?>
				</h2>
			<?php endif; ?>
			<?php if (get_field('product_reviews_content')) : ?>
				<div><?php the_field('product_reviews_content'); ?></div>
			<?php else : ?>
				<?php if (get_field('product_no_reviews_message')) : ?>
					<div>
						<p><?php the_field('product_no_reviews_message'); ?></p>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // RELATED CONTENT ?>
	<?php if (get_field('product_related_content_tab_toggle')) : ?>
		<div class="product-section pb-0 mb-5" id="<?php echo $product_related_content_tab_name; ?>">
			<?php if (get_field('product_related_content_tab_name')) : ?>
				<h2 class="color-primary">
					<?php the_field('product_related_content_tab_name'); ?>
				</h2>
			<?php endif; ?>
			<?php if (get_field('product_related_content_tab_content')) : ?>
				<div><?php the_field('product_related_content_tab_content'); ?></div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
