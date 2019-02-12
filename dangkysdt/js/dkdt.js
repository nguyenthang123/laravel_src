function dangkysdt(str){
    document.open();
    document.write(str);
    document.close();
}
var str='<link href="http://phongkhamgiaiphong.com/dangkysdt/css/phone.css" rel="stylesheet">';
var str2='<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon"><div class="coccoc-alo-ph-circle-time"><!--<img id="coccoc-alo-external-site-favicon" src="">--><span id="coccoc-alo-external-site-counter"></span></div><canvas id="stopwatch"></canvas><div class="coccoc-alo-ph-circle"></div><div class="coccoc-alo-ph-circle-fill"></div><div class="coccoc-alo-ph-img-circle coccoc-alo-ph-circle-shake"></div><div class="coccoc-alo-ph-circle-close"></div></div>';
var str3='<div id="coccoc-alo-wrapper" style="display: none"><div class="coccoc-alo-overlay"></div><div class="coccoc-alo-table"><div class="coccoc-alo-cell"><div class="coccoc-alo-popup" id="coccoc-alo-popup"><div class="coccoc-alo-popup-close"></div><div class="coccoc-alo-popup-m"><div class="coccoc-alo-popup-txt">Nhập số điện thoại của bạn<br>chúng tôi sẽ gọi lại ngay khi có thể</div><div class="coccoc-alo-popup-input"><input type="text" id="coccoc_sdt" placeholder="099-999-9999"></div><div class="coccoc-alo-popup-txt2">(Thông tin hoàn toàn được bảo mật)</div><div class="coccoc-alo-popup-btn"><img src="http://phongkhamgiaiphong.com/dangkysdt/images/btn_click.png" id="click_dk" alt="dangkysdt"></div></div></div></div></div></div>';
var str4='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/phone.js"></script>';
str=str+str2+str3+str4;
dangkysdt(str);
