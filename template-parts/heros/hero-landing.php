<?php
	$hero_sub_image = get_field('hero_sub_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<div id="landing-page-hero" class="hero-landing jumbotron jumbotron-fluid position-relative p-0 mb-0 d-flex align-items-center">
	<div class="container-fluid p-0">
		<div class="row d-flex m-0">

			<?php if ($hero_sub_image): ?>
				<div class="col-md-4 background-image" style="background-image:url('<?php echo $hero_sub_image['url']; ?>')"></div>
			<?php endif; ?>

			<?php if ($hero_sub_image): ?>
				<div class="col-md-8 text d-flex flex-wrap align-items-center py-4 px-3 py-md-5 px-md-5 my-0">
			<?php else: ?>
				<div class="container text-no-image d-flex flex-wrap align-items-center py-4 py-md-5 px-3 my-0">
			<?php endif; ?>

				<div class="inner">
					<?php if (get_field('hero_sub_title')) : ?>
						<h1 class="page-title color-white font-weight-light mt-3">
							<?php the_field('hero_sub_title'); ?>
						</h1>
					<?php else : ?>
						<h1 class="page-title color-white mt-3">
							<?php the_title(); ?>
						</h1>
					<?php endif; ?>

					<?php if (get_field('hero_sub_text')) : ?>
						<h4 class="page-sub-title color-white font-weight-light mb-3">
							<?php the_field('hero_sub_text'); ?>
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
