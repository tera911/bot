<?php
require_once './sql/config.php';

function database_connect(){
	global $DBServer,$DBUser,$DB,$DBPass;
	$link = mysqli_connect($DBServer,$DBUser,$DBPass, $DB);
	if(mysqli_connect_errno()){
		die("データベースに接続失敗しました。".mysqli_connect_error());
	}
	mysqli_set_charset($link, "utf8");
	return $link;
}

function execQuery($query){
	$link = database_connect();
	$result = mysqli_query($link, $query);
		echo mysqli_error($link);
	
	mysqli_close($link);
	return $result;
}