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
    <?php
    //Calling Main Navigation Section
    include 'app/assets/templates/template-navigation.php';
     ?>

    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/service/services.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <h1 class="pagetitle__heading">Digital Marketing & Web Development Agency</h1>
            <!-- <p class="pagetitle__desc">Competitive advantages to some of the largest companies allover the world.</p> -->
            <a href="#" class="btn btn__white">Contact Us</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pb-80">
      <div class="container">
        <div class="row heading heading-2 mb-40">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Real Solutions, Real Fast!</span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__title">Delivering the Best Global Logistics Solutions.</h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 ">
            <p class="heading__desc">Our global logistics expertise, advanced supply chain technology & customized
              logistics solutions will help you analyze, develop and implement successful supply chain management
              strategies.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row text-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-ecommerce"></i></div>
              <div class="service__content">
                <h4 class="service__title">Web Development & Design</h4>
                <p class="service__desc">Websites are the essence of your online presence. We will create a functional website that is customized for your business and drives results.
                   All of our websites include SEO, lead generation tools and more.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-smartphone"></i></div>
              <div class="service__content">
                <h4 class="service__title">Mobile App Development</h4>
                <p class="service__desc">We design and develop custom mobile application for iOS and Android platforms.
                  Our mobile app developers have expertise to create mobile applications using AI and ML technologies.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-search"></i></div>
              <div class="service__content">
                <h4 class="service__title">Search Engine Optimization</h4>
                <p class="service__desc">Search engine advertising, also known as pay-per-click advertising helps you reach new customers
                  and guarantee an established traffic flow to your website.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-speech-bubble"></i></div>
              <div class="service__content">
                <h4 class="service__title">Social Media Marketing</h4>
                <p class="service__desc">We help you with social media management, advertising and strategic content creation to
                  help you grow your audience and reach new prospects.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-wishlist"></i></div>
              <div class="service__content">
                <h4 class="service__title">Content Marketing</h4>
                <p class="service__desc">Content marketing helps you increase visibility, traffic and brand awareness.
                  We offer effective and valuable SEO-copywriting that resonates with your target audience.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-signboard"></i></div>
              <div class="service__content">
                <h4 class="service__title">Digital Marketing Strategy</h4>
                <p class="service__desc">Get your own digital marketing strategy built from scratch.
                   Schedule a free consultation to get started.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services -->

    <!-- ======================
           banner 1
      ========================= -->
      <section id="banner1" class="banner banner-1 p-0 bg-gray">
        <div class="container-fluid col-padding-0">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="inner-padding">
                <div class="heading heading-3 mb-30">
                  <i class="icon-tag"></i>
                  <!-- <span class="heading__subtitle">Affordable Price, Certified Forwarders</span> -->
                  <h2 class="heading__title">Our Trademarked Process & Workflow.</h2>
                  <p class="heading__desc">We promote each other in every effort to attain excellence and are not satisfied until
                    projects meet our quality requirements. We mean it when we say quality work delivered at the right time.
                     We're a team of expert & experienced designers and developers who work hard & smart. We strive to deliver
                      the best and stand by our commitment at all times.</p>
                </div><!-- /.heading -->
                <a href="#" class="btn btn__primary">Schedule An Appointment</a>
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
              <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/banners/banner2.jpg" alt="background"></div>
              <div class="skills skills-panel">
                <div class="heading mb-30">
                  <h2 class="heading__title">What We Achieved!</h2>
                  <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic solutions to our
                    customers to fit their needs.</p>
                </div><!-- /.heading -->
                <!-- progress 1 -->
                <div class="progress-item">
                  <h6 class="progress__title">Development </h6>
                  <span class="progress__percentage"></span>
                  <div class="progress">
                    <div class="progress-bar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.progress-item  -->
                <!-- progress 2 -->
                <div class="progress-item">
                  <h6 class="progress__title">Design </h6>
                  <span class="progress__percentage"></span>
                  <div class="progress">
                    <div class="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.progress-item  -->
                <!-- progress 3 -->
                <div class="progress-item">
                  <h6 class="progress__title">Digital Marketing</h6>
                  <span class="progress__percentage"></span>
                  <div class="progress">
                    <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.progress-item  -->
                <!-- progress 4 -->
                <div class="progress-item">
                  <h6 class="progress__title">Branding & Promotion</h6>
                  <span class="progress__percentage"></span>
                  <div class="progress">
                    <div class="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.progress-item  -->
                <!-- progress 8 -->
                <div class="progress-item">
                  <h6 class="progress__title">Service & Satisfaction</h6>
                  <span class="progress__percentage"></span>
                  <div class="progress">
                    <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.progress-item  -->
              </div><!-- /.skills -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.banner 1 -->

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
