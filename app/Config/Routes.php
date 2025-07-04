<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

$routes->get('/', 'Pelanggan::index');
$routes->get('/pelanggan', 'Pelanggan::index');
$routes->get('/pelanggan/create', 'Pelanggan::create');
$routes->post('/pelanggan/store', 'Pelanggan::store');
$routes->get('/pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
$routes->post('/pelanggan/update/(:num)', 'Pelanggan::update/$1');
$routes->get('/pelanggan/delete/(:num)', 'Pelanggan::delete/$1');
