<?php
require_once './sql/config.php';

function database_connect(){
	global $DBServer,$DBUser,$DB,$DBPass;
	$link = mysqli_connect($DBServer,$DBUser,$DBPass,$DB);
	if(mysqli_connect_errno()){
		die("データベースに接続失敗しました。".mysqli_connect_error());
	}
	return $link;
}

function execQuery($query){
	$link = database_connect();
	$result = mysqli_query($link, $query);
	mysqli_close($link);
	return $result;
}