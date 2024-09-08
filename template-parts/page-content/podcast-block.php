<?php
//-----------------------------------------------------
// Podcast Block
//-----------------------------------------------------
?>

<section class="container-fluid podcast-block">
	<div class="container pt-0">
		<?php if (get_sub_field('podcast_title')) : ?>
			<h2>
				<?php the_sub_field('podcast_title'); ?>
			</h2>
		<?php endif; ?>

		<?php if (get_sub_field('podcast_subtitle')) : ?>
			<?php the_sub_field('podcast_subtitle'); ?>
		<?php endif; ?>

		<style>
			[aria-pressed="true"] {
				/* border: 2px solid red;
				background: #FAFAAE; */
			}

			[aria-pressed="false"] {
				//border: 2px solid #000;
			}

			.visually-hidden {
				position: absolute;
				overflow: hidden;
				clip: rect(0 0 0 0);
				height: 1px; width: 1px;
				margin: -1px; padding: 0; border: 0;
			}
		</style>

			<div class="d-flex justify-content-start">
				<button class="btn btn-secondary audio-ctrl play mr-3">Listen to Audio</button>
				<button class="btn btn-secondary audio-ctrl pause">Pause</button>
			</div>

			<audio controls id="player" class="d-flex w-100">
			<?php if (get_sub_field('podcast_audio_file_mp3')) :
				$podcast_audio_file_mp3 = get_sub_field('podcast_audio_file_mp3'); ?>
				<source src="<?php echo $podcast_audio_file_mp3['url']; ?>" preload="auto" type="audio/mpeg">
			<?php endif; ?>

			<?php if (get_sub_field('podcast_audio_file_ogg')) :
				$podcast_audio_file_ogg = get_sub_field('podcast_audio_file_ogg'); ?>
				<source src="<?php echo $podcast_audio_file_ogg['url']; ?>" preload="auto" type="audio/ogg">
			<?php endif; ?>

			<?php if (get_sub_field('podcast_audio_file_vtt')) :
				$podcast_audio_file_vtt = get_sub_field('podcast_audio_file_vtt'); ?>
				<track src="<?php echo $podcast_audio_file_vtt['url']; ?>" label="English Captions" kind="subtitles" srclang="en-us" default>
			<?php endif; ?>

			<p>Your browser does not support HTML5 audio.</p>

		</audio>


		<?php if (get_sub_field('podcast_transcript')) : ?>
			<?php $podcast_transcript = get_sub_field('podcast_transcript'); ?>
			<div class="d-flex justify-content-start my-3 my-lg-4">
				<?php if (get_sub_field('podcast_transcript_preview')) : ?>
					<a class="btn btn-text audio-ctrl read mr-3 mr-lg-5">
						<span class="mr-1">
							Preview Transcript
						</span>
						<i class="fas fa-pen"></i>
					</a>
				<?php endif; ?>
				<a class="btn btn-text" href="<?php echo $podcast_transcript['url']; ?>" title="Download Transcript" target="_blank">
					<?php // echo $podcast_transcript['title']; ?>
					<span class="mr-1">
						Download Transcript
					</span>
					<i class="fas fa-download"></i>
				</a>
			</div>
		<?php endif; ?>

		<?php if (get_sub_field('podcast_transcript_preview')) : ?>
			<p class="visually-hidden audio-transcript p-3" tabindex="0">
				<?php the_sub_field('podcast_transcript_preview'); ?>
			</p>
		<?php endif; ?>

		<?php /* if (get_sub_field('podcast_cta')) : ?>
			<?php $podcast_cta = get_sub_field('podcast_cta'); ?>
			<a class="btn btn-secondary" href="<?php echo $podcast_cta['url']; ?>" title="<?php echo $podcast_cta['title']; ?>" target="<?php echo $podcast_cta['target']; ?>">
				<?php echo $podcast_cta['title']; ?>
			</a>
		<?php endif; */ ?>
	</div>
</section>
