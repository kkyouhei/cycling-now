<?php
class MapController extends AppController{

	public $name = 'Map';
	public $components = array('Twitter');

	public function index(){
		$tweets = $this->Twitter->getTimeLineTweet();
		$this->set('tweets', $tweets);
	}
}
