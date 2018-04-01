function bells(){
$('.notifications').toggleClass('active');
}
function modal_call(type){
var height = $('.'+type).height();
$('.'+type).attr('style', 'margin-top:-'+height/2+'px');
$('.overlay, .'+type).addClass('active');
}
function modal_drop(){
$('.modalx').attr('style', 'margin-top:-1000px');
$('.overlay, .modalx').removeClass('active');
}
$('.overlay').click(function(){modal_drop();});

$('[data-msg-list]').click(function(){
var list_id = $(this).attr('data-msg-list');
$('[data-msg-list],[data-msg]').removeClass('active');
$('[data-msg-list='+list_id+'],[data-msg='+list_id+']').addClass('active');
});

function resizer(targ){
	var img = $(targ);
	var paramW = img.width();
	var paramH = img.height();
	if (paramH > paramW){
		img.css('width','100%');
		paramH = img.height();
		paramW = img.width();
		paramH = paramH - paramW;
		img.css('margin-top','-'+paramH/2+'px');
	}
	else if(paramW > paramH){
		img.css('height','100%');
		paramW = img.width();
		paramH = img.height();
		paramW = paramW - paramH;
		img.css('margin-left','-'+paramW/2+'px');
	}
	else{img.css('width','100%');}	
}
$('.ava_placeholder img, .comment_pl img, .profile_placeholder img, .offers_placeholder img, .author_placeholder img').each(function(){resizer(this)});