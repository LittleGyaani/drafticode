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
  <title> <?= $title_constant; ?> | Home</title>
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
    <!-- Navigation Section -->
    <?php
    //Calling Main Navigation Section
    include 'app/assets/templates/template-navigation.php';
     ?>

    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
      <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
        data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/sliders/slider-1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Build Up Your Business Online</h2>
                  <p class="slide__desc">Our approach and experience in all aspects of Website Development and Digital Marketing, assisting our potential clients reaching out their requirements.</p>
                  <a href="#" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                  <a href="#" class="btn btn__white">About Us</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/sliders/slider-2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Affordable Prices and Great Solutions</h2>
                  <p class="slide__desc">Through our design, technology and marketing strategy, you can connect with and engage your
                    audience at extremely competitive prices.</p>
                  <a href="#" class="btn btn__white mr-30">About Us</a>
                  <a href="#" class="btn btn__primary btn__hover2">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/sliders/slider3.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Focused on Business</h2>
                  <p class="slide__desc">We are focused on satisfaction of our customers and their business success. We make life easy for everyone.</p>
                  <a href="#" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                  <a href="#" class="btn btn__white">About Us</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/sliders/slider4.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Give Wings To Your Business</h2>
                  <p class="slide__desc">We go beyond traditional development and strategies approach. We help brands to
                     increase their visibility, engagement, and revenue.</p>
                  <a href="#" class="btn btn__white mr-30">Get Started</a>
                  <a href="#" class="btn btn__primary btn__hover2">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 d-none d-lg-block">
            <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
              <button class="owl-thumb-item">
                <i class="icon-ecommerce"></i>
                <span>Website <br> Development</span>
              </button>
              <button class="owl-thumb-item">
                <i class="icon-smartphone"></i>
                <span>Mobile App<br> Development</span>
              </button>
              <button class="owl-thumb-item">
                <i class="icon-signboard"></i>
                <span>Digital<br> Marketing</span>
              </button>
              <button class="owl-thumb-item">
                <i class="icon-ribbon"></i>
                <span>Logo<br> Designing</span>
              </button>
            </div><!-- /.owl-thumbs -->
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-12 col-lg-12 d-none d-lg-block">
            <a class="btn btn__video btn__video-lg popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
              <div class="video__player">
                <span class="video__player-animation"></span>
                <span class="video__player-animation video__player-animation-2"></span>
                <i class="fa fa-play"></i>
              </div>
              <span class="video__btn-title">Watch Our Presentation!</span>
            </a><!-- /.btn__video-->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.slider -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pb-90">
      <div class="container">
        <div class="row heading heading-2 mb-40">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Real Solutions, Real Fast!</span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__title">One Stop Solution</h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 ">
            <p class="heading__desc">You name it and leave all the hard work to us. From web and mobile design & development to digital
              marketing and e-commerce development, we do it all. We handle your business as our own and measure our success with yours.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row text-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-ecommerce"></i></div>
              <div class="service__content">
                <h4 class="service__title">Website Development </h4>
                <p class="service__desc">We provide customized and need-based solutions
                   for E-Commerce Websites, Dynamic or Static Websites, along with round-the-clock support.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-ribbon"></i></div>
              <div class="service__content">
                <h4 class="service__title">Design </h4>
                <p class="service__desc">Create fluid and mobile-first web designs with
                   attractive graphics and engaging content with our web design company in India.</p>
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
                <h4 class="service__title">Digital Marketing </h4>
                <p class="service__desc">Get comprehensive solutions and expert
                  guidance on SEO, paid campaigns, ORM, data analytics, social media marketing services, and other digital marketing campaigns.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services -->
    <!-- ===========================
      fancybox Carousel
    ============================= -->
    <section id="fancyboxCarousel"
      class="fancybox-layout4 fancybox-carousel bg-overlay bg-overlay-gradient-secondary-2">
      <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/backgrounds/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">Our Features</span>
              <h2 class="heading__title color-white">Why Choose Us!</h2>
              <p class="heading__desc">We continue to pursue that same
                 vision in today's complex, uncertain world, working every day to earn our customers’ trust!</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-arrows" data-slide="4" data-slide-md="2" data-slide-sm="1"
              data-autoplay="true" data-nav="true" data-dots="false" data-space="20" data-loop="true" data-speed="800">
              <!-- fancybox item #1 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-wallet"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Well Designed </h4>
                  <p class="fancybox__desc">Responsive and user-friendly design for all movable platforms.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #2 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-search"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Well Coded </h4>
                  <p class="fancybox__desc">With Latest technologies with integrated with CMS</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #3 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-trolley"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Focused on Business </h4>
                  <p class="fancybox__desc">Fully focused on customers’ business success.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #4 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-package-6"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Web Custom Design</h4>
                  <p class="fancybox__desc">Crafted to create unique identity for every business needs.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #5 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-payment-method"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Deliver What You Want </h4>
                  <p class="fancybox__desc">Logical approach with latest technology.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #6 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-delivery-4"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Optimize Your Brand </h4>
                  <p class="fancybox__desc">Success with massive traffic, ranking and online presence.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #7 -->
              <div class="fancybox-item">
                <div class="fancybox__icon">
                  <i class="icon-wishlist"></i>
                </div><!-- /.fancybox-icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Personalised solutions</h4>
                  <p class="fancybox__desc">We continue to pursue that same vision in today's complex solutions.</p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="text__link mb-0">Working every day to earn our customers’ trust. <a href="#"
                class="color-theme">Get Started!</a>
            </p>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Carousel -->

    <!-- ========================
        Request Quote Tabs
    =========================== -->
    <section id="requestQuoteTabs" class="request-quote request-quote-tabs p-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="request__form">
              <nav class="nav nav-tabs">
                <a class="nav__link active" data-toggle="tab" href="#quote">Request A Quote</a>
              </nav>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="quote">
                  <div class="request-quote-panel">
                    <div class="request__form-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <h6>Personal Data</h6>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group form-group-select">
                            <select class="form-control">
                              <option>Company type</option>
                              <option>Sole Propreitorship</option>
                              <option>Pvt Ltd</option>
                              <option>Public Limited</option>
                              <option>Partnership</option>
                              <option>LLP</option>
                              <option>Not registered</option>
                            </select>
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Company name">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Location">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Website URL(if any)">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Message">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <button class="btn btn__secondary btn__block">Request A Quote</button>
                        </div><!-- /.col-lg-12 -->
                      </div>
                    </div><!-- /.request__form-body -->
                    <div class="widget widget-download bg-theme">
                      <div class="widget__content">
                        <h5>Our<br>Agenda</h5>
                        <p>Our Mission is to achieve the reputation of a quality, high standard &
                          reliable solution & service Provider Company in the IT and Digital market industry. </p>
                        <a href="#" class="btn btn__secondary btn__hover2 btn__block">
                          <span>Download 2020 Brochure</span><i class="icon-arrow-right"></i>
                        </a>
                      </div><!-- /.widget__content -->
                    </div><!-- /.widget-download -->
                  </div><!-- /.request-quote-panel-->
                </div><!-- /.tab -->

              </div><!-- /.tab-content -->
            </div><!-- /.request-form -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Request Quote Tabs -->

    <!-- =========================
            Testimonial #1
    =========================  -->
    <section id="testimonial" class="testimonial testimonial-1 text-center pt-80 pb-70">
      <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/backgrounds/2.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading mb-50">
              <span class="heading__subtitle">What Peoples Say!</span>
              <h2 class="heading__title">Testimonials</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
              data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
              data-speed="800">
              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">DraftIcode is one of the best web development company , they provide best service . They know what Client requirements very well. They made one of my website and I really like that one.
And thanks to Swati she provide me logo and that was really cool.☺️
Best of luck Draftcode .</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature-2.jpg" alt="signature">
                  <p class="testimonial__meta-desc">Subhasish Sahoo</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">Thanks for that wonderful posters u made for our association.
                    The content was completely covered with making it clumsy...and the colour.
                    Combination u used were so superb .looking forward to work with u even more ..keep growing </p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature-1.jpg" alt="signature">
                  <p class="testimonial__meta-desc">Ragini Mitra<br>
Odisha State tennis cricket association<br>
FLIER AND POSTERS DESIGNER</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">I am really impressed by the quality of services I received from Flatworld Solutions.
                    You were right on schedule, charged reasonable prices, were professional and courteous in dealings,
                    and delivered items well before time. I have got a good e-commerce site for my products.
                     My revenue has increased because of Flatworld and I will definitely use your services again.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature.png" alt="signature">
                  <p class="testimonial__meta-desc">General Manager<br>ENCORE GROUP</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">A Website mirrors the company identity, That gives it a face and a soul. Web Designers from the firm ‘MIRROR DESIGN’ Express did that for “Landscape Ventures.” They instantly knew what we wanted to accomplish, they were fast, responsive and relatively affordable.
The final product was very functional, tasteful and aesthetically nice to look at.
We already recommended them to other customers and I think that would be the best testimonial and the ultimate recognition.
Thanks to “DRAFTI CODE ” 👍</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature.png" alt="signature">
                  <p class="testimonial__meta-desc">DEBABRATA<br>LANDSCAPE VENTURES</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.testimonial1 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients1" class="clients clients-1 border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-1.jpg" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-2.jpg" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-3.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-4.jpg" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-5.jpg" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="<?= $base_URI; ?>/app/assets/images/clients/logo-6.jpg" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- ======================
           banner 3
      ========================= -->
    <section id="banner3" class="banner banner-3 p-0 bg-theme">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 background-banner bg-overlay">
            <div class="bg-img"><img src="<?= $base_URI; ?>/app/assets/images/banners/banner1.jpg" alt="background"></div>
            <div class="video__btn video__btn-white video__btn-right-center">
              <a class="popup-video" href="https://www.youtube.com/watch?4=&v=TKnufs85hXk">
                <span class="video__player-animation"></span>
                <span class="video__player-animation video__player-animation-2"></span>
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="inner-padding">
              <div class="heading heading-3 heading-white mb-50">
                <h2 class="heading__title">Creative Web Design <br>& Trusted Digital Marketing Company</h2>
                <p class="heading__desc">Our team understands the complexities involved in providing web design, development and marketing
                  solutions. We also know that no two companies are the same, and hence our solutions can’t be either.
                  We treat every client as a unique entity, and we endeavour to give the best possible solutions at competitive prices.</p>
              </div><!-- /.heading -->
              <div class="counters-white d-flex flex-wrap justify-content-between">
                <div class="counter-item">
                  <h4><span class="counter">3,214</span><span>m</span></h4>
                  <p class="counter__desc">Clients Worldwide</p>
                </div>
                <div class="counter-item">
                  <h4><span class="counter">5,154</span><span>m</span></h4>
                  <p class="counter__desc">Delivered Goods</p>
                </div>
                <div class="counter-item">
                  <h4><span class="counter">8,845</span><span>m</span></h4>
                  <p class="counter__desc">Miles Driven</p>
                </div>
              </div><!-- /.counters -->
              <p class="color-white mb-20">We provide our clients with stunning interfaces that are user-friendly,
                unique and responsive at the shortest turnaround time possible. We deal with clients
                from various industries across the globe and our clients always come back to us for more business.</p>
              <img src="<?= $base_URI; ?>/app/assets/images/about/singnture2.png" alt="singnture">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner 3 -->

    <!-- ======================
           projects Carousel
      ========================= -->
    <section id="projectsCarousel" class="projects-carousel">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Latest Case Studies</span>
              <h2 class="heading__title">Featured Projects</h2>
              <p class="heading__desc">We presents the following case studies that exemplify the type of solutions and
                services we are providing across our customer base.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
              data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
              <div class="project-item">
                <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/1.jpg" alt="project img">
                  <div class="project__cat">
                    <a href="#">Analystics</a><a href="#">Optimization</a>
                  </div><!-- /.project-cat -->
                </div><!-- /.project-img -->
                <div class="project__content">
                  <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                  <p class="project__desc">We understand that data is the greatest asset when it comes to
                    analyzing and optimizing your supply chain performance.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
              <div class="project-item">
                <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/2.jpg" alt="project img">
                  <div class="project__cat">
                    <a href="#">Warehousing</a><a href="#">Distribution</a>
                  </div><!-- /.project-cat -->
                </div><!-- /.project-img -->
                <div class="project__content">
                  <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                  <p class="project__desc">We understand that data is the greatest asset when it comes to
                    analyzing and optimizing your supply chain performance.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
              <div class="project-item">
                <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/3.jpg" alt="project img">
                  <div class="project__cat">
                    <a href="#">Logistics</a><a href="#">Analytics</a>
                  </div><!-- /.project-cat -->
                </div><!-- /.project-img -->
                <div class="project__content">
                  <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                  <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                    spend by utilizing an extensive .</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
              <div class="project-item">
                <div class="project__img">
                  <img src="<?= $base_URI; ?>/app/assets/images/case-studies/grid/4.jpg" alt="project img">
                  <div class="project__cat">
                    <a href="#">Optimization</a><a href="#">Warehousing</a>
                  </div><!-- /.project-cat -->
                </div><!-- /.project-img -->
                <div class="project__content">
                  <h4 class="project__title"><a href="#">Regulatory Compliance</a></h4>
                  <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                    spend by utilizing an extensive .</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects-carousel -->
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

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Insight and Trends</span>
              <h2 class="heading__title">Recent Articles</h2>
              <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
                industry trends, top news headlines.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="<?= $base_URI; ?>/app/assets/images/blog/grid/1.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">Insights</a><a href="#">Management</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First Sale rule!</a></h4>
                <span class="blog__meta-date">Jan 20, 2019</span>
                <p class="blog__desc">The trade war currently ensuing between the US and several nations around the
                  globe, most fiercely with China, shows no signs of the first set of tariffs levied against solar...
                </p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="<?= $base_URI; ?>/app/assets/images/blog/grid/2.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">Warehousing</a><a href="#">Industry</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a></h4>
                <span class="blog__meta-date">Oct 18, 2019</span>
                <p class="blog__desc">Global provider connected products for consumers, and enterprises worldwide,
                  supply chain control is everything, provide visibility and traceability needed for...</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="<?= $base_URI; ?>/app/assets/images/blog/grid/3.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">Logistics</a><a href="#">Distribution</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil & Gas
                    Logistics?</a></h4>
                <span class="blog__meta-date">Jan 20, 2019</span>
                <p class="blog__desc">Our team provides highly skilled & experienced project managers who know the
                  intricacies of this vertical and focus on providing innovative solutions in Oil & Gas sector...</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- =========================
            contact 1
      =========================  -->
    <section id="contact1" class="contact contact-1 p-0">
      <div id="map"></div>
      <script src="<?= $base_URI; ?>/app/assets/js/vendor/google/google-map.js?v=1.0.0"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap"
        async defer></script>
      <div class="container">
        <div class="contact-panel contact-panel-2">
          <div class="contact__panel-header d-flex align-items-center">
            <h4 class="contact__panel-title">Global Locations</h4>
          </div>
          <div id="accordion">
            <div class="accordion-item">
              <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__item-title" href="#">Banglore Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse  show" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li><a href="tel: +91 79751 89067"> +91 79751 89067</a></li>
                    <li><a href="mailto:info@drafticode.com">info@drafticode.com</a></li>
                    <li>17,302, Gauri Shankar Nilay<br>Sri Venkateshwara Layout, Old Madiwala,<br>BTM Layout Stage 1,Near Gamgotri circle<br>Bengaluru<br>Karnataka - 560068</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">Bhuneshwar Office - Saheed Nagar</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li><a href="tel: +91 63700 71649"> +91 63700 71649</a></li>
                    <li><a href="mailto:info@drafticode.com">info@drafticode.com</a></li>
                    <li>2, Arihant Plaza<br> In-front of OMFED Office<br> Swash Lane, Saheed Nagar<br> Bhubaneswar<br>
                      Odisha- 751007 IN</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Bhuneshwar Office -  Patia</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                  <li><a href="tel: +91 98532 33951"> +91 98532 33951</a></li>
                    <li><a href="mailto:info@drafticode.com">info@drafticode.com</a></li>
                    <li>Near TBI<br>Patia KIIT Square<br>Bhuneshwar- 751024</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div>
        </div><!-- /.contact-panel -->
      </div><!-- /.container -->
    </section><!-- /.contact -->

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
