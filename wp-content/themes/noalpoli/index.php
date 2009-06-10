<? get_header(); ?>
<? get_sidebar(); ?>
<div id="contenidos">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<? if(!is_front_page()){ ?>
	<h3 id="h3-<? the_ID(); ?>"><? the_title(); ?></h3>
<? } ?>
	<? the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
<? if(is_front_page()){comments_template('/colector_firmas.php');} elseif(is_page()||is_single()) { comments_template(); }; ?>
</div>


<? get_footer(); ?>
