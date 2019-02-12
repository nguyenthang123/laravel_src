/*Add top*/
var bg_nk='#e1032a';
var bg_pk='#e1032a';
var img_nk='http://phongkhamnhanai.vn/cd/img/c_bn_nk.jpg';
var img_pk=img_nk;
var domain=window.location.hostname;
var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var link_cdsk='http://khamnamkhoahanoi.vn/cdsuckhoe/chuyen-muc-suc-khoe/';
var arr_namkhoa=[
    'khamnamkhoahanoi.vn',
    'khamnamkhoahanoi.com'
];
var arr_bxh=[
    'phongkhambenhxahoi.vn',
    'khambenhxahoihanoi.com'
];
var arr_tri=[
    'trihanoi.com',
    'khamchuabenhtri.net'
];
var arr_tmh=[
    'taimuihonghanoi.net',
    'khamtaimuihonghanoi.net',
    'khamchuataimuihong.com'
];
/*if(domain=="khamnamkhoahanoi.vn"){
    link_cdsk='http://khamnamkhoahanoi.vn/cdsuckhoe/chuyen-muc-suc-khoe/';
}*/
if(arr_namkhoa.indexOf(domain) >=0){
    link_cdsk='http://khamnamkhoahanoi.vn/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_bxh.indexOf(domain)>=0){
    link_cdsk='http://phongkhambenhxahoi.vn/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_tri.indexOf(domain)>=0){
    link_cdsk='http://trihanoi.com/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_tmh.indexOf(domain)>=0){
    link_cdsk='http://taimuihonghanoi.net/cdsuckhoe/chuyen-muc-suc-khoe/';
}
function c_khamnamkhoahanoi_vn(){
    var str='<style>.cd{width: 250px;height: 250px;overflow: hidden;position: fixed;float: left;bottom: 10px;z-index: 999;}.cd_colose{display: block;position: absolute;cursor: pointer;top: 0;right: 0;width: 20px;height: 20px;}.cd_colose img{max-width: 100%;margin: auto;}.cd2{width: 100%;height:100%;background: url("http://phongkhamnhanai.vn/cd/img/1.gif") no-repeat top center;background-size: contain;}.cd2 a{display: block;width: 70px;height: 18px;position: absolute;margin-top: 80px;margin-left: 130px;}</style>';
    str+='<div class="cd"><div class="cd_colose"><img src="http://phongkhambenhxahoi.vn/public/frontend/images/ico_dangky_close.png" alt="cd close"></div><div class="cd2"><a href="'+link_cdsk+'"></a></div></div>';
    return str;
}
/*============mobile===============*/
$(document).ready(function(){
    setTimeout(function(){
            $(".s-hide").slideUp(2000); }
        ,15000);
    $( "#banner-close" ).click(function() {
        $(".banner-son").hide();
    });
});
/*===================================*/
/*document.write(c_khamnamkhoahanoi_vn());*/
$(document).ready(function(){
    $( ".cd_colose" ).click(function() {
        $(".cd").hide();
    });
});