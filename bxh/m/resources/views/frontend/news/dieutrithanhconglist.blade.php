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
            <?php echo $cate['cat_name'];?>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="dmright">
                    <?= noitiettonu_bspk();?>
                    <div class="row">
                        <div class="tuvanbasy"> <?= $cate['cat_name'];?> </div>
                    </div>
                    <div class="clear"></div>
                    <?php foreach($news as $val){?>
                    <div class="row">
                        <?php if(!empty($val['new_img'])){?>
                        <div class="col-lg-3" style="padding-right: 5px;">
                            <a href="<?= $val['new_rewrite'];?>"> <img src="<?= $val['new_img'];?>" class="img-thumbnail" style="max-width: 155px;"></a>
                        </div>
                        <?php }?>
                        <div class="col-lg-9 bvtrieuchung">
                            <a href="/<?= $val['new_rewrite'];?>"><h3><?= $val['new_name'];?></h3></a>
                            <p><?= substr_font($val['new_description'],350);?></p>
                        </div>
                    </div>
                        <div class="dm_kengang" style="margin-bottom: 10px;margin-top: 10px;"></div>
                    <?php }?>
                    <div class="clear"></div>
                    <!--phan trang-->
                    <div class="phantrang">
                        <?php echo $news->render(); ?>
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
