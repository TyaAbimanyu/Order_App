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
$routes->get('/Logout', 'MenuController::logout');
$routes->post('/Logout', 'MenuController::logout');
$routes->get('/Order', 'OrderController::getOrder');
$routes->post('/Order', 'OrderController::getOrder');
$routes->get('/Delete', 'OrderController::deleteOrder');
$routes->post('/Delete', 'OrderController::deleteOrder');
$routes->get('/Update', 'OrderController::updateOrder');
$routes->post('/Update', 'OrderController::updateOrder');
$routes->get('/AddOrder', 'AddOrderController::addOrder');
$routes->post('/AddOrder', 'AddOrderController::addOrder');