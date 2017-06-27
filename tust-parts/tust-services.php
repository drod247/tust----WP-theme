<?php
    global $tust;
    $services_header = $tust['services-header'];
?>		  
		  
      <!-- Our Services Start -->
      <section id="services" class="services-section section-space-padding">
         <div class="container">
			        
			  <div class="section-title">
				<i class="icon-support"></i>
				<h3 class="white-color"><?php echo $services_header; ?></h3>
			   </div>
			     
                
			     <div class="row">
            

            <?php 
            	if (isset($tust['services_content']) && !empty($tust['services_content'])) {
            		foreach ($tust['services_content'] as $single_service) {
            			?>
            			    <div class="col-md-4 col-sm-6 3d-hover">
								<div class="services-detail hover-effect-3d">
									<i class="fa <?php echo $single_service['url']; ?> color-1"></i>
									<h5><?php echo $single_service['title']; ?></h5>
									<hr>
									<p><?php echo $single_service['description']; ?></p>
								</div>
							</div>
            			<?php
            		}
            	} else {
            ?>
            <div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-mobile color-1"></i>
					<h5>Mobile Design</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-tablet color-2"></i>
					<h5>Tablet Design</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-code color-3"></i>
					<h5>Clean Code</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>
            
            <div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-support color-4"></i>
					<h5>Full Support</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-html5 color-5"></i>
					<h5>HTML5 Design</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 3d-hover">
				<div class="services-detail hover-effect-3d">
					<i class="fa fa-ge color-6"></i>
					<h5>CSS3 Design</h5>
					<hr>
					<p>Lorem ipsum dolor sit amet, consec adipiscingco elit. Proin at quam at orci commodo.</p>
				</div>
			</div>

			<?php } ?>

          </div>
        </div>
     </section>
     <!-- Our Services End -->
				   
	