<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'RegisterPlatek::index');
$routes->post('register/save', 'RegisterPlatek::save');
