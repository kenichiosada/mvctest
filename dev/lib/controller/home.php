<?php

namespace Controller;

class Home
{
	public $template = 'index';

	public function main()
	{
		$result = $model->show();
		
		$header = new \Model\View('header');
		$footer = new \Model\View('footer');
		$view = new \Model\View($this->template);
		
		$view->assign('header', $header->render(FALSE));
		$view->assign('footer', $footer->render(FALSE));
		$view->assign('contents', $result);

		$view->render();	
	}
}
