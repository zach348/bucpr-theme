<?php /* Template Name: Password Protected */ ?>

<?php get_header(); ?>
<div id="content" class="site-content container-fluid p-0">
	<?php get_template_part( 'template-parts/heros/hero', 'page' ); ?>
	<div id="primary" class="content-area position-relative">
		<div class="page-overlay position-absolute h-100 w-100"></div>
		<main id="main" class="site-main">
			<?php global $post; ?>
			<?php if ( post_password_required( $post ) ) { ?>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 d-flex mx-auto my-5 py-5">
							<?php echo get_the_password_form(); ?>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; ?>
			<?php } ?>
		</main>
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
