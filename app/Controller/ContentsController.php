<?php
	class ContentsController extends AppController{

		public $name = 'Contents';
		public $uses = array('Upload');

		public function index(){

			// 最新の投稿 Uploads.path Uploads.comment Uploads.type
			$uploadNewest = $this->Upload->getUploadNewest();
			$this->set('uploadNewest', $uploadNewest);

			// 過去6件の投稿
			$uploadImages = $this->Upload->getUploadForFooter();
			$this->set('uploadImages', $uploadImages);
		}
	}
