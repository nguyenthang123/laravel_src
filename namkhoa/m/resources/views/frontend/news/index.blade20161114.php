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
    <div class="clear2"></div>
    <div class="main_item main_tit2"><?= $cate['cat_name'];?></div>
    <div class="main_item articel">
        <ul class="articel">
            <?php foreach($news as $val){?>
            <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
            <?php }?>
        </ul>
    </div>
    </div>
@stop()
