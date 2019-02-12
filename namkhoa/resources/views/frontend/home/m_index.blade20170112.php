@extends('frontend.layouts.m_layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="main_content">
    <div class="main_item">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-6 logo">
                    <a href="<?= link_mobile_gioithieu;?>">
                        <img src="/public/mobile/imgs/logo.png" alt="logo">
                        <p>giới thiệu về<br>phòng khám</p>
                    </a>
                </div>
                <div class="col-xs-6 about">
                    <div class="gioithieu">
                        <a href="<?= link_tuvan;?>">
                            <img src="/public/mobile/imgs/ico_tvtt.png" alt="tu van truc tuyen">
                            <span>tư vấn<br>trực tuyến</span>
                        </a>
                    </div>
                    <div class="kythuat">
                        <div class="kythuat1">
                            <a href="/<?= link_kythuat;?>">
                                <img src="/public/mobile/imgs/ico_kythuat.png" alt="kythuat">
                                <p style="padding-top:0.5rem;">Kỹ thuật</p>
                            </a>
                        </div>
                        <div class="kythuat2" style="padding-top: 0.5rem">
                            <a href="<?= link_kythuat;?>">
                                <img src="/public/mobile/imgs/ico_diachi.png" alt="dia chi">
                                <p style="padding-top: 0.3rem;">Địa chỉ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_item banner">
        <a href="">
            <img src="/public/mobile/imgs/banner.png" alt="banner">
        </a>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Hạng mục chẩn trị</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/mobile/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item hangmuc">
        <div class="hangmuc_item">
            <a href="/<?= cat_rewrite_yeusinhly;?>">
                <img src="/public/mobile/imgs/ico_hm_ysl.png" alt="yeu sinh ly">
                <p>yếu sinh lý</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= cat_rewrite_chinhhinh;?>">
                <img src="/public/mobile/imgs/ico_hm_vntt.png" alt="tien liet tuyen">
                <p>Chỉnh hình cơ quan sinh dục</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= cat_rewrite_tienliettuyen;?>">
                <img src="/public/mobile/imgs/ico_hm_tlt.png" alt="viem nhiem tiet nieu">
                <p style="letter-spacing: -0.5px;">Bệnh tiền liệt tuyến</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= cat_rewrite_nhiemtrung;?>">
                <img src="/public/mobile/imgs/ico_hm_blbqd.png" alt="benh ly bao quy dau">
                <p>Nhiễm trùng đường tiết niệu</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= cat_rewrite_vosinh;?>">
                <img src="/public/mobile/imgs/ico_hm_vsn.png" alt="vo sinh nam">
                <p style="letter-spacing: -0.5px;">Vô sinh nam</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="<?= link_tuvan;?>">
                <img src="/public/mobile/imgs/ico_hm_blk.png" alt="cach benh ly khac">
                <p>Các bệnh lý khác</p>
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item btn_tuvan">
        <div class="btn_tuvan_tructuyen">
            <a href="<?= link_tuvan;?>">
                <img src="/public/mobile/imgs/btn_tvtt.png" alt="tvtc">
            </a>
        </div>
        <div class="btn_tuvan_dienthoai">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/mobile/imgs/btn_tvdt.png" alt="tu van dien thoai">
            </a>
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Đội ngũ bác sỹ</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/mobile/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="main_item">
        <div class="doingubacsy">
            <div class="clear2"></div>
            <img src="/public/mobile/imgs/img_dnbs.jpg" alt="doi ngu bac sy">
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Các trường hợp đã chữa khỏi</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/mobile/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item truonghopkhoibenh">
        <?php foreach($news_truonghopkhoibenh as $key=>$val){?>
            <?php if(!empty($val['new_img'])){?>
                <div class="truonghopkhoibenh_img">
                    <img src="http://namkhoa168.com<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                </div>
                <div class="truonghopkhoibenh_txt">
                    <?= substr_font($val['new_content'],150)?><a href="/<?= $val['new_rewrite'];?>">[chi tiết]</a>
                </div>
                <?php break;?>
            <?php }?>
        <?php }?>
        <div class="clear" style="float: left"></div>
        <ul>
            <?php foreach($news_truonghopkhoibenh as $key=>$val){?>
                <?php if($key>0){?>
                    <li><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],70);?></a> </li>
                <?php }?>
            <?php }?>
        </ul>
    </div>
</div>
@stop()