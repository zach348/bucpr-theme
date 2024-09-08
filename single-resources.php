<?php get_header(); ?>

	<div id="primary" class="content-area">


		<div class="resources-hero jumbotron jumbotron-fluid mb-0 pb-5">
      <div class="inner container">
        <div class="row d-flex justify-content-between mx-0 align-items-start">

					<?php if (get_field('resource_image')) : ?>

						<div class="image col-md row m-0 px-0 row d-flex align-items-start">
							<div class="mobile-title col-12 w-100 d-flex d-md-none flex-wrap row">
								<h1 class="title mt-0 mb-2 mb-lg-3">
									<?php the_title(); ?>
								</h1>

								<?php if (get_field('resource_author') || get_field('resource_editor')) : ?>
		              <h2 class="color-primary author-editor mb-4">
		                <?php the_field('resource_author'); ?><?php if (get_field('resource_editor')) : ?> and <?php endif; ?><?php the_field('resource_editor'); ?>
		              </h2>
		            <?php endif; ?>
							</div>

              <?php $resource_image = get_field('resource_image'); ?>
							<?php if ($resource_image): ?>
								<div class="col-12 d-flex flex-wrap px-0 align-items-start">
									<div class="w-100 mb-2">
										<img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>"/>
									</div>
									<div class="w-100">
										<h5>
											<?php get_template_part( 'template-parts/helpers/primary-category-research-project-type' ); ?>
										</h5>
									</div>
								</div>
							<?php endif; ?>

							<div class="mobile-pricing col-5 d-none">
								<?php /* if (get_field('resource_sale_price_toggle')) : ?>
		              <?php if (get_field('resource_sale_price')) : ?>
		                <div class="sale-price-wrapper col-12 w-100 mb-3 px-0">
		                  <p class="sale-price h2 font-weight-bold color-secondary mb-0">$<?php the_field('resource_sale_price'); ?></p>
		                  <p class="regular-price mb-0">Was: $<?php the_field('resource_regular_price'); ?></p>
		                </div>
		              <?php endif; ?>
		            <?php else : ?>
		              <?php if (get_field('resource_regular_price')) : ?>
		                <div class="regular-price-wrapper px-0">
		                  <p>$<?php the_field('resource_regular_price'); ?></p>
		                </div>
		              <?php endif; ?>
		            <?php endif; */ ?>
		            <?php if (get_field('resource_download')) : ?>
		              <div class="commerce col-12 w-100 d-flex flex-wrap mb-4 px-0">
		                <?php $resource_download = get_field('resource_download'); ?>
		                <div class="w-100">
		                  <a class="btn btn-secondary mb-2 mt-0" href="<?php echo $resource_download['url']; ?>" title="<?php echo $resource_download['title']; ?>" target="<?php echo $resource_download['target']; ?>">
		                    <i class="fas fa-download mr-2"></i> <?php // echo $resource_download['title']; ?> Download
		                  </a>
		                </div>
										<?php /* if (get_field('resources_view_cart_link','option')) : ?>
											<?php $resources_view_cart_link = get_field('resources_view_cart_link','option'); ?>
											<div class="w-100">
			                  <a class="cart-link h5 text-decoration-none text-decoration-hover-underline" href="<?php echo $resources_view_cart_link['url']; ?>" title="<?php echo $resources_view_cart_link['title']; ?>" target="<?php echo $resources_view_cart_link['target']; ?>">
			                    <?php echo $resources_view_cart_link['title']; ?>
			                  </a>
			                </div>
										<?php endif; */ ?>
		              </div>
		            <?php endif; ?>
							</div>

						<div class="link-wrapper w-100">
	            <?php if (have_rows('resource_preview_links')) : ?>
								<ul class="list-style-none w-100 m-0 mt-3 p-0 mb-3">
	                <?php while(have_rows('resource_preview_links')) : the_row(); ?>
	                  <li class="h6 m-0 mb-2 p-0">
	                    <?php if (get_sub_field('resource_preview_file')) : ?>
	                      <?php $resource_preview_link = get_sub_field('resource_preview_file'); ?>
	                      <a class="color-secondary text-decoration-none text-decoration-hover-underline" href="<?php echo $resource_preview_link['url']; ?>" title="<?php // echo $resource_preview_link['title']; ?>" target="<?php //echo $resource_preview_link['target']; ?>">
	                        <?php if (get_sub_field('resource_preview_button_text')) : ?>
	                        	<?php the_sub_field('resource_preview_button_text'); ?>
													<?php else: ?>
														<?php echo 'Learn More'; ?>
	                        <?php endif; ?>
	                      </a>
	                    <?php endif; ?>
	                  </li>
	                <?php endwhile; ?>
	              </ul>
	            <?php endif; ?>
	            <?php if (have_rows('resource_permissions_links')) : ?>
	              <ul class="list-style-none w-100 m-0 p-0">
	                <?php while(have_rows('resource_permissions_links')) : the_row(); ?>
	                  <li class="h6 m-0 mb-2 p-0">
	                    <?php if (get_sub_field('resource_permissions_link')) : ?>
	                      <?php $resource_permissions_link = get_sub_field('resource_permissions_link'); ?>
	                      <a class="color-secondary text-decoration-none text-decoration-hover-underline" href="<?php echo $resource_permissions_link['url']; ?>" title="<?php echo $resource_permissions_link['title']; ?>" target="<?php echo $resource_permissions_link['target']; ?>">
	                        <?php echo $resource_permissions_link['title']; ?>
	                      </a>
	                    <?php endif; ?>
	                  </li>
	                <?php endwhile; ?>
	              </ul>
	            <?php endif; ?>
						</div>
          </div>
					<?php endif; ?>
          <div class="content col-md px-0 pl-4">
						<div class="d-none d-md-block">
	            <h1 class="title mt-0 mb-2">
								<?php the_title(); ?>
							</h1>
	            <?php if (get_field('resource_author') || get_field('resource_editor')) : ?>
	              <h2 class="author-editor color-primary mb-4">
	                <?php the_field('resource_author'); ?><?php if (get_field('resource_editor')) : ?> and <?php endif; ?><?php the_field('resource_editor'); ?>
	              </h2>
	            <?php endif; ?>
	            <?php /* if (get_field('resource_sale_price_toggle')) : ?>
	              <?php if (get_field('resource_sale_price')) : ?>
	                <div class="sale-price-wrapper mb-4">
	                  <p class="sale-price h2 font-weight-bold color-secondary mb-0">
											$<?php the_field('resource_sale_price'); ?>
										</p>
	                  <h5 class="regular-price">
											Was: $<?php the_field('resource_regular_price'); ?>
										</h5>
	                </div>
	              <?php endif; ?>
	            <?php else : ?>
	              <?php if (get_field('resource_regular_price')) : ?>
	                <div class="regular-price-wrapper">
	                  <p>$<?php the_field('resource_regular_price'); ?></p>
	                </div>
	              <?php endif; ?>
	            <?php endif; */ ?>
	            <?php if (get_field('resource_download')) : ?>
	              <div class="commerce d-flex flex-wrap mb-4">
	                <?php $resource_download = get_field('resource_download'); ?>
	                <div class="w-100">
	                  <a class="btn btn-secondary mb-2" href="<?php echo $resource_download['url']; ?>" title="<?php echo $resource_add_to_cart_link['title']; ?>" target="<?php echo $resource_add_to_cart_link['target']; ?>">
	                    <i class="fas fa-download mr-2"></i> <?php // echo $resource_download['title']; ?> Download
	                  </a>
	                </div>
									<?php /* if (get_field('resources_view_cart_link','option')) : ?>
										<?php $resources_view_cart_link = get_field('resources_view_cart_link','option'); ?>
										<div class="w-100">
		                  <a class="h5 cart-link text-decoration-none text-decoration-hover-underline" href="<?php echo $resources_view_cart_link['url']; ?>" title="<?php echo $resources_view_cart_link['title']; ?>" target="<?php echo $resources_view_cart_link['target']; ?>">
		                    <?php echo $resources_view_cart_link['title']; ?>
		                  </a>
		                </div>
									<?php endif; */ ?>

	              </div>
	            <?php endif; ?>
						</div>
            <?php if (get_field('resource_audience_content')) : ?>
              <div class="audience mb-4 mt-4 mt-md-0">
                <h4 class="d-none color-primary audience-title mb-2">Audience</h4>
                <?php the_field('resource_audience_content'); ?>
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



		<main id="main" class="site-main">

  		<?php while ( have_posts() ) : the_post(); ?>

				<?php if( get_field('resource_page_layout_toggle') == 'standard-layout' ) : ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endif; ?>

				<?php if( get_field('resource_page_layout_toggle') == 'product-layout' ) : ?>
					<?php include( locate_template( 'template-parts/product-nav.php', false, false ) ); ?>
					<?php include( locate_template( 'template-parts/product-content.php', false, false ) ); ?>
				<?php endif; ?>

  		<?php endwhile; ?>

		</main>
	</div>
	<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
