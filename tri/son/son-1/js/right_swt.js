//商�?��?中间
(function(){
	var _path = window.location.pathname, _key = '', _color = '';
	if(_path == '/' || _path == '/indexx.html'){    //首页
		
		var _key   = 'index';
		
	}else{
		if(_path.indexOf('/2013/yixuemeifu/') != -1 || _path.indexOf('/2013/zhengxingredian/shuinenjifu/') != -1)              	//�?�肤科
		{
			var _key   = 'pf';
			
		}else if(_path.indexOf('/2013/weizhengxing/') != -1 || _path.indexOf('/2013/zhengxingredian/weidiaosumian/') != -1 || _path.indexOf('/2013/zhengxingredian/nianqingkangshuailao/') != -1) 		//� 创科
		{
			var _key   = 'wc';
			
		}else if(_path.indexOf('/2013/meiyameirong/') != -1 || _path.indexOf('/2013/zhengxingredian/yachimeirong/') != -1)		//牙科
		{
			var _key   = 'yk';
			
		}else if(_path.indexOf('/2013/zhengxingmeirong/') != -1){	  //外科
			var _key   = 'wk';
			
		}else if(_path == '/index2014.html'){    //品牌页面等其他
			var _key   = '2014';
		}else{
			
			var _key   = 'index';
			
			}
	}
	document.write("<style>.swt-center-close{ transition: all 0.5s linear 0s; transform:scale(0,0); -webkit-transform:scale(0,0); -moz-transform:scale(0,0); -o-transform:scale(0,0); -ms-transform:scale(0,0);}</style><div style='display:none; z-index:10000; position: fixed !important; left: 50%; margin-left: -211px !important; top: 40%; margin-top: -100px !important;_top:expression(offsetParent.scrollTop+300); !important;*position:absolute;*bottom:auto; box-shadow:0px 3px 10px #494949;' id='swt-center'><img src='/templets/alnew/swt2014/swt-center-"+_key+".gif' usemap='#map1' /><map name='map1' id='map1'><area shape='rect' coords='415,2,438,28' onclick='closeSWT();' alt='关闭' style='display:block;cursor:pointer;_width:40px;_height:40px;'/><area shape='rect' coords='205,183,300,217' href='javascript:onSWT(\"mfyy\");' alt='免费预约' /><area shape='rect' coords='316,184,410,217' href='javascript:onSWT(\"zxzx\");' alt='在线咨询' /></map></div>");
	
	
})();
/*************修改日期2014.9.16******************/

//商�?��?右侧和底部
(function(){
	var _path = window.location.pathname, _key = '', _color = '',_colorbg = '';
	if(_path == '/indexxx.html' || _path == '/indexxx.html' || _path == '/index2014xxx.html'){    //首页商�?��?
		
		
		
	}else{
		if(_path.indexOf('/2013/yixuemeifu/') != -1 || _path.indexOf('/2013/zhengxingredian/shuinenjifu/') != -1)              	//�?�肤科
		{
			var _key   = 'pf';
			var _color = '#06727c';
			var _colorbg = '#04909f';
		}else if(_path.indexOf('/2013/weizhengxing/') != -1 || _path.indexOf('/2013/zhengxingredian/weidiaosumian/') != -1 || _path.indexOf('/2013/zhengxingredian/nianqingkangshuailao/') != -1) 		//� 创科
		{
			var _key   = 'wc';
			var _color = '#043055';
			var _colorbg = '#004276';
		}else if(_path.indexOf('/2013/meiyameirong/') != -1 || _path.indexOf('/2013/zhengxingredian/yachimeirong/') != -1)		//牙科
		{
			var _key   = 'yk';
			var _color = '#40771c';
			var _colorbg = '#004276';
		}else{
			var _key   = 'index';
                var _color = '#252525';
                var _colorbg = '#91253c';
		}
		 
		var _css = ['<style>',
					'.swt-right-bg{ width:56px; position:fixed; right:0px; top:150px;_position:absolute;_top:expression(eval(document.documentElement.scrollTop+200)); z-index:1000000;}',
					'.swt-right{ position:relative;}',
					'.swt-right ul{ background:' + _color + ';}',
					'.swt-right li{ width:56px; height:76px; overflow:hidden; background:url(/templets/alnew/swt2014/swt-right-' + _key + '1.jpg) 0px 0px no-repeat;transition: all 0.3s linear 0s; line-height:0px; font-size:0px; font-size:0px; line-height:0px;}',
					'.swt-right li:hover{ background:url(/templets/alnew/swt2014/swt-right-' + _key + '2.jpg) 0px 0px no-repeat;}',
					'.swt-right li a{ width:56px; height:76px;display:block; background:url(/templets/alnew/swt2014/swt-right-' + _key + '1.jpg) 0px 0px no-repeat;transition: all 0.3s linear 0s;}',
					'.swt-right li:hover a{ background:url(/templets/alnew/swt2014/swt-right-' + _key + '2.jpg) 0px 0px no-repeat;}',
					'#swt-right-a1{ background-position:0px -76px;}',
					'.swt-right li:hover #swt-right-a1{ background-position:0px -76px;}',
					'#swt-right-a2{ background-position:0px -152px;}',
					'.swt-right li:hover #swt-right-a2{ background-position:0px -152px;}',
					'#swt-right-a3{ background-position:0px -228px;}',
					'.swt-right li:hover #swt-right-a3{ background-position:0px -228px;}',
					'#swt-right-a4{width:56px; height:76px;display:block; background:url(/templets/alnew/swt2014/swt-right-' + _key + '1.jpg) 0px -303px no-repeat;transition: all 0.3s linear 0s;}',
					'.swt-right li:hover #swt-right-h{ display:block;}',
					'#swt-right-h{ width:142px; height:335px; background:url(/templets/alnew/swt2014/swt-right-' + _key + '3.png) no-repeat; position:absolute; left:-142px; top:0px; display:none; }',
					'#swt-right-h a{ width:142px; height:335px; display:block; background:none; position:absolute; left:0xp; top:0px;}',
					'#swt-right-dh{width:256px;_width:56px; height:75px; position:absolute; top:152px; left:0px;cursor:pointer;transition: all 0.3s linear 0s; overflow:hidden;}',
					'#swt-right-a5:hover #swt-right-dh{ width:256px;left:-200px;}',
					'#swt-right-a5 span{ width:56px; height:75px; display:block; float:left; background:url(/templets/alnew/swt2014/swt-right-' + _key + '-dh.gif) 0px 0px no-repeat;transition: all 0.3s linear 0s;}',
					'#swt-right-a5:hover span{ width:56px; height:75px; background:url(/templets/alnew/swt2014/swt-right-' + _key + '-dh2.jpg) 0px 0px no-repeat;}',
					'#swt-right-dh div{ width:200px; height:62px; padding-top:13px; float:left; background:'+ _color +';}',
					'.swt-right-dh-wb{ width:117px; height:50px; line-height:50px; float:left; border:none; font-family:"微软雅黑","黑体"; font-size:16px; color:#333; background:url(/templets/alnew/swt2014/swt-right-index-dh3.png) no-repeat;}',
					'.swt-right-dh-nn{ width:75px; height:50px; float:left; border:none; cursor:pointer; background:url(/templets/alnew/swt2014/swt-right-index-dh3.png) -117px 0px no-repeat;transition: all 0.3s linear 0s;}',
					'.swt-right-dh-nn:hover{ width:75px; height:50px; float:left; border:none; background:url(/templets/alnew/swt2014/swt-right-index-dh4.png) -117px 0px no-repeat;}',
					'.swt-right-dh-nn:hover{ width:75px; height:50px; float:left; border:none; background:url(/templets/alnew/swt2014/swt-right-index-dh4.png) -117px 0px no-repeat;}',
					'a{ text-decoration:none;}.swt-foot{width:100%;height:59px; padding-top:4px; background:url(/templets/alnew/swt2014/swt-foot-bg.png);z-index:10001;position: fixed;bottom:0px;display:none;}.swt-foot-main{width:870px; margin:0px auto; overflow:hidden; height:61px;}.swt-foot-main-left{width:74px; padding-bottom:5px; overflow:hidden; float:left;}.swt-foot-main span{ display:block; float:left; height:61px; overflow:hidden;}.swt-foot-main-right{ float:left; padding-left:20px;width:580px;}.swt-foot-main-right a{width:125px; height:56px; float:left; display:block; overflow:hidden; position:relative; margin-right:20px;color:#fff; font-size:12px;}.swt-foot-main-right a span{width:100%; display:block; height:20px; background:url(/templets/alnew/swt2014/swt-foot-bg.png); position:absolute;bottom:0px;text-align:center;line-height:20px;}.swt-foot-zx{width:80px; display:block; float:left;}.swt-foot-zx a{width:80px; height:25px; display:block; float:left; line-height:25px; text-align:center; font-family:"微软雅黑","Microsoft YaHei"; font-size:14px; margin-bottom:5px;}.swt-zixun1{background-color:'+ _colorbg +';color:#fff;}.swt-zixun1:hover{color:#fff;}.swt-zixun2{color:#1b1b1b;background-color:#fff;}',
				'</style>'].join(''); 
		
		document.write(_css);
		delete _css;
		
		var  o = ['<div class="swt-right-bg">',
						'<div class="swt-right">',
						'<ul>',
							'<li id="swt-right-yhxx">',
								'<div id="swt-right-h">',
									'<a href="http://cqalyy.com/zhuanti/wxgz/index.html" target="_blank"></a>',
									'<div style="position:absolute; width:38px; height:24px; left:57px; top:72px; font-size:20px;text-align:center; line-height:24px; font-size:18px; font-weight:bold; color:#fff;" id="djs-swt-right"></div>',
								'</div>',
							'</li>',
							'<li><a id="swt-right-a1" href="http://kht.zoosnet.net/LR/Chatpre.aspx?id=KHT59947941" target="_blank"></a></li>',
							'<li id="swt-right-a5">',
								'<div id="swt-right-dh">',
									'<span></span>',
									'<div>',
										'<form id="f" target="sf" action="http://manage.adcall.com.cn/WebCall/CallBack.jsp" name="cb" method="post">',
										    '<input type="hidden" value="tsCB" name="S"></input>',
											'<input type="hidden" value="www.cqalyy.com" name="surl"></input>',
											'<input type="hidden" name="uid" value="9002900475">',
											'<input class="swt-right-dh-wb" class="ip" name="cb_num"  value="输入您�?�号� �..." onfocus="if(this.value==\'输入您�?�号� �...\'){this.value=\' \';this.style.color=\'#737373\'}" onblur="if(this.value==\' \'){this.value=\'输入您�?�号� �...\';this.style.color=\'#737373\'}" style="color: rgb(115, 115, 115);"  onMouseOver="javascript:this.focus();" autocomplete="off"/>',
											'<input type="submit" class="swt-right-dh-nn" value="" />',
										'</form>',
									'</div>',
									'<IFRAME width=0 height=0 frameborder=0 scrolling=no name="sf" src="about:blank"></IFRAME>',
								'</div>',
							'</li>',
							'<li><a id="swt-right-a2" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800009935&aty=0&a=0&curl=&ty=1" target="_blank"></a></li>',
							'<li><a id="swt-right-a3" href="/html/lylx/" target="_blank"></a></li>',
						'</ul>',
						'<span><a id="swt-right-a4" href="javascript:scroll(0,0);"></a></span>',
						'</div>',						
					'</div>',
					'</div>'].join('');
		document.write(o);
		delete o;
		
		
		
		
	}
})();

<!--document.writeln("<div id=\"lovexin12\" style=\"z-index: 21483647; position: fixed !important; right: 2px; top: 40px;\"><div id=\"swtColse\" style=\"width:20px; height:15px; top:0px; right:0px; position:absolute;background-image: url(http://kht.zoosnet.net/LR/closeimg/7.gif);background-repeat: no-repeat;background-position: right top;cursor:pointer;\" onclick=\"lovexin12.style.visibility='hidden'\"></div><img  src=\"http://cqalyy.com/swt/right_tp.gif\" style=\"cursor:pointer\" onclick=\"openZoosUrl('chatwin');\"></div> ");-->
function checkTel(_obj){
	var _tel = _obj.sf.value;
	var zz   = /^1[3|4|5|7|8][0-9]\d{8}$/;
	if(!zz.test(_tel)){
		alert('请填写正确�?�手机号� �！');
		return false;
	}
	return true;
}



$(function(){
	$("#swt-left-menu-a1, #swt-left-menu-a2").hover(function(){
		$(this).children(".swt-left-c-bg").stop().animate({width:'170px'},{duration: 300, easing:"swing"});
	},function(){
		
		$(this).children(".swt-left-c-bg").stop().animate({width:'0px'},300);
	});
	
	$(".closect").click(function(){
		
		$(this).parents(".swt-left-c-bg").stop().animate({width:'0px'},300);
	});
	
	$(".swt-left-ico span").click(function(){
		
		if(!$(this).hasClass('hover')){
			$(this).attr("class","hover");
			$(this).parent(".swt-left-ico").animate({backgroundPositionX:'-5px'},300);
			$(".swt-left-menu").animate({left:'-39px'},300);
			
		}else{
			$(this).attr("class","leave");
			$(this).parent(".swt-left-ico").animate({backgroundPositionX:'-53px'},300);
			$(".swt-left-menu").animate({left:'0px'},300);
		}
	});
	
	var oWin  = document.getElementById("swt-center");  
	var bDrag = false;  
	var disX  = disY = 0;  
	var _top  = oWin.style.top;
	var _left = oWin.style.left;
	
	oWin.onmousedown = function (e){    
		bDrag = true;
		e = e||event;
		disX = e.clientX - oWin.offsetLeft;  
		disY = e.clientY - oWin.offsetTop;    
		return false  
	};  
	document.onmousemove = function (e){ 
		if (!bDrag)  return; 
		e = e||event;
		var iL = e.clientX - disX;  
		var iT = e.clientY - disY; 
		//�??图层范围�?在浏览器窗口内  
		var maxL = document.documentElement.clientWidth  - oWin.offsetWidth;  
		var maxT = document.documentElement.clientHeight  - oWin.offsetHeight;    
		iL = iL < 0 ? 0 : iL;  
		iL = iL > maxL ? maxL : iL;     
		iT = iT < 0 ? 0 : iT;  
		iT = iT > maxT ? maxT : iT;  
            
		//oWin.style.marginTop = oWin.style.marginLeft = 0;  
		oWin.style.left = (iL - parseInt(oWin.style.marginLeft)) + "px";  
		oWin.style.top = (iT - parseInt(oWin.style.marginTop)) + "px";    
		return false  
	};  
	document.onmouseup = function (){  
		bDrag = false; 
		
		oWin.style.top = _top;
		oWin.style.left = _left;
	};
});
/* (function(){
	if(window.location.pathname.indexOf('/2013/weizhengxing/') > -1){
		document.write('<div style="position:fixed; bottom:0px; left:0px;z-index:10002;" id="left-tuomao"><img src="/images2013/abf.jpg" usemap="#tuomao" /><map id="tuomao" name="tuomao"><area shape="rect" href="javascript:closel();" coords="306,0,330,20"/><area shape="rect" coords="190,146,305,184" href="javascript:onSWT();" /></map></div>');
	}
})(); */

function closel(){
	$("#left-tuomao").animate({left:'-330px'},500);
	clearInterval(_auto);
	_auto = setInterval(autoTuomao,10000);
}
var _auto = setInterval('autoTuomao()',10000);

function autoTuomao(){
	
	$("#left-tuomao").animate({left:'0'},500);
}


//电话预约

(function(){
document.write('<style>.index-phone input,select{padding:0px; margin:0px; border:none;outline:none}.index-phone{width:805px; height:525px; overflow:hidden; border-radius:3px; background:#f5f4f5; position:fixed; _position:absolute;top:-50%; margin-top:-350px !important; left:50% !important; margin-left:-402px !important;transition: all 0.8s linear 0s; z-index:1000000000;}.phone-span{width:28px; height:28px; display:block; float:right; margin:10px; background:url(/templets/alnew/swt2014/phone-public.png) 0px 0px no-repeat; cursor:pointer;}.index-phone-c{padding:10px 60px; overflow:hidden; float:left; width:685px;}.index-phone-left{width:430px; float:left;}.index-phone-left h3{display:block; margin-bottom:30px;text-align: center;}.index-phone-left-l{ float:left; padding-left:10px; height:255px;width:80px;}.index-phone-left-l p{ font-size:16px; line-height:38px;}.index-phone-left-r{ float:right;width:333px; height:255px;}.mainr-t{ width:330px; height:125px;}.mainr-td{ width:330px; height:34px; position:relative;margin-bottom:10px}.mainr-td:hover .fd-nr{ display:block;}.index-phone .index-phone-f_tel{ width:315px; height:23px; line-height:26px;color:#737373; background:url(/templets/alnew/swt2014/phone-public.png) 0px -44px no-repeat; padding:5px;padding-left: 10px;}.fd-nr{ width:217px; height:60px; position:absolute; left:0px; bottom:32px;_bottom:32px; background:url(/templets/alnew/swt2014/fd-nr-bg.png) no-repeat;display:none;}.f_sd{ width:330px; height:32px; line-height:31px;color:#737373; background:url(/templets/alnew/swt2014/phone-public.png) 0px -44px no-repeat; padding:5px;}.mainr-p{ width:330px; height:25px;color:#91253b; margin-top:10px;}.mainr-p i{width:15px; height:15px; display:block; float:left; background:url(/templets/alnew/swt2014/phone-public.png) -170px 0px no-repeat; margin-top:4px; margin-right:5px;}.mainr-n{ width:330px; overflow:hidden; padding-bottom:20px; border-bottom:1px dashed #ccc;}.mainr-n span{ float:left; margin-right:50px; display:block;}.mainr-n s{ display:block; float:left;}.input2{ width:107px; height:36px; background:url(/templets/alnew/swt2014/phone-public.png) -187px 0px no-repeat; border:none; float:left; cursor:pointer;}.comr-c-form3{ width:77px;float:left;color:#a9a9a9; font-size:18px; line-height:36px; background:none; cursor:pointer;}.mainr-n s i{width:30px; height:30px; display:block; float:left; background:url(/templets/alnew/swt2014/phone-public.png) -36px 0px; margin-top:3px;}.index-phone-left-b{ margin-top:20px; height:45px;}.index-phone-left-b a{width:145px; display:block; float:left; margin-right:10px;height:42px;text-decoration:none;color:#7c8389;}.index-phone-left-b a:hover{color: #91253b;}.index-phone-left-b a span{width:39px; height:41px; display:block; background:url(/templets/alnew/swt2014/phone-public.png) no-repeat; float:left;}.index-phone-left-b a.phone-zixun1 span{ background-position:-72px 0px;}.index-phone-left-b a.phone-zixun2 span{ background-position:-123px 7px;}.index-phone-left-b a s{ font-size:18px; line-height:40px; padding-left:5px; display:block; float:left; text-decoration:none;}.phone-p{ display:block;width:100%; float:left; text-align:center;color:#a9a9a9; font-size:12px; font-family:"宋体"; line-height:24px;;}.phone-p a{color:#a9a9a9;text-decoration:none;font-family:"宋体"; padding:1px 2px;}.phone-p a:hover{color:#91263a;}.index-phone-right{ float:right;width:201px;}.ad{ width:20px; height:20px; display:block; float:left;-webkit-transition: -webkit-transform 0.4s ease; -moz-transition: -moz-transform 0.4s ease-out;-ms-transition: -moz-transform 0.4s ease-out;-o-transition: -moz-transform 0.4s ease-out;transition: transform 0.4s ease-out;background:url(/templets/alnew/swt2014/ico.jpg) -36px 0px no-repeat; -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);transform: rotate(360deg);}.top-main{top:30%; margin-top:-150px !important; left:50% !important; margin-left:-402px !important;}#tel-float-div{width:100%; height:100% !important;_height:650px; background-color:#000; z-index:100000; display:none;_position:absolute; top:0px; left:0px; filter:alpha(opacity=90); -moz-opacity:0.9; opacity:0.9;position: fixed;}</style><div class="index-phone" id="index-phone"><span class="phone-span" id="phone-span"></span><div class="index-phone-c"><div class="index-phone-left"> <h3><img src="/templets/alnew/swt2014/phone-logo.jpg" /></h3><div class="index-phone-left-l"><p>您�?�号� �:</p><p>�?话时段:</p></div><div class="index-phone-left-r"><form  id="f" target="sf" action="http://manage.adcall.com.cn/WebCall/CallBack.jsp" name="cb" onsubmit="return chk(this);return false;" ><div class="mainr-t"><div class="mainr-td"><input type="hidden" value="tsCB" name="S"></input><input type="hidden" value="www.cqalyy.com" name="surl"></input><input type="hidden" value="9002900475" name="uid"></input><input class="index-phone-f_tel"  id="tel" name="cb_num"  autocomplete="off" type="text"  autocomplete="off" type="text" value="请输入您自己�?�电话号� �！" onfocus="if(this.value==\'请输入您自己�?�电话号� �！\'){this.value=\' \';this.style.color=\'#737373\'}" onblur="if(this.value==\' \'){this.value=\'请输入您自己�?�电话号� �！\';this.style.color=\'#737373\'}" style="color: rgb(115, 115, 115);"><div class="fd-nr"></div></div><div><select class="f_sd" name="f_sd" size="1"><option value="不限时段">不限时段</option><option value="中午12:00-13:30">中午12:00-13:30</option><option value="下午18:00-21:00">下午18:00-21:00</option><option value="周六或者周日">周六或者周日</option></select><input name="act" type="hidden" id="act" value="save"></div><div class="mainr-p"><i></i>您�?��?话全程免费并�? 密，请放心倾听！</div></div><div class="mainr-n"><span><input name="" type="submit" class="input2" value=""></span><s id="phone-zq"><i></i><input class="comr-c-form3" name="" type="reset" value="重新输入"></s></div></form><script>document.getElementById(\'phone-zq\').onclick = function(){this.getElementsByTagName("i")[0].className = "ad";setTimeout(function(){	 document.getElementById(\'phone-zq\').getElementsByTagName("i")[0].className = " ";  onMouseOver="javascript:this.focus();"	},400);}</script><div class="index-phone-left-b"><a onclick="javascript:window.open(\'http://crm2.qq.com/page/portalpage/wpa.php?uin=800009935&aty=0&a=0&curl=&ty=1=\'+document.location, \'_blank\', \'toolbar=no,scrollbars=no,menubar=no,status=no\');" class="phone-zixun1" target="_blank"><span></span><s>QQ咨询</s></a><a href="http://kht.zoosnet.net/LR/Chatpre.aspx?id=KHT59947941&e=tel;" target="_blank" class="phone-zixun2"><span></span><s>在线咨询</s></a></div></div><p class="phone-p">�?疗范围�?<a href="/html/zc/" target="_blank">痔疮</a><a href="/html/nz/" target="_blank">内痔</a><a href="/html/wz/" target="_blank">外痔</a><a href="/html/hhz" target="_blank">混合痔</a><a href="/html/dbcx" target="_blank">便血</a><a href="/html/bm/" target="_blank">便秘</a><a href="/html/jcy" target="_blank">结� �?</a><a href="/html/glie" target="_blank">肛裂</a><a href="/html/gl" target="_blank">肛瘘</a><a href="/html/gznz/" target="_blank">肛周脓肿</a> 等</p><p class="phone-p">医院地址�?<a href="/html/lylx/" target="_blank">重庆市九龙坡区奥体中心（大公馆车站旁）</a></p></div><div class="index-phone-right"><img src="/templets/alnew/swt2014/phone-left.jpg" /></div></div></div><div id="tel-float-div"></div>');
})();

//	function chk(_obj){
//		var _tel = _obj.f_tel.value;
//		var zz   = /^1[3|4|5|7|8][0-9]\d{8}$/;
//		if(_tel == '请输入您自己�?�电话号� �！' || _tel == '' || !zz.test(_tel)){
//		alert('请填写正确�?�手机号� �！');
//		return false;
//		}
//		return true;
//	}
	$(function(){
		$('.phone-tel').click(function(){
			//$('.index-phone').addClass('top-main');
			$('.index-phone').stop().animate({'top':'60%'},800);
			$('#tel-float-div').show();
			return false;
		})

		$('#phone-span').click(function(){
			//$('.index-phone').removeClass('top-main');
			$('.index-phone').stop().animate({'top':'-50%'},800);
			$('#tel-float-div').hide();
			
		})
	})



	
function closeTuomao(){
	 $("#left-tuomao").animate({opacity:'hide'},300);
		 clearInterval(_auto);
		 _auto = setInterval(autoTuomao,10000);
	}
var _auto = setInterval('autoTuomao()',10000);

function autoTuomao(){
 
 $("#left-tuomao").animate({opacity:'show'},300);
}

 
 //品牌页面左侧悬浮
(function(){
	
	if(document.getElementById('main-float')){
		
		function posTop(obj) {
			var Top = 0;
			while (obj) {
				Top += obj.offsetTop;
				obj = obj.offsetParent;
			}
			return Top;
		}
		var _f = posTop(document.getElementById("main-float"));
		
		$("#main1").after("<div style='width:1000px; margin:0 auto;' id='mainls'>&nbsp;</div>");
		
		
		$(function(){
			
			$(window).bind('scroll', function(){
				var _e = posTop(document.getElementById("mainls"));
				var _u = document.documentElement.scrollTop || document.body.scrollTop;
				
				if(_u > _f){
				
					if(_u < _e - 806){
						
						$("#main-float").removeClass('main1-l2-abs').addClass('main1-l2-fixed');
					}else{
						
						$("#main-float").removeClass('main1-l2-fixed').addClass('main1-l2-abs');
					}
					
				}else{
					$("#main-float").removeClass('main1-l2-fixed');
				}
				
			})
		});
	}
})();