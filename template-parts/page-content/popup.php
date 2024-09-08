<?php
//-----------------------------------------------------
// Popup
//-----------------------------------------------------
?>

<section class="container-fluid popup">
	<div class="container pt-0">
		<?php if (get_sub_field('popup_title')) : ?>
			<h2>
				<?php the_sub_field('popup_title'); ?>
			</h2>
		<?php endif; ?>

		<?php if (get_sub_field('popup_subtitle')) : ?>
			<h4>
				<?php the_sub_field('popup_subtitle'); ?>
			</h4>
		<?php endif; ?>

		<div class="modal-conf"></div>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
			<?php if (get_sub_field('popup_cta')) : ?>
				<?php the_sub_field('popup_cta'); ?>
			<?php else : ?>
				Learn More
			<?php endif; ?>
		</button>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<?php if (get_sub_field('popup_header')) : ?>
							<h3 style="line-height:1.3;">
								<?php the_sub_field('popup_header'); ?>
							</h3>
						<?php endif; ?>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="color-primary" style="font-size: 2.5rem;" aria-hidden="true">
								&times;
							</span>
						</button>
					</div>
				<div class="modal-body p-4 p-md-5">
					<?php if (get_sub_field('popup_wysiwyg')) : ?>
						<?php the_sub_field('popup_wysiwyg'); ?>
					<?php endif; ?>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
