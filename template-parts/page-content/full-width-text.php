<?php
//-----------------------------------------------------
// Full Width Text
//-----------------------------------------------------
?>

<section class="container-fluid full-width-text">
	<div class="container position-relative">
		<div class="flourish"></div>
		<div class="row m-0 p-0">
			<div class="col-lg p-0">
				<?php if (get_sub_field('full_width_text_title')) : ?>
					<h2 class="primary-color mb-3">
						<?php the_sub_field('full_width_text_title'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_sub_title')) : ?>
					<h4>
						<?php the_sub_field('full_width_text_sub_title'); ?>
					</h4>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_body')) : ?>
					<?php the_sub_field('full_width_text_body'); ?>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_flourish')) :
					$image = get_sub_field('full_width_text_flourish'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php endif; ?>

				<?php if (get_sub_field('full_width_text_cta')) : ?>
					<?php $full_width_text_cta = get_sub_field('full_width_text_cta'); ?>
					<a class="btn btn-secondary mb-0 mt-0 mt-lg-3" href="<?php echo $full_width_text_cta['url']; ?>" target="<?php echo $full_width_text_cta['target']; ?>">
						<?php if (get_sub_field('full_width_text_cta_icon')) : ?>
							<i class="mr-3 <?php the_sub_field('full_width_text_cta_icon'); ?>"></i>
						<?php endif; ?>
						<?php if ($full_width_text_cta['title']): ?>
							<?php echo $full_width_text_cta['title']; ?>
						<?php else : ?>
							<?php echo 'Learn More'; ?>
						<?php endif; ?>

					</a>
				<?php endif; ?>

				<?php /* if (have_rows('full_width_text_ctas')) : ?>
					<?php while(have_rows('full_width_text_ctas')) : the_row(); ?>
						<?php if (get_sub_field('full_width_text_cta')) : ?>
							<?php $full_width_text_cta = get_sub_field('full_width_text_cta'); ?>
							<a class="btn btn-secondary" href="<?php echo $full_width_text_cta['url']; ?>" target="<?php echo $full_width_text_cta['target']; ?>">
								<?php if (get_sub_field('full_width_text_cta_icon')) : ?>
									<i class="mr-3 <?php the_sub_field('full_width_text_cta_icon'); ?>"></i>
								<?php endif; ?>
								<?php echo $full_width_text_cta['title']; ?>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; */ ?>
			</div>
			<?php if (get_sub_field('full_width_text_quick_links_toggle')) : ?>
				<div class="quick-links col-lg-4 p-0 px-lg-5 pt-lg-2 mt-5 mt-lg-0 pb-0">
					<div class="tag-title mb-4 d-none d-lg-block">
						<span>Quick Links</span>
					</div>
					<h3 class="font-style-normal d-block d-lg-none mb-3">Quick Links</h3>
					<?php $args = array(
						'order' => 'ASC',
						'post_type' => 'news',
						'posts_per_page' => 3,
					); ?>
					<?php query_posts( $args ); ?>
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if (get_field('news_publication_link')) : ?>
								<?php $news_publication_link = get_field('news_publication_link'); ?>
								<li style="line-height:1.1;" class="mb-3 mb-lg-3">
									<a href="<?php echo $news_publication_link['url']; ?>" target="_blank">
										<?php the_title(); ?>
									</a>
								</li>
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
