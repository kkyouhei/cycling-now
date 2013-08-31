<?php
class ContentsController extends AppController{

	public $name = 'Contents';
	public $components = array('Twitter');

	public function index(){
		
		
		echo '<script type="text/javascript">';
		echo 'var title = \'HelloMap\'';
		echo '</script>';

		$arr = array('sample' => 'HelloSample');
		echo '<script type="text/javascript">';
		echo json_encode($arr);
		echo '</script>';

	}

}
