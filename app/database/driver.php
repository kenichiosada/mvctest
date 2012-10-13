<?php

/**
 * Database driver class
 */ 

class Database_Driver
{
	private $_connection;
	private $_handler;
	private $_result;
	private $_dbConfig;
	
	public function __construct($config)
	{
		$this->_dbConfig = $config;
	}

	public function connect()
	{
		try {
			$this->_connection = new PDO (
				$this->_dbConfig['dsn'], 
				$this->_dbConfig['user'], 
				$this->_dbConfig['password']
			);
		} catch (PDOException $e) {
			echo ('Error: ' . $e->getMessage());
			die();
		}
	}

	public function disconnect()
	{
		$this->_connection = null;
	}
	
	public function prepare($query) 
	{
		$this->_handler = $this->_connection->prepare($query);
	}

	public function query() 
	{
		if (isset($this->_handler)) {
			$this->_handler->execute();
		}
	}

	public function fetch() 
	{
		$this->_result = $this->_handler->fetchAll(PDO::FETCH_ASSOC);
		return $this->_result;
	}
}
