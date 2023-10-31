<?php
//-----------------------------------------------------
// Body Content
//-----------------------------------------------------
?>

<section class="container-fluid body-content">
	<div class="container pt-0">
		<?php if (get_sub_field('body_content_text')) : ?>
			<?php the_sub_field('body_content_text'); ?>
		<?php endif; ?>
	</div>
</section>
