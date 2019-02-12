var link_tuvan='http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en';
var str='<div class="row" id="fcopy" style="margin-top: 80px;">'+
    '<div style="background: #42c5d3;border-top: 4px solid #42c5d3;position: fixed;bottom: 0px;width: 100%;height: 80px;">'+
    '<div style="width: 812px;margin: auto">'+
        '<div style="margin-left:-10px">'+
            '<style>'+
        '.ico a img{margin-right: 50px;}'+
        '</style>'+
            '<div class="ico" style="float: left">'+
                '<a href="'+link_tuvan+'"><img src="http://taimuihonghanoi.net/wp-content/themes/168mauxanh/images/i17.png" alt="hen kham"></a>'+
                    '<a href="'+link_tuvan+'"><img src="http://phongkhamgiaiphong.com/buffer/footer/images/ico_benhtinhf.png" alt="hoi benh tinh"></a>'+
                        '<a href="'+link_tuvan+'"><img src="http://phongkhamgiaiphong.com/buffer/footer/images/ico_chiphif.png" alt="hoi chi phi"></a>'+
                            '<a href="'+link_tuvan+'"><img src="http://phongkhamgiaiphong.com/buffer/footer/images/ico_bacsyf.png" alt="hoi bac sy"></a>'+
                            '</div>'+
                            '<img src="http://phongkhambenhxahoi.vn/public/frontend/images/ico_dangky_close.png" id="f_close">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
document.write(str);
$('#f_close').click(function(){
    $('#fcopy').hide();
    })
