<?php if (get_field('search_hero_image','option')) : ?>
	<?php $search_hero_image = get_field('search_hero_image','option'); ?>
	<?php $size = 'full'; ?>
<?php else : ?>
	<?php $search_hero_image = null; ?>
<?php endif; ?>

<div id="search-results-hero" class="sub-page-hero jumbotron jumbotron-fluid p-0 position-relative mb-0">
	<div class="container-fluid p-0">
		<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
			<?php if ($search_hero_image): ?>
				<div class="text col-md-8 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php else: ?>
				<div class="text col-md-10 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php endif; ?>
				<div class="inner pt-2 pt-md-0 col">
					<div class="flourish mt-4 mt-md-0 d-none d-lg-block"></div>

					<?php /* if (get_field('search_hero_title','option')) : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							<?php the_field('search_hero_title','option'); ?>
						</h1>
					<?php else : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							Search Results
						</h1>
					<?php endif; */ ?>

					<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
						<?php printf( __( 'Search Results for: %s', 'shape' ), '"' . get_search_query() . '"' ); ?>
					</h1>

					<?php /* if (get_field('search_hero_sub_title','option')) : ?>
						<h4 class="page-sub-title">
							<?php the_field('search_hero_sub_title','option'); ?>
						</h4>
					<?php endif; */ ?>

				</div>
			</div>
			<?php if ($search_hero_image): ?>
				<div class="col-md-4 background-image" style="background-image:url('<?php echo $search_hero_image['url']; ?>')"></div>
			<?php endif; ?>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
