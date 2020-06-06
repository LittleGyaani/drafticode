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
  $router->setBasePath('/'); //Live Production Website

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
$router->map('GET', $company_route . '/why-choose-us',  function () {
  require __DIR__ . '/app/views/why-choose-us-us.php';
}, 'why choose us');

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
$router->map('GET', $development_route . '/web-development/MERN-MEVN',  function () {
  require __DIR__ . '/app/views/MERN-MEVN.php';
}, 'MERN-MEVN');

//development - web-development/react-js
$router->map('GET', $development_route . '/web-development/react-js',  function () {
  require __DIR__ . '/app/views/react-js.php';
}, 'react-js');

//development - e-Commerce-development/magento
$router->map('GET', $development_route . '/e-Commerce-development/magento',  function () {
  require __DIR__ . '/app/views/magento.php';
}, 'magento');

//development - e-Commerce-development/wooCommerce
$router->map('GET', $development_route . '/e-Commerce-development/wooCommerce',  function () {
  require __DIR__ . '/app/views/wooCommerce.php';
}, 'wooCommerce');

//development - e-Commerce-development/prestashop
$router->map('GET', $development_route . '/e-Commerce-development/prestashop',  function () {
  require __DIR__ . '/app/views/prestashop.php';
}, 'prestashop');

//development - e-Commerce-development/open-cart
$router->map('GET', $development_route . 'e-Commerce-development/open-cart',  function () {
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
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/local-seo-services',  function () {
  require __DIR__ . '/app/views/local-seo-services.php';
}, 'local-seo-services');

//digital-marketing - search-engine-optimization/start-up-seo
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/start-up-seo',  function () {
  require __DIR__ . '/app/views/start-up-seo';
}, 'start-up-seo');

//digital-marketing - search-engine-optimization/codeigniter-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/codeigniter-seo-services',  function () {
  require __DIR__ . '/app/views/codeigniter-seo-services.php';
}, 'codeigniter-seo-services');

//digital-marketing - search-engine-optimization/enterprise-seo
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/enterprise-seo',  function () {
  require __DIR__ . '/app/views/enterprise-seo.php';
}, 'enterprise-seo');

//digital-marketing - search-engine-optimization/e-commerce-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/e-commerce-seo-services',  function () {
  require __DIR__ . '/app/views/e-commerce-seo-services.php';
}, 'e-commerce-seo-services');

//digital-marketing - search-engine-optimization/woocommecce-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/woocommecce-seo-services',  function () {
  require __DIR__ . '/app/views/woocommecce-seo-services.php';
}, 'woocommecce-seo-services');

//digital-marketing - search-engine-optimization/magento-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/magento-seo-services',  function () {
  require __DIR__ . '/app/views/magento-seo-services.php';
}, 'magento-seo-services');

//digital-marketing - search-engine-optimization/amazon-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/amazon-seo-services',  function () {
  require __DIR__ . '/app/views/amazon-seo-services.php';
}, 'amazon-seo-services');

//digital-marketing - search-engine-optimization/shopify-seo-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/shopify-seo-services',  function () {
  require __DIR__ . '/app/views/shopify-seo-services.php';
}, 'shopify-seo-services');

//digital-marketing - search-engine-optimization/guest-blogging-services
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/guest-blogging-services',  function () {
  require __DIR__ . '/app/views/guest-blogging-services.php';
}, 'guest-blogging-services');

//digital-marketing - search-engine-optimization/comprehensive-seo-audit
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/comprehensive-seo-audit',  function () {
  require __DIR__ . '/app/views/comprehensive-seo-audit.php';
}, 'comprehensive-seo-audit');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/google-penalty-assessment',  function () {
  require __DIR__ . '/app/views/google-penalty-assessment.php';
}, 'google-penalty-assessment');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/conversion-optimization',  function () {
  require __DIR__ . '/app/views/conversion-optimization.php';
}, 'conversion-optimization');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/backlink-audit/disavow-services',  function () {
  require __DIR__ . '/app/views/backlink-audit-disavow-services.php';
}, 'backlink-audit/disavow-services');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/mobile-seo',  function () {
  require __DIR__ . '/app/views/mobile-seo.php';
}, 'mobile-seo');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/free-seo-analysis',  function () {
  require __DIR__ . '/app/views/free-seo-analysis.php';
}, 'free-seo-analysis');

//digital-marketing - search-engine-optimization/google-penalty-assessment
$router->map('GET', $digital_marketing_route . '/search-engine-optimization/content-writing-services',  function () {
  require __DIR__ . '/app/views/content-writing-services.php';
}, 'content-writing-services');

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

// match current request
$match = $router->match();

if ($match && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  require __DIR__ . '/app/views/error-404.php';
}
