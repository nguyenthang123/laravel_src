@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="main_content">
    <div class="main_item categories">
        <?php if(!empty($cate['rewrite_parent'])){?>
            <?= m_CateOption($cate['rewrite_parent']);?>
        <?php }else{ ?>
            <?= m_CateOption($cate['cat_rewrite']);?>
        <?php }?>
    </div>
    <div class="main_item main_tit2"><?= $cate['cat_name'];?></div>
    <style>
        .detai_main img{
            max-width: 100%;
        }
    </style>
    <div class="main_item  detai_main">
        <div class="detail_tit">
            <h1><?= $new['new_name']?></h1>
        </div>
        <div class="detail_content">
            <?= $new['new_content'];?>
            <div class="detail_footer">
                <p><strong>Qua mạng:&nbsp;<a href="<?= link_tuvan;?>" style="color: rgb(0, 0, 0); box-sizing: border-box; text-decoration: none; background-color: transparent;"><span style="color:rgb(255, 0, 0)">CLICK TƯ VẤN TRỰC TUYẾN</span></a></strong></p>
                <p><strong>Qua số điện thoại:&nbsp;<span style="color:rgb(255, 0, 0)"><?= phone2;?> – <?= phone1;?> (miễn phí)</span></strong></p>
                <p><strong>Hoặc đến trực tiếp địa chỉ:&nbsp;<span style="color:rgb(255, 0, 0)">Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</span>.</strong></p>
                <p><strong>Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.</strong></p>
            </div>
        </div>
    </div>
    <div class="clear2"></div>
    <?php if(!empty($baivietlienquan)){?>
        <div class="main_item main_tit2">Bài viết liên quan</div>
        <div class="main_item articel">
            <ul class="articel">
                <?php foreach($baivietlienquan as $key=>$val){?>
                    <li><a href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>
@stop()