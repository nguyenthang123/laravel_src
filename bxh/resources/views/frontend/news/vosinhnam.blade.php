@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('vo-sinh-nam','/public/frontend/images/tienliettuyen/banner.jpg','background:#fafbfd;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị vô sinh nam</h2>
                <p>
                    Phòng khám sử dụng thiết bị nhập khẩu từ các nước Đức, Mỹ, Nhật Bản; có thể nhanh chóng, chính xác, khách quan kiểm tra các chỉ số thâm số, tình trạng của tinh trùng. Trên cơ sở tâm lý, biến chứng Đông Y kết hợp, dưới tác dụng kết hợp điều trị tổng hợp chẩn đoán chính xác và điều trị một cách khoa học bệnh vô sinh, mang lại tiếng cười trẻ thơ cho mỗi gia đình.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item hamuc_yeusinhly">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('vo-sinh-nam');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục điều trị vô sinh</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/khong-tinh-trung" >Không tinh trùng</a></p>
                        <div class="pic"><a href="/khong-tinh-trung" ><img src="/public/frontend/images/vo-sinh-nam/cpic59.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_khongtinhtrung as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/khong-tinh-trung" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/it-tinh-trung" >ít tinh trùng</a></p>
                        <div class="pic"><a href="/it-tinh-trung" ><img src="/public/frontend/images/vo-sinh-nam/cpic60.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_ittinhtrung as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/it-tinh-trung">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/tinh-trung-chet" >Tinh trùng chết</a></p>
                        <div class="pic"><a href="/tinh-trung-chet" ><img src="/public/frontend/images/vo-sinh-nam/cpic61.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_tinhtrungchet as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tinh-trung-chet">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/tinh-trung-yeu" >Tinh trùng yếu</a></p>
                        <div class="pic"><a href="/tinh-trung-yeu" ><img src="/public/frontend/images/vo-sinh-nam/cpic62.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_tinhtrungyeu as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/tinh-trung-yeu">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class="dong2"><a href="/vo-sinh-do-bat-thuong-chuc-nang-sinh-san" >Vô sinh do bất thường chức năng sinh sản</a></p>
                        <div class="pic"><a href="/vo-sinh-do-bat-thuong-chuc-nang-sinh-san" ><img src="/public/frontend/images/vo-sinh-nam/cpic63.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_vsdbtcnss as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/vo-sinh-do-bat-thuong-chuc-nang-sinh-san">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class="dong2"><a href="/vo-sinh-do-bat-thuong-noi-tiet-to" >Vô sinh do bất thường nội tiết tố</a></p>
                        <div class="pic"><a href="/vo-sinh-do-bat-thuong-noi-tiet-to" ><img src="/public/frontend/images/vo-sinh-nam/cpic64.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_vsdbtntt as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/vo-sinh-do-bat-thuong-noi-tiet-to">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="/public/frontend/images/vo-sinh-nam/banner_vsn.png"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()