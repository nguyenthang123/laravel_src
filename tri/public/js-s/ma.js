;$(document).ready(function(){
    var city = $(".city"),
        syTec = $(".syTec li"),
        syDocs = $(".syDocsWarp li"),
        footPpt = $(".footPpt li");
    $(".headLs").hover(function(){
        city.stop(true).slideDown();
    },function(){
        city.stop(true).slideUp();
    });
 
    syTec.each(function(){
        var me = $(this);
        me.hover(function(){
            me.addClass("active").siblings().removeClass("active");
        });
    });

}); 
 

	
	(function(){
		$(function(){
			if (document.getElementById('hos_con')) {
			var scrollPic_01 = new ScrollPic();
				scrollPic_01.scrollContId   = "hos_con"; 
				scrollPic_01.arrLeftId      = "hos_rb"; 
				scrollPic_01.arrRightId     = "hos_lb";
				scrollPic_01.frameWidth     = 1020;
				scrollPic_01.pageWidth      = 256; 
				scrollPic_01.speed          = 20; 
				scrollPic_01.space          = 20;
				scrollPic_01.autoPlay       = false;
				scrollPic_01.autoPlayTime   = 3;
				scrollPic_01.initialize(); 
				  
				setInterval(function (){
					scrollPic_01.rightMouseDown();scrollPic_01.leftEnd();
				},3000);
				if (window.ActiveXObject){
					$('#hos_con  > div > div').css("float",'left');
				}
			}
			

		});
		
	})(jQuery);
	(function(){
		$(function(){
			if (document.getElementById('hos_sb')) {
			var scrollPic_01 = new ScrollPic();
				scrollPic_01.scrollContId   = "hos_sb"; 
				scrollPic_01.arrLeftId      = "hos_sbrb"; 
				scrollPic_01.arrRightId     = "hos_sblb";
				scrollPic_01.frameWidth     = 1020;
				scrollPic_01.pageWidth      = 333; 
				scrollPic_01.speed          = 20; 
				scrollPic_01.space          = 20;
				scrollPic_01.autoPlay       = false;
				scrollPic_01.autoPlayTime   = 3;
				scrollPic_01.initialize(); 
				  
				setInterval(function (){
					scrollPic_01.rightMouseDown();scrollPic_01.leftEnd();
				},3000);
				if (window.ActiveXObject){
					$('#hos_sb  > div > div').css("float",'left');
				}
			}
			

		});
		
	})(jQuery);
$(document).ready(function(){
	//专�?设备页面幻灯
	if (document.getElementById("sbgun")){
		$("#sbgun").KinSlideshow({
			isHasTitleFont:false,
			isHasTitleBar:false,
		    btn:{btn_fontHoverColor:"#ffff"}
		});
	}
	//滑�?�门
	//典�?�病例医生
	$('.dx_scroll li').each(function(index){
		$(this).mouseover(function(){ 
			$('.dx_scroll li').removeClass('dx_dq').eq(index).addClass('dx_dq');
			$('.dx_bor .dx_borl.fl').hide().eq(index).show();
		})
	})
	//专�?设备页面滑�?�门
	$('.eqp_dx ul li').each(function(index){
		$(this).mouseover(function(){ 
			$('.eqp_dx ul li').removeClass('eqp_currs').eq(index).addClass('eqp_currs');
			$('.eqp_huan table').hide().eq(index).show();
		})
	})

    $('.lf_srright.fl li').each(function(index){//特色疗法页滑�?�门
		$(this).mouseover(function(){ 
			$('.lf_srright.fl li').removeClass('lf_srcurr').eq(index).addClass('lf_srcurr');
			$('.lf_srl .lf_srleft.fl').hide().eq(index).show();
		})
	})
	$('.leg_scroll.fl ul li').each(function(index){//图说疾病页滑�?�门
		$(this).mouseover(function(){ 
			$('.leg_scroll.fl ul li').removeClass('leg_scrcurr').eq(index).addClass('leg_scrcurr');
			$('.leg_scrbig.fl a img').hide().eq(index).show();
		})
	})
	//在线咨询
	$('.online_order .doc_name li').each(function(index){
	    $('.online_order .doc_name li:eq(0)').removeClass('doc_out').addClass('doc_on');
		$('.online_order .doc_text:eq(0)').css('display','block');
		$(this).mouseover(function(){ 
			$('.online_order .doc_name li').removeClass('doc_on').addClass('doc_out').eq(index).addClass('doc_on').removeClass('doc_out');
			$('.online_order .doc_text').hide().eq(index).show();
		})
	})
	//免费�?拨� � �经过换背景
	$('.telback').hover(function(){
			$(this).css({backgroundPosition:'0 -138px'});
		},function(){
			$(this).css({backgroundPosition:'0 0'});
		});
	//来院路线
	$('.tp_l.fl ul li').each(function(index){
		$(this).mouseover(function(){ 
			$('.tp_l.fl ul li').removeClass('lux_curr').eq(index).addClass('lux_curr');
			$('.lux_box .lux_tag').hide().eq(index).show();
		})
	})
	//微�?医保�?锁
	$('#liansuo,#hh').hover(function(){
        $('#hh').toggle();
    });
	//主导航
	$('div.d_nav>ul>li').hover(function(i){
		$(this).addClass('hot').children('div').show();
	},function(){
		$(this).removeClass('hot').children('div').hide();
	});
        $('div.banner').hover(function(){
            $('.banLeft, .banRight').fadeIn();
        },function(){
            $('.banLeft, .banRight').fadeOut();
        });
		
	

     	$('div.docyy ').hover(function(){
            $('.docyyLeft, .docyyRight').fadeIn();
        },function(){
            $('.docyyLeft, .docyyRight').fadeOut();
        });
		
	
	
});
//跑马灯
function Marquee()
{
	this.ID = document.getElementById(arguments[0]);
	this.Direction = this.Width = this.Height = this.DelayTime = this.WaitTime = this.CTL = this.StartID = this.Stop = this.MouseOver = 0;
	this.Step = 1;
	this.Timer = 30;
	this.DirectionArray = {"top":0 , "up":0 , "bottom":1 , "down":1 , "left":2 , "right":3};
	if(typeof arguments[1] == "number" || typeof arguments[1] == "string")this.Direction = arguments[1];
	if(typeof arguments[2] == "number")this.Step = arguments[2];
	if(typeof arguments[3] == "number")this.Width = arguments[3];
	if(typeof arguments[4] == "number")this.Height = arguments[4];
	if(typeof arguments[5] == "number")this.Timer = arguments[5];
	if(typeof arguments[6] == "number")this.DelayTime = arguments[6];
	if(typeof arguments[7] == "number")this.WaitTime = arguments[7];
	if(typeof arguments[8] == "number")this.ScrollStep = arguments[8];
	this.ID.style.overflow = this.ID.style.overflowX = this.ID.style.overflowY = "hidden";
	this.ID.noWrap = true;
	this.IsNotOpera = (navigator.userAgent.toLowerCase().indexOf("opera") == -1);
	if(arguments.length >= 7)this.Start();
}

Marquee.prototype.Start = function()
{
	if(this.ID == -1)return;
	if(this.WaitTime < 800)this.WaitTime = 800;
	if(this.Timer < 20)this.Timer = 20;
	if(this.Width == 0)this.Width = parseInt(this.ID.style.width);
	if(this.Height == 0)this.Height = parseInt(this.ID.style.height);
	if(typeof this.Direction == "string")this.Direction = this.DirectionArray[this.Direction.toString().toLowerCase()];
	this.HalfWidth = Math.round(this.Width / 2);
	this.HalfHeight = Math.round(this.Height / 2);
	this.BakStep = this.Step;
	this.ID.style.width = this.Width + "px";
	this.ID.style.height = this.Height + "px";
	if(typeof this.ScrollStep != "number")this.ScrollStep = this.Direction > 1 ? this.Width : this.Height;
	var templateLeft = "<table cellspacing='0' cellpadding='0' style='border-collapse:collapse;display:inline;'><tr><td noWrap=true style='white-space: nowrap;word-break:keep-all;'>MSCLASS_TEMP_HTML</td><td noWrap=true style='white-space: nowrap;word-break:keep-all;'>MSCLASS_TEMP_HTML</td></tr></table>";
	var templateTop = "<table cellspacing='0' cellpadding='0' style='border-collapse:collapse;'><tr><td>MSCLASS_TEMP_HTML</td></tr><tr><td>MSCLASS_TEMP_HTML</td></tr></table>";
	var msobj = this;
	msobj.tempHTML = msobj.ID.innerHTML;
	if(msobj.Direction <= 1)
	{
		msobj.ID.innerHTML = templateTop.replace(/MSCLASS_TEMP_HTML/g,msobj.ID.innerHTML);
	}
	else
	{
		if(msobj.ScrollStep == 0 && msobj.DelayTime == 0)
		{
			msobj.ID.innerHTML += msobj.ID.innerHTML;
		}
		else
		{
			msobj.ID.innerHTML = templateLeft.replace(/MSCLASS_TEMP_HTML/g,msobj.ID.innerHTML);
		}
	}
	var timer = this.Timer;
	var delaytime = this.DelayTime;
	var waittime = this.WaitTime;
	msobj.StartID = function(){msobj.Scroll()}
	msobj.Continue = function()
				{
					if(msobj.MouseOver == 1)
					{
						setTimeout(msobj.Continue,delaytime);
					}
					else
					{	clearInterval(msobj.TimerID);
						msobj.CTL = msobj.Stop = 0;
						msobj.TimerID = setInterval(msobj.StartID,timer);
					}
				}

	msobj.Pause = function()
			{
				msobj.Stop = 1;
				clearInterval(msobj.TimerID);
				setTimeout(msobj.Continue,delaytime);
			}

	msobj.Begin = function()
		{
			msobj.ClientScroll = msobj.Direction > 1 ? msobj.ID.scrollWidth / 2 : msobj.ID.scrollHeight / 2;
			if((msobj.Direction <= 1 && msobj.ClientScroll <= msobj.Height + msobj.Step) || (msobj.Direction > 1 && msobj.ClientScroll <= msobj.Width + msobj.Step))			{
				msobj.ID.innerHTML = msobj.tempHTML;
				delete(msobj.tempHTML);
				return;
			}
			delete(msobj.tempHTML);
			msobj.TimerID = setInterval(msobj.StartID,timer);
			if(msobj.ScrollStep < 0)return;
			msobj.ID.onmousemove = function(event)
						{
							if(msobj.ScrollStep == 0 && msobj.Direction > 1)
							{
								var event = event || window.event;
								if(window.event)
								{
									if(msobj.IsNotOpera)
									{
										msobj.EventLeft = event.srcElement.id == msobj.ID.id ? event.offsetX - msobj.ID.scrollLeft : event.srcElement.offsetLeft - msobj.ID.scrollLeft + event.offsetX;
									}
									else
									{
										msobj.ScrollStep = null;
										return;
									}
								}
								else
								{
									msobj.EventLeft = event.layerX - msobj.ID.scrollLeft;
								}
								msobj.Direction = msobj.EventLeft > msobj.HalfWidth ? 3 : 2;
								msobj.AbsCenter = Math.abs(msobj.HalfWidth - msobj.EventLeft);
								msobj.Step = Math.round(msobj.AbsCenter * (msobj.BakStep*2) / msobj.HalfWidth);
							}
						}
			msobj.ID.onmouseover = function()
						{
							if(msobj.ScrollStep == 0)return;
							msobj.MouseOver = 1;
							clearInterval(msobj.TimerID);
						}
			msobj.ID.onmouseout = function()
						{
							if(msobj.ScrollStep == 0)
							{
								if(msobj.Step == 0)msobj.Step = 1;
								return;
							}
							msobj.MouseOver = 0;
							if(msobj.Stop == 0)
							{
								clearInterval(msobj.TimerID);
								msobj.TimerID = setInterval(msobj.StartID,timer);
							}
						}
		}
	setTimeout(msobj.Begin,waittime);
}

Marquee.prototype.Scroll = function()
{
	switch(this.Direction)
	{
		case 0:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.DelayTime > 0)
			{
				this.ID.scrollTop += this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollTop >= this.ClientScroll)
				{
					this.ID.scrollTop -= this.ClientScroll;
				}
				this.ID.scrollTop += this.Step;
			}
		break;

		case 1:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.DelayTime > 0)
			{
				this.ID.scrollTop -= this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollTop <= 0)
				{
					this.ID.scrollTop += this.ClientScroll;
				}
				this.ID.scrollTop -= this.Step;
			}
		break;

		case 2:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.DelayTime > 0)
			{
				this.ID.scrollLeft += this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollLeft >= this.ClientScroll)
				{
					this.ID.scrollLeft -= this.ClientScroll;
				}
				this.ID.scrollLeft += this.Step;
			}
		break;

		case 3:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.DelayTime > 0)
			{
				this.ID.scrollLeft -= this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollLeft <= 0)
				{
					this.ID.scrollLeft += this.ClientScroll;
				}
				this.ID.scrollLeft -= this.Step;
			}
		break;
	}
}


function changeURL(winName, newURL){
	var wn=winName+Math.round(Math.random()*1000);
	window.open(newURL, wn);
//win.location.href = newURL;
}

function dateshow(){ 
	var da=new Date();
	da=da.getYear()+"-"+(da.getMonth()+1)+"-"+da.getDate();
	execScript('dim   n   :   n   =   DateAdd("d",   -3,   "'+   da   +'")','vbscript');   
	var   d   =   new   Date(n);   
	document.write(d.getFullYear()   +   "-"   +   (d.getMonth()   +   1)   +   "-"   +   d.getDate()   +   "")   
}
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"door-nav-current":"";
		con.style.display=i==cursel?"block":"none";
	}
}
$(function(){
    $(".boxthree_qh_nav li:first-child").addClass("hover");
    $(".tabbox2div:not(:first-child)").hide();
    $(".boxthree_qh_nav li").each(function(i){
        $(".boxthree_qh_nav li").eq(i).mouseover(function(){
            $(this).addClass("hover").siblings("li").removeClass("hover");
            $(".zxnr").eq(i).show().siblings(".zxnr").hide();
        });
    });
});
// JavaScript Document
function Tab(id,maxid,name,cssed,cssno) {
	for(var i = 1; i <= maxid; i++) {
		if(id == i) {
			document.getElementById(name + id).className = cssed;
			document.getElementById(name + id + "c").style.display = "block";
		} else {
			document.getElementById(name + i).className = cssno;
			document.getElementById(name + i + "c").style.display = "none";
		}
	}
}
$(function(){

	// floorCon-slide
	$(".floorCon-slide .floorConSlideImgNav li span").css({opacity:0.95})
	$(".floorCon-slide .floorConSlideImgNav li.hover").find("span").css({left:0})//初始
	$(".floorCon-slide .floorConSlideImgNav li").mouseover(function(){
		if($(this).hasClass("hover")){return}//不处理满足�?�态�?�
		  var imgleft=$(this).index()*460*(-1)+"px";

		  $(this).addClass("hover").find("span").stop().animate({left:0},400)
		  $(this).siblings().removeClass("hover").find("span").stop().animate({left:"-20px"},600)
		  //图片显示
		  $(this).parent().prev(".floorConSlideImg").stop().animate({left:imgleft},400);
	})

})

/*<!-- bannerjs--->*/
$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});