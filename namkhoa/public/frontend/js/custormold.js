$(document).ready(function(){
    $(".nav2_box").mouseover(function(){
        $(".nav2_box").stop().animate({"width":"140px"},{easing: 'easeOutQuad',duration:200});
        $(".nav2_box").find(".tit").stop().animate({"width":"142px"},{easing: 'easeOutQuad',duration:200});
        $(this).stop().animate({"width":"430px"});
        $(this).find(".tit").stop().animate({"width":"140px"},{easing: 'easeOutQuad',duration:200});
    });
    slides();
    /*hot_box*/
    var _hotIndex=0;
    $('.main_item1 .hot_box .hot_tab li').mouseover(function(){
        if(_hotIndex==$(this).index()){
            return;
        }
        _hotIndex=$(this).index();
        $('.main_item1 .hot_box .hot_tab li').removeClass("hover");
        $(this).addClass("hover");
        $('.main_item1 .hot_box .hot_con li').css({"display":"none","opacity":"0"});
        $('.main_item1 .hot_box .hot_con li').eq($(this).index()).css({"display":"block"}).stop().animate({"opacity":"1"},{easing: 'easeInCubic',duration:500});
    });
    /*hzx_btn*/
    $(".main_item1 .hot_zx .hzx_btn li").hover(function(){
        $(this).find("img.m1").stop().animate({"height":"0"},{easing: 'easeOutQuad',duration:300});
    },function(){
        $(this).find("img.m1").stop().animate({"height":"64px"},{easing: 'easeOutQuad',duration:300});
    });
    /*main_item2*/
    $("#index_js li").hover(function(){
        $(this).find(".p1").stop().animate({"height":"0"},{easing: 'easeOutQuad',duration:400});
    },function(){
        $(this).find(".p1").stop().animate({"height":"155px"},{easing: 'easeOutQuad',duration:400});
    });
    /*ks_tab*/
    var _ksIndex=0;
    $('.vandethuonggap .ks_tab li').mouseover(function(){
        if(_ksIndex==$(this).index()){
            return;
        }
        _ksIndex=$(this).index();
        $('.vandethuonggap .ks_tab li').removeClass("hover");
        $(this).addClass("hover");
        $('.vandethuonggap .ks_content li').css({"display":"none","opacity":"0"});
        $('.vandethuonggap .ks_content li').eq($(this).index()).css({"display":"block"}).stop().animate({"opacity":"1"},{easing: 'easeInCubic',duration:500});
    });
    /*demo*/
    setInterval(memberonline,5000);
    tuvantrongthang();
    henkhamtrongthang();
    zxNo();
    /*index_hj*/
    var _hjIndex=4;
    $('#index_hj .left dl dd').mouseover(function(){
        if(_hjIndex==$(this).index()){
            return;
        }
        _hjIndex=$(this).index();
        $('#index_hj .left dl dd').removeClass("hover");
        $(this).addClass("hover");
        $('#index_hj .right dl').css({"display":"none","opacity":"0"});
        $('#index_hj .right dl').eq($(this).index()-1).css({"display":"block"}).stop().animate({"opacity":"1"},{easing: 'easeInCubic',duration:500});
    });
})
function tab_vandethuonggap(key){
    $(key+' .ks_list2 a').hover(function(){
        var _index=$(this).index();
        var _index2=(_index/2);
        $(key+' .ks_list2 a').removeClass('hover');
        $(this).addClass('hover');
        $(key+' .tab_content').css('display','none');
        $(key+' .tab_content').eq(_index2).css('display','block');
    })
}
function showtab_detail(key){
    $('.'+key).hover(function(){
        var i=$(this).attr('data-i');
        if ($('.'+key).hasClass(key+1)){
            $('.'+key).removeClass(key+1);
        }
        if ($('.'+key).hasClass(key+2)){
            $('.'+key).removeClass(key+2);
        }
        if ($('.'+key).hasClass(key+3)){
            $('.'+key).removeClass(key+3);
        }
        if ($('.'+key).hasClass(key+4)){
            $('.'+key).removeClass(key+4);
        }
        $(this).addClass(key+i);
        $('.'+key+'_content').css("display","none");
        $('.'+key+'_content'+i).css("display","block");
    })
};
function slides(){
    var index=0;
    var len=$(".main_item1 .slides .slides_box").find("li").length;
    $(".main_item1 .slides .slides_box").find("li").fadeOut();
    $(".main_item1 .slides .slides_box").find("li").eq(index).show({duration:500,easing:"easeOutQuad"});
    $(".main_item1 .slides .slides_tab").find("li").mouseover(function(){
        var _index=$(this).index();
        if(index!=_index){
            index=_index;
            changeSlide();
        }
    });
    var a=setInterval(autoChange,5000);
    $(".main_item1 .slides").hover(function(){
        clearInterval(a);
    },function(){
        a=setInterval(autoChange,5000);
    });
    function autoChange(){
        if(len-1==index){
            index=0;
        }else{
            index++;
        }
        changeSlide();
    }
    function changeSlide(){
        $(".main_item1 .slides .slides_box").find("li").fadeOut();
        $(".main_item1 .slides .slides_box").find("li").eq(index).stop().show({duration:500,easing:"easeOutQuad"});
        $(".main_item1 .slides .slides_tab").find("li").removeClass("hover");
        $(".main_item1 .slides .slides_tab").find("li").eq(index).addClass("hover");
    }
}
function memberonline(){
    var num = Math.floor(Math.random() * (200 - 100) + 100);
    var n = num.toString();
    var num1=n.substr(0,1);
    var num2=n.substr(1,1);
    var num3=n.substr(2,1);
    $('.zxno_l1 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
    $('.zxno_l1 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
    $('.zxno_l1 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
}
function tuvantrongthang(){
    var d=new Date();
    var today= d.getDate();
    var member=100;
    var arr=[310,320,330,440,550,660,370,380,390,400,410,420,430,440,550,660,470,480,490,500,310,320,330,440,55,66,37,38,39,30,31];
    for(var i=0;i< today;i++){
        member=member+arr[i];
    }
    if(member > 10000){
        var n = member.toString();
        var num1=n.substr(0,1);
        var num2=n.substr(1,1);
        var num3=n.substr(2,1);
        var num4=n.substr(3,1);
        var num5=n.substr(4,1);
        $('.zxno_l2 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
    }else{
        if(member>=1000){
            var n = member.toString();
            var num2=n.substr(0,1);
            var num3=n.substr(1,1);
            var num4=n.substr(2,1);
            var num5=n.substr(3,1);
            $('.zxno_l2 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
        }else{
            var n = member.toString();
            var num3=n.substr(0,1);
            var num4=n.substr(1,1);
            var num5=n.substr(2,1);
            $('.zxno_l2 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num2').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
        }
    }
}
function henkhamtrongthang(){
    var d=new Date();
    var today= d.getDate();
    var member=100;
    var arr=[110,120,330,440,150,160,170,180,190,200,210,220,330,440,250,260,270,280,290,100,110,220,330,440,250,160,170,180,190,200,110];
    for(var i=0;i< today;i++){
        member=member+arr[i];
    }
    if(member > 1000){
        var n = member.toString();
        var num1=n.substr(0,1);
        var num2=n.substr(1,1);
        var num3=n.substr(2,1);
        var num4=n.substr(3,1);
        $('.zxno_l3 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
    }else{
        var n = member.toString();
        var num2=n.substr(0,1);
        var num3=n.substr(1,1);
        var num4=n.substr(2,1);
        $('.zxno_l3 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
    }
}
/*end home*/
/*====tien-liet-tuyen====*/
$(function(){
    nav1Tab();
    $(".tien_liet_tuyen .cha_list .right .clists").mouseover(function(){
        $(".tien_liet_tuyen .cha_list .right .clists").removeClass("hover");
        $(this).addClass("hover");
    });
    ltMoveDiv({
        "top_box":".tien_liet_tuyen .cha_list .left .cha_zj .pic",
        "move_box":".tien_liet_tuyen .cha_list .left .cha_zj .pic .cha_zj_con ul",
        "move_box_li":".tien_liet_tuyen .cha_list .left .cha_zj .pic .cha_zj_con ul li",
        "width":275,
        "height":135,
        "interval_time":5000,
        "speed":500,
        "move_irection":1,
        "prev_btn":".tien_liet_tuyen .cha_list .left .cha_zj .pic .cha_zj_right",
        "next_btn":".tien_liet_tuyen .cha_list .left .cha_zj .pic .cha_zj_left"});
});
function nav1Tab(){
    $("#nav .nav_list ul.txt li").hover(function(){
        var _this=$(this);
        var _index=$(this).index();
        _this.addClass("hover");
        $("#nav .nav_list .nav_list_bg").stop().animate({"opacity":1,"left":_index*108+"px"},{easing: 'easeInQuad',duration:300,complete:function(){
            $("#nav .nav_list .nav_list_bg").find("span").css({"display":"block"});
        }});
    },function(){
        $(this).removeClass("hover");
        $("#nav .nav_list .nav_list_bg").stop().animate({"opacity":0});
        $("#nav .nav_list .nav_list_bg").find("span").css({"display":"none"});
    });
}
$(document).ready(function(){
    $('.clickdangky').click(function(){
        $('.bg_div_menu_dangky').toggle();
    });
})
function blink(key){
    $('.'+key).each(function() {
        var elem = $(this);
        setInterval(function() {
            if (elem.css('visibility') == 'hidden') {
                elem.css('visibility', 'visible');
            } else {
                elem.css('visibility', 'hidden');
            }
        }, 800);
    });
}
//code mới
function zxNo(){
    var rno1=888;
    var rnot1=0;
    autoNo();
    setInterval(autoNo,5000);
    function autoNo(){
        rnot1=String(ltRand(200,200));
        if(rnot1!=rno1){
            rno1=rnot1;
            changeNo(rno1,$('#zxno_box .zxno_in .zxno_l1 ul li'),3);
        }
    }
    function changeNo(no,id,len){
        var n=0;
        var nl=no.length;
        if(nl<len){
            for(var i=0;i<len-nl;i++){
                no="0"+no;
            }
        }
        for(var i=1;i<=len;i++){
            n=no.substr(i-1,1);
            //them 1 div vao cuoi
            id.eq(i-1).append('<div class="nopic" style="background:url(/public/frontend/img/home/num_'+n+'.png); top:49px;"></div>');
            //an cai div dau
            id.eq(i-1).find(".nopic").eq(0).animate({"top":"-49px","height":"49px;"},500,function(){
                //xoa div dau
                $(this).remove();
            });
            id.eq(i-1).find(".nopic").eq(1).animate({"top":"0","height":"49px"},500);
        }
    }
}
//randum
function ltRand(maxNo,minNo){
    return parseInt(Math.floor(Math.random()*maxNo)+minNo);
}
/*====dang ky kham====*/
blink("blink_dkk");
$(document).ready(function (e) {
    $("#frmdkk").on("submit", (function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/ajaxs/dangky",
            beforeSend: function (xhr) {
                var token = $('input[name="_token"]').attr("value");
                if (token) {
                    xhr.setRequestHeader("X-CSRF-TOKEN", token);
                    xhr.setRequestHeader("X-XSRF-Token", token);
                }
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data == "ok") {
                    alert("Bạn đã đăng ký thành công.");
                    history.go(-1);
                }
                $("#ajaxview_dkk").html(data);
            }
        });
    }));
    $("#dangkykham").on("click", function (e) {
        //$("#frmdkk").submit();
        e.preventDefault();
        var hoten = document.forms['frmdkk']['hoten'].value;
        var dienthoai = document.forms['frmdkk']['dienthoai'].value;
        var khoakham = document.forms['frmdkk']['khoakham'].value;
        var thoigian = document.forms['frmdkk']['thoigian'].value;
        var url=document.URL;
        if(hoten=="" || dienthoai==""){
            alert('Họ tên và số điện thoại không được để trống.');
        }else{
            var Arr={
                hoten:hoten,
                dienthoai:dienthoai,
                khoakham:khoakham,
                thoigian:thoigian,
                uri:url
            };
            var Jsonstr = JSON.stringify(Arr);
            var data=btoa(unescape(encodeURIComponent(Jsonstr)));
            var link_dangky="http://phongkhamdakhoa168.com/dangky.php?data="+data;
            window.location.href= link_dangky;
            return false;
        }
    });
});
