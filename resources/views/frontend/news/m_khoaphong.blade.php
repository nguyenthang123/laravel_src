@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="/public/mobile/css/khoa-phong.css" rel="stylesheet"/>
<div class="container content-noi-dung">
    <div class="row">
        <div class="col-md-6 noi-dung col-sm-3 nam-khoa">
            <div class="row click-me">
                <a href="<?= site_benhnamkhoa;?>">
                    <div class="chi-tiet" style="">
                        Nam khoa
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 noi-dung col-sm-3 hoi-nach" style="margin-right:0">
            <div class="row click-me">
                <a href="<?= site_benhtaimuihong;?>">
                    <div class="chi-tiet" style="">
                        Tai mũi họng
                    </div>
                </a>
            </div>
        </div>
        <!--<div class="col-md-6 noi-dung col-sm-3 phu-khoa" style="margin-right:0">
            <div class="row click-me">
                <a href="<?/*= site_benhphukhoa;*/?>">
                    <div class="chi-tiet" style="">
                        Phụ khoa
                    </div></a>
            </div>
        </div>-->
    </div>
    <div class="row">
        <div class="col-md-6 noi-dung col-sm-3 benh-xa-hoi" >
            <div class="row click-me">
                <a href="<?= site_benhxahoi;?>">
                    <div class="chi-tiet">
                        Bệnh xã hội
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 noi-dung col-sm-3 truc-trang-hau-mon" style="margin-right:0">
            <div class="row click-me">
                <a href="<?= site_benhtri;?>">
                    <div class="chi-tiet" style="">
                        Bệnh trĩ
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <!--<div class="col-md-6 noi-dung col-sm-3 da-day" >
            <div class="row click-me">
                <a href="<?/*= site_benhdaday;*/?>">
                    <div class="chi-tiet">
                        Dạ dầy
                    </div>
                </a>
            </div>
        </div>-->

    </div>
</div>
@stop()