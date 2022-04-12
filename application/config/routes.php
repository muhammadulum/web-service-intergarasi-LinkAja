<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/demo'] = 'api/ApiDemoController/inquiry';

//payment
$route['api/linkaja/Payment/inquiry'] = 'api/linkaja/Payment/inquiry';
$route['api/linkaja/Payment/pay'] = 'api/linkaja/Payment/pay';
$route['api/linkaja/Payment/check_status'] = 'api/linkaja/Payment/check_status';

//tk
$route['api/linkaja/TkitmsPayment/inquiry'] = 'api/linkaja/TkitmsPayment/inquiry';
$route['api/linkaja/TkitmsPayment/pay'] = 'api/linkaja/TkitmsPayment/pay';
$route['api/linkaja/TkitmsPayment/check_status'] = 'api/linkaja/TkitmsPayment/check_status';

//sd
$route['api/linkaja/SditmsPayment/inquiry'] = 'api/linkaja/SditmsPayment/inquiry';
$route['api/linkaja/SditmsPayment/pay'] = 'api/linkaja/SditmsPayment/pay';
$route['api/linkaja/SditmsPayment/check_status'] = 'api/linkaja/SditmsPayment/check_status';

//smp
$route['api/linkaja/SmpitmsPayment/inquiry'] = 'api/linkaja/SmpitmsPayment/inquiry';
$route['api/linkaja/SmpitmsPayment/pay'] = 'api/linkaja/SmpitmsPayment/pay';
$route['api/linkaja/SmpitmsPayment/check_status'] = 'api/linkaja/SmpitmsPayment/check_status';

//sta
$route['api/linkaja/StaitmsPayment/inquiry'] = 'api/linkaja/StaitmsPayment/inquiry';
$route['api/linkaja/StaitmsPayment/pay'] = 'api/linkaja/StaitmsPayment/pay';
$route['api/linkaja/StaitmsPayment/check_status'] = 'api/linkaja/StaitmsPayment/check_status';

//cobabmt
$route['api/linkaja/CobaBmt'] = 'api/linkaja/CobaBmt/index';