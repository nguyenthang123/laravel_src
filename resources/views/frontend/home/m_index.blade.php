@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container content-noi-dung">
    <div class="row">
        <div class="col-md-6 noi-dung col-sm-3 gioi-thieu">
            <div class="row click-me">
                <a href="<?= mobile_link_gioithieu;?>">
                    <div class="chi-tiet" style="">
                        Giới thiệu
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 noi-dung col-sm-3 khoa-phong" style="margin-right:0">
            <div class="row click-me">
                <a href="/khoa-phong">
                    <div class="chi-tiet" style="">
                        Khoa phòng
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 noi-dung col-sm-3 ky-thuat">
            <div class="row click-me">
                <a href="<?= link_mobile_cdsuckhoe;?>">
                    <div class="chi-tiet">
                        Hoạt động<br>ưu đãi
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 noi-dung col-sm-3 lien-he" style="margin-right:0">
            <div class="row click-me">
                <a href="tel:18006166">
                    <div class="chi-tiet" style="">
                        Liên hệ
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@stop()