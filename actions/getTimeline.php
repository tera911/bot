<?php
require_once './../twitteroauth/twitteroauth.php';
require_once './../twitteroauth/twitterKey.php';
//statuses/mentions_timeline

$twitterObj = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$request = $twitterObj->oAuthRequest("https://api.twitter.com/1.1/statuses/home_timeline.json",	"GET" , "");

echo $request;