<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
// awd
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

// $routes->get('/', 'Home::index/$1');
$routes->get('/', 'Home::index');


$routes->get('/list', 'Home::list');
// $routes->get('/halaman_utama', 'user\FunctionUser::halaman_utama');

// $routes->get('/halaman_utama', 'user\FunctionUser::halaman_utama');

//Login (Admin)
$routes->get('/loginAdmin', 'admin\FunctionUmum::viewLogin');
//Register (Admin)
$routes->get('/registerAdmin', 'admin\FunctionUmum::viewRegister');
//Supir(Admin)
$routes->get('/viewSupir', 'admin\FunctionSupir::listSupir');
$routes->get('/viewTambahSupir', 'admin\FunctionSupir::tambahSupir');
$routes->POST('/simpanDataSupir', 'admin\FunctionSupir::simpan');
$routes->delete('/hapusSupir/(:num)', 'admin\FunctionSupir::hapus/$1');
$routes->get('/editSupir/(:num)', 'admin\FunctionSupir::editSupir/$1');
$routes->post('/updateSupir/(:num)', 'admin\FunctionSupir::update/$1');
$routes->get('/dashboard','admin\FunctionDashboard::dashboard');
//Perjalanan(Admin)
$routes->get('/viewPerjalanan', 'admin\FunctionPerjalanan::listPerjalanan');
$routes->get('/viewTambahPerjalanan', 'admin\FunctionPerjalanan::tambahPerjalanan');
$routes->POST('/simpanDataPerjalanan', 'admin\FunctionPerjalanan::simpan');
$routes->delete('/hapusPerjalanan/(:num)', 'admin\FunctionPerjalanan::hapus/$1');
$routes->get('/editPerjalanan/(:num)', 'admin\FunctionPerjalanan::editPerjalanan/$1');
$routes->post('/updatePerjalanan/(:num)', 'admin\FunctionPerjalanan::update/$1');

//Tipe Bus(Admin)
$routes->get('/viewTipeBus', 'admin\FunctionTipeBus::listTipeBus');
$routes->get('/viewTambahTipeBus', 'admin\FunctionTipeBus::tambahTipeBus');
$routes->POST('/simpanDataTipe', 'admin\FunctionTipeBus::simpan');
$routes->delete('/hapusTipe/(:num)', 'admin\FunctionTipeBus::hapus/$1');
$routes->get('/editTipe/(:num)', 'admin\FunctionTipeBus::editTipe/$1');
$routes->post('/updateTipe/(:num)', 'admin\FunctionTipeBus::update/$1');

//Tipe Jadwal(Admin)
$routes->get('/viewJadwal', 'admin\FunctionJadwal::listjadwal');
$routes->get('/viewTambahJadwal', 'admin\FunctionJadwal::tambahJadwal');
$routes->POST('/simpanDataJadwal', 'admin\FunctionJadwal::simpan');
$routes->delete('/hapusJadwal/(:num)', 'admin\FunctionJadwal::hapus/$1');
$routes->get('/editJadwal/(:num)', 'admin\FunctionJadwal::editJadwal/$1');
$routes->post('/updateJadwal/(:num)', 'admin\FunctionJadwal::update/$1');

//Armada(Admin)
$routes->get('/viewBus', 'admin\FunctionArmadaBus::listArmadaBus');
$routes->get('/viewTambahBus', 'admin\FunctionArmadaBus::tambahArmadaBus'); 
$routes->POST('/simpanDataBus', 'admin\FunctionArmadaBus::simpan');
$routes->delete('/hapusBus/(:num)', 'admin\FunctionArmadaBus::hapus/$1');
$routes->get('/editBus/(:num)', 'admin\FunctionArmadaBus::editBus/$1');
$routes->post('/updateBus/(:num)', 'admin\FunctionArmadaBus::update/$1');


$routes->post('/cariPerjalanan', 'user\FunctionUser::cariPerjalanan/$1');
$routes->get('/User', 'user\FunctionUser::index');
$routes->post('/login_user', 'user\FunctionUser::login_user/$1');
$routes->get('/login_user', 'user\FunctionUser::login_user/$1');
$routes->get('/ViewRegister', 'user\FunctionUser::ViewRegister');
$routes->get('/view_login', 'user\FunctionUser::view_login');
$routes->get('/Home', 'Home::index');
$routes->get('/About', 'Home::about');
$routes->get('/User/(:any)', 'user\FunctionUser::login_user/$1');
$routes->post('/Register_User', 'user\FunctionUser::Register_User');

$routes->get('/logout', 'user\FunctionUser::logout');

//Pessan Tiket
// $routes->post('/pesan_tiket', 'user\PesanTiket::pesanTiket');
$routes->get('/tit', 'Home::pesanTiket');
$routes->match(['get', 'post'], '/prosesTiket', 'Home::processPesanTiket');




$routes->get('/pages', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');

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
