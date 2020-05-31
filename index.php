<?php

//Calling the AltoRouter Routing Library
require __DIR__ . '/app/tools/router/AltoRouter/AltoRouter.php';

$router = new AltoRouter();
$router->setBasePath('/drafticode');

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