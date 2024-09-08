<?php
//-----------------------------------------------------
// Social Block
//-----------------------------------------------------
?>

<section class="container-fluid social-block">
	<div class="container position-relative">
		<div class="flourish"></div>
		<div class="row m-0 p-0">

			<?php if (get_sub_field('social_media_block_title')) : ?>
				<h2 class="d-flex w-100 primary-color mb-3">
					<?php the_sub_field('social_media_block_title'); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('social_media_account_select') == 'bu-cpr' ) : ?>

				<?php $social_media_cpr = (get_sub_field('social_media_cpr')); ?>

				<?php if ($social_media_cpr['social_media_cpr_title']) : ?>
					<h5 class="d-flex w-100 ">
						<?php echo $social_media_cpr['social_media_cpr_title']; ?>
					</h5>
				<?php endif; ?>

				<?php if ($social_media_cpr['social_media_cpr_facebook_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_cpr['social_media_cpr_facebook_url']; ?>" title="Facebook" target="_blank">
							<i class="display-4 fab fa-facebook-square mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_cpr['social_media_cpr_twitter_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_cpr['social_media_cpr_twitter_url']; ?>" title="Threads" target="_blank">
							<i class="display-4 fab fa-brands fa-square-threads mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_cpr['social_media_cpr_instagram_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_cpr['social_media_cpr_instagram_url']; ?>" title="Instagram" target="_blank">

							<i class="display-4 fab fa-instagram-square mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_cpr['social_media_cpr_linkedin_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_cpr['social_media_cpr_linkedin_url']; ?>" title="LinkedIn" target="_blank">
							<i class="display-4 fab fa-linkedin mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

			<?php endif; ?>

			<?php if( get_sub_field('social_media_account_select') == 'bu-cmh' ) : ?>

				<?php $social_media_college_of_mental_health = (get_sub_field('social_media_college_of_mental_health')); ?>

				<?php if ($social_media_college_of_mental_health['social_media_college_of_mental_health_title']) : ?>
					<h5 class="d-flex w-100 ">
						<?php echo $social_media_college_of_mental_health['social_media_college_of_mental_health_title']; ?>
					</h5>
				<?php endif; ?>

				<?php if ($social_media_college_of_mental_health['social_media_college_of_mental_health_facebook_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_college_of_mental_health_facebook_url']; ?>" title="Facebook" target="_blank">
							<i class="display-4 fab fa-facebook-square mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_college_of_mental_health['social_media_college_of_mental_health_instagram_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_college_of_mental_health_instagram_url']; ?>" title="Instagram" target="_blank">
							<i class="display-4 fab fa-instagram-square mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_college_of_mental_health['social_media_college_of_mental_health_twitter_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_college_of_mental_health_twitter_url']; ?>" title="Twitter" target="_blank">
							<i class="display-4 fab fa-brands fa-square-threads mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php if ($social_media_college_of_mental_health['social_media_college_of_mental_health_linkedin_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_college_of_mental_health_linkedin_url']; ?>" title="LinkedIn" target="_blank">
							<i class="display-4 fab fa-linkedin mr-3"></i>
						</a>
					</div>
				<?php endif; ?>

				<?php /* if ($social_media_college_of_mental_health['social_media_cmh_instagram_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_cmh_instagram_url']; ?>" title="Instagram" target="_blank">
							<i class="display-4 fab fa-linkedin mr-3"></i>
						</a>
					</div>
				<?php endif; */ ?>

				<?php /* if ($social_media_college_of_mental_health['social_media_cmh_linkedin_url']) : ?>
					<div class="col-auto px-0">
						<a href="<?php echo $social_media_college_of_mental_health['social_media_cmh_linkedin_url']; ?>" title="LinkedIn" target="_blank">
							<i class="display-4 fab fa-instagram-square mr-3"></i>
						</a>
					</div>
				<?php endif; */ ?>

			<?php endif; ?>

		</div>
	</div>
</section>
