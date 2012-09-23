<?php

abstract class Database_Interface
{
	abstract protected function __construct($config);
	abstract protected function connect();
	abstract protected function disconnect();
	abstract protected function prepare($query);
	abstract protected function query();
	abstract protected function fetch();
}
