<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>tweet</title>
<link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,initial-scale=1,maximum-scale=1">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<style type="text/css">
<!--
body {
	margin: 20px 0;
	font-family: 'Lucida Grande', 'Hiragino Kaku Gothic ProN',
		'ヒラギノ角ゴ ProN W3', Meiryo, メイリオ, sans-serif;
}

@media ( min-width : 800px) {
	#main {
		width: 500px;
		margin: 0 auto;
	}
}

@media ( max-width : 480px) {
	#main {
		width: 100%;
		margin: 0 auto;
	}
}

#footer {
	border-top: 2px solid #CCC;
}

#footer p {
	margin-top: 10px;
}

.nav li > a > span{
	padding:0 3px;
	margin:0 3px;
}

/* timeline */
.tweetBox {
	border: 1px solid #AAA;
	background-color: rgba(0, 191, 255, 0.2);
	border-radius: 0.5em 0.5em;
	margin: 2px 0 3px;
}


.tweetBox .icon{
	width: 64px;
	height: 64px;
	float: left;
	padding: 5px;
	cursor: pointer;
}

.tweetBox .tweet {
	margin-left: 80px;
}

.tweetBox .tweet > span {
	margin: 3px;
}

.tweetBox .tweet .twitterId {
	font-size: 0.75em;
}

.tweet p {
	
}

.tweet .action {
	text-align: right;
}

.tweet .action > div{
	padding:0 2px 0;
}
.tweet .action a {
	margin: 0 5px;
}

.tweet .action i {
	margin: 3px 5px 0;
}
-->
</style>
<script type="text/javascript">
		<!--
			// post.php送る
			//取得する→Ajaxで送信→結果取得
			$(function(){
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
					$('#textarea').val("");
				});

				//UI setting
				$('#tweetButton').toggle();
				setTimeout("scrollTo(0,1)", 100);
				
				$('#tweet').click(function(){
					$('#tweetButton').toggle("show");
				});
			});


		-->
		</script>
</head>
<body>
	<div id="main" class="text-center">
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a href="#"><i class="icon-home"></i><span class="hidden-phone">Home</span></a></li>
					<li><a href="#">@</a></li>
					<li><a href="#"><i class="icon-user"></i><span class="hidden-phone">Profile</span></a></li>				
				</ul>
				<div id="tweet" class="pull-right text-right btn"><i class="icon-pencil"></i></div>
			</div>
		</div>
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
		</div>
		<!-- tweet button -->

		<div class="row-fluid">
			<p>きちんと勉強することです ?T @3mkn : oicbotさん、ap受かる方法を教えてください</p>
			<p>&#344; &#342; &#340;</p>
		</div>
		
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="timeline">
			<div class="row-fluid">
				<div class="tweetBox span12">
					<img class="icon" alt="icon" src="https://si0.twimg.com/profile_images/3460828003/2001ae3006cd0ad3b0e062c80ad774c1.jpeg">
					<div class="tweet text-left">
						<span>tera@まにゅん</span><span class="twitterId">@tera09</span>
						<p>もじもじうちゃちゃ</p>
						<div class="action clearfix">
							<div class="btn btn-link"><span class="hidden-phone">Replay</span><i class="icon-share-alt"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Favorite</span><i class="icon-star-empty"></i></div>
							<div class="btn btn-link"><span class="hidden-phone">Retweet</span><i	class="icon-refresh"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div id="footer" class="row-fluid">
		<div class="span12 text-center">
			<p>
				Copyright &copy; 2013 st-sweet.com<br>All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>