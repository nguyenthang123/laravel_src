var str = '<link href="http://phongkhamgiaiphong.com/dangkysdt/mobile/css/dksdt.css" rel="stylesheet">';
var str2 = '<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show"><div class="coccoc-alo-ph-circle"></div><div class="coccoc-alo-ph-circle-fill"></div><div class="coccoc-alo-ph-img-circle coccoc-alo-ph-circle-shake"></div><div class="coccoc-alo-ph-circle-close"></div></div>';
var str3 = '<div class="m_dksdt_wapper"><div class="m_dksdt"><div class="m_dksdt_muiten"></div><div class="m_dksdt_tit">Nhập số điện thoại của bạn. Chúng tôi sẽ gọi lại ngay khi có thể</div><div class="m_dksdt_main"><div class="m_dksdt_main_txt"><input type="text" placeholder="0123-123-123"></div><div class="m_dksdt_main_btn"><div class="m_dksdt_main_btn_submit">Click để được gọi lại</div></div></div></div></div>';
var domain=window.location.hostname;
var arr1=[
    'trihanoi.com',
    'khamnamkhoahanoi.vn',
    'phongkhambenhxahoi.vn'
];
if(arr1.indexOf(domain) >=0){
    var str = '<link href="http://phongkhamgiaiphong.com/dangkysdt/mobile/css/dksdt_footer.css" rel="stylesheet">';
}
function dangkysdt(str) {
    document.open();
    document.write(str);
    document.close();
}
str = str + str2 + str3;
dangkysdt(str);
$(document).ready(function(){
    $(".coccoc-alo-phone").click(function(){
        $('.m_dksdt_wapper').show();
        $(this).hide();
    });
    $(".m_dksdt_muiten").click(function(){
        $('.m_dksdt_wapper').hide();
        $('.coccoc-alo-phone').show();
    });
    $('.m_dksdt_main_btn_submit').click(function(){
        var hoten='m_dksdt';
        var dienthoai=$('.m_dksdt_main_txt input').val();
        var url=document.URL;
        if(dienthoai.length>=13 || dienthoai.length<=9){
            alert('Số điện thoại không đúng định dạng.');
        }else{
            var link_dk = 'http://phongkhamgiaiphong.com/dangky.php?';
            var parameter='hoten='+hoten+'&dienthoai='+dienthoai+'&uri='+url;
            var link_dangky=link_dk+parameter;
            window.location.href= link_dangky;
            return false;
        }
    });
});