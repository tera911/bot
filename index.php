<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>botのワードを設定するページ</title>
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style type="text/css">
<!--
div.container{
	margin-top:50px;
}
.blank{
margin-top:10px;
}
.table1 td:nth-child(1){
width:20px;
}
.table1 td:nth-child(2){
width:20px;
}
.blank_clear{
margin:2px;
}
-->
</style>
<script type="text/javascript">
<!--
$(document).ready(function(){
	getWords();
	jQuery('[name="adddata"]').click(sendWord);
});
function sendWord(){
	var text = jQuery('textarea[name="word"]').val();
	$.post(
			"action.php",
			{"action" : "ADD", "data" : text},
			function(data, status){
				if(data == "true"){
					jQuery('#message').attr('style','');
					jQuery('#message').text("追加成功");
				}else{
					jQuery('#message').attr('style','');
					jQuery('#message').text("追加失敗"+data);
				}
			},
			"html"
		);
	window.setTimeout("getWords()",500);
}
function getWords(){
	table = jQuery('#words');
	table.text("");
	$.post(
			"action.php",
			{"action" : "GET", "data" : "aa"},
			function(data, status){
				if(data == "false"){
					table.append("取得失敗しました。");
				}else{
					table.append(data);
				}
			},
			"html"
		);
}
-->
</script>
</head>
<body>
<div class="navbar-inner"></div>
	<div class="container">
		<p class="hero-unit">ワード登録ページ</p>
		<div class="row-fluid">
			<div class="offset8 span3"><textarea name="word" rows="3"></textarea></div>
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span1 blank"><input type="button" name="adddata" value="追加" class="btn btn-primary "></div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span8"><span id="message" class="success" style="display:none;">めっせーじ</span></div>
		</div>
		<div class="row-fluid">
			<div class="span4"><input type="button" name="select" value="すべて選択" class="btn"></div>
			<div class="span4"><input type="button" name="delete" value="選択したものを削除" class="btn"></div>
			<div class=" span4">
				<div class="pagination blank_clear">
				  <ul>
				    <li class="disable"><a href="./?page=0">Prev</a></li>
				    <li class="disable"><a href="?page=0">1</a></li>
				    <li class="disable"><a href="?page=1">2</a></li>
				    <li class="disable"><a href="?page=2">3</a></li>
				    <li class="disable"><a href="?page=3">4</a></li>
				    <li class="disable"><a href="?page=4">5</a></li>
				    <li class="disable"><a href="<?php $page = isset($_GET['page']) ? $_GET['page'] : "0"; echo "./?page=".++$page; ?>">Next</a></li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
			<table id="words" class="table table-striped blank table1">
			</table>
			</div>
		</div>
		
	</div>
</body>
</html>
