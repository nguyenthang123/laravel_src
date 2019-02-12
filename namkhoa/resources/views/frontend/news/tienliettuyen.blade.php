@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('tien-liet-tuyen','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(<?= domain;?>/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị bệnh tiền liệt tuyến</h2>
                <p>
                    Kiểm tra thăm khám hiệu quả cao, khoa học cho các bệnh nhân tiền liệt tuyến. Đối với khoa tiền liệt tuyến, phòng khám Giải Phóng Hà Nội nhập khẩu hệ thống điều trị đa chức năng tiền liệt tuyến - máy điều trị quang năng xúc dẫn xung mạch MCDR, các thiết bị chẩn trị tiên tiến, hệ thống điều trị phân loại đa chức năng tiền liệt tuyến, đưa ra phương án điều trị tiền liệt tuyến đa phương diện! Điều trị tiền liệt tuyến được nâng lên một tầm cao mới quy phạm khoa học và an toàn.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('benh-tien-liet-tuyen');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục bệnh tiền liệt tuyến</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-tien-liet-tuyen" >Viêm tiền liệt tuyến</a></p>
                        <div class="pic"><a href="" ><img src="<?= domain;?>/public/frontend/images/tienliettuyen/cpic29.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemtienliettuyen as $val){?>
                        <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-tien-liet-tuyen" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/dau-tien-liet-tuyen" >đau tiền liệt tuyến</a></p>
                        <div class="pic"><a href="" ><img src="<?= domain;?>/public/frontend/images/tienliettuyen/cpic31.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_dautienliettuyen as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/dau-tien-liet-tuyen">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-tien-liet-tuyen-cap-tinh" >viêm tiền liệt tuyến cấp tính</a></p>
                        <div class="pic"><a href="" ><img src="<?= domain;?>/public/frontend/images/tienliettuyen/cpic370.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemtienliettuyencaptinh as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-tien-liet-tuyen-cap-tinh">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-tien-liet-tuyen-man-tinh" >viêm tiền liệt tuyến mãn tính</a></p>
                        <div class="pic"><a href="" ><img src="<?= domain;?>/public/frontend/images/tienliettuyen/cpic361.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemtienliettuyenmantinh as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-tien-liet-tuyen-man-tinh">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="<?= domain;?>/public/frontend/images/tienliettuyen/banner_tlt.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()