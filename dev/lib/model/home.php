<?php

namespace Model;

class Home
{
	private $_dao;

	public function __construct($dao)
	{
		$this->_dao = $dao;
	}

	public function show()
	{
		$result = $this->_dao->show();
	}
}
