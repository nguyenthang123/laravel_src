$(document).ready(function() {
	$('.home .row1 ul li a').hover(function() {
		var index = $(this).parent('li').index();
		$(this).addClass('active');
		$(this).parent('li').siblings('li').children('a').removeClass('active');
		$('.home .row1 .tab-contents-1').children('div').eq(index).addClass('active');
		$('.home .row1 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	$('.home .row3 .flex1 >div').hover(function() {
		var index = $(this).index();
		$(this).children('div.muiten').addClass('active');
		/*$(this).siblings('div').children('div.muiten').removeClass('active');*/

	}, function() {
		
	});

	$('.home .row6 .flex1 >div').hover(function() {
		var index = $(this).index();
		$(this).children('h4').addClass('active');
		$(this).siblings('div').children('h4').removeClass('active');
		$('.home .row6 .tab-contents-2').children('div').eq(index).addClass('active');
		$('.home .row6 .tab-contents-2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	$('.home .row8 .groups-btn >button').hover(function() {
		var index = $(this).index();
		$(this).addClass('active');
		$(this).siblings('button').removeClass('active');
		$('.home .row8 .groups-content').children('div').eq(index).addClass('active');
		$('.home .row8 .groups-content').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	$('.home .row6 .flex3col2 ul li').hover(function() {
		var index = $(this).index();
		$(this).addClass('active');
		$(this).siblings('li').removeClass('active');
		$('.home .row6 .flex3col1').children('div').eq(index).addClass('active');
		$('.home .row6 .flex3col1').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
});