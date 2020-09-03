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

    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title page-title-layout3 text-center bg-overlay bg-parallax">
      <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/why-us/why-choose-us.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <h1 class="pagetitle__heading">A Culture of Helping Businesses Succeed</h1>
            <p class="pagetitle__desc">High-end website design, development, and tactical digital marketing campaigns.</p>
            <a href="request-quote.html" class="btn btn__white">Request A Quote</a>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 1
    =========================== -->
    <section id="about1" class="about about-1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="video-banner p-0">
                <img src="<?= $base_URI; ?>/app/assets/images/why-us/why-us-body1.jpg" alt="background">
              <div class="video__btn video__btn-right-center">
                <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                  <span class="video__player-animation"></span>
                  <span class="video__player-animation video__player-animation-2"></span>
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div>
            </div><!-- /.video -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-3 pt-100">
              <!-- <span class="heading__subtitle">Affordable Price, Certified Forwarders</span> -->
              <h2 class="heading__title">Your digital partner. With you all the way.</h2>
              <p class="heading__desc mb-30">DraftiCode is a Professional website design and digital marketing ideas company recognized as the ‘go to’ company for high-end website design, development, and tactical digital marketing campaigns.
                 Working with us, you’ll soon start to view DraftiCode as a valuable extension of your own team.</p>
                <img src="<?= $base_URI; ?>/app/assets/images/about/singnture.png" alt="singnture" class="mr-30">
              <a href="#" class="btn btn__primary btn__lg">Schedule An Appointment</a>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 1 -->

    <!-- ===========================
      fancybox Layout 1
    ============================= -->
    <section id="fancyboxLayout1" class="fancybox-layout1 pt-90 pb-50">
      <div class="container">
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-wallet"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Experience</h4>
                <p class="fancybox__desc">10+ years in business, specializing in graphic and web design, email and social media marketing, SEO and much more. </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-search"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Added Value</h4>
                <p class="fancybox__desc">We have achieved a client’s goals through great design, superior development, and a continued, consultative approach.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-trolley"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Specializing in Design</h4>
                <p class="fancybox__desc">We have succeeded in crafting innovative graphics, responsive design, usability, content management, and SEO every day.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-package-6"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Education</h4>
                <p class="fancybox__desc">We believe the only way to succeed is through continued learning and education, as our industry continues to evolve. </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Layout1 -->

    <!-- ===========================
      projects Grid layout 2
    ============================= -->
    <section id="projectsGrid" class="projects projects-grid projects-grid-layout2 pb-50">
      <div class="projects-bg bg-overlay bg-overlay-gradient-secondary-2">
        <div class=" bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/backgrounds/4.jpg" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-white text-center mb-50">
              <span class="heading__subtitle color-theme">Latest Case Studies</span>
              <h2 class="heading__title">Featured Projects</h2>
              <p class="heading__desc">We presents the following case studies that exemplify the type of solutions and
                services we are providing across our customer base.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- project item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/1.jpg" alt="project img">
                <div class="project__cat">
                  <a href="#">Analystics</a><a href="#">Optimization</a>
                </div><!-- /.project-cat -->
              </div><!-- /.project-img -->
              <div class="project__content">
                <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing and
                  optimizing your supply chain performance.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.project-content -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/2.jpg" alt="project img">
                <div class="project__cat">
                  <a href="#">Warehousing</a><a href="#">Distribution</a>
                </div><!-- /.project-cat -->
              </div><!-- /.project-img -->
              <div class="project__content">
                <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing and
                  optimizing your supply chain performance.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.project-content -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/3.jpg" alt="project img">
                <div class="project__cat">
                  <a href="#">Logistics</a><a href="#">Analytics</a>
                </div><!-- /.project-cat -->
              </div><!-- /.project-img -->
              <div class="project__content">
                <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend by
                  utilizing an extensive .</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.project-content -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects Grid layout 2  -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients" class="clients clients-1 pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Join Us Today</span>
              <h2 class="heading__title">Our Partners</h2>
              <p class="heading__desc">Our skilled personnel, utilising the latest communications, tracking and
                processing software, combined with decades of experience! Through integrated supply chain solutions,
                Logisti drives sustainable competitive advantages to some of Australia's largest companies.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/9.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/10.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/12.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/13.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#">  <img src="<?= $base_URI; ?>/app/assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->

  
    <!-- ===========================
      awards
    ============================= -->
    <section id="awards" class="awards pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Awards & Milestones</span>
              <h2 class="heading__title">Pursuit Of Excellence</h2>
              <p class="heading__desc">The essence of our business is service and customer focus, we realize like no
                other that receiving timely and accurate information plays a key role.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- feature item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/awards/1.jpg" alt="certificate" class="img-fluid">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Family Business Award</h4>
                <p class="feature__desc">We believe that partnerships are fundamental to our growth. We'll seek the
                  highest quality global forwarding services.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/awards/2.jpg" alt="certificate" class="img-fluid">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Excellence in Exporting</h4>
                <p class="feature__desc">When we communicate, we are honest and direct. We won't make excuses, simply
                  offer you a concrete solutions.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/awards/3.jpg" alt="certificate" class="img-fluid">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Top Leading Global Trade </h4>
                <p class="feature__desc">As a logistics solutions provider, we’ll monitor your logistical objectives and
                  make sure all your logistical activities.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.awards -->

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
