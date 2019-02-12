@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container">
    <div class="row danh-muc-1">
        <div class="moduletable">
            <ul>
                <?php foreach($sub_cate as $val){?>
                    <li><a href="/<?= $val['cat_rewrite'];?>"><?= $val['cat_name'];?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <?php foreach($sub_cate as $key=>$val){?>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/<?= $val['cat_rewrite'];?>"><?= $val['cat_name'];?></a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($val['lv2'] as $keylv2=>$vallv2){ ?>
            <?php if(!empty($vallv2['new_img'])){?>
                <img src="<?= $vallv2['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $vallv2['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($val['lv2'] as $keylv2=>$vallv2){?>
                    <?php if($keylv2<4){?>
                        <li>
                            <a target="_blank" href="/<?= $vallv2['new_rewrite'];?>"><?= substr_font($vallv2['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <?php }?>
    <div class="clearfix"></div>
</div>
@stop()
