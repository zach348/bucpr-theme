<?php // Flex Content Sections ?>

<?php if( have_rows('resource_archive_page_content','option') ): ?>
	<div class="container-fluid px-0 flexible-page-content py-0">
	<?php while ( have_rows('resource_archive_page_content','option') ) : the_row(); ?>

		<?php
		//-----------------------------------------------------
		// Reusable CTA Block
		//-----------------------------------------------------
		?>
		<?php if( get_row_layout() == 'reusable_cta_block' ): ?>
			<?php get_template_part( 'template-parts/page-content/reusable-cta-block' ); ?>

		<?php
		//-----------------------------------------------------
		// Intro Text
		//-----------------------------------------------------
		?>
		<?php elseif( get_row_layout() == 'intro_text' ): ?>
			<?php get_template_part( 'template-parts/page-content/intro-text' ); ?>

		<?php endif; ?>
	<?php endwhile; // End Page Content "While" Loop ?>
	</div>
<?php else : ?>
	<?php // No Layouts ?>
<?php endif; // End Page Content "If" Loop ?>
