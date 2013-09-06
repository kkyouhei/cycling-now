<?php
class ContentsController extends AppController{

	public $name = 'Contents';
	public $components = array('Twitter');

	public function index(){
		$locations = $this->Twitter->getTimeLineLocation();
		// convert locations->imgUrl to imgtag and content add newline
		$imgTag = '';
		$content = '';
		foreach($locations as $locKey => $locVal){
			$imgTag = $this->convertImgTag($locVal['imgUrl']);
			$content = $this->addNewLine($locVal['content']);
			$locations[$locKey]['imgUrl'] = $imgTag;
			$locations[$locKey]['content'] = $content;
		}

		// add start end location
		array_push($locations,
			array(
				  'lat'		=>	'34.178496'	
				, 'lng'		=>	'131.473727'
				, 'imgUrl'	=>	''	
				, 'content'	=>	'目標地点'
			)
		);
		$this->set('locations', json_encode($locations, true));
	}

	// NewLineString is Space
	private function addNewLine($content){
		$editContent = '';

		if(empty($content)){
			return $content;
		}

		$editContent = str_replace(' ', '<br>', $content);

		return $editContent;
	}

	private function convertImgTag($imgUrl){
		$imgTag = '';

		if(empty($imgUrl)){
			return $imgUrl;
		}

		$imgTag  = '<br/>' ;
		$imgTag .= '<a href="' . $imgUrl . '" target="_blank"/>';
		$imgTag .= '<img src="' . $imgUrl . '" class="imgs"; />';
		$imgTag .= '</a>';

		return $imgTag;
	}
}
