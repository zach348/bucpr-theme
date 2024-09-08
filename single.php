<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordpress_Boilerplate
 */
 ?>

 <?php get_header(); ?>

	<div id="primary" class="content-area">
		<div class="bio-header background-light-grey">
			<div class="container-fluid position-relative p-0">
				<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
					<div class="content col-md-8 position-relative d-flex flex-wrap align-items-center py-3 pr-3 py-md-5 pr-md-5 my-0">
						<div class="inner position-relative">
							<div class="flourish"></div>
							<h1 class="display-5 title">
								<?php the_title(); ?>
							</h1>
							<?php if ( get_field('department') || get_field('position') ) : ?>
								<h4>
							<?php endif; ?>
								<?php if (get_field('department')) : ?>
									<?php the_field('department'); ?>
								<?php endif; ?>
								<?php if ( get_field('department') || get_field('position') ) : ?>
									<span>, </span>
								<?php endif; ?>
								<?php if (get_field('position')) : ?>
									<?php the_field('position'); ?>
								<?php endif; ?>
							<?php if (get_field('department') || get_field('position') ) : ?>
								</h4>
							<?php endif; ?>

							<?php if (get_field('email')) : ?>
								<small class="d-block"><?php the_field('email'); ?></small>
							<?php endif; ?>

							<?php if (get_field('phone')) : ?>
								<small class="d-block"><?php the_field('phone'); ?></small>
							<?php endif; ?>

							<?php $file = get_field('cv');?>
							<?php if( $file ): ?>
								<div class="mt-4">
									<a class="btn btn-secondary" href="<?php echo $file['url']; ?>">
										Download CV
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-4 background-image" style="height:28rem; background-image:url('<?php echo get_the_post_thumbnail_url(); ?> ');"></div>
				</div>
			</div>
		</div>
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			<?php the_post_navigation(); ?>
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; ?>
		</main>
	</div>
	<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
