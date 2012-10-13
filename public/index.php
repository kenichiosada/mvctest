<?php

/**
 *  Error reporting on. Disable when in production.
 */
error_reporting(-1);
ini_set('display_errors', 1);

/**
 *  Define environment related constants.
 */
define('DOCROOT', __DIR__.DIRECTORY_SEPARATOR);
define('APPPATH', realpath(__DIR__.'/../app/').DIRECTORY_SEPARATOR);
define('LIBRARY', realpath(__DIR__.'/../lib/').DIRECTORY_SEPARATOR);
define('CSS', DOCROOT.'css'.DIRECTORY_SEPARATOR);
define('JS', DOCROOT.'js'.DIRECTORY_SEPARATOR);
define('CONFIG', APPPATH.'config'.DIRECTORY_SEPARATOR);

require APPPATH.'bootstrap.php';

// Match request URI with router mapping.
$route = $router->matchCurrentRequest();

// Find controller and action names
$target = ($route) ? 
	array_search($route->getTarget(), include(CONFIG.'router.php')) : 
	$target = '\Controller\Error::_404_';
$target = explode('::', $target);

/**
 * Create controller object
 */
$autoloader->setIncludePath('../app');
$autoloader->register();

$controller = new $target[0]($container);
$data = $controller->$target[1]($container);

var_dump($data);


