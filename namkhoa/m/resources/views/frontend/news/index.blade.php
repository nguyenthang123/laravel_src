@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<link href="<?=domain?>/public/frontend/css/list_bv.css" rel="stylesheet">
@section('content')
<div class="main_content">
    <div class="main_item categories">
        <?= CateOption($cate['cat_rewrite']);?>
        <?= CateSubOption($cate);?>
        <?php $count=count($cate_sub);?>
        <div class="categories_this categories_this_item<?= $count;?>">
            <?php foreach($cate_sub as $val){?>
                <?php if($val['cat_rewrite']=='roi-loan-ham-muon-tinh-duc'){$style='line-height: 15px;padding-top: 0.4rem;';}else{$style='';}?>
            <div class="categories_this_item" style="<?= $style;?>">
                <a href="/<?= $val['cat_rewrite'];?>"><?= $val['cat_name'];?></a>
            </div>
            <?php }?>
        </div>
    </div>
    <style>
        .nguyennhan .tit{
            background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_nguyennhan.png") no-repeat left center;
            padding-left: 15px;
            border-bottom: 1px dashed #000000;
            font-weight: bold;
            margin-top: 1rem;
        }
        .nguyennhan ul.articel li{
            background: none;
            border-bottom: none;
            padding: 0.2rem 10px 0.2rem 1rem;
        }
    </style>
    <div class="clear2"></div>
    <div class="main_item main_tit2"><?= $cate['cat_name'];?></div>
    <div class="main_item articel">
        <div class="nguyennhan">
            <div class="tit"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyennhan)?>">Nguyên nhân</a></div>
            <ul class="articel">
                <?php foreach($news_nguyennhan as $val){?>
                    <li>- <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
        <div class="nguyennhan">
            <div class="tit"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_trieuchung)?>">Triệu chứng</a></div>
            <ul class="articel">
                <?php foreach($news_trieuchung as $val){?>
                    <li>- <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
        <div class="nguyennhan">
            <div class="tit"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyhai)?>">Nguy hại</a></div>
            <ul class="articel">
                <?php foreach($news_nguyhai as $val){?>
                    <li>- <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
        <div class="nguyennhan">
            <div class="tit"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_dieutri)?>">Điều trị</a></div>
            <ul class="articel">
                <?php foreach($news_dieutri as $val){?>
                    <li>- <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
        <div class="nguyennhan">
            <div class="tit"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_chiphi)?>">Chi phí</a></div>
            <ul class="articel">
                <?php foreach($news_chiphi as $val){?>
                    <li>- <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
@stop()
