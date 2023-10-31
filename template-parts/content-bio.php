<article class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php /*
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				wordpress_boilerplate_posted_on();
				wordpress_boilerplate_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; */ ?>
	</header><!-- .entry-header -->

	<?php //wordpress_boilerplate_post_thumbnail(); ?>

	<div class="entry-content">
		<?php /*
		the_content( sprintf(
			wp_kses(
				// translators: %s: Name of current post. Only visible to screen readers
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress-boilerplate' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-boilerplate' ),
			'after'  => '</div>',
		) );
		*/ ?>

		<?php if (get_field('area_of_expertise')) : ?>
			<div class="mb-5">
				<?php the_field('area_of_expertise'); ?>
			</div>
		<?php endif; ?>

		<?php /* if (get_field('selected_publications')) : ?>
			<div class="mb-5 selected-publications">
				<?php the_field('selected_publications'); ?>
			</div>
		<?php endif; */ ?>

		<?php /* if (get_field('selected_recent_presentations')) : ?>
			<div class="mb-5 selected-recent-presentations">
				<h2>Selected Recent Presentations</h2>
				<?php the_field('selected_recent_presentations'); ?>
			</div>
		<?php endif; */ ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wordpress_boilerplate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
