<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>tweet</title>
<link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style type="text/css">
<!--
body {
	margin: 20px 0;
	font-family: 'Lucida Grande', 'Hiragino Kaku Gothic ProN',
		'ヒラギノ角ゴ ProN W3', Meiryo, メイリオ, sans-serif;
}

#main {
	width: 80%;
	margin: 0 auto;
}
-->
</style>
<script type="text/javascript">
		<!--
			// post.php送る
			//取得する→Ajaxで送信→結果取得
			$(document).ready(function(){
				$('button').click(function(){
					$.ajax({
						type: 'post',
						url: './actions/post.php',
						async : true,
						dataType: 'json',
						data: {
							'tweet':$('textarea').val()
							},
							success: function(data){
								alert("["+data.text+"]\nをツイートしました。");
							},
							failed: function(data){
								alert("sippai"+data);
							}
						}
					);
					$('textarea').val("");
				});
			});
			
		-->
		</script>
</head>
<body>
	<div id="main" class="text-center">
		<div id="tweetButton">
			<div class="row-fluid">
				<div class="span12">
					<textarea name"tweet" rows="5" cols=""></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<p>
						<button class="btn btn-large btn-primary" type="button">送信</button>
					</p>
				</div>
			</div>
		</div><!-- tweet button -->
		
		<div id="timeline">
		</div>
		<div class="row-fluid">
			<p>きちんと勉強することです ?T @3mkn : oicbotさん、ap受かる方法を教えてください</p>
			<p>&#344; &#342; &#340;</p>
		</div>
		<div id="timeline">
			
		</div>
	</div>
	<div id="footer">
		<p>Copyright manyu</p>
	</div>
</body>
</html>