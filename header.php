<?php
    global $tust;
    $upload_facivon = $tust['upload-facivon'];

?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="url" content="<?php bloginfo('home'); ?>">

    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title><?php bloginfo('title' ); ?></title>
    
    <!-- Favicon -->
        <link rel="shortcut icon" href="<?php
        if($upload_facivon == '1' && !empty($tust['favicon']['thumbnail'])){
            echo $tust['favicon']['thumbnail'];
        } else {
            echo get_template_directory_uri().'/images/favicon.ico';
        }
        ?>">

    <?php
      wp_head();
    ?>

 </head>

  <body>
    
    
	
	  <!-- Preloader Start -->
      <div class="preloader">
       <p>Loading...</p>
      </div>
      <!-- Preloader End -->
	  