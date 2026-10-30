<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('categories', 'Categories::index');
$routes->get('categories/new', 'Categories::new');
$routes->post('categories/create', 'Categories::create');
$routes->get('categories/edit/(:num)', 'Categories::edit/$1');
$routes->post('categories/update/(:num)', 'Categories::update/$1');
$routes->post('categories/delete/(:num)', 'Categories::delete/$1');

$routes->get('/books', 'Books::index');
$routes->get('/books/new', 'Books::new');
$routes->post('/books/create', 'Books::create');
$routes->get('/books/edit/(:num)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');
$routes->post('/books/delete/(:num)', 'Books::delete/$1');