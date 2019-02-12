<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <?= ico_shortcut;?>
    <base target="_blank">
    <link rel="stylesheet" href="/public/frontend/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/public/frontend/js/custom.js"></script>
</head>
<body>
<?= cdtop();?>
<div id="wapper">
    <div class="main">
        @include('frontend.layouts.header')
        <div class="logo_main">
            <div class="logo_img">
                <img src="/public/frontend/images/logo.png" alt="logo">
            </div>
        </div>
        <div class="content_main">
            <div class="content">
                <div class="content_m">
                    <ul>
                        <li>
                            <div class="content_m_item">
                                <div class="content_m_item_c">
                                    <div class="content_m_item_img">
                                        <div style="border-radius: 100%">
                                            <a href="<?= site_benhnamkhoa;?>">
                                                <img src="/public/frontend/images/img11.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content_m_text">
                                        <a href="<?= site_benhnamkhoa;?>"><h3>Nam khoa</h3></a>
                                        <div class="content_m_txt">
                                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh nam khoa
                                        </div>
                                    </div>
                                    <div class="content_m_btn">
                                        <a href="<?= site_benhnamkhoa;?>"><p>Xem<br>Chi tiết</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content_m_item">
                                <div class="content_m_item_c">
                                    <div class="content_m_item_img">
                                        <div style="border-radius: 100%">
                                            <a href="<?= site_benhtri;?>">
                                                <img src="/public/frontend/images/img22.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content_m_text">
                                        <a href="<?= site_benhtri;?>"><h3>Bệnh trĩ</h3></a>
                                        <div class="content_m_txt">
                                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh trĩ
                                        </div>
                                    </div>
                                    <div class="content_m_btn">
                                        <a href="<?= site_benhtri;?>"><p>Xem<br>Chi tiết</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content_m_item">
                                <div class="content_m_item_c">
                                    <div class="content_m_item_img">
                                        <div style="border-radius: 100%">
                                            <a href="<?= site_benhxahoi;?>">
                                                <img src="/public/frontend/images/img33.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content_m_text">
                                        <a href="<?= site_benhxahoi;?>"><h3>Bệnh xã hội</h3></a>
                                        <div class="content_m_txt">
                                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh xã hội
                                        </div>
                                    </div>
                                    <div class="content_m_btn">
                                        <a href="<?= site_benhxahoi;?>"><p>Xem<br>Chi tiết</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content_m_item">
                                <div class="content_m_item_c">
                                    <div class="content_m_item_img">
                                        <div style="border-radius: 100%">
                                            <a href="<?= site_benhtaimuihong;?>">
                                                <img src="/public/frontend/images/img44.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content_m_text">
                                        <a href="<?= site_benhtaimuihong;?>"><h3>Tai mũi họng</h3></a>
                                        <div class="content_m_txt">
                                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh tai mũi họng
                                        </div>
                                    </div>
                                    <div class="content_m_btn">
                                        <a href="<?= site_benhtaimuihong;?>"><p>Xem<br>Chi tiết</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @include('frontend.layouts.footer')
        </div>
    </div>
</div>
</body>
</html>