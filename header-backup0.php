<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-59XN5SX');</script>
<!-- End Google Tag Manager -->

	<script src="https://kit.fontawesome.com/a26469a2a7.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/njq2oxr.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700&display=swap" rel="stylesheet"> -->
	<meta name="google-site-verification" content="cCFZICvksCCvc-JgulGptSOOwx-aEKXj3N8oCXDtJTc" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59XN5SX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site container-fluid p-0">
	<a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'wordpress-boilerplate' ); ?>
	</a>

	<section class="id container-fluid py-3 py-xl-4 d-none d-xl-block position-absolute">
		<div class="container d-flex align-items-center pl-0 pl-xl-3">
			<?php if (get_field('id', 'option')) : ?>
				<div class="d-flex d-xl-none w-100">
					<p class="m-0" style="line-height:1.25;">
						<strong>Boston University</strong> Sargent College of Health & Rehabilitation Sciences<br />
						Center for Psychiatric Rehabilitation
						<?php // the_field('id', 'option'); ?>
					</p>
				</div>
			<?php endif; ?>
			<?php if (get_field('id', 'option')) : ?>
				<div class="d-none d-xl-flex w-100">
					<p class="m-0" style="line-height:1.25;">
						<strong>Boston University</strong> Sargent College of Health & Rehabilitation Sciences<br />
						Center for Psychiatric Rehabilitation
						<?php // the_field('id', 'option'); ?>
					</p>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<header id="masthead" class="site-header container-fluid pb-3">

		<?php if (is_front_page()): ?>
		<?php else : ?>
			<div class="sub-page-search-underlay"></div>
		<?php endif; ?>

		<section class="id container-fluid py-3 py-xl-4 d-block d-xl-none position-relative">
			<div class="container d-flex align-items-center pl-0 pl-xl-3">
				<?php if (get_field('id', 'option')) : ?>
					<div class="d-flex d-xl-none w-100">
						<p class="m-0" style="line-height:1.25;">
							<strong>Boston University</strong> Sargent College of Health & Rehabilitation Sciences<br />
							Center for Psychiatric Rehabilitation
							<?php // the_field('id', 'option'); ?>
						</p>
					</div>
				<?php endif; ?>
				<?php if (get_field('id', 'option')) : ?>
					<div class="d-none d-xl-flex w-100">
						<p class="m-0" style="line-height:1.25;">
							<strong>Boston University</strong> Sargent College of Health & Rehabilitation Sciences<br />
							Center for Psychiatric Rehabilitation
							<?php // the_field('id', 'option'); ?>
						</p>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<?php if (is_front_page()): ?>
			<div class="header-inner px-0 h-100">
		<?php else :  ?>
			<div class="header-inner container">
		<?php endif; ?>

			<?php if (is_front_page()): ?>
				<div class="row m-0 d-flex h-100 justify-content-between">
			<?php else :  ?>
				<div class="row m-0 d-flex justify-content-between">
			<?php endif; ?>

				<?php if (get_field('header_logo','option')) : ?>
					<div class="navbar-brand d-none d-xl-flex align-items-center">

						<?php $header_logo = get_field('header_logo','option'); ?>
						<?php $header_home_logo = get_field('header_home_logo','option'); ?>
						<?php $header_mobile_active_logo = get_field('header_mobile_active_logo','option'); ?>

						<?php if (is_front_page()): ?>
							<a class="home default" href="<?php echo get_site_url(); ?>" title="">
								<img class="" src="<?php echo $header_home_logo['url']; ?>" alt="<?php echo $header_home_logo['title']; ?>">
							</a>
						<?php else :  ?>
							<a class="default" href="<?php echo get_site_url(); ?>" title="">
								<img class="" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>">
							</a>
						<?php endif; ?>
						<a class="mobile-active" href="<?php echo get_site_url(); ?>" title="">
							<img class="d-none" src="<?php echo $header_mobile_active_logo['url']; ?>" alt="<?php echo $header_mobile_active_logo['title']; ?>">
						</a>

					</div><!-- .site-branding -->
				<?php endif; ?>

				<?php if (is_front_page()): ?>
					<div class="nav-wrapper d-flex align-content-start align-content-xl-between flex-wrap h-100 position-relative">
				<?php else :  ?>
					<div class="nav-wrapper d-flex align-content-between flex-wrap position-relative">
				<?php endif; ?>

					<?php if (is_front_page()): ?>
						<div class="nav-wrapper-inner">
					<?php else :  ?>
						<div class="nav-wrapper-inner ml-auto">
					<?php endif; ?>


						<div class="top d-none d-xl-block py-4 my-2 px-3">
							<div class="row d-flex justify-content-end">
								<div class="d-flex justify-content-end align-items-center">
									<?php if (get_field('aux_menu_toggle','option')) : ?>
										<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-top',
											'menu_id' => 'top-menu',
											'menu_class' => 'd-flex',
										) );
										?>
									<?php endif; ?>
									<?php if (get_field('phone', 'option')) : ?>
										<span class="phone">
											Call Us: <a href="tel:<?php the_field('phone', 'option'); ?>" target="_blank" title="Call the Boston University Center for Psychiatric Rehabilitation"><?php the_field('phone', 'option'); ?></a>
										</span>
									<?php endif; ?>
									<div class="search-icon">
										<a href="#" target="" >
											<i class="fas fa-search" onmouseup="setTimeout(function(){document.getElementById('search-field').focus()},10);"></i>
										</a>
									</div>
									<div class="searchform d-none">
										<?php get_search_form(); ?>
									</div>

									<?php if (get_field('donate', 'option')) : ?>
										<?php $donate = get_field('donate', 'option'); ?>
										<a class="donate btn btn-primary m-0" href="<?php echo $donate['url']; ?>" target="<?php echo $donate['target']; ?>">
											<?php echo $donate['title']; ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<nav id="site-navigation" class="navbar navbar-expand-xl navbar-light d-flex align-items-start flex-wrap p-0">
							<?php if (is_front_page()): ?>
								<div class="logo-toggle-wrapper container d-flex justify-content-between align-items-start w-100 py-4 p-xl-0 px-3 position-relative">
							<?php else :  ?>
								<div class="logo-toggle-wrapper container d-flex justify-content-between align-items-start w-100 py-4 py-xl-0 px-3 position-relative">
							<?php endif; ?>


								<?php if (get_field('header_logo','option')) : ?>
									<div class="navbar-brand d-flex d-xl-none align-items-center">
										<?php $header_logo = get_field('header_logo','option'); ?>
										<?php $header_home_logo = get_field('header_home_logo','option'); ?>
										<?php $header_mobile_active_logo = get_field('header_mobile_active_logo','option'); ?>

										<?php if (is_front_page()): ?>
											<a class="home default" href="<?php echo get_site_url(); ?>" title="">
												<img src="<?php echo $header_home_logo['url']; ?>" alt="<?php echo $header_home_logo['title']; ?>">
											</a>
										<?php else :  ?>
											<a class="default" href="<?php echo get_site_url(); ?>" title="">
												<img  src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>">
											</a>
										<?php endif; ?>
										<a class="mobile-active" href="<?php echo get_site_url(); ?>" title="">
											<img src="<?php echo $header_mobile_active_logo['url']; ?>" alt="<?php echo $header_mobile_active_logo['title']; ?>">
										</a>
									</div><!-- .site-branding -->
								<?php endif; ?>

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									<div class="label open">Menu</div>
									<!-- <i class="fal fa-times"></i> -->
									<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/lib/img/close-mobile-menu.svg">
									<div class="label close">Close</div>
								</button>
							</div>
							<div class="collapse navbar-collapse p-0" id="navbarNavDropdown">
								<div class="navbar-collapse-inner container d-flex flex-wrap justify-content-xl-end">
									<div class="d-flex d-xl-none my-4 m-xl-0 mb-4 w-100">
										<div class="searchform">
											<?php get_search_form(); ?>
										</div>
									</div>

									<?php
										$args = array(
											'theme_location' => 'menu-primary',
											'depth' => 2,
											'container' => 'div',
											'container_class' => 'menu-primary-container mt-4 m-xl-0 w-100',
											//'container_id' => 'bs-example-navbar-collapse-1',
											'menu_id' => 'primary-menu',
											'menu_class' => 'd-flex ml-auto nav navbar-nav',
											'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
											'walker' => new WP_Bootstrap_Navwalker(),
										);
									wp_nav_menu($args);
									?>

									<div class="mobile-aux-menu d-flex d-xl-none flex-wrap pb-4 w-100">
										<?php if (get_field('aux_menu_toggle','option')) : ?>
											<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-top',
												'menu_id' => 'top-menu',
												'menu_class' => 'd-flex flex-wrap',
											) );
											?>
										<?php endif; ?>
										<?php if (get_field('phone', 'option')) : ?>
											<span class="phone">
												<a style="font-size:inherit;" href="tel:<?php the_field('phone', 'option'); ?>">
													<?php the_field('phone', 'option'); ?>
												</a>
											</span>
										<?php endif; ?>
										<?php if (get_field('donate', 'option')) : ?>
											<?php $donate = get_field('donate', 'option'); ?>
											<a class="donate btn btn-primary m-0" href="<?php echo $donate['url']; ?>" target="<?php echo $donate['target']; ?>">
												<?php echo $donate['title']; ?>
											</a>
										<?php endif; ?>
									</div>
							  </div>
							</div>
						</nav>
					</div>
					<?php if (is_front_page()): ?>
						<?php $home_hero_image = get_field('home_hero_image'); ?>
						<div class="mobile-hero background-image d-flex d-xl-none" style="width:100%; min-height:144px; height: 50vw; max-height: 288px;background-image:url('<?php echo $home_hero_image['url']; ?>')"></div>
						<div class="tag d-flex h-auto py-5 py-xl-0">
							<?php if (get_field('home_hero_text')) : ?>
								<h3 class="display-5 droid-serif m-0">
									<?php the_field('home_hero_text'); ?>
								</h3>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="container get-my-margin"></div>
