/**
 * @classDescription æ¨¡æ‹ŸMarqueeï¼Œæ— é—´æ–­æ»šåŠ¨å†…å®¹
 * @author Aken Li(www.kxbd.com)
 * @date 2009-07-17
 * @DOM
 *  	<div id="marquee">
 *  		<ul>
 *   			<li></li>
 *   			<li></li>
 *  		</ul>
 *  	</div>
 * @CSS
 *  	#marquee {width:200px;height:50px;overflow:hidden;}
 * @Usage
 *  	$('#marquee').Marquee(options);
 * @options
 *		isEqual:true,//æ‰€æœ‰æ»šåŠ¨çš„å…ƒç´ é•¿å®½æ˜¯å¦ç›¸ç­‰,true,false
 *  	loop: 0,//å¾ªçŽ¯æ»šåŠ¨æ¬¡æ•°ï¼Œ0æ—¶æ— é™
 *		direction: 'left',//æ»šåŠ¨æ–¹å‘ï¼Œ'left','right','up','down'
 *		scrollAmount:1,//æ­¥é•¿
 *		scrollDelay:20//æ—¶é•¿
 *		controlBtn:{left:'#goL',right:'#goR'},//æŽ§åˆ¶åŠ é€Ÿæ»šåŠ¨çš„æŒ‰é’®IDï¼Œæœ‰å››ä¸ªå±žæ€§left,right,up,downåˆ†åˆ«å¯¹åº”å››ä¸ªæ–¹å‘
 *		newAmount:4,//åŠ é€Ÿæ»šåŠ¨çš„æ­¥é•¿
 *		eventA:'mouseenter',//é¼ æ ‡äº‹ä»¶ï¼ŒåŠ é€Ÿ
 *		eventB:'mouseleave'//é¼ æ ‡äº‹ä»¶ï¼ŒåŽŸé€Ÿ
 */
(function($){
    $.fn.Marquee = function(options){
        var opts = $.extend({},$.fn.Marquee.defaults, options);
        return this.each(function(){
            var $marquee = $(this);//æ»šåŠ¨å…ƒç´ å®¹å™¨
            var _scrollObj = $marquee.get(0);//æ»šåŠ¨å…ƒç´ å®¹å™¨DOM
            var scrollW = $marquee.width();//æ»šåŠ¨å…ƒç´ å®¹å™¨çš„å®½åº¦
            var scrollH = $marquee.height();//æ»šåŠ¨å…ƒç´ å®¹å™¨çš„é«˜åº¦
            var $element = $marquee.children(); //æ»šåŠ¨å…ƒç´
            var $kids = $element.children();//æ»šåŠ¨å­å…ƒç´
            var scrollSize=0;//æ»šåŠ¨å…ƒç´ å°ºå¯¸
            var _type = (opts.direction == 'left' || opts.direction == 'right') ? 1:0;//æ»šåŠ¨ç±»åž‹ï¼Œ1å·¦å³ï¼Œ0ä¸Šä¸‹

            //é˜²æ­¢æ»šåŠ¨å­å…ƒç´ æ¯”æ»šåŠ¨å…ƒç´ å®½è€Œå–ä¸åˆ°å®žé™…æ»šåŠ¨å­å…ƒç´ å®½åº¦
            $element.css(_type?'width':'height',10000);
            //èŽ·å–æ»šåŠ¨å…ƒç´ çš„å°ºå¯¸
            if (opts.isEqual) {
                scrollSize = $kids[_type?'outerWidth':'outerHeight']() * $kids.length;
            }else{
                $kids.each(function(){
                    scrollSize += $(this)[_type?'outerWidth':'outerHeight']();
                });
            }
            //æ»šåŠ¨å…ƒç´ æ€»å°ºå¯¸å°äºŽå®¹å™¨å°ºå¯¸ï¼Œä¸æ»šåŠ¨
            if (scrollSize<(_type?scrollW:scrollH)) return;
            //å…‹éš†æ»šåŠ¨å­å…ƒç´ å°†å…¶æ’å…¥åˆ°æ»šåŠ¨å…ƒç´ åŽï¼Œå¹¶è®¾å®šæ»šåŠ¨å…ƒç´ å®½åº¦
            $element.append($kids.clone()).css(_type?'width':'height',scrollSize*2);

            var numMoved = 0;
            function scrollFunc(){
                var _dir = (opts.direction == 'left' || opts.direction == 'right') ? 'scrollLeft':'scrollTop';
                if (opts.loop > 0) {
                    numMoved+=opts.scrollAmount;
                    if(numMoved>scrollSize*opts.loop){
                        _scrollObj[_dir] = 0;
                        return clearInterval(moveId);
                    }
                }
                if(opts.direction == 'left' || opts.direction == 'up'){
                    var newPos = _scrollObj[_dir] + opts.scrollAmount;
                    if(newPos>=scrollSize){
                        newPos -= scrollSize;
                    }
                    _scrollObj[_dir] = newPos;
                }else{
                    var newPos = _scrollObj[_dir] - opts.scrollAmount;
                    if(newPos<=0){
                        newPos += scrollSize;
                    }
                    _scrollObj[_dir] = newPos;
                }
            };
            //æ»šåŠ¨å¼€å§‹
            var moveId = setInterval(scrollFunc, opts.scrollDelay);
            //é¼ æ ‡åˆ’è¿‡åœæ­¢æ»šåŠ¨
            $marquee.hover(
                function(){
                    clearInterval(moveId);
                },
                function(){
                    clearInterval(moveId);
                    moveId = setInterval(scrollFunc, opts.scrollDelay);
                }
            );
            //æŽ§åˆ¶åŠ é€Ÿè¿åŠ¨
            if(opts.controlBtn){
                $.each(opts.controlBtn, function(i,val){
                    $(val).bind(opts.eventA,function(){
                        opts.direction = i;
                        opts.oldAmount = opts.scrollAmount;
                        opts.scrollAmount = opts.newAmount;
                    }).bind(opts.eventB,function(){
                            opts.scrollAmount = opts.oldAmount;
                        });
                });
            }
        });
    };
    $.fn.Marquee.defaults = {
        isEqual:true,//æ‰€æœ‰æ»šåŠ¨çš„å…ƒç´ é•¿å®½æ˜¯å¦ç›¸ç­‰,true,false
        loop: 0,//å¾ªçŽ¯æ»šåŠ¨æ¬¡æ•°ï¼Œ0æ—¶æ— é™
        direction: 'left',//æ»šåŠ¨æ–¹å‘ï¼Œ'left','right','up','down'
        scrollAmount:1,//æ­¥é•¿
        scrollDelay:40,//æ—¶é•¿
        newAmount:3,//åŠ é€Ÿæ»šåŠ¨çš„æ­¥é•¿
        eventA:'mousedown',//é¼ æ ‡äº‹ä»¶ï¼ŒåŠ é€Ÿ
        eventB:'mouseup'//é¼ æ ‡äº‹ä»¶ï¼ŒåŽŸé€Ÿ
    };
    $.fn.Marquee.setDefaults = function(settings) {
        $.extend( $.fn.Marquee.defaults, settings );
    };
})(jQuery);