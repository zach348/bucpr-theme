<?php
//-----------------------------------------------------
// Staff Listings
//-----------------------------------------------------
?>

<section class="container-fluid staff-listings">
	<div class="container pt-0">

		<?php if (get_sub_field('staff_listings_title')) : ?>
			<div class="col px-0">
				<div class="flourish mb-2"></div>
				<h2 class="primary-color mb-4">
					<?php the_sub_field('staff_listings_title'); ?>
				</h2>
			</div>
		<?php endif; ?>

		<?php if( get_sub_field('staff_listings_toggle_selection') == 'all' ) {  ?>
			<?php $args = array(
				//'orderby' => 'title',
				'post_type' => 'bio',
				'posts_per_page' => -1
			); ?>
			<?php $the_query = new WP_Query( $args ); ?>
			<div class="row">
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="staff-listing col-12 col-sm-6 col-md-4 mb-4">

					<?php if (get_the_post_thumbnail_url()): ?>
						<?php $get_the_post_thumbnail_url = get_the_post_thumbnail_url(); ?>
					<?php else : ?>
						<?php $get_the_post_thumbnail_url = get_template_directory_uri() . '/lib/img/staff-placeholder.svg'; ?>
					<?php endif; ?>

					<?php if (get_field('photo_nudge')) : ?>
						<?php $photo_nudge = get_field('photo_nudge'); ?>
					<?php else : ?>
						<?php $photo_nudge = ''; ?>
					<?php endif; ?>

					<?php /* <div class="nudge <?php echo $photo_nudge; ?> image square background-image mb-3" style="background-image:url('<?php echo $get_the_post_thumbnail_url; ?>');"></div> */ ?>

					<?php if (get_the_post_thumbnail_url()): ?>
						<div class="nudge <?php echo $photo_nudge; ?> image square background-image mb-3" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?> ');"></div>
					<?php elseif (get_field('no_headshot_use_initials')) : ?>
						<div class="no-headshot square d-flex justify-content-center align-items-center mb-3">
							<span class="display-1 initials my-5 my-md-0">
								<?php the_field('no_headshot_use_initials'); ?>
							</span>
						</div>
					<?php else : ?>
						<div class="image square background-image mb-3" style="background-image:url('<?php echo get_template_directory_uri() . '/lib/img/staff-placeholder.svg'; ?> ');"></div>
					<?php endif; ?>

					<div class="content">
						<h4 class="primary-color mb-1">
							<a class="primary-color" href="<?php the_permalink(); ?>">
								<?php the_title() ;?>
							</a>
						</h4>
						<?php if (get_field('position')) : ?>
							<p><?php the_field('position'); ?></p>
						<?php endif; ?>
					</div>
				</div>

			<?php endwhile; else: ?> <p>Sorry, there are no bio to display right now!</p> <?php endif; ?>
			</div>
			<?php wp_reset_query(); ?>
		<?php } ?>

		<?php if( get_sub_field('staff_listings_toggle_selection') == 'select' ) {  ?>
			<?php $posts = get_sub_field('staff_listings_selection'); ?>
			<?php if ($posts): ?>
				<div class="row">
					<?php foreach ($posts as $post) :
						setup_postdata($post); ?>
						<div class="staff-listing col-12 col-sm-6 col-md-4 mb-4">

							<?php if (get_the_post_thumbnail_url()): ?>
								<?php $get_the_post_thumbnail_url = get_the_post_thumbnail_url(); ?>
							<?php else : ?>
								<?php $get_the_post_thumbnail_url = get_template_directory_uri() . '/lib/img/staff-placeholder.svg'; ?>
							<?php endif; ?>

							<?php if (get_field('photo_nudge')) : ?>
								<?php $photo_nudge = get_field('photo_nudge'); ?>
							<?php else : ?>
								<?php $photo_nudge = ''; ?>
							<?php endif; ?>

							<?php if (get_the_post_thumbnail_url()): ?>
								<div class="nudge <?php echo $photo_nudge; ?> image square background-image mb-3" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?> ');"></div>
							<?php elseif (get_field('no_headshot_use_initials')) : ?>
								<div class="no-headshot square d-flex justify-content-center align-items-center mb-3">
									<span class="display-1 initials my-5 my-md-0">
										<?php the_field('no_headshot_use_initials'); ?>
									</span>
								</div>
							<?php else : ?>
								<div class="image square background-image mb-3" style="background-image:url('<?php echo get_template_directory_uri() . '/lib/img/staff-placeholder.svg'; ?> ');"></div>
							<?php endif; ?>

							<div class="content">
								<h4 class="primary-color mb-1">
									<a class="primary-color" href="<?php the_permalink(); ?>">
										<?php the_title() ;?>
									</a>
								</h4>
								<?php if (get_field('position')) : ?>
									<p><?php the_field('position'); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
		<?php } ?>
	</div>
</section>
