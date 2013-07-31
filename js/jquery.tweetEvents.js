function toggleReplayForm(){
	var replayForm = $(this).parent().parent().parent().children('.replayform');
	var twitterId = $(this).parent().parent().parent().children('.tweet_detail').children('.screenName');
	if(replayForm.css('display') == 'none'){
		if(replayForm.children().children('textarea').val() == ""){
			replayForm.toggle(300).children().children('textarea').focus().val(twitterId.text() + " ");
		}else{
			replayForm.toggle(300).focus();
		}
	}else{
		replayForm.toggle(200).children().children('textarea');
	}
	return false;
}
function openUserProfilePage(){
	location.href = $(this).attr('user-url');
}