var domain = window.location.hostname;
var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var img_src='http://phongkhamgiaiphong.com/popup/images/popup_tmh.gif';
var arr_tmh=[
    'taimuihonghanoi.net','tmhhnn.chuasuimaoga.net'
];
if(arr_tmh.indexOf(domain)>=0){
    img_src='http://phongkhamgiaiphong.com/popup/images/popup_tmh.gif';
}
var str='<div id="popup2" style="z-index: 9999;display:none;position;position: fixed;">' +
    '<div class="popup_close" style="width: 30px;position: absolute;top: -15px;left: 384px;z-index: 99;">' +
    '<img src="http://trihanoi.com/public/frontend/images/Addleft/close.png" height="30px">' +
    '</div>' +
    '<img src="'+img_src+'">' +
    '<div class="popup_close" style="width: 107px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 161px;cursor: pointer;"></div>' +
    '<a href="'+link_tuvan+'">' +
'<div style="width: 108px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 276px;"></div>' +
    '</a>' +
    '</div>';
document.write(str);
    $(document).ready(function(){
        $("#popup2").hide().delay(40000).fadeIn(2000);
        var h=window.innerHeight;
        var w=window.innerWidth;
        $("#popup2").css({"position":"fixed","top":h/2 - 165,"left":w/2 - 200});
        $(".popup_close").click(function () {
            $("#popup2").hide().delay(60000).fadeIn(2000);
        });
    })
