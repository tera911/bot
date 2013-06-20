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
	jQuery('[name="word"]').bind("change keyup",textCounter);
	
});
function sendWord(){
	var text = jQuery('textarea[name="word"]');
	$.post(
			"action.php",
			{"action" : "ADD", "data" : text.val()},
			function(data, status){
				var messenger = jQuery('#message'); 
				if(data == "true"){
					messenger.slideToggle(500);
					messenger.addClass('alert alert-success');
					messenger.text("追加成功");
				}else{
					messenger.slideToggle(500);
					messenger.addClass('alert alert-error');
					messenger.text("追加失敗"+data);
				}
			},
			"html"
		);
	window.setTimeout("getWords()",500);
	text.val("");
	window.setTimeout(function(){jQuery('#message').slideToggle(100);},1000);
}

function textCounter(){
	counter = 140 - jQuery('[name="word"]').val().length;
	if(counter < 10){
		jQuery('#counter').attr("style","color:#E00");
	}else{
		jQuery('#counter').attr("style","");
	}
	jQuery('#counter').text(counter);
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
			<div class="span8"><p id="message" class="text-center" style="display:none;">めっせーじ</p></div>
			<div class="span3"><textarea name="word" rows="3" maxlength="140"></textarea></div>
			<div class="row-fluid">
				<div class="span1"><p id="counter" class="text-center">140</p></div>
				<div class="span1 blank"><input type="button" name="adddata" value="追加" class="btn btn-primary "></div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4"><input type="button" name="allselect" value="すべて選択" class="btn"></div>
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
