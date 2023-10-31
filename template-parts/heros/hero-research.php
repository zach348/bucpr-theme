<div class="sub-page-hero jumbotron jumbotron-fluid position-relative mb-0 pb-4">
	<div class="container">
		<div class="row d-flex justify-content-between">
			<div class="container-fluid px-0">
				<div class="col-sm-7">
					<div class="flourish mb-4 w-75"></div>
				</div>
			</div>
			<div class="col-sm-7">
				<?php if (get_field('research_project_hero_title')) : ?>
					<h1 class="mt-0 mb-4 mb-sm-3 pb-2 pb-sm-0">
						<?php the_field('research_project_hero_title'); ?>
					</h1>
				<?php endif; ?>
				<?php if (get_field('research_project_hero_sub_title')) : ?>
					<h2 class="d-none d-lg-block color-primary">
						<?php the_field('research_project_hero_sub_title'); ?>
					</h2>
				<?php endif; ?>
			</div>
			<div class="col-sm-4 row">
				<?php if (get_field('research_project_hero_funding')) : ?>
					<div class="col-6 col-sm-12 mb-4">
						<h4 class="h2-mobile color-primary mb-0">Funding:</h4>
						<h5><?php the_field('research_project_hero_funding'); ?></h5>
					</div>
				<?php endif; ?>

				<?php if (get_field('research_project_hero_dates')) : ?>
					<div class="col-6 col-sm-12 mb-4">
						<h4 class="h2-mobile color-primary mb-0">Dates:</h4>
						<h5><?php the_field('research_project_hero_dates'); ?></h5>
					</div>
				<?php endif; ?>

				<?php if (get_field('research_project_hero_contact')) : ?>
					<div class="col-12 contact">
						<h4 class="h2-mobile color-primary mb-0">Contact:</h4>
						<?php the_field('research_project_hero_contact'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>
