<?php get_header(); ?>
	<div id="primary" class="content-area">
    <?php get_template_part( 'template-parts/heros/hero', 'store' ); ?>
		<main id="main" class="site-main">
  		<?php while ( have_posts() ) : the_post(); ?>
				<?php include( locate_template( 'template-parts/product-nav.php', false, false ) ); ?>
				<?php include( locate_template( 'template-parts/product-content.php', false, false ) ); ?>
			<?php endwhile; ?>
			<div class="d-flex justify-content-center" style="margin:80px 0;">
				<a id="return-to-top" class="btn btn-secondary my-0" href="#" title="Return to Top">
					Return to Top
				</a>
			</div>
		</main>
	</div>
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>
