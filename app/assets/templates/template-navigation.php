<!-- Header Section Starts Here -->
<header id="header" class="header header-layout1">
  <div class="header__promo-text text-center">
    <!-- Notice Section -->
    <strong>Need Help: </strong><span>Providing Innovative and Sustainable Solutions, Call (002) 01061245741</span>
  </div><!-- /.header__promo-text -->
  <div class="header__topbar d-none d-xl-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-7">
          <ul class="contact__list list-unstyled">
            <li><i class="icon-call"></i><span>Phone: +55 654 541 17</span></li>
            <li><i class="icon-clock"></i><span>Hours: Mon-Fri: 8am – 7pm</span></li>
            <li><i class="icon-envelope"></i>
              <span>Email: <a href="mailto:optime@7oroof.com">optime@7oroof.com</a></span>
            </li>
          </ul>
        </div><!-- /.col-lg-7 -->
        <div class="col-sm-12 col-md-5 col-lg-5 d-flex align-items-center justify-content-end">
          <ul class="header__topbar-links list-unstyled">
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
          <div class="social__icons justify-content-end">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </div>
        </div><!-- /.col-lg-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>
  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid px-10">
      <a class="navbar-brand" href="./">
        <img src="<?= $base_URI; ?>/app/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
        <img src="<?= $base_URI; ?>/app/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav__item with-dropdown">
            <a href="./" class=" nav__item-link active">Home</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Our Company</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href= "<?= $base_URI . $company_route; ?>/about-us" class="nav__item-link">About Us</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $company_route; ?>/why-choose-us" class="nav__item-link">Why Choose Us</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $company_route; ?>/careers" class="nav__item-link">careers</a></li>
              <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown mega-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Development</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu mega-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Web Development</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/core-php">Core PHP</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/laravel">Laravel</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/codeigniter">Codeigniter</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/node-js">Node JS</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/MERN-MEVN">MERN/MEVN</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/react-js">React JS</a>
                      </li> <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>E- Commerce Development</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-Commerce-development/magento">Magento</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-Commerce-development/woocommerce">Woocommerce</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-Commerce-development/prestashop">Prestashop</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-Commerce-development/open-cart">Open Cart</a></li> <!-- /.nav-item -->
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>CMS Development</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/cms-development/wordpress">Wordpress</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/cms-development/drupal">Drupal</a></li> <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Mobile Apps Development</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/mobile-apps-development/ios">iOS</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/mobile-apps-development/android">android</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/mobile-apps-development/hybrid">Hybrid</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/mobile-apps-development/react-native">React Native</a></li> <!-- /.nav-item -->
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown mega-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Digital Marketing</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu mega-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-md-4 dropdown-menu-col">
                    <h6>Search Engine Optimization</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/local-seo-services">Local SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/startup-seo">Start-Up SEO</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/codeigniter-seo-services">Codeigniter</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/enterprise-seo">Enterprise SEO</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/e-commerce-seo-services">E-Commerce SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/woocommerce-seo-services">WooCommerce SEO Services</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/magento-seo-services">Magento SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/amazon-seo-services">Amazon SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/shopify-seo-services">Shopify SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/guest-blogging-seo-services">Guest Blogging Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/comprehensive-seo-services">Comprehensive SEO Audit</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/google-penalty-seo-services">Google Penalty Assessment</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/conversion-optimization">Conversion Optimization</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/backlink-audit/disavow-services">Backlink Audit / Disavow Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/mobile-seo">Mobile SEO</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/free-seo-analysis">Free SEO Analysis</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/search-engine-optimization/content-writing-services">Content Writing Services</a>
                      </li> <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-4 dropdown-menu-col">
                    <h6>Social Media Marketing</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/facebook-marketing">Facebook Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/instagram-marketing">Instagram Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/twitter-marketing">Twitter Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/linkedin-marketing">Linkedin Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/youtube-marketing">Youtube Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/pintrest-marketing">Pinterest Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/free-social-media-analysis">Free Social Media Analysis</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/comprehensive-social-media-audit">Comprehensive Social Media Audit</a></li> <!-- /.nav-item -->
                      <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/influncer-marketing">Influencer Marketing</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/social-media-marketing/crisis-management">Crisis Management</a></li> <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-4 dropdown-menu-col">
                    <h6>Paid Campaign Marketing</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/google-ads">Google Ads</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/facebook-ads">Facebook Ads</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/pintrest-ads">Pinterest Ads</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/instagram-ads">Instagram Ads</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/youtube-ads">YouTube Ads</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/paid-campaign-marketing/linkedin-ads">Linkedin Ads</a></li> <!-- /.nav-item -->
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown mega-dropdown">
            <a href="services.html" class="dropdown-toggle nav__item-link">Services</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu mega-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Digital Services</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Web Hosting</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Domain Name</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Email Marketing</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">SMS Marketing</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Payment Gateway</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Bulk SMS Services</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
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
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">IT & Hardware</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Business Solutions</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Company Incorporation</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Trade Mark Registration</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">CA Assisted Services</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">GST Invoicing & POS Solutions</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Legal Service</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Business Support Services</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown">
            <a href="services.html" class="dropdown-toggle nav__item-link">Resources</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="index.html" class="nav__item-link">Blog</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Case Studies</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Help & FAQs</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Request A Quote</a></li>
              <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="nav__item-link">Portfolio</a>
          </li><!-- /.nav-item -->

          <li class="nav__item">
            <a href="contacs.html" class="nav__item-link">Contact Us</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <div class="navbar-modules">
        <ul class="list-unstyled d-flex align-items-center modules__btns-list">
          <!-- <li>
               <div class="dropdown dropdown__lang">
                 <button style="display:none" class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                   <img src="assets/images/flags/en.png" alt="en"><span>English</span>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="langDrobdown">
                   <a class="dropdown-item" href="#">
                     <img src="assets/images/flags/fr.png" alt="fr"><span>France</span>
                   </a>
                   <a class="dropdown-item" href="#">
                     <img src="assets/images/flags/gr.png" alt="gr"><span>germany</span>
                   </a>
                 </div>
               </div>
             </li> -->
          <li class="d-none d-lg-block">
            <a href="request-quote.html" class="module__btn btn__request btn">
              <span>Request A Quote</span><i class="icon-arrow-right"></i>
            </a>
          </li>
          <!-- <li class="d-none d-lg-block">
            <form style="display:none" class="header__search-form">
              <input type="text" class="search__input" placeholder="Search...">
              <button><i class="fa fa-search"></i></button>
            </form>
          </li> -->
        </ul><!-- /.modules-wrapper -->
      </div><!-- /.navbar-modules -->
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
</header>
<!-- /.Header
<!-- Header Section Ends Here -->
