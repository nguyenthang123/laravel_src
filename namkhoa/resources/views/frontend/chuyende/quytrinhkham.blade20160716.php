@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/quy-trinh-kham_demo.css">
<div class="row">
    <?= bannersOpiton('lo-trinh-den-phong-kham','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row quytrinhkham">
    <div class="main_item">
        <div class="lylx_ts box_bodder">
            <div class="txt">
                <p>Bạn muốn đến phòng khám nhưng bạn đang gặp khó khăn trong việc tìm địa, không biết làm cách nào để tìm đường đến phòng khám một cách thuận tiện nhất. Bạn có thể click điền thông tin đăng kí khám, hoặc có thể gọi trực tiếp số điện thoại 1800.6166, 043.6866.888 để nhận được giúp đỡ từ các chuyên gia tư vấn.</p>
                <div class="btn"><a href="<?= link_tuvan;?>">đăng ký mã số khám</a></div>
            </div>
        </div>
        <div class="con">
            <div class="tit"><span>CÁCH THỨC ĐẾN PHÒNG KHÁM</span></div>
            <div class="content_main">
                <div class="lx1">
                    <div style="width: 275px;float: left;">
                        <div class="p1">Tự lái xe</div>
                        <h2 style="color: #177fc8;font-size: 12px;font-weight: bold">lộ trình đến phòng khám</h2>
                        <div class="p2">km12 -  ngọc hồi - thanh trì - hn</div>
                    </div>
                    <div style="float: left;background: url('http://namkhoa168.com/public/frontend/images/quy-trinh-kham/txt1.png') no-repeat left 8px;padding-left: 25px;width: 400px;">
                        <p style="margin-bottom: 0">
                            <b class="color_xanh">Từ Thường Tín</b> lên thì qua <b class="color_xanh">Ngã ba Ngọc Hồi</b> khoảng 1Km cơ sở 5 tầng nằm ngay mặt đường bên tay phải <b>(phòng khám đa khoa Giải Phóng Hà Nội)</b>
                        </p>
                        <p style="margin-bottom: 0">
                            <b class="color_xanh">Hướng Từ Hà Đông</b> đi qua <b class="color_xanh">đài hóa thân Hoàn Vũ</b> đi tới ngã ba đường tàu (Ngã ba Văn Điển) rẽ tay phải đi khoảng 500m nhìn sang tay trái thấy cơ sở 5 tầng <b>(phòng khám đa khoa Giải Phóng Hà Nội)</b>
                        </p>
                        <p>
                            <b CLASS="color_xanh">Từ hướng bến xe Giáp Bát </b>, đi xuống thẳng theo trục đường <b class="color_xanh">Giải Phóng - Ngọc Hồi qua bên xe Nước Ngầm</b> tới <b>(phòng khám đa khoa Giải Phóng Hà Nội)</b> là khoảng 3Km
                        </p>
                    </div>
                </div>
                <div class="lx2">
                    <div style="width: 275px;float: left">
                        <div class="p1"><span>điểm xe bus</span></div>
                        <h2>Các tuyến buýt phòng khám</h2>
                        <div style="text-transform: uppercase"><span>1.</span> điểm dừng là cách công ty z179</div>
                        <div style="text-transform: uppercase"><span>2.</span> điểm đứng là kho bãi đá văn điển</div>
                        <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
                    </div>
                    <style>
                        .lx2_2 ul{
                            width: 370px;
                            float: left;
                            margin-top: 13px;
                            margin-left: 40px;
                        }
                        .lx2_2 ul li{
                            float: left;
                            padding-top: 3px;
                        }
                        .lx2_2 ul li div{
                            float: left;
                        }
                        .lx2_2_left{
                            width: 115px;;
                        }
                    </style>
                    <div class="lx2_2">
                        <ul>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 04 </b></div><div><span class="color_xanh">: Long Biên - BX nước ngầm</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 06A </b></div><div><span class="color_xanh">: BX Giáp Bát - Cầu Giẽ</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 06B </b></div><div><span class="color_xanh">: BX Giáp Bát - Thường Tín</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 08 </b></div><div><span class="color_xanh">: Long Biên - Đông Mỹ</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 12 </b></div><div><span class="color_xanh">: CV Nghĩa Đô - Đại Áng</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 16B </b></div><div><span class="color_xanh">: BX Nước Ngầm - BX Mỹ Đình</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 39 </b></div><div><span class="color_xanh">: CV Nghĩa Đô - Văn Điển</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 60 </b></div><div><span class="color_xanh">: BX Nam Thăng Long - BX Nước Ngầm</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 206 </b></div><div><span class="color_xanh">: BX Giáp Bát - Phủ Lý</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 209 </b></div><div><span class="color_xanh">: BX Giáp Bát - Hưng Yên</span></div></li>
                        </ul>
                    </div>
                </div>
                <div class="lx3">
                    <div class="p1">tàu hỏa</div>
                    <h2>Lộ trình đến phòng khám</h2>
                    <img src="http://namkhoa168.com/public/frontend/images/quy-trinh-kham/td_tauhoa.png">
                    <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
                </div>
                <div class="lx4">
                    <div style="width: 275px;float: left">
                        <div class="p1"><span>Máy bay</span></div>
                        <h2>Lộ trình đến phòng khám</h2>
                        <div style="margin: 30px 0;"><img src="http://namkhoa168.com/public/frontend/images/quy-trinh-kham/td_maybay.png"></div>
                        <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="con2">
            <div class="tit"><span>vị trí phòng khám</span></div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.3747631548154!2d105.84303331535367!3d20.937459996263854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad96163b2d43%3A0xf38bf1e69bcc4a2c!2zUGjDsm5nIEtow6FtIMSQYSBLaG9hIDE2OCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1445054160245" height="300" width="100%" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>
@stop()
