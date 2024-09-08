<div class="products-hero jumbotron jumbotron-fluid mb-0 pb-3">
	<div class="inner container">
		<div class="row d-flex justify-content-between mx-0 align-items-start">

			<?php if (get_field('product_image')) : ?>

				<div class="image col-md row m-0 px-0 row d-flex align-items-start">
					<div class="mobile-title col-12 w-100 d-flex d-md-none flex-wrap row">
						<h1 class="title mt-0 mb-2 mb-lg-3">
							<?php the_title(); ?>
						</h1>

						<?php if (get_field('product_author') || get_field('product_editor')) : ?>
							<h2 class="color-primary author-editor mb-4">
								<?php the_field('product_author'); ?>
								<?php if (get_field('product_author') && get_field('product_editor')) : ?>
									and
								<?php endif; ?>
								<?php the_field('product_editor'); ?>
							</h2>
						<?php endif; ?>

					</div>

					<?php $product_image = get_field('product_image'); ?>
					<?php if ($product_image): ?>
						<div class="col-7 col-sm-auto col-md-12 d-flex flex-wrap pl-0 align-items-start">
							<div class="w-100 mb-2">
								<img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>"/>
							</div>
							<div class="w-100">
								<h5>
									<?php get_template_part( 'template-parts/helpers/primary-category-research-project-type' ); ?>
								</h5>
							</div>
						</div>
					<?php endif; ?>

					<div class="mobile-pricing col-5 d-flex d-md-none flex-wrap row">
						<?php if (get_field('product_sale_price_toggle')) : ?>
							<?php if (get_field('product_sale_price')) : ?>
								<div class="sale-price-wrapper col-12 w-100 mb-3 px-0">
									<p class="sale-price h2 font-weight-bold color-secondary mb-0">$<?php the_field('product_sale_price'); ?></p>
									<p class="regular-price mb-0">Was: $<?php the_field('product_regular_price'); ?></p>
								</div>
							<?php endif; ?>
						<?php else : ?>
							<?php if (get_field('product_regular_price')) : ?>
								<div class="regular-price-wrapper px-0">
									<p>$<?php the_field('product_regular_price'); ?></p>
								</div>
							<?php endif; ?>
						<?php endif; ?>
						<?php if (get_field('product_add_to_cart_link')) : ?>
							<div class="commerce col-12 w-100 d-flex flex-wrap mb-4 px-0">
								<?php $product_add_to_cart_link = get_field('product_add_to_cart_link'); ?>
								<div class="w-100">
									<a class="btn btn-secondary mb-2 mt-0" href="<?php echo $product_add_to_cart_link['url']; ?>" title="<?php echo $product_add_to_cart_link['title']; ?>" target="<?php echo $product_add_to_cart_link['target']; ?>">
										<?php echo $product_add_to_cart_link['title']; ?>
									</a>
								</div>
								<?php if (get_field('products_view_cart_link','option')) : ?>
									<?php $products_view_cart_link = get_field('products_view_cart_link','option'); ?>
									<div class="w-100">
										<a class="cart-link h5 text-decoration-none text-decoration-hover-underline" href="<?php echo $products_view_cart_link['url']; ?>" title="<?php echo $products_view_cart_link['title']; ?>" target="<?php echo $products_view_cart_link['target']; ?>">
											<?php echo $products_view_cart_link['title']; ?>
										</a>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

				<div class="link-wrapper w-100">
					<?php if (have_rows('product_preview_links')) : ?>
						<ul class="list-style-none w-100 m-0 mt-3 p-0 mb-3">
							<?php while(have_rows('product_preview_links')) : the_row(); ?>
								<li class="h6 m-0 mb-2 p-0">
									<?php if (get_sub_field('product_preview_file')) : ?>
										<?php $product_preview_link = get_sub_field('product_preview_file'); ?>
										<a class="color-secondary text-decoration-none text-decoration-hover-underline" href="<?php echo $product_preview_link['url']; ?>" title="<?php // echo $product_preview_link['title']; ?>" target="<?php //echo $product_preview_link['target']; ?>">
											<?php if (get_sub_field('product_preview_button_text')) : ?>
												<?php the_sub_field('product_preview_button_text'); ?>
											<?php else: ?>
												<?php echo 'Learn More'; ?>
											<?php endif; ?>
										</a>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<?php if (have_rows('product_permissions_links')) : ?>
						<ul class="list-style-none w-100 m-0 p-0">
							<?php while(have_rows('product_permissions_links')) : the_row(); ?>
								<li class="h6 m-0 mb-2 p-0">
									<?php if (get_sub_field('product_permissions_link')) : ?>
										<?php $product_permissions_link = get_sub_field('product_permissions_link'); ?>
										<a class="color-secondary text-decoration-none text-decoration-hover-underline" href="<?php echo $product_permissions_link['url']; ?>" title="<?php echo $product_permissions_link['title']; ?>" target="<?php echo $product_permissions_link['target']; ?>">
											<?php echo $product_permissions_link['title']; ?>
										</a>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-md content px-0 pl-4">
				<div class="d-none d-md-block">
					<h1 class="title mt-0 mb-2">
						<?php the_title(); ?>
					</h1>
					<?php if (get_field('product_author') || get_field('product_editor')) : ?>
						<h2 class="author-editor color-primary mb-4">
							<?php the_field('product_author'); ?>
							<?php if (get_field('product_author') && get_field('product_editor')) : ?>
								and
							<?php endif; ?>
							<?php the_field('product_editor'); ?>
						</h2>
					<?php endif; ?>
					<?php if (get_field('product_sale_price_toggle')) : ?>
						<?php if (get_field('product_sale_price')) : ?>
							<div class="sale-price-wrapper mb-4">
								<p class="sale-price h2 font-weight-bold color-secondary mb-0">
									$<?php the_field('product_sale_price'); ?>
								</p>
								<h5 class="regular-price">
									Was: $<?php the_field('product_regular_price'); ?>
								</h5>
							</div>
						<?php endif; ?>
					<?php else : ?>
						<?php if (get_field('product_regular_price')) : ?>
							<div class="regular-price-wrapper">
								<p>$<?php the_field('product_regular_price'); ?></p>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					<?php if (get_field('product_add_to_cart_link')) : ?>
						<div class="commerce d-flex flex-wrap mb-4">
							<?php $product_add_to_cart_link = get_field('product_add_to_cart_link'); ?>
							<div class="w-100">
								<a class="btn btn-secondary mb-2" href="<?php echo $product_add_to_cart_link['url']; ?>" title="<?php echo $product_add_to_cart_link['title']; ?>" target="<?php echo $product_add_to_cart_link['target']; ?>">
									<?php echo $product_add_to_cart_link['title']; ?>
								</a>
							</div>
							<?php if (get_field('products_view_cart_link','option')) : ?>
								<?php $products_view_cart_link = get_field('products_view_cart_link','option'); ?>
								<div class="w-100">
									<a class="h5 cart-link text-decoration-none text-decoration-hover-underline" href="<?php echo $products_view_cart_link['url']; ?>" title="<?php echo $products_view_cart_link['title']; ?>" target="<?php echo $products_view_cart_link['target']; ?>">
										<?php echo $products_view_cart_link['title']; ?>
									</a>
								</div>
							<?php endif; ?>

						</div>
					<?php endif; ?>
				</div>
				<?php if (get_field('product_audience_content')) : ?>
					<div class="audience mb-4 mt-4 mt-md-0">
						<h4 class="color-primary audience-title mb-2">Audience</h4>
						<?php the_field('product_audience_content'); ?>
					</div>
				<?php endif; ?>

				<?php if (have_rows('additional_materials')) : ?>
					<div class="additional-materials mb-4">
						<h4 class="color-primary additional-materials-title mb-2">
							Additional Materials for Purchase
						</h4>
						<ul class="list-style-none additional-materials m-0 p-0">
							<?php while(have_rows('additional_materials')) : the_row(); ?>
								<li>
								<?php if (get_sub_field('additional_material')) : ?>
									<?php $additional_material = get_sub_field('additional_material'); ?>
									<a href="<?php echo $additional_material['url']; ?>" title="<?php echo $additional_material['title']; ?>" target="_blank">
										<i class="far fa-plus"></i> <?php echo $additional_material['title']; ?>
									</a>
								<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
