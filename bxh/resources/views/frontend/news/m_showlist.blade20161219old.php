@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container">
    <div id="main-content">
        <div class="brecum">
            <div class="moduletable">
                <div class="breadcrumbs">
                    <span class="showHere">Bạn đang xem: </span><a href="/" class="pathway">Trang chủ</a> <img src="/public/mobile/arrow.png" alt=""> <span><?= $cate['cat_name'];?></span>
                </div>
            </div>
        </div>
        <div class="component">
            <div class="blog">
                <h1 style="font-size:15px;">
                    <span class="subheading-category"><?= $cate['cat_name'];?></span>
                </h1>
                <div class="items-leading">
                    <?php foreach($news as $val){?>
                    <div class="listiteams">
                        <div class="leading-0">
                            <h2>
                                <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                            </h2>
                            <?php if(!empty($val['new_img'])){?>
                            <div class="img-intro-left" style="text-align: center;">
                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                            </div>
                            <?php }?>
                            <p style="padding-top:0px;">
                                <?= substr_font($val['new_description'],200);?>
                            </p>
                            <p class="readmore">
                                <a rel="nofollow" href="/<?= $val['new_rewrite'];?>">
                                    Xem thêm &gt;&gt;</a>
                            </p>
                            <div class="item-separator"></div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="pagination">
                    <?= $news->render();?>
                </div>
                <!-- END COMPONENT-->
            </div>
            <!--END COMPONET-->
        </div>
</div>
@stop()
