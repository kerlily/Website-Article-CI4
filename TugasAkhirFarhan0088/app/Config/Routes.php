<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'LoginController::index');

$routes->get('/magang/home', 'MagangController::index');
$routes->get('/magang/datamhsview', 'MagangController::datamhs');
$routes->get('/magangview/visitor', 'VisitorController::index');
$routes->post('/proseslogin', 'LoginController::proseslogin');
$routes->get('/magang/tambahdata', 'MagangController::tambahdata'); 
$routes->post('/magang/proses/inputmasuk', 'MagangController::inputmasuk'); 
$routes->get('/magang/datamasuk/hapus/(:any)', 'MagangController::hapusmasuk/$1'); 
$routes->get('/magang/edit/(:any)', 'MagangController::edit/$1');
$routes->post('/magang/updatemasuk', 'MagangController::updatemasuk');
$routes->get('/magang/detail/(:any)', 'MagangController::detail/$1');

