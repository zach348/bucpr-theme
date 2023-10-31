<?php
	$hero_404_image = get_field('hero_404_image','option');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<div id="error404-page-hero" class="sub-page-hero jumbotron jumbotron-fluid p-0 position-relative">
	<div class="container-fluid p-0">
		<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
			<?php if ($hero_404_image): ?>
				<div class="col-md-8 text d-flex flex-wrap align-items-center py-3 pr-4 py-md-5 pr-md-5 my-0">
			<?php else: ?>
				<div class="col-md-10 text d-flex flex-wrap align-items-center py-3 pr-4 py-md-5 pr-md-5 my-0">
			<?php endif; ?>
				<div class="inner pt-2 pt-md-0 px-4 px-xl-1 ml-3">
					<div class="flourish mt-4 mt-md-0"></div>
					<?php if (get_field('hero_404_title','option')) : ?>
						<h1 class="page-title mb-4 mt-1 mt-lg-4">
							<?php the_field('hero_404_title','option'); ?>
						</h1>
					<?php else : ?>
						<h1 class="page-title mb-4 mt-1 mt-lg-4">
							Page Not Found.
						</h1>
					<?php endif; ?>

					<?php if (get_field('hero_404_text','option')) : ?>
						<h4 class="page-sub-title">
							<?php the_field('hero_404_text','option'); ?>
						</h4>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($hero_404_image): ?>
				<div class="col-md-4 background-image" style="background-image:url('<?php echo $hero_404_image['url']; ?>')"></div>
			<?php endif; ?>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
