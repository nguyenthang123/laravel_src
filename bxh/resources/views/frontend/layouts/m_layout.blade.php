<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <link rel="stylesheet" href="<?= fixk;?>/public/mobile/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= fixk;?>/public/mobile/css/style.css">
    <link rel="stylesheet" href="<?= fixk;?>/public/mobile/css/custorm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?= fixk;?>/public/mobile/bootstrap/js/bootstrap.min.js"></script>
    <base target="_blank">
    <?= ico_shortcut;?>
</head>
<body>
<div class="container">
<div class="main_header">
    <div class="col-xs-12">
        <div class="logo_top">
            <a href="<?= domain;?>">
                <img src="<?= fixk;?>/public/mobile/imgs/logo_top.png" alt="logo">
            </a>
        </div>
        <div class="header_right">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="<?= fixk;?>/public/mobile/imgs/ico_dienthoai.gif" alt="dien thoai" style="max-width: 100%;max-height: 61px;">
            </a>
        </div>
    </div>
</div>
<?= m_Addtop();?>
<div class="clear" style="float: left"></div>
<div class="main_item padding_x15 search">
    <div class="row">
        <div class="col-xs-12">
            <div class="input-group">
                <input type="text" id="txtsearch" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-timkiem" id="search" type="button">Tìm kiếm</button>
                      </span>
            </div>
        </div>
    </div>
</div>
<script>
    $('#search').click(function () {
        var txt = $('#txtsearch').val();
        if (txt == '') {
            alert('Từ khóa không được để trống.');
        } else {
            window.location = "/search/" + txt;
        }
    });
</script>
<div class="clear" style="float: left"></div>
<!--<div class="main_content">
    @yield('content')
</div>-->
    @yield('content')
<div class="clear2"></div>
<div class="main_item menu_f">
    <div class="menu_f_item"><a href="<?= link_mobile_gioithieu;?>">Giới thiệu<br>phòng khám</a></div>
    <div class="menu_f_item"><a href="<?= link_tuvan;?>">Tư vấn<br>trực tuyến</a></div>
    <div class="menu_f_item"><a href="<?= link_mobile_diachi;?>">Tuyến đường<br>phòng khám</a></div>
    <div class="menu_f_item"><a href="<?= domain;?>">Quay lại<br>đầu trang</a></div>
</div>
<div class="main_item info">
    <p>Thời gian phòng khám làm việc: 8h:00 sáng - 20:00 tối ( không nghỉ lễ)</p>

    <p><img src="<?= fixk;?>/public/mobile/imgs/ico_f_diachi.png" alt="dia chi"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</p>

    <p><img src="<?= fixk;?>/public/mobile/imgs/ico_f_dienthoai.png" alt="dien thoai"> <?= phone1;?> (miễn phí) – <?= phone2;?> - <?= phone3;?></p>

    <p>Sở hữu bản quyền: phòng khám đa khoa Giải Phóng Hà Nội</p>
</div>
<div class="footer" style="position: fixed;bottom: 0px;float: left">
    <div class="footer_item">
        <a href="<?= domain;?>">
            <img src="<?= fixk;?>/public/mobile/imgs/ico_footer_home.png" alt="trang chủ">

            <p>Trở về<br>Trang chủ</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_tuvan;?>">
            <img src="<?= fixk;?>/public/mobile/imgs/ico_footer_tv.png" alt="tư vấn">

            <p>Tư vấn<br>trực tuyến</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= rewrite_number_phone(phone1);?>">
            <img src="<?= fixk;?>/public/mobile/imgs/img_footer_dt.png" alt="dien thoai">
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_tuvan;?>">
            <img src="<?= fixk;?>/public/mobile/imgs/ico_footer_dk.png" alt="dang ky">

            <p>Đăng ký<br>qua mạng</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_mobile_diachi;?>">
            <img src="<?= fixk;?>/public/mobile/imgs/ico_footer_dc.png" alt="tuyen duong">
            <p>Tuyến đường</p>
        </a>
    </div>
</div>
</div>
<?= m_popup();?>
</body>
</html>
<script src="http://phongkhamgiaiphong.com/bxh/public/frontend/js/rewrite_domain_tags.js"></script>