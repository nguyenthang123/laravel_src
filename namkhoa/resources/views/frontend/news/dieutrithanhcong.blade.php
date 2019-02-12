@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<?php $rewrite='/';?>
<?= bannersOpiton($cate['cat_img'],$cate['cat_img_style']);?>
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/noi-tiet-to-nu.css">
<div class="row noitiettonu">
<div class="main_item shadow" style="padding: 10px;background:#ffffff!important;overflow: hidden;position: relative">
<div class="col-lg-12 breadcrumb">
    <img src="<?php echo domain;?>/public/frontend/img/noi-tiet-to-nu/ico_trangchu.png"><a href="<?php echo domain;?>">Trang chủ</a> >
    <a href="">điều trị thành công</a>
</div>
<div class="row">
<div class="col-lg-9" style="width: 75%">
    <div class="dmright">
        <?= noitiettonu_bspk();?>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/ke-hoach-hoa" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc1">
                    <p>Kế hoạch hóa</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_kehoachhoa as $val){?>
                    <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/benh-co-tu-cung" title="Xem thêm">
                    <div class="dm_benh_dttc dm_benh_dttc2">
                        <p>bệnh cổ tử cung</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_benhcotucung as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/chinh-hinh-phu-khoa" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc3">
                    <p>chỉnh hình phụ khoa</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_chinhhinhphukhoa as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/viem-nhiem-phu-khoa" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc4">
                    <p>viêm nhiễm phụ khoa</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_viemnhiemphukhoa as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/vo-sinh" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc5">
                    <p>vô sinh</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_vosinh as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/noi-tiet-to-nu" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc6">
                    <p>nội tiết tố nữ</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_noitiettonu as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="dm_kengang" style="margin-top: 15px;"></div>
            <div class="col-lg-3 dm_dttc">
                <a href="/dieu-tri-thanh-cong/benh-xa-hoi" title="Xem thêm">
                <div class="dm_benh_dttc dm_benh_dttc7">
                    <p>bệnh xã hội</p>
                </div>
                </a>
            </div>
            <div class="col-lg-9 bvtrieuchung">
                <ul>
                    <?php foreach($news_benhxahoi as $val){?>
                        <li> > <a href="<?php echo $rewrite.$val['new_rewrite'];?>"><?= substr_font($val['new_name'],85);?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="dm_kengang" style="margin-bottom: 0"></div>
        <!--phan trang-->
        <div class="phantrang">
            <?php
            if(!empty($news)){
                echo $news->render();
            }
            ?>
        </div>
    </div>
</div>
<div class="col-lg-3" style="width: 25%;padding-left: 10px;padding-right: 0px;">
    @include('frontend.layouts.contentright')
</div>
</div>
</div>
</div>
<div c
@stop()
