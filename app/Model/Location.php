<?php
	class Location extends AppModel{
		public $name = 'Location'; 

		// 最新の位置を取得
		public function getLocationNewest(){
			$locationRecords = $this->getLocationAll();

			return array_shift($locationRecords);
		}

		// 今までの位置情報を取得
		public function getLocationAll(){
			$locationRecords = $this->find(
				'all'	,
				array(
					'order'	=>	'time DESC'	
				);	
			);
		}
	}
