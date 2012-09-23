<?php

class Router
{
	/**
	 * @var Router
	 */
	private $_action = 'index';

	private $_actions = array(
		'/^post(\/[0-9]+)/'         =>  'view',
		'/^admin(\/)$/'             =>  'index',
		'/^admin\/post(\/[0-9]+)/'  =>  'edit'
	);
	
	/**
	 * This method finds which controller to call.
	 *
	 * @return string Class name
	 */
	public function getController($uri)
	{
		$params = explode('/', trim($uri, '/'));
		if ($params[0]=='admin') {
			$className = 'Controller\Admin';
		} else {
			$className = 'Controller\Home';
		}
		return $className;
	}
	
	/**
	 * This method finds which action to take.
	 *
	 * @return string Method name
	 */
	public function getAction($uri)
	{
		$action = $this->_action;
		
		foreach ($this->_actions as $pattern => $method) {
			if (preg_match($pattern, trim($uri, '/'))) {
				$action = $method;
			}
		}
		return $action;
	}

}
