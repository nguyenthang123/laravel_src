@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container">
    <div class="row danh-muc-1">
        <div class="moduletable">
            <ul>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_nguyennhan)?>" >Nguyên nhân</a></li>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_trieuchung)?>" >Triệu chứng</a></li>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_nguyhai)?>" >Nguy hại</a></li>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_dieutri)?>" >Điều trị</a></li>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_chiphi)?>" >Chi phí</a></li>
                <li><a href="<?= linkto($cate['cat_rewrite'],rewrite_kiemtra)?>" >Kiểm tra</a></li>
            </ul>
        </div>
    </div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_nguyennhan)?>">Nguyên nhân</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_nguyennhan as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_nguyennhan as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_trieuchung)?>">Triệu chứng</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_trieuchung as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_trieuchung as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_nguyhai)?>">Nguy hại</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_nguyhai as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_nguyhai as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_dieutri)?>">Điều trị</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_dieutri as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_dieutri as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_chiphi)?>">Chi phí</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_chiphi as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_chiphi as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="<?= linkto($cate['cat_rewrite'],rewrite_kiemtra)?>">Kiểm tra</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_kiemtra as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
            <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_kiemtra as $key=>$val){?>
                    <?php if($key<4){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
@stop()
