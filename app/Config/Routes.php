<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Login', 'LoginController::login');
$routes->post('/Login', 'LoginController::login');
$routes->get('/Signup', 'SignupController::signup');
$routes->post('/Signup', 'SignupController::signup');
$routes->get('/Menu', 'MenuController::menu');
$routes->post('/Menu', 'MenuController::menu');
$routes->get('/Checker', 'MenuController::validateToken');
$routes->post('/Checker', 'MenuController::validateToken');
$routes->get('/Header', 'MenuController::checkHeader');
$routes->post('/Header', 'MenuController::checkHeader');
$routes->get('/Logout', 'MenuController::logout');
$routes->delete('/Logout', 'MenuController::logout');
$routes->get('/Order', 'OrderController::getOrder');
$routes->post('/Order', 'OrderController::getOrder');
$routes->delete('/Delete/(:any)', 'OrderController::deleteOrder/$1');
$routes->get('/Update', 'OrderController::updateOrder');
$routes->put('/Update', 'OrderController::updateOrder');
$routes->get('/AddOrder', 'AddOrderController::addOrder');
$routes->post('/AddOrder', 'AddOrderController::addOrder');