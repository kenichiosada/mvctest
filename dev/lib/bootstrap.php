<?php

/**
 *  Include necessory classes
 */
require APPPATH.'autoload.php';
require APPPATH.'router.php';

/**
 *  Define constant for application related files.
 */
define('CONFIG', APPPATH.'config.php');

/**
 *  Set up autoloader. 
 *  This will allow objects to be created without adding require for each class file. 
 */
$autoloader = new Autoload();
$autoloader->register();

/**
 *  Set up router. 
 *  This will find a name of an object to be created according to request URI.
 */
$router = new Router();
$className = $router->getClassName();

/**
 *  Create object of a controller.
 */
$controller = new $className;
$controller->main();


