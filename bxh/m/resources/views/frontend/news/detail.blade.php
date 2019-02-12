@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="main_content">
    <div class="main_item categories">
        <?php if(!empty($cate['rewrite_parent'])){?>
            <?= m_CateOption($cate['rewrite_parent']);?>
        <?php }else{ ?>
            <?= m_CateOption($cate['cat_rewrite']);?>
        <?php }?>
    </div>
    <div class="main_item main_tit2"><?= $cate['cat_name'];?></div>
    <div class="main_item  detai_main">
        <div class="detail_tit">
            <h1><?= $new['new_name']?></h1>
        </div>
        <div class="detail_content">
            <?= $new['new_content'];?>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('div.detail_content img').each(function(){
                var ab=$(this).attr("src");
                fileExt = ab.split('/').shift();
                if(fileExt==""){
                    ab="http://phongkhambenhxahoi.vn"+ab;
                }
                $(this).attr('src',ab);
            })
        })
    </script>
    <div class="clear2"></div>
    <?php if(!empty($baivietlienquan)){?>
    <div class="main_item main_tit2">Bài viết liên quan</div>
    <div class="main_item articel">
        <ul class="articel">
            <?php foreach($baivietlienquan as $key=>$val){?>
            <li><a href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
            <?php }?>
        </ul>
    </div>
    <?php }?>
</div>
@stop()
