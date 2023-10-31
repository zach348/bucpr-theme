<?php
//-----------------------------------------------------
// News Story Block
//-----------------------------------------------------
?>

<section class="container-fluid news-story-block">
	<div class="container position-relative">
		<h2 class="h1 mb-5">In the News</h2>
		<?php $posts = get_sub_field('news_story'); ?>
		<?php if ($posts): ?>
			<?php foreach ($posts as $post) : ?>
				<?php setup_postdata($post); ?>
				<div class="mb-4 pb-4 mb-md-5 pb-md-5 border-bottom">
					<div class="flourish" style="max-width:5rem;"></div>
					<?php if (get_field('news_publication_source')) : ?>
						<h5 class="text-uppercase font-weight-normal mb-3">
							<?php the_field('news_publication_source'); ?>
						</h5>
					<?php endif; ?>
					<div class="row m-0 p-0">
						<div class="col-lg p-0">
							<?php if (get_the_title()) : ?>
								<h2 class="primary-color mb-3">
									<?php echo get_the_title(); ?>
								</h2>
							<?php endif; ?>
							<?php if (get_the_excerpt()) : ?>
								<p class="mb-3 pb-3" style="line-height:1.4;">
									<?php echo get_the_excerpt(); ?>
								</p>
							<?php endif; ?>
							<?php get_template_part( 'template-parts/content', 'page' ); ?>
							<?php if (get_field('news_publication_link')) : ?>
								<?php $news_publication_link = get_field('news_custom_link'); ?>
								<a class="btn btn-secondary my-0" href="<?php echo $news_publication_link['url']; ?>" target="<?php echo $news_publication_link['target']; ?>" title="<?php echo $news_publication_link['title']; ?>">
									Read Article
								</a>
							<?php else : ?>
								<a class="btn btn-secondary my-0" href="<?php the_permalink(); ?>" target="_blank" title="<?php echo get_the_title(); ?>">
									Read Article
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
		<?php endif; ?>
</div>
</section>
