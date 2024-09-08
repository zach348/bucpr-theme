<article class="search-result mb-5 pb-4" id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<div class="flourish"></div>
		<?php $post_id = get_the_ID(); ?>
		<p class="h5 mb-2 text-uppercase font-weight-normal">
			<?php //echo $post_id; ?>
			<?php printf( __( '%s', 'textdomain' ), get_post_type( get_the_ID() ) ); ?>
		</p>
		<?php the_title( sprintf( '<h2 class="entry-title mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				wordpress_boilerplate_posted_on();
				wordpress_boilerplate_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php //wordpress_boilerplate_post_thumbnail(); ?>

	<div class="entry-summary my-0">
		<?php if ( $post->post_type == 'bio' ) : ?>

		<?php if (get_field('position')) : ?>

			<p class="h4">
				Position: <?php the_field('position'); ?>
			</p>

		<?php endif; ?>

		<?php elseif ( $post->post_type == 'products' ) : ?>

			<p class="h4">
				<?php the_excerpt(); ?>
			</p>

		<?php elseif ( $post->post_type == 'resources' ) : ?>

			<p class="h4">
				<?php the_excerpt(); ?>
			</p>

		<?php elseif ( $post->post_type == 'research_project' ) : ?>

			<?php if (get_field('research_project_hero_sub_title')) : ?>
				<p class="h4">
					Summary: <?php the_field('research_project_hero_sub_title'); ?>
				</p>

			<?php endif; ?>
		<?php else : ?>
			<p class="h4">
				<?php the_excerpt(); ?>
			</p>
		<?php endif; ?>

		<a class="btn btn-text pl-0" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
			Learn More <i class="fas fa-chevron-right"></i>
		</a>
	</div>

	<footer class="entry-footer">
		<?php //wordpress_boilerplate_entry_footer(); ?>
	</footer>
</article>
