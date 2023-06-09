<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('home','home::index');
$routes->get('register', 'register::index');
$routes->post('userregister','register::output');
$routes->get('login','login::index');
$routes->post('userlogin','login::output');
$routes->get('profileuser','profileuser::index');
$routes->get('request','request::index');
$routes->get('donor','donoruser::index');
$routes->post('userrequest','request::output');
$routes->post('userdonor','donoruser::output');
$routes->get('checkuser','checkuser::index');
$routes->get('delete','delete::index');
$routes->get('userlogout','userlogout::index');



$routes->get('adminregister','adreg::index');
$routes->post('adminreg','adreg::result');
$routes->get('adminlogin','adlogin::index');
$routes->post('adminlog','adlogin::result');
 $routes->get('adhome','adhome::output');
 $routes->get('verifyrequest','verifyrequest::index');
 $routes->get('verifydonor','verifydonor::index');
 $routes->get('deletebld','adhome::result');
 $routes->get('adminlogout','adminlogout::index');
//  $routes->get('adverify', 'verify::index');
$routes->get('verify', 'verify::index');
$routes->post('delete','delete::index');
$routes->get('verifydonor','verifydonor::index');
$routes->post('deletedonor','deletedonor::index');
$routes->post('verifyend','verifyend::index');




//  $routes->get('')

 
// 


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
