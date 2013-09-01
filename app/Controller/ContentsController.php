<?php
class ContentsController extends AppController{

	public $name = 'Contents';
	public $components = array('Twitter');

	public function index(){
		$locations = $this->Twitter->getTimeLineLocation();

		// convert locations->imgUrl to imgtag
		foreach($locations as $locKey => $locVal){
			if(!empty($locVal['imgUrl'])){
				$imgUrl  = '<br/>' ;
				$imgUrl .= '<a href="' . $locVal['imgUrl'] . '"/>';
				$imgUrl .= '<img src="' . $locVal['imgUrl'] . '" class="imgs"; />';
				$imgUrl .= '</a>';
				$locations[$locKey]['imgUrl'] = $imgUrl;
			}

		}

		// add start end location
		array_push($locations,
			array(
				'lat'		=>	'34.178496'		,
				'lng'		=>	'131.473727'	,
				'imgUrl'	=>	''				,
				'content'	=>	'目標地点'
			)
		);
		$this->set('locations', json_encode($locations, true));
	}
}
