<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Public Feedback Routes
$routes->get('/feedback', 'FeedbackController::index');
$routes->post('/feedback', 'FeedbackController::store');

// Admin Routes
$routes->group('admin', function($routes) {
    // Dashboard
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');
    
    // Article Management
    $routes->get('article', 'Admin\Article::index');
    $routes->get('article/create', 'Admin\Article::create');
    $routes->post('article/store', 'Admin\Article::store');
    $routes->get('article/edit/(:num)', 'Admin\Article::edit/$1');
    $routes->post('article/update/(:num)', 'Admin\Article::update/$1');
    $routes->delete('article/delete/(:num)', 'Admin\Article::delete/$1');
    
    // Feedback Management
    $routes->get('feedback', 'Admin\Feedback::index');
    $routes->delete('feedback/delete/(:num)', 'Admin\Feedback::delete/$1');
});
