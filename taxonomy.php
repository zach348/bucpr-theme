<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div class=""></div>
		<main id="main" class="site-main">
			<?php get_template_part( 'template-parts/heros/hero', 'taxonomy' ); ?>
			<?php if ( have_posts() ) : ?>
				<div class="container-fluid p-5">
					<div class="row">
						<div class="posts col-sm-8">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
							<?php endwhile; ?>
							<?php //the_posts_navigation(); ?>
						
						</div>
					</div>
				</div>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>
