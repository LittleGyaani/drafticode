<?php

//Calling the Global configuration file
require __DIR__ . '/app/config/global.config.php';

//Calling the AltoRouter Routing Library
require __DIR__ . '/app/tools/router/AltoRouter/AltoRouter.php';

$router = new AltoRouter();

if ($site_status === 'DEVELOPMENT') //If Site is still under development
  if ($site_host === 'localhost') //If the Site Host is localhost
    $router->setBasePath('/drafticode'); //Local Demo Path
  else
    $router->setBasePath('/demo/drafticode'); //Our Demo Website or Preproduction URL
else
  $router->setBasePath(''); //Live Production Website

// ** Define All Routes for the Website **//

//Home Page Route
$router->map('GET', '/',  function () {
  require __DIR__ . '/app/views/home.php';
}, 'home');

//Index Page Route
$router->map('GET', '/index',  function () {
  require __DIR__ . '/app/views/home.php';
}, 'index');

//About Us Page Route
$router->map('GET', $company_route . '/about-us',  function () {
  require __DIR__ . '/app/views/about-us.php';
}, 'about');

//Why choose Us Page Route
$router->map('GET', $company_route . '/why-us',  function () {
  require __DIR__ . '/app/views/why-us.php';
}, 'why-us');

//careers
$router->map('GET', $company_route . '/careers',  function () {
  require __DIR__ . '/app/views/careers.php';
}, 'careers');

//development - web-development/core-php
$router->map('GET', $development_route . '/web-development/core-php',  function () {
  require __DIR__ . '/app/views/core-php.php';
}, 'core-php');

//development - web-development/laravel
$router->map('GET', $development_route . '/web-development/laravel',  function () {
  require __DIR__ . '/app/views/laravel.php';
}, 'laravel');

//development - web-development/codeigniter
$router->map('GET', $development_route . '/web-development/codeigniter',  function () {
  require __DIR__ . '/app/views/codeigniter.php';
}, 'codeigniter');

//development - web-development/node-js
$router->map('GET', $development_route . '/web-development/node-js',  function () {
  require __DIR__ . '/app/views/node-js.php';
}, 'node-js');

//development - web-development/MERN-MEVN
$router->map('GET', $development_route . '/web-development/mern-mevn',  function () {
  require __DIR__ . '/app/views/MERN-MEVN.php';
}, 'MERN-MEVN');

//development - web-development/react-js
$router->map('GET', $development_route . '/web-development/react-js',  function () {
  require __DIR__ . '/app/views/react-js.php';
}, 'react-js');

//development - e-commerce/magento
$router->map('GET', $development_route . '/e-commerce/magento',  function () {
  require __DIR__ . '/app/views/magento.php';
}, 'magento');

//development - e-commerce/wooCommerce
$router->map('GET', $development_route . '/e-commerce/wooCommerce',  function () {
  require __DIR__ . '/app/views/wooCommerce.php';
}, 'wooCommerce');

//development - e-commerce/prestashop
$router->map('GET', $development_route . '/e-commerce/prestashop',  function () {
  require __DIR__ . '/app/views/prestashop.php';
}, 'prestashop');

//development - e-commerce/open-cart
$router->map('GET', $development_route . 'e-commerce/open-cart',  function () {
  require __DIR__ . '/app/views/open-cart.php';
}, 'open-cart');

//development - cms-development/wordpress
$router->map('GET', $development_route . '/cms-development/wordpress',  function () {
  require __DIR__ . '/app/views/wordpress.php';
}, 'wordpress');

//development - cms-development/drupal
$router->map('GET', $development_route . '/cms-development/drupal',  function () {
  require __DIR__ . '/app/views/drupal.php';
}, 'drupal');

//development - mobile-apps-development/ios
$router->map('GET', $development_route . '/mobile-apps-development/ios',  function () {
  require __DIR__ . '/app/views/ios.php';
}, 'ios');

//development - mobile-apps-development/android
$router->map('GET', $development_route . '/mobile-apps-development/android',  function () {
  require __DIR__ . '/app/views/android.php';
}, 'android');

//development - mobile-apps-development/hybrid
$router->map('GET', $development_route . '/mobile-apps-development/hybrid',  function () {
  require __DIR__ . '/app/views/hybrid.php';
}, 'hybrid');

//development - mobile-apps-development/react-native
$router->map('GET', $development_route . '/mobile-apps-development/react-native',  function () {
  require __DIR__ . '/app/views/react-native.php';
}, 'react-native');

//digital-marketing - search-engine-optimization/local-seo-services
$router->map('GET', $digital_marketing_route . '/seo/local-seo-services',  function () {
  require __DIR__ . '/app/views/local-seo-services.php';
}, 'local-seo-services');

//digital-marketing - search-engine-optimization/global-seo-services
$router->map('GET', $digital_marketing_route . '/seo/global-seo-services',  function () {
  require __DIR__ . '/app/views/global-seo-services.php';
}, 'global-seo-services');

//digital-marketing - search-engine-optimization/seo-audit
$router->map('GET', $digital_marketing_route . '/seo/seo-audit',  function () {
  require __DIR__ . '/app/views/seo-audit.php';
}, 'seo-audit');

//digital-marketing - search-engine-optimization/off-page-seo
$router->map('GET', $digital_marketing_route . '/seo/off-page-seo',  function () {
  require __DIR__ . '/app/views/off-page-seo.php';
}, 'off-page-seo');

//digital-marketing - search-engine-optimization/on-page-seo
$router->map('GET', $digital_marketing_route . '/seo/on-page-seo',  function () {
  require __DIR__ . '/app/views/on-page-seo.php';
}, 'on-page-seo');

//digital-marketing - search-engine-optimization/keyword-analysis
$router->map('GET', $digital_marketing_route . '/seo/keyword-analysis',  function () {
  require __DIR__ . '/app/views/keyword-analysis.php';
}, 'keyword-analysis');

//digital-marketing - smo/linkedin optimization
$router->map('GET', $digital_marketing_route . '/smo/linkedin-optimization',  function () {
  require __DIR__ . '/app/views/linkedin-optimization.php';
}, 'linkedin-optimization');

//digital-marketing - smo/facebook optimization
$router->map('GET', $digital_marketing_route . '/smo/facebook-optimization',  function () {
  require __DIR__ . '/app/views/facebook-optimization.php';
}, 'facebook-optimization');

//digital-marketing - smo/twitter optimization
$router->map('GET', $digital_marketing_route . '/smo/twitter-optimization',  function () {
  require __DIR__ . '/app/views/twitter-optimization.php';
}, 'twitter-optimization');

//digital-marketing - smo/instagram optimization
$router->map('GET', $digital_marketing_route . '/smo/instagram-optimization',  function () {
  require __DIR__ . '/app/views/instagram-optimization.php';
}, 'instagram-optimization');

//digital-marketing - smo/socail-media-analysis
$router->map('GET', $digital_marketing_route . '/smo/socail-media-analysis',  function () {
  require __DIR__ . '/app/views/socail-media-analysis.php';
}, 'socail-media-analysis');

//digital-marketing - smo/infographic-posting
$router->map('GET', $digital_marketing_route . '/smo/infographic-posting',  function () {
  require __DIR__ . '/app/views/infographic-posting.php';
}, 'infographic-posting');

//digital-marketing - smo/social-engagements
$router->map('GET', $digital_marketing_route . '/smo/social-engagements',  function () {
  require __DIR__ . '/app/views/social-engagements.php';
}, 'social-engagements');

//digital-marketing - social-media-marketing/facebook-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/facebook-marketing',  function () {
  require __DIR__ . '/app/views/facebook-marketing.php';
}, 'facebook-marketing');

//digital-marketing - social-media-marketing/instagram-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/instagram-marketing',  function () {
  require __DIR__ . '/app/views/instagram-marketing.php';
}, 'instagram-marketing');

//digital-marketing - social-media-marketing/twitter-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/twitter-marketing',  function () {
  require __DIR__ . '/app/views/twitter-marketing.php';
}, 'twitter-marketing');

//digital-marketing - social-media-marketing/linkedin-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/linkedin-marketing',  function () {
  require __DIR__ . '/app/views/linkedin-marketing.php';
}, 'linkedin-marketing');

//digital-marketing - social-media-marketing/youtube-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/youtube-marketing',  function () {
  require __DIR__ . '/app/views/youtube-marketing.php';
}, 'youtube-marketing');

//digital-marketing - social-media-marketing/pinterest-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/pinterest-marketing',  function () {
  require __DIR__ . '/app/views/pinterest-marketing.php';
}, 'pinterest-marketing');

//digital-marketing - social-media-marketing/free-social-media-analysis-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/free-social-media-analysis-marketing',  function () {
  require __DIR__ . '/app/views/free-social-media-analysis-marketing.php';
}, 'free-social-media-analysis-marketing');

//digital-marketing - social-media-marketing/comprehensive-social-media-audit
$router->map('GET', $digital_marketing_route . '/social-media-marketing/comprehensive-social-media-audit',  function () {
  require __DIR__ . '/app/views/comprehensive-social-media-audit.php';
}, 'comprehensive-social-media-audit');

//digital-marketing - social-media-marketing/influncer-marketing
$router->map('GET', $digital_marketing_route . '/social-media-marketing/influncer-marketing',  function () {
  require __DIR__ . '/app/views/influncer-marketing.php';
}, 'influncer-marketing');

//digital-marketing - social-media-marketing/crisis-management
$router->map('GET', $digital_marketing_route . '/social-media-marketing/crisis-management',  function () {
  require __DIR__ . '/app/views/crisis-management.php';
}, 'crisis-management');

//digital-marketing - paid-campaign-marketing/google-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/google-ads',  function () {
  require __DIR__ . '/app/views/google-ads.php';
}, 'google-ads');

//digital-marketing - paid-campaign-marketing/facebook-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/facebook-ads',  function () {
  require __DIR__ . '/app/views/facebook-ads.php';
}, 'facebook-ads');

//digital-marketing - paid-campaign-marketing/pintrest-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/pintrest-ads',  function () {
  require __DIR__ . '/app/views/pintrest-ads.php';
}, 'pintrest-ads');

//digital-marketing - paid-campaign-marketing/instagram-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/instagram-ads',  function () {
  require __DIR__ . '/app/views/instagram-ads.php';
}, 'instagram-ads');

//digital-marketing - paid-campaign-marketing/youtube-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/youtube-ads',  function () {
  require __DIR__ . '/app/views/youtube-ads.php';
}, 'youtube-ads');

//digital-marketing - paid-campaign-marketing/linkedin-ads
$router->map('GET', $digital_marketing_route . '/ paid-campaign-marketing/linkedin-ads',  function () {
  require __DIR__ . '/app/views/linkedin-ads.php';
}, 'linkedin-ads');

// services

$router->map('GET', $services_route ,  function () {
  require __DIR__ . '/app/views/services.php';
}, 'services');


//services - digital-services/web-hosting
$router->map('GET', $services_route . '/digital-services/web-hosting',  function () {
  require __DIR__ . '/app/views/web-hosting.php';
}, 'web-hosting ');

//services - digital-services/domain-name
$router->map('GET', $services_route . '/digital-services/domain-name',  function () {
  require __DIR__ . '/app/views/domain-name.php';
}, 'domain-name ');

//services - digital-services/email-marketing
$router->map('GET', $services_route . '/digital-services/email-marketing',  function () {
  require __DIR__ . '/app/views/email-marketing.php';
}, 'email-marketing');

//services - digital-services/sms-marketing
$router->map('GET', $services_route . '/digital-services/sms-marketing',  function () {
  require __DIR__ . '/app/views/sms-marketing.php';
}, 'sms-marketing');

//services - digital-services/paymeny-gateway
$router->map('GET', $services_route . '/digital-services/paymeny-gateway',  function () {
  require __DIR__ . '/app/views/paymeny-gateway.php';
}, 'paymeny-gateway');

//services - digital-services/bulk-sms-services
$router->map('GET', $services_route . '/digital-services/bulk-sms-services',  function () {
  require __DIR__ . '/app/views/bulk-sms-services.php';
}, 'bulk-sms-services');

//services - industry-sloutions/retail-&-consumers
$router->map('GET', $services_route . '/industry-sloutions/retail-&-consumers',  function () {
  require __DIR__ . '/app/views/retail-&-consumers.php';
}, 'retail-&-consumers');

//services - industry-sloutions/science-&-healthcare
$router->map('GET', $services_route . '/industry-sloutions/science-&-healthcare',  function () {
  require __DIR__ . '/app/views/science-&-healthcare.php';
}, 'science-&-healthcare');

//services - industry-sloutions/industrial-&-chemical
$router->map('GET', $services_route . '/industry-sloutions/industrial-&-chemical',  function () {
  require __DIR__ . '/app/views/industrial-&-chemical.php';
}, 'industrial-&-chemical');

//services - industry-sloutions/power-generation
$router->map('GET', $services_route . '/industry-sloutions/power-generation',  function () {
  require __DIR__ . '/app/views/power-generation.php';
}, 'power-generation');

//services - industry-sloutions/food-&-beverage
$router->map('GET', $services_route . '/industry-sloutions/food-&-beverage',  function () {
  require __DIR__ . '/app/views/food-&-beverage.php';
}, 'food-&-beverage');

//services - industry-sloutions/it-&-hardware
$router->map('GET', $services_route . '/industry-sloutions/it-&-hardware',  function () {
  require __DIR__ . '/app/views/it-&-hardware.php';
}, 'it-&-hardware');

//services - business-sloutions/company-incorporation
$router->map('GET', $services_route . '/business-sloutions/company-incorporation',  function () {
  require __DIR__ . '/app/views/company-incorporatione.php';
}, 'company-incorporation');

//services - business-sloutions/trade-mark-registration
$router->map('GET', $services_route . '/business-sloutions/trade-mark-registration',  function () {
  require __DIR__ . '/app/views/trade-mark-registration.php';
}, 'trade-mark-registration');

//services - business-sloutions/ca-asststed-services
$router->map('GET', $services_route . '/business-sloutions/ca-asststed-services',  function () {
  require __DIR__ . '/app/views/ca-asststed-services.php';
}, 'ca-asststed-services');

//services - business-sloutions/gst-invoicing-&-pos-solutions
$router->map('GET', $services_route . '/business-sloutions/gst-invoicing-&-pos-solutions',  function () {
  require __DIR__ . '/app/views/gst-invoicing-&-pos-solutions.php';
}, 'gst-invoicing-&-pos-solutions');

//services - business-sloutions/legal-services
$router->map('GET', $services_route . '/business-sloutions/legal-services',  function () {
  require __DIR__ . '/app/views/legal-services.php';
}, 'legal-services');

//services - business-sloutions/business-support-services
$router->map('GET', $services_route . '/business-sloutions/business-support-services',  function () {
  require __DIR__ . '/app/views/business-support-services.php';
}, 'business-support-services');

//resources - blog
$router->map('GET', $resources_route . '/blog',  function () {
  require __DIR__ . '/app/views/blog.php';
}, 'blog');

//resources - case-studies
$router->map('GET', $resources_route . '/case-studies',  function () {
  require __DIR__ . '/app/views/case-studies.php';
}, 'case-studies');

//resources - help-&-faqs
$router->map('GET', $resources_route . '/help-&-faqs',  function () {
  require __DIR__ . '/app/views/help-&-faqs.php';
}, 'help-&-faqs');

//resources - request-a-quote
$router->map('GET', $resources_route . '/request-a-quote',  function () {
  require __DIR__ . '/app/views/request-a-quote.php';
}, 'request-a-quote');

// //portfolio
// $router->map('GET', $potfolio_route . '/',  function () {
//   require __DIR__ . '/app/views/request-a-quote.php';
// }, 'request-a-quote');

//contact-us
$router->map('GET', $contact_us_route,  function () {
  require __DIR__ . '/app/views/contact-us.php';
}, 'contact-us');

// match current request
$match = $router->match();

if ($match && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  require __DIR__ . '/app/views/error-404.php';
}
