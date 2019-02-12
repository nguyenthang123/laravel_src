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
                    <li data-target="#myCarousel" data-slide-to="2" class="item3" style="font-size: 12px; overflow: hidden;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="item4" style="font-size: 12px; overflow: hidden;"></li>
                </ul>
            </div>
            <style>
                .carousel-inner .item .ban_item a img{
                    height: 500px;
                }
            </style>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg_ban_item1" style="background:#ecedef;">
                        <div class="ban_item">
                            <a href="">
                                <img src="/public/frontend/images/home/banner.jpg" alt="namkhoa168.com">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#0976cb;">
                        <div class="ban_item">
                            <a href="/cd6/chinh-hinh/cat-bao-quy-dau/" style="position: absolute;margin-top: 375px;margin-left: 650px;z-index: 9999;width: 213px;height: 56px;">
                                <img src="/public/frontend/img/home/tim_hieu_benh.png" style="height: 56px;">
                            </a>
                            <img src="/public/frontend/images/home/banner3.jpg" alt="namkhoa168.com">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#c6d8e6;">
                        <div class="ban_item">
                            <a href="/cd6/hooc-mon/" style="position: absolute;display: block;width:600px;height: 40px;margin-top: 380px;margin-left: 840px;cursor: pointer;z-index: 9999"></a>
                            <img src="/public/frontend/images/home/banner4.jpg" alt="namkhoa168.com" style="max-width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#b2dbef;">
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
                                    <a href="/yeu-sinh-ly">
                                        <img src="/public/frontend/img/home/nav_ico35.gif">
                                    </a>
                                </div>
                                <p class=""><a href="/yeu-sinh-ly">yếu <br>sinh lý</a></p>
                            </div>
                            <div class="list">
                                <ul class="ysl">
                                    <li><a href="/xuat-tinh-som">xuất tinh sớm</a></li>
                                    <li class="o"><a href="/liet-duong">liệt dương</a></li>
                                    <li class=""><a href="/suy-giam-ham-muon">Suy giảm ham muốn</a></li>
                                    <li class="o"><a href="/di-tinh">Di tinh</a></li>
                                    <li class=""><a href="/khong-xuat-tinh">Không xuất tinh</a></li>
                                    <li class="o line_height"><a href="/roi-loan-cuong-duong">Rối loạn cương dương</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/chinh-hinh-co-quan-sinh-duc" ><img src="/public/frontend/img/home/nav_ico44.gif"></a></div>
                                <p><a href="/chinh-hinh-co-quan-sinh-duc" >Chỉnh hình cơ <br>quan sinh dục</a></p>
                            </div>
                            <div class="list">
                                <ul class="chcqsd">
                                    <li><a href="/dai-bao-quy-dau">dài bao quy đầu</a></li>
                                    <li class="o"><a href="/hep-bao-quy-dau">Hẹp bao quy đầu</a></li>
                                    <li class="line_height"><a href="/keo-dai-lam-to-duong-vat">Kéo dài - Làm to dương vật</a></li>
                                    <li class="o"><a href="/cat-bao-quy-dau">Cắt bao quy đầu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/benh-tien-liet-tuyen" ><img src="/public/frontend/img/home/nav_ico28.gif"></a></div>
                                <p ><a href="/benh-tien-liet-tuyen" >bệnh tiền <br>liệt tuyến</a></p>
                            </div>
                            <div class="list">
                                <ul class="chcqsd">
                                    <li><a href="/viem-tien-liet-tuyen">viêm tiền liệt tuyến </a></li>
                                    <li class="o"><a href="/dau-tien-liet-tuyen">đau tiền liệt tuyến</a></li>
                                    <li class="line_height"><a href="/viem-tien-liet-tuyen-cap-tinh">viêm tiền liệt tuyến cấp tính</a></li>
                                    <li class="o line_height"><a href="/viem-tien-liet-tuyen-man-tinh">viêm tiền liệt tuyến mãn tính</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/img/home/nav_ico51.gif"></a></div>
                                <p ><a href="/nhiem-trung-duong-tiet-nieu">nhiễm trùng<br>đường tiết niệu</a></p>
                            </div>
                            <div class="list">
                                <ul class="ysl">
                                    <li><a href="/viem-quy-dau">Viêm quy đầu</a></li>
                                    <li class="o"><a href="/viem-nieu-dao">Viêm niệu đạo</a></li>
                                    <li><a href="/viem-tinh-hoan">Viêm tinh hoàn</a></li>
                                    <li class="o"><a href="/viem-bang-quang">Viêm bàng quang</a></li>
                                    <li><a href="/viem-mao-tinh-hoan">viêm mào tinh hoàn </a></li>
                                    <li class="o"><a href="/viem-tui-tinh">viêm túi tinh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/vo-sinh-nam" ><img src="/public/frontend/img/home/nav_ico58.gif"></a></div>
                                <p ><a href="/vo-sinh-nam" >vô sinh <br>nam</a></p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li><a href="/khong-tinh-trung">Không tinh trùng</a></li>
                                    <li class="o"><a href="/it-tinh-trung">ít tinh trùng</a></li>
                                    <li><a href="/tinh-trung-chet">tinh trùng chết</a></li>
                                    <li class="o"><a href="/tinh-trung-yeu">tinh trùng yếu</a></li>
                                    <li class="line_height" style="letter-spacing: -1px;"><a href="/vo-sinh-do-bat-thuong-chuc-nang-sinh-san">Vô sinh do bất thường chức năng sinh sản </a></li>
                                    <li class="o line_height"><a href="/vo-sinh-do-bat-thuong-noi-tiet-to">vô sinh do bất thường nội tiết tố </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<div class="nav2_box">
                        <div class="con">
                            <div class="tit">
                                <div class="pic"><a href="/benh-xa-hoi"><img src="/public/frontend/img/home/nav_ico72.gif"></a></div>
                                <p ><a href="/benh-xa-hoi">bệnh <br>xã hội</a></p>
                            </div>
                            <div class="list">
                                <ul class="chcqsd">
                                    <li><a href="/sui-mao-ga">sùi mào gà </a></li>
                                    <li class="o"><a href="/benh-lau">bệnh lậu</a></li>
                                    <li><a href="/giang-mai">giang mai</a></li>
                                    <li class="o"><a href="/herpes-sinh-duc">herpes sinh dục</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
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
                <div class="col-lg-4" style="width: 400px;overflow: hidden">
                    <div class="hot_box">
                        <div class="hot_tab fwryh">
                            <ul>
                                <li class="hover"><a href="/tin-tuc">Tin tức phòng khám</a></li>
                                <li class=""><a href="/tin-tuc?new_hot=1">Tin nóng</a></li>
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
                                <b>8h - 20:00</b>
                            </div>
                        </div>
                        <div class="hzx_tel">
                            <span>Điện thoại tư vấn :<b> <?= phone1;?></b></span>
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
                <b style="color: red;font-size: 28px;"> 6 </b><b style="color: #000000;font-size: 16px;text-transform: uppercase"> ưu điểm của thủ thuật</b>
            </div>
            <div class="main_item main_item2">
                <ul>
                    <li class="f">
                        <a href="<?= domain;?>/cd6/xuat-tinh-som/">
                            <div class="pic">
                                <div class="p1" style="overflow: hidden; height: 155px;display: block">
                                    <img src="/public/frontend/img/home/zz_ico1.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico1s.jpg" width="85" height="65">
                                </div>
                            </div>
                            <p>
                                <b>xuất tinh sớm</b>
                                <span>Thủ thuật chặn dây thần kinh lưng dương vật thế hệ mới</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="/cd6/chinh-hinh/hep-bao-quy-dau/">
                            <div class="pic">
                                <div class="p1" style="overflow: hidden; height: 155px;">
                                    <img src="/public/frontend/img/home/zz_ico2.jpg" width="85" height="65"></div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico2s.jpg" width="85" height="65"></div>
                            </div>
                            <p>
                                <b>hẹp bao quy đầu</b>
                                <span>Thủ thuật chỉnh hình bao quy đầu không đau công nghệ Châu Âu</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="/cd6/viem-duong-tiet-nieu/viem-nhiem-co-quan-sinh-duc/">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico3.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico3s.jpg" width="85" height="65">
                                </div>
                            </div>
                            <p>
                                <b>viêm nhiễm cơ quan sinh dục </b>
                                <span>Hệ thống phục hồi sức khỏe gene viêm nhiễm cơ quan sinh dục GPH</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="/cd6/chinh-hinh/keo-dai-duong-vat/">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico4.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico4s.jpg" width="85" height="65">
                                </div>
                            </div>
                            <p>
                                <b>thủ thuật kéo dài dương vật</b>
                                <span>Thủ thuật kéo dài dương vật xâm lấn tối thiểu công nghệ Châu Âu</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="/viem-tien-liet-tuyen">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico5.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico5s.jpg" width="85" height="65">
                                </div>
                            </div>
                            <p>
                                <b>viêm tiền liệt tuyến</b>
                                <span>Hệ thống điều trị đa chức năng tiền liệt tuyến</span>
                            </p>
                        </a>
                    </li>
                    <li class="l">
                        <a href="/liet-duong">
                            <div class="pic">
                                <div class="p1" style="height: 155px; overflow: hidden;">
                                    <img src="/public/frontend/img/home/zz_ico6.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="/public/frontend/img/home/zz_ico6s.jpg" width="85" height="65">
                                </div>
                            </div>
                            <p>
                                <b>liệt dương</b>
                                <span>Liệu pháp tổng hợp THP</span>
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
            <div class="hapk_tit">
                <div class="hapk_tit_txt">đội ngũ bác sỹ chuyên nghiệp</div>
            </div>
            <div class="hapk_des">
                <div class="hapk_des_l">
                    <div class="hapk_des_tit">
                        Đội ngũ bác sỹ khám chữa bệnh nam khoa<br>chuyên nghiệp tại Hà Nội
                    </div>
                    <div class="hapk_des_txt">
                        Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh nam khoa
                    </div>
                </div>
                <div class="hapk_des_l">
                    <div class="hapk_des_tit">
                        Có kinh nghiệm phong phú trong điều trị<br>các bệnh về nam khoa
                    </div>
                    <div class="hapk_des_txt">
                        Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
                    </div>
                </div>
            </div>
            <div style="margin: auto;text-align: center">
                <img src="/public/frontend/images/home/hapk.jpg" alt="nam khoa nhan ai" style="margin-top: 40px;margin-bottom: 40px;">
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
                    <a href="/yeu-sinh-ly">yếu<br>sinh lý</a>
                </li>
                <li class="">
                    <a href="/chinh-hinh-co-quan-sinh-duc">Chỉnh hình<br>cơ quan sinh dục</a>
                </li>
                <li class="">
                    <a href="/benh-tien-liet-tuyen">Bệnh<br>tiền liệt tuyến</a>
                </li>
                <li class="">
                    <a href="/nhiem-trung-duong-tiet-nieu">Nhiễm trùng<br>đường tiết niệu</a>
                </li>
                <li class="">
                    <a href="/vo-sinh-nam">Vô sinh<br>nam</a>
                </li>
                <!--<li class="">
                    <a href="/benh-xa-hoi">Bệnh<br>xã hội</a>
                </li>-->
            </ul>
        </div>
        <script>
            $(document).ready(function(){
                tab_vandethuonggap('.yeusinhly');
                tab_vandethuonggap('.benhxahoi');
                tab_vandethuonggap('.chinhhinhcoquansinhduc');
                tab_vandethuonggap('.benhtienliettuyen');
                tab_vandethuonggap('.nhiemtrungduongtietnieu');
                tab_vandethuonggap('.vosinhnam');
            });
        </script>
        <ul class="ks_content">
            <li class="yeusinhly">
                <div class="ks_list2">
                    <a href="/xuat-tinh-som" class="hover">Xuất tinh sớm</a>
                    <span>|</span> <a href="/liet-duong">Liệt dương</a>
                    <span>|</span> <a href="/roi-loan-cuong-duong">Rối loạn cương dương</a>
                    <span>|</span> <a href="/suy-giam-ham-muon">Suy giảm ham muốn</a>
                    <span>|</span> <a href="/di-tinh">Di tinh</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_xuattinhsom as $key=>$val){?>
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
                        <a href="/yeu-sinh-ly"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_lietduong as $key=>$val){?>
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
                        <a href="/yeu-sinh-ly"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_dlcncd as $key=>$val){?>
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
                        <a href="/yeu-sinh-ly"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_xuattinhcham as $key=>$val){?>
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
                        <a href="/yeu-sinh-ly"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_ditinh as $key=>$val){?>
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
                        <a href="/yeu-sinh-ly"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>
                </div>
            </li>
            <li class="chinhhinhcoquansinhduc">
                <div class="ks_list2">
                    <a href="/dai-bao-quy-dau" class="hover">Dài bao quy đầu</a>
                    <span>|</span> <a href="/hep-bao-quy-dau">hẹp bao quy đầu</a>
                    <span>|</span> <a href="/keo-dai-lam-to-duong-vat">Kéo dài - Làm to dương vật</a>
                    <span>|</span> <a href="/cat-bao-quy-dau">Cắt bao quy đầu</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_daibaoquydau as $key=>$val){?>
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
                    <div class="right"><a  href="/chinh-hinh-co-quan-sinh-duc"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_hepbaoquydau as $key=>$val){?>
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
                    <div class="right"><a  href="/chinh-hinh-co-quan-sinh-duc"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_keodaiduongvat as $key=>$val){?>
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
                    <div class="right"><a  href="/chinh-hinh-co-quan-sinh-duc"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_lamtoduongvat as $key=>$val){?>
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
                    <div class="right"><a  href="/chinh-hinh-co-quan-sinh-duc"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a></div>
                </div>
            </li>
            <li class="benhtienliettuyen">
                <div class="ks_list2">
                    <a href="/viem-tien-liet-tuyen" class="hover" >Viêm tiền liệt tuyến</a>
                    <span>|</span> <a href="/dau-tien-liet-tuyen" >Đau tiền liệt tuyến</a>
                    <span>|</span> <a href="/viem-tien-liet-tuyen-cap-tinh" >Viêm tiền liệt tuyến cấp tính</a>
                    <span>|</span> <a href="/viem-tien-liet-tuyen-man-tinh">Viêm tiền liệt tuyến mãn tính</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemtienliettuyen as $key=>$val){?>
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
                    <div class="right"><a  href="/benh-tien-liet-tuyen"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_dautienliettuyen as $key=>$val){?>
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
                    <div class="right"><a  href="/benh-tien-liet-tuyen"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemtltcaptinh as $key=>$val){?>
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
                    <div class="right"><a  href="/benh-tien-liet-tuyen"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemtltmantinh as $key=>$val){?>
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
                    <div class="right"><a  href="/benh-tien-liet-tuyen"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>
                </div>
            </li>
            <li class="nhiemtrungduongtietnieu">
                <div class="ks_list2">
                    <a href="/viem-quy-dau" class="hover">Viêm bao quy đầu</a>
                    <span>|</span> <a href="/viem-nieu-dao" >viêm niệu đạo</a>
                    <span>|</span> <a href="/viem-tinh-hoan" >viêm tinh hoàn</a>
                    <span>|</span> <a href="/viem-mao-tinh-hoan" >viêm mào tinh hoàn</a>
                    <span>|</span> <a href="/viem-bang-quang" >Viêm bàng quang</a>
                    <span>|</span> <a href="/viem-tui-tinh" >Viêm túi tinh</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viembaoquydau as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemnieudao as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemtinhhoan as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemmaotinhhoan as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viembangquang as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display:none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_viemtuitinh as $key=>$val){?>
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
                    <div class="right"><a  href="/nhiem-trung-duong-tiet-nieu"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>
                </div>
            </li>
            <li class="vosinhnam">
                <div class="ks_list2">
                    <a href="/khong-tinh-trung" class="hover">Không tinh trùng</a>
                    <span>|</span> <a href="/it-tinh-trung" >ít tinh trùng</a>
                    <span>|</span> <a href="/tinh-trung-chet">tinh trùng chết</a>
                    <span>|</span> <a href="/tinh-trung-yeu" >tinh trùng yếu</a>
                    <span>|</span> <a href="/do-chuc-nang-sinh-duc-bat-thuong" >do chức năng sinh dục bất thường</a>
                    <span>|</span> <a href="/do-chuc-nang-noi-tiet-to-bat-thuong" >do chức năng nội tiết tố bất thường</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php foreach($news_khongtinhtrung as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_ittinhtrung as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_tinhtrungchet as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_tinhtrungyeu as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_cnssbt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php foreach($news_cnnttbt as $key=>$val){?>
                                <?php if($key<1){?>
                                    <dt>
                                    <div class="pic"><a href="/<?= $val['new_rewrite'];?>"><img src="/public/frontend/images/home/ks_hot_58.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],35);?></a></h2>
                                    <p><?= substr_font($val['new_description'],100);?><a href="/<?= $val['new_rewrite'];?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php }else{?>
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],66);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/vo-sinh-nam"><img src="/public/frontend/images/home/ks_pic_58.jpg"  height="322" width="250"></a></div>
                </div>
            </li>
            <!--<li class="benhxahoi">
                <div class="ks_list2">
                    <a href="/sui-mao-ga" class="hover" >Sùi mào gà</a>
                    <span>|</span> <a href="/benh-lau" >Bệnh lậu</a>
                    <span>|</span> <a href="/giang-mai" >Giang mai</a>
                    <span>|</span> <a href="/herpes-sinh-duc" >Herpes sinh dục</a>
                </div>
                <div class="tab_content" style="display: block">
                    <div class="left">
                        <dl>
                            <?php /*foreach($news_suimaoga as $key=>$val){*/?>
                                <?php /*if($key<1){*/?>
                                    <dt>
                                    <div class="pic"><a href="/<?/*= $val['new_rewrite'];*/?>"><img src="/public/frontend/images/home/ks_hot_72.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>" ><?/*= substr_font($val['new_name'],35);*/?></a></h2>
                                    <p><?/*= substr_font($val['new_description'],100);*/?><a href="/<?/*= $val['new_rewrite'];*/?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php /*}else{*/?>
                                    <dd><p><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>"><?/*= substr_font($val['new_name'],66);*/?></a></p></dd>
                                <?php /*}*/?>
                            <?php /*}*/?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/benh-xa-hoi"><img src="/public/frontend/images/home/ks_pic_72.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php /*foreach($news_benhlau as $key=>$val){*/?>
                                <?php /*if($key<1){*/?>
                                    <dt>
                                    <div class="pic"><a href="/<?/*= $val['new_rewrite'];*/?>"><img src="/public/frontend/images/home/ks_hot_72.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>" ><?/*= substr_font($val['new_name'],35);*/?></a></h2>
                                    <p><?/*= substr_font($val['new_description'],100);*/?><a href="/<?/*= $val['new_rewrite'];*/?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php /*}else{*/?>
                                    <dd><p><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>"><?/*= substr_font($val['new_name'],66);*/?></a></p></dd>
                                <?php /*}*/?>
                            <?php /*}*/?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/benh-xa-hoi"><img src="/public/frontend/images/home/ks_pic_72.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php /*foreach($news_giangmai as $key=>$val){*/?>
                                <?php /*if($key<1){*/?>
                                    <dt>
                                    <div class="pic"><a href="/<?/*= $val['new_rewrite'];*/?>"><img src="/public/frontend/images/home/ks_hot_72.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>" ><?/*= substr_font($val['new_name'],35);*/?></a></h2>
                                    <p><?/*= substr_font($val['new_description'],100);*/?><a href="/<?/*= $val['new_rewrite'];*/?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php /*}else{*/?>
                                    <dd><p><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>"><?/*= substr_font($val['new_name'],66);*/?></a></p></dd>
                                <?php /*}*/?>
                            <?php /*}*/?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/benh-xa-hoi"><img src="/public/frontend/images/home/ks_pic_72.jpg" height="322" width="250"></a></div>
                </div>
                <div class="tab_content" style="display: none">
                    <div class="left">
                        <dl>
                            <?php /*foreach($news_hespersinhduc as $key=>$val){*/?>
                                <?php /*if($key<1){*/?>
                                    <dt>
                                    <div class="pic"><a href="/<?/*= $val['new_rewrite'];*/?>"><img src="/public/frontend/images/home/ks_hot_72.jpg" height="154" width="265"></a></div>
                                    <h2 ><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>" ><?/*= substr_font($val['new_name'],35);*/?></a></h2>
                                    <p><?/*= substr_font($val['new_description'],100);*/?><a href="/<?/*= $val['new_rewrite'];*/?>" >【Chi tiết】</a></p>
                                    </dt>
                                <?php /*}else{*/?>
                                    <dd><p><a href="/<?/*= $val['new_rewrite'];*/?>" title="<?/*= $val['new_name'];*/?>"><?/*= substr_font($val['new_name'],66);*/?></a></p></dd>
                                <?php /*}*/?>
                            <?php /*}*/?>
                        </dl>
                    </div>
                    <div class="right"><a  href="/benh-xa-hoi"><img src="/public/frontend/images/home/ks_pic_72.jpg" height="322" width="250"></a></div>
                </div>
            </li>-->
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
<div class="row about_us">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">Về chúng tôi</div>
        </div>
        <div class=" about_us_tit_des">
            Phòng khám chuyên khoa nam khoa, chúng tôi chứng mình bằng hiệu quả điều trị
        </div>
        <div class="about_us_main">
            <ul>
                <li>
                    <div class="about_us_img">
                        <img src="/public/frontend/images/home/about_us1.jpg" alt="about us">
                    </div>
                    <div class="about_us_tit">
                        <div class="about_us_tit_txt">Dịch vụ VIP</div>
                    </div>
                    <div class="about_us_des">
                        Phòng khám có môi trường y tế lý tưởng, bác sỹ thân thiện với bệnh nhân, hướng dẫn tận tình, phòng bệnh ấm cúng như ở nhà.
                    </div>
                </li>
                <li>
                    <div class="about_us_img">
                        <img src="/public/frontend/images/home/about_us2.jpg" alt="about us">
                    </div>
                    <div class="about_us_tit">
                        <div class="about_us_tit_txt">Thu phí rõ ràng</div>
                    </div>
                    <div class="about_us_des">
                        Phòng khám nghiêm ngặt tuân thủ quy định về thu phí của các ban ngành liên quan, thu phí có hóa đơn rõ ràng, theo dõi chặt chẽ.
                    </div>
                </li>
                <li>
                    <div class="about_us_img">
                        <img src="/public/frontend/images/home/about_us3.jpg" alt="about us">
                    </div>
                    <div class="about_us_tit">
                        <div class="about_us_tit_txt">Thu phí công khai</div>
                    </div>
                    <div class="about_us_des">
                        Phòng thu ngân nằm ở khu đại sảnh tầng 1, giúp bệnh nhân nộp phí công khai
                    </div>
                </li>
                <li>
                    <div class="about_us_img">
                        <img src="/public/frontend/images/home/about_us4.jpg" alt="about us">
                    </div>
                    <div class="about_us_tit">
                        <div class="about_us_tit_txt">Quy trình thăm khám</div>
                    </div>
                    <div class="about_us_des">
                        Phòng khám cung cấp quy trình thăm khám rõ ràng, có thể tìm hiểu trên mạng hoặc gọi điện đặt mã số khám và được tư vấn cụ thể
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row hepl_you">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">Bạn cần hỗ trợ</div>
        </div>
        <div class=" about_us_tit_des">
            Bạn có thắc mắc về việc khám và chữa bệnh, hồ sơ bệnh án, đặt lịch hẹn Bác sĩ, những triệu chứng đang mắc phải, .... Hãy liên hệ ngay cho
            chúng tôi để được hỗ trợ tốt nhất.
        </div>
        <div class="hepl_you_main">
            <ul>
                <li>
                    <div class="hepl_you_main_c">
                        <img src="/public/frontend/img/home/ico_tv.png" alt="tu van">
                        <p>Điện thoại tư vấn</p>
                        <b><?= phone1;?></b>
                    </div>
                </li>
                <li>
                    <div class="hepl_you_main_c">
                        <img src="/public/frontend/img/home/ico_trochuyen.png" alt="tu van">
                        <p>Hỗ trợ trực tuyến</p>
                        <b>Trò chuyện</b>
                    </div>
                </li>
                <li>
                    <div class="hepl_you_main_c">
                        <img src="/public/frontend/img/home/ico_email.png" alt="tu van">
                        <p>Gửi thư cho chúng tôi</p>
                        <b>Qua Email</b>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row dk_tv">
    <div class="dk_tv_item">
        <div class="dk_tv_main">
            <label>Quy trình<br>Khám bệnh của phòng khám</label>
            <a class="btn_timhieuthem" href="<?= link_tuvan;?>">Tìm hiểu thêm</a>
        </div>
    </div>
    <div class="dk_tv_item">
        <div class="dk_tv_main">
            <p>Đăng ký hỗ trợ tư vấn</p><br>
            <a class="btn_dangky" href="<?= link_tuvan;?>">Đăng ký</a>
        </div>
    </div>
</div>
<!--<div class="row" id="index_hj">
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
                            <div class="pic"><img src="/public/frontend/images/home/ha1.jpg" height="156" width="223"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha2.jpg" height="156" width="223"></div>
                        </li>
                        <li class="l2">
                            <div class="pic"><img src="/public/frontend/images/home/ha3.jpg" height="156" width="223"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha4.jpg" height="156" width="223"></div>
                        </li>
                        <li class="l3">
                            <div class="pic"><img src="/public/frontend/images/home/ha5.jpg" height="156" width="223"></div>
                            <div class="pic"><img src="/public/frontend/images/home/ha6.jpg" height="156" width="223"></div>
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
                            <div class="pic"><img src="/public/frontend/images/home/ha7.jpg" class="af_load_pic" height="350" width="247"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                        </li>
                        <li class="l2">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha8.jpg" height="182" width="450"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha9.jpg" height="165" width="222"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
                            <div class="pic pic3"><img src="/public/frontend/images/home/ha10.jpg" height="165" width="222"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
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
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha11.jpg" height="173" width="220"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;">“昆苏沪”专家会诊中心揭牌</p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha12.jpg" height="173" width="220"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;">世界男性健康日赴德进行男科探讨</p></div>
                        </li>
                        <li class="l2">
                            <div class="pic"><img src="/public/frontend/images/home/ha13.jpg" height="350" width="244"><div class="bg"></div><p>陈曾德，张大乙教授巡查病房</p></div>
                        </li>
                        <li class="l3">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha14.jpg" height="188" width="230"><div class="bg"></div><p>出席参与美国微创外科研讨会交流</p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha15.jpg" height="172" width="230"><div class="bg"></div><p>“昆苏沪“专家加盟广慈签约现场</p></div>
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
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha16.jpg" height="216" width="276"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha17.jpg" height="167" width="276"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                        </li>
                        <li class="l2">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha20.jpg" height="210" width="294"><div class="bg"></div><p></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha21.jpg" height="139" width="294"><div class="bg"></div><p></p></div>
                        </li>
                        <li class="l3">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha18.jpg" height="190" width="200"><div class="bg"></div><p></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha19.jpg" height="190" width="200"><div class="bg"></div><p></p></div>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>-->
@stop()