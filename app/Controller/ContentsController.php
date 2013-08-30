<?php
class ContentsController extends AppController{

	public $name = 'Contents';
	public $uses = array('Upload');
	public $components = array('Twitter');

	public function index(){
		$tweets = $this->Twitter->getTimeLineTweet();
		$this->set('tweets', $tweets);
	}
}
