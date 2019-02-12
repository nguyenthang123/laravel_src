@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/tien-liet-tuyen.css">
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/list_bv.css">
<div class="row">
    <?= bannersOpiton('','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen list_baiviet">
    <div class="clear2"></div>
    <?= main_ico();?>
    <div class="clear2"></div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left" style="float: right; width:225px !important;">
                <?= trieuchungOption($cate['rewrite_parent']);?>
                <div class="clear2"></div>
                <style>
                    .tien_liet_tuyen .cha_zxbtn .left{
                        width: 224px;
                    }
                </style>
                <div class="cha_zxbtn">
                    <?= sidebar_duongdaynong();?>
                </div>
                <div class="clear2"></div>
                <?= dangkykham();?>
            </div>
            <div class="right" style="border: 1px solid #ccc;width: 865px;">
                <div class="tit_detail">
                    <a href="<?= domain;?>">Trang chủ</a>
                    > <a href="/<?= $cate['cat_rewrite'];?>"><?= $cate['cat_name'];?></a>
                    > <span><?= $new['new_name'];?></span>
                    <!--<i style="float: right;padding-right: 5px;">Ngày ??ng : <?/*= date_from_data($new['updated_at']);*/?></i>-->
                </div>
                <div class="clear"></div>
                <div class="ico_detail">
                    <div class="col-lg-12">
						<div style="width:650px;margin:auto;">
                        <img src="<?= fixk;?>/public/frontend/images/home/ico_detail.png" alt="phong kham">
						</div>
                        <div class="clear" style="border-bottom: 1px solid #ccc;"></div>
                    </div>
                </div>
                <div class="baiviet_detail" style="">
                    <!--rating-->
                    <style>
                        .unit-rating {list-style: none;margin: 0px;padding: 0px;height: 30px;position: relative;background: url(http://cachphathai.com/lib/rating/images/starrating.gif) top left repeat-x;}
                        .unit-rating li.current-rating {background: url(http://cachphathai.com/lib/rating/images/starrating.gif) left bottom;position: absolute;height: 30px;display: block;text-indent: -9000px;z-index: 1;}
                        .unit-rating li {text-indent: -90000px;padding: 0px;margin: 0px;float: left;}
                        .unit-rating li a {outline: none;display: inline-block;width: 30px;height: 30px;text-decoration: none;text-indent: -9000px;z-index: 20;position: absolute;padding: 0px;}
                        .unit-rating li a:hover {background: url(http://cachphathai.com/lib/rating/images/starrating.gif) left center;z-index: 2;left: 0px;}
                        .unit-rating a.r1-unit{left: 0px;}
                        .unit-rating a.r1-unit:hover{width:30px;}
                        .unit-rating a.r2-unit{left:30px;}
                        .unit-rating a.r2-unit:hover{width: 60px;}
                        .unit-rating a.r3-unit{left: 60px;}
                        .unit-rating a.r3-unit:hover{width: 90px;}
                        .unit-rating a.r4-unit{left: 90px;}
                        .unit-rating a.r4-unit:hover{width: 120px;}
                        .unit-rating a.r5-unit{left: 120px;}
                        .unit-rating a.r5-unit:hover{width: 150px;}
                        .unit-rating a.r6-unit{left: 150px;}
                        .unit-rating a.r6-unit:hover{width: 180px;}
                        .unit-rating a.r7-unit{left: 180px;}
                        .unit-rating a.r7-unit:hover{width: 210px;}
                        .unit-rating a.r8-unit{left: 210px;}
                        .unit-rating a.r8-unit:hover{width: 240px;}
                        .unit-rating a.r9-unit{left: 240px;}
                        .unit-rating a.r9-unit:hover{width: 270px;}
                        .unit-rating a.r10-unit{left: 270px;}
                        .unit-rating a.r10-unit:hover{width: 300px;}
                    </style>
                    <?php
                    $width=30*$new['new_rating_avg'];
                    ?>
                    <?php if(!empty($new_voited)){?>
                        <ul id="unit_ul59" class="unit-rating" style="width: 300px;">
                            <li class="current-rating" style="width: <?= $width;?>px;">Currently <?= number_format($new['new_rating_avg'],2);?>/10</li>
                        </ul>
                        <div itemscope="" itemtype="http://schema.org/Article">
                            <div itemprop="name" class="title-vote"></div>
                            <div class="voted" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                điểm trung bình:
                                <span itemprop="ratingValue" style="font-weight:800;"><?= number_format($new['new_rating_avg'],2);?></span> /
                                <span itemprop="bestRating">10</span> (
                                <span itemprop="ratingCount"><?= $new['new_rating_count'];?></span>  lượt đánh giá )
                            </div>
                        </div>
                    <?php }else{?>
                        <div id="rating" style="">
                            <ul class="unit-rating" style="width: 300px;">
                                <li class="current-rating" style="width: <?= $width;?>px;">Currently <?= number_format($new['new_rating_avg'],2);?>/10</li>
                                <?php for($i=0;$i<11;$i++){?>
                                    <li>
                                        <a href="/ajaxs/rating?&id=<?= $new['id'];?>&scores=<?= $i;?>" title="<?= $i;?> out of 10" class="r<?= $i;?>-unit rater" rel="nofollow" target="_self"><?= $i;?></a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div itemscope="" itemtype="http://schema.org/Article">
                                <div itemprop="name" class="title-vote"></div>
                                <div class="voted" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                    điểm trung bình:
                                    <span itemprop="ratingValue" style="font-weight:800;"><?= number_format($new['new_rating_avg'],2);?></span> /
                                    <span itemprop="bestRating">10</span> (
                                    <span itemprop="ratingCount"><?= $new['new_rating_count'];?></span>  lượt đánh giá )
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('a.rater').click(function(e){
                                    e.preventDefault();
                                    var parameterString = this.href.replace(/.*\?(.*)/, "$1");
                                    $.ajax({
                                        type:'GET',
                                        url:'/ajaxs/rating',
                                        data:parameterString,
                                        success: function(data){
                                            alert('thanks for voting!');
                                            $( "#rating" ).html(data);
                                        }
                                    });
                                });
                            });
                        </script>
                    <?php }?>
                    <!--end rating-->
                    <h1 class="tit"><?= $new['new_name'];?></h1>
                    <div class="content" style="padding: 0 15px;text-align: justify;">
                        <?= $new['new_content'];?>
                    </div>
                    <div class="new_detail_lv">
                        <style>
                            .new_detail_lv{
                                width: 670px;
                                margin: auto;
                                margin-bottom: 35px;
                                background: #39bbd1;
                                border-radius: 10px;
                            }
                            .new_detail_lv p{
                                margin-bottom: 15px;
                                padding-left: 15px;
                            }
                        </style>
                        <div style="padding: 20px;">
                            <p style="text-align:justify">
                                <strong><img src="http://trihanoi.com/public/images/home/benh-18.png" alt="tu van"> <a href="<?= link_tuvan;?>"><span style="color:#ffffff"> CLICK TƯ VẤN TRỰC TUYẾN</span></a></strong>
                            </p>
                            <p style="text-align:justify">
                                <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dttv.png" alt="dttv"><span style="color:#ffffff"> <?= phone1;?> – <?= phone2;?></span></strong>
                            </p>
                            <p style="text-align:justify">
                                <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dc.png" alt="dc"><span style="color:#ffffff"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</span></strong>
                            </p>
                            <p style="text-align:justify">
                                <strong>Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.</strong>
                            </p>
                            <p style="text-align:justify">
                                <strong>(Chúc bệnh nhân sớm hồi phục sức khỏe.)</strong>
                            </p>
                        </div>
                    </div>
                    <div class="new_hot" style="padding-left:15px;">
                        <div class="tit_tv">không có nội dung bạn cần, hãy tư vấn trực tiếp bác sỹ > > > > </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #39bbd1">
                                    <img src="<?= fixk;?>/public/frontend/img/detail/ico_bs.png" alt="tu van 168"> tìm hiểu bệnh
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #177fc8;">
                                    <img src="<?= fixk;?>/public/frontend/img/detail/dola.png" alt="tu van 168"> tư vấn chi phí
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #519080;">
                                    <img src="<?= fixk;?>/public/frontend/img/detail/ico_bs.png" alt="tu van 168"> bác sỹ tư vấn
                                </a>
                            </div>
                        </div>
                        <div class="row tinnong">
                            <label>Tin nóng</label>
                            <div class="col-sm-12" style="margin-bottom: 25px;">
                                <div style="width: 31%;border:2px solid #39bbd1;float: left"></div>
                                <div style="width: 69%;border:2px solid #eee;float: left"></div>
                            </div>
                            <div class="col-md-12 bv_lienquan">
                                <ul>
                                    <?php foreach($baivietlienquan as $key=>$val){?>
                                    <li> - <a href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row quypham" style="padding-left:40px;">
                    <ul>
                        <li class="qp qp1" data-i="1">quy phạm hóa chất lượng</li>
                        <li class="qp" data-i="2">quy phạm hóa thao tác bác sỹ</li>
                        <li class="qp" data-i="3">chuẩn đoán điều trị quy phạm hóa</li>
                        <li class="qp" data-i="4">dịch vụ quy phạm hóa</li>
                    </ul>
                    <style>
                        .qp_content img{height: 246px;}
                    </style>
                    <div class="qp_content qp_content1" style="display: block;">
                        <img src="http://trihanoi.com/public/frontend/images/detail/qp_content1.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content2" style="display: none;">
                        <img src="http://trihanoi.com/public/frontend/images/detail/qp_content2.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content3" style="display: none;">
                        <img src="http://trihanoi.com/public/frontend/images/detail/qp_content3.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content4" style="display: none;">
                        <img src="http://trihanoi.com/public/frontend/images/detail/qp_content4.jpg" class="img-responsive">
                    </div>
                </div>
                <script>
                    $(document).ready(function(){
                        showtab_detail('qp');
                    })
                </script>
                <!--<script>
                    $(document).ready(function(){
                        $('div.content img').each(function(){
                            var ab=$(this).attr("src");
                            fileExt = ab.split('/').shift();
                            if(fileExt==""){

                                ab="http://namkhoa168.com"+ab;

                            }
                            $(this).attr('src',"http://namkhoa168.com/watermark.php?watermark=http://namkhoa168.com/public/frontend/images/watermark.png&image="+ab);
                        })
                    })
                </script>-->
            </div>
        </div>
    </div>
</div>
@stop()

