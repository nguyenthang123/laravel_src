var bg_nk='#ff0e01';
var bg_pk='#e1032a';
var img_nk='http://phongkhamgiaiphong.com/cd/img/addtop_new.gif';
var img_pk=img_nk;
var domain=window.location.hostname;
var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var link_cdsk='http://phongkhamgiaiphong.com/cdsuckhoe/chuyen-muc-suc-khoe/index.phtml';
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
    'taimuihonghanoi.net'
];
var arr_pk=[
    'phongkhamgiaiphong.com'
];
if(arr_namkhoa.indexOf(domain) >=0){
    link_cdsk='http://khamnamkhoahanoi.vn/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_bxh.indexOf(domain)>=0){
    link_cdsk='http://phongkhambenhxahoi.vn/cdsuckhoe/chuyen-de-suc-khoe/';
}
if(arr_tri.indexOf(domain)>=0){
    link_cdsk='http://trihanoi.com/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_tmh.indexOf(domain)>=0){
    link_cdsk='http://taimuihonghanoi.net/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_pk.indexOf(domain)>=0){
    var path=window.location.pathname;
    if(path.indexOf('/tmh') == 0){
        link_cdsk='http://phongkhamgiaiphong.com/tmh/cdsuckhoe/chuyen-de-suc-khoe/index.phtml';
    }
    if(path.indexOf('/bxh') == 0){
        link_cdsk='http://phongkhamgiaiphong.com/cdsuckhoe/chuyen-de-suc-khoe/index.phtml';
    }
    if(path.indexOf('/namkhoa') == 0){
        link_cdsk='http://phongkhamgiaiphong.com/cdsuckhoe/chuyen-de-suc-khoe/index.phtml';
    }
    if(path.indexOf('/tri') == 0){
        link_cdsk='http://phongkhamgiaiphong.com/cdsuckhoe/chuyen-de-suc-khoe/index.phtml';
    }
    if(path.indexOf('/hoi-nach') == 0 ){
    	  link_cdsk='http://phongkhamgiaiphong.com/cdsuckhoe/chuyen-de-suc-khoe/index.phtml';
    }
}
/*==============*/
var str='<style>.addtopk{width: 100%;background: #'+bg_nk+';text-align: center;}.addtopk img{max-width:100%;}</style>';
str+='<div class="addtopk"><a href="'+link_cdsk+'"><img src="'+img_nk+'"></a> </div>';
document.write(str);
function cd(){
    $(".addtopk").slideUp(2000);
}
setTimeout(cd,15000);