@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton('yeu-sinh-ly','/public/frontend/images/quy-trinh-kham/banner.jpg','background:#fafbfd;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị yếu sinh lý</h2>
                <p>
                    Khoa yếu sinh lý có thiết bị chẩn trị tiên tiến như máy phân tích tinh trùng, có thể kiểm tra chính xác các hạng mục, kiểm tra chính xác nguyên nhân gây bệnh để điều trị đúng bệnh. Hình thức chẩn trị mới nhất do các bác sỹ với trên 30 năm kinh nghiệm thao tác toàn bộ quá trinh. Trong đó phòng thực nghiệm dùng các kỹ thuật được nghiên cứu trong và ngoài nước, là phòng thực nghiệm trọng điểm về chức năng sinh lý.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item hamuc_yeusinhly">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption('yeu-sinh-ly');?>
            </div>
            <div class="right">
                <div class="tit"><span>Hạng mục điều trị yếu sinh lý</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <p><a href="/xuat-tinh-som" >Xuất tinh sớm</a></p>
                        <div class="pic"><a href="/xuat-tinh-som" ><img src="/public/frontend/images/yeu-sinh-ly/cpic36.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_xuatinhsom as $val){?>
                        <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/xuat-tinh-som" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/liet-duong" >Liệt dương</a></p>
                        <div class="pic"><a href="/liet-duong" ><img src="/public/frontend/images/yeu-sinh-ly/cpic37.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_lietduong as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/liet-duong">Xem nhiều <span></span></a></dt>
                    </dl>
                </div><div class="clists">
                    <dl>
                        <dt class="t">
                        <p class=""><a href="/roi-loan-cuong-duong" >Rối loạn cương dương</a></p>
                        <div class="pic"><a href="/roi-loan-cuong-duong" ><img src="/public/frontend/images/yeu-sinh-ly/cpic38.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_roiloanchucnangcuongduong as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/roi-loan-cuong-duong">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/suy-giam-ham-muon" >Suy giảm ham muốn</a></p>
                        <div class="pic"><a href="/suy-giam-ham-muon" ><img src="/public/frontend/images/yeu-sinh-ly/cpic39.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_giamhammuon as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/suy-giam-ham-muon">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/di-tinh" >Di tinh</a></p>
                        <div class="pic"><a href="/di-tinh" ><img src="/public/frontend/images/yeu-sinh-ly/cpic40.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_ditinh as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/di-tinh">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <p><a href="/khong-xuat-tinh" >Không xuất tinh</a></p>
                        <div class="pic"><a href="/khong-xuat-tinh" ><img src="/public/frontend/images/yeu-sinh-ly/cpic41.jpg" height="109" width="114"></a></div>
                        </dt>
                        <?php foreach($news_khongxuattinh as $val){?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></dd>
                        <?php }?>
                        <dt class="more"><a href="/khong-xuat-tinh">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="/public/frontend/images/yeu-sinh-ly/banner_ysl.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()