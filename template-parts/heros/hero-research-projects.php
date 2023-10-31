<?php
	$research_landing_image = get_field('research_landing_image','option');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<div id="research-project-hero" class="hero-landing jumbotron jumbotron-fluid p-0 position-relative mb-0">
	<div class="container-fluid p-0">
		<div class="row d-flex m-0 background-primary-color">
			<div class="col-md-4 background-image" style="background-image:url('<?php echo $research_landing_image['url']; ?>')"></div>
			<div class="col-md-8 text d-flex flex-wrap align-items-center py-4 px-3 py-md-5 px-md-5 my-0 background-primary-color">
				<div class="inner">
					<?php if (get_field('research_landing_title','option')) : ?>
						<h1 class="page-title color-white mt-3">
							<?php the_field('research_landing_title','option'); ?>
						</h1>
					<?php endif; ?>
					<?php if (get_field('research_landing_sub_title','option')) : ?>
						<h4 class="page-sub-title color-white font-weight-light mb-3">
							<?php the_field('research_landing_sub_title','option'); ?>
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
