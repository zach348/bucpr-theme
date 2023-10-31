<?php
//-----------------------------------------------------
// Video Embed
//-----------------------------------------------------
?>

<section class="container-fluid video-embed">

	<div class="container">
		<div class="section-title">
			<?php if (get_sub_field('video_embed_title')) : ?>
				<h2 class="h1 primary-color">
					<?php the_sub_field('video_embed_title'); ?>
				</h2>
			<?php endif; ?>
		</div>
	</div>
	<div class="container video-container px-0 px-sm-3">
		<?php if (get_sub_field('video_embed_itself')) : ?>
			<div class="embed-responsive embed-responsive-16by9">
				<?php the_sub_field('video_embed_itself'); ?>
			</div>
		<?php endif; ?>

	</div>
</section>
