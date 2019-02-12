<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <link rel="stylesheet" href="/public/frontend/layout_new/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/frontend/layout_new/css/style.css">
    <link rel="stylesheet" href="/public/frontend/layout_new/css/hover-min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/public/frontend/layout_new/js/jquery.min.js"></script>
    <?= ico_shortcut;?>
    <base target="_blank">
</head>
<body>
<?= cdtop();?>
<?= Addtop();?>
<?= Addleft()?>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-contact">
                    <img src="/public/frontend/layout_new/images/top-contact/mail.png" alt="phong kham"> phongkhamdakhoagiaiphong@gmail.com
                    <img src="/public/frontend/layout_new/images/top-contact/phone.png" alt="phong kham"> <?= phone1;?> - <?= phone2;?>
                    <a href="<?= link_skype;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/skype.png" alt="phong kham">
                    </a>
                    <a href="<?= link_facebook;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/facebook.png" alt="phong kham">
                    </a>
                    <a href="<?= link_diachi;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/market.png" alt="phong kham">
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding: 0">
                <img src="/public/frontend/layout_new/images/logo.png" alt="phong kham" class="img-fluid img-logo">
            </div>
            <div class="col-md-8">
                <!--<p class="pmenu">
                    <a href="<?/*= domain;*/?>"><span class="menu">Trang chủ</span></a>
                    <a href="<?/*= link_gioithieu;*/?>"><span class="menu">Giới thiệu</span></a>
                    <a href="<?/*= link_tuvan;*/?>"><span class="menu">Hạng mục điều trị</span></a>
                    <a href="<?/*= link_diachi;*/?>"><span class="menu">Địa chỉ</span></a>
                    <a href="<?/*= link_tuvan;*/?>"><img src="/public/frontend/layout_new/images/top-menu/btn-reg.png" alt="phong kham" class="btn-reg hvr-push"></a>
                </p>-->
                <ul class="menutop">
                    <li class="menu_lv1"><a href="<?= domain;?>">Trang chủ</a></li>
                    <li class="menu_lv1"><a href="<?= link_gioithieu;?>">Giới thiệu</a></li>
                    <li class="menu_lv1"><a href="<?= link_tuvan;?>">Hạng mục điều trị</a>
                        <div class="content_hm">
                            <div class="content_hm_m">
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/namkhoa">Nam khoa</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_viemtienliettuyen;?>"><i class="fa fa-circle" aria-hidden="true"></i>Viêm tuyến tiền liệt</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_vosinhnam;?>"><i class="fa fa-circle" aria-hidden="true"></i>Vô sinh nam</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_viemnhiemcoquansinhduc;?>"><i class="fa fa-circle" aria-hidden="true"></i>Viêm nhiễm cơ quan sinh dục</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_lietduong;?>"><i class="fa fa-circle" aria-hidden="true"></i>Liệt dương</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_xuattinhsom;?>"><i class="fa fa-circle" aria-hidden="true"></i>Xuất tinh sớm</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_hepbaoquydau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Hẹp bao quy đầu</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/tri">Bệnh trĩ</a></li>
                                        <li><a href="/tri/<?= cat_rw_nutkehaumon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Nứt kẽ hậu môn</a> </li>
                                        <li><a href="/tri/<?= cat_rw_polyphaumon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Polyp hậu môn</a> </li>
                                        <li><a href="/tri/<?= cat_rw_taobon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Táo bón</a> </li>
                                        <li><a href="/tri/<?= cat_rw_daitienramau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Đại tiện ra máu</a> </li>
                                        <li><a href="/tri/<?= cat_rw_gioithieu_tri;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu bệnh trĩ</a> </li>
                                        <li><a href="/tri/<?= cat_rw_kythuat_tri;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật bệnh trĩ</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/bxh">Bệnh xã hội</a></li>
                                        <li><a href="/bxh/<?= cat_rw_benhlau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh lậu</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_suimaoga;?>"><i class="fa fa-circle" aria-hidden="true"></i>Sùi mào gà</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_benhgiangmai;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh giang mai</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_munropsinhduc;?>"><i class="fa fa-circle" aria-hidden="true"></i>Mụn rộp sinh dục</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_gioithieu_bxh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu bệnh xã hội</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_kythuat_bxh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật bệnh xã hội</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/tmh">Tai mũi họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_mui;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về mũi</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_tai;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về tai</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_hong;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_gioithieu_tmh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu tai mũi họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_kythuat_tmh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật tai mũi họng</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_lv1"><a href="<?= link_diachi;?>">Địa chỉ</a></li>
                    <li class="menu_lv1"><a href="<?= link_tuvan;?>"><img src="/public/frontend/layout_new/images/top-menu/btn-reg.png" alt="phong kham"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    .banner{text-align: center}
    .banner img{margin: auto}
</style>
<div class="banner">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>-->
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="background: #42c9dc;">
                <img src="/public/frontend/layout_new/images/banner2.jpg" alt="phong kham">
            </div>
            <!--<div class="carousel-item ">
                <img src="/public/frontend/layout_new/images/banner.png" alt="phong kham">
            </div>-->
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="promotion">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="promotion-title">
                    <div class="block-promotion text-center">
                        <a href="<?= site_benhnamkhoa;?>">
                            <img src="/public/frontend/layout_new/images/promotion/icon1.png" alt="">
                            <h3>NAM KHOA</h3>
                        </a>
                    </div>
                    <div class="promotion_m">
                        <p class="text-jus">
                            Bệnh nam khoa là thuật ngữ chỉ chung các bệnh nam khoa thường gặp ở bộ phận sinh dục của nam giới
                            như: vô sinh, liệt dương, viêm tuyến tiền liệt, viêm bàng quang...Các bệnh này không chỉ gây hại tới
                            khả năng tình dục mà còn nguy hiểm tới khả năng duy trì nòi giống của phái mạnh.
                        </p>
                        <hr>
                        <p class="text-center">
                            <a href="<?= site_benhnamkhoa;?>" class="btn-read-more">
                                <span>Xem chi tiết</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="promotion-title">
                    <div class="block-promotion text-center">
                        <a href="<?= site_benhtri;?>">
                            <img src="/public/frontend/layout_new/images/promotion/icon2.png" alt="">
                            <h3>BỆNH TRĨ</h3>
                        </a>
                    </div>
                    <div class="promotion_m">
                        <p class="text-jus">
                            Phòng khám đa khoa Giải Phóng là sơ sở đa khoa chính quy với đội ngũ y bác sĩ giàu kinh nghiệm trong
                            khám chữa bệnh trĩ. Phòng khám đang áp dụng phương pháp HCPT trong điều trị bệnh trĩ và mang
                            lại hiệu quả cao cho người bệnh. So với phương pháp truyền thống thì HCPT có độ chính xác cao.
                        </p>
                        <hr>
                        <p class="text-center">
                            <a href="<?= site_benhtri;?>" class="btn-read-more">
                                <span>Xem chi tiết</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="promotion-title">
                    <div class="block-promotion text-center">
                        <a href="<?= site_benhxahoi;?>">
                            <img src="/public/frontend/layout_new/images/promotion/icon3.png" alt="">
                            <h3>BỆNH XÃ HỘI</h3>
                        </a>
                    </div>
                    <div class="promotion_m">
                        <p class="text-jus">
                            Bệnh xã hội là thuật ngữ chung chỉ những bệnh lây lan qua đường tình dục như bệnh lậu, giang mai,
                            sùi mào gà, mụn rộp sinh dục..... Những căn bệnh xã hội này có tốc độ lây lan mạnh trên phạm vi toàn
                            xã hội và đặc biệt nếu không được điều trị kịp thời có thể đe dọa tới tính mạng
                        </p>
                        <hr>
                        <p class="text-center">
                            <a href="<?= site_benhxahoi;?>" class="btn-read-more">
                                <span>Xem chi tiết</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="promotion-title">
                    <div class="block-promotion text-center">
                        <a href="<?= site_benhtaimuihong;?>">
                            <img src="/public/frontend/layout_new/images/promotion/icon4.png" alt="">
                            <h3>TAI MŨI HỌNG</h3>
                        </a>
                    </div>
                    <div class="promotion_m">
                        <p class="text-jus">
                            Là cơ sở đi đầu trong lĩnh vực điều trị với những kĩ thuật tân tiến, hiện đại, cùng đội ngũ bác sĩ
                            và nhân viên y tế kinh nghiệm, chuyên nghiệp, Khoa Tai Mũi Họng của Phòng khám tiến hành điều trị
                            bệnh với những phương pháp ưu việt, chữa bệnh hiệu quả và tăng cường đề kháng cho bệnh nhân.
                        </p>
                        <hr>
                        <p class="text-center">
                            <a href="<?= site_benhtaimuihong;?>" class="btn-read-more">
                                <span>Xem chi tiết</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .about .font_bold{font-weight: bold}
</style>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="color2">thời gian tư vấn <span class="color1">và thăm khám</span></h4>
                <div class="row">
                    <div class="col-md-12 block-contact hvr-grow font_bold color3">
                        <img src="/public/frontend/layout_new/images/about/time.png" alt="phong kham"> Thời gian làm việc <span class="text-lg">8:00 - 20:00</span>
                    </div>
                    <div class="col-md-12 block-contact hvr-grow font_bold color3">
                        <img src="/public/frontend/layout_new/images/about/phone.png" alt="phong kham"> Điện thoại tư vấn: <span class="text-lg"><?= phone1;?></span>
                    </div>
                    <div class="col-md-12 block-contact hvr-grow font_bold color3">
                        <a href="<?= link_tuvan?>">
                            <img src="/public/frontend/layout_new/images/about/comment.png" alt="phong kham"> Tư vấn trực tuyến
                        </a>
                    </div>
                    <div class="col-md-12 block-contact hvr-grow font_bold color3">
                        <a href="<?= link_facebook;?>">
                            <img src="/public/frontend/layout_new/images/about/fb.png" alt="phong kham"> Hỗ trợ Facebook
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/public/frontend/layout_new/images/about/quote.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-10">
                        <h4 style="color: #00757c">Giới thiệu phòng khám</h4>
                        <p style="margin-bottom: 0">
                            <img src="/public/frontend/layout_new/images/about/hr.png" alt="phong kham">
                        </p>
                        <p class="text-jus color3" style="text-indent: 20px;">
                            Phòng khám đa khoa Giải Phóng chuyên điều trị các bệnh nam khoa, bệnh trĩ, bệnh xã hội và
                            tai mũi họng. Phòng khám quy tụ đội ngũ bác sĩ có tay nghề cao, kinh nghiệm lâm sàng nhiều
                            năm, luôn áp dụng những thành quả khoa học kỹ thuật tiên tiến nhất hiện nay, không ngừng tìm
                            kiếm và ứng dụng những trang thiết bị y tế từ các nước phát triển như Đức, Mỹ, Italia….nâng
                            cao khả năng chuẩn đoán hình ảnh chính xác, giúp phát hiện sớm các bệnh nguy hiểm. Không
                            những thế chế độ thu chi tại đây hợp lí, giá cả công khai minh bạch, thủ tục nhanh gọn,
                            thông tin của bệnh nhân được bảo mật tuyệt đối và quan trọng hơn.
                        </p>
                        <img src="/public/frontend/layout_new/images/about/banner.png" alt="" class="img-fluid"> <br>
                        <a href="<?= link_gioithieu;?>" class="btn btn-xs btn-about hvr-shutter-in-vertical"> Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="strong">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="tit">Ưu thế <span class="color1">của phòng khám</span></h4>
                <p>Phòng khám chuyên khoa của chúng tôi chứng minh bằng hiệu quả điều trị</p>
            </div>
            <div class="col-md-3">
                <div class="strong_border">
                    <img src="/public/frontend/layout_new/images/strong/st1.png" alt="" class="img-fluid">
                    <h6>DỊCH VỤ CHẤT LƯỢNG</h6>
                    <p class="strong_des">Phòng khám có môi trường y tế lý tưởng, bác sỹ thân thiện với bệnh nhân, hướng dẫn tận tình, phòng bệnh ấm cúng như ở nhà.</p>
                    <p class="text-center">
                        <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-mouse-pointer"></i>  Xem chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="strong_border">
                <img src="/public/frontend/layout_new/images/strong/st2.png" alt="" class="img-fluid">
                <h6>THU PHÍ RÕ RÀNG</h6>
                <p class="strong_des">Phòng khám nghiêm ngặt tuân thủ quy định về thu phí của các ban ngành liên quan, thu phí có hóa đơn rõ ràng, theo dõi chặt chẽ.</p>
                    <p class="text-center">
                        <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-mouse-pointer"></i>  Xem chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="strong_border">
                <img src="/public/frontend/layout_new/images/strong/st3.png" alt="" class="img-fluid">
                <h6>CÔNG KHAI CHI PHÍ</h6>
                <p class="strong_des">Phòng thu ngân nằm ở khu đại sảnh tầng 1, giúp bệnh nhân nộp phí công khai.</p>
                    <p class="text-center">
                        <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-mouse-pointer"></i>  Xem chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="strong_border">
                <img src="/public/frontend/layout_new/images/strong/st4.png" alt="" class="img-fluid">
                <h6>QUY TRÌNH CHUYÊN NGHIỆP</h6>
                <p class="strong_des">Phòng khám cung cấp quy trình thăm khám rõ ràng, có thể tìm hiểu trên mạng hoặc gọi điện đặt mã số khám và được tư vấn cụ thể</p>
                    <p class="text-center">
                        <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-mouse-pointer"></i>  Xem chi tiết</a>
                    </p>
                    </div>
            </div>
        </div>
    </div>
</div>
<style>

</style>
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <img src="/public/frontend/layout_new/images/service/thumb.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="service_border">
                    <h4>Đội ngũ bác sỹ <span class="color3">khám chữa bệnh</span> <br>
                        <span class="color3">chuyên nghiệp</span> tại Hà Nội</h4>
                    <p>Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm
                        sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh nam
                        khoa</p>
                </div>
                <div class="service_border">
                    <h4>Có <span class="color3">kinh nghiệm phong phú</span> trong điều trị các bệnh về
                        nam khoa, Trĩ, Bệnh xã hội, tai mũi họng</h4>
                    <p>Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh
                        phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh
                        nguy hiểm</p>
                </div>
                <p class="text-center service_btn">
                    <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-comment-o"></i> Tư vấn</a>
                    <a href="<?= link_tuvan;?>" class="btn btn-xs btn-strong"><i class="fa fa-table"></i> Hẹn khám</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="we">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center hvr-underline-from-center">
                <h4 class="tit">Môi trường và hình ảnh <span class="color1">về chúng tôi</span></h4>
                <p>Phòng khám chuyên khoa của chúng tôi chứng minh bằng hiệu quả điều trị</p>
                <img src="/public/frontend/layout_new/images/we/we.jpg" alt="phong kham" class="img-fluid">
                <p class="text-jus" style="padding-top: 15px;text-indent: 20px;">Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh
                    phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh
                    nguy hiểm. Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất
                    nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh
                    nhân mắc bệnh nguy hiểm.. Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành
                    công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất
                    nhiều bệnh nhân mắc bệnh nguy hiểm. Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều
                    trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác...</p>
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12  text-center">
                <h4 class="color3">
                    Bạn cần hỗ trợ
                </h4>
                <p class="color3">Bạn có thắc mắc về việc khám và chữa bệnh, hồ sơ bệnh án, đặt lịch hẹn Bác sĩ, những triệu chứng đang mắc phải, .... Hãy liên hệ ngay cho
                    chúng tôi để được hỗ trợ tốt nhất.</p>
            </div>
            <div class="col-md-4">
                <a href="<?= link_tuvan;?>" class="hvr-push"><img src="/public/frontend/layout_new/images/contact/contact1.png" alt=""></a>
            </div>
            <div class="col-md-4 text-center">
                <a href="<?= link_tuvan;?>" class="hvr-push"><img src="/public/frontend/layout_new/images/contact/contact2.png" alt=""></a>
            </div>
            <div class="col-md-4 text-right">
                <a href="<?= link_tuvan;?>" class="hvr-push"><img src="/public/frontend/layout_new/images/contact/contact3.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="row contact2">
        <div class="col-md-6 l-contact">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h4 class="color1">QUY TRÌNH <br>
                        KHÁM BỆNH CỦA PHÒNG KHÁM</h4>
                    <br>
                    <p class="text-center"><a href="<?= link_tuvan;?>" class="hvr-push"><i class="fa fa-phone"></i> Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 r-contact">
            <div class="row">
                <div class="col-md-6"><h4 class="color3">bác sỹ <br>
                        hỗ trợ tư vấn trực tuyến</h4>
                    <br>
                    <p class="text-center"><a href="<?= link_tuvan;?>" class="hvr-push"><i class="fa fa-phone"></i> Tìm hiểu thêm</a></p>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span><a href="<?= domain;?>">TRANG CHỦ</a></span>
                    <span><a href="<?= link_kythuat;?>">KỸ THUẬT</a></span>
                    <span><a href="<?= link_thietbi;?>">THIẾT BỊ</a></span>
                    <span><a href="<?= link_tuvan;?>">TRƯỜNG HỢP KHỎI</a></span>
                    <span><a href="<?= link_tuvan;?>">TƯ VẤN CHI PHÍ</a></span>
                    <span><a href="<?= link_tuvan;?>">TƯ VẤN BỆNH TÌNH</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/public/frontend/layout_new/images/footer/logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 color3">
                    <h5 class="color3 text-center">ĐIỆN THOẠI TƯ VẤN</h5>
                    <div class="row footer_phone">
                        <div class="col-md-5 text-right">
                            <img src="/public/frontend/layout_new/images/footer/phone.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h4 class="color3"><?= phone1 ?><br>
                                <?= phone2;?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 color3 footer_tv">
                    <div class="row">
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon1.png" alt="" class="img-fluid">
                                <p>Tư vấn</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon2.png" alt="" class="img-fluid">
                                <p>Điện thoại</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon3.png" alt="" class="img-fluid">
                                <p>Đăng ký</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_skype;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon4.png" alt="" class="img-fluid">
                                <p>Skype</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_facebook;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon5.png" alt="" class="img-fluid">
                                <p>Facebook</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_diachi;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon6.png" alt="" class="img-fluid">
                                <p>Địa chỉ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center color3">
                    <br>
                    ĐỊA CHỈ: 709 Giải Phóng - Hoàng Mai - Hà Nội     -     EMAIL: phongkhamdakhoagiaiphong@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="container"></div>
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="color3 txt-copy">Sở hữu bản quyền phòng khám đa khoa Giải Phóng All rights reserved, Nội dung website này chỉ để tham khảo, không làm căn cứ để chẩn đoán điều trị. Tôn trọng ý kiến bác sĩ.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/public/frontend/layout_new/js/jquery.min.js"></script>
<script src="/public/frontend/layout_new/js/tether.min.js"></script>
<script src="/public/frontend/layout_new/js/bootstrap.min.js"></script>
<?= line_chat();?>
</body>
</html>