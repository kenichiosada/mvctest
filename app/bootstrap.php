<?php
/**
 * Bootstrap
 * Defines what resources and components to initialize.
 */

/**
 * Set up autoloader
 */
require LIBRARY.'autoload.php';
$autoloader = new SplClassLoader();
$autoloader->register();

/**
 * Set up DI container
 */
$container = new Pimple();

// define some services
$container['db_driver'] = function ($c) {
	return new Database_Driver();
};
$container['model_home'] = function($c) {
	return new \Model\Home();
};

/**
 * Set up routing
 */
$router = new Router();

// Define router mapping here. 
$router->map('/', 'home/index');
$router->map('/admin', 'admin/index');


