<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="es-CO">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><? bloginfo('name'); ?><? wp_title(' | '); ?></title>
	<link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url'); ?>" media="screen" />
	<script type='text/javascript' src='<? bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js'></script>
	<? if ( is_single() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	<script type='text/javascript'>
	    var name = "#sidebarDiv";
	    var menuYloc = null;
	
	    $(document).ready(function(){
		menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
		$(window).scroll(function () { 
		    var offset = menuYloc+$(document).scrollTop()+"px";
		    $(name).animate({top:offset},{duration:800,queue:false});
		});
	    }); 
	</script>
</head>

<body>
<div class="Alertanotice">
	Este sitio se encuentra en su etapa inicial de desarrollo, existen aún muchas cosas por finalizar, puedes seguir visitandolo para ver como avanza. Planeamos tenerlo listo finalizando esta semana. Gracias por el interes.
</div>
<div id="wrap">

<div id="body">
	<div id="header">
		<h1><a href="/"><? bloginfo('title'); ?></a></h1>
		<!-- <h2><? bloginfo('description'); ?></h2> -->	
	</div>
