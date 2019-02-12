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
                    <!--<li data-target="#myCarousel" data-slide-to="2" class="item3" style="font-size: 12px; overflow: hidden;"></li>-->
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
                                <img src="/public/frontend/images/home/banner.jpg" alt="benh xa hoi">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg_ban_item1" style="background:#45d8dd;">
                        <div class="ban_item">
                            <a href="<?= link_tuvan;?>">
                                <img src="/public/frontend/images/home/banner3.jpg" alt="benh xa hoi">
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="item">
                    <div class="bg_ban_item1" style="background:#9debf8;">
                        <div class="ban_item">
                            <a href="<?/*= link_tuvan*/?>" style="position: absolute;display: block;width:600px;height: 40px;margin-top: 320px;margin-left: 880px;cursor: pointer;z-index: 9999"></a>
                            <img src="/public/frontend/images/home/banner2.jpg" alt="benh xa hoi">
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
</div>
<div class="row toolbar">
    <div class="main_item">
        <ul class="toolbar_cat">
            <li class="toolbar_item toolbar_tri">
                <a href="/<?= rewrite_suimaoga;?>">
                    <img src="/public/frontend/img/home/nav_ico_suimaoga.png" alt="sui mao ga">Sùi mào gà
                </a>
            </li>
            <li class="toolbar_item toolbar_dtrm">
                <a href="/<?= rewrite_benhlau;?>">
                    <img src="/public/frontend/img/home/nav_ico_benhlau.png" alt="benh lau">Bệnh lậu
                </a>
            </li>
            <li class="toolbar_item toolbar_tthm">
                <a href="/<?= rewrite_giangmai;?>">
                    <img src="/public/frontend/img/home/nav_ico_giangmai.png" alt="benh giang mai">Bệnh giang mai
                </a>
            </li>
            <li class="toolbar_item toolbar_vhm">
                <a href="/<?= rewrite_munropsinhduc;?>">
                    <img src="/public/frontend/img/home/nav_ico_munropsinhduc.png" alt="mun rop sinh duc">Mụn rộp sinh dục
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="row search_more home">
    <div class="main_item">
        <div class="main_item_tit">
            <h2>
                những gì bạn muốn biết đều ở đây
            </h2>
            <p>Những bệnh xã hội được tìm thấy nhiều nhất tại phòng khám</p>
        </div>
        <div class="search_more_tab">
            <ul>
                <li class="search_more_cat hover" data-i="search_more_cat_smg"><a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a></li>
                <li class="search_more_cat" data-i="search_more_cat_lau"><a href="/<?= rewrite_benhlau;?>">Bệnh lậu</a></li>
                <li class="search_more_cat" data-i="search_more_cat_gm"><a href="/<?= rewrite_giangmai;?>">Bệnh giang mai</a></li>
                <li class="search_more_cat" data-i="search_more_cat_mrsd"><a href="/<?= rewrite_munropsinhduc;?>">Mụn rộp sinh dục</a></li>
            </ul>
        </div>
        <div class="search_more_main search_more_cat_smg_content hover">
            <ul>
                <li>
                    <div class="search_more_main_tit"><a href="">Mắc bệnh sùi mào gà phải làm sao?</a></div>
                    <!--<div class="search_more_main_tit">Làm sao để chữa khỏi sùi mào gà</div>
                    <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Bệnh sùi mào gà có điều trị khỏi được không</a></div>
                    <!--<div class="search_more_main_tit">Sùi mào gà điều trị mấy ngày là khỏi</div>
                    <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Triệu chứng của sùi mào gà là gì</a></div>
                    <!--<div class="search_more_main_tit">Nguyên nhân nào gây ra sùi mào gà</div>
                    <div class="search_more_main_txt">lây truyền qua đường tình dục</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Những nguy hại của bệnh sùi mào gà</a></div>
                    <!--<div class="search_more_main_tit">Chữa sùi mào gà có đau không</div>
                    <div class="search_more_main_txt">Xâm lấn tối thiểu không đau, không dao kéo</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search_more_main search_more_cat_lau_content">
            <ul>
                <li>
                    <div class="search_more_main_tit"><a href="">Nguy hại của bệnh lậu</a></div>
                    <!--<div class="search_more_main_tit">Làm thế nào để chữa khỏi bệnh lậu</div>
                    <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                    <div class="search_more_main_btn">
                        <a href="">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Mắc bệnh lậu có điều trị khỏi được không</a></div>
                    <!--<div class="search_more_main_tit">Bệnh lậu điều trị mấy ngày là khỏi</div>
                    <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Triệu chứng bệnh lậu giai đoạn đầu</a></div>
                    <!--<div class="search_more_main_tit">Nguyên nhân gây ra bệnh lậu</div>
                    <div class="search_more_main_txt">lây truyền qua đường tình dục</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Điều trị bệnh lậu bao nhiêu tiền</a></div>
                    <!--<div class="search_more_main_tit">Chữa bệnh lậu có đau không</div>
                    <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search_more_main search_more_cat_gm_content">
            <ul>
                <li>
                    <div class="search_more_main_tit"><a href="">Triệu chứng bệnh giang mai giai đoạn đầu</a></div>
                    <!--<div class="search_more_main_tit">Làm sao để chữa khỏi bệnh giang mai</div>
                    <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Bệnh giang mai có điều trị khỏi được không</a></div>
                    <!--<div class="search_more_main_tit">Bệnh giang mai điều trị mấy ngày là khỏi</div>
                    <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Nguyên nhân nào dẫn đến giang mai</a></div>
                    <!--<div class="search_more_main_tit">Nguyên nhân của bệnh giang mai</div>
                    <div class="search_more_main_txt">lây truyền qua đường tình dục</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Điều trị giang mai hết bao nhiêu tiền</a></div>
                    <!--<div class="search_more_main_tit">Chữa giang mai có đau không</div>
                    <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search_more_main search_more_cat_mrsd_content">
            <ul>
                <li>
                    <div class="search_more_main_tit"><a href="">Triệu chứng của bệnh mụn rộp sinh dục</a></div>
                    <!--<div class="search_more_main_tit">Làm sao để chữa khỏi mụn rộp sinh dục</div>
                    <div class="search_more_main_txt">Dùng thuốc, Thủ thật, Xâm lấn tối thiểu</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Mụn rộp sinh dục có điều trị khỏi được không</a></div>
                    <!--<div class="search_more_main_tit">Mụn rộp sinh dục điều trị mấy ngày là khỏi</div>
                    <div class="search_more_main_txt">Thủ thật, Xâm lấn tối thiểu hiệu quả tốt</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Mụn rộp sinh dục nguy hiểm không</a></div>
                    <!--<div class="search_more_main_tit">Nguyên nhân của mụn rộp sinh dục</div>
                    <div class="search_more_main_txt">lây truyền qua đường tình dục</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
                <li>
                    <div class="search_more_main_tit"><a href="">Điều trị mụn rộp sinh dục mất bao nhiêu tiền</a></div>
                    <!--<div class="search_more_main_tit">Chữa mụn rộp sinh dục có đau không</div>
                    <div class="search_more_main_txt">Xâm lấn tối thiểu không đau</div>-->
                    <div class="search_more_main_btn">
                        <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search_more_tuvan">
            <a href="<?= link_tuvan;?>">Tư vấn bác sỹ</a>
        </div>
    </div>
</div>
<script>
    showtab('search_more_cat','search_more_main');
</script>
<div class="row banner_bxh"></div>
<div class="row3">
    <div class="main_item">
        <div class="main_item_tit" style="padding-top: 35px;">
            <h2>
                Phòng khám chuyên khoa bệnh xã hội
            </h2>
        </div>
    </div>
    <div class="container2" style="margin-bottom: 45px;">
        <div class="flex flex1 justify-content-between flex-wrap-wrap">
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa1.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box">Môi trường khám chữa bệnh ấm cúng, khám bệnh tâm trạng tốt</p>
                </div>
            </div>
            <div class="flex1col2">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa2.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg2">Bác sĩ chuyên nghiệp<br>khám bệnh yên tâm hơn</p>
                </div>
            </div>
            <div class="flex1col3">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa3.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg3">Kỹ thuật tiên tiến,<br>an toàn không đau </p>
                </div>
            </div>
            <div class="flex1col4">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa4.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg4">Đặt hẹn khám miễn phí qua mạng<br>Tiện lợi - nhanh chóng - tiết kiệm</p>
                </div>
            </div>
            <div class="flex1col5">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa5.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg5">Kết quả quả xét nghiệm chính xác yên tâm hơn,đảm bảo hiệu quả điều trị.</p>
                </div>
            </div>
            <div class="flex1col6">
                <div>
                    <img src="/public/frontend/images/home/chuyenkhoa6.png" alt="chuyen khoa">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg6">Dịch vụ chuyên nghiệp hơn,<br>khám bệnh không áp lực</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row hapk">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">đội ngũ bác sỹ chuyên nghiệp</div>
        </div>
        <div class="hapk_des">
            <div class="hapk_des_l">
                <div class="hapk_des_tit">
                    Đội ngũ bác sỹ khám chữa bệnh xã hội<br>chuyên nghiệp tại Hà Nội
                </div>
                <div class="hapk_des_txt">
                    Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh xã hội
                </div>
            </div>
            <div class="hapk_des_l">
                <div class="hapk_des_tit">
                    Có kinh nghiệm phong phú trong điều trị<br>các bệnh xã hội
                </div>
                <div class="hapk_des_txt">
                    Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
                </div>
            </div>
        </div>
        <div style="margin: auto;text-align: center">
            <img src="/public/frontend/images/home/hapk.jpg" alt="phong kham nhan ai" style="margin-top: 30px;margin-bottom: 55px;">
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
                    <a href="<?= link_tuvan;?>" class="hoibacsy_btn_r"><img src="/public/frontend/img/home/ico_tv.png" alt="tu van"> Bác sỹ trả lời</a>
                </div>
            </div>
        </div>
    </div>
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
                            <p>Phòng khám đa khoa Giải Phóng là phòng khám quy mô lớn chuyên nghiệp ở Hà Nội, có ưu thế mà không phòng khám nào so sánh được.</p>
                            <p>Có bác sỹ chuyên nghiệp với hơn 20 năm kinh nghiệm lâm sàng, là cơ sở điều trị có hiệu quả.</p>
                            <p>Phòng khám có kỹ thuật tiên tiến, thiết bị điều trị hiện đại mới nhất thế giới.</p>
                            <p>Phòng khám Giải Phóng được người dân Hà Nội lựa chọn và tin tưởng, đây là động lực làm việc của toàn bộ các y bác sỹ nhân viên phòng khám. </p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe1.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thvd_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Thành tích vượt trội, tương lai huy hoàng</h4>
                            <p>Nhiều năm nay phòng khám đa khoa Giải Phóng Hà Nội luôn nỗ lực nghiên cứu và mở rộng phương pháp điều trị tốt nhất đối với bệnh xã hội, khiến cho trình độ điều trị các bệnh xã hội không ngừng nâng cao, luôn theo kịp quỹ đạo thế giới, không ngừng nâng cao trình độ kỹ thuật y tế. Toàn tâm thực hiện phòng khám bệnh xã hội chuyên nghiệp, hiện đại...</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe2.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thtl_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Tiêu chuẩn cao, chất lượng cao, đảm bảo hiệu quả điều trị.</h4>
                            <p> Phòng khám đa khoa Giải Phóng Hà Nội là phòng khám đa khoa chuyên nghiệp ở Hà Nội, có môi trường nghiên cứu khoa học tốt, môi trường học thuật sâu rộng và kết hợp mật thiết chẩn trị lâm sàng và nghiên cứu cơ sở, phòng khám đa khoa Giải Phóng do tiêu chuẩn cao về dịch vụ, kỹ thuật điều trị tiên tiến chuyên nghiệp, tỷ lệ chữa khỏi cao, nhận được lời nhận xét tốt từ các bộ ngành liên quan...</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe3.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thvh_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Thương hiệu dịch vụ điều trị bệnh xã hội</h4>
                            <p>Phòng khám đa khoa Giải Phóng Hà Nội áp dụng phương pháp quản lý tiêu chuẩn quốc tế, giành được thương hiệu phục vụ về bệnh xã hội, đảm bảo chất lượng chẩn trị về bệnh xã hội, khái niệm về tinh thần nhân viên, khái niệm về dịch vụ phòng khám... Phòng khám theo đuổi môi trường văn hóa</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe4.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thdv_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Quan niệm dịch vụ: “thành tâm hành nghề, lấy người làm gốc”</h4>
                            <p>Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe5.jpg" alt="uu the">
                    </div>
                </div>
                <div class="uuthe_main_content uuthe_item_thtm_content">
                    <div class="uuthe_main_l_txt">
                        <div class="uuthe_main_l_text">
                            <h4>Hơn 20 nghìn bệnh nhân tin tưởng phòng khám</h4>
                            <p>   Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
                        </div>
                        <div class="uuthe_main_l_tv">
                            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/ico_uuthe_tv.png" alt="tu van"></a>
                        </div>
                    </div>
                    <div class="uuthe_main_l_img">
                        <img src="http://khamnamkhoahanoi.vn/public/frontend/images/home/uuthe6.jpg" alt="uu the">
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
    <script>
        showtab('uuthe_item','uuthe_main_content')
    </script>
</div>
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
<div class="row vandethuonggap">
    <div class="main_item">
    <div class="hapk_tit">
        <div class="hapk_tit_txt">Chủ đề bạn quan tâm nhất</div>
    </div>
    <div class="vandethuonggap_main">
        <div class="vandethuonggap_main_l">
            <div class="ks_tab">
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a href="/<?/*= rewrite_suimaoga;*/?>"><img src="/public/frontend/images/home/ks_pic_35.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right">
                        <a  href="/<?/*= rewrite_benhlau;*/?>"><img src="/public/frontend/images/home/ks_pic_44.jpg" height="322" width="250"></a>
                    </div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_giangmai;*/?>"><img src="/public/frontend/images/home/ks_pic_28.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
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
                                    <dd><p><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>"><?= substr_font($val['new_name'],90);?></a></p></dd>
                                <?php }?>
                            <?php }?>
                        </dl>
                    </div>
                    <!--<div class="right"><a  href="/<?/*= rewrite_munropsinhduc;*/?>"><img src="/public/frontend/images/home/ks_pic_51.jpg" height="322" width="250"></a></div>-->
                </div>
            </li>
            </ul>
        </div>
        <div class="vandethuonggap_main_r">
            <div class="you_care_r_tit">
                <span>Phòng khám mỗi ngày<br>hạn chế số lượng 20 người</span>
                <a href="<?= link_tuvan;?>">tôi muốn đặt hẹn</a>
            </div>
            <script src="http://khamnamkhoahanoi.vn/public/frontend/js/MSClass.js" type="text/javascript"></script>
            <div class="you_care_r_c">
                <div id="demo" style="overflow: hidden; position: relative;">
                    <ul id="demo1" style="padding: 0px; border: 0px; font-size: 0px; display: inline-block; margin: 0px; list-style: none;">
                        <?php foreach($dkthanhcong as $key=>$val){?>
                            <li>
                                <div class="dh_name"><?= $val['hoten'];?></div>
                                <div class="dh_sdt"><?php $str_r=substr($val['dienthoai'],-7,4);echo str_replace($str_r,'xxxx',$val['dienthoai']);?></div>
                                <div class="dh_status">Thành công</div>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <script type="text/javascript">
                    new Marquee(
                        {
                            MSClassID : "demo",
                            ContentID : "demo1",
                            Direction : 0,
                            Step   : 0,
                            Width   : 300,
                            Height   : 225,
                            Timer   : 4,
                            DelayTime : 5000,
                            WaitTime  : 0,
                            ScrollStep: 5000,
                            SwitchType: 0,
                            AutoStart : 1
                        })
                </script>
                <div class="dathenf">
                    <p><label>Miễn phí</label> <b>đặt hẹn trên mạng</b></p>
                    <p><span>Điện thoại đặt hẹn :</span> <i>0432.969.666</i></p>
                </div>
            </div>
        </div>
    </div>
        <script>
            $(document).ready(function(){
                tab_vandethuonggap('.suimaoga');
                tab_vandethuonggap('.benhlau');
                tab_vandethuonggap('.benhgiangmai');
                tab_vandethuonggap('.munropsinhduc');
            });
        </script>

    </div>
</div>
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
                            <img src="/public/frontend/img/home/hj_ico3s.png" class="m2">
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
                            <img src="/public/frontend/img/home/hj_ico4s.png" class="m2">
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
                            <img src="/public/frontend/img/home/hj_ico5s.png" class="m2">
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
                            <img src="/public/frontend/img/home/hj_ico6s.png" class="m2">
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
                        phòng khám chữa bệnh xã hội có môi trường khám chữa tốt
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
                        phòng khám chữa bệnh xã hội đáng tin cậy
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic"><img src="/public/frontend/images/home/ha7.jpg" class="af_load_pic" height="350" width="250"><div class="bg" style="bottom: -30px;"></div><p class="" style="bottom: -30px;"></p></div>
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
                        phòng khám chữa bệnh xã hội có các hoạt động công ích
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
                        phòng khám chữa bệnh xã hội có giao lưu trao đổi học thuật
                    </div>
                    <ul>
                        <li class="l1">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha16.jpg" height="216" width="220"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha17.jpg" height="167" width="220"><div class="bg" style="bottom: -30px;"></div><p style="bottom: -30px;"></p></div>
                        </li>
                        <li class="l2">
                            <div class="pic pic1"><img src="/public/frontend/images/home/ha20.jpg" height="210" width="300"><div class="bg"></div><p></p></div>
                            <div class="pic pic2"><img src="/public/frontend/images/home/ha21.jpg" height="139" width="300"><div class="bg"></div><p></p></div>
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
</div>-->
<div class="row about_us">
    <div class="main_item">
        <div class="hapk_tit">
            <div class="hapk_tit_txt">Về chúng tôi</div>
        </div>
        <div class=" about_us_tit_des">
            Phòng khám chuyên khoa bệnh xã hội, chúng tôi chứng mình bằng hiệu quả điều trị
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
<!--<div class="row">
    <div class="main_item">
        <div style="background: #f5f5f5;text-transform: uppercase;height: 40px;border-bottom: 1px solid #000000;padding-top: 10px;font-weight: bold;padding-left: 10px;font-size: 15px;">thành quả nghiên cứu khoa học của phòng khám</div>
        <div style="width: 100%;height: 15px;background: #f5f5f5;"></div>
        <?/*= dm_ha();*/?>
    </div>
</div>-->
@stop()