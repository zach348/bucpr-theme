<article class="search-result mb-5 pb-4" id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<div class="flourish"></div>
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
		<p class="h4">
			<?php the_excerpt(); ?>
		</p>
		<a class="btn btn-text pl-0" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
			Learn More <i class="fas fa-chevron-right"></i>
		</a>
	</div>

	<footer class="entry-footer">
		<?php //wordpress_boilerplate_entry_footer(); ?>
	</footer>
</article>
