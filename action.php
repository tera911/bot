<?php
require_once './sql/mysql_bot.php';
$action = isset($_POST['action']) ? htmlspecialchars($_POST['action']) : "";
$data = isset($_POST['data']) ? htmlspecialchars($_POST['data']) : "";

if(empty($action) || empty($data)){
	//var_dump($_REQUEST);
	echo 'empty';
}else{
	
	// action flag
	switch($action){
		case "ADD":
			add($data);
			break;
		case "GET":
			get();
			break;
	}
}

//action ADD
function add($data){
	$query = sprintf("INSERT INTO words (word) VALUES (' %s ')", $data);
	if($result = execQuery($query)){
		echo 'true';
	}else{
		echo 'false';
}
}
function get(){
	//データベースからデータを取ってくる
	$query = sprintf("SELECT * FROM words;");//LIMIT のoffsetをＧＥＴパラメータ値で設定する
	$result = execQuery($query);
	echo '<tr><td>CheckBox</td><td>ID</td><td>ワード</td></tr>';
	while($row = mysqli_fetch_assoc($result)){
		echo '<tr><td><input type="checkbox" name="word_'. $row['id'] .'"></td><td>' .$row['id']. '</td><td>' .$row['word']. '</td></tr>'."\n";
	}
}
