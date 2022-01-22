<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/registrasi', 'AuthController::registrasi');
$routes->get('/detail-film/(:any)', 'Home::detailFilm/$1');

$routes->get('/logout', 'AuthController::logout');
$routes->get('/admin', 'Admin::index', ['filter' => 'level:admin']);
$routes->get('/data-film', 'Admin::film', ['filter' => 'level:admin']);
$routes->get('/data-user', 'Admin::user', ['filter' => 'level:admin']);
$routes->get('/data-genre', 'Admin::genre', ['filter' => 'level:admin']);
$routes->get('/tambah-film', 'Admin::tambahFilm', ['filter' => 'level:admin']);
$routes->get('/hapus-film/(:any)', 'FilmController::hapusData/$1', ['filter' => 'level:admin']);
$routes->get('/tambah-genre', 'Admin::tambahGenre', ['filter' => 'level:admin']);
$routes->get('/hapus-genre/(:any)', 'GenreController::hapusData/$1', ['filter' => 'level:admin']);
$routes->get('/hapus-user/(:any)', 'UserController::hapusData/$1', ['filter' => 'level:admin']);
$routes->get('/hapus-jadwal/(:any)', 'JadwalController::hapusData/$1', ['filter' => 'level:admin']);
$routes->get('/edit-genre/(:any)', 'Admin::editGenre/$1', ['filter' => 'level:admin']);
$routes->get('/edit-film/(:any)', 'Admin::editFilm/$1', ['filter' => 'level:admin']);
$routes->get('/jadwal/(:any)', 'Admin::jadwal/$1', ['filter' => 'level:admin']);
$routes->get('/tambah-jadwal/(:any)', 'Admin::tambahJadwal/$1', ['filter' => 'level:admin']);
$routes->get('/data-order', 'Admin::order', ['filter' => 'level:admin']);
$routes->get('/order-tiket/(:any)', 'Home::order/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
