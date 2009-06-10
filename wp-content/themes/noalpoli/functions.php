<?
if ( function_exists('register_sidebar') )register_sidebar();

function sin_generators()
{
return '';
}
add_filter('the_generator','sin_generators');

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <?php if ($comment->comment_approved == '0') : ?>
         <em class="moderpend"><?php _e('Gracias por tu firma, pronto aparecerá publicada en el sitio. Mantendremos tu documento de identidad y tu e-mail privados por razones de seguridad.') ?></em>
      <?php endif; ?>
      <div class="comment-author vcard">
         <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
	<?php $xtra = cf_extra_comment_data(get_comment_ID()); ?>
	<?php echo ' Lugar de residencia: '.$xtra['Lugar de residencia']; ?>
      </div>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Editar)'),'  ','') ?></div>

      <?php comment_text() ?>

     </div>
<?php
        }

?>
