var domain=window.location.hostname;
var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var link_skype='skype:phongkhamdakhoagiaiphong@gmail.com?chat';
function c_khamnamkhoahanoi_vn(){
    var str='<style>.menu_hide{display:none}' +
        '.menu_show{display:block}' +
        '.left_nav {width: 85px;height: 490px;position: absolute;left: 15px;z-index: 9;}' +
        '.left_menu {width: 70px;margin: 0 auto;float: left;list-style:none;}' +
        '.left_menu li {width:70px;height: 70px;float: left;color: #FFF;font-size: 15px;padding-left: 0px;}' +
        '.left_menu_index{width: 100%;}' +
        '.left_menu_index a img{width: 100%;}' +
        '.left_s_menu {float: left;position: relative;top: -139px;left: 69px;width: 300px;height: 138px;padding-left: 10px;list-style:none;}' +
        '.left_s_menu li {float: left;padding: 3px 0px;z-index: 9;}' +
        '.left_s_menu li img{max-width: 100%;height: 100%}' +
        'ul li.menu_c1{height: 120px;width: 120px;margin-top: 8px;margin-right: 10px;}' +
        'ul li.menu_c2{height: 140px;width: 145px;padding-top: 10px;color: #000;font-weight: bold;}' +
        'ul li.menu_c2 a.btn_ketban{display: inline-block;border: 1px solid #000;color:#17bdb0;text-decoration: none;background: #fff;float: left;padding: 2px 10px;margin-top: 8px; }' +
        '.menu_show_fb{background:#bf7079;background-repeat: no-repeat;}' +
        '.menu_show_zl{background:#f0f0f0;background-repeat: no-repeat;}</style>';
    str+='<div id="divAdLeft" class="left_nav">'+
        '<ul style="" class="left_menu">'+
        '<li class="left_menu_index" style="padding-top: 0px;height:70px;">'+
            '<a href="'+link_tuvan+'" target="_blank"><img src="http://phongkhamgiaiphong.com/addleft/imgs/tvcp.png"></a>'+
            '</li>'+
            '<li class="left_menu_index"><a href="'+link_tuvan+'" target="_blank"><img src="http://phongkhamgiaiphong.com/addleft/imgs/bstv.png"></a>'+
            '</li>'+
                '<li class="left_menu_index">'+
                    '<a href="'+link_skype+'" target="_blank"><img src="http://phongkhamgiaiphong.com/addleft/imgs/skype.png"></a>'+
                    '</li>'+
                    '<li class="left_menu_index" data-for="zl" style=""><a href="#" target="_self"><img src="http://phongkhamgiaiphong.com/addleft/imgs/zalo.png"></a>'+
                        '<ul class="left_s_menu menu_show_zl menu_hide">'+
                            '<li class="menu_c1"><img src="http://phongkhamgiaiphong.com/addleft/imgs/zl_code.png"></li>'+
                                '<li class="menu_c2">'+
                                'Phòng khám<br>Đa Khoa Giải Phóng'+
                                    '<b style="color: #17bdb0;display: block;float:left;padding-top: 7px;font-size: 21px;">0383528899</b>'+
                                    '<a href="" class="btn_ketban">Kết bạn</a>'+
                                '</li>'+
                                '</ul>'+
                            '</li>'+
                            '</ul>'+
                        '</div>';
    return str;
}
document.write(c_khamnamkhoahanoi_vn());
$(document).ready(function(){
    var h=window.innerHeight;
    $(".left_nav").css({"position":"absolute","top":h - (250 +40)});
    $("#backtotop").click(function () {
        $("body,html").animate({scrollTop: 0}, "slow");
    });
    $(".left_menu_index").hover(function(){
        var id=$(this).attr("data-for");
        $(".menu_show_"+id).removeClass("menu_hide");
        $(".menu_show_"+id).addClass("menu_show");
    }, function(){
        var id=$(this).attr("data-for");
        $(".menu_show_"+id).removeClass("menu_show");
        $(".menu_show_"+id).addClass("menu_hide");
    });
})
