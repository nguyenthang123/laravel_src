$(document).ready(function(){
	$('#my_popup').popup({
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
    }

	$('.home-bxslider li').css('display','list-item'),
	$(".home-bxslider").bxSlider({
		auto: true,
  		mode: 'horizontal'
	}),
	$("#header-menu").scrollToFixed(),
	$("#footer-bottom").scrollToFixed({bottom:0}),
	$("td[data-tab-id]").click(function(){
		$(this).parents("table").find("td").removeClass("active"),
		$(this).addClass("active");
		var t=$(this).attr("data-tab-id");
		$('div[data-tab-content="'+t+'"]').siblings("div[data-tab-content]").hide(),
		$('div[data-tab-content="'+t+'"]').fadeIn()
	}),
		$("#header-menu > a").each(function(){
		$(this).attr("href")==location.href&&$(this).addClass("active")}),

		$("a").each(function(t,a){"http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"==$(this).attr("href")&&$(this).attr("target","_blank")}),
	$("body a[href]").each(function(index,el){
    	if($(el).attr('href').indexOf('http://') !=-1 ){
      		$(el).attr('target','_blank');
    	}
  	})

});
function showchat() {
    $('#my_popup').popup('show');
  }