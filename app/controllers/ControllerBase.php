<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public function beforeExecuteRoute($dispatcher)
    {
		// セッションデータの設定
		$this->session->set('auth', array(
		  'id' => 123,
		  'name' => 'テスト'
		));
	}
}
