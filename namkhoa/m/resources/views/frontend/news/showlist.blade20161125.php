@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="main_content">
    <div class="main_item categories">
        <?= CateOption($cate['cat_rewrite']);?>
        <?= CateSubOption($cate);?>
        <?php if(!empty($cate_sub)){?>
        <?php $count=count($cate_sub);?>
        <div class="categories_this categories_this_item<?= $count;?>">
            <?php foreach($cate_sub as $val){?>
                <?php if($val['cat_rewrite']=='roi-loan-ham-muon-tinh-duc'){$style='line-height: 15px;padding-top: 0.4rem;';}else{$style='';}?>
                <div class="categories_this_item" style="<?= $style;?>">
                    <a href="/<?= $val['cat_rewrite'];?>"><?= $val['cat_name'];?></a>
                </div>
            <?php }?>
        </div>
        <?php }?>
    </div>
    <div class="clear2"></div>
    <div class="main_item main_tit2"><?php if(!empty($txt_nguyennhan)){ echo $txt_nguyennhan.'- ';}?><?= $cate['cat_name'];?></div>
    <div class="main_item articel">
        <ul class="articel">
            <?php foreach($news as $val){?>
                <li><a href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
            <?php }?>
        </ul>
    </div>
</div>
@stop()
