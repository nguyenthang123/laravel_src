@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container">
    <div class="row danh-muc-1">
        <table width="80%" align="center" cellpadding="10" cellspacing="5">
            <tr>
                <td ><a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a></td>
                <td ><a href="/<?= rewrite_benhlau;?>">Bệnh lậu</a></td>
            </tr>
            <tr>
                <td ><a href="/<?= rewrite_giangmai;?>">Bệnh giang mai</a></td>
                <td ><a href="/<?= rewrite_munropsinhduc;?>">Mụn rộp sinh dục</a></td>
            </tr>
            <!--<tr>
                <td ><a href="/vo-sinh-nam">Vô sinh nam</a></td>
                <td ><a href="/benh-xa-hoi">Bệnh xã hội</a></td>
            </tr>-->
        </table>
        <div class="moduletable">
            <p style="margin: 0px;"><a href="<?= link_tuvan;?>"> <img src="<?= domain;?>/public/mobile/banner.png"></a></p>
        </div>
    </div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a></h3>
            <h4> Phòng khám chính quy</h4>
        </div>
        <?php foreach($news_smg as $key=>$val){ ?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" style="width: 127px;height: 73px;" alt="<?= $val['new_name'];?>">
                <?php break; }?>
        <?php break;}?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_smg as $key=>$val){?>
                    <?php if($key>1 && $key<8){?>
                    <li>
                        <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                    </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
        <div class="col-md-12 tu-van-dien-thoai" style="  text-align: center;">
            <a href="<?= link_tuvan;?>"> <img src="/public/mobile/tu-van-truc-tuyen-12.png">	</a>
            <a href="tel:18006166"> <img src="/public/mobile/dien-thoai-tu-van-12.png">	</a>
        </div>
    </div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/<?= rewrite_benhlau;?>">Bệnh lậu</a> </h3>
            <h4><a href="<?= link_tuvan;?>"> Bác sĩ tư vấn </a></h4>
        </div>
        <?php foreach($news_bl as $key=>$val){?>
            <?php if(!empty($val['new_img'])){?>
            <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>" style="width: 127px;height: 73px;">
            <?php break;}?>
        <?php }?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_bl as $key=>$val){?>
                    <?php if($key>1 && $key<8){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/<?= rewrite_giangmai;?>">Bệnh giang mai</a> </h3>
            <h4><a href="<?= link_tuvan;?>"> Bác sĩ tư vấn </a></h4>
        </div>
        <?php foreach($news_gm as $key=>$val){?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>" style="width: 127px;height: 73px;">
                <?php break;}?>
        <?php }?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_gm as $key=>$val){?>
                    <?php if($key>1 && $key<8){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/<?= rewrite_munropsinhduc;?>">Mụn rộp sinh dục</a> </h3>
            <h4><a href="<?= link_tuvan;?>"> Bác sĩ tư vấn </a></h4>
        </div>
        <?php foreach($news_mrsd as $key=>$val){?>
            <?php if(!empty($val['new_img'])){?>
                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>" style="width: 127px;height: 73px;">
                <?php break;}?>
        <?php }?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php foreach($news_mrsd as $key=>$val){?>
                    <?php if($key>1 && $key<8){?>
                        <li>
                            <a target="_blank" href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],60);?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
    <!--<div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/vo-sinh-nam">Vô sinh nam</a> </h3>
            <h4><a href="<?/*= link_tuvan;*/?>"> Bác sĩ tư vấn </a></h4>
        </div>
        <?php /*foreach($news_vosinhnam as $key=>$val){*/?>
            <?php /*if(!empty($val['new_img'])){*/?>
                <img src="<?/*= $val['new_img'];*/?>" alt="<?/*= $val['new_name'];*/?>" style="width: 127px;height: 73px;">
                <?php /*break;}*/?>
        <?php /*}*/?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php /*foreach($news_vosinhnam as $key=>$val){*/?>
                    <?php /*if($key>1 && $key<8){*/?>
                        <li>
                            <a target="_blank" href="/<?/*= $val['new_rewrite'];*/?>"><?/*= substr_font($val['new_name'],60);*/?></a>
                        </li>
                    <?php /*}*/?>
                <?php //}?>
            </ul>
        </div>
    </div>-->
    <!--<div class="row tin-tuc-1">
        <div class="row title-tin-tuc">
            <h3> <a href="/benh-xa-hoi">Bệnh xã hội</a> </h3>
            <h4><a href="<?/*= link_tuvan;*/?>"> Bác sĩ tư vấn </a></h4>
        </div>
        <?php /*foreach($news_benhxahoi as $key=>$val){*/?>
            <?php /*if(!empty($val['new_img'])){*/?>
                <img src="<?/*= $val['new_img'];*/?>" alt="<?/*= $val['new_name'];*/?>" style="width: 127px;height: 73px;">
                <?php /*break;}*/?>
        <?php /*}*/?>
        <div class="moduletable">
            <ul class="latestnews">
                <?php /*foreach($news_benhxahoi as $key=>$val){*/?>
                    <?php /*if($key>1 && $key<8){*/?>
                        <li>
                            <a target="_blank" href="/<?/*= $val['new_rewrite'];*/?>"><?/*= substr_font($val['new_name'],60);*/?></a>
                        </li>
                    <?php /*}*/?>
                <?php //}?>
            </ul>
        </div>
    </div>-->
    <div class="clearfix"></div>
</div>
@stop()