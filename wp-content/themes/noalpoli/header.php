<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="es-CO">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><? bloginfo('name'); ?><? wp_title(' | '); ?></title>
	<link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url'); ?>" media="screen" />
	<script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery.scrollTo-1.4.2-min.js'></script>
	<script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/scroll.js'></script>
	<script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery.jplayer.js'></script>
	<? if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	<script type='text/javascript'>
	    var name = "#sidebarDiv";
	    var menuYloc = null;
	
	    $(document).ready(function(){
		menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
		$(window).scroll(function () { 
		    var offset = menuYloc+$(document).scrollTop()+"px";
		    $(name).animate({top:offset},{duration:800,queue:false});
		});

		highlight_active_sidebar_links();

		function highlight_active_sidebar_links() {
		    $("li a").each(function(){
			var href = this.getAttribute('href',2);

			var location = new String( document.location );
			location = location.substr(0, href.length );

			if ( location == href) {
			<? if(!is_front_page()){ ?>
			    //$(this).addClass("activo");
			<? } ?>
			}
		    });
		}

		$('#sidebar').localScroll();

		<? if(is_single() && in_category('audio')) { ?>
		$("#jpId").jPlayer( {swfPath: "/js" , ready: function () {$("#jpId").setFile("http://noalpoliducto.org/wp-content/uploads/2009/06/reunioninformativapoliductojunio062009-alcalde.mp3").play();},cssPrefix: "my_jp_class"} );
		<? } ?>
 <?php
if(in_category('audio')||is_category('documentacion')){ 
 	$audiosh = new WP_Query('showposts=150&cat=3');
 	while ($audiosh->have_posts()) : $audiosh->the_post();
	$trash = $post->post_content;
 ?>
   	$("#mp3-<? the_ID(); ?>").jPlayer( {swfPath: "/js" , ready: function () {$("#mp3-<? the_ID(); ?>").setFile("<? extractMp3(); ?>");},cssPrefix: "my_jp_class"} );
	$("#mp3-<? the_ID(); ?>").jPlayerId("play", "player_play-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("pause", "player_pause-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("stop", "player_stop-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("loadBar", "player_progress_load_bar-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("playBar", "player_progress_play_bar-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("volumeMin", "player_volume_min-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("volumeMax", "player_volume_max-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("volumeBar", "player_volume_bar-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").jPlayerId("volumeBarValue", "player_volume_bar_value-<? the_ID(); ?>");
	$("#mp3-<? the_ID(); ?>").onProgressChange( function(loadPercent, playedPercentRelative, playedPercentAbsolute, playedTime, totalTime) {
		var myPlayedTime = new Date(playedTime);
		var ptMin = (myPlayedTime.getMinutes() < 10) ? "0" + myPlayedTime.getMinutes() : myPlayedTime.getMinutes();
		var ptSec = (myPlayedTime.getSeconds() < 10) ? "0" + myPlayedTime.getSeconds() : myPlayedTime.getSeconds();
		$("#play_time-<? the_ID(); ?>").text(ptMin+":"+ptSec);

		var myTotalTime = new Date(totalTime);
		var ttMin = (myTotalTime.getMinutes() < 10) ? "0" + myTotalTime.getMinutes() : myTotalTime.getMinutes();
		var ttSec = (myTotalTime.getSeconds() < 10) ? "0" + myTotalTime.getSeconds() : myTotalTime.getSeconds();
		$("#total_time-<? the_ID(); ?>").text(ttMin+":"+ttSec);
	});

 <?php endwhile; } ?>
	    }); 
	</script>
</head>

<body>
<div class="Alertanotice">
	Este sitio se encuentra en su etapa BETA de desarrollo, existen aún cosas por finalizar, puedes seguir visitandolo para ver como avanza. Estará listo finalizando esta semana.
</div>
<div id="wrap">

<div id="body">
	<div id="header">
		<h1><a href="/"><? bloginfo('title'); ?></a></h1>
		<!-- <h2><? bloginfo('description'); ?></h2> -->	
	</div>
