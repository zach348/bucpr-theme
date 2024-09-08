<?php
	$calendar_hero_image = get_field('calendar_hero_image','option');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<?php if (get_field('calendar_hero_image','option')) : ?>
	<?php $calendar_hero_image = get_field('calendar_hero_image','option'); ?>
	<?php $calendar_hero_image = $calendar_hero_image['url']; ?>
<?php // else : ?>
	<?php // $hero_sub_image = get_stylesheet_directory_uri() . '/lib/img/default-hero-img.jpg' ?>
<?php endif; ?>

<div id="sub-page-hero" class="sub-page-hero jumbotron jumbotron-fluid p-0 position-relative mb-0">
	<div class="container-fluid p-0">
		<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
			<?php if ($calendar_hero_image): ?>
				<div class="text col-md-8 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php else: ?>
				<div class="text col-md-10 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php endif; ?>
				<div class="inner pt-2 pt-md-0 col">
					<div class="flourish mt-4 mt-md-0 d-none d-lg-block"></div>

					<?php if (get_field('calendar_title', 'option')) : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							<?php the_field('calendar_title', 'option'); ?>
						</h1>
					<?php else : ?>
						<h1 class="page-title mb-3 mb-lg-4 mt-1 mt-lg-4">
							News & Events
						</h1>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($calendar_hero_image): ?>
				<div class="col-md-4 background-image" style="background-image:url('<?php echo $calendar_hero_image; ?>')"></div>
			<?php endif; ?>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
