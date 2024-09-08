<?php if (get_field('hero_archive_image','option')) : ?>
	<?php $hero_archive_image = get_field('hero_archive_image','option'); ?>
<?php else : ?>
	<?php $hero_archive_image = null; ?>
<?php endif; ?>

<div id="archive-hero" class="hero-landing jumbotron jumbotron-fluid position-relative p-0 mb-0 d-flex align-items-center">

	<?php if ($hero_archive_image): ?>
		<div class="container-fluid p-0">
	<?php else : ?>
		<div class="container p-0">
	<?php endif; ?>

		<div class="row d-flex m-0">

			<?php if ($hero_archive_image): ?>
				<div class="col-md-4 background-image" style="background-image:url('<?php echo $hero_archive_image['url']; ?>')"></div>
			<?php endif; ?>

			<?php if ($hero_archive_image): ?>
				<div class="col-md-8 text d-flex flex-wrap align-items-center py-4 px-3 py-md-5 px-md-5 my-0">
			<?php else : ?>
				<div class="col-md-8 text d-flex flex-wrap align-items-center py-4 px-3 py-md-5 my-0">
			<?php endif; ?>

				<div class="inner">
					<?php if (get_field('hero_archive_title','option')) : ?>
						<h1 class="page-title display-1 mt-3">
							<?//php the_field('hero_archive_title','option'); ?>
							<strong><u><a id="blog-title" href="https://cpr.bu.edu/blog">Welcome to the CPR Blog</a></u></strong>
						</h1>
						<p class="page-description display-1 mt-3">Your destination for original articles and important information about upcoming CPR events.</p>
					<?php else : ?>
						<?php if (get_the_archive_title()): ?>
							<h1 class="page-title display-1 mt-3">
								<?//php echo get_the_archive_title(); ?>
								<strong><u><a id="blog-title" href="https://cpr.bu.edu/blog">Welcome to the CPR Blog</a></u></strong>
							</h1>
							<p class="page-description display-1 mt-3">Your destination for original articles and important information about upcoming CPR events.</p>

						<?php endif; ?>
					<?php endif; ?>
					<?php if (get_field('hero_archive_sub_title','option')) : ?>
						<h4 class="page-sub-title font-weight-light mb-3">
							<?//php the_field('hero_archive_sub_title','option'); ?>
						</h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
