@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/quy-trinh-kham.css">
<div class="row">
    <?= bannersOpiton('lo-trinh-den-phong-kham','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row quytrinhkham">
    <div class="main_item">
        <div class="lylx_ts box_bodder">
            <div class="txt">
                <p>Nếu bạn không có nhiều thời gian, không tiện tư vấn trên mạng, bạn vui lòng Click vào phần điền thông tin đăng ký đặt hẹn, hoặc cũng có thể gọi trực tiếp đến số điện thoại 18006166, 043.6866.888 để đặt hẹn, sẽ có bác sỹ chuyên khoa tư vấn cho bạn.</p>
                <div class="btn"><a href="<?= link_tuvan;?>">đăng ký mã số khám</a></div>
            </div>
        </div>
        <div class="con">
            <div class="tit"><span>CÁCH THỨC ĐẾN PHÒNG KHÁM</span></div>
            <div class="content_main">
                <div class="lx1">
                    <div class="p1">Điểm xe buýt</div>
                    <h2 style="color: #177fc8;font-size: 20px;">các tuyến xe buýt qua phòng khám</h2>
                    <p>1.điểm dừng là công ty z179</p>
                    <p>2.điểm đứng là kho bãi đá văn điển</p>
                    <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
                </div>
                <div class="lx2">
                    <div class="p1"><span>tự lái xe</span></div>
                    <h2>lộ trình đến phòng khám</h2>
                    <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
                </div>
                <div class="lx3">
                    <div class="p1">tàu hỏa</div>
                    <h2>Lộ trình đến phòng khám</h2>
                    <p style="text-transform: uppercase;">ga văn điển</p>
                    <div class="p2">km12 -  ngọc hồi - thanh trì - hà nội</div>
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
