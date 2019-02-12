$(document).ready(function(){

	/*document.addEventListener('contextmenu', event => event.preventDefault());*/

	$(".top-hover").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).parent().siblings().children("a").removeClass("active");



			$(".top-content").each(function(index2,element2){

				if(index == index2){

					$(element2).addClass("active");

				}else{

					$(element2).removeClass("active");

				}

			})



		})

	})



	$(".left-hover-mui").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).parent().siblings().children().removeClass("active");



			$(".left-content-mui").each(function(index2,element2){

				if(index == index2){

					$(element2).addClass("active");

				}else{

					$(element2).removeClass("active");

				}

			})

		})

	})



	$(".left-hover-tai").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).parent().siblings().children().removeClass("active");



			$(".left-content-tai").each(function(index2,element2){

				if(index == index2){

					$(element2).addClass("active");

				}else{

					$(element2).removeClass("active");

				}

			})

		})

	})



	$(".left-hover-hong").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).parent().siblings().children().removeClass("active");



			$(".left-content-hong").each(function(index2,element2){

				if(index == index2){

					$(element2).addClass("active");

				}else{

					$(element2).removeClass("active");

				}

			})

		})

	})



	$(".tab-hovers-168").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).siblings().removeClass("active");



			$(".tab-content-about-168").each(function(index2,element2){

				if(index == index2){

					$(element2).addClass("active");

				}else{

					$(element2).removeClass("active");

				}

			})

		})

	})



	$(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",startFun:function(i){jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});}});



	$(".canh-bao a").each(function(index,element){

		$(element).hover(function(){

			$(element).addClass("active");

			$(element).parents(".canh-bao").find("a").each(function(index2,element2){

				if(index2 != index){

					$(element2).removeClass("active");

				}

			})

		})

	})





    $(".zj_list").hover(function () {

        $(this).find(".prev,.next").fadeTo("show", 0.1);

    }, function () {

        $(this).find(".prev,.next").hide();

    })



    $(".prev,.next").hover(function () {

        $(this).fadeTo("show", 0.7);

    }, function () {

        $(this).fadeTo("show", 0.1);

    })

    $(".zj_list").slide({ mainCell: ".zj_1", effect: "fold", autoPlay: true, delayTime: 700, autoPage: "<li><a></a></li>" })



    $(".category-parent .list-benh-category a").each(function(index,element){

    	$(this).hover(function(){

    		$(this).addClass("active");

    		$(this).siblings().removeClass("active");

    		$(this).parent().siblings().find("a").removeClass("active");

	    	$(".category-parent .tabs-content .tab-content").eq(index).siblings().hide();

	    	$(".category-parent .tabs-content .tab-content").eq(index).show();

    	})

    })



    $(".sidebar-left .list-page a").each(function(){

    	url_page = $(this).attr("href");

    	if(location.href.indexOf(url_page) > -1 ){

    		$(this).addClass("active");

    	} 

    })

    $(".menu ul li a").each(function(){

    	url_page = $(this).attr("href");

    	if(url_page == location.href){

    		$(this).addClass("active");

    	} 

    })

   //  $.datetimepicker.setLocale('vi');

   //  $("#hugeit_preview_textbox_36").datetimepicker({

   //  	timepicker:false,

 		// format:'d.m.Y'

   //  })

    // $("#hugeit_preview_textbox_35").datetimepicker({

    // 	format:'d.m.Y H:i'

    // })

	$(".dis-fix-bottom").click(function(){

		$(".fix-bottom").slideUp(1000,function(){

			// $(".site-footer").css({"padding-bottom":"10px"});

		});

	})



	$(".show_fix_bottom").click(function(){

		$(".fix-bottom").slideDown(1000,function(){

			$("html, body").animate({ scrollTop: 0 }, "slow");

  			return false;

		});

	})

	$(".gotop a").click(function(){

		$("html, body").animate({ scrollTop: 0 }, "slow");

	})

	$("body a[href]").each(function(index,el){

    	if($(el).attr('href').indexOf('http://') !=-1 ){

      		$(el).attr('target','_blank');

    	}

  	})



  	$(".thu-thuat .list a").hover(function(){

  		$(this).addClass('active');

  		$(this).siblings('a').removeClass('active');

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

  //  $('.carousel').carousel()



   //  $('#my_popup2').popup({

   //  	blur:false,

   //    	transition: 'all 0.3s',

   //    	scrolllock: false,

   //    	background: false,

   //    	backgroundactive:false,

   //    	onclose: function() {setTimeout(showchat, 40000);}

  	// });

  	// var d = new Date();

   //  var gio = d.getHours();

   //  var phut = d.getMinutes();

   //  if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){

  	// 	setTimeout(showchat, 15000);

  	// 	setTimeout(showchat2, 10000);

   //  }

  	// setInterval(alertFunc, 2000);

  	$(".dong_adv_left2").click(function(){

  		$(this).parents('.adv-left2').hide();

  	})

  	//12/11/2016

  	$('.menu .menu-hover >div >a').hover(function(){

		$(this).children('span').addClass('active');

		$(this).parents('.menu-hover').prev('h2').children('a').addClass('active');

	},function(){

		$(this).children('span').removeClass('active');

		$(this).parents('.menu-hover').prev('h2').children('a').removeClass('active');

	})

	$('.menu .menu-hover div.detail-menu').hover(function(){

		$(this).prev('a').children('span').addClass('active');

		$(this).parents('.menu-hover').prev('h2').children('a').addClass('active');

	},function(){

		$(this).prev('a').children('span').removeClass('active');

		$(this).parents('.menu-hover').prev('h2').children('a').removeClass('active');

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

	}

	else{

		$('#adv-left2 .nhapnhay >.flex:nth-child(1)').first().addClass('active');

	}

}