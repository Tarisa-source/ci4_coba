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

$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');

// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');
//routes baru untuk menngani metdod yang lain 
// $routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');
// $routes->get('/user', 'Admin\user::index');
// nama dari routes ini adalah placeholder
// (:num) untuk angka 
// (:alpha) untuk huruf
// (:alphanum) untuk huruf dan angka 
// (:any) untuk apapun
// (:segment) untuk apapun kecuali slash(/)
// $routes->add('/coba', 'Coba::about');
// $routes->add('/coba', function(){
//   echo "Hello Tarisa ini routes memakai closours";
// });
// $routes->get('/', 'Coba::about');
// routes mengarah ke controller home dengan method index 
// routes punya sagmen yang
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
