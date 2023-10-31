<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<?php
	$calendar_hero_image = tribe_event_featured_image( $event_id, 'full', false );
	// $size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<?php /* if (get_field('calendar_hero_image','option')) : ?>
	<?php $calendar_hero_image = get_field('calendar_hero_image','option'); ?>
	<?php $calendar_hero_image = $calendar_hero_image['url']; ?>
<?php // else : ?>
	<?php // $hero_sub_image = get_stylesheet_directory_uri() . '/lib/img/default-hero-img.jpg' ?>
<?php endif; */ ?>

<div id="sub-page-hero" class="sub-page-hero jumbotron jumbotron-fluid p-0 position-relative mb-0">
	<div class="container-fluid p-0">
		<div class="row d-flex flex-column flex-md-row flex-column-reverse justify-content-between m-0">
			<?php if ($calendar_hero_image): ?>
				<div class="text col-md-8 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php else: ?>
				<div class="text col-md-10 d-flex flex-wrap align-items-center pt-3 pb-4 pr-4 py-md-5 pr-md-5 my-0">
			<?php endif; ?>
				<div class="inner pt-2 pt-md-0 col">
					<div class="flourish mt-4 mt-md-0 d-none d-lg-block"></div>
					<?php the_title( '<h1 class="tribe-events-single-event-title page-title mb-3 mb-lg-4 mt-1 mt-lg-4">', '</h1>' ); ?>
					<div class="tribe-events-schedule tribe-clearfix">
						<?php echo tribe_events_event_schedule_details( $event_id, '<h2 class="w-100 d-block">Date: ', '</h2>' ); ?>
						<?php if ( tribe_get_cost() ) : ?>
							<span class="tribe-events-cost">Cost: <?php echo tribe_get_cost( null, true ) ?></span>
						<?php endif; ?>
					</div>
					<p class="tribe-events-back mt-5">
						<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
					</p>
				</div>
			</div>
			<?php if ($calendar_hero_image): ?>
				<?php /* <div class="col-md-4 background-image" style="background-image:url('<?php echo $calendar_hero_image; ?>')"></div> */ ?>
				<div class="col-md-4 background-image">
					<?php echo $calendar_hero_image; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="menu-underlay position-absolute h-100 w-100" style="display:none;">
		<div class="inner h-100 position-absolute"></div>
	</div>
</div>

<div id="tribe-events-content" class="tribe-events-single col-md-8 mx-auto px-3 py-3">

	<!-- Notices -->
	<?php tribe_the_notices() ?>



	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
	</div>
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
