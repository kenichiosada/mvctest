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
define('APPPATH', realpath(__DIR__.'/../lib/').DIRECTORY_SEPARATOR);
define('CSS', DOCROOT.'css'.DIRECTORY_SEPARATOR);
define('JS', DOCROOT.'js'.DIRECTORY_SEPARATOR);

require APPPATH.'bootstrap.php';
 

