<? get_header(); ?>

<div id="contenidos">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

	<h3 id="h3-<? the_ID(); ?>"><? the_title(); ?></h3>

	<? the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

</div>


<? get_footer(); ?>
