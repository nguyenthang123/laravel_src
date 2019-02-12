@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('benh-xa-hoi','/public/frontend/images/tienliettuyen/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị bệnh xã hội</h2>
                <p>
                    phòng khám đa khoa Giải Phóng Hà Nội nhập khẩu hàng loạt các thiết bị quốc tế như Mỹ, Đức, Nhật Bản; có thể nhanh chóng tìm ra nguyên nhân bệnh xã hội, phòng khám nhập khẩu kỹ thuật chẩn trị bệnh xã hội tiên tiến, điều này giúp cho phòng khám 168 có thể nhẹ nhàng đối phó với các bệnh xã hội, có thể tiến hành điều trị có hiệu quả đối với bệnh xã hội.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('benh-xa-hoi');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục bệnh xã hội</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/sui-mao-ga" >Sùi mào gà</a></p>
                        <div class="pic"><a href="/sui-mao-ga" ><img src="/public/frontend/images/benh-xa-hoi/smg.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_suimaoga as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],40);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/sui-mao-ga" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/benh-lau" >Bệnh lậu</a></p>
                        <div class="pic"><a href="/benh-lau" ><img src="/public/frontend/images/benh-xa-hoi/cpic73.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_benhlau as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],40);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/benh-lau">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/giang-mai" >bệnh giang mai</a></p>
                        <div class="pic"><a href="/giang-mai" ><img src="/public/frontend/images/benh-xa-hoi/cpic75.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_giangmai as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],40);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/giang-mai">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/herpes-sinh-duc" >herpes sinh duc</a></p>
                        <div class="pic"><a href="/herpes-sinh-duc" ><img src="/public/frontend/images/benh-xa-hoi/cpic77.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_herpessinhduc as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],40);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/herpes-sinh-duc">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="/public/frontend/images/benh-xa-hoi/banner_bxh.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
<div class="clear2">
</div>
@stop()