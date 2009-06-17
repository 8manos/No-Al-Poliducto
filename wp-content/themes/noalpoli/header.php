<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="es-CO">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><? bloginfo('name'); ?><? wp_title(' | '); ?></title>
	<link rel="shortcut icon" href="/favicon.ico">
	<? wp_enqueue_script('jquery'); wp_enqueue_script('thickbox'); if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	<!-- <link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url'); ?>" media="screen" /> -->
	<!-- <script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery.scrollTo-1.4.2-min.js'></script> -->
	<!-- <script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/scroll.js'></script> -->
	<!-- <script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery.jplayer.js'></script> -->
	<script type="text/javascript" src="/min/g=js"></script>
	<link type="text/css" rel="stylesheet" href="/min/g=css" />
	<script type='text/javascript'>
	    var name = "#sidebarDiv";
	    var menuYloc = null;
	
	    jQuery(document).ready(function($){
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
			<?php while(have_posts()) : the_post(); ?>
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
<?php endwhile; ?>


		<? } elseif (is_category('audio')){ 
 	$audiosh = new WP_Query('showposts=150&cat=3');
 	while ($audiosh->have_posts()) : $audiosh->the_post();
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

 <?php endwhile; ?>

		<? } elseif (is_category('documentacion')){ 
 	$audiosh = new WP_Query('showposts=3&cat=3');
 	while ($audiosh->have_posts()) : $audiosh->the_post();
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
<!-- #publisher=16a93774-f6b0-4efd-84b5-d4b7b619fe80&amp;type=wordpress&amp;send_services=email&amp;post_services=facebook%2Cmyspace%2Cdelicious%2Ctwitter%2Cstumbleupon%2Cfriendfeed%2Cblogger%2Cwordpress%2Cgoogle_bmarks%2Cwindows_live&amp;headerfg=%23000000&amp;headerbg=%23BAE576&amp;headerTitle=Comparte%20con%20amigos%20y%20ayudanos!&amp;wp=2.8 -->
<!--[if lt IE 8]>
<style type="text/css">
input#searchsubmit {
	text-indent:0px;
	padding:0 0 0 60px;
}

div#contenidos pre {
	margin-top:0px;
}

.cform input {
	width:160px;
}

OL.cf-ol LI {
	width:45%;
}
</style>
<![endif]-->
</head>

<body>
<div id="wrap">

<div id="body">
	<div id="header">
		<h1><a href="/"><? bloginfo('title'); ?></a></h1>
		<h2 id="quote"><? bloginfo('description'); ?></h2>	
	</div>
