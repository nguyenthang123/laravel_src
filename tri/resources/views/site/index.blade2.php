<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Trĩ - phòng khám Giải Phóng</title>
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/header.css">
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/home.css">
    <link rel="stylesheet" type="text/css" href="/public/frontend/home/css/footer.css">

    <script type="text/javascript" src="/public/frontend/home/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/public/frontend/home/css/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/public/frontend/home/js/desktop.js"></script>
    <script type="text/javascript" src="/public/frontend/home/js/home.js"></script>
    <base target="_blank">
    <?= ico_shortcut;?>
</head>
<body>
<header>
        <div class="flex flex1 justify-content-between" style="height: 65px;">
            <div class="flex1col1">
                <h2 class="text-container-center logo">
                    <a href="<?= domain;?>"><img src="/public/frontend/home/image/header-1.png" alt=""></a>
                </h2>
            </div>
            <div class="flex1col2">
                <div class="flex flex2 justify-content-between">
                    <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="/public/frontend/home/image/header-2.png" alt=""></a></div>
                    <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="/public/frontend/home/image/header-3.png" alt=""></a></div>
                    <div class="flex2col1 text-container-center"><a href="<?= link_lotrinhdenkham;?>"><img src="/public/frontend/home/image/header-4.png" alt=""></a></div>
                </div>
            </div>
        </div>
</header>
<div class="home_menu">
<div class="home_main_item">
<ul class="menu">
<li class="menu_lv1">
    <a href="<?= domain;?>" style="padding: 0">
        <b>
            <img src="/public/frontend/home/image/ico_home.png" alt="home" style="margin-top: -8px;">
            Trang chủ
        </b>
    </a>
</li>
<li class="menu_lv1" id="menu_lienquan">
    <b>
        Liên quan phòng khám
        <img src="/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <style>
        .home_menu .lien_quan ul{list-style: none;padding: 0 5px}
        .home_menu .lien_quan ul li{width: 100%;text-align: left;border-bottom: 1px solid}
        .home_menu .lien_quan ul li:last-child{border-bottom: none;}
        .home_menu .lien_quan ul li:hover,.home_menu .lien_quan ul li:last-child:hover{background: #ccc}
        .home_menu .lien_quan ul li a{color: black;font-weight: normal;font-size: 14px;}
        .home_menu .lien_quan ul li a img{padding-right: 5px;float: left;}
        .home_menu .lien_quan ul li a span{display:block;padding-top: 5px;letter-spacing: -0.2px;}
    </style>
    <div class="lien_quan menu_content menu_lienquan_content" style="width: 20%;position: absolute;">
        <ul>
            <li><a href="<?= link_gioithieu;?>"><img src="/public/frontend/home/image/menu/ico_pk_gt.png" alt="gioi thieu"><span>Giới thiệu phòng khám</span></a></li>
            <li><a href="<?= link_quytrinhkham;?>"><img src="/public/frontend/home/image/menu/ico_pk_qtk.png" alt="quy trình khám">Quy trình khám</a></li>
            <li><a href="<?= link_kythuat;?>" style="letter-spacing: -1px;"><img src="/public/frontend/home/image/menu/ico_pk_kt.png" alt="Kỹ thuật">Kỹ thuật chuyên nghiệp</a></li>
            <li><a href="<?= link_thietbi;?>"><img src="/public/frontend/home/image/menu/ico_pk_tb.png" alt="Kỹ thuật">Thiết bị hiện đại</a></li>
            <li><a href="<?= link_tuvan;?>"><img src="/public/frontend/home/image/menu/ico_pk_tvb.png" alt="Kỹ thuật">Tư vấn bệnh</a></li>
            <li><a href="<?= link_lotrinhdenkham;?>"><img src="/public/frontend/home/image/menu/ico_pk_dc.png" alt="Địa chỉ">Địa chỉ phòng khám</a></li>
        </ul>
    </div>
</li>
<li class="menu_lv1" id="menu_hangmuc">
    <b>
        Hạng mục điều trị
        <img src="/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <div class="menu_content menu_hangmuc_content" style="margin-left: -40%">
        <ul class="menu_content_hangmuc">
            <li>
                <ul>
                    <li><a href="/<?= cat_rewrite_tri;?>">Trĩ</a> </li>
                    <li><a href="/tri-noi?>">Trĩ nội</a> </li>
                    <li><a href="/tri-ngoai">Trĩ ngoại</a> </li>
                    <li><a href="/tri-hon-hop">Trĩ hỗn hợp</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/<?= cat_rewrite_nutkehaumon;?>">Nứt kẽ hậu môn</a> </li>
                    <li><a href="/<?= cat_rewrite_apxehaumon;?>">Áp xe hậu môn</a> </li>
                    <li><a href="/<?= cat_rewrite_eczemahaumon;?>">Eczema hậu môn</a> </li>
                    <li><a href="/<?= cat_rewrite_nguahaumon;?>">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/polyp-truc-trang">Polyp trực tràng </a> </li>
                    <li><a href="/<?= cat_rewrite_daitienramau;?>">Đại tiện ra máu</a> </li>
                    <li><a href="/<?= cat_rewrite_rohaumon;?>">Rò hậu môn</a> </li>
                    <li><a href="/<?= cat_rewrite_nguahaumon;?>">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/<?= cat_rewrite_taobon;?>">Táo bón</a> </li>
                    <li><a href="/dau-hau-mon">Đau hậu môn</a> </li>
                    <li><a href="/sa-hau-mon">Sa hậu môn</a> </li>
                    <li><a href="/tac-mach-tri">Tắc mạch trĩ</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</li>
<li class="dangky_lv1 menu_lv1" id="menu_dangky">
    <b>
        <div class="clickdangky">
            Đăng ký hẹn khám
            <img src="/public/frontend/home/image/ico_muiten.png" alt="home">
        </div>
    </b>
    <div class="menu_content menu_dangky_content" style="margin-left: -60%; display: none;">
        <div class="menu_content_dangkykham">
            <div class="menu_content_dangkykham_tit">
                <p>Chào mừng bạn đến với hệ thống đăng ký khám qua mạng của phòng khám đa khoa Giải Phóng Hà Nội</p>
                <div id="div_menu_dangky_close" style="width: 27px;top: 10px;z-index: 99;float: right;position: absolute;right: 20px;">
                    <img src="/public/frontend/home/image/menu/ico_dangky_close.png" height="27px;width:27px;">
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $('#div_menu_dangky_close').click(function(){
                        $('.menu_dangky_content').css("display","none");
                    })
                })
                $(document).ready(function(){
                    $('.clickdangky').click(function(){
                        $('.menu_dangky_content').toggle();
                    });
                })
            </script>
            <ul class="menu_content_dangkykham_info">
                <li class="dangkytructuyen">
                    <div class="dangkykham_info_tit">
                        <img src="/public/frontend/home/image/menu/ico_dk.png" alt="dang ky">Đăng ký trực tuyến
                    </div>
                    <div class="dangkykham_info_c">
                        <p><a href="<?= link_tuvan;?>">Đăng ký hẹn khám</a> </p><br>
                        <p>Thời gian tiếp nhận bệnh nhân:<br></p>
                        <p>
                            <i>Mùa Hè</i> : <b>7h30 - 20h:00</b>
                        </p>
                        <p>
                            <i>Mùa Đông</i> : <b>08h:00 - 20h:00</b>
                        </p>
                        <div class="dangkykham_info_c_knn">
                            Cả ngày lễ và chủ nhật
                        </div>
                    </div>
                    <div class="dangkykham_info_des">
                        <p>liên hệ trực tuyến với các bác sỹ, lựa chọn hạng mục chẩn trị, thời gian và thông tin cá nhân để đăng ký thành công</p>
                    </div>
                </li>
                <li class="dangkydienthoai">
                    <div class="dangkykham_info_tit">
                        <img src="/public/frontend/home/image/menu/ico_dt.png" alt="dien thoai">Đăng ký bằng điện thoại
                    </div>
                    <div class="dangkykham_info_c">
                        <p>Số điện thoại</p>
                        <p><b><?= phone1;?></b></p>
                        <p><b><?= phone2;?></b></p>
                        <p><b><?= phone3;?></b></p>
                    </div>
                    <div class="dangkykham_info_des">
                        <p>chỉ cần gọi điện là có thể hẹn khám các khoa</p>
                    </div>
                </li>
                <li class="dangky">
                    <div class="dangkykham_info_tit">
                        <img src="/public/frontend/home/image/menu/ico_email.png" alt="dien thoai">Đăng ký Email
                    </div>
                    <div class="dangkykham_info_c">
                        <form name="frmdangky" id="frmdangky" method="post" target="_self">
                            <div class="row">
                                <div class="col-sm-4">Họ tên</div>
                                <div class="col-sm-8"><input type="text" name="hoten"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Điện thoại</div>
                                <div class="col-sm-8"><input type="text" name="dienthoai"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Khoa khám</div>
                                <div class="col-sm-8">
                                    <select name="khoakham">
                                        <option value="Trĩ">Trĩ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Thời gian</div>
                                <div class="col-sm-8"><input type="text" id="thoigian"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8"><button name="dangky" id="dangky">Đăng Ký</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="dangkykham_info_des">
                        <p>sau khi điền đầy đủ thông tin, nhân viên sẽ gọi điện lại xác nhận thông tin của bạn</p>
                    </div>
                    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                    <script>
                        $(function () {
                            $("#thoigian").datepicker({dateFormat: "yy-mm-dd"});
                        });
                        $(document).ready(function (e) {
                            $("#dangky").on("click", function (e) {
                                //$("#frmdangky").submit();
                                e.preventDefault();
                                var hoten = document.forms['frmdangky']['hoten'].value;
                                var dienthoai = document.forms['frmdangky']['dienthoai'].value;
                                var khoakham = document.forms['frmdangky']['khoakham'].value;
                                var thoigian = document.forms['frmdangky']['thoigian'].value;
                                var url=document.URL;
                                if(hoten=="" || dienthoai==""){
                                    alert('Họ tên và số điện thoại không được để trống.');
                                }else{
                                    var parameter='hoten='+hoten+'&dienthoai='+dienthoai+'&khoakham='+khoakham+'&thoigian='+thoigian+'&uri='+url;
                                    var link_dangky="http://phongkhamnhanai.vn/dangky.php?"+parameter;
                                    window.location.href= link_dangky;
                                    return false;
                                }
                            });
                        });
                    </script>
                </li>
            </ul>
        </div>
    </div>
</li>
<li>
    <div class="input-group">
        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="search">Go!</button>
                            </span>
    </div>
    <script>
        $(document).ready(function(){
            $("#search").click(function(){
                var keyword=$("#keyword").val();
                if(keyword==""){
                    alert("Tìm kiếm không được để trống.");
                    window.location.href=("/");
                }else{
                    window.open("/search/"+keyword,"_blank");
                    done = true;
                }
            })
        })
    </script>
</li>
</ul>
</div>
</div>
<div class="baner" style="text-align: center;">
    <style>
        #myCarousel .carousel-inner .item{
            text-align: center;
        }
        #myCarousel .carousel-inner .item img{
            margin: auto;
        }
    </style>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background: #20acbd;">
                <img src="/public/frontend/home/image/slide-0.png" alt="phong kham nhan ai">
            </div>

            <div class="item" style="background: #dbdbdb;">
                <img src="/public/frontend/home/image/banner2.jpg" alt="phong kham nhan ai">
            </div>
        </div>
        <!-- Left and right controls -->
    </div>
</div>
<div class="toolbar">
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="/benh-tri-la-gi">Bệnh trĩ là gì?</a>
                </li>
                <li>
                    <a href="/nguyen-nhan-gay-ra-benh-tri">Nguyên nhân gây ra bệnh trĩ?</a>
                </li>
                <li>
                    <a href="/trieu-chung-cua-benh-tri">Triệu chứng của bệnh trĩ?</a>
                </li>
                <li>
                    <a href="/benh-tri-co-dan-den-ung-thu-khong">Bệnh trĩ có đẫn đến ung thư không?</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/phuong-phap-dieu-tri-benh-tri-khoi">Phương pháp hỗ trợ điều trị bệnh trĩ</a>
                </li>
                <li>
                    <a href="/chi-phi-chua-benh-tri">Chi phí chữa bệnh trĩ</a>
                </li>
                <li>
                    <a href="/thu-thuat-tri-co-dau-khong">Thủ thuật trĩ có đau không</a>
                </li>
                <li>
                    <a href="/benh-tri-co-tai-phat-khong">Bệnh trĩ có tái phát không</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/trieu-chung-benh-tri-ngoai">Triệu chứng bệnh trĩ ngoại</a>
                </li>
                <li>
                    <a href="/trieu-chung-benh-tri-noi">Triệu chứng bệnh trĩ nội</a>
                </li>
                <li>
                    <a href="/tri-giai-doan-dau-dieu-tri-the-nao">Trĩ giai đoạn đầu điều trị thế nào</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="/dai-tien-ra-mau-tuoi-la-benh-gi">Đại tiện ra máu là bệnh gì</a>
                </li>
                <li>
                    <a href="/ra-mau-o-hau-mon-lam-the-nao">Ra máu ở hậu môn làm thế nào</a>
                </li>
                <li>
                    <a href="/dai-tien-ra-mau-can-lam-nhung-kiem-tra-gi">Đại tiện ra máu cần làm những kiểm tra gì</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/trieu-chung-dai-tien-ra-mau-gom-nhung-gi">Triệu chứng đại tiện ra máu gồm những gì</a>
                </li>
                <li>
                    <a href="/dai-tien-ra-mau-la-bi-lam-sao">Đại tiện ra máu là bị làm sao</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/nhung-nguyen-nhan-nao-dan-den-dai-tien-ra-mau">Những nguyên nhân nào dẫn đến đại tiện ra máu</a>
                </li>
                <li>
                    <a href="/dai-tien-ra-mau-dieu-tri-nhu-the-nao">Đại tiện ra máu điều trị như thế nào</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="/dau-hau-mon-la-gi">Đau hậu môn là gì</a>
                </li>
                <li>
                    <a href="/ngua-hau-mon-la-gi">Ngứa hậu môn là gì</a>
                </li>
                <li>
                    <a href="/hau-mon-xuat-hien-bui-thit-la-lam-sao-">Hậu môn xuất hiện búi thịt là làm sao?</a>
                </li>
            </ul>
            <br>
            <ul class="toolbar_articel">
                <li>
                    <a href="/benh-nut-ke-hau-mon-la-gi">Nứt kẽ hậu môn là gì</a>
                </li>
                <li>
                    <a href="/dau-hau-mon-sau-khi-di-dai-tien">Đau hậu môn sau khi đi đại tiện</a>
                </li>
            </ul>
            <br>
            <ul class="toolbar_articel">
                <li>
                    <a href="/nut-ke-hau-mon-do-dau">Nứt kẽ hậu môn do đâu</a>
                </li>
                <li>
                    <a href="/di-vat-o-hau-mon-la-benh-gi">Dị vật ở hậu môn là bệnh gì</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="/ro-hau-mon-la-benh-gi">Rò hậu môn là bệnh gì</a>
                </li>
                <li>
                    <a href="/nhung-nguyen-nhan-gay-ro-hau-mon">Nguyên nhân dẫn đến rò hậu môn</a>
                </li>
                <li>
                    <a href="/trieu-chung-cua-benh-ro-hau-mon">Triệu chứng của bệnh rò hậu môn</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/benh-ro-hau-mon-va-cach-dieu-tri-hieu-qua">Bệnh rò hậu môn và cách điều trị hiệu quả.</a>
                </li>
                <li>
                    <a href="/chi-phi-dieu-tri-benh-ro-hau-mon-het-bao-nhieu-tien">Chi phí chữa rò hậu môn hết bao tiền</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="/vi-sao-ro-hau-mon-de-tai-phat">Vì sao rò hậu môn dễ tái phát</a>
                </li>
                <li>
                    <a href="/dieu-tri-benh-ro-hau-mon-bao-lau-thi-khoi">Điều trị dò hậu môn bao lâu thì khỏi</a>
                </li>
                <li>
                    <a href="/phuong-phap-dieu-tri-ro-hau-mon">Phương pháp điều trị rò hậu môn</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main_item">
        <ul class="toolbar_cat">
            <li class="toolbar_item toolbar_tri">
                <a href="/<?= cat_rewrite_tri;?>">
                    <img src="/public/frontend/home/image/toolbar_ico_tri.png" alt="Tri">bệnh trĩ
                </a>
            </li>
            <li class="toolbar_item toolbar_dtrm">
                <a href="/<?= cat_rewrite_daitienramau;?>">
                    <img src="/public/frontend/home/image/toolbar_ico_dtrm.png" alt="Tri">Đại tiện ra máu
                </a>
            </li>
            <li class="toolbar_item toolbar_tthm">
                <a href="/chan-thuong-hau-mon">
                    <img src="/public/frontend/home/image/toolbar_ico_tthm.png" alt="Tri">Chấn thương hậu môn
                </a>
            </li>
            <li class="toolbar_item toolbar_vhm">
                <a href="/<?= cat_rewrite_rohaumon;?>">
                    <img src="/public/frontend/home/image/toolbar_ico_vhm.png" alt="Tri">Rò hậu môn
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.toolbar_item').hover(function(){
            _index=$(this).index();
            $('.toolbar_item').removeClass('hover');
            $('.toolbar_content').removeClass('hover');
            $(this).addClass('hover');
            $('.toolbar_content').eq(_index).addClass('hover');
        },function(){
            $('.toolbar_content').hover(function(){
            },function(){
                $('.toolbar_item').removeClass('hover');
                $('.toolbar_content').removeClass('hover');
            })
        })
        $('.home').hover(function(){
            $('.toolbar_item').removeClass('hover');
            $('.toolbar_content').removeClass('hover');
        })
    })
</script>
<main class="home">
<div class="container2">
    <div class="row1">
        <h1 class="text-center text-uppercase">những gì bạn muốn đều ở đây</h1>
        <h2 class="text-center text-uppercase">Những bệnh được tìm kiếm nhiều nhất ở phòng khám Giải Phóng</h2>
        <div>
            <ul>
                <li><a href="<?= cat_rewrite_tri;?>" class="text-center text-uppercase active">bệnh trĩ</a></li>
                <li><a href="<?= cat_rewrite_daitienramau;?>" class="text-center text-uppercase">đại tiện ra máu</a></li>
                <li><a href="<?= cat_rewrite_nutkehaumon;?>" class="text-center text-uppercase">Nứt kẽ hậu môn</a></li>
                <li><a href="<?= cat_rewrite_trieuchungkhac;?>" class="text-center text-uppercase">Triệu chứng khác</a></li>
            </ul>
        </div>
        <div class="tab-contents-1">
            <div class="active">
                <div class="flex1 flex justify-content-between">
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase"><a href="">làm sao để <br>chữa khỏi bệnh trĩ</a></h3>
                        <h4>Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase"><a href="">Bệnh trĩ điều trị<br>mấy ngày là khỏi</a></h3>
                        <h4>Thủ thuật xâm lấn tối thiểu hiệu quả tốt</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase"><a href="">Nguyên nhân nào<br>gây ra bệnh trĩ?</a></h3>
                        <h4>Đứng, ngồi lâu? Ăn uống không hợp lý?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase"><a href="">Chữa bệnh trĩ<br>có đau không?</a></h3>
                        <h4>Xâm lấn tối thiểu không đau, không dao kéo</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex1 flex justify-content-between">
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">làm sao để <br>chữa khỏi bệnh đại tiện ra máu</h3>
                        <h4>Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Bệnh đại tiện ra máu điều trị<br>mấy ngày là khỏi</h3>
                        <h4>Thủ thuật xâm lấn tối thiểu hiệu quả tốt</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Nguyên nhân nào<br>gây ra bệnh đại tiện ra máu?</h3>
                        <h4>Đứng, ngồi lâu? Ăn uống không hợp lý?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Chữa bệnh đại tiện ra máu<br>có đau không?</h3>
                        <h4>Xâm lấn tối thiểu không đau, không dao kéo</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex1 flex justify-content-between">
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">làm sao để <br>chữa khỏi bệnh tổn thương hậu môn</h3>
                        <h4>Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Bệnh tổn thương hậu môn điều trị<br>mấy ngày là khỏi</h3>
                        <h4>Thủ thuật xâm lấn tối thiểu hiệu quả tốt</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Nguyên nhân nào<br>gây ra bệnh tổn thương hậu môn?</h3>
                        <h4>Đứng, ngồi lâu? Ăn uống không hợp lý?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Chữa bệnh tổn thương hậu môn<br>có đau không?</h3>
                        <h4>Xâm lấn tối thiểu không đau, không dao kéo</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex1 flex justify-content-between">
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">làm sao để <br>chữa khỏi bệnh bệnh quanh vùng hậu môn</h3>
                        <h4>Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Bệnh bệnh quanh vùng hậu môn điều trị<br>mấy ngày là khỏi</h3>
                        <h4>Thủ thuật xâm lấn tối thiểu hiệu quả tốt</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Nguyên nhân nào<br>gây ra bệnh bệnh quanh vùng hậu môn?</h3>
                        <h4>Đứng, ngồi lâu? Ăn uống không hợp lý?</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                    <div class="flex1col1 text-center">
                        <h3 class="text-uppercase">Chữa bệnh bệnh quanh vùng hậu môn<br>có đau không?</h3>
                        <h4>Xâm lấn tối thiểu không đau, không dao kéo</h4>
                        <h5 class="text-center">
                            <a href="<?= link_tuvan;?>">Tìm hiểu kỹ hơn</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row1-footer">
            <h3 class="text-center"><a href="<?= link_tuvan;?>" class="dis-inline-block">Bác sỹ tư vấn</a></h3>
        </div>
    </div>
</div>
<div class="row2">
    <a href="#"></a>
</div>
<div class="row3">
    <h2 class="text-center text-uppercase"><span>Phòng khám chuyên khoa bệnh trĩ</span></h2>
    <div class="container2">
        <div class="flex flex1 justify-content-between flex-wrap-wrap">
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/home/image/home-2.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box">Môi trường khám chữa bệnh ấm cúng, khám bệnh tâm trạng tốt</p>
                </div>
            </div>
            <div class="flex1col2">
                <div>
                    <img src="/public/frontend/home/image/home-3.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg2">Bác sĩ chuyên nghiệp<br>khám bệnh yên tâm hơn</p>
                </div>
            </div>
            <div class="flex1col3">
                <div>
                    <img src="/public/frontend/home/image/home-4.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg3">Kỹ thuật tiên tiến,<br>an toàn không đau </p>
                </div>
            </div>
            <div class="flex1col4">
                <div>
                    <img src="/public/frontend/home/image/home-7.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg4">Đặt hẹn khám miễn phí qua mạng<br>Tiện lợi - nhanh chóng - tiết kiệm</p>
                </div>
            </div>
            <div class="flex1col5">
                <div>
                    <img src="/public/frontend/home/image/home-6.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg5">Kết quả quả xét nghiệm chính xác yên tâm hơn,đảm bảo hiệu quả điều trị.</p>
                </div>
            </div>
            <div class="flex1col6">
                <div>
                    <img src="/public/frontend/home/image/home-5.png" alt="">
                </div>
                <div class="muiten active">
                    <p class="arrow_box bg6">Dịch vụ chuyên nghiệp hơn,<br>khám bệnh không áp lực</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row4">
    <div class="container">
        <h2 class="text-center text-uppercase"><span>Đội ngũ bác sỹ chuyên nghiệp</span></h2>
        <div class="flex flex1 justify-content-between">
            <div class="flex1col1">
                <h4 class="text-center">Đội ngũ bác sỹ khám chữa bệnh trĩ<br>chuyên nghiệp tại Hà Nội</h4>
                <p class="text-justify">
                    Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị phụ khoa.
                </p>
            </div>
            <div class="flex1col1">
                <h4 class="text-center">Có kinh nghiệm phong phú trong điều trị<br>các bệnh trực tràng hậu môn</h4>
                <p class="text-justify">
                    Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
                </p>
            </div>
        </div>
        <div>
            <img class="center-block" src="/public/frontend/home/image/home-8.png" alt="">
        </div>
    </div>
</div>
<div class="row5">
    <div class="container">
        <div class="flex flex1">
            <div class="flex1col1">
                <h2>Hỏi Bác Sĩ</h2>
                <p>
                    Những thắc mắc về y khoa, các căn bệnh, cách phòng ngừa, điều trị... sẽ được đội ngũ Bác Sĩ chúng tôi trả lời trong thời gian sớm nhất.
                </p>
            </div>
            <div class="flex1col2">
                <div>
                    <p>Thưa bác sỹ tôi có vấn đề liên quan đến sức khỏe cần sự giúp đỡ, mong nhận được sự phản hồi nhanh chóng từ bác sỹ.</p>
                    <!--<h5>Như Nguyễn</h5>-->
                    <div class="clearfix">
                        <div class="pull-left">
                            <a href="<?= link_tuvan;?>">Gửi câu hỏi của bạn</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?= link_tuvan;?>" class="text-uppercase"><i></i> Bác sĩ trả lời</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row6">
<div class="container2">
<h2 class="text-center text-uppercase"><span>ưu thế của chúng tôi</span></h2>
<div class="border">
    <div class="flex flex1 justify-content-between">
        <div class="flex1col1">
            <h4 class="text-center text-uppercase active">KỸ THUẬT CHUYÊN<br>NGHIỆP ĐIỀU TRỊ TRĨ</h4>
        </div>
        <div class="flex1col1">
            <h4 class="text-center text-uppercase">TẠI SAO LỰA CHỌN<br>CHÚNG TÔI</h4>
        </div>
    </div>
</div>
<div class="tab-contents-2">
    <style>
        .multi-item-carousel .carousel-inner > .item {
            -webkit-transition: 500ms ease-in-out left;
            transition: 500ms ease-in-out left;
        }
        .multi-item-carousel .carousel-inner .active.left {
            left: -33%;
        }
        .multi-item-carousel .carousel-inner .active.right {
            left: 33%;
        }
        .multi-item-carousel .carousel-inner .next {
            left: 33%;
        }
        .multi-item-carousel .carousel-inner .prev {
            left: -33%;
        }
        @media all and (transform-3d), (-webkit-transform-3d) {
            .multi-item-carousel .carousel-inner > .item {
                -webkit-transition: 500ms ease-in-out left;
                transition: 500ms ease-in-out left;
                -webkit-transition: 500ms ease-in-out all;
                transition: 500ms ease-in-out all;
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform: none!important;
                transform: none!important;
            }
        }
        .multi-item-carousel .carouse-control.left,
        .multi-item-carousel .carouse-control.right {
            background-image: none;
        }
    </style>
    <div class="active">
        <div class="slides_thietbi">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-xs-4">
                                <div class="thietbi_img">
                                    <img src="/public/frontend/home/image/image-1.png" class="img-responsive">
                                </div>
                                <div class="thietbi_main">
                                    <div class="thietbi_tit">Nội soi<br>bằng viêm nang OMOM</div>
                                    <div class="thietbi_kengang"></div>
                                    <div class="thietbi_txt">Phá vỡ phương pháp kiểm tra truyền thống, thực hiện nuốt viên nang kiểm tra đường ruột, không gây mê, không đưa ống vào...</div>
                                    <div class="thietbi_btn">
                                        <a href="<?= link_tuvan;?>"> Tìm hiểu chi tiết thiết bị >>> </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat2.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Máy soi trực tràng hậu môn<br>DR.C của Hàn Quốc</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Sử dụng đầu soi độ nét cao 12 triệu pixel tiên tiến quốc tế, rõ nét, không sai sót, kiểm tra chính xác và các ưu điểm khác, có thể...</div>
                                <div class="thietbi_btn">
                                    <a href="/thiet-bi-phong-kham?thietbi=thietbi3"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat3.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Máy soi kết tràng<br>Không đau OLYMPUS của Nhật</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Điều trị viêm loét dạ dày, xuất huyết đường tiêu hóa, ung thư đại tràng, polyp trực tràng, các loại viêm trực tràng, hiệu quả điều trị...</div>
                                <div class="thietbi_btn">
                                    <a href="<?/*= link_tuvan;*/?>"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat4.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Kỹ thuật xâm lấn tối thiểu<br>có lựa chọn TST</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Cơ chế hình thành trĩ của cơ thể, chính là sự thay đổi mang tính sinh lý bệnh lý của trĩ...</div>
                                <div class="thietbi_btn">
                                    <a href="/thiet-bi-phong-kham?thietbi=thietbi4"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat5.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Kỹ thuật cắt điện xâm lấn tối thiểu<br>HCPT thế hệ thứ 8</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Lợi dụng nguyên lý sinh nhiệt điện trường điện rung cao tần, có thể tính chính xác tổ chức trĩ trong việc điều trị...</div>
                                <div class="thietbi_btn">
                                    <a href="/thiet-bi-phong-kham?thietbi=thietbi7"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat6.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Máy điều trị trĩ<br>COOK của Mỹ</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Dùng áp lực 0.1MPa hút liên tục khiến tổ chức trĩ tách rời, khô lại, chặn sự cung cấp máu, làm cho búi trĩ co lại...</div>
                                <div class="thietbi_btn">
                                    <a href="/thiet-bi-phong-kham?thietbi=thietbi6"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4">
                            <div class="thietbi_img">
                                <img src="/public/frontend/home/image/kythuat7.jpg" class="img-responsive">
                            </div>
                            <div class="thietbi_main">
                                <div class="thietbi_tit">Máy thắt động mạch trĩ<br>Doppler DG-HAL</div>
                                <div class="thietbi_kengang"></div>
                                <div class="thietbi_txt">Sự tập hợp đầu dò sóng siêu âm, thủ thuật khâu vá trong một thể, bản chất của thủ thuật là tiền đề của trực quan siêu dẫn...</div>
                                <div class="thietbi_btn">
                                    <a href="/thiet-bi-phong-kham?thietbi=thietbi1"> Tìm hiểu chi tiết thiết bị >>> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <script>
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
            interval: false
        });
        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            if (next.next().length>0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
    <div>
        <div class="flex flex3 justify-content-between">
            <div class="flex3col1">
                <div class="active">
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Lịch sử thương hiệu</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                phòng khám đa khoa Giải Phóng Hà Nội là phòng khám quy mô lớn chuyên nghiệp ở Hà Nội, có ưu thế mà không phòng khám nào so sánh được.
                                Có bác sỹ chuyên nghiệp với hơn 20 năm kinh nghiệm lâm sàng, là cơ sở điều trị có hiệu quả.
                                Phòng khám có kỹ thuật tiên tiến, thiết bị điều trị hiện đại mới nhất thế giới.
                                phòng khám Giải Phóng được người dân Hà Nội lựa chọn và tin tưởng, đây là động lực làm việc của toàn bộ các y bác sỹ nhân viên phòng khám.
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/home-13.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Thành tích vượt trội, tương lai huy hoàng</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                Nhiều năm nay phòng khám đa khoa Giải Phóng Hà Nội luôn nỗ lực nghiên cứu và mở rộng phương pháp điều trị tốt nhất đối với bệnh trĩ, khiến cho trình độ điều trị bệnh về trực tràng hậu môn không ngừng nâng cao, luôn theo kịp quỹ đạo thế giới, không ngừng nâng cao trình độ kỹ thuật y tế. Toàn tâm thực hiện phòng khám chuyên khoa trực tràng hậu môn quốc tế, hiện đại hóa, khoa học kỹ thuật và văn minh...
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/uuthe2.jpg" alt="uu the">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Tiêu chuẩn cao, chất lượng cao, đảm bảo hiệu quả điều trị.</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                phòng khám đa khoa Giải Phóng Hà Nội là phòng khám đa khoa chuyên nghiệp ở Hà Nội, có môi trường nghiên cứu khoa học tốt, môi trường học thuật sâu rộng và kết hợp mật thiết chẩn trị lâm sàng và nghiên cứu cơ sở, phòng khám đa khoa Giải Phóng do tiêu chuẩn cao về dịch vụ, kỹ thuật điều trị tiên tiến chuyên nghiệp, tỷ lệ chữa khỏi cao, nhận được lời nhận xét tốt từ các bộ ngành liên quan...
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/uuthe3.jpg" alt="uu the">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Thương hiệu dịch vụ điều trị trực tràng hậu môn</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                phòng khám đa khoa Giải Phóng Hà Nội áp dụng phương pháp quản lý tiêu chuẩn quốc tế, giành được thương hiệu phục vụ về trực tràng hậu môn, đảm bảo chất lượng chẩn trị về trực tràng hậu môn, khái niệm về tinh thần nhân viên, khái niệm về dịch vụ phòng khám... Phòng khám theo đuổi môi trường văn hóa.
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/uuthe4.jpg" alt="uu the">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Quan niệm dịch vụ: “thành tâm hành nghề, lấy người làm gốc”</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/uuthe5.jpg" alt="uu the">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex4 justify-content-between">
                        <div class="flex4col1">
                            <h4>Hơn 20 nghìn bệnh nhân tin tưởng phòng khám</h4>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;
                                Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.
                            </p>
                        </div>
                        <div class="flex4col2">
                            <img src="/public/frontend/home/image/uuthe6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex3col2">
                <ul>
                    <li class="active"><i class="bg bg1"></i> Lịch sử thương hiệu</li>
                    <li><i class="bg bg2"></i> Danh tiếng thương hiệu</li>
                    <li><i class="bg bg3"></i> Thực lực thương hiệu</li>
                    <li><i class="bg bg4"></i> Văn hóa thương hiệu</li>
                    <li><i class="bg bg5"></i> Dịch vụ thương hiệu</li>
                    <li><i class="bg bg6"></i> Truyền miệng thương hiệu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="row7">
    <div class="container">
        <h2 class="text-center">Bệnh nhân nói gì về chúng tôi</h2>
        <style>
            .benhnhannoi .carousel-control.left,.benhnhannoi .carousel-control.right{
                background: none;
            }
        </style>
        <div id="myCarousel" class="carousel slide benhnhannoi" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php foreach($binhluan as $key=>$val){?>
                <div class="item <?php if($key=="0"){echo 'active';}else{}?>">
                    <p class="text-justify">
                        <?= $val->com_text;?>
                    </p>
                </div>
                <?php }?>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row8">
<div class="container2">
<h2 class="text-center text-uppercase"><span>chủ đề bạn quan tâm nhất</span></h2>
<div class="flex flex1 justify-content-between">
<div class="flex1col1">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-uppercase">Chủ đề nổi bật</h4>
        </div>
        <div class="pull-right">
            <h4 class=""><a href="<?= link_tuvan;?>">tôi muốn đặt câu hỏi</a></h4>
        </div>
    </div>
    <div class="tabs-1">
        <div class="groups-btn">
            <button class="text-uppercase active"><a href="/<?= cat_rewrite_apxehaumon;?>">Bệnh Áp xe hậu môn</a> </button>
            <button class="text-uppercase"><a href="/<?= cat_rewrite_daitienramau;?>">Đại tiện ra máu</a> </button>
            <button class="text-uppercase"><a href="/<?= cat_rewrite_nutkehaumon;?>">Nứt kẽ hậu môn</a> </button>
        </div>
        <div class="groups-content">
            <div class="active">
                <ul>
                    <?php foreach($news_apxehaumon as $val){?>
                    <li>
                        <h5>
                            <a href="/<?= $val->product_alias;?>"><?= substr_font($val->name,100);?></a>
                        </h5>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div>
                <ul>
                    <?php foreach($news_daitienramau as $val){?>
                        <li>
                            <h5>
                                <a href="/<?= $val->product_alias;?>"><?= substr_font($val->name,100);?></a>
                            </h5>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <div>
                <ul>
                    <?php foreach($news_nutkehaumon as $val){?>
                        <li>
                            <h5>
                                <a href="/<?= $val->product_alias;?>"><?= substr_font($val->name,100);?></a>
                            </h5>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="flex1col2">
    <div class="clearfix">
        <div class="pull-left">
            <p class="text-uppercase">
                Phòng khám mỗi ngày<br>hạn chế số lượng 20 người
            </p>
        </div>
        <div class="pull-right">
            <a href="<?= link_tuvan;?>">Tôi muốn đặt hẹn</a>
        </div>
    </div>
    <!--<script src="/public/frontend/home/js/MSClass.js" type="text/javascript"></script>-->
    <script src="http://khamnamkhoahanoi.vn/public/frontend/js/MSClass.js" type="text/javascript"></script>
    <div id="demo">
        <table id="demo1">
            <?php foreach($dkthanhcong as $key=>$val){?>
            <tr>
                <td><?= $val['hoten'];?></td>
                <td><?php $str_r=substr($val['dienthoai'],-7,4);echo str_replace($str_r,'xxxx',$val['dienthoai']);?></td>
                <td>Thành công</td>
            </tr>
            <?php }?>
        </table>
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
    <div class="free-chat">
        <h3><a href="<?= link_tuvan;?>"><span>Miễn phí</span> đặt hẹn trên mạng</a></h3>
        <p>Điện thoại đặt hẹn: <a href="<?=link_tuvan;?>"><strong><?= phone1;?></strong></a></p>
    </div>
</div>
</div>
</div>
</div>
<!--<div class="row9">
    <div class="text-center">
        <a href="<?/*= link_tuvan;*/?>" class="dis-inline-block text-uppercase">click đăng ký hẹn khám</a>
    </div>
</div>-->
<div class="row thongketruycap" id="zxno_box">
    <div class="main_item zxno_in">
        <div class="col-lg-4" style="text-align: center">
            <div class="zxno_l1">
                <ul>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>

                        <div class="nopic" style="background: url(&quot;/public/frontend/img/home/num_2.png&quot;); top: 0px; height: 49px;"></div></li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>

                        <div class="nopic" style="background: url(&quot;/public/frontend/img/home/num_9.png&quot;); top: 0px; height: 49px;"></div></li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>

                        <div class="nopic" style="background: url(&quot;/public/frontend/img/home/num_4.png&quot;); top: 0px; height: 49px;"></div></li>
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
                        <div class="num1" style="">0</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num2" style="">9</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num3" style="">7</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num4" style="">3</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num5" style="">0</div>
                    </li>
                </ul>
                <p class="color_white">Số người tư vấn trong tháng</p>
                <div class="clear"></div>
                <div class="clear"></div>
                <div><a class="btn btn-success" href="http://tv.suckhoe168.com/lr/chatpre.aspx?id=mcg56116959&amp;lng=en&amp;r=&amp;rf1=&amp;rf2=&amp;p=http%3A//khamnamkhoahanoi.vn/&amp;cid=1489980459434916996530&amp;sid=1490145269842481067660">click đăng ký hẹn khám</a></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="zxno_l3">
                <ul>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num1" style="">5</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num2" style="">1</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num3" style="">3</div>
                    </li>
                    <li>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="num4" style="">0</div>
                    </li>
                </ul>
                <p class="color_white">Số người hẹn khám trong tháng</p>
            </div>
        </div>
    </div>
</div>
<div class="row10">
    <div class="container">
        <h2 class="text-center text-uppercase"><span>Về chúng tôi</span></h2>
        <p class="text-center">Phòng khám chuyên khoa trực tràng hậu môn, chúng tôi chứng minh bằng hiệu quả điều trị</p>
        <div class="flex flex1 justify-content-between">
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/home/image/image-2.png" alt="" class="center-block">
                </div>
                <h5 class="text-center"><span>Dịch vụ VIP</span></h5>
                <p class="text-justify">
                    Phòng khám có môi trường y tế lý tưởng, bác sỹ thân thiện với bệnh nhân, hướng dẫn tận tình, phòng bệnh ấm cúng như ở nhà.
                </p>
            </div>
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/home/image/image-3.png" alt="" class="center-block">
                </div>
                <h5 class="text-center"><span>Thu phí rõ ràng</span></h5>
                <p class="text-justify">
                    Phòng khám nghiêm ngặt tuân thủ quy định về thu phí của các ban ngành liên quan, thu phí có hóa đơn rõ ràng, theo dõi chặt chẽ.
                </p>
            </div>
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/home/image/image-4.png" alt="" class="center-block">
                </div>
                <h5 class="text-center"><span>Thu phí công khai</span></h5>
                <p class="text-justify">
                    Phòng thu ngân nằm ở khu đại sảnh tầng 1, giúp bệnh nhân nộp phí công khai
                </p>
            </div>
            <div class="flex1col1">
                <div>
                    <img src="/public/frontend/home/image/image-5.png" alt="" class="center-block">
                </div>
                <h5 class="text-center"><span>Quy trình thăm khám</span></h5>
                <p class="text-justify">
                    Phòng khám cung cấp quy trình thăm khám rõ ràng, có thể tìm hiểu trên mạng hoặc gọi điện đặt mã số khám và được tư vấn cụ thể
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row11">
    <div class="container">
        <h2 class="text-center">Bạn cần hỗ trợ</h2>
        <p class="text-center">
            Bạn có thắc mắc về việc khám và chữa bệnh, hồ sơ bệnh án, đặt lịch hẹn Bác sĩ, những triệu chứng đang mắc phải, .... Hãy liên hệ ngay cho
            chúng tôi để được hỗ trợ tốt nhất.
        </p>
        <div class="main_item">
            <ul class="help_you">
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="/public/frontend/home/image/ico_dienthoai.png" alt="email"></span>
                        <span>Điện thoại tư vấn</br><b><?= phone1;?></b></span>
                    </a>
                </li>
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="/public/frontend/home/image/ico_trochuyen.png" alt="email"></span>
                        <span>Hỗ trợ trực tuyến</br><b>Trò chuyện</b></span>
                    </a>
                </li>
                <li>
                    <a href="<?= link_tuvan;?>">
                        <span><img src="/public/frontend/home/image/ico_email.png" alt="email" style="margin-top: 10px;"></span>
                        <span>Gửi thư cho chúng tôi</br><b>Qua Email</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row12">
    <div class="">
        <div class="flex flex1">
            <div class="flex1col1">
                <div>
                    <a href="<?= link_tuvan;?>" class="dis-inline-block">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="flex1col2">
                <form action="" method="post">
                    <input type="email" value="Địa chỉ email của bạn">
                    <a href="<?= link_tuvan;?>"> <button type="button">Đăng ký</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
@include('site.footer')
<!--<footer>
    <div class="container">
        <div class="flex flex1 justify-content-between">
            <div class="flex1col1">
                <h2>
                    <a href="<?/*= domain;*/?>">
                        <img src="/public/frontend/home/image/logo.png" alt="" class="center-block">
                    </a>
                </h2>
                <h3 class="text-uppercase text-center"><a href="">phòng khám đa khoa Giải Phóng</a></h3>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">TRUNG TÂM</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_gioithieu;*/?>">Giới thiệu</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_thietbi;*/?>">Thiết bị</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_tuvan;*/?>">Trường hợp khỏi bệnh</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_tuvan;*/?>">Tư vấn chi phí</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_tuvan;*/?>">Tư vấn bệnh</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_diachi;*/?>">Liên hệ</a></h5></li>
                </ul>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">HẠNG MỤC TRỊ LIỆU</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_tri;*/?>">TRĨ</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_nutkehaumon;*/?>">NỨT KẼ HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_apxehaumon;*/?>">ÁP XE HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_apxehaumon;*/?>">ECZEMA HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_nguahaumon;*/?>">NGỨA HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= cat_rewrite_daitienramau;*/?>">ĐẠI TIỆN RA MÁU</a></h5></li>
                </ul>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">DỊCH VỤ VÀ GIÚP ĐỠ</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="/<?/*= link_lotrinhdenkham;*/?>">LỘ TRÌNH PHÒNG KHÁM</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_tuvan;*/?>">TƯ VẤN TRỰC TUYẾN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_tuvan;*/?>">ĐĂNG KÝ HẸN KHÁM</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_skype;*/?>">SKYPE</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="<?/*= link_facebook;*/?>">FACEBOOK</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/<?/*= link_lotrinhdenkham;*/?>">TUYẾN ĐƯỜNG</a></h5></li>
                </ul>
            </div>
            <div class="flex1col3">
                <p class="text-uppercase">Đường dây nóng tư vấn sức khỏe</p>
                <div class="clearfix">
                    <div class="pull-left">
                        <i class="dis-inline-block"></i>
                    </div>
                    <div class="pull-left">
                        <p><a href="<?/*= link_tuvan;*/?>"><strong><?/*= phone1;*/?></strong></a></p>
                        <p><a href="<?/*= link_tuvan;*/?>"><strong><?/*= phone2;*/?></strong></a></p>
                    </div>
                </div>
                <div>
                    <p><span class="text-uppercase"><strong>Địa chỉ:</strong></span> <a href="#">709 Giải Phóng - Hoàng Mai - Hà Nội</a></p>
                    <p><span class="text-uppercase"><strong>SỞ HỮU BẢN QUYỀN:</strong></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="flex flex2 justify-content-between">
            <div class="flex2col1">
                <div class="bg bg1"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Liên hệ<br>bác sĩ</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg2"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Kiểm tra<br>trước thủ thuật</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg3"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Tư cách<br>bác sỹ</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg4"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Vật tư<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg5"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Thiết bị<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg6"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Thủ thuật<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg7"></div>
                <p><a href="<?/*= link_tuvan;*/?>">Chăm sóc<br>sau thủ thuật</a></p>
            </div>
        </div>
    </div>
    <div class="footer-status text-center">
        Sở hữu bản quyền phòng khám đa khoa Giải Phóng Hà Nội  All rights reserved, Nôi dung website này chỉ để tham khảo, không làm căn cứ để chẩn đoán điều trị. Tôn trọng ý kiến bác sĩ.
    </div>
</footer>
<div id="fcopy" style="margin-top: 80px;overflow: hidden;">
    <div style="background: #044e56;border-top: 4px solid #19557e;position: fixed;bottom: 0px;width: 100%;height: 80px;">
        <div style="width: 1000px;margin: auto;overflow: hidden;">
            <div>
                <style>
                    .ico a img{margin-right: 50px;}
                </style>
                <div class="ico" style="float: left">
                    <a href="<?/*= link_tuvan;*/?>"><img src="http://phongkhambenhxahoi.vn/public/frontend/img/home/ico_henkhamf.png" alt="hen kham"></a>
                    <a href="<?/*= link_tuvan;*/?>"><img src="http://phongkhambenhxahoi.vn/public/frontend/img/home/ico_benhtinhf.png" alt="hoi benh tinh"></a>
                    <a href="<?/*= link_tuvan;*/?>"><img src="http://phongkhambenhxahoi.vn/public/frontend/img/home/ico_chiphif.png" alt="hoi chi phi"></a>
                    <a href="<?/*= link_tuvan;*/?>"><img src="http://phongkhambenhxahoi.vn/public/frontend/img/home/ico_bacsyf.png" alt="hoi bac sy"></a>
                </div>
                <img src="http://phongkhambenhxahoi.vn/public/frontend/images/ico_dangky_close.png" id="f_close">
            </div>
        </div>
    </div>
</div>
<script>
    $('#f_close').click(function(){
        $('#fcopy').hide();
    })
</script>
<?= AddLeft();?>
<?= popup();?>
<?= dangkysdt();?>
<?= line_chat();?>
</body>
</html>-->