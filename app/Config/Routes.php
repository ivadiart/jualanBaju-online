<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('details/(:any)', 'DetailsController::index/$1');
$routes->get('shop', 'ShopController::index');
$routes->get('kategori/(:any)', 'KategoriHome::index/$1');

$routes->get('settings', 'SettingsController::index');
$routes->post('settings/bukutamu', 'SettingsController::bukutamu');

$routes->get('cart', 'CartController::index');
$routes->post('details/add_cart', 'CartController::tambah');
$routes->post('details/update_cart', 'CartController::update');
$routes->get('cart/hapus/(:any)', 'CartController::hapus/$1');
$routes->post('checkout/proses', 'CheckoutController::checkout');
$routes->get('checkout/(:any)', 'CheckoutController::index/$1');
$routes->get('login-register/checkout', 'CheckoutController::checkLogin');

$routes->get('login-register', 'LoginUser::index');
$routes->post('login-register/register', 'LoginUser::register');
$routes->post('login-register/login', 'LoginUser::login');
$routes->get('login-register/logout', 'LoginUser::logout');

$routes->get('login_admin', 'LoginController::index');
$routes->post('auth/login', 'LoginController::login');
$routes->get('auth/logout', 'LoginController::logout');

$routes->group('admin', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->get('login_admin', 'LoginController::index');
    $routes->post('auth/login', 'LoginController::login');
    $routes->get('auth/logout', 'LoginController::logout');

    $routes->get('index', 'AdminController::index');
    $routes->get('footer', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    $routes->get('data_produk', 'ProdukController::index');
    $routes->post('data_produk/tambah', 'ProdukController::tambah');
    $routes->post('data_produk/updateDesc', 'ProdukController::updateDesc');
    $routes->post('data_produk/updateProduk', 'ProdukController::update');
    $routes->post('data_produk/updateImg', 'ProdukController::updateImg');
    $routes->get('data_produk/hapus/(:any)', 'ProdukController::hapus/$1');

    $routes->get('data_kategori', 'KategoriController::index');
    $routes->post('data_kategori/tambah', 'KategoriController::tambah');
    $routes->post('data_kategori/update', 'KategoriController::update');
    $routes->get('data_kategori/hapus/(:any)', 'kategoriController::hapus/$1');

    $routes->get('data_akses', 'AksesController::index');
    $routes->post('tambah_akses', 'AksesController::tambah');
    $routes->post('update_akses', 'AksesController::update');
    $routes->get('hapus_akses/(:any)', 'AksesController::hapus/$1');

    $routes->get('data_transaksi', 'TransaksiController::index');
    $routes->post('data_transaksi/status', 'TransaksiController::update');

    $routes->get('data_bukutamu', 'TamuController::index');
    $routes->get('hapus_bukutamu/(:any)', 'TamuController::hapus/$1');
});
