@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container" style="background: #ffffff">
    <div id="main-content">
        <div class="brecum">
            <div class="moduletable">
                <div class="breadcrumbs">
                    <span class="showHere">Bạn đang xem: </span><a href="/" class="pathway">Trang chủ</a> <img src="/public/mobile/arrow.png" alt=""><span><?= $new['new_name'];?></span></div>
            </div>
        </div>
        <div class="component">
            <div class="item-page">
                <img src="http://khamphukhoa168.com/images/banner_detail.png">
                <h1>
                    <a href="<?= $new['new_rewrite'];?>"><?= $new['new_name']; ?></a>
                </h1>
                <?= $new['new_content'];?>
                <p style="text-align: center;">
                    <a href="<?= link_tuvan;?>"><span style="color: #0000ff;">TƯ VẤN TRỰC TUYẾN</span></a>
                    <strong> để được trao đổi trực tiếp với chuyên gia tư vấn.</strong><br>
                    <strong>Hoặc gọi đến số đường dây nóng: <span style="color: #ff0000;"><?= phone1;?> - <?= phone2;?></span></strong><br>
                    <strong>Tất cả mọi thắc mắc của các bạn sẽ nhanh chóng được giải đáp.</strong>
                </p>
                <p>&nbsp;</p>
                <div class="supportonline" style="text-align:center;margin-top:20px;margin-bottom:15px;">
                    <a href="<?= link_tuvan;?>">
                        <img style="" src="http://khamphukhoa168.com/images/click-bai-viet.gif">
                    </a>
                </div>
                <?php if(!empty($baivietlienquan)){?>
                <div class="related-items-title">Tin liên quan:</div>
                <ul class="related-items">
                    <?php foreach($baivietlienquan as $val){?>
                    <li class="related-item">
                        <a target="_blank" href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
            </div>
            <!-- END COMPONENT-->
        </div>
        <!--END COMPONET-->
    </div>
</div>
@stop()