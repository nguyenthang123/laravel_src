function tabChange1(sid,hclass){
	hclass.removeClass("hover");
	sid.addClass("hover");
}
function tabChange3(hoverId,hoverClass,sId,hClass){
	hoverClass.removeClass("hover");
	hoverId.addClass("hover");
	hClass.hide();
	sId.show();
}
function tabChange2(hoverId,hoverClass,sId,hClass){
	hoverClass.removeClass("hover");
	hoverId.addClass("hover");
	hClass.css({"display":"none","opacity":"0"});
	sId.eq($(this).index()).css({"display":"block"}).stop().animate({"opacity":"1"},{easing: 'easeInCubic',duration:500});
}
function nav1Tab(){
	$("#nav .nav_list ul.txt li").hover(function(){
		var _this=$(this);
		var _index=$(this).index();
		_this.addClass("hover");
		$("#nav .nav_list .nav_list_bg").stop().animate({"opacity":1,"left":_index*130+"px"},{easing: 'easeInQuad',duration:300,complete:function(){
			$("#nav .nav_list .nav_list_bg").find("span").css({"display":"block"});
		}});		
	},function(){
		$(this).removeClass("hover");
		$("#nav .nav_list .nav_list_bg").stop().animate({"opacity":0});
		$("#nav .nav_list .nav_list_bg").find("span").css({"display":"none"});
	});
}

function ltRand(maxNo,minNo){
	return parseInt(Math.floor(Math.random()*maxNo)+minNo);
}

function call(){
	lxb.call(document.getElementById("telInputs"));	
}
$("#footer_btn_box .cons .con li").hover(function(){
	$(this).find(".pic").find("img").stop().animate({"padding-top":"5px"},"fast");									   
},function(){
	$(this).find(".pic").find("img").stop().animate({"padding-top":"12px"},"fast");
});