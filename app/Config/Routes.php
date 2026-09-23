<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/siswa', 'Siswa::index');
$routes->get('/siswa/tambah', 'Siswa::tambah');
$routes->post('/siswa/simpan', 'Siswa::simpan');

$routes->get('/siswa/edit/(:num)', 'Siswa::edit/$1');
$routes->post('/siswa/update/(:num)', 'Siswa::update/$1');

$routes->get('/siswa/hapus/(:num)', 'Siswa::hapus/$1');

$routes->get('/kategori', 'Kategori::index');
$routes->get('/kategori/tambah', 'Kategori::tambah');
$routes->post('/kategori/simpan', 'Kategori::simpan');
$routes->get('/kategori/edit/(:num)', 'Kategori::edit/$1');
$routes->post('/kategori/update/(:num)', 'Kategori::update/$1');
$routes->get('/kategori/hapus/(:num)', 'Kategori::hapus/$1');

$routes->get('/kategori/edit/(:num)', 'Kategori::edit/$1');
$routes->post('/kategori/update/(:num)', 'Kategori::update/$1');