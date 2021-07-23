<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'User_con';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['ddaf'] = 'Login_con/daftar';
$route['dlog'] = 'Login_con';
$route['dlogout'] = 'Login_con/logout';
$route['dash_adm'] = 'Admin_con';
$route['pnykt'] = 'Admin_con/pnykt';
$route['e-peny'] = 'Admin_con/epeny';
$route['h-peny'] = 'Admin_con/hpeny';
$route['t-peny'] = 'Admin_con/tpeny';
$route['diagnosa'] = 'Admin_con/diagnosa';
$route['gjl'] = 'Admin_con/gjl';
$route['t-gjl'] = 'Admin_con/tgjl';
$route['h-gjl'] = 'Admin_con/hgjl';
$route['e-gjl'] = 'Admin_con/egjl';
$route['login'] = 'User_con/login';
$route['daftar'] = 'User_con/daftar';
$route['dash_usr'] = 'User_con/dash_usr';
$route['diagnose'] = 'User_con/diagnosa';
$route['laporanal'] = 'Admin_con/laporanal';
