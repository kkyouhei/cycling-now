<?php
	class MapController extends AppController{

		public $name = 'Map';

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
