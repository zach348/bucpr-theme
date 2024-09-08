<?php // Flex Content Sections ?>

<?php $counter = 0; ?>
<?php if( have_rows('theme_options_page_content','option') ): ?>
	<div class="container-fluid px-0 flexible-page-content pb-5">

	<?php while ( have_rows('theme_options_page_content','option') ) : the_row(); ?>

		<?php
		//-----------------------------------------------------
		// Dynamic Text/Media Columns
		//-----------------------------------------------------
		?>
		<?php if( get_row_layout() == 'dynamic_text_media_columns' ): ?>
			<?php get_template_part( 'template-parts/page-content/dynamic-text-media-columns' ); ?>

		<?php
		//-----------------------------------------------------
		// Dynamic Image w/ Text Overlay
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'dynamic_image_text_overlay' ): ?>
			<?php get_template_part( 'template-parts/page-content/dynamic-image-text-overlay' ); ?>

		<?php
		//-----------------------------------------------------
		// Media Carousel
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'media_carousel' ): ?>
			<?php get_template_part( 'template-parts/page-content/media-carousel' ); ?>

		<?php
		//-----------------------------------------------------
		// Full Width Text
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'full_width_text' ): ?>
			<?php get_template_part( 'template-parts/page-content/full-width-text' ); ?>

		<?php
		//-----------------------------------------------------
		// Full Bleed image
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'full_bleed_image' ): ?>
			<?php get_template_part( 'template-parts/page-content/full-bleed-image' ); ?>

		<?php
		//-----------------------------------------------------
		// Image CTA Grids
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'image_cta_grids' ): ?>
			<?php get_template_part( 'template-parts/page-content/image-cta-grids' ); ?>

		<?php
		//-----------------------------------------------------
		// Video Embed
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'video_embed' ): ?>
			<?php get_template_part( 'template-parts/page-content/video-embed' ); ?>

		<?php
		//-----------------------------------------------------
		// Content Columns
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'two_up_image_cta_grid' ): ?>
			<?php get_template_part( 'template-parts/page-content/two-up-image-cta-grid' ); ?>

		<?php
		//-----------------------------------------------------
		// Content Columns
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'three_up_image_cta_grid' ): ?>
			<?php get_template_part( 'template-parts/page-content/three-up-image-cta-grid' ); ?>

		<?php
		//-----------------------------------------------------
		// Text and Image Callout
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'text_and_image_callout' ): ?>
			<?php get_template_part( 'template-parts/page-content/text-image-callout' ); ?>

		<?php
		//-----------------------------------------------------
		// Blog Callout
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'blog_callout' ): ?>
			<?php get_template_part( 'template-parts/page-content/blog-callout' ); ?>

		<?php
		//-----------------------------------------------------
		// Reusable CTA Block
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'reusable_cta_block' ): ?>
			<?php get_template_part( 'template-parts/page-content/reusable-cta-block' ); ?>

		<?php
		//-----------------------------------------------------
		// Reusable CTA Block
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'resource_columns_and_text' ): ?>
			<?php get_template_part( 'template-parts/page-content/resource-columns-and-text' ); ?>

		<?php
		//-----------------------------------------------------
		// Intro Text
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'intro_text' ): ?>
			<?php get_template_part( 'template-parts/page-content/intro-text' ); ?>

		<?php
		//-----------------------------------------------------
		// Body Content
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'body_content' ): ?>
			<?php get_template_part( 'template-parts/page-content/body-content' ); ?>

		<?php
		//-----------------------------------------------------
		// Staff Listings
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'staff_listings' ): ?>
			<?php get_template_part( 'template-parts/page-content/staff-listings' ); ?>

		<?php
		//-----------------------------------------------------
		// Accordion Type One
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'accordion_type_one' ): ?>

			<?php // get_template_part( 'template-parts/page-content/accordion-type-one' ); ?>

			<?php $counter++; ?>
			<section id="accordion-type-one-<?php echo $counter; ?>" class="container-fluid accordion accordion-type-one">
				<div class="container">
					<?php if (get_sub_field('accordion_type_one_title')) : ?>
						<h2 class="h1 mb-4">
							<?php the_sub_field('accordion_type_one_title'); ?>
						</h2>
					<?php endif; ?>
					<?php if (have_rows('accordion_type_one_accordions')) : ?>
						<div class="accordion" id="accordionTypeOne">
							<?php $i = 1; ?>
							<?php while(have_rows('accordion_type_one_accordions')) : the_row(); ?>
								<div id="cardTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" class="card" >
							    <div id="headingTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" class="card-header row mx-0 d-flex justify-content-between align-items-start py-0 px-3 position-relative">
										<a class="btn btn-accordion position-absolute w-100 h-100 m-0 p-0 z-index-99" data-toggle="collapse" data-target="#collapseTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapseTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>"></a>
										<div class="col-10 col-sm-7 d-flex align-items-center justify-content-start pr-4">
											<?php if (get_sub_field('accordion_type_one_accordion_title')) : ?>
												<h3 class="h2 primary-color my-4"><?php the_sub_field('accordion_type_one_accordion_title'); ?></h3>
											<?php endif; ?>
										</div>
										<div class="col-sm-5 d-none d-sm-flex align-items-center justify-content-start">
											<?php if (get_sub_field('accordion_type_one_accordion_label')) : ?>
												<h3 class="h2 primary-color my-4"><?php the_sub_field('accordion_type_one_accordion_label'); ?></h3>
											<?php endif; ?>
										</div>
										<i class="open fal fa-minus position-absolute"></i>
										<i class="closed fal fa-plus position-absolute"></i>
							    </div>

									<?php if ($i == 1): ?>
										<div id="collapseTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeOne" */?>>
									<?php else: ?>
										<div id="collapseTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeOne-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeOne" */?>>
									<?php endif; ?>

							      <div class="card-body pt-0">
											<?php if (have_rows('accordion_type_one_accordion_internal_rows')) : ?>
												<div class="container-fluid">
													<?php while(have_rows('accordion_type_one_accordion_internal_rows')) : the_row(); ?>
														<div class="row mb-3">
															<?php if (get_sub_field('accordion_type_one_accordion_internal_row_title')) : ?>
																<?php $accordion_type_one_accordion_internal_row_title = get_sub_field('accordion_type_one_accordion_internal_row_title'); ?>
																<div class="col-sm-7">
																	<h4 class="mb-1">
																		<a href="<?php echo $accordion_type_one_accordion_internal_row_title['url']; ?>" title="<?php echo $accordion_type_one_accordion_internal_row_title['title']; ?>" target="<?php echo $accordion_type_one_accordion_internal_row_title['target']; ?>">
																			<?php echo $accordion_type_one_accordion_internal_row_title['title']; ?>
																		</a>
																	</h4>
																</div>
															<?php endif; ?>

															<?php if (get_sub_field('accordion_type_one_accordion_internal_row_label')) : ?>
																<div class="col-sm-5 pl-lg-4">
																	<h4 class="primary-color mb-1">
																		<?php the_sub_field('accordion_type_one_accordion_internal_row_label'); ?>
																	</h4>
																</div>
															<?php endif; ?>
														</div>
													<?php endwhile; ?>
												</div>
											<?php endif; ?>
							      </div>
							    </div>
							  </div>
								<?php $i++; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
			<?php // $k++; ?>

		<?php
		//-----------------------------------------------------
		// Accordion Type Two
		//-----------------------------------------------------
		?>

		<?php elseif( get_row_layout() == 'accordion_type_two' ): ?>

			<?php // get_template_part( 'template-parts/page-content/accordion-type-two' ); ?>

			<?php $counter++; ?>
			<section id="accordion-type-two-<?php echo $counter; ?>" class="container-fluid accordion accordion-type-two">
				<div class="container">
					<?php if (get_sub_field('accordion_type_two_title')) : ?>
						<h2 class="h1 mb-4">
							<?php the_sub_field('accordion_type_two_title'); ?>
						</h2>
					<?php endif; ?>
					<?php if (have_rows('accordion_type_two_accordions')) : ?>
						<div class="accordion" id="accordionTypeTwo">
							<?php $i = 1; ?>
							<?php while(have_rows('accordion_type_two_accordions')) : the_row(); ?>
								<div id="cardTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" class="card">
							    <div id="headingTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" class="card-header row d-flex mx-0 justify-content-between align-items-start py-0 px-3 position-relative">
						        <a class="btn btn-accordion position-absolute w-100 h-100 m-0 p-0 z-index-99" data-toggle="collapse" data-target="#collapseTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapseTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>"></a>
										<div class="col-10 col-sm-7 d-flex align-items-center justify-content-start">
											<?php if (get_sub_field('accordion_type_two_accordion_title')) : ?>
												<h3 class="h2 primary-color my-4"><?php the_sub_field('accordion_type_two_accordion_title'); ?></h3>
											<?php endif; ?>
										</div>
										<div class="col-sm-5 pl-4 d-none d-md-flex align-items-center justify-content-start">
											<?php if (get_sub_field('accordion_type_two_accordion_label')) : ?>
												<h3 class="h2 primary-color my-4"><?php the_sub_field('accordion_type_two_accordion_label'); ?></h3>
											<?php endif; ?>
										</div>
										<i class="open fal fa-minus position-absolute"></i>
										<i class="closed fal fa-plus position-absolute"></i>
							    </div>

									<?php if ($i == 1): ?>
										<div id="collapseTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeTwo" */?>>
									<?php else: ?>
										<div id="collapseTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeTwo-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeTwo" */?>>
									<?php endif; ?>

							      <div class="card-body pt-0 px-3">
											<?php if (have_rows('accordion_type_two_accordion_primary_info')) : ?>
												<div class="container-fluid pl-0">
													<?php while(have_rows('accordion_type_two_accordion_primary_info')) : the_row(); ?>
														<div class="border-bottom row mb-4 pb-3">
															<div class="col-sm-7">
																<div class="inner col-12 col-lg-10">
																	<?php if (get_sub_field('accordion_type_two_accordion_primary_info_title')) : ?>
																		<h4 class="primary-color mb-2 mb-lg-0"><?php the_sub_field('accordion_type_two_accordion_primary_info_title'); ?></h4>
																	<?php endif; ?>
																	<?php if (get_sub_field('accordion_type_two_accordion_primary_info_text')) : ?>
																		<p class="d-none d-lg-block font-weight-normal">
																			<?php the_sub_field('accordion_type_two_accordion_primary_info_text'); ?>
																		</p>
																		<p class="d-block d-lg-none">
																			<?php the_sub_field('accordion_type_two_accordion_primary_info_text'); ?>
																		</p>
																	<?php endif; ?>
																</div>
															</div>
															<div class="col-sm-5 pl-4">
																<?php if (have_rows('accordion_type_two_accordion_secondary_info')) : ?>
																	<div class="container-fluid pl-2">
																		<h5 class="d-block d-md-none font-weight-bold">Project Directors</h5>
																		<?php while(have_rows('accordion_type_two_accordion_secondary_info')) : the_row(); ?>
																			<div class="row mb-2 mb-lg-4 mx-0">
																				<?php if (get_sub_field('accordion_type_two_accordion_secondary_info_link')) : ?>
																					<?php $accordion_type_two_accordion_secondary_info_link = get_sub_field('accordion_type_two_accordion_secondary_info_link'); ?>
																					<?php if (get_sub_field('accordion_type_two_accordion_secondary_info_title')) : ?>
																						<h4 class="mb-0">
																							<a href="<?php echo $accordion_type_two_accordion_secondary_info_link['url']; ?>" title="<?php echo $accordion_type_two_accordion_secondary_info_link['title']; ?>" target="<?php echo $accordion_type_two_accordion_secondary_info_link['target']; ?>">
																								<?php the_sub_field('accordion_type_two_accordion_secondary_info_title'); ?>
																							</a>
																						</h4>
																					<?php endif; ?>
																				<?php else : ?>
																					<?php if (get_sub_field('accordion_type_two_accordion_secondary_info_title')) : ?>
																						<h4 class="mb-0">
																							<?php the_sub_field('accordion_type_two_accordion_secondary_info_title'); ?>
																						</h4>
																					<?php endif; ?>
																				<?php endif; ?>
																				<?php if (get_sub_field('accordion_type_two_accordion_secondary_aux_link')) : ?>
																					<?php $accordion_type_two_accordion_secondary_aux_link = get_sub_field('accordion_type_two_accordion_secondary_aux_link'); ?>
																					<p class="d-block w-100"><a class="d-block w-100" href="<?php echo $accordion_type_two_accordion_secondary_aux_link['url']; ?>">
																						<?php echo $accordion_type_two_accordion_secondary_aux_link['title']; ?>
																					</a></p>
																				<?php endif; ?>
																			</div>
																		<?php endwhile; ?>
																	</div>
																<?php endif; ?>
															</div>
														</div>
													<?php endwhile; ?>
												</div>
											<?php endif; ?>
							      </div>
							    </div>
								</div>
								<?php $i++; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>

		<?php
		//-----------------------------------------------------
		// Accordion Type Three
		//-----------------------------------------------------
		?>


		<?php elseif( get_row_layout() == 'accordion_type_three' ): ?>

			<?php // get_template_part( 'template-parts/page-content/accordion-type-three' ); ?>

			<?php $counter++; ?>
			<section id="accordion-type-three-<?php echo $counter; ?>" class="container-fluid accordion accordion-type-three">
				<div class="container">
					<?php if (get_sub_field('accordion_type_three_heading')) : ?>
						<h2 class="h1 mb-4">
							<?php the_sub_field('accordion_type_three_heading'); ?>
						</h2>
					<?php endif; ?>

					<?php if (get_sub_field('accordion_type_three_global_icon_toggle')) : ?>
						<?php $accordion_type_three_global_icon_toggle = get_sub_field('accordion_type_three_global_icon_toggle'); ?>
						<?php //echo $accordion_type_three_global_icon_toggle; ?>
					<?php else : ?>
						<?php $accordion_type_three_global_icon_toggle = false; ?>
					<?php endif; ?>
					<?php if (have_rows('accordion_type_three_repeater')) : ?>
						<div class="accordion" id="accordionTypeThree">
							<?php $i = 1; ?>
							<?php while(have_rows('accordion_type_three_repeater')) : the_row(); ?>

								<?php if (get_sub_field('accordion_type_three_icon')) : ?>
									<?php $accordion_type_three_icon = get_sub_field('accordion_type_three_icon'); ?>
								<?php else : ?>
									<?php $accordion_type_three_icon = null; ?>
								<?php endif; ?>
								<div id="cardTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" class="card">
							    <div id="headingTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" class="card-header row mx-0 d-flex justify-content-start align-items-center py-0 px-3 position-relative">
										<a class="btn btn-accordion position-absolute w-100 h-100 m-0 p-0 z-index-99" data-toggle="collapse" data-target="#collapseTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapseTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>"></a>

										<?php if ($accordion_type_three_icon && $accordion_type_three_global_icon_toggle): ?>
											<div class="<?php echo $accordion_type_three_icon; ?> col-3 col-md-1 px-0 d-flex h-100 justify-content-center align-items-center">
												<img class="icon" src="<?php echo get_template_directory_uri() . '/lib/img/' . $accordion_type_three_icon . '.png';?>" />
											</div>
										<?php else : ?>
											<!-- <div class="col-2 col-md-1 px-0"></div> -->
										<?php endif; ?>

										<div class="col-8 col-md-10 d-flex align-items-center justify-content-start pr-4">
											<?php if (get_sub_field('accordion_type_three_title')) : ?>
												<h3 class="color-secondary h2 primary-color my-4">
													<?php the_sub_field('accordion_type_three_title'); ?>
												</h3>
											<?php endif; ?>
										</div>
										<i class="open fal fa-minus position-absolute"></i>
										<i class="closed fal fa-plus position-absolute"></i>
							    </div>

									<?php if ($i == 1): ?>
										<div id="collapseTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeOne" */?>>
									<?php else: ?>
										<div id="collapseTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" class="collapse" aria-labelledby="headingTypeThree-<?php echo $i; ?>-<?php echo $counter; ?>" <?php /* data-parent="#accordionTypeOne" */?>>
									<?php endif; ?>

							      <div class="card-body pt-0">
											<div class="row m-0">
												<?php if ($accordion_type_three_icon && $accordion_type_three_global_icon_toggle): ?>
													<div class="spacer col-1 px-0 d-none d-md-block"></div>
												<?php else : ?>
													<!-- <div class="spacer col-1 px-0 d-none d-md-block"></div> -->
												<?php endif; ?>
												<div class="col-12 col-md-11">
													<div class="col-12 col-md-11 px-0">
														<?php if (get_sub_field('accordion_type_three_text')) : ?>
															<?php the_sub_field('accordion_type_three_text'); ?>
														<?php endif; ?>
													</div>
												</div>
											</div>
							      </div>
							    </div>
							  </div>
								<?php $i++; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>

		<?php
		//-----------------------------------------------------
		// News Story
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'news_story_block' ): ?>
			<?php get_template_part( 'template-parts/page-content/news-story-block' ); ?>

		<?php
		//-----------------------------------------------------
		// Podcast Block
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'podcast_block' ): ?>
			<?php get_template_part( 'template-parts/page-content/podcast-block' ); ?>

		<?php
		//-----------------------------------------------------
		// Social
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'social_media_block' ): ?>
			<?php get_template_part( 'template-parts/page-content/social-media-block' ); ?>
		<?php endif; ?>

	<?php endwhile; // End Page Content "While" Loop ?>
	</div>

<?php else : ?>

	<?php // No Layouts ?>
	<div class="container pt-5 mb-5">
		<?php the_content(); ?>
	</div>

<?php endif; // End Page Content "If" Loop ?>
