@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('nhiem-trung-duong-tiet-nieu','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(<?= domain;?>/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị nhiễm trùng đường tiết niệu</h2>
                <p>
                    Khoa viêm nhiễm sinh dục tiết niệu là một trong những hạng mục trọng điểm của phòng khám đa khoa Giải Phóng, bất luận là về đội ngũ y bác sỹ, thiết bị kiểm tra, hay là về thiết bị và phương pháp điều trị đều chuyên nghiệp, hiệu quả cao. Thiết bị đồng bộ, liệu pháp khoa học là tiêu chuẩn vàng trong điều trị viêm nhiễm sinh dục tiết niệu, có thể chuẩn đoán chính xác nguyên nhân bệnh, tìm ra phương pháp đúng, giải quyết viêm nhiễm sinh dục tiết niệu, không tái phát.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item hamuc_yeusinhly">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('nhiem-trung-duong-tiet-nieu');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục điều trị viêm niệu đạo</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/tieu-dau" >Tiểu đau</a></p>
                        </dt>
                        <?php foreach($news_tieudau as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-dau" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/tieu-rat" >Tiểu rắt</a></p>
                        </dt>
                        <?php foreach($news_tieurat as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-rat">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/tieu-buot" >Tiểu buốt</a></p>
                        </dt>
                        <?php foreach($news_tieubuot as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-buot">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/tieu-ra-mau" >Tiểu ra máu</a></p>
                        </dt>
                        <?php foreach($news_tieuramau as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-ra-mau">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/tieu-kho" >Tiểu khó</a></p>
                        </dt>
                        <?php foreach($news_tieukho as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-kho">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/tieu-nhieu" >Tiểu nhiều</a></p>
                        </dt>
                        <?php foreach($news_tieunhieu as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tieu-nhieu">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="<?= domain;?>/public/frontend/images/nhiem-trung-duong-tiet-nieu/banner_ntdtn.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()