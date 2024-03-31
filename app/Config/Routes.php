<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'NewControl::index');
$routes->post('/', 'NewControl::index');
$routes->get('/Login', 'LoginController::login');
$routes->post('/Login', 'LoginController::login');
$routes->get('/Signup', 'SignupController::signup');
$routes->post('/Signup', 'SignupController::signup');
$routes->get('/Home', 'HomeController::menu');
$routes->post('/Home', 'HomeController::menu');