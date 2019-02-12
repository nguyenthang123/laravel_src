/*document.writeln('<div class="news_pic_box" style="height:0; overflow:hidden; background-position:center top; background-repeat:no-repeat;"><a href="/swt" style="display:block; height:250px; width:100%;" target="_blank"></a></div>');
if(typeof jQuery == 'undefined'){
	document.writeln('<script type="text/javascript" src="http://www.ksnanke.com/public/js/jquery-1.8.0.min.js"></script>');
}
var autoTopOpenAd='';
var autoTopCloseAd='';
autoTopOpenAd=setInterval(openTopAd,3000);

var adImage = new Image(); 
adImage.src = "http://www.ksnanke.com/public/images/happy.jpg"; 

var adImage2 = new Image(); 
adImage2.src = "http://www.ksnanke.com/public/images/happy2.jpg"; 

function openTopAd(){
	$(".news_pic_box").css({"background-image":"url("+adImage.src+")"}).animate({"height":"250px"},700,function(){
		clearInterval(autoTopOpenAd);
		autoTopCloseAd=setInterval(closeTopAd,15000);		
	});
}
function closeTopAd(){
	$(".news_pic_box").animate({"height":"0"},700,function(){
		$(this).css({"background-image":"url("+adImage2.src+")"});
		$(".news_pic_box").animate({"height":"100px"},500);
		clearInterval(autoTopCloseAd);
	});
}*/