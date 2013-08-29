<?php
	class GalleryController extends AppController{

		public $name = 'Gallery';
		public $uses = array('Upload');
		public $components = array('Twitter');

		public function index(){

			// images url
			$this->set('uploadNewest', $this->Twitter->getTimeLineImg());
		}
	}
