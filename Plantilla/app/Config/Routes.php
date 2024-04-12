<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Inicio', 'Inicio::index');
$routes->get('/Inicio/add', 'Inicio::add');
$routes->post('/Inicio/store', 'Inicio::store');
$routes->get('/Inicio/edit', 'Inicio::edit');



