<?php
get_header();

global $tust;
$layout = $tust['nav-item']['enabled'];

// For Ataching All the file
if ($layout) {
	get_template_part( 'tust-parts/tust', 'menu' );
	foreach ($layout as $key => $value) {
		switch ($key) {
			case 'home':
				get_template_part( 'tust-parts/tust', 'home' );
				break;
			case 'about':
				get_template_part( 'tust-parts/tust', 'about' );
				break;
			case 'services':
				get_template_part( 'tust-parts/tust', 'services' );
				break;
			case 'lunch_date':
				get_template_part( 'tust-parts/tust', 'timer' );
				break;
			case 'contact':
				get_template_part( 'tust-parts/tust', 'contact' );
				break;
		}
	}
} else {
	get_template_part( 'tust-parts/tust', 'menu' );
	get_template_part( 'tust-parts/tust', 'home' );
	get_template_part( 'tust-parts/tust', 'about' );
	get_template_part( 'tust-parts/tust', 'services' );
	get_template_part( 'tust-parts/tust', 'timer' );
	get_template_part( 'tust-parts/tust', 'contact' );
}


get_footer();
?>
    
    
    
  