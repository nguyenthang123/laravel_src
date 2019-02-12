@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('chinh-hinh-co-quan-sinh-duc','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(<?= domain;?>/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm chỉnh hình cơ quan sinh dục</h2>
                <p>
                    Phòng thủ thuật vô khuẩn, thủ thuật do các bác sỹ ngoại khoa chỉnh hình tiết niệu với trên 20 năm kinh nghiệm trực tiếp thao tác, thiết bị đồng bộ thủ thuật xâm lấn tối thiểu, tiêu chuẩn kỹ thuật chỉnh hình cơ quan sinh dục được tổ chức WHO giới thiệu, chủ yếu là thủ thuật hẹp bao quy đầu, kéo dài dương vật, làm to dương vật hiệu quả, xâm lấn tối thiểu... Kỹ năng thành thục chính xác, là nơi lựa chọn đầu tiên cho nam giới khi tiến hành các thủ thuật chỉnh hình ngoại khoa cơ quan sinh dục nam.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('chinh-hinh-co-quan-sinh-duc');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục chỉnh hình cơ quan sinh dục</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/dai-bao-quy-dau" >Dài bao quy đầu</a></p>
                        <div class="pic"><a href="/dai-bao-quy-dau" ><img src="<?= domain;?>/public/frontend/images/chinh-hinh-co-quan-sinh-duc/cpic214.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_baoquydaudai as $val){?>
                        <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/dai-bao-quy-dau" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/hep-bao-quy-dau" >Hẹp bao quy đầu</a></p>
                        <div class="pic"><a href="/hep-bao-quy-dau" ><img src="<?= domain;?>/public/frontend/images/chinh-hinh-co-quan-sinh-duc/cpic215.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_hepbaoquydau as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/hep-bao-quy-dau">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/cat-bao-quy-dau" >Cắt bao quy đầu</a></p>
                        <div class="pic"><a href="/cat-bao-quy-dau" ><img src="<?= domain;?>/public/frontend/images/chinh-hinh-co-quan-sinh-duc/cpic217.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_lamtoduongvat as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/cat-bao-quy-dau">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/keo-dai-lam-to-duong-vat" >Kéo dài - Làm to dương vật</a></p>
                        <div class="pic"><a href="/keo-dai-duong-vat" ><img src="<?= domain;?>/public/frontend/images/chinh-hinh-co-quan-sinh-duc/cpic216.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_keodaiduongvat as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/keo-dai-lam-to-duong-vat">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="<?= domain;?>/public/frontend/images/chinh-hinh-co-quan-sinh-duc/banner_chcqsd.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()