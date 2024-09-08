<div id="products-nav-wrapper" class="products-nav-wrapper container-fluid p-0 d-none d-md-flex align-items-center mb-5 border-bottom">
	<ul class="products-nav nav container mx-auto px-3 d-flex align-items-center justify-content-between h-100 list-group" id="list-example" role="">

		<?php // DESCRIPTION ?>
		<?php if (get_field('product_description_tab_toggle')) : ?>
			<?php if (get_field('product_description_tab_name')) : ?>
				<?php $product_description_tab_name = get_field('product_description_tab_name'); ?>
				<?php $product_description_tab_name = str_replace(' ', '-', strtolower($product_description_tab_name)); ?>
				<?php $product_description_tab_name = preg_replace('/[^ \w-]/', '', $product_description_tab_name); ?>
			<?php endif; ?>
			<li class="nav-item h-100 d-flex align-items-center position-relative active">
				<a class="h4 nav-link h-100 d-flex align-items-center position-relative" id="<?php echo $product_description_tab_name; ?>-tab" href="#<?php echo $product_description_tab_name; ?>">
					<?php if (get_field('product_description_tab_name')) : ?>
						<?php the_field('product_description_tab_name'); ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endif; ?>

		<?php // TABLE OF CONTENTS ?>
		<?php if (get_field('product_table_of_content_tab_toggle')) : ?>
			<?php if (get_field('product_table_of_content_tab_name')) : ?>
				<?php $product_table_of_content_tab_name = get_field('product_table_of_content_tab_name'); ?>
				<?php $product_table_of_content_tab_name = str_replace(' ', '-', strtolower($product_table_of_content_tab_name)); ?>
			<?php endif; ?>
			<li class="nav-item h-100 d-flex align-items-center position-relative">
				<a class="h4 nav-link h-100 d-flex align-items-center position-relative" id="<?php echo $product_table_of_content_tab_name; ?>-tab" href="#<?php echo $product_table_of_content_tab_name; ?>">
					<?php if (get_field('product_table_of_content_tab_name')) : ?>
						<?php the_field('product_table_of_content_tab_name'); ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endif; ?>

		<?php // AUTHORS ?>
		<?php if (get_field('product_author_tab_toggle')) : ?>
			<?php if (get_field('product_author_tab_name')) : ?>
				<?php $product_author_tab_name = get_field('product_author_tab_name'); ?>
				<?php $product_author_tab_name = str_replace(' ', '-', strtolower($product_author_tab_name)); ?>
			<?php endif; ?>
			<li class="nav-item h-100 d-flex align-items-center position-relative">
				<a class="h4 nav-link h-100 d-flex align-items-center position-relative" id="<?php echo $product_author_tab_name; ?>-tab" href="#<?php echo $product_author_tab_name; ?>">
					<?php if (get_field('product_author_tab_name')) : ?>
						<?php the_field('product_author_tab_name'); ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endif; ?>

		<?php // REVIEWS ?>
		<?php if (get_field('product_description_tab_toggle')) : ?>
			<?php if (get_field('product_reviews_tab_name')) : ?>
				<?php $product_or_resources_reviews_tab_name = get_field('product_reviews_tab_name'); ?>
				<?php $product_or_resources_reviews_tab_name = str_replace(' ', '-', strtolower($product_or_resources_reviews_tab_name)); ?>
				<?php $product_or_resources_reviews_tab_name = preg_replace('/[^ \w-]/', '', $product_or_resources_reviews_tab_name); ?>
				<?php $product_or_resources_reviews_tab_name = trim(preg_replace('/-+/', '-', $product_or_resources_reviews_tab_name), '-'); ?>
			<?php endif; ?>
			<li class="nav-item h-100 d-flex align-items-center position-relative">
				<a class="h4 nav-link h-100 d-flex align-items-center position-relative" id="<?php echo $product_or_resources_reviews_tab_name; ?>-tab" href="#<?php echo $product_or_resources_reviews_tab_name; ?>">
					<?php if (get_field('product_reviews_tab_name')) : ?>
						<?php the_field('product_reviews_tab_name'); ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endif; ?>

		<?php // RELATED CONTENT ?>
		<?php if (get_field('product_related_content_tab_toggle')) : ?>
			<?php if (get_field('product_related_content_tab_name')) : ?>
				<?php $product_related_content_tab_name = get_field('product_related_content_tab_name'); ?>
				<?php $product_related_content_tab_name = str_replace(' ', '-', strtolower($product_related_content_tab_name)); ?>
			<?php endif; ?>
			<li class="nav-item h-100 d-flex align-items-center position-relative">
				<a class="h4 nav-link h-100 d-flex align-items-center position-relative" id="<?php echo $product_related_content_tab_name; ?>-tab" href="#<?php echo $product_related_content_tab_name; ?>">
					<?php if (get_field('product_related_content_tab_name')) : ?>
						<?php the_field('product_related_content_tab_name'); ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
