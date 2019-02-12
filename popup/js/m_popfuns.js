var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var domain = window.location.hostname;
var color_bg_button_dy='#008c57'
var color_bg_button_tc='#ff0000'
if(domain=='phukhoa168.com' || domain=='m.phukhoa168.com'){color_bg_button_dy='#7260ac';}
if(domain=='m.namkhoa168.com'){color_bg_button_dy='#106BBE';}
if(domain=='benhxahoi168.com'){color_bg_button_dy='#177fc8';}
if(domain=='benhtri168.com'){color_bg_button_dy='#72674d';}
if(domain=='dieutridaday.net'){color_bg_button_dy='#d28209';color_bg_button_tc='#00a2ff'}
if(domain=='benhxahoi168.net' || domain=='m.benhxahoi168.net'){color_bg_button_dy='#1993a6';}
if(domain=='khamnamkhoa168.com'){color_bg_button_dy='#106BBE';}
if(domain=='khamphukhoa168.com'){color_bg_button_dy='#7260ac';}
function popphongkham168_com(){
    var str='<style>'+
        '.tuvandienthoai a p {float: left;margin: 0px;padding: 5px 23px;border-radius: 5px;text-align: center;}'+
        '.tuvandienthoai a{color:#fff;   text-decoration: none;  font-size: 14px;cursor: pointer;}'+
    '</style>';
    var str2='<div id="popup" style="padding-top: 12px;width: 300px;display: none;position: fixed;z-index: 1000;border: 2px solid '+color_bg_button_dy+';border-radius: 6px;padding-bottom: 7px;background: rgb(255, 255, 255);"><div>'+
    '</div>'+
        '<div style="  clear: both;"><p style="   padding-top: 0px;  text-align: center;  font-weight: 600;  margin-bottom: 11px;  font-size: 14px;">Bác sỹ đang yêu cầu được chát với bạn</p></div>'+
        '<div class="tuvandienthoai" style="  clear: both;  padding-top: 8px;">'+
            '<a class="popup_close"><p style="  background: '+color_bg_button_tc+';  background-image: linear-gradient( '+color_bg_button_tc+', '+color_bg_button_tc+');margin-left: 40px;"> Từ Chối </p></a>'+
            '<a target="_blank" href="'+link_tuvan+'"><p style="  background: '+color_bg_button_dy+';  background-image: linear-gradient( '+color_bg_button_dy+', '+color_bg_button_dy+');margin-right: 40px;float:right;"> Đồng Ý</p></a>'+
        '</div>'+
    '</div>';
    return str+str2;
}
document.write(popphongkham168_com());
$(document).ready(function(){
    var w=window.innerWidth;
    var h=window.innerHeight;
    $("#popup").css("top",(h/2));
    $("#popup").css("left",(w/2)-148);
    $("#popup").hide().delay(25000).fadeIn(2000);
    $(".popup_close").click(function () {
    $("#popup").hide().delay(30000).fadeIn(2000);
    });
})