@extends('frontend.layouts.layout')@section('title')<?php echo $seo['title']; ?>@stop()@section('keywords')<?php echo $seo['keywords']; ?>@stop()@section('description')<?php echo $seo['description']; ?>@stop()@section('content')
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/tien-liet-tuyen.css">
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/list_bv.css">
<div
    class="row">    <?= bannersOpiton('', '', 'background:#e9f7fa;'); ?></div>
<div class="row tien_liet_tuyen list_baiviet">
    <div class="clear2"></div>    <?= main_ico(); ?>
    <div class="clear2"></div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left"
                 style="float: right;">                <?= trieuchungOption($cate['rewrite_parent']); ?>
                <div class="clear2"></div>
                <div class="cha_zxbtn">                    <?= sidebar_duongdaynong(); ?>                </div>
                <div class="clear2"></div>                <?= dangkykham(); ?>            </div>
            <div class="right" style="border: 1px solid #ccc;">
                <div class="tit_detail"><a href="<?= domain; ?>">Trang chủ</a> > <a
                        href="/<?= $cate['cat_rewrite']; ?>"><?= $cate['cat_name']; ?></a> >
                    <span><?= $new['new_name']; ?></span></div>
                <div class="clear"></div>
                <div class="ico_detail">
                    <div class="col-lg-12" style="text-align: center"><img
                            src="<?= domain;?>/public/frontend/images/home/ico_detail.png">

                        <div class="clear" style="border-bottom: 1px solid #ccc;"></div>
                    </div>
                </div>
                <div class="baiviet_detail" style=""><h1 class="tit"><?= $new['new_name']; ?></h1>

                    <div class="content"
                         style="padding: 0 15px;">                        <?= $new['new_content']; ?>                    </div>
                    <div class="new_detail_lv">
                        <style>                            .new_detail_lv {
                                width: 670px;
                                margin: auto;
                                margin-bottom: 35px;
                                background: #39bbd1;
                                border-radius: 10px;
                            }

                            .new_detail_lv p {
                                margin-bottom: 15px;
                                padding-left: 15px;
                            }                        </style>
                        <div style="padding: 20px;"><p style="text-align:justify"><strong><img
                                        src="http://trihanoi.com/public/images/home/benh-18.png" alt="tu van"> <a
                                        href="<?= link_tuvan; ?>"><span
                                            style="color:#ffffff"> CLICK TƯ VẤN TRỰC TUYẾN</span></a></strong></p>

                            <p style="text-align:justify"><strong><img
                                        src="<?= domain;?>/public/frontend/img/home/ico_detailnew_dttv.png" alt="dttv"><span
                                        style="color:#ffffff"> <?= phone1; ?> – <?= phone2; ?> - <?= phone3; ?> (miễn phí)</span></strong>
                            </p>

                            <p style="text-align:justify"><strong><img
                                        src="<?= domain;?>/public/frontend/img/home/ico_detailnew_dc.png" alt="dc"><span
                                        style="color:#ffffff"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</span></strong></p>

                            <p style="text-align:justify"><strong>Phòng khám làm việc tất cả các ngày trong tuần, bao
                                    gồm cả ngày lễ.</strong></p></div>
                    </div>
                    <div class="new_hot">
                        <div class="tit_tv">không có nội dung bạn cần, hãy tư vấn trực tiếp với bác sỹ > > > ></div>
                        <div class="col-lg-12">
                            <div class="col-lg-4"><a href="<?= link_tuvan; ?>" class="btn" style="background: #39bbd1">
                                    <img src="<?= domain;?>/public/frontend/img/detail/ico_bs.png" alt="tu van"> tìm hiểu bệnh
                                </a></div>
                            <div class="col-lg-4"><a href="<?= link_tuvan; ?>" class="btn" style="background: #177fc8;">
                                    <img src="<?= domain;?>/public/frontend/img/detail/dola.png" alt="tu van"> tư vấn chi phí
                                </a></div>
                            <div class="col-lg-4"><a href="<?= link_tuvan; ?>" class="btn" style="background: #519080;">
                                    <img src="<?= domain;?>/public/frontend/img/detail/ico_bs.png" alt="tu van"> bác sỹ tư vấn
                                </a></div>
                        </div>
                        <div class="row tinnong"><label>Tin nóng</label>

                            <div class="col-sm-12" style="margin-bottom: 25px;">
                                <div style="width: 31%;border:2px solid #39bbd1;float: left"></div>
                                <div style="width: 69%;border:2px solid #eee;float: left"></div>
                            </div>
                            <div class="col-md-12 bv_lienquan">
                                <ul>                                    <?php foreach ($baivietlienquan as $key => $val) { ?>
                                        <li>
                                            -<a href="<?= domain;?>/<?= $val['new_rewrite']; ?>"><?= $val['new_name']; ?></a>
                                        </li>                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row quypham">
                    <ul>
                        <li class="qp qp1" data-i="1">quy phạm hóa<br>chất lượng</li>
                        <li class="qp" data-i="2">quy phạm hóa<br>thao tác bác sỹ</li>
                        <li class="qp" data-i="3" style="letter-spacing: -1px;">chẩn đoán điều trị<br>quy phạm hóa</li>
                        <li class="qp" data-i="4">dịch vụ<br>quy phạm hóa</li>
                    </ul>
                    <style>                        .qp_content img {
                            height: 246px;
                            width: 865px;
                        }                    </style>
                    <div class="qp_content qp_content1" style="display: block;"><img
                            src="http://trihanoi.com/public/frontend/images/detail/qp_content1.jpg"
                            class="img-responsive"></div>
                    <div class="qp_content qp_content2" style="display: none;"><img
                            src="http://trihanoi.com/public/frontend/images/detail/qp_content2.jpg"
                            class="img-responsive"></div>
                    <div class="qp_content qp_content3" style="display: none;"><img
                            src="http://trihanoi.com/public/frontend/images/detail/qp_content3.jpg"
                            class="img-responsive"></div>
                    <div class="qp_content qp_content4" style="display: none;"><img
                            src="http://trihanoi.com/public/frontend/images/detail/qp_content4.jpg"
                            class="img-responsive"></div>
                </div>
                <script>                    $(document).ready(function () {
                        showtab_detail('qp');
                    })                </script>
                <!--<script>                    $(document).ready(function(){                        $('div.content img').each(function(){                            var ab=$(this).attr("src");                            fileExt = ab.split('/').shift();                            if(fileExt==""){                                ab="http://namkhoa168.com"+ab;                            }                            $(this).attr('src',"http://namkhoa168.com/watermark.php?watermark=http://namkhoa168.com/public/frontend/images/watermark.png&image="+ab);                        })                    })                </script>-->
            </div>
        </div>
    </div>
</div>@stop()