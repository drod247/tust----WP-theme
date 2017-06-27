<?php
    global $tust;
    $lunch_header = $tust['lunch-header'];
?>  
  <section id="launch-date" class="section-space-padding padding-bottom-0 pattern-bg">
     <div class="container">


    <div class="section-title">
   <i class="icon-clock"></i>
   <h3><?php echo $lunch_header; ?></h3>
    </div>


        <div class="row">
           <div class="countdown">
               
               <div class="col-md-3 col-sm-6 col-xs-8 col-xs-offset-2 col-sm-offset-0">
                  <div class="countdown-timer bg-color-6">
                   <span class="days">00</span>
                   <p class="days_ref">days</p>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-8 col-xs-offset-2 col-sm-offset-0">
                 <div class="countdown-timer bg-color-2">
                   <span class="hours">00</span>
                   <p class="hours_ref">hours</p>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-8 col-xs-offset-2 col-sm-offset-0">
                 <div class="countdown-timer bg-color-4">
                   <span class="minutes">00</span>
                   <p class="minutes_ref">minutes</p>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-8 col-xs-offset-2 col-sm-offset-0">
                  <div class="countdown-timer bg-color-3">
                   <span class="seconds">00</span>
                   <p class="seconds_ref">seconds</p>
                  </div>
              </div>
          </div>
       </div>
   </div>
</section>
					
					
