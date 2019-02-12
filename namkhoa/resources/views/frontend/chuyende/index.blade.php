@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<?= bannersOpiton($cate['cat_img'],$cate['cat_img_style']);?>
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/noi-tiet-to-nu.css">
<div class="row noitiettonu">
    <div class="main_item shadow" style="padding: 10px;background:#ffffff!important;overflow: hidden;position: relative;">
        <div class="col-lg-12 breadcrumb">
            <img src="<?php echo domain;?>/public/frontend/img/noi-tiet-to-nu/ico_trangchu.png"><a href="<?php echo domain;?>">Trang chủ</a> >
            <?= $cd_name;?>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="dmright">
                    <?= noitiettonu_bspk();?>
                    <div class="row">
                        <div class="tuvanbasy">chuyên đề <?= $cd_name;?> </div>
                    </div>
                    <style >
                        .cd_item{
                            height: 200px;
                        }
                    </style>
                    <div class="clear"></div>
                    <?php foreach($cd_list as $val){?>
                    <div class="col-lg-6 cd_item">
                        <?php if(!empty($val['cd_img'])){?>
                        <div class="row">
                            <a href="<?= $val['cd_link'];?>"> <img src="<?= $val['cd_img'];?>" style="width:100%;max-height: 140px;"></a>
                        </div>
                        <?php }?>
                        <div class="row bvtrieuchung" style="text-align: center;margin-top: 8px;">
                            <a href="/<?= $val['cd_link'];?>"><h3><?= $val['cd_name'];?></h3></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php }?>
                    <div class="clear"></div>
                    <!--phan trang-->
                    <div class="phantrang">
                        <?php //echo $news->render(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" style="padding-left: 10px;padding-right: 0px;">
                @include('frontend.layouts.contentright')
            </div>
        </div>
    </div>
</div>
<div c
@stop()
