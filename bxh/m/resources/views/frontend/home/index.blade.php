@extends('frontend.layouts.layout')
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
                        <img src="/public/frontend/imgs/logo.png" alt="logo">
                        <p>giới thiệu về<br>phòng khám</p>
                    </a>
                </div>
                <div class="col-xs-6 about">
                    <div class="gioithieu">
                        <a href="<?= link_tuvan;?>">
                            <img src="/public/frontend/imgs/ico_tvtt.png" alt="tu van truc tuyen">
                            <span>tư vấn<br>trực tuyến</span>
                        </a>
                    </div>
                    <div class="kythuat">
                        <div class="kythuat1">
                            <a href="<?= link_kythuat;?>">
                                <img src="/public/frontend/imgs/ico_kythuat.png" alt="kythuat">
                                <p style="padding-top:0.5rem;">Kỹ thuật</p>
                            </a>
                        </div>
                        <div class="kythuat2" style="padding-top: 0.5rem">
                            <a href="<?= link_mobile_diachi;?>">
                                <img src="/public/frontend/imgs/ico_diachi.png" alt="dia chi">
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
        <a href="http://m.phongkhambenhxahoi.vn/cdsuckhoe/chuyen-de-suc-khoe/">
            <img src="/public/frontend/imgs/banner.png" alt="banner">
        </a>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Hạng mục chẩn trị</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/frontend/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item hangmuc">
        <div class="hangmuc_item">
            <a href="/<?= rewrite_suimaoga;?>">
                <img src="/public/frontend/imgs/ico_hm_smg.png" alt="sui mao ga">
                <p>Sùi mào gà</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= rewrite_suimaoganam;?>">
                <img src="/public/frontend/imgs/ico_hm_smg_nam.png" alt="sui mao ga nam gioi">
                <p>Sùi mào gà nam giới</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= rewrite_suimaoganu;?>">
                <img src="/public/frontend/imgs/ico_hm_smg_nu.png" alt="sui mao ga nu">
                <p style="letter-spacing: -0.5px;">Sùi mào gà nữ giới</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= rewrite_benhlau;?>">
                <img src="/public/frontend/imgs/ico_hm_bl.png" alt="benh lau">
                <p>Bệnh lậu</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= rewrite_giangmai;?>">
                <img src="/public/frontend/imgs/ico_hm_gm.png" alt="giang mai">
                <p style="letter-spacing: -0.5px;">Bệnh giang mai</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/<?= rewrite_munropsinhduc;?>">
                <img src="/public/frontend/imgs/ico_hm_herpes.png" alt="herpes sinh duc">
                <p>Herpes sinh dục</p>
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item btn_tuvan">
        <div class="btn_tuvan_tructuyen">
            <a href="<?= link_tuvan;?>">
                <img src="/public/frontend/imgs/btn_tvtt.png" alt="tvtc">
            </a>
        </div>
        <div class="btn_tuvan_dienthoai">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/frontend/imgs/btn_tvdt.png" alt="tu van dien thoai">
            </a>
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Đội ngũ bác sỹ</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/frontend/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="main_item">
        <div class="doingubacsy">
            <div class="clear2"></div>
            <img src="/public/frontend/imgs/img_dnbs.jpg" alt="doi ngu bac sy">
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Các trường hợp đã chữa khỏi</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/frontend/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item truonghopkhoibenh">
        <?php foreach($news_truonghopkhoibenh as $key=>$val){?>
            <?php if(!empty($val['new_img'])){?>
        <div class="truonghopkhoibenh_img">
            <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
        </div>
        <div class="truonghopkhoibenh_txt">
            <?= substr_font($val['new_content'],150)?><a href="/<?= $val['new_rewrite'];?>">[chi tiết]</a>
        </div>
           <?php }else{break;}?>
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