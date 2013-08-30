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

	public function getTimeLineTweet(){
		$tweets = array();
		$timeLine = $this->getTimeLine();
		$imgUrl = "";
		foreach($timeLine as $tweetInfo){
			$tweetTime = $tweetInfo->created_at;
			$tweet = $tweetInfo->text;

			$isImg = strstr($tweet, '［写真］');
			if($isImg){
				$shortUrl = $tweetInfo->entities->urls[0]->display_url;
				$imgUrl = $this->getImgUrl($shortUrl);
			}

			array_push($tweets, array(
				'time'		=>	 date('Y-m-d H:i:s', strtotime((string) $tweetTime))	,
				'imgUrl'	=>	$imgUrl															,
				'tweet'		=>	$tweet
			));

			$tweetTime = "";
			$imgUrl = "";
			$tweet = "";
		}

		return $tweets;
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

				array_push($imgUrl, $this->getImgUrl($shortUrl));
			}
		}

		return $imgUrl;
	}

	// shortUrl convert to imgUrl
	public function getImgUrl($shortUrl){
		$shortUrl = str_replace('p.twipple.jp/', "", $shortUrl);
		return 'http://p.twpl.jp/show/orig/'. $shortUrl;
	}

}
