<?php
// Including Files



if (file_exists( dirname( __FILE__ ) . '/inc/tust-style-js.php' )) {
	require_once( get_template_directory() .'/inc/tust-style-js.php'  );
}

// Redux fremwork 

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/tust-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/tust-options.php' );
}

// Removing Redux Framework From tools .The value must be over 10

add_action( 'admin_menu', 'remove_redux_menu',12 );
	function remove_redux_menu() {
	remove_submenu_page('tools.php','redux-about');
}

// For adding lunch date in the js 
if (!function_exists('lunch_date')) {
	function lunch_date()
	{
		global $tust;
		if ($tust['lunch_datepicker'] && $tust['lunch_houre']  && $tust['lunch_minute'] ) {
			$lunch_datepicker 	= $tust['lunch_datepicker'];
			$lunch_houre 		= $tust['lunch_houre'];
			$lunch_minute 		= $tust['lunch_minute'];
		} else {
			$lunch_datepicker	= '11/14/2019';
			$lunch_houre 		= '15';
			$lunch_minute		= '00';
		}
		
		?>
			<script type="text/javascript">
				jQuery(document).ready(function ($) {
					$('.countdown').downCount({
			            date: '<?php echo $lunch_datepicker; ?> <?php echo $lunch_houre; ?>:<?php echo $lunch_minute; ?>:00',   // Change the launch date from here
			            offset: +5.5
			          }, function () {
			             alert('Countdown Done, We are just going to launch our website!');
			        });
				});
			</script>
		<?php
	}
	add_action('wp_head','lunch_date');
}



?>