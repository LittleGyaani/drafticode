<?php
//Global Configuration File

//**This is global configuration file which contains all the necessary php scripts and headers and required variables**//
//** to be used in different files and will be called back in header file.**//

//Hiding all errors and notices
error_reporting(0);

//Enable gzip Compression
ob_start("ob_gzhandler");

//Including the DB file
include 'db.config.php';

//Declaring default Date and Time Zone for Date Time Stamps
date_default_timezone_set('Asia/Kolkata');

//Allow Cross Access from Origin
header("Access-Control-Allow-Origin: *");

//Initialize the global session
session_start();

/* Global Declarations */
$title_constant = "";
$base_URI = "";
$base_API_Endpoint = "";
$site_status = ""; // PRODUCTION or DEVELOPMENT
$now = "";
$server_protocol = ""; ///HTTP or HTTPS
$site_host = ""; //localhost or live

//** Define Base Routes for Services **//
$company_route = '/our-ompany';
$development_route = '/development';
$digital_marketing_route = '/digital-marketing';
$services_route = '/services';
$resources_route = '/resources';
$potfolio_route = '/portfolio';
$contact_us_route = '/contact-us';

//* Varaible Values * //

//Variable Assigns
$title_constant = "Web development company, SEO, SMO & Digital Marketing Agency";

$server_protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

$server_protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://'; //Set the Protocol

$site_host = $_SERVER["HTTP_HOST"]; //Find the Current Host

$base_API_Endpoint = "/api/web/v1/requests/"; //All API requests are passed here

$site_status = "DEVELOPMENT"; //Current status of the Project

if ($site_status === 'DEVELOPMENT') //If Site is still under development

    if ($site_host === 'localhost') //If the Site Host is localhost
        $base_URI = $server_protocol . 'localhost/drafticode'; //Local Demo Website
    else
        $base_URI = $server_protocol . 'drafticode.com/demo/drafticode'; //Our Demo Website or Preproduction URL
else
    $base_URI = $server_protocol . 'drafticode.com'; //Live Production Website

//Global Values
$base_URI = $base_URI; //Get the BASE URL from Variable

//Date & Time
$now = Date('d/m/Y H:i:s');
