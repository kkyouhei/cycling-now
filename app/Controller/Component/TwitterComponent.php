<?php

App::import(
	'vendor'		,
	'twitteroauth'	,
	array(
		'file'=>'TwitterOAuth'.DS.'twitteroauth.php'
	)
);

require_once('TwitterInfo.php');

class TwitterComponent extends Component implements TwitterInfo{

	public $components = 'ConsumerInfo';

	public $name = 'Twitter';

	private $twitterObj = null;

	function __construct(){
		$this->setTwitterObj();	
	}

	private function setTwitterObj(){
		$this->twitterObj = new TwitterOAuth(
			self::CONSUMER_KEY		,
			self::CONSUMER_SECRET	,
			self::ACCESS_TOKEN		,
			self::ACCESS_SECRET	
		);
	}	

	public function getTimeLine(){
		return json_decode($this->twitterObj->OAuthRequest('http://api.twitter.com/1.1/statuses/user_timeline.json', 'GET', array()));
	}

	// get images url in timeline 
	public function getTimeLineImg(){
		// timeLine of in Images
		$imgsUrl = array();
		$timeLine = $this->getTimeLine();
		foreach($timeLine as $tweetInfo){
			$tweet = $tweetInfo->text;
			// isImg ImageTweet = startIdx TextTweet = FALSE 
			$imgUrl = '';
			if(	isset($tweetInfo->entities->media) && isset($tweetInfo->entities->media[0]->media_url) &&
				!empty($tweetInfo->entities->media[0]->media_url) && !empty($tweetInfo->entities->media[0]->media_url)){

				$imgUrl = $tweetInfo->entities->media[0]->media_url;
				array_push($imgsUrl, $imgUrl);
			}

		}

		return $imgsUrl;
	}

	// get location
	public function getTimeLineLocation(){
		// timeLine of in location 
		$timeLine = $this->getTimeLine();
		$locations = array();

		$lat = '';
		$lng = '';
		if(isset($timeLine[0]->geo)){
			$lat = $timeLine[0]->geo->coordinates[0];
			$lng = $timeLine[0]->geo->coordinates[1];
		}

		$imgUrl = '';
		if(isset($timeLine[0]->entities->media)){
			$imgUrl = $timeLine[0]->entities->media[0]->media_url;
		}
		$tweet = $timeLine[0]->text;
		
		array_push(
			$locations	,
			array(
				 	'lat'		=>	$lat
				,	'lng'		=>	$lng
				,	'imgUrl'	=>	$imgUrl
				,	'content'	=>	$tweet			
			)
		);

		return $locations;
	}

}
