$(document).ready(function(){

	$(".dis-fix-bottom").click(function(){
		$(".fix-bottom").slideUp(1000,function(){
			$(".site-footer").css({"padding-bottom":"10px"});
		});
	})

	$(".show_fix_bottom").click(function(){
		$(".fix-bottom").slideDown(1000,function(){
			$("html, body").animate({ scrollTop: 0 }, "slow");
  			return false;
		});
	})
	$("#swt_lt_right_box2 li").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });

    $("body a[href]").each(function(index,el){
	    if($(el).attr('href').indexOf('http://') !=-1 ){
	      $(el).attr('target','_blank');
	    }
	})

	$(".pfan").hover(function(){
        $(this).find(".p1").stop().animate({"height":"0"},{easing: 'easeOutQuad',duration:400});
    },function(){
        $(this).find(".p1").stop().animate({"height":"60px"},{easing: 'easeOutQuad',duration:400});
    });

    $(".pfan").hover(function(){
        $(this).find(".p2").stop().animate({"height":"0"},{easing: 'easeOutQuad',duration:400});
    },function(){
        $(this).find(".p2").stop().animate({"height":"80px"},{easing: 'easeOutQuad',duration:400});
    });
    $('#my_popup2').popup({
      blur:false,
      transition: 'all 0.3s',
      scrolllock: false,
      background: false,
      backgroundactive:false,
      onclose: function() {setTimeout(showchat, 40000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
      setTimeout(showchat, 15000);
      setTimeout(showchat2, 10000);
    }
    setInterval(alertFunc, 2000);
    $(".dong_adv_left2").click(function(){
      $(this).parents('.adv-left2').hide();
    })
    $('.cuasochat .cuasochat-head .ben-phai i.bg5').click(function(event) {
      $(this).parents('.cuasochat').hide();
      setTimeout(showchat2, 10000);
    });
})
function showchat() {
	$('#my_popup2').popup('show');
}
function showchat2() {
  $('.cuasochat').show();
}
function alertFunc() {
    var obj = $('#adv-left2 .nhapnhay >.flex.active').first();
    obj.removeClass('active');
  if(obj.next().length){
      obj.next().addClass('active');
      console.log(obj.next());
  }
  else{
    $('#adv-left2 .nhapnhay >.flex:nth-child(1)').first().addClass('active');
  }
}

