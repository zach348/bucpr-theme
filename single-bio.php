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

		<div class="bio-header jumbotron jumbotron-fluid p-0 position-relative background-light-grey d-flex">
			<div class="container-fluid position-relative p-0 h-100">
				<div class="row d-flex flex-column flex-column-reverse flex-sm-row justify-content-between m-0 h-100">
					<div class="content col-sm-6 col-md-7 position-relative d-flex flex-wrap pt-0 py-4 py-lg-5 pr-3 py-md-5 pr-md-5 my-0 h-100">
						<div class="inner position-relative my-2 my-lg-0">
							<div class="flourish d-none d-lg-block"></div>
							<h1 class="display-5 title pt-0 mt-0 mt-lg-4 pt-lg-3 mb-1">
								<?php the_title(); ?>
							</h1>
							<?php if ( get_field('position') ) : ?>
								<h4 class="mb-1 mb-md-3">
							<?php endif; ?>
								<?php /* if (get_field('department')) : ?>
									<?php the_field('department'); ?>
								<?php endif; */ ?>
								<?php /* if ( get_field('position') ) : ?>
									<span>, </span>
								<?php endif; */ ?>
								<?php if (get_field('position')) : ?>
									<?php the_field('position'); ?>
								<?php endif; ?>
							<?php if (get_field('department') || get_field('position') ) : ?>
								</h4>
							<?php endif; ?>

							<?php if (get_field('email')) : ?>
								<small class="d-block mb-1">
									<a style="font-size:16px;" target="_blank" href="mailto:<?php the_field('email'); ?>">
										<?php the_field('email'); ?>
									</a>
								</small>
							<?php endif; ?>

							<?php if (get_field('phone')) : ?>
								<small class="d-block mt-2 mt-lg-0"><?php the_field('phone'); ?></small>
							<?php endif; ?>

							<?php $file = get_field('cv');?>
							<?php if( $file ): ?>
								<div class="button-wrapper mt-3 mt-lg-5 pt-3">
									<a class="btn btn-secondary" href="<?php echo $file['url']; ?>">
										Download CV
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<?php if (get_field('photo_nudge')) : ?>
						<?php $photo_nudge = get_field('photo_nudge'); ?>
					<?php else : ?>
						<?php $photo_nudge = ''; ?>
					<?php endif; ?>


					<?php if (get_the_post_thumbnail_url()): ?>
						<div class="nudge <?php echo $photo_nudge; ?> col-sm-6 col-md-5 col-lg-4 image background-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?> ');"></div>
					<?php endif; ?>
					<?php if (get_field('no_headshot_use_initials')) : ?>
						<div class="no-headshot py-5 py-md-0 col-sm-6 col-md-5 col-lg-4 d-flex justify-content-center align-items-center">
							<span class="initials my-5 my-md-0">
								<?php the_field('no_headshot_use_initials'); ?>
							</span>
						</div>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
      <div class="menu-underlay position-absolute h-100 w-100">
    		<div class="inner h-100 position-absolute"></div>
    	</div>
		</div>

		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			<?php //the_post_navigation(); ?>
			<?php
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;
			?>
		<?php endwhile; ?>
		</main>
	</div>
	<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
