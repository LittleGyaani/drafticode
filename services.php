<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content=" Drafticode Templatei">
  <link href="assets/images/favicon/DC-Logo.png" rel="icon">
  <title> Drafticode Template</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">
              <img src="<?= $base_URI; ?>/app/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
              <img src="<?= $base_URI; ?>/app/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="index.html" class="dropdown-toggle nav__item-link active">Home</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="index.html" class="nav__item-link">Home Main</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-modern.html" class="nav__item-link">Home Moderm</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home classic</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="about-us.html" class="dropdown-toggle nav__item-link">Company</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="about-us.html" class="nav__item-link">About Us</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="why-us.html" class="nav__item-link">Why Choose Us</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">Leadership Team</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="global-locations.html" class="nav__item-link">Global Locations</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="gallery.html" class="nav__item-link">Our Gallery</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="careers.html" class="nav__item-link">careers</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="services.html" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>Transport Services</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Warehousing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Air Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Ocean Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Road Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Supply Chain</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.html">Packaging</a></li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>Industry Solutions</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Retail &
                              Consumer</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Sciences &
                              Healthcare</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Industrial &
                              Chemical</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Power
                              Generation</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Food &
                              Beverage</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Oil & Gas</a></li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="blog-grid.html" class="dropdown-toggle nav__item-link">News & Media</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="blog-grid.html" class="nav__item-link">blog grid</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="blog-single-post.html" class="nav__item-link">blog single post</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="case-studies.html" class="nav__item-link">case studies</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="case-studies-single.html" class="nav__item-link">case study Single</a>
                  </li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="request-quote.html" class="nav__item-link">request a quote</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="track-shipment.html" class="nav__item-link">track and trace</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="find-location.html" class="nav__item-link">find Location</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="rates.html" class="nav__item-link">Rates & Pricing</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="faqs.html" class="nav__item-link">help and faqs</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contacs.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-modules">
            <ul class="modules__wrapper d-flex align-items-center list-unstyled">
              <li>
                <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
              </li>
              <li class="d-none d-lg-block">
                <a href="request-quote.html" class="module__btn btn__request btn">
                  <span>Request A Quote</span><i class="icon-arrow-right"></i>
                </a>
              </li>
              <li>
                <div class="dropdown">
                  <button class="module__btn dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                    <span>En</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="langDrobdown">
                    <a class="dropdown-item" href="#">
                        <img src="<?= $base_URI; ?>/app/assets/images/flags/united-states.png" alt="us"><span>Us</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <img src="<?= $base_URI; ?>/app/assets/images/flags/germany.png" alt="germany"><span>germany</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul><!-- /.modules-wrapper -->
          </div><!-- /.navbar-modules -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/page-titles/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <h1 class="pagetitle__heading">Reliable & Express Logistic Solutions Saves Your Time!</h1>
            <p class="pagetitle__desc">Competitive advantages to some of the largest companies allover the world.</p>
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
                <h4 class="service__title">Air Freight</h4>
                <p class="service__desc">We can arrange and provides with the comprehensive service in the sphere of
                  urgent, valuable, fragile or any cargoes conscientious accelerated delivery by air.</p>
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
                <h4 class="service__title">Ocean Freight</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
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
                <h4 class="service__title">Road Freight</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
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
                <h4 class="service__title">Warehousing</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
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
                <h4 class="service__title">Supply Chain</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
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
                <h4 class="service__title">Packaging</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
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
                <span class="heading__subtitle">Affordable Price, Certified Forwarders</span>
                <h2 class="heading__title">Safe, Reliable & Express Logistic Solutions That Saves Your Time!</h2>
                <p class="heading__desc">We pride ourselves on providing the best transport and shipping services
                  available allover the world. Our skilled personnel, utilising the latest communications, tracking and
                  processing software, combined with decades of experience.</p>
              </div><!-- /.heading -->
              <a href="#" class="btn btn__primary">Schedule An Appointment</a>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
            <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/banners/1.jpg" alt="background"></div>
            <div class="skills skills-panel">
              <div class="heading mb-30">
                <h2 class="heading__title">What We Achieved!</h2>
                <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic solutions to our
                  customers to fit their needs.</p>
              </div><!-- /.heading -->
              <!-- progress 1 -->
              <div class="progress-item">
                <h6 class="progress__title">Warehousing</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 2 -->
              <div class="progress-item">
                <h6 class="progress__title">Air Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 3 -->
              <div class="progress-item">
                <h6 class="progress__title">Ocean Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 4 -->
              <div class="progress-item">
                <h6 class="progress__title">Road Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 8 -->
              <div class="progress-item">
                <h6 class="progress__title">Supply Chain</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" role="progressbar">
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
    <section id="testimonial" class="testimonial testimonial-1 text-center pb-70">
      <div class="bg-img">  <img src="<?= $base_URI; ?>/app/assets/images/backgrounds/2.png" alt="background"></div>
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
                  <p class="testimonial__desc">They are the best of the best, and expertly trained team members who take
                    the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and
                    dynamic solutions to our customers to fit the needs of a rapidly changing global environment.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                    <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature.png" alt="signature">
                  <p class="testimonial__meta-desc">The Move Inc</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                    <img src="<?= $base_URI; ?>/app/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">Logisti team is the best of the best, and expertly trained team members
                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                    environment.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                    <img src="<?= $base_URI; ?>/app/assets/images/testimonials/signature.png" alt="signature">
                  <p class="testimonial__meta-desc">The Move Inc</p>
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
    <section id="clients" class="clients clients-1 border-top">
      <div class="container">
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
                <a class="accordion__item-title" href="#">London Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse  show" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: Logisti@7oroof.com</li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">Berlin Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: Logisti@7oroof.com</li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Manchester Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: Logisti@7oroof.com</li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
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
    <footer id="footer" class="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
              <div class="footer__newsletter-text">
                <h6>Our Newsletter</h6>
                <p>Sign up for industry news & insights.</p>
              </div><!-- /.footer-newsletter-text -->
            </div><!-- /.col-xl-3-->
            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-7">
              <form class="footer__newsletter-form d-flex flex-wrap">
                <div class="form-group d-flex flex-1 mb-20 mr-1">
                  <input type="text" class="form-control" placeholder="Your Name">
                  <input type="email" class="form-control" placeholder="Your Email Address">
                </div>
                <button class="btn btn__primary btn__hover3 mb-20">Submit Now!</button>
              </form>
            </div><!-- /.col-xl-7 -->
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2">
              <div class="social__icons justify-content-end">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div><!-- /.social-icons -->
            </div><!-- /.col-xl-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                  <img src="<?= $base_URI; ?>/app/assets/images/logo\DC-Logo.png" alt="logo" class="footer-logo">
                <p>Our global Optimecs expertise, advanced supply chain technology & customized Optimecs solutions
                  will help you develop and implement successful supply.</p>
                <ul class="contact__list list-unstyled">
                  <li><span>Email:</span><span>contact@drafticode.com</span></li>
                  <li><span>Phone:</span><span>++91 6370 071 649</span></li>
                </ul>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Are</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Meet Our Team</a></li>
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">What We Do</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Supply Chain</a></li>
                    <li><a href="#">Packaging</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Serve</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Retail & Consumer</a></li>
                    <li><a href="#">Sciences & Healthcare</a></li>
                    <li><a href="#">Industrial & Chemical</a></li>
                    <li><a href="#">Power Generation</a></li>
                    <li><a href="#">Food & Beverage</a></li>
                    <li><a href="#">Oil & Gas</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Quick Links</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Request A Quote</a></li>
                    <li><a href="#">Track & Trace</a></li>
                    <li><a href="#">Find A Location</a></li>
                    <li><a href="#">Global Agents</a></li>
                    <li><a href="#">Help & FAQ</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="footer__copyright">
                <span>&copy; 2019 Optime, with Love by</span>
                <a href="http://themeforest.net/user/7oroof">7oroof.com</a>
              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end">
                  <li><a href="#">Terms-and-Conditions </a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->

    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>