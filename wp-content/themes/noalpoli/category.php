<? get_header(); ?>
<? get_sidebar(); ?>
<div id="contenidos">
<h3><? single_cat_title(); ?></h3>
<?php if(have_posts()) : ?>
<div class="menosPadd">
<? $ii=0; ?><div class="renglon">
<?php while(have_posts()) : the_post(); ?>
<div class="itemBiblio">
	<h4><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>
<?	if(in_category('video')){ extractYouTube(); }elseif(in_category(5)){ extractImage(); }elseif(in_category('audio')){
 
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
<? $ii++ ; if($ii == 3 || $ii == 6 || $ii == 9 || $ii == 12 || $ii == 15 || $ii == 18 || $ii == 21 || $ii == 24 || $ii == 25){
	echo  "</div><div class='renglon'>";
} ?>
<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
<div class="clear"></div>
</div>


<? get_footer(); ?>
