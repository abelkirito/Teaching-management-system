$(document).ready(function(){
	$("#left").children("ul").children("li").hover(function(){
		$(this).children("a").css({"background":"url(img/left2.png)","color":"#38A3D5"}),
		$(this).children("ul").stop(true,true).slideDown(600);
		},function(){
		$(this).children("a").css({"background":"url(img/left.png)","color":" #666"}),
		$(this).children("ul").stop(true,true).slideUp(600);
			});
})
