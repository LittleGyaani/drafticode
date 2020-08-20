<?php

//Calling the Global Configuration file
require 'app/config/global.config.php';

//Calling the SmartObfuscator Library
require 'app/tools/obfuscator/SmartObfuscator/SmartObfuscator.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Section -->
  <?php
  //Calling Meta Section
  include 'app/assets/templates/template-meta.php';
  ?>
  <title> <?= $title_constant; ?> | Why Us</title>
  <!-- Header Section -->
  <?php
  //Calling Header Section
  include 'app/assets/templates/template-header.php';
  ?>
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <?php
    //Calling Main Navigation Section
    include 'app/assets/templates/template-navigation.php';
     ?>

    <!-- =========================
            Google Map
    =========================  -->
    <!-- <section id="googleMap" class="google-map p-0">
      <div id="map"></div>
      <script src="assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap"
        async defer></script>
    </section> -->
    <!-- /.GoogleMap -->

    <!-- ==========================
        contact 3
    =========================== -->
    <section id="contact3" class="contact contact-3 text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Let DraftiCode Help You</span>
              <h2 class="heading__title">Contact Us</h2>
              <p class="heading__desc">We would love to hear from you. So please ring our bell and we will get back to you.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Phone"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Company"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Request Details"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                  <button type="submit" class="btn btn__secondary btn__hover3 btn__block">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 3 -->

    <!-- ==========================
       Contact 2
    ============================ -->
    <section id="contact2" class="contact contact-2 text-center pt-0 pb-80">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <div class="contact__panel-icon">
                    <!-- <img src="<?= $base_URI; ?>/app/assets/images/flags/united-states.png" alt="us"> -->
                </div><!-- /.contact-panel-icon -->
                <h4 class="contact__panel-title">Bangalore Office</h4>
              </div><!-- /.contact-panel-header -->
              <ul class="contact__list list-unstyled">
                <li><a href="tel: +91 79751 89067"> +91 79751 89067</a></li>
                <li><a href="mailto:info@drafticode.com">contact@drafticode.com</a></li>
                <li>17,302, Gauri Shankar Nilay<br>Sri Venkateshwara Layout, Old Madiwala,
                  <br>BTM Layout Stage 1,Near Gamgotri circle<br>Bangalore<br>Karnataka - 560068</li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact-list -->
              <a href="#" class="btn btn__primary btn__hover3">
                <span>Contact Us</span><i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <div class="contact__panel-icon">
                    <!-- <img src="<?= $base_URI; ?>/app/assets/images/flags/germany.png" alt="germany"> -->
                </div><!-- /.contact-panel-icon -->
                <h4 class="contact__panel-title">Bhubaneswar Office - Saheed Nagar</h4>
              </div><!-- /.contact-panel-header -->
              <ul class="contact__list list-unstyled">
                <li><a href="tel: +91 63700 71649"> +91 70083 08511</a></li>
                <li><a href="mailto:info@drafticode.com">info@drafticode.com</a></li>
                <li>2, Arihant Plaza<br> In-front of OMFED Office<br> Swash Lane, Saheed Nagar<br>Bhubaneswar<br>
                  Odisha- 751007 IN</li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact-list -->
              <a href="#" class="btn btn__primary btn__hover3">
                <span>Contact Us</span><i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <div class="contact__panel-icon">
                    <!-- <img src="<?= $base_URI; ?>/app/assets/images/flags/canada.png" alt="canada"> -->
                </div><!-- /.contact-panel-icon -->
                <h4 class="contact__panel-title">Bhubaneswar Office - Patia</h4>
              </div><!-- /.contact-panel-header -->
              <ul class="contact__list list-unstyled">
                  <li><a href="tel: +91 98532 33951"> +91 98532 33951</a></li>
                  <li><a href="mailto:info@drafticode.com">info@drafticode.com</a></li>
                  <li>Near KIIT TBI<br>Patia, KIIT Square<br>Bhubaneswar,<br>ODISHA- 751024 IN</li>
                  <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact-list -->
              <a href="#" class="btn btn__primary btn__hover3">
                <span>Contact Us</span><i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact 2 -->


</body>

</html>
<!-- ========================
        Footer
========================== -->
<!-- Footer Setion -->
<?php
//Calling footer section
include 'app/assets/templates/template-footer.php';
 ?>
</body>
</html>

<!-- Scripts Section -->
<?php
//Calling Scripts Section
include 'app/assets/templates/template-scripts.php';
?>
