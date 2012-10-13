<?php

namespace Controller;

class Home
{
	private $_container;
	
	public function __construct($container)
	{
		$this->_container = $container;
	}
	
	public function index()
	{
		$data = $this->_container['model_home']->select_all();

		return $data;
	}
}
