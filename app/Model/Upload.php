<?php
class Upload extends AppModel{
	public $name = 'Upload';

	// 最新の投稿を取得
	public function getUploadNewest(){
		$uploadRecords = $this->getUploadForFooter();

		return array_shift($uploadRecords);
	}

	// Footerに表示する投稿を取得
	public function getUploadForFooter(){
		$uploadRecords = $this->find(
			'all'	,
			array(
				'limit'	=>	'6'	,
				'order'	=>	'time DESC'
			)
		);

		return $uploadRecords; 
	}
}
