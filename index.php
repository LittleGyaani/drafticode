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

//** Define Base Route **//
$digital_marketing_route = '/digital-marketing';
$development_route = '/development';

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
$router->map('GET', '/about-us',  function () {
  require __DIR__ . '/app/views/about-us.php';
}, 'about');


// match current request
$match = $router->match();

if ($match && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  require __DIR__ . '/app/views/error-404.php';
}