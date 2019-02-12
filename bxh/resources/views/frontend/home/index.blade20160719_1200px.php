@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div style="position: relative">
<div class="row">
    <script>
        $(document).ready(function(){
            // Activate Carousel
            $("#myCarousel").carousel();
            // Enable Carousel Indicators
            $(".item1").hover(function(){
                $("#myCarousel").carousel(0);
            });
            $(".item2").hover(function(){
                $("#myCarousel").carousel(1);
            });
            $(".item3").hover(function(){
                $("#myCarousel").carousel(2);
            });
            $(".item4").hover(function(){
                $("#myCarousel").carousel(3);
            });
        });
    </script>
    <div id="banners">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
            <div class="banner_tips">
                <ul class="carousel-indicators" style="padding: 0px; margin: 0px; list-style: none; font-size: 0px;">
                    <li data-target="#myCarousel" data-slide-to="0" class="item1 active" style="font-size: 12px; overflow: hidden;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="item2" style="font-size: 12px; overflow: hidden;"></li>
                    <!--<li data-target="#myCarousel" data-slide-to="2" class="item3" style="font-size: 12px; overflow: hidden;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="item4" style="font-size: 12px; overflow: hidden;"></li>-->
                </ul>
            </div>
            <style>
                .carousel-inner .item .ban_item a img{
                    height: 500px;
                }
            </style>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg_ban_item1" style="background:#fff;">
                        <div class="ban_item">
                            <a href="<?= link_tuvan;?>">
                                <img src="/public/frontend/images/home/banner.jpg" alt="namkhoa168.com">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#9debf8;">
                        <div class="ban_item">
                            <a href="<?= link_tuvan?>" style="position: absolute;display: block;width:600px;height: 40px;margin-top: 320px;margin-left: 880px;cursor: pointer;z-index: 9999"></a>
                            <img src="/public/frontend/images/home/banner2.jpg" alt="namkhoa168.com">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--div item1-->
<div class="row" style="height: 570px;">
    <div class="main_item main_item1">
        <div style="position: absolute;margin-top: -80px;">
            <div class="nav2">
                <div class="nav2_in">
                    <div class="nav2_box f">
                        <div class="con">
                            <div class="tit">
                                <div class="pic">
                                    <a href="/<?= rewrite_suimaoga;?>">
                                        <img src="/public/frontend/img/home/nav_ico_suimaoga.png">
                                    </a>
                                </div>
                                <p class=""><a href="/<?= rewrite_suimaoga;?>">sùi mào gà</a></p>
                            </div>
                            <div class="list">
                                <ul class="ysl">
                                    <li><a href="<?= linkto(rewrite_suimaoga,rewrite_nguyennhan);?>">nguyên nhân</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_suimaoga,rewrite_trieuchung);?>">triệu chứng</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_suimaoga,rewrite_nguyhai);?>">nguy hại</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_suimaoga,rewrite_dieutri);?>">điều trị</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_suimaoga,rewrite_chiphi);?>">chi phí</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_suimaoga,rewrite_kiemtra);?>">kiểm tra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/<?= rewrite_benhlau;?>" ><img src="/public/frontend/img/home/nav_ico_benhlau.png"></a></div>
                                <p><a href="/<?= rewrite_benhlau;?>" >bệnh lậu</a></p>
                            </div>
                            <div class="list">
                                <ul class="chcqsd">
                                    <li><a href="<?= linkto(rewrite_benhlau,rewrite_nguyennhan);?>">nguyên nhân</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_benhlau,rewrite_trieuchung);?>">triệu chứng</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_benhlau,rewrite_nguyhai);?>">nguy hại</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_benhlau,rewrite_dieutri);?>">điều trị</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_benhlau,rewrite_chiphi);?>">chi phí</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_benhlau,rewrite_kiemtra);?>">kiểm tra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/<?= rewrite_giangmai;?>" ><img src="/public/frontend/img/home/nav_ico_giangmai.png"></a></div>
                                <p ><a href="/<?= rewrite_giangmai;?>" >bệnh giang mai</a></p>
                            </div>
                            <div class="list">
                                <ul class="chcqsd">
                                    <li><a href="<?= linkto(rewrite_giangmai,rewrite_nguyennhan);?>">nguyên nhân</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_giangmai,rewrite_trieuchung);?>">triệu chứng</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_giangmai,rewrite_nguyhai);?>">nguy hại</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_giangmai,rewrite_dieutri);?>">điều trị</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_giangmai,rewrite_chiphi);?>">chi phí</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_giangmai,rewrite_kiemtra);?>">kiểm tra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/img/home/nav_ico_munropsinhduc.png"></a></div>
                                <p ><a href="/<?= rewrite_munropsinhduc;?>">mụn rộp sinh dục</a></p>
                            </div>
                            <div class="list">
                                <ul class="ysl">
                                    <li><a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyennhan);?>">nguyên nhân</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_munropsinhduc,rewrite_trieuchung);?>">triệu chứng</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyhai);?>">nguy hại</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_munropsinhduc,rewrite_dieutri);?>">điều trị</a></li>
                                    <li class=""><a href="<?= linkto(rewrite_munropsinhduc,rewrite_chiphi);?>">chi phí</a></li>
                                    <li class="o"><a href="<?= linkto(rewrite_munropsinhduc,rewrite_kiemtra);?>">kiểm tra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear2"></div>
            <div class="row">
                <div class="col-lg-4" style="width: 315px;overflow: hidden">
                    <div class="slides">
                        <div class="slides_box">
                            <ul>
                                <li style="display: list-item;"><a href="<?= link_tuvan;?>"><img src="/public/frontend/images/home/slide_l1.jpg" height="439" width="300"></a></li>
                                <li style="display: none;"><a href="<?= link_tuvan;?>"><img src="/public/frontend/images/home/slide_l2.jpg" height="439" width="300"></a></li>
                                <li style="display: none;"><a href="<?= link_tuvan;?>"><img src="/public/frontend/images/home/slide_l3.jpg" height="439" width="300"></a></li>
                            </ul>
                        </div>
                        <div class="slides_tab">
                            <ul>
                                <li class="hover"><span></span></li>
                                <li class=""><span></span></li>
                                <li class=""><span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="width: 595px;overflow: hidden">
                    <div class="hot_box">
                        <div class="hot_tab fwryh">
                            <ul>
                                <li class="hover"><a href="">Tin tức phòng khám</a></li>
                                <li class=""><a href="">Tin nóng</a></li>
                            </ul>
                        </div>
                        <div class="hot_con">
                            <ul>
                                <li style="display: block; opacity: 1;">
                                    <dl>
                                        <?php foreach($news_phongkham as $key=>$val){?>
                                            <?php if($key<1){?>
                                        <dt>
                                        <div class="pic">
                                            <a href=""><img src="/public/frontend/images/home/pk2.jpg"  height="160" width="370"></a>
                                            <div class="bg"></div>
                                            <p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p>
                                        </div>
                                        <p><?= substr_font($val['new_description'],60)?><a href="/<?= $val['new_rewrite'];?>">【xem tiếp】</a></p>
                                        </dt>
                                        <?php }else{?>
                                        <dd class="f"><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],40);?></a></p></dd>
                                                <?php }?>
                                        <?php }?>
                                    </dl>
                                </li>
                                <li style="display: none; opacity: 1;">
                                    <dl>
                                        <?php foreach($news_phongkhamhot as $key=>$val){?>
                                            <?php if($key<1){?>
                                        <dt>
                                        <div class="pic">
                                            <a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/pk1.jpg"  height="160" width="370"></a>
                                            <div class="bg"></div>
                                            <p><a href="/<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a></p>
                                        </div>
                                        <p><?= substr_font($val['new_description'],60)?><a href="/<?= $val['new_rewrite'];?>">【Xem tiếp】</a></p>
                                        </dt>
                                            <?php }else{?>
                                        <dd class="f"><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],40);?></a></p></dd>
                                        <?php }?>
                                        <?php }?>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="width: 300px;overflow: hidden;padding: 0">
                    <div class="hot_zx">
                        <div class="hzx_tit">
                            <img src="/public/frontend/img/home/dongho.jpg" style="float: left">
                            <div class="timework">
                                <p>Thời gian làm việc:</p>
                                <b>7:30 - 20:00</b>
                            </div>
                        </div>
                        <div class="hzx_tel">
                            <span>Điện thoại tư vấn :<b><?= phone1;?></b></span>
                            <p style="color: #ffffff"><b><?= phone2;?> - <?= phone3;?></b></p>
                        </div>
                        <ul class="hzx_btn">
                            <li>
                                <a href="<?= link_tuvan;?>">
                                    <div class="pic">
                                        <img src="/public/frontend/img/home/ico_tv.gif" class="m1" width="64" style="display:block; overflow: hidden; height: 64px;">
                                        <img src="/public/frontend/img/home/ico_tv2.gif" class="m2" width="64">
                                    </div>
                                    <div class="txt">
                                        <p >Tư vấn trực tuyến</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= link_skype;?>">
                                    <div class="pic">
                                        <img src="/public/frontend/img/home/ico_sky.png" class="m1" width="64" style="display: block; overflow: hidden; height: 64px;">
                                        <img src="/public/frontend/img/home/ico_sky2.png" class="m2" width="64">
                                    </div>
                                    <div class="txt">
                                        <p >Tư vấn skype</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= link_tuvan;?>">
                                    <div class="pic">
                                        <img src="/public/frontend/img/home/ico_hktt.gif" class="m1" width="64" style="display: block; overflow: hidden; height: 64px;">
                                        <img src="/public/frontend/img/home/ico_hktt2.gif" class="m2" width="64"></div>
                                    <div class="txt">
                                        <p>Hẹn khám trực tuyến</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div class="clear2"></div>
    <div class="row" id="index_js">
        <div class="ijs_in">
            <div class="ijs_tit">
                <b style="color: #000000;font-size: 16px;text-transform: uppercase"> chuyên đề bệnh xã hội</b>
            </div>
            <div class="main_item main_item2">
                <ul>
                    <li>
                        <a href="<?= link_tuvan;?>">
                            <div class="pic">
                                <div class="p1" style="overflow: hidden; height: 155px;">
                                    <img src="/public/frontend/img/home/zz_ico2.png"></div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico2s.png"></div>
                            </div>
                            <p>
                                <b>Sùi mào gà</b>
                                <span>Liệu pháp kích hoạt PSO</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= link_tuvan;?>">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico3.jpg">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico3s.jpg">
                                </div>
                            </div>
                            <p>
                                <b>bệnh lậu</b>
                                <span>Kỹ thuật hồi phục gene DHA</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= link_tuvan;?>">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico4.png">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico4s.png">
                                </div>
                            </div>
                            <p>
                                <b>Bệnh giang mai</b>
                                <span>Liệu pháp cần bằng miễn dịch</span>
                            </p>
                        </a>
                    </li>
                    <li class="l">
                        <a href="<?= link_tuvan;?>">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico5.png">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico5s.png">
                                </div>
                            </div>
                            <p>
                                <b>mụn rộp sinh dục</b>
                                <span>Liệu pháp miễn dịch gene sinh học INT</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear2"></div>
    <div class="row hapk">
        <div class="main_item">
            <div style="margin: auto;text-align: center">
                <img src="/public/frontend/images/home/hapk.jpg" alt="nam khoa 168" style="margin-top: 40px;margin-bottom: 40px;">
            </div>
        </div>
    </div>
    <div class="clear"></div>
<div class="clear2"></div>
<div class="row vandethuonggap">
    <div class="main_item">
        <div class="ks_tab">
            <p><img src="/public/frontend/img/home/ico_vdtg.png"><b style="color: #1e80c1;text-transform: uppercase">vấn đề thường gặp</b></p>
            <ul>
                <li class="hover">
                    <a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a>
                </li>
                <li class="">
                    <a href="/<?= rewrite_benhlau;?>">Bệnh lậu</a>
                </li>
                <li class="">
                    <a href="/<?= rewrite_giangmai;?>">bệnh giang mai</a>
                </li>
                <li class="">
                    <a href="/<?= rewrite_munropsinhduc;?>">mụn rộp sinh dục</a>
                </li>
            </ul>
        </div>
        <script>
            $(document).ready(function(){
                tab_vandethuonggap('.suimaoga');
                tab_vandethuonggap('.benhlau');
                tab_vandethuonggap('.benhgiangmai');
                tab_vandethuonggap('.munropsinhduc');
            });
        </script>
        <ul class="ks_content">
            <li class="suimaoga">
                <div class="ks_list2">
                    <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyennhan);?>" class="hover">Nguyên nhân</a>
                    <span>|</span> <a href="<?= linkto(rewrite_suimaoga,rewrite_trieuchung);?>">Triệu chứng</a>
                    <span>|</span> <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyhai);?>">Nguy hại</a>
                    <span>|</span> <a href="<?= linkto(rewrite_suimaoga,rewrite_dieutri);?>">Điều trị</a>
                    <span>|</span> <a href="<?= linkto(rewrite_suimaoga,rewrite_chiphi);?>">Chi phí</a>
                    <span>|</span> <a href="<?= linkto(rewrite_suimaoga,rewrite_kiemtra);?>">Kiểm tra</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_nn as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_tc as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_nh as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_dt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_cp as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_smg_kt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic">
                                        <a href="/<?= $val['new_rewrite']; ?>"><img src="/public/frontend/images/home/ks_hot_35.jpg"  height="154" width="265"></a>
                                    </div>
                                    <h2><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>">Xem thêm</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= $val['new_name'];?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right">
                        <a href="/<?= rewrite_suimaoga;?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
            </li>
            <li class="benhlau">
                <div class="ks_list2">
                    <a href="<?= linkto(rewrite_benhlau,rewrite_nguyennhan);?>" class="hover">Nguyên nhân</a>
                    <span>|</span> <a href="<?= linkto(rewrite_benhlau,rewrite_trieuchung);?>">Triệu chứng</a>
                    <span>|</span> <a href="<?= linkto(rewrite_benhlau,rewrite_nguyhai);?>">Nguy hại</a>
                    <span>|</span> <a href="<?= linkto(rewrite_benhlau,rewrite_dieutri);?>">Điều trị</a>
                    <span>|</span> <a href="<?= linkto(rewrite_benhlau,rewrite_chiphi);?>">Chi phí</a>
                    <span>|</span> <a href="<?= linkto(rewrite_benhlau,rewrite_kiemtra);?>">Kiểm tra</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_nn as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_tc as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_nh as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_dt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_cp as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_l_kt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_44.jpg"  height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title=""<?= $val['new_name'];?>"><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?>
                                        <a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a>
                                    </p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_benhlau;?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
            </li>
            <li class="benhgiangmai">
                <div class="ks_list2">
                    <a href="<?= linkto(rewrite_giangmai,rewrite_nguyennhan);?>" class="hover">Nguyên nhân</a>
                    <span>|</span> <a href="<?= linkto(rewrite_giangmai,rewrite_trieuchung);?>">Triệu chứng</a>
                    <span>|</span> <a href="<?= linkto(rewrite_giangmai,rewrite_nguyhai);?>">Nguy hại</a>
                    <span>|</span> <a href="<?= linkto(rewrite_giangmai,rewrite_dieutri);?>">Điều trị</a>
                    <span>|</span> <a href="<?= linkto(rewrite_giangmai,rewrite_chiphi);?>">Chi phí</a>
                    <span>|</span> <a href="<?= linkto(rewrite_giangmai,rewrite_kiemtra);?>">Kiểm tra</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_nn as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_tc as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_nh as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_dt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_cp as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_gm_kt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_28.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_giangmai;?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
            </li>
            <li class="munropsinhduc">
                <div class="ks_list2">
                    <a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyennhan);?>" class="hover">Nguyên nhân</a>
                    <span>|</span> <a href="<?= linkto(rewrite_munropsinhduc,rewrite_trieuchung);?>">Triệu chứng</a>
                    <span>|</span> <a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyhai);?>">Nguy hại</a>
                    <span>|</span> <a href="<?= linkto(rewrite_munropsinhduc,rewrite_dieutri);?>">Điều trị</a>
                    <span>|</span> <a href="<?= linkto(rewrite_munropsinhduc,rewrite_chiphi);?>">Chi phí</a>
                    <span>|</span> <a href="<?= linkto(rewrite_munropsinhduc,rewrite_kiemtra);?>">Kiểm tra</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_nn as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_tc as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_nh as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_dt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_cp as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_mrsd_kt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>" ><img src="/public/frontend/images/home/ks_hot_51.jpg" height="154" width="360"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/<?= rewrite_munropsinhduc;?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clear2"></div>
<div class="row thongketruycap" id="zxno_box">
    <div class="main_item zxno_in">
        <div class="col-lg-4" style="text-align: center">
            <div class="zxno_l1">
                <ul>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="nopic"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="nopic"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="nopic"></div>
                    </li>
                </ul>
                <p class="color_white">Số người online</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="zxno_l2">
                <ul>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num1"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num2"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num3"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num4"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num5"></div>
                    </li>
                </ul>
                <p class="color_white">Số người tư vấn trong tháng</p>
                <div class="clear"></div>
                <div class="clear"></div>
                <div><a class="btn btn-success" href="<?= link_tuvan;?>" >click đăng ký hẹn khám</a></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="zxno_l3">
                <ul>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num1"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num2"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num3"></div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num4"></div>
                    </li>

                </ul>
                <p class="color_white">Số người hẹn khám trong tháng</p>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="row" id="index_hj">
    <div class="main_item ihj_in">
        <div class="left">
            <dl>
                <dt>
                <div class="con">
                    <p>phòng khám đa khoa Giải Phóng Hà Nội</p>
                    <span>Phòng khám uy tín ở Hà Nội</span>
                </div>
                </dt>
                <dd class="hover">
                    <div class="con">
                        <div class="pic">
                            <img src="/public/frontend/img/home/hj_ico3.gif" class="m1">
                            <img src="/public/frontend/img/home/hj_ico3s.gif" class="m2">
                        </div>
                        <div class="txt">
                            <p>Môi trường <br>khám bệnh</p>
                        </div>
                    </div>
                </dd>
                <dd class="">
                    <div class="con">
                        <div class="pic">
                            <img src="/public/frontend/img/home/hj_ico4.gif" class="m1">
                            <img src="/public/frontend/img/home/hj_ico4s.gif" class="m2">
                        </div>
                        <div class="txt">
                            <p>Đội ngũ <br>y bác sỹ</p>
                        </div>
                    </div>
                </dd>
                <dd class="">
                    <div class="con">
                        <div class="pic">
                            <img src="/public/frontend/img/home/hj_ico5.gif" class="m1">
                            <img src="/public/frontend/img/home/hj_ico5s.gif" class="m2">
                        </div>
                        <div class="txt">
                            <p>Hoạt động <br>công ích sức khỏe</p>
                        </div>
                    </div>
                </dd>
                <dd class="">
                    <div class="con" style="border:none;">
                        <div class="pic">
                            <img src="/public/frontend/img/home/hj_ico6.gif" class="m1">
                            <img src="/public/frontend/img/home/hj_ico6s.gif" class="m2">
                        </div>
                        <div class="txt">
                            <p>Giao lưu<br>Học thuật</p>
                        </div>
                    </div>
                </dd>
            </dl>
        </div>
        <div class="right">
            <dl class="ry" style="display: block; opacity: 1;">
                <dd>
                    <div class="tit">
                        phòng khám nam khoa có môi trường khám chữa tốt
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic"><img src="/public/frontend/images/home/ha1.jpg" height="156" width="300"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha2.jpg" height="156" width="300"></div>
                        </li>
                        <li class="l2">
                            <div class="pic"><img src="/public/frontend/images/home/ha3.jpg" height="156" width="300"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha4.jpg" height="156" width="300"></div>
                        </li>
                        <li class="l3">
                            <div class="pic"><img src="/public/frontend/images/home/ha5.jpg" height="156" width="300"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha6.jpg" height="156" width="300"></div>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="gy" style="display: none; opacity: 1;">
                <dd>
                    <div class="tit">
                        phòng khám nam khoa đáng tin cậy
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic"><img src="/public/frontend/images/home/ha7.jpg" class="af_load_pic" height="350" width="300"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                        </li>
                        <li class="l2">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha8.jpg" height="182" width="595"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha9.jpg" height="165" width="280"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                            <div class="pic pic3"><img src="/public/frontend/images/home/ha10.jpg" height="165" width="315"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="xsjl" style="display: none; opacity: 1;">
                <dd>
                    <div class="tit fwryh">
                        phòng khám nam khoa có các hoạt động công ích sức khỏe
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha11.jpg" height="173" width="300"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;">“昆苏沪”专家会诊中心揭牌</p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha12.jpg" height="173" width="300"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;">世界男性健康日赴德进行男科探讨</p></div>
                        </li>
                        <li class="l2">
                            <div class="pic"><img src="/public/frontend/images/home/ha13.jpg" height="350" width="292"><div class="bg"></div></div>
                        </li>
                        <li class="l3">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha14.jpg" height="188" width="300"><div class="bg"></div></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha15.jpg" height="172" width="300"><div class="bg"></div></div>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="hj" style="display: none; opacity: 1;">
                <dd>
                    <div class="tit fwryh">
                        phòng khám nam khoa có giao lưu trao đổi học thuật
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha16.jpg" height="216" width="300"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha17.jpg" height="167" width="300"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                        </li>
                        <li class="l2">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha20.jpg" height="210" width="322"><div class="bg"></div><p></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha21.jpg" height="139" width="322"><div class="bg"></div><p></p></div>
                        </li>
                        <li class="l3">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha18.jpg" height="190" width="270"><div class="bg"></div><p></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha19.jpg" height="190" width="270"><div class="bg"></div><p></p></div>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>
<div class="row">
    <div class="main_item">
        <div style="background: #f5f5f5;text-transform: uppercase;height: 40px;border-bottom: 1px solid #000000;padding-top: 10px;font-weight: bold;padding-left: 10px;font-size: 15px;">thành quả nghiên cứu khoa học của phòng khám</div>
        <div style="width: 100%;height: 15px;background: #f5f5f5;"></div>
        <?= dm_ha();?>
    </div>
</div>
@stop()