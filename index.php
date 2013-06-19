<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>botのワードを設定するページ</title>
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css" />
<style>
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

</style>
</head>
<body>
<div class="navbar-inner"></div>
	<div class="container">
		<p class="hero-unit">ワード登録ページ</p>
		<div class="row-fluid">
			<div class="offset8 span3"><textarea rows="3"></textarea></div>
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span1 blank"><input type="button" value="追加" class="btn btn-primary "></div>
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
				    <li class="disable"><a href="<?php $page = isset($_GET['page']) ? $_GET['page'] : "0"; echo "./?page=".$page; ?>">Next</a></li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
			<table class="table table-striped blank table1">
			<tr>
			<td>CheckBox</td>
			<td>ID</td>
			<td>ワード</td>
			</tr>
			<?php 
			require_once './sql/mysql_bot.php';
			$page = isset($_GET['page']) ? $_GET['page'] : "0";
			$page = intval($page);
			
			//データベースからデータを取ってくる
			$query = sprintf("SELECT * FROM words LIMIT %d,30;",30 * $page);//LIMIT のoffsetをＧＥＴパラメータ値で設定する
			$result = execQuery($query);
			
			foreach($result as $row){
				echo '<tr><td><input type="checkbox" name="word_'. $row['id'] .'"></td><td>' .$row['id']. '</td><td>' .$row['word']. '</td></tr>'."\n";
			}
			?>
			</table>
			</div>
		</div>
		
	</div>
</body>
</html>
