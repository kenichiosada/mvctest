<?php

class Database_Dao
{
	private $_pdo;

	public function __construct(\Database_Driver $db)
	{
		$this->_db = $db;
	}

	public function show() {
		$sql = 'SELECT * FROM tests';
		
		$this->_db->connect();
		$this->_db->prepare($sql);
		$this->_db->query();
		$result = $this->_db->fetch('assoc');

		return $result;
	}
}
