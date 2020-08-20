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
      <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/page-titles/7.jpg" alt="background"></div>
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
              <div class="service__icon"><i class="icon-air-freight"></i></div>
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
              <div class="service__icon"><i class="icon-cargo-ship"></i></div>
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
              <div class="service__icon"><i class="icon-truck"></i></div>
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
              <div class="service__icon"><i class="icon-forklift"></i></div>
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
              <div class="service__icon"><i class="icon-conveyor"></i></div>
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
              <div class="service__icon"><i class="icon-box-2"></i></div>
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

    <!-- =========================
            contact 1
      =========================  -->
    <section id="contact1" class="contact contact-1 p-0">
      <div id="map"></div>
      <script src="assets/js/google-map.js"></script>
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
                    <li>002 010123456789</li>
                    <li>Email: info@drafticode.com</li>
                    <li>17,302, Gauri Shankar Nilay<br>Sri Venkateshwara Layout, Old Madiwala,<br>BTM Layout Stage 1,Near Gamgotri circle<br>Bangalore<br>Karnataka - 560068</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">Bhubaneswar Office - Saheed Nagar</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: info@drafticode.com</li>
                    <li>17,302, Gauri Shankar Nilay<br>Sri Venkateshwara Layout, Old Madiwala,<br>BTM Layout Stage 1,Near Gamgotri circle<br>Bangalore<br>Karnataka - 560068</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Bhubaneswar Office -  Patia</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: info@drafticode.com</li>
                    <li>17,302, Gauri Shankar Nilay<br>Sri Venkateshwara Layout, Old Madiwala,<br>BTM Layout Stage 1,Near Gamgotri circle<br>Bangalore<br>Karnataka - 560068</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div>
        </div><!-- /.contact-panel -->
      </div><!-- /.container -->
    </section><!-- /.contact -->
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
