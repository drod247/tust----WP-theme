<?php
    global $tust;
    $logo_text = $tust['menu-logo-text'];
    $layout = $tust['nav-item']['enabled'];
?>
<header id="home">
  
  <div class="header-top-area">
      <div class="container">
          <div class="row">
          
              <div class="col-sm-3">
                  <div class="logo">
                      <a href="<?php bloginfo('home'); ?>"><?php echo $logo_text; ?></a>
                  </div>
              </div>
              
              <div class="col-sm-9">
                  <div class="navigation-menu">
                      <div class="navbar">
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                          </div>
                          <div class="navbar-collapse collapse">
                              <ul class="nav navbar-nav navbar-right">
                                  <?php
                                    if ($layout) {
                                      foreach ($layout as $key=>$value) {
                                          switch ($key) {
                                              case 'home':
                                                  echo '<li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a></li>';
                                                  break;
                                              case 'about':
                                                  echo '<li><a class="smoth-scroll" href="#about">About</a></li>';
                                                  break;
                                              case 'services':
                                                  echo '<li><a class="smoth-scroll" href="#services">Services</a></li>';
                                                  break;
                                              case 'lunch_date':
                                                  echo '<li><a class="smoth-scroll" href="#launch-date">Launch Date</a></li>';
                                                  break;
                                              case 'contact':
                                                  echo '<li><a class="smoth-scroll" href="#contact">Contact</a></li>';
                                                  break;
                                          }
                                      }
                                    } else {
                                  ?>

                                  <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a></li>
                                  <li><a class="smoth-scroll" href="#about">About</a></li>
                                  <li><a class="smoth-scroll" href="#services">Services</a></li>
                                  <li><a class="smoth-scroll" href="#launch-date">Launch Date</a></li>
                                  <li><a class="smoth-scroll" href="#contact">Contact</a></li>

                                  <?php } ?>

                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>