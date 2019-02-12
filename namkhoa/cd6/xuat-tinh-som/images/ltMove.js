function ltMoveDiv(arr){
	var allMoveBoxli=$(arr.move_box_li).length;
	if(arr.move_irection<=2){
		$(arr.move_box).css("width",arr.width*allMoveBoxli+"px");
	}else{
		$(arr.move_box).css({"width":arr.width+"px","height":arr.height*allMoveBoxli+"px"});
	}
	var autoMove="";
	
	var moveType=arr.type==""?1:arr.type;
	
	if(1==arr.move_irection || 3==arr.move_irection){
		autoMove=setInterval(ltMoveLT,arr.interval_time);
	}if(2==arr.move_irection || 4==arr.move_irection){
		autoMove=setInterval(ltMoveRB,arr.interval_time);
	}
	$(arr.top_box).hover(function(){
		clearInterval(autoMove);
	},function(){
		if(1==arr.move_irection || 3==arr.move_irection){
			autoMove=setInterval(ltMoveLT,arr.interval_time);
		}if(2==arr.move_irection || 4==arr.move_irection){
			autoMove=setInterval(ltMoveRB,arr.interval_time);
		}
	});
	if(""!=arr.prev_btn){
		$(arr.prev_btn).bind("click",ltMoveLT);
	}
	if(""!=arr.next_btn){
		$(arr.next_btn).bind("click",ltMoveRB);
	}
	
	function ltMoveLT(){
		if(arr.move_irection<=2){
			$(arr.move_box).stop().animate({"margin-left":"-"+arr.width+"px"},arr.speed,function(){
				$(this).append($(arr.move_box_li).eq(0));
				$(this).css({"margin-left":"0"});
			});
		}else{
			$(arr.move_box).stop().animate({"margin-top":"-"+arr.height+"px"},arr.speed,function(){
				$(this).append($(arr.move_box_li).eq(0));
				$(this).css({"margin-top":"0"});
			});
		}
		
	}
	function ltMoveRB(){
		if(arr.move_irection<=2){
			$(arr.move_box).prepend($(arr.move_box_li).eq(allMoveBoxli-1));
			$(arr.move_box).css({"margin-left":"-"+arr.width+"px"});
			$(arr.move_box).stop().animate({"margin-left":"0"},arr.speed);
		}else{
			$(arr.move_box).prepend($(arr.move_box_li).eq(allMoveBoxli-1));
			$(arr.move_box).css({"margin-top":"-"+arr.height+"px"});
			$(arr.move_box).stop().animate({"margin-top":"0"},arr.speed);
		}
	}
}

function ltMarquee(arr){
	var mBox=document.getElementById(arr.mOutBox); 
	var mBox1=document.getElementById(arr.mInBox1); 
	var mBox2=document.getElementById(arr.mInBox2); 
	mBox2.innerHTML=mBox1.innerHTML; 

	var MyMar=""; 
	mBox.onmouseover=function(){
		clearInterval(MyMar);
	}; 		
	
	switch(arr.mIrection){
		case "top":
			MyMar=setInterval(mTop,arr.mSpeed);
			mBox.onmouseout=function(){
				MyMar=setInterval(mTop,arr.mSpeed);
			};
			break;
		case "bottom":
			MyMar=setInterval(mBottom,arr.mSpeed);
			mBox.onmouseout=function(){
				MyMar=setInterval(mBottom,arr.mSpeed);
			};
			break;
		case "left":
			MyMar=setInterval(mLeft,arr.mSpeed);
			mBox.onmouseout=function(){
				MyMar=setInterval(mLeft,arr.mSpeed);
			};
			break;
		default:
			MyMar=setInterval(mRight,arr.mSpeed);
			mBox.onmouseout=function(){
				MyMar=setInterval(mRight,arr.mSpeed);
			};
			break;
	}
	
	function mTop(){ 
		if(mBox2.offsetTop-mBox.offsetTop-mBox.scrollTop<=0){
			mBox.scrollTop-=mBox1.offsetHeight;
		}else{ 
			mBox.scrollTop++; 
		} 
	}
	function mBottom(){ 
		if(mBox1.offsetTop-mBox.offsetTop-mBox.scrollTop>=0){
			mBox.scrollTop+=mBox2.offsetHeight;
		}else{
			mBox.scrollTop--;
		}
	} 
	function mLeft(){ 
		if(mBox2.offsetWidth-mBox.scrollLeft<=0){
			mBox.scrollLeft-=mBox1.offsetWidth;
		}else{
			mBox.scrollLeft++;
		}
	}
	function mRight(){ 
		if(mBox.scrollLeft<=0){
			mBox.scrollLeft+=mBox2.offsetWidth;
		}else{
			mBox.scrollLeft--;
		}
	}
}

function ltMoveDiv2(arr){
	var allMoveBoxli=$(arr.move_box_li).length;
	var _index=0;
	
	if(arr.move_irection<=2){
		$(arr.move_box).css("width",arr.width*allMoveBoxli+"px");
	}else{
		$(arr.move_box).css({"width":arr.width+"px","height":arr.height*allMoveBoxli+"px"});
	}
	var autoMove="";
	
	var moveType=arr.type==""?1:arr.type;
	
	if(1==arr.move_irection || 3==arr.move_irection){
		autoMove=setInterval(ltMoveLT,arr.interval_time);
	}if(2==arr.move_irection || 4==arr.move_irection){
		autoMove=setInterval(ltMoveRB,arr.interval_time);
	}
	$(arr.top_box).hover(function(){
		clearInterval(autoMove);
	},function(){
		if(1==arr.move_irection || 3==arr.move_irection){
			autoMove=setInterval(ltMoveLT,arr.interval_time);
		}if(2==arr.move_irection || 4==arr.move_irection){
			autoMove=setInterval(ltMoveRB,arr.interval_time);
		}
	});
	if(""!=arr.prev_btn){
		$(arr.prev_btn).bind("click",ltMoveLT);
	}
	if(""!=arr.next_btn){
		$(arr.next_btn).bind("click",ltMoveRB);
	}
	$(arr.move_tab).find('li').mouseover(function(){
		_index=$(this).index()-1;
		ltMoveLT();
		$(arr.move_tab).find('li').removeClass('hover');
		$(this).addClass('hover');
	});
	
	function ltMoveLT(){
		_index=_index==(allMoveBoxli-arr.page)?0:_index+1;
		if(arr.move_irection<=2){
			$(arr.move_box).stop().animate({"margin-left":"-"+arr.width*_index+"px"});
		}else{
			$(arr.move_box).stop().animate({"margin-top":"-"+arr.height*_index+"px"});
		}
		$(arr.move_tab).find('li').removeClass('hover');
		$(arr.move_tab).find('li').eq(_index).addClass('hover');
	}
	function ltMoveRB(){
		if(arr.move_irection<=2){
			_index=_index==0?(allMoveBoxli-arr.page):_index-1;
			$(arr.move_box).stop().animate({"margin-left":"-"+arr.width*_index+"px"});
		}else{
			_index=_index==0?(allMoveBoxli-arr.page):_index-1;
			$(arr.move_box).stop().animate({"margin-top":"-"+arr.height*_index+"px"});
		}
		$(arr.move_tab).find('li').removeClass('hover');
		$(arr.move_tab).find('li').eq(_index).addClass('hover');
	}
}