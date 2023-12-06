<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Boilerplate
 */
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>

	<footer class="site-footer col py-5 px-0">

		<div class="container inner">
			<div class="p-0">
				<?php if (get_field('footer_title', 'option')) : ?>
					<h3 class="mb-3"><?php the_field('footer_title', 'option'); ?>
				<?php endif; ?>
			</div>
			<div class="row d-flex justify-content-between m-0">
				<div class="col-md-8 px-0">
					<div class="d-flex flex-wrap">
						<?php if (get_field('footer_text', 'option')) : ?>
							<p><?php the_field('footer_text', 'option'); ?></p>
						<?php endif; ?>
					</div>
					<div class="d-flex row m-0 meta">
						<div class="col-lg-5 p-0 mb-4 mb-lg-0">
							<?php if (get_field('address_title', 'option')) : ?>
								<strong class="d-block mb-1">
									<?php the_field('address_title', 'option'); ?>
								</strong>
							<?php endif; ?>
							<?php if (get_field('address', 'option')) : ?>
								<?php the_field('address', 'option'); ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-3 px-0 px-lg-3 mb-4 mb-lg-0">
							<?php if (get_field('hours_title', 'option')) : ?>
								<strong class="d-block mb-1">
									<?php the_field('hours_title', 'option'); ?>
								</strong>
							<?php endif; ?>
							<?php if (get_field('hours', 'option')) : ?>
								<?php the_field('hours', 'option'); ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-4 p-0 mb-4 mb-lg-0">
							<?php if (get_field('email_title', 'option')) : ?>
								<strong class="d-block mb-1">
									<?php the_field('email_title', 'option'); ?>
								</strong>
							<?php endif; ?>
							<?php if (get_field('email', 'option')) : ?>
								<p class="mb-0">
									<a href="mailto:<?php the_field('email', 'option'); ?>">
										<?php the_field('email', 'option'); ?>
									</a>
								</p>
							<?php endif; ?>
						</div>
					</div>
					<div class="newsletter d-flex flex-wrap mb-5 mb-lg-0">
						<?php if (get_field('newsletter_embed_title', 'option')) : ?>
							<strong class="d-block w-100">
								Sign up for important announcements and blog articles!
							</strong>
						<?php else : ?>
							<strong class="d-block w-100">
								 Signup for important announcements and blog articles!
							</strong>
						<?php endif; ?>

						<?php if (get_field('newsletter_embed', 'option')) : ?>
							<div class="embed">
								<?php the_field('newsletter_embed', 'option'); ?>
							</div>
						<?php else :?>

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_shell">
	<link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	        #mc_embed_signup{background:#E2E1E3; clear:left; font:14px Helvetica,Arial,sans-serif;  width:400px;}
	        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style><!-- <style type="text/css">
	        #mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
	#mergeRow-gdpr {margin-top: 20px;}
	#mergeRow-gdpr fieldset label {font-weight: normal;}
	#mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
	</style> -->
	<div id="mc_embed_signup">
	    <form action="https://cpr.us3.list-manage.com/subscribe/post?u=8fd74629f76ce6ba754fd18ad&amp;id=ae8b3d5004&amp;v_id=4931&amp;f_id=000342e2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	        <div id="mc_embed_signup_scroll"><h2>Enter your information below</h2>
	            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
	            <div class="mc-field-group">
	                <label for="mce-ROLE">Your Role* <span class="asterisk">*</span></label>
	                <select name="ROLE" class="required" id="mce-ROLE">
	                    <option disabled="" value="" selected="true">This field is required</option>
	                    <option value="Provider">Provider</option>
	                    <option value="Person in Mental Health Recovery or with Psychiatric Disabilities">Person in Mental Health Recovery or with Psychiatric Disabilities</option>
	                    <option value="Family Member">Family Member</option>
	                    <option value="Administrator">Administrator</option>
	                    <option value="Employer">Employer</option>
	                    <option value="Researcher">Researcher</option>
	                    <option value="Educator">Educator</option>
	                    <option value="Other">Other</option>
	                </select>
	            </div>
	            <div class="mc-field-group">
	                <label for="mce-EMAIL">Email Address* <span class="asterisk">*</span></label>
	                <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
	            </div>
	            <div class="mc-field-group" style="display:none;">
	                <label for="mce-REFERREDBY">referringPage </label>
	                <input type="text" name="REFERREDBY" class=" text" id="mce-REFERREDBY" value=<?php echo $current_url ?>>
			<input type="hidden" name="tags" value="10185587">
	            </div>
	            <div class="mc-field-group" style="display:none;">
	                <label for="mce-SIGNUP_LOC">signup_location </label>
	                <input type="text" name="SIGNUP_LOC" class=" text" id="mce-SIGNUP_LOC" value="footer">
	            </div>
	            <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
	              <div class="content__gdpr">
	                <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
	                    <label class="checkbox subfield required" for="gdpr_34149">
	                      <input type="checkbox" id="gdpr_34149" name="gdpr[34149]" value="Y" required><span id="agree-privacy-checkbox-text"> I have read and agree to BU-CPR's <a target="_blank" href="https://cpr.bu.edu/privacy-policy" class="link">Privacy Policy</a></span>
	                    </label>
	                </fieldset>
	              </div>
	            </div>
	           	<div class="clear">
	                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
	            </div>
	            <div id="mce-responses" class="clear">
	                <div class="response" id="mce-error-response" style="display: none;"></div>
	                <div class="response" id="mce-success-response" style="display: none;"></div>
	            </div>
	            <div aria-hidden="true" style="position: absolute; left: -5000px;">
	                <input type="text" name="b_8fd74629f76ce6ba754fd18ad_ae8b3d5004" tabindex="-1" value="">
	            </div>

	    </div>
	</form>
	</div>
	<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
	<script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[12]='ROLE';ftypes[12]='dropdown';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='REFERREDBY';ftypes[3]='text';fnames[5]='SIGNUP_LOC';ftypes[5]='text';fnames[8]='ROLEINFO';ftypes[8]='text';fnames[14]='STATE';ftypes[14]='dropdown';fnames[4]='COUNTRY';ftypes[4]='dropdown';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</div>

<!--End mc_embed_signup-->
						<?php endif; ?>
					</div>
				</div>
				<div class="row mx-0 col-md-4 col-xl-3 px-0 pl-md-3 d-flex d-md-block flex-wrap flex-md-wrap justify-content-between align-items-start">
					<div class="col-12 col-sm-6 col-md-12 pl-0">
						<?php
							$args = array(
								'theme_location' => 'menu-footer-primary',
								'container' => 'div',
							);
							wp_nav_menu($args);
						?>
					</div>
					<div class="ccol-12 col-sm-6 col-md-12 pl-0">
						<?php
							$args = array(
								'theme_location' => 'menu-footer-secondary',
								'container' => 'div',
							);
							wp_nav_menu($args);
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-5 pb-4 px-0">
			<div class="row m-0">
				<div class="d-flex w-100 logos justify-content-center">
					<?php if (have_rows('footer_logos','option')) : ?>
						<?php while(have_rows('footer_logos','option')) : the_row(); ?>
							<?php if (get_sub_field('footer_logo')) : ?>
								<div class="logo col d-flex justify-content-center align-items-center">
									<?php if (get_sub_field('footer_logo_link')) : ?>
										<?php $footer_logo_link = the_sub_field('footer_logo_link'); ?>
										<?php echo $footer_logo_link['url']; ?>
										<?php echo $footer_logo_link['title']; ?>
										<?php echo $footer_logo_link['target']; ?>
									<?php endif; ?>
									<?php $footer_logo = get_sub_field('footer_logo'); ?>
									<img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"/>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="container row px-0 d-flex mx-auto justify-content-center w-100 menu-footer-secondary">
			<?php
				$args = array(
					'theme_location' => 'menu-footer-tertiary',
					'container' => 'div',
				);
				wp_nav_menu($args);
			?>
			<ul>
				<li class="copyright">
					<span>&copy; 2023 Trustees of Boston University</span>
				</li>
			</ul>
		</div>
		<div class="fyi container mt-4 d-flex px-0">
			<p class="col text-left"><small>The content, development, and maintenance of this website are supported in part under a grant with funding from the National Institute on Disability, Independent Living, and Rehabilitation Research, and from the Center for Mental Health Services Substance Abuse and Mental Health Services Administration, United States Department of Health and Human Services (NIDILRR grant 90RT5029). NIDILRR is a Center within the Administration for Community Living (ACL), Department of Health and Human Services (HHS). The contents of this website do not necessarily represent the policy of NIDILRR, ACL, HHS, or of SAMHSA and you should not assume endorsement by the Federal Government.</small></p>
		</div>
	</footer><!-- footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
