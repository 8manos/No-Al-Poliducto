<? get_header(); ?>
<? get_sidebar(); ?>
<div id="contenidos" <? if(is_single()){echo "class='single'";} ?>>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<? if(!is_front_page()){ ?>
	<h3 id="h3-<? the_ID(); ?>"><? the_title(); ?></h3>
	<? if(is_single()){ ?>
		<span class="metapostinf">Publicado en <? the_category(', '); ?><?php edit_post_link("editar"," - (",")"); ?> </span>
	<? } ?>
<? } ?>
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
	<? the_content(); ?>


<?php endwhile; ?>
<?php endif; ?>
<? if(is_front_page()){comments_template('/colector_firmas.php');} elseif(is_page()||is_single()) { comments_template(); }; ?>
<div class="navPosts">
	<span class="left"><?php previous_post_link('&laquo; %link', 'anterior:<br> %title', TRUE); ?></span>
	<span class="right"><?php next_post_link('%link &raquo;', 'siguiente:<br> %title', TRUE); ?></span>
</div>
</div>

<? if(is_front_page()) { ?>
	<div id="hiddenForm">
		<?php insert_cform('2'); ?>
	</div>
<? } ?>
<? get_footer(); ?>
