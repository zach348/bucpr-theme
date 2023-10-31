<?php get_header(); ?>

	<div id="primary" class="content-area position-relative">
		<main id="main" class="site-main">
			<?php get_template_part( 'template-parts/heros/hero', 'research-projects' ); ?>

			<div class="featured position-relative">
				<!-- <div class="page-overlay position-absolute h-100 w-100"></div> -->
				<?php get_template_part( 'template-parts/content', 'research-archive-page' ); ?>
			</div>

			<div class="filters background-primary-color py-5">
				<div class="container my-3 my-lg-0">
					<div class="titles">
						<div class="flourish"></div>
						<h2 class="h1 color-white">Search</h2>
					</div>
					<div class="d-none research-project-types">
						<?php echo facetwp_display( 'facet', 'research_project_types' ); ?>
					</div>
					<ul class="nav nav-tabs d-none d-lg-flex justify-content-between ml-0" id="myTab" role="tablist">
						<li class="nav-item h2">
							<a class="clear-research-project-types nav-link color-white px-4 active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
						</li>
						<li class="nav-item h2">
							<a data-research-project-types="study" class="research-project-type nav-link color-white px-4" id="studies-tab" data-toggle="tab" href="#studies" role="tab" aria-controls="studies" aria-selected="false">Studies</a>
						</li>
						<?php /*
						<li class="nav-item h2">
							<a data-research-project-types="article" class="research-project-type nav-link color-white px-4" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
						</li>
						*/ ?>
						<li class="nav-item h2">
							<a data-research-project-types="research-summary" class="research-project-type nav-link color-white px-4" id="research-summaries-tab" data-toggle="tab" href="#research-summaries" role="tab" aria-controls="research-summaries" aria-selected="false">Research Summaries</a>
						</li>
						<li class="nav-item h2">
							<a data-research-project-types="opportunity" class="research-project-type nav-link color-white px-4" id="opportunities-tab" data-toggle="tab" href="#opportunities" role="tab" aria-controls="opportunities" aria-selected="false">Opportunities</a>
						</li>
					</ul>

					<div class="d-block d-lg-none dropdown">
						<a class="p btn btn-secondary dropdown-toggle font-weight-normal text-capitalize m-0 w-100" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Research Project Types
						</a>
						<div class="nav research-dropdown-menu dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
							<a class="clear-research-project-types nav-link px-4 active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
							<a data-research-project-types="study" class="research-project-type nav-link px-4" id="studies-tab" data-toggle="tab" href="#studies" role="tab" aria-controls="studies" aria-selected="false">Studies</a>
							<a data-research-project-types="article" class="research-project-type nav-link px-4" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
							<a data-research-project-types="research-summary" class="research-project-type nav-link px-4" id="research-summaries-tab" data-toggle="tab" href="#research-summaries" role="tab" aria-controls="research-summaries" aria-selected="false">Research Summaries</a>
							<a data-research-project-types="opportunity" class="research-project-type nav-link px-4" id="opportunities-tab" data-toggle="tab" href="#opportunities" role="tab" aria-controls="opportunities" aria-selected="false">Opportunities</a>
						</div>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
							<div class="container-fluid pt-5">
								<div class="row mb-5">
									<div class="col-12 col-sm-6 col-lg-4 pl-0 pr-0 pr-sm-3 pr-md-5">
										<h4 class="color-white mb-2">Topic</h4>
										<?php echo facetwp_display( 'facet', 'all_research_topics' ); ?>
										<div class="no-search mb-3">
											<!-- <p class="mb-2 color-white font-weight-normal text-uppercase">
												Research Study Topics
											</p> -->
											<?php echo facetwp_display( 'facet', 'all_research_study_topics' ); ?>
										</div>
										<div class="no-search">
											<!-- <p class="mb-2 color-white font-weight-normal text-uppercase">
												Research Article Topics
											</p> -->
											<?php echo facetwp_display( 'facet', 'all_research_article_topics' ); ?>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-lg-6 px-0 mt-4 mt-md-0">
										<div class="mb-4">
											<h4 class="color-white">Title</h4>
											<?php echo facetwp_display( 'facet', 'all_research_article_search_by_title' ); ?>
										</div>
										<div class="all-research-article-search-by-author">
											<h4 class="color-white">Contact</h4>
											<?php echo facetwp_display( 'facet', 'all_research_article_search_by_author' ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="studies" role="tabpanel" aria-labelledby="studies-tab">
							<div class="container-fluid pt-5">
								<div class="row mb-5">
									<div class="col-12 col-sm-6 pl-0 pr-0 pr-md-5">
										<h4 class="color-white">Topic</h4>
										<div class="no-search">
											<?php echo facetwp_display( 'facet', 'research_study_topics' ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
							<div class="container-fluid pt-5">
								<div class="row mb-5">
									<div class="col-12 col-sm-6 col-lg-4 pl-0 pr-0 pr-sm-3 pr-md-5">
										<h4 class="color-white">Topic</h4>
										<div class="no-search">
											<?php echo facetwp_display( 'facet', 'research_article_topics' ); ?>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-lg-4 px-0 mt-4 mt-md-0">
										<div class=" mb-5">
											<h4 class="color-white">Title</h4>
											<?php echo facetwp_display( 'facet', 'research_article_search_by_title' ); ?>
										</div>
										<div class="">
											<h4 class="color-white">Author</h4>
											<?php echo facetwp_display( 'facet', 'research_article_search_by_author' ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="research-summaries" role="tabpanel" aria-labelledby="research-summaries-tab">
							<div class="container-fluid pt-5">
								<div class="row mb-5">
									<div class="research-summary-options col-12 pl-0">
										<p class="color-white w-75">
											Please see our summaries below.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="opportunities" role="tabpanel" aria-labelledby="opportunities-tab">
							<div class="container-fluid pt-5">
								<div class="row mb-5">
									<div class="col-sm-8 pl-0">
										<!-- <p class="color-white w-75">
											Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
										</p> -->
										<h4 class="color-white">Options</h4>
										<?php echo facetwp_display( 'facet', 'research_summary_options' ); ?>
									</div>
									<!-- <div class="col-sm-4 pl-0">
										<a class="btn btn-outline-light" href="#">
											Search
										</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="facetwp-template">
				<?php if ( have_posts() ) : ?>
					<div class="posts container-fluid py-5">
						<div class="headings container py-4 mb-3 d-none d-md-block">
							<div class="row d-flex justify-content-between">
								<div class="col-12 col-md-8 col-lg-5 pr-5">
									<h5 class="color-secondary font-weight-normal">Title</h5>
									</div>
								<div class="col-12 col-sm-4 col-md-4">
									<h5 class="color-secondary font-weight-normal">Contact</h5>
								</div>
								<?php /* <div class="col-sm-2 d-none d-lg-block">
									<h5 class="color-secondary font-weight-normal">Topic</h5>
								</div> */ ?>
								<div class="col-sm-3 d-none d-lg-block">
									<h5 class="color-secondary font-weight-normal">Dates</h5>
								</div>
							</div>
						</div>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
						<?php endwhile; else : ?>
						<?php //get_template_part( 'template-parts/content', 'none' ); ?>
						<div class="border p-5 my-5">
							<div class="inner container p-5 text-center">
								<h2>No posts to display!</h2>
								<h3>Reset your filters and try again.</h3>
								<h4>Contact us with any questions regarding your search!</h4>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="pagination">
					<div class="d-flex container justify-content-center">
						<?php echo facetwp_display( 'pager' ); ?>
					</div>
				</div>

			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>
