<div class="research-project container mb-5 pb-2">
	<div class="row d-flex justify-content-between">

		<div class="col-12 col-md-8 col-lg-5 pr-5">
			<div class="flourish mb-2"></div>
			<p class="h2-mobile mb-0 mb-lg-3">
				<a class="color-primary" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<?php echo get_the_title(); ?>
				</a>
			</p>
			<a class="btn btn-text px-0 d-none d-lg-inline-block color-primary" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" target="">
				<span>Learn More</span>
				<i class="fas fa-chevron-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="col-12 col-md-4 col-lg-4 pt-2 mt-0 mt-lg-1">
			<?php if (get_field('research_project_hero_contact')) : ?>
				<?php the_field('research_project_hero_contact'); ?>
			<?php else : ?>
				--
			<?php endif; ?>
		</div>

		<?php /*
		<div class="col-sm-2 pt-2 mt-1 d-none d-lg-block">
			<p class="line-height-normal">
				<?php get_template_part( 'template-parts/helpers/primary-category-research-project-type' ); ?>
			</p>
		</div>
		*/ ?>

		<div class="col-sm-3 pt-2 mt-1 d-none d-lg-block">
			<p class="line-height-normal">
				<?php // the_time( 'Y' ); ?>
				<?php if (get_field('research_project_hero_dates')) : ?>
					<?php the_field('research_project_hero_dates'); ?>
				<?php endif; ?>
			</p>
		</div>
	</div>
</div>
