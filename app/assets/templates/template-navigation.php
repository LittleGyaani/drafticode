<!-- Header Section Starts Here -->
<header id="header" class="header header-layout1">
  <div class="header__promo-text text-center">
    <!-- Notice Section -->
    <strong>Drafticode :</strong><span> Web Development & Designing Company, SEO, SMO & Digital Marketing Agency in India, Call +91 6370 071 649</span>
  </div><!-- /.header__promo-text -->
  <div class="header__topbar d-none d-xl-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-7">
          <ul class="contact__list list-unstyled">
            <li><i class="icon-call"></i><span>Phone: +91 6370 071 649</span></li>
            <li><i class="icon-clock"></i><span>Hours: Mon-Fri: 8am – 7pm</span></li>
            <li><i class="icon-envelope"></i>
              <span>Email: <a href="mailto:contact@drafticode.com">contact@drafticode.com</a></span>
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
        <img src="<?= $base_URI; ?>/app/assets/images/logo/DC-Logo.png" class="logo-light" alt="logo">
        <img src="<?= $base_URI; ?>/app/assets/images/logo/DC-Logo.png" class="logo-dark" alt="logo">
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
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Our Company <i class="" aria-hidden="true"></i></a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="<?= $base_URI . $company_route; ?>/about-us" class="nav__item-link">About Us</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $company_route; ?>/why-choose-us" class="nav__item-link">Why Choose Us</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $company_route; ?>/careers" class="nav__item-link">careers</a></li>
              <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown mega-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Development <i class="" aria-hidden="true"></i></a>
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
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/mern-mevn">MERN/MEVN</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/web-development/react-js">React JS</a>
                      </li> <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>e-commerce</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-commerce/magento">Magento</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-commerce/woocommerce">Woocommerce</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-commerce/prestashop">Prestashop</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $development_route; ?>/e-commerce/open-cart">Open Cart</a></li> <!-- /.nav-item -->
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
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Digital Marketing <i class="" aria-hidden="true"></i></a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu mega-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>SEO</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/local-seo-services">Local SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/startup-seo">Global SEO Services</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/codeigniter-seo-services">SEO Audit</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/enterprise-seo">Off-Page SEO</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/e-commerce-seo-services">On-Page SEO</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/seo/woocommerce-seo-services">Keyword Analysis</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>SMO</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/linked-optimization">Linkedin Optimization</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/facebook-optimization">Facebook Optimization</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/twitter-optimization">titter Optimization</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/insatgram-optimization">Instagram Optimization</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/social-media-analysis">Social Media Analysis</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/infographic-posting">Infographic Posting</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $digital_marketing_route; ?>/smo/social-engagements">Social Engagements</a></li> <!-- /.nav-item -->
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
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
                  <div class="col-md-3 dropdown-menu-col">
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
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Services <i class="" aria-hidden="true"></i></a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu mega-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Digital Services</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/web-hosting">Web Hosting</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/domain-name">Domain Name</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/email-marketing">Email Marketing</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/sms-marketing">SMS Marketing</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/payment-gateway">Payment Gateway</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/digital-services/bulk-sms-services">Bulk SMS Services</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Industry Solutions</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/retail-&-consumer">Retail &
                          Consumer</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/science-&-healthcare">Sciences &
                          Healthcare</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/industrial-&-chemical">Industrial &
                          Chemical</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/power-generation">Power
                          Generation</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/food-&-beverage">Food &
                          Beverage</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/industry-sloutions/it-&-hardware">IT & Hardware</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-3 dropdown-menu-col">
                    <h6>Business Solutions</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/comapny-incorporation">Company Incorporation</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/trade-mark-registration">Trade Mark Registration</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/ca-assisted-services">CA Assisted Services</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/gst-invoicing-&-pos-solutions">GST Invoicing & POS Solutions</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/legal-services">Legal Service</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="<?= $base_URI . $services_route; ?>/business-sloutions/business-support-services">Business Support Services</a></li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav__item-link">Resources <i class="" aria-hidden="true"></i></a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="<?= $base_URI . $resources_route; ?>/blog" class="nav__item-link">Blog</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $resources_route; ?>/case-studies" class="nav__item-link">Case Studies</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $resources_route; ?>/help-&-faqs" class="nav__item-link">Help & FAQs</a></li>
              <!-- /.nav-item -->
              <li class="nav__item"><a href="<?= $base_URI . $resources_route; ?>/request-a-quote" class="nav__item-link">Request A Quote</a></li>
              <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->

          <li class="nav__item with-dropdown">
            <a href="javascript:void(0);" data-toggle="dropdown" class="nav__item-link">Portfolio <i class="" aria-hidden="true"></i></a>
          </li><!-- /.nav-item -->

          <li class="nav__item">
            <a href="<?= $base_URI . $contact_us_route; ?>" class="nav__item-link">Contact Us</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <div class="navbar-modules">
        <ul class="list-unstyled d-flex align-items-center modules__btns-list">
          <!-- <li>
               <div class="dropdown dropdown__lang">
                 <button style="display:none" class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                     <img src="<?= $base_URI; ?>/app/assets/images/flags/en.png" alt="en"><span>English</span>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="langDrobdown">
                   <a class="dropdown-item" href="#">
                       <img src="<?= $base_URI; ?>/app/assets/images/flags/fr.png" alt="fr"><span>France</span>
                   </a>
                   <a class="dropdown-item" href="#">
                       <img src="<?= $base_URI; ?>/app/assets/images/flags/gr.png" alt="gr"><span>germany</span>
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
