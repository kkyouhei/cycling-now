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

	public function getTimeLineImg(){
		// TimeLine of in Images
		$imgUrl = array();
		$timeLine = $this->getTimeLine();
		foreach($timeLine as $tweetInfo){
			$tweet = $tweetInfo->text;
			// isImg ImageTweet = startIdx TextTweet = FALSE 
			$isImg = strstr($tweet, '［写真］');
			if($isImg){
				$shortUrl = $tweetInfo->entities->urls[0]->display_url;

				$shortUrl = str_replace('p.twipple.jp/', "", $shortUrl);
				array_push($imgUrl, 'http://p.twpl.jp/show/orig/'. $shortUrl);
			}
		}

		return $imgUrl;
	}

}
