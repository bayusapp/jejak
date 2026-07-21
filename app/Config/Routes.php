<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'LandingPage::index');

$routes->group('Auth', function ($routes) {
  $routes->get('', 'Auth::index');
  $routes->get('cek', 'Auth::cek');
});

$routes->group('Owner', function ($routes) {
  $routes->get('Beranda', 'Owner\Beranda::index');
});
