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
        .nguyennhan .tit{background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_nguyennhan.png") no-repeat left center;}
        .trieuchung .tit{background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_trieuchung.png") no-repeat left center;}
        .nguyhai .tit{background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_nguyhai.png") no-repeat left center;}
        .dieutri .tit{background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_dieutri.png") no-repeat left center;}
        .chiphi .tit{background: url("http://m.namkhoa168.com/public/frontend/imgs/ico_chiphi.png") no-repeat left center;}

        .nguyennhan .tit{
            background-size:auto 100%;
            padding-left: 2rem;
            /*border-bottom: 1px dashed #000000;*/
            font-weight: bold;
            margin-top: 1rem;
            padding-top: 0.2rem;
        }
        .nguyennhan .tit .dongke{
            border-bottom: 1px dashed #177fc8;
            bottom: -1px;
        }
        .nguyennhan .tit a{
            color: #177fc8;
        }
        .nguyennhan ul.articel{
            padding-left: 1rem;
        }
        .nguyennhan ul.articel li{
            border-bottom: none;
            padding: 0.2rem 10px 0.2rem 1.3rem;
        }
        .nguyennhan ul.articel li.xemthem{
            text-align: right;
            background: none;
        }
        .nguyennhan ul.articel li.xemthem a{
            color: red;
            font-style: italic;
        }
        .main_tit2 a{
            float: right;
            color: #ffffff;
            font-weight: 500;
            text-transform: lowercase;
            padding-right: 10px;
        }
    </style>
    <div class="clear2"></div>
    <div class="main_item main_tit2"><?= $cate['cat_name'];?>
        <a href="">click tư vấn <img src="/public/frontend/imgs/ico_tit_muiten.png" alt="tu van"></a>
    </div>
    <div class="main_item articel">
        <div class="nguyennhan">
            <div class="tit">
                <a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyennhan);?>">Nguyên nhân</a>
                <div class="dongke"></div>
            </div>
            <ul class="articel">
                <?php foreach($news_nguyennhan as $val){?>
                    <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
                <li class="xemthem"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyennhan);?>">(Xem thêm)</a> </li>
            </ul>
        </div>
        <div class="nguyennhan trieuchung">
            <div class="tit">
                <a href="<?= link_nguyennhan($cate['cat_rewrite'],new_trieuchung)?>">Triệu chứng</a>
                <div class="dongke"></div>
            </div>
            <ul class="articel">
                <?php foreach($news_trieuchung as $val){?>
                    <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
                <li class="xemthem"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_trieuchung);?>">(Xem thêm)</a> </li>
            </ul>
        </div>
        <div class="nguyennhan nguyhai">
            <div class="tit">
                <a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyhai)?>">Nguy hại</a>
                <div class="dongke"></div>
            </div>
            <ul class="articel">
                <?php foreach($news_nguyhai as $val){?>
                    <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
                <li class="xemthem"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_nguyhai);?>">(Xem thêm)</a> </li>
            </ul>
        </div>
        <div class="nguyennhan dieutri">
            <div class="tit">
                <a href="<?= link_nguyennhan($cate['cat_rewrite'],new_dieutri)?>">Điều trị</a>
                <div class="dongke"></div>
            </div>
            <ul class="articel">
                <?php foreach($news_dieutri as $val){?>
                    <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
                <li class="xemthem"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_dieutri);?>">(Xem thêm)</a> </li>
            </ul>
        </div>
        <div class="nguyennhan chiphi">
            <div class="tit">
                <a href="<?= link_nguyennhan($cate['cat_rewrite'],new_chiphi)?>">Chi phí</a>
                <div class="dongke"></div>
            </div>
            <ul class="articel">
                <?php foreach($news_chiphi as $val){?>
                    <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
                <?php }?>
                <li class="xemthem"><a href="<?= link_nguyennhan($cate['cat_rewrite'],new_chiphi);?>">(Xem thêm)</a> </li>
            </ul>
        </div>
    </div>
    </div>
@stop()
