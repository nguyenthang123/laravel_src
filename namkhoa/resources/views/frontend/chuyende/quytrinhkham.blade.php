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
                <p>Bạn muốn đến phòng khám nhưng bạn đang gặp khó khăn trong việc tìm địa, không biết làm cách nào để tìm đường đến phòng khám một cách thuận tiện nhất. Bạn có thể click điền thông tin đăng kí khám, hoặc có thể gọi trực tiếp số điện thoại <?= phone1;?>, <?= str_replace(' ','.',phone2);?> để nhận được giúp đỡ từ các chuyên gia tư vấn.</p>
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
                        <div class="p2">709 - Giải Phóng - Hoàng Mai - Hà Nội</div>
                    </div>
                    <div style="float: left;background: url('http://namkhoa168.com/public/frontend/images/quy-trinh-kham/txt1.png') no-repeat left 8px;padding-left: 25px;width: 400px;">
                        <p style="margin-bottom: 0">
                            <b class="color_xanh">Từ Trung tâm Hà Nội</b> đi xuống tới <b class="color_xanh">bệnh viện Bạch Mai</b> khoảng 2 Km tới số 709 Giải Phóng <b class="color_xanh">(phòng khám đa khoa Giải Phóng Hà Nội)</b>
                        </p>
                        <p style="margin-bottom: 0">
                            <b class="color_xanh">Từ Thường Tín</b> lên đi qua <b class="color_xanh">bến xe Giáp Bát</b> khoảng 800M đến  <b>số 709 Giải Phóng</b>, cơ sở 5 tầng ngay mặt đường bên phải cùng hướng bến xe Giáp Bát, đối diện siêu thị thành đô <b class="color_xanh">(phòng khám đa khoa Giải Phóng)</b>
                        </p>
                        <p>
                            <b CLASS="color_xanh">Từ Hà Đông </b>, đi qua <b class="color_xanh">đài hóa thân Hoàn Vũ</b> tới ngã 3 đường tàu <b>(Ngã 3 Văn Điển)</b> rẽ tay trái đi lên bến xe Giáp Bát, đi thêm khoảng 800M đến số nhà 709 Giải Phóng, cơ sở 5 tầng nằm ngay mặt đường bên phải cùng hướng bên xe Giáp Bát, đối diện siêu thị Thành Đô <b class="color_xanh">(phòng khám đa khoa Giải Phóng)</b>
                        </p>
                    </div>
                </div>
                <div class="lx2">
                    <div class="lx2_1">
                        <div class="p1"><span>điểm xe bus</span></div>
                        <h2>Các tuyến buýt phòng khám</h2>
                        <div class="p2">709 - Giải Phóng - Hoàng Mai - Hà Nội</div>
                    </div>

                    <div class="lx2_2">
                        <ul>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 03 </b></div><div><span class="color_xanh">: Giáp Bát - Gia Lâm</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 08 </b></div><div><span class="color_xanh">: Long Biên - Đông Mỹ</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 16 </b></div><div><span class="color_xanh">: Giáp Bát- Mỹ Đình</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 25 </b></div><div><span class="color_xanh">: Giáp Bát- Nam Thăng Long</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 26 </b></div><div><span class="color_xanh">: Giáp Bát- Sân vận động Quốc Gia</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 28 </b></div><div><span class="color_xanh">: Giáp Bát - Đông Ngạc</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 32 </b></div><div><span class="color_xanh">: Giáp Bát - Nhổn</span></div></li>
                            <li><div class="lx2_2_left">+)Tuyến <b>Xe 41 </b></div><div><span class="color_xanh">: Giáp Bát - Nghi Tàm</span></div></li>
                        </ul>
                    </div>
                </div>
                <div class="lx3">
                    <div class="p1">tàu hỏa</div>
                    <h2>Lộ trình đến phòng khám</h2>
                    <p><b class="color_xanh">Ga Hà Nội :</b> Nằm trên đường Lê Duẩn đi thẳng về <b>phía nam 3KM</b> đến số 709 Giải phóng</p>
                    <div class="p2">709 - Giải Phóng - Hoàng Mai - Hà Nội</div>
                </div>
                <div class="lx4">
                    <div style="width: 275px;float: left">
                        <div class="p1"><span>Máy bay</span></div>
                        <h2>Lộ trình đến phòng khám</h2>
                        <div style="margin: 30px 0;"><img src="/public/frontend/images/quy-trinh-kham/td_maybay.png"></div>
                        <div class="p2">709 - Giải Phóng - Hoàng Mai - Hà Nội</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="con2">
            <div class="tit"><span>vị trí phòng khám</span></div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089" height="300" width="100%" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>
@stop()
