<?php // Static Hero ?>
<?php if( get_field('home_hero_toggle') == 'static' ): ?>
  <?php
    $image = get_field('home_hero_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
  ?>

  <div id="static-hero" class="jumbotron jumbotron-fluid hero d-none d-xl-flex align-items-center p-0" style="background-image:url('<?php echo $image['url']; ?>')">
    <div class="container text d-flex align-items-center w-100">
      <?php if (get_field('home_hero_title')) : ?>
        <h1 class="display-5 m-0 title">
          <?php the_field('home_hero_title'); ?>
        </h1>
      <?php endif; ?>
      <?php /* if (get_field('home_hero_text')) : ?>
        <p class="lead text">
          <?php the_field('home_hero_text'); ?>
        </p>
      <?php endif; */ ?>
    </div>
  </div>
<?php endif; ?>

<?php // Slider Hero ?>
<?php if( get_field('home_hero_toggle') == 'slider' ): ?>

  <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">

      <?php if (have_rows('hero_home_slides')) : ?>
        <?php $i = 0; ?>
        <?php while(have_rows('hero_home_slides')) : the_row(); ?>
          <?php if (get_sub_field('hero_home_slide_image')) : ?>
            <?php $image = get_sub_field('hero_home_slide_image'); ?>
            <div class="carousel-item" style="background-image:url('<?php echo $image['url']; ?>');">
              <div class="carousel-caption d-none d-md-block">
                <?php if (get_sub_field('hero_home_slide_title')) : ?>
                  <h5 class="title">
                    <?php the_sub_field('hero_home_slide_title'); ?>
                  </h5>
                <?php endif; ?>
                <?php if (get_sub_field('hero_home_slide_body')) : ?>
                  <p class="text">
                    <?php the_sub_field('hero_home_slide_body'); ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
          <?php $i++; ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php endif; ?>

<?php // Slider Hero ?>
<?php if( get_field('home_hero_toggle') == 'video' ): ?>
	<div id="video-hero" class="jumbotron jumbotron-fluid jumbotron-video d-flex">
		<video autoplay loop id="video-background" muted plays-inline>
			<source src="http://www.columbusandover.com/_assets/boston-skyline-small-2016-12-08-v2.mp4" type="video/mp4">
		</video>
    <div class="container text text-center d-flex align-self-center flex-wrap justify-content-center">
      <?php if (get_field('home_hero_title')) : ?>
        <h1 class="display-4 title text-center">
          <?php the_field('home_hero_title'); ?>
        </h1>
      <?php endif; ?>
      <?php if (get_field('home_hero_text')) : ?>
        <p class="lead text text-center">
          <?php the_field('home_hero_text'); ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
