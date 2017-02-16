$(document).ready(function(){
	var iShow;
	$(".mid_mid_lists li").click(function(){
		$(".smallbut").each(function(){
			$(this).removeClass("current");
		});
		$(this).find(".smallbut").addClass("current");
		$(".mid_mid_news div").each(function(){
			$(this).hide();
		});
		$(".mid_mid_news .news"+String($(this).index()+1)).show();
	});
});