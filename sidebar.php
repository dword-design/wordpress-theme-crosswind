<div id="sidebar">
	<?php
		$sidebar = get_page_by_title("Sidebar");
		//if (is_page($sidebar)) {
		echo apply_filters ("the_content", $sidebar->post_content);
		//} else {
		//	echo 'Die Seite "Sidebar" existiert nicht.';
		//}
	?>
</div>