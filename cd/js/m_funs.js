var m_bg_nk='#e1032a';
var m_bg_pk=m_bg_nk;
var m_img_nk='http://phongkhamgiaiphong.com/cd/img/m_bn_nk.jpg';
var m_img_pk=m_img_nk;
var domain=window.location.hostname;
var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var m_link_cdsk='http://phongkhamgiaiphong.com/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
var tet_status=0;
var tet_img='http://phongkhamgiaiphong.com/banner_tet/m_nk.jpg';
var arr_namkhoa=[
    'khamnamkhoahanoi.vn',
    'khamnamkhoahanoi.com',
    'khamnamkhoahanoi.net'
];
var arr_bxh=[
    'phongkhambenhxahoi.vn',
    'khambenhxahoihanoi.net',
    'khambenhxahoihanoi.com'
];
var arr_tri=[
    'trihanoi.com',
    'khamchuabenhtri.net'
];
var arr_tmh=[
    'taimuihonghanoi.net',
    'benhtaimuihong.com',
    'dieutritaimuihong.com',
    'dieutritaimuihong.net',
    'khamtaimuihong.net',
    'khamtaimuihong.org',
    'phongkhamhong.com',
    'phongkhammui.com',
    'phongkhamtai.com',
    'khamtaimuihonghanoi.com'
];
var arr_hn=[
    'khambenhhoinach.com'
];
if(arr_namkhoa.indexOf(domain) >=0){
    m_link_cdsk='http://khamnamkhoahanoi.vn/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_bxh.indexOf(domain) >=0){
    m_link_cdsk='http://phongkhambenhxahoi.vn/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_tri.indexOf(domain) >=0){
    m_link_cdsk='http://trihanoi.com/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
}
if(arr_tmh.indexOf(domain)>=0){
    m_link_cdsk='http://khamtaimuihonghanoi.net/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
    //tet_status=1;
}
if(arr_hn.indexOf(domain)>=0){
    m_link_cdsk='http://khambenhhoinach.com/mobile/cdsuckhoe/chuyen-muc-suc-khoe/';
}
function m_khamnamkhoahanoi_vn(){
    if(tet_status==1){
        str='<div id="myCarousel" class="carousel slide" data-ride="carousel">' +
            '<div class="carousel-inner" role="listbox">' +
            '<div class="item active"><a href="'+m_link_cdsk+'"><img class="first-slide" src="'+tet_img+'"></a> </div>' +
            '<div class="item"><a href="'+m_link_cdsk+'"><img class="first-slide" src="'+m_img_nk+'"></a> </div>' +
            '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';
    }else{
        var str='<div class="addtop_k" style="text-align:center;width:100%;"><a target="_blank" href="'+m_link_cdsk+'"> <img style="max-width:100%" src="'+m_img_nk+'"> </a></div>';
        if(arr_tri.indexOf(domain) >=0){
            str='<div id="myCarousel" class="carousel slide" data-ride="carousel">' +
                '<div class="carousel-inner" role="listbox">' +
                '<div class="item active"><a href="'+m_link_cdsk+'"><img class="first-slide" src="'+m_img_nk+'"></a> </div>' +
                '<div class="item "><a href="http://trihanoi.com/mobile/cd6/cam-ket"><img src="http://trihanoi.com/public/mobile/imgs/banner2.jpg"></a></div>' +
                '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';
        }
    }
    return str;
}
var arr_ListWebShowTop=[
    'benhtaimuihong.com',
    'dieutritaimuihong.com',
    'dieutritaimuihong.net',
    'khamtaimuihong.net',
    'khamtaimuihong.org',
    'phongkhamhong.com',
    'phongkhammui.com',
    'phongkhamtai.com',
    'khamnamkhoahanoi.com',
    'khamnamkhoahanoi.net',
    'khambenhxahoihanoi.com',
    'khambenhxahoihanoi.net',
    'khamchuabenhtri.net',
    'khamtaimuihonghanoi.com'
]
function ListWebShowTop(){
    var img_nk='http://phongkhamgiaiphong.com/cd/img/addtop_new.jpg';
    var str='<style>.addtopk{width: 100%;background: #'+m_bg_nk+';text-align: center;}.addtopk img{max-width:100%;}</style>';
    str+='<div class="addtopk"><a href="'+m_link_cdsk+'"><img src="'+img_nk+'"></a> </div>';
    document.write(str);
    function cd(){
        $(".addtopk").slideUp(2000);
    }
    setTimeout(cd,15000);
}
if(arr_ListWebShowTop.indexOf(domain)>=0){
    ListWebShowTop();
}else{
    document.write(m_khamnamkhoahanoi_vn());
}
