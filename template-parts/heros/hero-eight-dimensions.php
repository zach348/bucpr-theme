<?php
	$hero_sub_image = get_field('hero_sub_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<?php if (get_field('hero_sub_image')) : ?>
	<?php $hero_sub_image = get_field('hero_sub_image'); ?>
	<?php $hero_sub_image = $hero_sub_image['url']; ?>
<?php else : ?>
	<?php $hero_sub_image = get_stylesheet_directory_uri() . '/lib/img/default-hero-img.jpg' ?>
<?php endif; ?>

<div id="sub-page-hero" class="eight-dimensions-hero sub-page-hero jumbotron jumbotron-fluid py-5 position-relative mb-0">
	<div class="container p-0">
		<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
			<?php if ($hero_sub_image): ?>
				<div class="text col-md-7 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0 pl-0">
			<?php else: ?>
				<div class="text col-md-10 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php endif; ?>
				<div class="inner pt-2 pt-md-0 col">
					<div class="flourish mt-4 mt-md-0 d-none d-lg-block"></div>
					<?php if (get_field('hero_sub_title')) : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							<?php the_field('hero_sub_title'); ?>
						</h1>
					<?php else : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							<?php the_title(); ?>
						</h1>
					<?php endif; ?>

					<?php if (get_field('hero_sub_text')) : ?>
						<h4 class="page-sub-title">
							<?php the_field('hero_sub_text'); ?>
						</h4>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($hero_sub_image): ?>
				<div class="image col-md-5 background-image-contain" style="background-image:url('<?php echo $hero_sub_image; ?>')"></div>
			<?php endif; ?>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
