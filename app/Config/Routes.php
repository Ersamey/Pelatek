<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/daftar', 'RegisterPlatek::index');
$routes->post('daftar/save', 'RegisterPlatek::save');

$routes->get('/login', 'Login::index');
$routes->get('/register', 'Login::register');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/acc/(:segment)', 'Admin::accPembayaran/$1');
$routes->get('/admin/pending/(:segment)', 'Admin::pendingPembayaran/$1');
$routes->get('/admin/delete/(:segment)', 'Admin::delete/$1');
$routes->get('/admin/view/(:segment)', 'Admin::view/$1');
$routes->get('/acc', 'Admin::acc');
$routes->get('/pending', 'Admin::pending');