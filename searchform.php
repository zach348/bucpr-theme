<form name="search" role="search" method="get" class="search-form d-flex align-items-center" action="<?php echo site_url('/'); ?>">
	<i class="fas fa-search d-none d-xl-block"></i>
	<i class="fal fa-search d-block d-xl-none"></i>
	<label class="m-0">
		<input autofocus="autofocus" id="search-field" style="outline: 0 !important;" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter Search Term', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<div class="submit d-flex position-relative align-items-center">
		<input type="submit" style="min-width: 0;" class="btn search-submit m-0 px-3" value="<?php echo esc_attr_x( 'Submit', 'submit button' ) ?>" />
		<i class="fas fa-chevron-right"></i>
	</div>
</form>
