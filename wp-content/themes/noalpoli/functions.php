<?
if ( function_exists('register_sidebar') )register_sidebar();

function extractMp3() {
	$content = get_the_content(); 
	$pattern = "/\bhttp:\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|]\.mp3/i";
	preg_match ($pattern, $content, $match);
	$mp3link = $match[0];
	echo $mp3link;
}

function extractYouTube() {
	$content = get_the_content();
	$pattern = "/youtube\.com\/v\/([\w\-]+)/";
	preg_match ($pattern, $content, $match);
	$YOUTUBE = $match[1];
	echo '<object width="210" height="172"><param name="movie" value="http://www.youtube.com/v/'.$YOUTUBE.'"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/'.$YOUTUBE.'" type="application/x-shockwave-flash" wmode="transparent" width="210" height="172"></embed></object><br><br>';
}

function extractImage() {
	$content = get_the_content();
	$pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
	preg_match ($pattern, $content, $match);
	$IMG = $match[0];
	if($IMG) {
		echo '<img '.$IMG.' width="210px" /><br><br>';
	}
}

function wp_new_excerpt($text)
{
	if ($text == '')
	{
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$text = nl2br($text);
		$excerpt_length = apply_filters('excerpt_length', 22);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_new_excerpt');

function sin_generators()
{
return '';
}
add_filter('the_generator','sin_generators');

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-firma-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
<?php $xtra = cf_extra_comment_data(get_comment_ID()); ?>
      <?php if ($comment->comment_approved == '0') : ?>
         <em class="moderpend"><?php _e('Gracias por tu firma, pronto aparecerá publicada en el sitio. Mantendremos tu documento de identidad y tu e-mail privados por razones de seguridad.') ?></em>
      <?php endif; ?>
      <div class="comment-author vcard">
	<cite class="fn">
         <?php printf(__('%s - '), get_comment_author_link()) ?>	
		<span class="residen"><?php echo $xtra['Lugar de residencia']; ?></span>
	</cite>
      </div>

      <div class="comment-meta commentmetadata fecha"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s a las %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Editar)'),'  ','') ?></div>

      <?php comment_text() ?>

     </div>
<?php
        }

?>
