@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('nhiem-trung-duong-tiet-nieu','/public/frontend/images/tienliettuyen/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị nhiễm trùng đường tiết niệu</h2>
                <p>
                    Khoa viêm nhiễm sinh dục tiết niệu là một trong những hạng mục trọng điểm của phòng khám đa khoa 168, bất luận là về đội ngũ y bác sỹ, thiết bị kiểm tra, hay là về thiết bị và phương pháp điều trị đều chuyên nghiệp, hiệu quả cao. Thiết bị đồng bộ, liệu pháp khoa học là tiêu chuẩn vàng trong điều trị viêm nhiễm sinh dục tiết niệu, có thể chuẩn đoán chính xác nguyên nhân bệnh, tìm ra phương pháp đúng, giải quyết viêm nhiễm sinh dục tiết niệu, tránh tái phát.
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
                <div class="tit"><span>Hạng mục điều trị nhiễm trùng đường tiết niệu</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-quy-dau" >Viêm bao quy đầu</a></p>
                        <div class="pic"><a href="/viem-quy-dau" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic52.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viembaoquydau as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-quy-dau" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-nieu-dao" >Viêm niệu đạo</a></p>
                        <div class="pic"><a href="/viem-nieu-dao" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic53.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemnieudao as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-nieu-dao">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/viem-tinh-hoan" >Viêm tinh hoàn</a></p>
                        <div class="pic"><a href="/viem-tinh-hoan" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic54.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemtinhhoan as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-tinh-hoan">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/viem-mao-tinh-hoan" >Viêm mào tinh hoàn</a></p>
                        <div class="pic"><a href="/viem-mao-tinh-hoan" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic55.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemmaotinhhoan as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-mao-tinh-hoan">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/viem-bang-quang" >Viêm bàng quang</a></p>
                        <div class="pic"><a href="/viem-bang-quang" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic56.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viembangquang as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-bang-quang">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/viem-tui-tinh" >Viêm túi tinh</a></p>
                        <div class="pic"><a href="/viem-tui-tinh" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/cpic57.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_viemtuitinh as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],30);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/viem-tui-tinh">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="/public/frontend/images/nhiem-trung-duong-tiet-nieu/banner_ntdtn.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()