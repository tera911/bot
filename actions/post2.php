<?php
/* twitter.php */
require_once("./../twitteroauth/twitteroauth.php"); //ここのパスは適宜に変更

//$tweet = isset($_POST['tweet']) ? $_POST['tweet'] : "";


// さっきメモしたやつを変数に代入
$consumerKey = ""; //Consumer key
$consumerSecret = ""; //Consumer secret
$accessToken = ""; //Access token
$accessTokenSecret = ""; //Access token secret

$obj = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
//$request = $obj -> OAuthRequest('https://api.twitter.com/1.1/statuses/user_timeline.json', 'GET', array('count'=>'4')); //ここの count で取得するツイート数をいじれます。とりあえず 4 つ。
$tweet  = "@siro_alice441 お口ミッフィーｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗ";

	for($i = 0; $i < 100; $i++){
		$request = $obj->OAuthRequest("http://api.twitter.com/1.1/statuses/update.json","POST",array("status"=>$tweet+$i));
	}
	echo $request;