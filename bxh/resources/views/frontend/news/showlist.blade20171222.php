@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<link href="<?=domain?>/public/frontend/css/list_bv.css" rel="stylesheet">
@section('content')
<div class="row">
    <div id="banners">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg_ban_item1" style="background:#e9f7fa;">
                        <div class="ban_item">
                            <a href="">
                                <img src="<?= domain;?>/public/frontend/images/tienliettuyen/banner.jpg" alt="phong kham da khoa">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_item" style="height: 40px;margin-top: -40px;">
            <div style="position: absolute;display: block;background: white;height: 40px;line-height: 40px;padding: 0 15px;min-width: 290px;">
                <a style="font-weight: 600;text-transform: uppercase;color: #000000;">phòng khám đa khoa Giải Phóng Hà Nội</a>
            </div>
        </div>
    </div>
</div>
<div class="row tien_liet_tuyen list_baiviet">
    <div class="clear2"></div>
    <?= main_ico();?>
    <div class="clear2"></div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left" style="float: right">
                <?= trieuchungOption($cate['rewrite_parent']);?>
                <div class="clear2"></div>
                <div class="cha_zxbtn">
                    <?= sidebar_duongdaynong();?>
                </div>
            </div>
            <div class="right" style="border: 1px solid #ccc;">
                <div class="tit">
                    <span>
                        <?= $breadcum;?>
                    </span>
                </div>
                <?php foreach($news as $key=>$val){?>
                    <div class="col-lg-12 list_bv">
                        <div class="col-lg-12 boder_b">
                            <div class="col-lg-3" style="padding-left: 0px;">
                                <table>
                                    <tr>
                                        <td>
                                            <a href="<?= domain;?>/<?= $val['new_rewrite'];?>">
                                                <img src="<?= domain;?><?= $val['new_img'];?>" style="max-width: 100%" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-9" style="padding-left: 0px;padding-right: 0px;">
                                <h3><a href="<?= domain;?>/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],75);?></a> </h3>
                                <div class="des">
                                    <?= substr_font($val['new_description'],400);?>
                                </div>
                                <a class="xemthem" href="<?= domain;?>/<?= $val['new_rewrite'];?>">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <div class="phantrang">
                    <?php echo $news->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()
