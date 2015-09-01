<?php

class IndexController extends ControllerBase
{
	public function indexAction(){
		$now = date( "Y/m/d H:i:s", time() );
		$info = Tinfo::find(array(
		"conditions" => "open_date < ?1 AND close_date > ?1",
		"bind"       => array(1 => $now),
		'order'      => "display_order asc"
		));
    	$this->view->infoMsg = $info;
    }

}

