<?php
require_once(getcwd() . '\dev\lib\model\home.php');

class HomeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Home
     */
	private $_mock_result = array(
		'id' 	=> 1,
		'name'	=> 'hey'
	); 
	private $_object;


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {	
		$dao = $this->getMock(
			'Database_Dao',
			array('show')
		);

		$dao->expects($this->once())
			->method('show')
			->will($this->returnValue($this->_mock_result));	
		
		$this->_object = new \Model\Home($dao);
		$this->_object->show();
    }

    /**
     * @covers Model\Home::show
     * @todo   Implement testShow().
     */
    public function testShow()
    {
		$expected_result = array(
			'id'	=> 1,
			'name'	=> 'hey'
		);
		
		$this->assertEquals($expected_result, $this->_mock_result);
	}


}
