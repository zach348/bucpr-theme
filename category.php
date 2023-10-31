<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div class=""></div>
		<main id="main" class="site-main">
			<?php get_template_part( 'template-parts/heros/hero', 'archive' ); ?>
			<h1 class="display-3 mt-5 text-center"><?php single_cat_title( '', true ); ?> Archive</h1>
			<?php if ( have_posts() ) : ?>
				<div class="container-fluid p-5">
					<div class="row">
						<div class="posts col-sm-8">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
							<?php endwhile; ?>
							<?php //the_posts_navigation(); ?>
							<?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'More Recent', 'textdomain' ),
                                'next_text' => __( 'Less Recent', 'textdomain' ),
                            ) ); ?>
						</div>
						<div class="col-sm-4"><?php get_sidebar(); ?></div>
					</div>
						<br>
                        <p><strong>Notice:</strong><em>
                            The contents of this Blog were developed under a grant from the National Institute on Disability, Independent Living, and Rehabilitation Research (NIDILRR grant number 90RTEM0004). NIDILRR is a Center within the Administration for Community Living (ACL), Department of Health and Human Services (HHS). The contents of this Blog do not necessarily represent the policy of NIDILRR, ACL, or HHS, and you should not assume endorsement by the Federal Government.
                        </em></p>
				</div>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>
