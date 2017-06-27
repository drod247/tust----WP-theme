<?php
    global $tust;
    $about_header = $tust['about-header'];
    $about_poster = $tust['about-poster'];
?>
<section id="about" class="section-space-padding pattern-bg">
    <div class="container">
	    <div class="section-title">
		   <i class="icon-emotsmile"></i>
		   <h3><?php echo $about_header; ?></h3>
		</div>
		<div class="row">
	        <div class="col-md-6 col-md-offset-3">
			    <div class="about-us">
			    	<p><?php echo $about_poster; ?></p>
			    </div>
	        </div>
	    </div>
    </div>
</section>