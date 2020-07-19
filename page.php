<?php get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();
		the_content('Weiterlesen ...');
	endwhile;
} ?>

<?php get_footer(); ?>
