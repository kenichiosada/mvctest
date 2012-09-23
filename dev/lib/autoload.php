<?php

class Autoload
{
	public function register() 
    {
		spl_autoload_register(array($this, 'loadClass'));
    }

    public function loadClass($className)
    {
		$fileName = '';
		$className = ltrim($className, '\\');

		if ($lastNsPos = strripos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}

		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
		
        require APPPATH.strtolower($fileName);
    }
}

