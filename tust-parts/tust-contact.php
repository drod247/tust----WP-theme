<?php
    global $tust;
    $contact_header = $tust['contact-header'];
    $contact_address = $tust['contact-address'];
    $contact_phone = $tust['contact-phone'];
    $contact_email = $tust['contact-email'];
?>
<section id="contact" class="contact-us section-space-padding">
  <div class="container">
        
	<div class="section-title">
	   <i class="icon-envelope"></i>
	   <h3><?php echo $contact_header; ?></h3>
	</div>

	<?php
		// For Sending Email:
    	if ($_SERVER['REQUEST_METHOD'] == "POST") {
			function input_validate($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			// First validate the input
			$name 			= input_validate($_POST['name']);
			$email 			= input_validate($_POST['email']);
			$website 		= input_validate($_POST['website']);
			$address 		= input_validate($_POST['address']);
			$message 		= input_validate($_POST['message']);
			// Must Come empty
			$robo 		= $_POST['robo'];
			// This Address mever xomes empty
			$to 			= $tust['admin-email'];

			if (empty($name) || empty($email) || empty($website) || empty($address) || empty($message) || !empty($robo)) {
				echo "<h4 class = 'worning text-center bg-warning'>Please Fill All The information</h4>";
			} else {
				$subject = 'User Contact Email From'.get_bloginfo('name');
				$message = 'Name: '.$name.'\n\nEmail: '.$email.'\n\nWebsite: '.$website.'\n\nAddress: '.$address.'\n\nMessage: '.$message;
				if (mail($to, $subject, $message)) {
					$message = 'Thanks For Contact Us. We will come back to you soon. Please be with us.';
					mail($email, $subject, $message);
					echo "<h4 class = 'worning text-center bg-success'>We get your email. Thanks for contact us.</h4>";
				}
			}
		}
    ?>



    <div class="row">
        <div class="col-md-7">
            <form method="post" action="">
				<div class="col-sm-6">
					<div class="form-group">
					  <input type="text" id="name" class="form-control" placeholder="Your Name" name="name">
					 </div>
		        </div>
		        <div class="col-sm-6">
				    <div class="form-group">
					 <input type="email" id="email" class="form-control" placeholder="Your Email" name="email">
					 </div>
		        </div>
		        <div class="col-sm-6">
					<div class="form-group">
						<input type="text" id="website" class="form-control" placeholder="Your Website" name="website">
					</div>
		        </div>
		        <div class="col-sm-6">
					<div class="form-group">
						<input type="text" id="address" class="form-control" placeholder="Where are You From?" name="address">
					</div>
		        </div>
		        <input style="display: none;" type="text" class="form-control" placeholder="Where are You From?" name="robo">	
		        <div class="col-sm-12">
				<div class="textarea-message form-group">
				    <textarea id="message" class="textarea-message form-control" placeholder="Your Message" rows="5" name="message"></textarea>
				</div>
		        </div>
		        <div class="text-center">      
		            <button type="submit" class="button button-style">Submit</button>
		        </div>
            </form>
        </div>
			 
		  
		<div class="col-md-5 3d-hover">
			<div class="contact-us-detail pattern-bg hover-effect-3d">
			    <h6>Our Address :</h6>
				<p><?php echo $contact_address; ?></p>
				<h6>Phone Number :</h6>
				<p><a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a></p>
				<h6>Email Address :</h6>
				<p><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
			</div>
        </div>
    </div>

	<div class="col-md-6 col-md-offset-3">
		<div class="pattern-bg padding-top-60 padding-bottom-40 margin-top-150 box-shadow-show">
			<ul class="social-icon margin-bottom-30">

			<?php 
            	if (isset($tust['contuct-social']) && !empty($tust['contuct-social'])) {
            		foreach ($tust['contuct-social'] as $single_social) {
            			?>
            			    <li><a href="<?php echo $single_social['url']; ?>" target="_blank" class="<?php echo $single_social['title']; ?>"><i class="icon-social-<?php echo $single_social['title']; ?>"></i></a></li>
            			<?php
            		}
            	} else {
            ?>

        	  <li><a href="#" target="_blank" class="facebook"><i class="icon-social-facebook"></i></a></li>
        	  <li><a href="#" target="_blank" class="twitter"><i class="icon-social-twitter"></i></a></li>
        	  <li><a href="#" target="_blank" class="google-plus"><i class="icon-social-google"></i></a></li>
        	  <li><a href="#" target="_blank" class="instagram"><i class="icon-social-instagram"></i></a></li>

        	<?php } ?>
        	</ul>
		</div>
    </div>
	  
 </section>

