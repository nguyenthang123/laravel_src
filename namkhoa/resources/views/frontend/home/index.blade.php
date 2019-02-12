@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div style="position: relative">
<div class="row" style="margin-left: 0;margin-right: 0;">
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
    <div id="banners1">
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
                           <img src="<?= domain;?>/public/frontend/images/home/banner.jpg" alt="phong kham nhan ai">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#a0d9f4;">
                        <div class="ban_item">
                            <img src="<?= domain;?>/public/frontend/images/home/banner2.jpg" alt="phong kham nhan ai">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .toolbar_item.dong2 img{
        float: left;
        padding-top: 15px;
        margin-left: 10px;
    }
    .toolbar_item.dong2 span{
        display: block;
        line-height: 22px;
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>
<div class="toolbar">
    <div class="main_item">
        <ul class="toolbar_cat">
            <li class="toolbar_item toolbar_tri">
                <a href="/<?= cat_rewrite_yeusinhly;?>">
                    <img src="<?= domain;?>/public/frontend/img/home/toolbar_ico_ysl.png" alt="yeu sinh ly">Yếu sinh lý
                </a>
            </li>
            <li class="toolbar_item toolbar_dtrm">
                <!--20170330 lan yeu cau chuyen sang chinh hinh-->
                <a href="/<?= cat_rewrite_chinhhinh;?>">
                    <img src="<?= domain;?>/public/frontend/img/home/toolbar_ico_cbqd.png" alt="cat bao quy dau">Cắt bao quy đầu
                </a>
            </li>
            <li class="toolbar_item toolbar_tthm dong2">
                <a href="/<?= cat_rewrite_tienliettuyen;?>">
                    <img src="<?= domain;?>/public/frontend/img/home/toolbar_ico_tlt.png" alt="Tri">
                    <span>Bệnh tiền liệt tuyến</span>
                </a>
            </li>
            <li class="toolbar_item toolbar_vhm dong2">
                <!--20170330 lan yeu cau chuyen sang nhiem trung duong tiet nieu-->
                <a href="<?= domain;?>/nhiem-trung-duong-tiet-nieu">
                    <img src="<?= domain;?>/public/frontend/img/home/toolbar_ico_vncqsd.png" alt="Tri">
                    <span>Viêm nhiễm cơ quan sinh dục</span>
                </a>
            </li>
           <li class="toolbar_item toolbar_vhm">
                <a href="/<?= cat_rewrite_vosinh;?>">
                    <img src="<?= domain;?>/public/frontend/img/home/toolbar_ico_vsn.png" alt="Tri">Vô sinh nam
                </a>
            </li>
        </ul>
    </div>
</div>
    <div class="row search_more">
        <div class="main_item">
            <div class="main_item_tit">
                <h2>
                    những gì bạn muốn biết đều ở đây
                </h2>
                <p>Những bệnh nam khoa được tìm thấy nhiều nhất tại phòng khám</p>
            </div>
            <div class="search_more_tab">
                <ul>
                    <li class="search_more_cat hover" data-i="search_more_cat_ysl"><a href="/<?= cat_rewrite_yeusinhly;?>">Yếu sinh lý</a></li>
                    <li class="search_more_cat" data-i="search_more_cat_ch"><a href="/<?= cat_rewrite_catbaoquydau;?>" style="letter-spacing: -0.5px;">Cắt bao quy đầu</a></li>
                    <li class="search_more_cat" data-i="search_more_cat_tlt"><a href="/<?= cat_rewrite_tienliettuyen;?>">Bệnh lý tuyến tiền liệt</a></li>
                    <li class="search_more_cat" data-i="search_more_cat_dtl"><a href="/<?= cat_rewrite_viemnhiem;?>" style="letter-spacing: -0.8px;">Viêm nhiễm cơ quan sinh dục</a></li>
                    <!--<li class="search_more_cat" data-i="search_more_cat_vsn"><a href="<?/*= cat_rewrite_vosinh;*/?>">Vô sinh nam</a></li>-->
                </ul>
            </div>
            <div class="search_more_main search_more_cat_ysl_content hover">
                <ul>
                    <li>
                        <!--<div class="search_more_main_tit">Làm sao để chữa khỏi yếu sinh lý</div>-->
                        <div class="search_more_main_tit"><a href="/xuat-tinh-som-va-cach-chua-tri">Xuất tinh sớm điều trị như thế nào?</a></div>
                        <!--<div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <!--<div class="search_more_main_tit">yếu sinh lý điều trị mấy ngày là khỏi</div>-->
                        <div class="search_more_main_tit"><a href="/vi-sao-nam-gioi-bi-liet-duong-">Tại sao lại bị liệt dương</a></div>
                        <!--<div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <!--<div class="search_more_main_tit">Nguyên nhân nào gây ra yếu sinh lý</div>-->
                        <div class="search_more_main_tit"><a href="/kho-cuong-duong-nguyen-nhan-do-dau-">Khó cương cứng nguyên nhân do đâu</a></div>
                        <!--<div class="search_more_main_txt">Đứng, Ngồi lâu, Ăn uống không hợp lý</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <!--<div class="search_more_main_tit">Chữa yếu sinh lý có đau không</div>-->
                        <div class="search_more_main_tit"><a href="/khong-xuat-tinh-duoc-la-hien-tuong-gi-">Không xuất tinh là bị làm sao</a></div>
                        <!--<div class="search_more_main_txt">Xâm lấn tối thiểu không đau, không dao kéo</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_more_main search_more_cat_ch_content">
                <ul>
                    <li>
                        <!--<div class="search_more_main_tit">Chỉnh hình cơ quan sinh dục như thế nào</div>-->
                        <div class="search_more_main_tit"><a href="/cat-bao-quy-dau-co-dau-khong-">Cắt bao quy đầu có đau không</a></div>
                        <!--<div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/dai-va-hep-bao-quy-dau-co-nhung-nguy-hiem-nao-">Dài hẹp bao quy đầu có những nguy hiểm nào</a></div>
                        <!--<div class="search_more_main_tit">Chỉnh hình điều trị mấy ngày là khỏi</div>
                        <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/cat-bao-quy-dau-bao-lau-thi-quan-he-lai-duoc-">Sau khi cắt bao quy đầu bao lâu có thể quan hệ</a></div>
                        <!--<div class="search_more_main_tit">chỉnh hình cơ quan sinh dục</div>
                        <div class="search_more_main_txt">Dài bao quy đầu, Hẹp bao quy đầu</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/bao-nhieu-tuoi-co-the-cat-bao-quy-dau-">Bao nhiêu tuổi thích hợp cắt bao quy đầu</a></div>
                        <!--<div class="search_more_main_tit">Chỉnh hình cơ quan sinh dục có đau không</div>
                        <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_more_main search_more_cat_tlt_content">
                <ul>
                    <li>
                        <div class="search_more_main_tit"><a href="/dau-tuyen-tien-liet-la-bieu-hien-cua-benh-ly-nao-">Đau tuyến tiền liệt là bị làm sao</a></div>
                        <!--<div class="search_more_main_tit">Làm sao để chữa khỏi tiền liệt tuyến</div>
                        <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/bi-benh-viem-tuyen-tien-liet-phai-lam-sao-">Bị viêm tuyến tiền liệt phải làm thế nào</a></div>
                        <!--<div class="search_more_main_tit">Tiền liệt tuyến điều trị mấy ngày là khỏi</div>
                        <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/tac-hai-cua-viem-tuyen-tien-liet-la-gi-">Viêm tuyến tiền liệt có những nguy hại gì</a></div>
                        <!--<div class="search_more_main_tit">Nguyên nhân của tiền liệt tuyến</div>
                        <div class="search_more_main_txt">Đứng, Ngồi lâu, Ăn uống không hợp lý</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/benh-viem-tuyen-tien-liet-co-chua-duoc-khong-">Chữa viêm tuyến tiền liệt cần làm thủ thuật không?</a></div>
                        <!--<div class="search_more_main_tit">Chữa tiền liệt tuyến có đau không</div>
                        <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_more_main search_more_cat_dtl_content">
                <ul>
                    <li>
                        <div class="search_more_main_tit"><a href="/bi-viem-bao-quy-dau-phai-lam-sao-">Bị viêm bao quy đầu phải làm sao</a></div>
                        <!--<div class="search_more_main_tit">Làm sao để chữa khỏi nhiễm trùng đường tiết niệu</div>
                        <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/lam-nhu-the-nao-de-dieu-tri-viem-nieu-dao">Điều trị viêm đường tiết niệu như thế nào</a></div>
                        <!--<div class="search_more_main_tit">Nhiễm trùng đường tiết niệu điều trị mấy ngày là khỏi</div>
                        <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/viem-nieu-dao-co-nguy-hai-gi-">Viêm niệu đạo có những nguy hại gì</a></div>
                        <!--<div class="search_more_main_tit">Nguyên nhân của nhiễm trùng đường tiết niệu</div>
                        <div class="search_more_main_txt">Đứng, Ngồi lâu, Ăn uống không hợp lý</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit"><a href="/viem-tinh-hoan-co-can-phai-dieu-tri-khong-">Viêm tinh hoàn cần điều trị không</a></div>
                        <!--<div class="search_more_main_tit">Chữa nhiễm trùng đường tiết niệu có đau không</div>
                        <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                        <div class="search_more_main_btn">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--<div class="search_more_main search_more_cat_vsn_content">
                <ul>
                    <li>
                        <div class="search_more_main_tit">Làm sao để chữa khỏi vô sinh nam</div>
                        <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>
                        <div class="search_more_main_btn">
                            <a href="<?/*= link_tuvan;*/?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit">Vô sinh nam điều trị bao lâu là khỏi</div>
                        <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>
                        <div class="search_more_main_btn">
                            <a href="<?/*= link_tuvan;*/?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit">Nguyên nhân của vô sinh nam</div>
                        <div class="search_more_main_txt">Đứng, Ngồi lâu, Ăn uống không hợp lý</div>
                        <div class="search_more_main_btn">
                            <a href="<?/*= link_tuvan;*/?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                    <li>
                        <div class="search_more_main_tit">Chữa vô sinh nam có đau không</div>
                        <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>
                        <div class="search_more_main_btn">
                            <a href="<?/*= link_tuvan;*/?>">Tìm hiểu kỹ hơn</a>
                        </div>
                    </li>
                </ul>
            </div>-->
            <div class="search_more_tuvan">
                <a href="<?= link_tuvan;?>">Tư vấn bác sỹ</a>
            </div>
        </div>
    </div>
<script>
    showtab('search_more_cat','search_more_main');
</script>
    <div class="clear2"></div>
    <div class="row" id="index_js">
        <div class="ijs_in">
            <div class="ijs_tit">
                <b style="color: red;font-size: 28px;"> 6 </b><b style="color: #000000;font-size: 16px;text-transform: uppercase"> kỹ thuật chuyên nghiệp</b>
            </div>
            <div class="main_item main_item2">
                <ul>
                    <li class="f">
                        <a href="<?= domain;?>/cd6/xuat-tinh-som/">
                            <div class="pic">
                                <div class="p1" style="overflow: hidden; height: 155px;display: block">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico1s.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico1.jpg" width="85" height="65">
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
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico2s.jpg" width="85" height="65"></div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico2.jpg" width="85" height="65"></div>
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
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico3s.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico3.jpg" width="85" height="65">
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
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico4s.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico4.jpg" width="85" height="65">
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
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico5s.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico5.jpg" width="85" height="65">
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
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico6s.jpg" width="85" height="65">
                                </div>
                                <div class="p2">
                                    <img src="<?= domain;?>/public/frontend/img/home/zz_ico6.jpg" width="85" height="65">
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
<div class="row banner_bxh"></div>
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
                <img src="<?= domain;?>/public/frontend/images/home/hapk.jpg" alt="nam khoa nhan ai" style="margin-top: 40px;margin-bottom: 40px;">
            </div>
        </div>
    </div>
<div class="row hoibacsy">
    <div class="main_item">
        <div class="hoibacsy_l">
            <div class="hoibacsy_l_c">
                <b>Hỏi bác sỹ</b>
                <p>Những thắc mắc về y khoa, các căn bệnh, cách phòng ngừa, điều trị... sẽ được đội ngũ Bác Sĩ chúng tôi trả lời trong thời gian sớm nhất.</p>
            </div>
        </div>
        <div class="hoibacsy_r">
            <div class="hoibacsy_r_c">
                <p>Thưa bác sỹ tôi có vấn đề liên quan đến sức khỏe cần sự giúp đỡ, mong nhận được sự phản hồi nhanh chóng từ bác sỹ.</p>
                <!--<b>Anh Tuấn</b>-->
                <div class="hoibacsy_btn">
                    <a href="<?= link_tuvan;?>" class="hoibacsy_btn_l">gửi câu hỏi của bạn</a>
                    <a href="<?= link_tuvan;?>" class="hoibacsy_btn_r"><img src="<?= domain;?>/public/frontend/img/home/ico_tv.png" alt="tu van"> Bác sỹ trả lời</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear2"></div>
<div class="row you_care">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">Chủ đề bạn quan tâm nhất</div>
        </div>
        <div class="you_care_main">
            <div class="col-lg-8 you_care_l">
                <div class="you_care_l_tit">
                    <span>Chủ đề nổi bật</span>
                    <a href="<?= link_tuvan;?>">tôi muốn đặt câu hỏi</a>
                </div>
                <div class="you_care_l_c">
                    <div class="you_care_cat_list">
                        <ul>
                            <li class="you_care_cat_list_item hover" data-i="you_care_cat_ysl"><a href="/<?= cat_rewrite_yeusinhly;?>">yếu sinh lý</a></li>
                            <li class="you_care_cat_list_item" data-i="you_care_cat_cbqd"><a href="/<?= cat_rewrite_catbaoquydau;?>">cắt bao quy đầu</a></li>
                            <li class="you_care_cat_list_item" data-i="you_care_cat_tlt"><a href="/<?= cat_rewrite_tienliettuyen;?>">Bệnh tiền liệt tuyến</a> </li>
                            <li class="you_care_cat_list_item" data-i="you_care_cat_vncqsd"><a href="/<?= cat_rewrite_viemnhiem;?>">Viêm nhiễm cơ quan sinh dục</a></li>
                            <li class="you_care_cat_list_item" data-i="you_care_cat_vsn"><a href="/<?= cat_rewrite_vosinh;?>">Vô sinh nam</a></li>
                        </ul>
                    </div>
                    <div class="you_care_cat_content you_care_cat_ysl_content hover">
                        <ul>
                            <?php foreach($news_yeusinhly as $key=>$val){?>
                            <li>
                                <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="you_care_cat_content you_care_cat_cbqd_content">
                        <ul>
                            <?php foreach($news_catbaoquydau as $key=>$val){?>
                                <li>
                                    <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="you_care_cat_content you_care_cat_tlt_content">
                        <ul>
                            <?php foreach($news_tienliettuyen as $key=>$val){?>
                                <li>
                                    <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="you_care_cat_content you_care_cat_vncqsd_content">
                        <ul>
                            <?php foreach($news_viemnhiemcqsd as $key=>$val){?>
                                <li>
                                    <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="you_care_cat_content you_care_cat_vsn_content">
                        <ul>
                            <?php foreach($news_vosinhnam as $key=>$val){?>
                                <li>
                                    <a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                showtab('you_care_cat_list_item','you_care_cat_content');
            </script>
            <div class="col-lg-4 you_care_r">
                <div class="you_care_r_tit">
                    <span>Phòng khám mỗi ngày<br>hạn chế số lượng 20 người</span>
                    <a href="<?= link_tuvan;?>">tôi muốn đặt hẹn</a>
                </div>
                <script src="<?= domain;?>/public/frontend/js/MSClass.js" TYPE="text/javascript"></script>
                <div class="you_care_r_c">
                        <div id="demo">
                        <ul id="demo1">
                            <?php foreach($dkthanhcong as $key=>$val){?>
                            <li>
                                <div class="dh_name"><?= $val['hoten'];?></div>
                                <div class="dh_sdt"><?php $str_r=substr($val['dienthoai'],-7,4);echo str_replace($str_r,'xxxx',$val['dienthoai']);?></div>
                                <div class="dh_status">Thành công</div>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="dathenf">
                        <p><label>Miễn phí</label> <b>đặt hẹn trên mạng</b></p>
                        <p><span>Điện thoại đặt hẹn :</span> <i><?= phone1;?></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    new Marquee(
        {
            MSClassID : "demo",
            ContentID : "demo1",
            Direction : 0,
            Step   : 0,
            Width   : 318,
            Height   : 259,
            Timer   : 4,
            DelayTime : 5000,
            WaitTime  : 0,
            ScrollStep: 5000,
            SwitchType: 0,
            AutoStart : 1
        })
</script>
<div class="row bn_binhluan">
    <div class="main_item">
        <div class="bn_binhluan_tit">
            Bệnh nhân nói gì về chúng tôi
        </div>
        <style>
            .benhnhannoi .carousel-control.left,.benhnhannoi .carousel-control.right{
                background: none;
            }
        </style>
        <div id="Carousel_bn_binhluan" class="carousel slide benhnhannoi" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach($binhluan as $key=>$val){?>
            <div class="item <?php if($key=='0'){echo 'active';}?>">
                <p class="text-justify">
                    <?= $val['com_text'];?>
                </p>
            </div>
            <?php }?>
        </div>
        <a class="left carousel-control" href="#Carousel_bn_binhluan" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel_bn_binhluan" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#Carousel_bn_binhluan").carousel();
        })
    </script>
</div>
<div class="row uuthe">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">Ưu thế của chúng tôi</div>
        </div>
        <div class="uuthe_main">
            <div class="uuthe_main_l">
                <div class="uuthe_main_content uuthe_item_lsth_content hover">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <p>phòng khám đa khoa Giải Phóng là phòng khám quy mô lớn chuyên nghiệp ở Hà Nội, có ưu thế mà không phòng khám nào so sánh được.</p>
                            <p>Có bác sỹ chuyên nghiệp với hơn 20 năm kinh nghiệm lâm sàng, là cơ sở điều trị có hiệu quả.</p>
                            <p>Phòng khám có kỹ thuật tiên tiến, thiết bị điều trị hiện đại mới nhất thế giới.</p>
                            <p>phòng khám Giải Phóng được người dân Hà Nội lựa chọn và tin tưởng, đây là động lực làm việc của toàn bộ các y bác sỹ nhân viên phòng khám. </p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe1.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thvd_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Thành tích vượt trội, tương lai huy hoàng</h4>
                            <p>Nhiều năm nay phòng khám đa khoa Giải Phóng Hà Nội luôn nỗ lực nghiên cứu và mở rộng phương pháp điều trị tốt nhất đối với bệnh nam khoa, khiến cho trình độ điều trị các bệnh về nam khoa không ngừng nâng cao, luôn theo kịp quỹ đạo thế giới, không ngừng nâng cao trình độ kỹ thuật y tế. Toàn tâm thực hiện phòng khám nam khoa chuyên nghiệp, hiện đại...</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe2.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thtl_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Tiêu chuẩn cao, chất lượng cao, đảm bảo hiệu quả điều trị.</h4>
                            <p> phòng khám đa khoa Giải Phóng Hà Nội là phòng khám đa khoa chuyên nghiệp ở Hà Nội, có môi trường nghiên cứu khoa học tốt, môi trường học thuật sâu rộng và kết hợp mật thiết chẩn trị lâm sàng và nghiên cứu cơ sở, phòng khám đa khoa Giải Phóng do tiêu chuẩn cao về dịch vụ, kỹ thuật điều trị tiên tiến chuyên nghiệp, tỷ lệ chữa khỏi cao, nhận được lời nhận xét tốt từ các bộ ngành liên quan...</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe3.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thvh_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Thương hiệu dịch vụ điều trị nam khoa</h4>
                            <p>phòng khám đa khoa Giải Phóng Hà Nội áp dụng phương pháp quản lý tiêu chuẩn quốc tế, giành được thương hiệu phục vụ về nam khoa, đảm bảo chất lượng chẩn trị về nam khoa, khái niệm về tinh thần nhân viên, khái niệm về dịch vụ phòng khám... Phòng khám theo đuổi môi trường văn hóa</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe4.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thdv_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Quan niệm dịch vụ: “thành tâm hành nghề, lấy người làm gốc”</h4>
                            <p>Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe5.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thtm_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Hơn 20 nghìn bệnh nhân tin tưởng phòng khám</h4>
                            <p>   Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="<?= domain;?>/public/frontend/images/home/uuthe6.jpg" alt="uu the">
                    </div>
                </div>
            </div>
            <div class="uuthe_main_r">
                <ul>
                    <li class="uuthe_item hover" data-i="uuthe_item_lsth"><i></i>Lịch sử thương hiệu</li>
                    <li class="uuthe_item" data-i="uuthe_item_thvd"><i class="ico_uuthe2"></i>Thương hiệu vinh dự</li>
                    <li class="uuthe_item" data-i="uuthe_item_thtl"><i class="ico_uuthe3"></i>Thương hiệu thực lực</li>
                    <li class="uuthe_item" data-i="uuthe_item_thvh"><i class="ico_uuthe4"></i>Thương hiệu văn hóa</li>
                    <li class="uuthe_item" data-i="uuthe_item_thdv"><i class="ico_uuthe5"></i>Thương hiệu dịch vụ</li>
                    <li class="uuthe_item" data-i="uuthe_item_thtm"><i class="ico_uuthe6"></i>Thương hiệu truyền miệng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    showtab('uuthe_item','uuthe_main_content')
</script>
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
                        <img src="<?= domain;?>/public/frontend/images/home/about_us1.jpg" alt="about us">
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
                        <img src="<?= domain;?>/public/frontend/images/home/about_us2.jpg" alt="about us">
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
                        <img src="<?= domain;?>/public/frontend/images/home/about_us3.jpg" alt="about us">
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
                        <img src="<?= domain;?>/public/frontend/images/home/about_us4.jpg" alt="about us">
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
            <ul class="help_you">
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="http://trihanoi.com/public/frontend/home/image/ico_dienthoai.png" alt="email"></span>
                        <span>Điện thoại tư vấn<br><b><?= phone1;?></b></span>
                    </a>
                </li>
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="http://trihanoi.com/public/frontend/home/image/ico_trochuyen.png" alt="email"></span>
                        <span>Hỗ trợ trực tuyến<br><b>Trò chuyện</b></span>
                    </a>
                </li>
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="http://trihanoi.com/public/frontend/home/image/ico_email.png" alt="email" style="margin-top: 10px;"></span>
                        <span>Gửi thư cho chúng tôi<br><b>Qua Email</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row dk_tv">
    <div class="dk_tv_item">
        <div class="dk_tv_main">
            <label>Quy trình<br>Khám bệnh của phòng khám</label><br>
            <a class="btn_timhieuthem" href="<?= link_tuvan;?>">Tìm hiểu thêm</a>
        </div>
    </div>
    <div class="dk_tv_item">
        <div class="dk_tv_main">
            <p>Chuyên gia<br>bác sỹ hỗ trợ tư vấn</p><br>
            <a class="btn_dangky" href="<?= link_tuvan;?>">Click để được tư vấn</a>
        </div>
    </div>
</div>
@stop()