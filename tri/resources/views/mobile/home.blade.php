@extends('mobile.layout')
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
                        <img src="<?= fixk;?>/public/mobile/imgs/logo.png" alt="logo">
                        <p>giới thiệu về<br>phòng khám</p>
                    </a>
                </div>
                <div class="col-xs-6 about">
                    <div class="gioithieu">
                        <a href="<?= link_tuvan;?>">
                            <img src="<?= fixk;?>/public/mobile/imgs/ico_tvtt.png" alt="tu van truc tuyen">
                            <span>tư vấn<br>trực tuyến</span>
                        </a>
                    </div>
                    <div class="kythuat">
                        <div class="kythuat1">
                            <a href="<?= link_kythuat;?>">
                                <img src="<?= fixk;?>/public/mobile/imgs/ico_kythuat.png" alt="kythuat">
                                <p style="padding-top:0.5rem;">Kỹ thuật</p>
                            </a>
                        </div>
                        <div class="kythuat2" style="padding-top: 0.5rem">
                            <a href="<?= link_mobile_diachi;?>">
                                <img src="<?= fixk;?>/public/mobile/imgs/ico_diachi.png" alt="dia chi">
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
            <img src="<?= fixk;?>/public/mobile/imgs/banner.png" alt="banner">
        </a>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Hạng mục chẩn trị</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="<?= fixk;?>/public/mobile/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item hangmuc">
        <div class="hangmuc_item">
            <a href="/tri">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_tri.png" alt="tri">
                </div>
                <p>Trĩ</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/nut-ke-hau-mon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_nutkehaumon.png" alt="nut ke hau mon">
                </div>
                <p>Nứt kẽ hậu môn</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/ro-hau-mon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_rohaumon.png" alt="ro hau mon">
                </div>
                <p style="letter-spacing: -0.5px;">Rò hậu môn</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/tao-bon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_taobon.png" alt="Tao bon">
                </div>
                <p>Táo bón</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/dai-tien-ra-mau">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_daitienramau.png" alt="Dai tien ra mau">
                </div>
                <p style="letter-spacing: -0.5px;">Đại tiện ra máu</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/ap-xe-hau-mon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_apxehaumon.png" alt="Ap xe hau mon">
                </div>
                <p>Áp xe hậu môn</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/ngua-hau-mon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_nguahaumon.png" alt="ngua hau mon">
                </div>
                <p>Ngứa hậu môn</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="/eczema-hau-mon">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_eczema.png" alt="eczema">
                </div>
                <p>Eczema hậu môn</p>
            </a>
        </div>
        <div class="hangmuc_item">
            <a href="<?= link_tuvan;?>">
                <div class="hangmuc_item_img">
                    <img src="<?= fixk;?>/public/mobile/imgs/ico_hm_tck.png" alt="trieu chung khac">
                </div>
                <p>Triệu chứng khác</p>
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main_item btn_tuvan">
        <div class="btn_tuvan_tructuyen">
            <a href="<?= link_tuvan;?>">
                <img src="<?= fixk;?>/public/mobile/imgs/btn_tvtt.png" alt="tvtc">
            </a>
        </div>
        <div class="btn_tuvan_dienthoai">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="<?= fixk;?>/public/mobile/imgs/btn_tvdt.png" alt="tu van dien thoai">
            </a>
        </div>
    </div>
    <div class="clear2"></div>
    <div class="main_tit">
        <div class="main_tit_txt">Đội ngũ bác sỹ</div>
        <div class="main_tit_tv">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="<?= fixk;?>/public/mobile/imgs/ico_dt.png" alt="tu van">
            </a>
        </div>
    </div>
    <div class="main_item">
        <div class="doingubacsy">
            <div class="clear2"></div>
            <img src="<?= fixk;?>/public/mobile/imgs/img_dnbs.jpg" alt="doi ngu bac sy">
        </div>
    </div>
    <div class="clear2"></div>
</div>
@stop()