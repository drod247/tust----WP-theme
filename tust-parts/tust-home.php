<?php
    global $tust;
    $header_text = $tust['home-header-text'];
    $sub_header_text = $tust['home-sub-header-text'];
    $mailchimp = $tust['mailchimp'];
?>


<!-- Home Section Start -->
<section id="home" class="home-section-background">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header-section">
          <h2><?php echo $header_text; ?></h2>
          <p><?php echo $sub_header_text; ?></p>
          
          <div class="col-md-6 col-md-offset-3 margin-top-50">
            <form id="mc-form" method="post" action="<?php echo $mailchimp; ?>">
              <div class="subscribe-form">
                <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                <button class="submit-btn" type="submit">Submit</button>
              </div>
              <label for="mc-email" class="mc-label"></label>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
