<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/', ['namespace' => 'App\Controllers'], function($routes){
    $routes->get('', 'Home::index');
    $routes->get('/roadmap', 'Home::roadmap');
    $routes->get('/faq', 'Home::faq');
    $routes->get('/about', 'Home::about');
});