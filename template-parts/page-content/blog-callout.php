<?php
//-----------------------------------------------------
// Blog Callout
//-----------------------------------------------------
?>

<section class="container-fluid blog-callout">
	<div class="container">
		<?php $post = get_sub_field('blog_callout_post');
			if ($post) : setup_postdata($post); ?>
			<div class="row d-flex">
				<?php if (get_the_post_thumbnail_url()): ?>
					<div class="col-lg-5 pr-lg-5 mb-4 mb-lg-0">
						<div class="image background-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
					</div>
				<?php endif; ?>

				<div class="col-lg-7 d-flex">
					<div class="content d-flex align-content-start flex-wrap mt-lg-0">
						<!-- <div class="tag-title category d-flex align-items-start mb-4 mb-lg-3">
							<span>
								<?php //get_template_part( 'template-parts/helpers/primary-category' ); ?>
							</span>
						</div> -->

						<?php
							$category = get_the_terms( get_the_ID(), 'category' );
							$useCatLink = true;
							// If post has a category assigned.
							if ($category){
								$category_display = '';
								$category_link = '';
								if ( class_exists('WPSEO_Primary_Term') ){
									// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
									$wpseo_primary_term = new WPSEO_Primary_Term( 'product_and_resource_type', get_the_id() );
									$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
									$term = get_term( $wpseo_primary_term );
									if (is_wp_error($term)) {
										// Default to first category (not Yoast) if an error is returned
										$category_display = $category[0]->name;
										//$category_link = get_category_link( $category[0]->term_id );
								} else {
									// Yoast Primary category
									$category_display = $term->name;
									//$category_link = get_category_link( $term->term_id );
								}
							}
							else {
								// Default, display the first category in WP's list of assigned categories
								$category_display = $category[0]->name;
								//$category_link = get_category_link( $category[0]->term_id );
								}
								// Display category
								if ( !empty($category_display) ){
									if ( $useCatLink == true && !empty($category_link) ){
										// echo '<span class="post-category">';
										// echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
										// echo '</span>';
										echo '<div class="tag-title category d-flex align-items-start mb-4 mb-lg-3">';
										echo '<span class="post-category">';
										echo htmlspecialchars($category_display);
										echo '</span>';
										echo '</div>';
									} else {
										// echo '<span class="post-category">';
										// echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
										// echo '</span>';
										echo '<div class="tag-title category d-flex align-items-start mb-4 mb-lg-3">';
										echo '<span class="post-category">';
										echo htmlspecialchars($category_display);
										echo '</span>';
										echo '</div>';
									}
								}
							}
						?>


						<h2 class="m-0 d-block w-100">
							<a class="d-block w-100 mb-2 mb-lg-3" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<p class="m-0 mb-4 mb-lg-3 w-100"><?php echo get_the_excerpt(); ?></p>
						<a class="cta btn btn-text px-0" href="<?php the_permalink(); ?>">
							<span>Learn More</span>
							<i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>
		<?php wp_reset_postdata(); endif; ?>
	</div>
</section>
