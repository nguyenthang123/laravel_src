<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trĩ - phòng khám Giải Phóng</title>
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/footer.css">

    <script type="text/javascript" src="<?= domain;?>/public/frontend/home/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="<?= domain;?>/public/frontend/home/css/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= domain;?>/public/frontend/home/js/desktop.js"></script>
    <script type="text/javascript" src="<?= domain;?>/public/frontend/home/js/home.js"></script>
    <base target="_blank">
    <link rel="stylesheet" href="{!!  asset('/public/css/style.css'); !!}"/>
    <link rel="stylesheet" href="{!!  asset('/public/css/banner.css'); !!}"/>
    <?= ico_shortcut;?>
</head>
<style type="text/css">
        .row {
             margin-left: 0px;
             margin-right: 0px;
        }
    </style>
<body>
<?= cdtop();?>
<header>
    <div class="flex flex1 justify-content-between" style="height: 65px;">
        <div class="flex1col1">
            <h2 class="text-container-center logo">
                <a href="<?= domain;?>"><img src="http://phongkhamgiaiphong.com/tri/public/frontend/home/image/header-1.png" alt="phong kham"></a>
            </h2>
        </div>
        <div class="flex1col2">
            <div class="flex flex2 justify-content-between">
                <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/home/image/header-2.png" alt="phong kham"></a></div>
                <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/home/image/header-3.png" alt="phong kham"></a></div>
                <div class="flex2col1 text-container-center"><a href="<?= link_lotrinhdenkham;?>"><img src="<?= domain;?>/public/frontend/home/image/header-4.png" alt="phong kham"></a></div>
            </div>
        </div>
    </div>
</header>
<div class="home_menu">
<div class="home_main_item">
<ul class="menu">
<li class="menu_lv1">
    <a href="<?= domain;?>" style="padding: 0;">
        <b>
            <img src="<?= domain;?>/public/frontend/home/image/ico_home.png" alt="home" style="margin-top: -8px;">
            Trang chủ
        </b>
    </a>
</li>
<li class="menu_lv1" id="menu_lienquan">
    <b>
        Liên quan phòng khám
        <img src="<?= domain;?>/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <style>
        .home_menu .lien_quan ul{list-style: none;padding: 0 5px}
        .home_menu .lien_quan ul li{width: 100%;text-align: left;border-bottom: 1px solid #eee}
        .home_menu .lien_quan ul li:last-child{border-bottom: none;}
        .home_menu .lien_quan ul li:hover,.home_menu .lien_quan ul li:last-child:hover{background: #ccc}
        .home_menu .lien_quan ul li a{color: black;font-weight: normal;font-size: 14px;}
        .home_menu .lien_quan ul li a img{padding-right: 5px;float: left;}
        .home_menu .lien_quan ul li a span{display:block;padding-top: 5px;}
    </style>
    <div class="lien_quan menu_content menu_lienquan_content" style="width: 20%;position: absolute;">
        <ul>
            <li><a href="<?= link_gioithieu;?>"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_gt.png" alt="gioi thieu"><span>Giới thiệu phòng khám</span></a></li>
            <li><a href="<?= link_quytrinhkham;?>"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_qtk.png" alt="quy trình khám">Quy trình khám</a></li>
            <li><a href="<?= link_kythuat;?>" style="letter-spacing: -1px;"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_kt.png" alt="Kỹ thuật">Kỹ thuật chuyên nghiệp</a></li>
            <li><a href="<?= link_thietbi;?>"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_tb.png" alt="Kỹ thuật">Thiết bị hiện đại</a></li>
            <li><a href="<?= link_tuvan;?>"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_tvb.png" alt="Kỹ thuật">Tư vấn bệnh</a></li>
            <li><a href="<?= link_lotrinhdenkham;?>"><img src="<?= domain;?>/public/frontend/home/image/menu/ico_pk_dc.png" alt="Địa chỉ">Địa chỉ phòng khám</a></li>
        </ul>
    </div>
</li>
<li class="menu_lv1" id="menu_hangmuc">
    <b>
        Hạng mục điều trị
        <img src="http://trihanoi.com/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <div class="menu_content menu_hangmuc_content" style="margin-left: -40%">
        <ul class="menu_content_hangmuc">
            <li>
                <ul>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_tri;?>">Trĩ</a> </li>
                    <li><a href="<?= domain;?>/tri-noi?>">Trĩ nội</a> </li>
                    <li><a href="<?= domain;?>/tri-ngoai">Trĩ ngoại</a> </li>
                    <li><a href="<?= domain;?>/tri-hon-hop">Trĩ hỗn hợp</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_nutkehaumon;?>">Nứt kẽ hậu môn</a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_apxehaumon;?>">Áp xe hậu môn</a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_eczemahaumon;?>">Eczema hậu môn</a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_nguahaumon;?>">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="<?= domain;?>/polyp-truc-trang">Polyp trực tràng </a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_daitienramau;?>">Đại tiện ra máu</a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_rohaumon;?>">Rò hậu môn</a> </li>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_nguahaumon;?>">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="<?= domain;?>/<?= cat_rewrite_taobon;?>">Táo bón</a> </li>
                    <li><a href="<?= domain;?>/dau-hau-mon">Đau hậu môn</a> </li>
                    <li><a href="<?= domain;?>/sa-hau-mon">Sa hậu môn</a> </li>
                    <li><a href="<?= domain;?>/tac-mach-tri">Tắc mạch trĩ</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</li>
<li class="dangky_lv1 menu_lv1" id="menu_dangky">
    <b>
        <div class="clickdangky">
            Đăng ký hẹn khám
            <img src="<?= domain;?>/public/frontend/home/image/ico_muiten.png" alt="home">
        </div>
    </b>
    <div class="menu_content menu_dangky_content" style="margin-left: -60%; display: none;">
        <div class="menu_content_dangkykham">
            <div class="menu_content_dangkykham_tit">
                <p>Chào mừng bạn đến với hệ thống đăng ký khám qua mạng của phòng khám đa khoa Giải Phóng Hà Nội</p>
                <div id="div_menu_dangky_close" style="width: 27px;top: 10px;z-index: 99;float: right;position: absolute;right: 20px;">
                    <img src="<?= domain;?>/public/frontend/home/image/menu/ico_dangky_close.png" height="27px;width:27px;">
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
                        <img src="<?= domain;?>/public/frontend/home/image/menu/ico_dk.png" alt="dang ky">Đăng ký trực tuyến
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
                        <img src="<?= domain;?>/public/frontend/home/image/menu/ico_dt.png" alt="dien thoai">Đăng ký bằng điện thoại
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
                        <img src="<?= domain;?>/public/frontend/home/image/menu/ico_email.png" alt="dien thoai">Đăng ký Email
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
                                    var link_dangky="http://phongkhamgiaiphong.com/dangky.php?"+parameter;
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
                                <button class="btn btn-default" type="button" id="search" style="width: 50px;">Go!</button>
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
            <div class="item active" style="background: #dbdbdb;">
                <img style="height: 560px" src="<?= domain;?>/public/frontend/home/image/banner2.jpg" alt="phong kham giải phóng ">
            </div>

            <div class="item" style="background: #20acbd;">
                <img style="height: 560px;" src="http://trihanoi.com/public/frontend/home/image/slide-0.png" alt="phong kham giải phóng">
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
                    <a href="<?= domain;?>/benh-tri-la-gi">Bệnh trĩ là gì?</a>
                </li>
                <li>
                    <a href="<?= domain;?>/nguyen-nhan-gay-ra-benh-tri">Nguyên nhân gây ra bệnh trĩ?</a>
                </li>
                <li>
                    <a href="<?= domain;?>/trieu-chung-cua-benh-tri">Triệu chứng của bệnh trĩ?</a>
                </li>
                <li>
                    <a href="<?= domain;?>/benh-tri-co-dan-den-ung-thu-khong">Bệnh trĩ có đẫn đến ung thư không?</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/phuong-phap-dieu-tri-benh-tri-khoi">Phương pháp điều trị bệnh trĩ</a>
                </li>
                <li>
                    <a href="<?= domain;?>/chi-phi-chua-benh-tri">Chi phí chữa bệnh trĩ</a>
                </li>
                <li>
                    <a href="<?= domain;?>/thu-thuat-tri-co-dau-khong">Thủ thuật trĩ có đau không</a>
                </li>
                <li>
                    <a href="<?= domain;?>/benh-tri-co-tai-phat-khong">Bệnh trĩ có tái phát không</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/trieu-chung-benh-tri-ngoai">Triệu chứng bệnh trĩ ngoại</a>
                </li>
                <li>
                    <a href="<?= domain;?>/trieu-chung-benh-tri-noi">Triệu chứng bệnh trĩ nội</a>
                </li>
                <li>
                    <a href="<?= domain;?>/tri-giai-doan-dau-dieu-tri-the-nao">Trĩ giai đoạn đầu điều trị thế nào</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/dai-tien-ra-mau-tuoi-la-benh-gi">Đại tiện ra máu là bệnh gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/ra-mau-o-hau-mon-lam-the-nao">Ra máu ở hậu môn làm thế nào</a>
                </li>
                <li>
                    <a href="<?= domain;?>/dai-tien-ra-mau-can-lam-nhung-kiem-tra-gi">Đại tiện ra máu cần làm những kiểm tra gì</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/trieu-chung-dai-tien-ra-mau-gom-nhung-gi">Triệu chứng đại tiện ra máu gồm những gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/dai-tien-ra-mau-la-bi-lam-sao">Đại tiện ra máu là bị làm sao</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/nhung-nguyen-nhan-nao-dan-den-dai-tien-ra-mau">Những nguyên nhân nào dẫn đến đại tiện ra máu</a>
                </li>
                <li>
                    <a href="<?= domain;?>/dai-tien-ra-mau-dieu-tri-nhu-the-nao">Đại tiện ra máu điều trị như thế nào</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/dau-hau-mon-la-gi">Đau hậu môn là gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/ngua-hau-mon-la-gi">Ngứa hậu môn là gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/hau-mon-xuat-hien-bui-thit-la-lam-sao-">Hậu môn xuất hiện búi thịt là làm sao?</a>
                </li>
            </ul>
            <br>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/benh-nut-ke-hau-mon-la-gi">Nứt kẽ hậu môn là gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/dau-hau-mon-sau-khi-di-dai-tien">Đau hậu môn sau khi đi đại tiện</a>
                </li>
            </ul>
            <br>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/nut-ke-hau-mon-do-dau">Nứt kẽ hậu môn do đâu</a>
                </li>
                <li>
                    <a href="<?= domain;?>/di-vat-o-hau-mon-la-benh-gi">Dị vật ở hậu môn là bệnh gì</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="toolbar_content">
        <div class="main_item" style="text-align: center;">
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/ro-hau-mon-la-benh-gi">Rò hậu môn là bệnh gì</a>
                </li>
                <li>
                    <a href="<?= domain;?>/nhung-nguyen-nhan-gay-ro-hau-mon">Nguyên nhân dẫn đến rò hậu môn</a>
                </li>
                <li>
                    <a href="<?= domain;?>/trieu-chung-cua-benh-ro-hau-mon">Triệu chứng của bệnh rò hậu môn</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/benh-ro-hau-mon-va-cach-dieu-tri-hieu-qua">Bệnh rò hậu môn và cách điều trị hiệu quả.</a>
                </li>
                <li>
                    <a href="<?= domain;?>/chi-phi-dieu-tri-benh-ro-hau-mon-het-bao-nhieu-tien">Chi phí chữa rò hậu môn hết bao tiền</a>
                </li>
            </ul>
            <ul class="toolbar_articel">
                <li>
                    <a href="<?= domain;?>/vi-sao-ro-hau-mon-de-tai-phat">Vì sao rò hậu môn dễ tái phát</a>
                </li>
                <li>
                    <a href="<?= domain;?>/dieu-tri-benh-ro-hau-mon-bao-lau-thi-khoi">Điều trị dò hậu môn bao lâu thì khỏi</a>
                </li>
                <li>
                    <a href="<?= domain;?>/phuong-phap-dieu-tri-ro-hau-mon">Phương pháp điều trị rò hậu môn</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main_item">
        <ul class="toolbar_cat">
            <li class="toolbar_item toolbar_tri">
                <a href="/<?= cat_rewrite_tri;?>">
                    <img src="<?= domain;?>/public/frontend/home/image/toolbar_ico_tri.png" alt="Tri">bệnh trĩ
                </a>
            </li>
            <li class="toolbar_item toolbar_dtrm">
                <a href="/<?= cat_rewrite_daitienramau;?>">
                    <img src="<?= domain;?>/public/frontend/home/image/toolbar_ico_dtrm.png" alt="Tri">Đại tiện ra máu
                </a>
            </li>
            <li class="toolbar_item toolbar_tthm">
                <a href="<?= cat_rewrite_chanthuonghaumuon;?>">
                    <img src="<?= domain;?>/public/frontend/home/image/toolbar_ico_tthm.png" alt="Tri">Chấn thương hậu môn
                </a>
            </li>
            <li class="toolbar_item toolbar_vhm">
                <a href="/<?= cat_rewrite_rohaumon;?>">
                    <img src="<?= domain;?>/public/frontend/home/image/toolbar_ico_vhm.png" alt="Tri">Rò hậu môn
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