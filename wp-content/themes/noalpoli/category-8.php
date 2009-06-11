<? get_header(); ?>
<? get_sidebar(); ?>
<div id="contenidos">

<h3><a href="/?cat=5">Documentos</a></h3>
<?php $documentos = new WP_Query('showposts=3&cat=5'); if($documentos->have_posts()) : ?>
<div class="menosPadd">
<?php while($documentos->have_posts()) : $documentos->the_post(); ?>
<div class="itemBiblio">
	<h4><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>
	<? extractImage(); ?>
	<? the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div>
<h6><a href="/?cat=5">Ver todos los documentos</a></h6>
<?php endif; ?>

<h3><a href="/?cat=4">Videos</a></h3>
<?php $videos = new WP_Query('showposts=3&cat=4'); if($videos->have_posts()) : ?>
<div class="menosPadd">
<?php while($videos->have_posts()) : $videos->the_post(); ?>
<div class="itemBiblio">
	<h4><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>
	<? extractYouTube(); ?>
	<? the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div>
<h6><a href="/?cat=4">Ver todos los videos</a></h6>
<?php endif; ?>

<h3><a href="/?cat=3">Audio</a></h3>
<?php $audios = new WP_Query('showposts=3&cat=3'); if($audios->have_posts()) : ?>
<div class="menosPadd">
<?php while($audios->have_posts()) : $audios->the_post(); ?>
<div class="itemBiblio">
	<h4><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>

<?	if(in_category('audio')){ 
		$idu = $post->ID;
		echo "<div id='mp3-".$idu."'></div>"; ?>

<div id="player_container-<? the_ID(); ?>" class="player_container">
	<ul id="player_controls-<? the_ID(); ?>" class="player_controls">
		<li id="player_play-<? the_ID(); ?>" class="player_play"><a href="#" onClick="$('#mp3-<? the_ID(); ?>').play(); return false;" title="play"><span>play</span></a></li>
		<li id="player_pause-<? the_ID(); ?>" class="player_pause"><a href="#" onClick="$('#mp3-<? the_ID(); ?>').pause(); return false;" title="pause"><span>pause</span></a></li>
		<li id="player_stop-<? the_ID(); ?>" class="player_stop"><a href="#" onClick="$('#mp3-<? the_ID(); ?>').stop(); return false;" title="stop"><span>stop</span></a></li>

		<li id="player_volume_min-<? the_ID(); ?>" class="player_volume_min"><a href="#" onClick="$('#mp3-<? the_ID(); ?>').volume(0); return false;" title="min volume"><span>min volume</span></a></li>
		<li id="player_volume_max-<? the_ID(); ?>" class="player_volume_max"><a href="#" onClick="$('#mp3-<? the_ID(); ?>').volume(100); return false;" title="max volume"><span>max volume</span></a></li>
	</ul>


	<div id="player_progres-<? the_ID(); ?>" class="player_progres">
		<div id="player_progress_load_bar-<? the_ID(); ?>" class="player_progress_load_bar">
			<div id="player_progress_play_bar-<? the_ID(); ?>" class="player_progress_play_bar"></div>
		</div>

	</div>
	<div id="player_volume_bar-<? the_ID(); ?>" class="player_volume_bar">
		<div id="player_volume_bar_value-<? the_ID(); ?>" class="player_volume_bar_value"></div>
	</div>
	<div id="player_playlist_message-<? the_ID(); ?>" class="player_playlist_message">
		<div id="song_title-<? the_ID(); ?>" class="song_title"></div>
		<div id="play_time-<? the_ID(); ?>" class="play_time"></div>
		<div id="total_time-<? the_ID(); ?>" class="total_time"></div>

	</div>
</div>

<?
	}
?>


	<? the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div>
<h6><a href="/?cat=3">Ver todos los audios</a></h6>
<?php endif; ?>
<div class="clear"></div>
</div>


<? get_footer(); ?>
