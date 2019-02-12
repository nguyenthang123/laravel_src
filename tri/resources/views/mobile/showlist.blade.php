@extends('mobile.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
    <!--===================-->
    <div class="main_content">
        <div class="main_item categories">
            <?= m_CateOption($cate);?>
            <?= m_CateSubOption($cate);?>
            <?php if(!empty($cate_sub)){?>
                <?php $count=count($cate_sub);?>
                <div class="categories_this categories_this_item<?= $count;?>">
                    <?php foreach($cate_sub as $val){?>
                        <?php if($val->cat_alias=='roi-loan-ham-muon-tinh-duc'){$style='line-height: 15px;padding-top: 0.4rem;';}else{$style='';}?>
                        <div class="categories_this_item" style="<?= $style;?>">
                            <a href="/<?= $val->cat_alias;?>"><?= $val->name;?></a>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <div class="clear2"></div>
        <div class="main_item main_tit2"><?= $cate['name'];?></div>
        <div class="main_item articel">
            <ul class="articel">
                <?php foreach($products as $val){?>
                    <li><a href="/<?= $val->product_alias;?>"><?= $val->name;?></a> </li>
                <?php }?>
            </ul>
            <?= $products->render(); ?>
        </div>
    </div>
@stop()