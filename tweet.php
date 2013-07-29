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
@media (min-width: 800px) {
	#main {
		width: 500px;
		margin: 0 auto;
	}
}
@media (max-width: 480px) {
	#main {
		width: 80%;
		margin: 0 auto;
	}
}
#footer{
	border-top:2px solid #CCC;
}
#footer p{
	margin-top:10px;
}

/* timeline */
.tweetBox{
border:1px solid #AAA;
background-color:#bebec5;
border-radius:0.5em 0.5em;
margin-top:5px;
}
.tweetBox .icon{
float:left;
}
.tweetBox .icon img{
	width:64px;
	height:64px;
	float:left;
	padding:5px;
}
.tweetBox .tweet{
	margin-left:80px;
}
.tweetBox .tweet .screenName{
	float:left;
	margin:3px;
}
.tweetBox .tweet .twitterId{
	float:left;
	margin:3px;
	font-size:0.75em;
}
.tweet p{
	
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
	<div class="navber">
	
	</div>
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
			<div class="row-fluid">
				<div class="span12">
					<div class="tweetBox">
						<div class="icon"><a href="#">
								<img alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
							</a>
						</div>
						<div class="tweet">
							<div class="screenName">tera@まにゅん</div><div class="twitterId clearfix">@tera09</div>
							<div class="clearfix"><p class="text-left">aaa</p></div>
							
							<div class="action clearfix">rt fav ret</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="tweet">
						<p>aaa</p>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="tweet">
						<p>aaa</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer" class="row-fluid">
		<div class="span12 text-center">
			<p>Copyright &copy; 2013 st-sweet.com<br>All Rights Reserved.</p>
		</div>
	</div>
</body>
</html>