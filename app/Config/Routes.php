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
$routes->get('/ayang', 'Home::ayang');
// $routes->get('/halaman_utama', 'user\FunctionUser::halaman_utama');

// $routes->get('/halaman_utama', 'user\FunctionUser::halaman_utama');

//Login (Admin)
$routes->get('/loginAdmin', 'admin\FunctionUmum::viewLogin');
$routes->get('/registerAdmin', 'admin\FunctionUmum::viewRegister');
$routes->get('/logoutAdmin', 'admin\FunctionUmum::logoutAdmin');
//Profile Admin
$routes->get('/profileAdmin', 'admin\FunctionUmum::viewProfileAdmin',['filter' => 'auth']);
$routes->post('/updateProfileAdmin/(:num)', 'admin\FunctionUmum::updateProfileAdmin/$1',['filter' => 'auth']);
//Supir(Admin)
$routes->get('/viewSupir', 'admin\FunctionSupir::listSupir', ['filter' => 'auth']);
$routes->get('/viewTambahSupir', 'admin\FunctionSupir::tambahSupir',['filter' => 'auth']);
$routes->POST('/simpanDataSupir', 'admin\FunctionSupir::simpan',['filter' => 'auth']);
$routes->delete('/hapusSupir/(:num)', 'admin\FunctionSupir::hapus/$1',['filter' => 'auth']);
$routes->get('/editSupir/(:num)', 'admin\FunctionSupir::editSupir/$1',['filter' => 'auth']);
$routes->post('/updateSupir/(:num)', 'admin\FunctionSupir::update/$1',['filter' => 'auth']);

//Dashboard
$routes->get('/dashboard','admin\FunctionDashboard::dashboard',['filter' => 'auth']);

//Perjalanan(Admin)
$routes->get('/viewPerjalanan', 'admin\FunctionPerjalanan::listPerjalanan',['filter' => 'auth']);
$routes->get('/viewTambahPerjalanan', 'admin\FunctionPerjalanan::tambahPerjalanan',['filter' => 'auth']);
$routes->POST('/simpanDataPerjalanan', 'admin\FunctionPerjalanan::simpan',['filter' => 'auth']);
$routes->delete('/hapusPerjalanan/(:num)', 'admin\FunctionPerjalanan::hapus/$1',['filter' => 'auth']);
$routes->get('/editPerjalanan/(:num)', 'admin\FunctionPerjalanan::editPerjalanan/$1',['filter' => 'auth']);
$routes->post('/updatePerjalanan/(:num)', 'admin\FunctionPerjalanan::update/$1',['filter' => 'auth']);

//Tipe Bus(Admin)
$routes->get('/viewTipeBus', 'admin\FunctionTipeBus::listTipeBus',['filter' => 'auth']);
$routes->get('/viewTambahTipeBus', 'admin\FunctionTipeBus::tambahTipeBus',['filter' => 'auth']);
$routes->POST('/simpanDataTipe', 'admin\FunctionTipeBus::simpan',['filter' => 'auth']);
$routes->delete('/hapusTipe/(:num)', 'admin\FunctionTipeBus::hapus/$1',['filter' => 'auth']);
$routes->get('/editTipe/(:num)', 'admin\FunctionTipeBus::editTipe/$1',['filter' => 'auth']);
$routes->post('/updateTipe/(:num)', 'admin\FunctionTipeBus::update/$1',['filter' => 'auth']);

//Tipe Jadwal(Admin)
$routes->get('/viewJadwal', 'admin\FunctionJadwal::listjadwal',['filter' => 'auth']);
$routes->get('/viewTambahJadwal', 'admin\FunctionJadwal::tambahJadwal',['filter' => 'auth']);
$routes->POST('/simpanDataJadwal', 'admin\FunctionJadwal::simpan',['filter' => 'auth']);
$routes->delete('/hapusJadwal/(:num)', 'admin\FunctionJadwal::hapus/$1',['filter' => 'auth']);
$routes->get('/editJadwal/(:num)', 'admin\FunctionJadwal::editJadwal/$1',['filter' => 'auth']);
$routes->post('/updateJadwal/(:num)', 'admin\FunctionJadwal::update/$1',['filter' => 'auth']);

//Armada(Admin)
$routes->get('/viewBus', 'admin\FunctionArmadaBus::listArmadaBus',['filter' => 'auth']);
$routes->get('/viewTambahBus', 'admin\FunctionArmadaBus::tambahArmadaBus',['filter' => 'auth']); 
$routes->POST('/simpanDataBus', 'admin\FunctionArmadaBus::simpan',['filter' => 'auth']);
$routes->delete('/hapusBus/(:num)', 'admin\FunctionArmadaBus::hapus/$1',['filter' => 'auth']);
$routes->get('/editBus/(:num)', 'admin\FunctionArmadaBus::editBus/$1',['filter' => 'auth']);
$routes->post('/updateBus/(:num)', 'admin\FunctionArmadaBus::update/$1',['filter' => 'auth']);


//StaffKeuangan
$routes->get('/viewStaffKeuangan', 'admin\FunctionStaffKeuangan::listStaff',['filter' => 'auth']);
$routes->get('/viewTambahStaff', 'admin\FunctionStaffKeuangan::tambahStaff',['filter' => 'auth']);
$routes->POST('/simpanDataStaff', 'admin\FunctionStaffKeuangan::simpan',['filter' => 'auth']);
$routes->delete('/hapusStaff/(:num)', 'admin\FunctionStaffKeuangan::hapus/$1',['filter' => 'auth']);
$routes->get('/editStaff/(:num)', 'admin\FunctionStaffKeuangan::editStaff/$1',['filter' => 'auth']);
$routes->post('/updateStaff/(:num)', 'admin\FunctionStaffKeuangan::update/$1',['filter' => 'auth']);


$routes->post('/saveRegisterAdmin', 'admin\FunctionUmum::saveRegister');
$routes->post('/verifyLoginAdmin','admin\FunctionUmum::verifyLoginAdmin');

$routes->post('/verifyLoginStaff','staffKeuangan\FunctionUmum::verifyLoginStaff');

$routes->get('/loginStaff', 'staffKeuangan\FunctionUmum::viewLogin');
$routes->get('/dashboardStaff', 'staffKeuangan\FunctionDashboard::dashboard',['filter' => 'authStaff']);
$routes->get('/viewValidasi', 'staffKeuangan\FunctionValidasi::listValidasi',['filter' => 'authStaff']);
$routes->get('/validasitiket/(:num)','staffKeuangan\FunctionValidasi::validasiTiket/$1',['filter' => 'authStaff']);
$routes->post('/validasiPembayaranFix/(:num)','staffKeuangan\FunctionValidasi::validasiPembayaranFix/$1',['filter' => 'authStaff']);
$routes->get('/viewLaporanKeuangan', 'staffKeuangan\FunctionLaporanKeuangan::listLaporanKeuangan',['filter' => 'authStaff']);

$routes->post('/cariPerjalanan', 'user\FunctionUser::cariPerjalanan');
$routes->get('/User', 'user\FunctionUser::index');
$routes->post('/login_user', 'user\FunctionUser::login_user/$1');
$routes->get('/login_user', 'user\FunctionUser::login_user/$1');
$routes->get('/ViewRegister', 'user\FunctionUser::ViewRegister');
$routes->get('/view_login', 'user\FunctionUser::view_login');
$routes->get('/Home', 'Home::index');
$routes->get('/About', 'Home::about');
$routes->get('/User/(:any)', 'user\FunctionUser::login_user/$1');
$routes->post('/Register_User', 'user\FunctionUser::Register_User');

// $routes->get('/logout', 'user\FunctionUser::logout');


//Pessan Tiket
// $routes->post('/pesan_tiket', 'user\PesanTiket::pesanTiket');
$routes->get('/tit', 'user\PesanTiket::tambahTiket');
$routes->get('/prosesTiket/(:num)', 'user\PesanTiket::pesanTiket/$1');
$routes->post('/menuPembayaran', 'user\PesanTiket::tambahTiketKeDb');
// $routes->match(['get', 'post'], '/prosesTiket', 'Home::processPesanTiket');
//Pembayaran
$routes->get('/PembayaranTiket', 'user\PembayaranTiket::Pembayaran');
$routes->get('/uploadFotoPembayaran/(:num)','user\PembayaranTiket::uploadFotoPembayaran/$1');
$routes->post('/simpan_foto_pembayaran/(:num)', 'user\PembayaranTiket::simpan_foto_pembayaran/$1');



$routes->get('/pages', 'Pages::index');
// $routes->get('(:any)', 'Pages::view/$1');

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
