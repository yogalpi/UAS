<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Mahasiswa::index');
$routes->get('/formMahasiswa', 'Mahasiswa::formMahasiswa');

$routes->get('/editMahasiswa/(:segment)', 'Mahasiswa::editMahasiswa/$1');
$routes->post('/simpanMahasiswa', 'Mahasiswa::simpanMahasiswa');

