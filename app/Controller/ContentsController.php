<?php
	class ContentsController extends AppController{

		public $name = 'Contents';
		public $uses = array('Upload');
		public $components = array('Twitter');

		public function index(){
			$timeLine = $this->Twitter->getTimeLine();
			foreach($timeLine as $twitte){
			}	
		}
	}
