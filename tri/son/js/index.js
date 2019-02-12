//?????banner
$(function(){
/*????*/	
	$(".nav-ul li a").wrapInner( '<span class="out"></span>' );
	
	$(".nav-ul li a").each(function() {
		$( '<span class="over">' +  $(this).text() + '</span>' ).appendTo( this );
	});

	$(".nav-ul li a").hover(function() {
		$(".out",	this).stop().animate({'top':	'43px'},	300); // move down - hide
		$(".over",	this).stop().animate({'top':	'0px'},		300); // move down - show

	}, function() {
		$(".out",	this).stop().animate({'top':	'0px'},		300); // move up - show
		$(".over",	this).stop().animate({'top':	'-43px'},	300); // move up - hide
	});	
	
});

//??????????
function posTop(obj) {
	var Top = 0;
	while (obj) {
		Top += obj.offsetTop;
		obj = obj.offsetParent;
	}
	return parseInt(Top);
}
var _menudiv = document.getElementById('submenu').getElementsByTagName('div');

window.onscroll = function(){
	
	if(parseInt(document.documentElement.scrollTop || document.body.scrollTop) > posTop(document.getElementById('nav')) + 43){	

		$(".nav-submenu-xl").css("top",(parseInt(document.documentElement.scrollTop || document.body.scrollTop) - posTop(document.getElementById('submenu'))+43)+"px");
	}else{
		$(".nav-submenu-xl").css("top","43px");
	}
}

//??????
if(document.getElementById("submenu")){
var _submenu = $("#submenu").find('.submenu1');
var _time = 100;

function autoScrollDown(){
	if($(".nav-submenu").css("height") == '0px'){
		if(!-[1,] && !window.XMLHttpRequest){
			$(".nav-submenu").css("height","420px").find('.submenu1').eq(0).animate({top:'0px'},_time,function(){
				_submenu.eq(1).css("top","0px").animate({top:'105px'},_time,function(){
					_submenu.eq(2).css("top","105px").animate({top:'210px'},_time,function(){
						_submenu.eq(3).css("top","210px").animate({top:'315px'},_time);
					})
				});
			});
		}else{
			$(".nav-submenu").css("height","420px").find('.submenu1').eq(0).animate({bottom:'-105px'},_time,function(){
				_submenu.eq(1).css("bottom","-105px").animate({bottom:'-210px'},_time,function(){
					_submenu.eq(2).css("bottom","-210px").animate({bottom:'-315px'},_time,function(){
						_submenu.eq(3).css("bottom","-315px").animate({bottom:'-420px'},_time);
					})
				});
			
			});
		}
	}
}

function autoScrollUp(){
	$(".nav-l").removeClass("nav-l-hover");
	$(".nav-submenu").css("height","0px").find('.submenu1').stop().css("bottom","0px");
	$(".nav-submenu-xl").hide().children('div').hide();
	_submenu.removeClass('submenu1-hover');
}

$(".nav-l").hover(function(){

//	clearTimeout(_autoscroll);
	$(".nav-l").addClass("nav-l-hover");
	autoScrollDown();
},function(){
	autoScrollUp();
});

//var _autoscroll = setTimeout(function(){autoScrollUp();},5000);

//$(function(){
	//$(".nav-l").addClass("nav-l-hover");
	//autoScrollDown();//?????????
//}); 

_submenu.hover(function(){
	_submenu.removeClass('submenu1-hover').eq($(this).index()).addClass('submenu1-hover');
	$(".nav-submenu-xl").show().children('div').hide().eq($(this).index()).show();
	
});
}


/*??*/
if(document.getElementById('mchat')){
	var _mchat = document.getElementById('mchat');
	var _mchat2 = document.getElementById('mchat2');
	
	if(_mchat){
		_mchat.onclick = function(){
			createChat();	
		}
	}
	
	if(_mchat2){
		_mchat2.onclick = function(){
			createChat();	
		}	
	}
	
	function createChat(){
		var _div  = document.createElement('div');
		_div.style.width    = '100%';
		_div.style.height   = '100%';
		_div.style.position = 'fixed';
		_div.style.left     = '0px';
		_div.style.top 		= '0px';
		_div.id				= 'chat1';
		_div.onclick        = function(){
			document.body.removeChild(document.getElementById('chat1'));
			document.body.removeChild(document.getElementById('chat2'));
		}
		
		if (navigator.appName.indexOf("Internet Explorer") != -1){
			
			_div.style.filter  = 'alpha(opacity=70)';
			_div.style.opacity = '0.7';
		}else{
			_div.style.opacity = '0.7';
		}
		_div.style.backgroundColor = '#000';
		_div.style.zIndex   = '100000000';
		
		document.body.appendChild(_div);	
		
		delete _div;
		
		var _div1 = document.createElement('div');
		_div1.style.width = '500px';
		_div1.style.height = '275px';
		_div1.style.left = '50%';
		_div1.style.top = '-50%';
		_div1.style.marginLeft = '-240px';
		_div1.style.position = 'fixed';
		_div1.style.zIndex = '100000001';
		_div1.style.backgroundColor = '#fff';
		_div1.style.borderRadius	= '8px';
		
		_div1.id = 'chat2';
	
	_div1.innerHTML = ['<div style="width:462px; padding-left:27px; line-height:40px;border-bottom:1px solid #eeeeee;padding-right:10px;font-size:14px; overflow:hidden;"><h3 style="color:#333;font-size:15px; display:inline; float:left;">??????????</h3><a href="javascript:void(0);" id="closewx" style="position:absolute; top:5px; right:7px"><img src="/templets/alnew/images/closewx.png" /></a></div>',
	'<div style="width:468px; padding-left:27px;padding-top: 10px; overflow:hidden;">',
		'<ul>',
			'<li style="width:206px;display:inline; float:left; font-size:12px; line-height:24px; margin:5px 0px; position:relative;"><img src="/templets/alnew/images/wx_02.jpg" /></li>',
			'<li style="display:inline; float:left;width:251px; font-size:12px; line-height:24px; margin:5px 0px;"><h3 style="font-size:13px; color:#333">??????????????:</h3></li>'
			,'<li style="display:inline; float:left;width:251px; font-size:12px; line-height:24px;">1??????????,?????????????“??????????”?????????;</li>',
			'<li style="display:inline; float:left;width:251px; font-size:12px; line-height:24px; ">2??????????????????,????????????????;</li>',
			'<li style="display:inline; float:left;width:251px; font-size:12px; line-height:24px; ">3?????????,?????????:58???????,?????2600??</li>',
		'</ul>',
	'</div>'].join('');
	document.body.appendChild(_div1);
	delete _div1;
		
		//$("#chat2").animate({height:'275px'},300);
		$("#chat2").animate({top:'35%'},500);
		
		$("#closewx").bind("click",function(){
		
			$("#chat1,#chat2").remove();
		});
	}
	
	function closeChat(){
		//alert('a');
		document.body.removeChild(document.getElementById('chat1'));
		document.body.removeChild(document.getElementById('chat2'));
	}
}

// ?????
$(function(){
			$('#slides').slides({
				play: 2500,
				preload: true,
				generateNextPrev: false
			});
			$('#slides2').slides({
				play: 2500,
				preload: true,
				generateNextPrev: false
			});
			$('#slides3').slides({
				play: 2500,
				preload: true,
				generateNextPrev: false
			});
			$('#slides4').slides({
				play: 2500,
				preload: true,
				generateNextPrev: false
			});
			$('#shebei').slides({
				play: 4500,
				preload: true,
				generateNextPrev: false
			});
});

//$(document).ready(function() {
//         //x??,y??
//         var x = 18;
//         var y = 14;
//         var rand_qq = parseInt(Math.random() * (x - y + 1) + y);
//         var rand_swt = parseInt(Math.random() * (x - y + 1) + y);
//         
//         var o = document.getElementById("qq_num");
//         o.value = rand_qq;
//         
//         var s = document.getElementById("swt_num");
//         s.value = rand_swt;
//         
//         $("#qq_num").html("").append(rand_qq);
//         $("#swt_num").html("").append(rand_swt);
//});