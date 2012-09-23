<?php
namespace Model;

class View
{
	private $_data = array();
	private $_render = FALSE;

	public function __construct($template)
	{
		$file = APPPATH.'views'.DIRECTORY_SEPARATOR.$template.'.php';

		if (file_exists($file)) {
			$this->_render = $file;
		} else {
			echo "Template: $file does not exist.\n";
		}
	}

	public function assign($key, $result)
	{
		$this->_data[$key] = $result;
	}

	public function render($directOutput = true)
	{
		if ($directOutput !== true) {
			ob_start();
		}
		$dataSet = $this->_data;
		include($this->_render);
		if ($directOutput !== true) {
			return ob_get_clean();
		}
	}
}
