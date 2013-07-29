<?php
/* twitter.php */
require_once("./../twitteroauth/twitteroauth.php"); //ここのパスは適宜に変更
require_once './../twitteroauth/twitterKey.php';

$tweet = isset($_POST['tweet']) ? $_POST['tweet'] : "";



$obj = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
//$request = $obj -> OAuthRequest('https://api.twitter.com/1.1/statuses/user_timeline.json', 'GET', array('count'=>'4')); 

//$tweet  = "oic bot";
if(!empty($tweet)){
	$request = $obj->OAuthRequest("http://api.twitter.com/1.1/statuses/update.json","POST",array("status"=>$tweet));
}else{
	$request = "ツイート失敗";
}
	echo $request;