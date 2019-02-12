$(document).ready(function(){
    //跑马灯
    if(document.getElementById("marquee01")){
        $('#marquee01').Marquee({
            direction:'up'
        });
    }
    /*预约随机*/
    $('#gunDiv').Marquee({
        direction : 'up'
    });

    if(document.getElementById("yshdL") && document.getElementById("yshdR") && document.getElementById("yshdC")){
        var scrollPic_50 = new ScrollPic();
        scrollPic_50.scrollContId   = "yshdC";
        scrollPic_50.arrLeftId      = "yshdL";
        scrollPic_50.arrRightId     = "yshdR";
        scrollPic_50.frameWidth     = 904;
        scrollPic_50.pageWidth      = 226;
        scrollPic_50.speed          = 30;
        scrollPic_50.space          = 30;
        scrollPic_50.autoPlay       = true;
        scrollPic_50.autoPlayTime   = 3;
        scrollPic_50.initialize();
        setInterval(function (){
            scrollPic_01.rightMouseDown();scrollPic_01.leftEnd();
        },3000);
        if (window.ActiveXObject){
            $('#yshdC > div > div').css("float",'left');
        }

    }
});