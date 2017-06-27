<?php

if (!function_exists('tust_style_js')) {
    function tust_style_js() {
    	// Styles
        wp_enqueue_style( 'plugin', get_template_directory_uri() . '/css/plugin.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Nosifer', array(), '1.0', 'all'  );
    	//scripts 
        wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugin.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'tust_style_js' );
}

// IE Support

if (!function_exists('tust_ie_support')) {
    function tust_ie_support(){
    	?>
            <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
            <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    	<?php
    }
    add_action('wp_head', 'tust_ie_support');
}

?>