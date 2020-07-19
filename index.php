<?php
get_header();

if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();
		echo '<div class="entry">';
		echo '	<h1>';
		the_title();
		echo '	</h1>';
		the_content();
		echo '</div>';
	endwhile;
}
?>
	<div class="pagination"><?php next_posts_link('&rarr; &Auml;ltere Beitr&auml;ge'); ?></div>
	<div class="pagination"><?php previous_posts_link('&larr; Neuere Beitr&auml;ge'); ?></div>

<?php get_footer(); ?>
