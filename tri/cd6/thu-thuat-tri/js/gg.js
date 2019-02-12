$(document).ready(function() {
    $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                        scrollTop: targetOffset
                    },
                    1000);
                return false;
            }
        }
    });
});

$(document).ready(function(){
    var scrollwidth = document.documentElement.clientWidth;
    $(".right_box").css("width",scrollwidth -"000");

});
//å½“çª—å£è¢«æ”¹å˜æ—¶æ”¹å˜å³è¾¹åŒºåŸŸå¤§å°
window.onresize = function(){
    var scrollwidth = document.documentElement.clientWidth;
    $(".right_box").css("width",scrollwidth -"000");
}


//æŽ§åˆ¶å·¦è¾¹å¯¼èˆªä½ç½®å’Œè®¡æ•°

$(window).scroll(function() {

    var scrollTop = $(document).scrollTop();

    if (scrollTop >= 900 && scrollTop < 2390) {
        $("#lehkbs1").addClass("hover");
    }
    else{$("#lehkbs1").removeClass("hover");}

    if (scrollTop >= 2390 && scrollTop < 3060) {
        $("#lehkbs2").addClass("hover");
    }
    else{$("#lehkbs2").removeClass("hover");}

    if (scrollTop >= 3060 && scrollTop < 3654) {
        $(".lehkbs3").addClass("hover");
    }
    else{$(".lehkbs3").removeClass("hover");}

});

$(document).ready(function(){
    $(".ra7_4 ul").find("li:first").addClass("hover");
    $(".ra7_5").hide();
    $("#a7hk1_").fadeIn();

    $(".ra7_4 ul li").mouseover(function(){
        var	ztt = $(this).attr("id");
        $(this).addClass("hover").siblings("li").removeClass("hover");
        $(".ra7_5").hide();
        $("#"+ztt+"_").fadeIn();
    });
});

$(document).ready(function(){
    $("img").mouseover(function(){
        $(this).addClass("images_op");
    });
    $("img").mouseout(function(){
        $(this).removeClass("images_op");
    });
});