<!--@section('sidebar')-->
<?php
use Illuminate\Support\Facades\DB;
$Arr = array('cat_parent' => '3', 'cat_status' => 1);
$cat_kehoachhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '12', 'cat_status' => 1);
$cat_cotucung = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '17', 'cat_status' => 1);
$cat_chinhhinhphukhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '22', 'cat_status' => 1);
$cat_viemnhiemphukhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '28', 'cat_status' => 1);
$cat_vosinh = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '33', 'cat_status' => 1);
$cat_noitiettonu = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '38', 'cat_status' => 1);
$cat_benhxahoi = DB::table('categories')->where($Arr)->get();
?>
<header>
    <div class="flex flex1 justify-content-between" style="height: 65px;">
        <div class="flex1col1">
            <h2 class="text-container-center logo">
                <a href="<?= domain;?>"><img src="http://trihanoi.com/public/frontend/home/image/header-1.png" alt=""></a>
            </h2>
        </div>
        <div class="flex1col2">
            <div class="flex flex2 justify-content-between">
                <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="http://trihanoi.com/public/frontend/home/image/header-2.png" alt=""></a></div>
                <div class="flex2col1 text-container-center"><a href="<?= link_tuvan;?>"><img src="http://trihanoi.com/public/frontend/home/image/header-3.png" alt=""></a></div>
                <div class="flex2col1 text-container-center"><a href="<?= link_lotrinhphongkham;?>"><img src="http://trihanoi.com/public/frontend/home/image/header-4.png" alt="phong kham nhan ai"></a></div>
            </div>
        </div>
    </div>
</header>
<!--menu-->
<div class="row home_menu">
<div class="home_main_item">
<ul class="menu">
<li class="menu_lv1">
    <a href="<?= domain;?>" style="padding: 0;">
        <b>
            <img src="http://trihanoi.com/public/frontend/home/image/ico_home.png" alt="home" style="margin-top: -8px;">
            Trang chủ
        </b>
    </a>
</li>
<li class="menu_lv1" id="menu_lienquan">
    <b>
        Liên quan phòng khám
        <img src="http://trihanoi.com/public/frontend/home/image/ico_muiten.png" alt="home">
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
            <li><a href="<?= link_gioithieu;?>"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_gt.png" alt="gioi thieu"><span>Giới thiệu phòng khám</span></a></li>
            <li><a href="<?= link_quytrinhkham;?>"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_qtk.png" alt="quy trình khám">Quy trình khám</a></li>
            <li><a href="<?= link_kythuat;?>" style="letter-spacing: -1px;"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_kt.png" alt="Kỹ thuật">Kỹ thuật chuyên nghiệp</a></li>
            <li><a href="<?= link_thietbi;?>"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_tb.png" alt="Kỹ thuật">Thiết bị hiện đại</a></li>
            <li><a href="<?= link_tuvan;?>"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_tvb.png" alt="Kỹ thuật">Tư vấn bệnh</a></li>
            <li><a href="<?= link_lotrinhphongkham;?>"><img src="http://trihanoi.com/public/frontend/home/image/menu/ico_pk_dc.png" alt="Địa chỉ">Địa chỉ phòng khám</a></li>
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
                    <li><a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a> </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyennhan);?>">Nguyên nhân</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyhai);?>">Nguy hại</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_chiphi);?>">Chi phí</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_trieuchung);?>">Triệu chứng</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_dieutri);?>">Điều trị</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_suimaoga,rewrite_kiemtra);?>">Kiểm tra</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/<?= rewrite_benhlau;?>" style="letter-spacing: -0.5px;">Bệnh Lậu</a> </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_nguyennhan);?>">Nguyên nhân</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_nguyhai);?>">Nguy hại</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_chiphi);?>">Chi phí</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_trieuchung);?>">Triệu chứng</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_dieutri);?>">Điều trị</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_benhlau,rewrite_kiemtra);?>">Kiểm tra</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/<?= rewrite_giangmai;?>">Bệnh giang mai </a> </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_nguyennhan);?>">Nguyên nhân</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_nguyhai);?>">Nguy hại</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_chiphi);?>">Chi phí</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_trieuchung);?>">Triệu chứng</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_dieutri);?>">Điều trị</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_giangmai,rewrite_kiemtra);?>">Kiểm tra</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/<?= rewrite_munropsinhduc;?>" style="letter-spacing: -1px;">Mụn rộp sinh dục</a> </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyennhan);?>">Nguyên nhân</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_nguyhai);?>">Nguy hại</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_chiphi);?>">Chi phí</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_trieuchung);?>">Triệu chứng</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_dieutri);?>">Điều trị</a>
                    </li>
                    <li>
                        <a href="<?= linkto(rewrite_munropsinhduc,rewrite_kiemtra);?>">Kiểm tra</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</li>
<li class="dangky_lv1 menu_lv1" id="menu_dangky">
    <b>
        <div class="clickdangky">
            Đăng ký hẹn khám
            <img src="http://trihanoi.com/public/frontend/home/image/ico_muiten.png" alt="home">
        </div>
    </b>
    <div class="menu_content menu_dangky_content" style="margin-left: -60%; display: none;">
        <div class="menu_content_dangkykham">
            <div class="menu_content_dangkykham_tit">
                <p>Chào mừng bạn đến với hệ thống đăng ký khám qua mạng của phòng khám đa khoa Giải Phóng Hà Nội</p>
                <div id="div_menu_dangky_close" style="width: 27px;top: 10px;z-index: 99;float: right;position: absolute;right: 20px;">
                    <img src="http://trihanoi.com/public/frontend/home/image/menu/ico_dangky_close.png" height="27px;width:27px;">
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $("#div_menu_dangky_close").click(function(){
                        $(".menu_dangky_content").css("display","none");
                    })
                })
                $(document).ready(function(){
                    $(".clickdangky").click(function(){
                        $(".menu_dangky_content").toggle();
                    });
                })
            </script>
            <ul class="menu_content_dangkykham_info">
                <li class="dangkytructuyen">
                    <div class="dangkykham_info_tit">
                        <img src="http://trihanoi.com/public/frontend/home/image/menu/ico_dk.png" alt="dang ky">Đăng ký trực tuyến
                    </div>
                    <div class="dangkykham_info_c">
                        <p><a href="<?= link_tuvan;?>">Đăng ký trực tuyến</a> </p><br>
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
                        <img src="http://trihanoi.com/public/frontend/home/image/menu/ico_dt.png" alt="dien thoai">Đăng ký bằng điện thoại
                    </div>
                    <div class="dangkykham_info_c">
                        <p>Số điện thoại</p>
                        <p><b><?= phone1;?></b></p>
                        <p><b><?= phone2;?></b></p>
                        <p><b></b></p>
                    </div>
                    <div class="dangkykham_info_des">
                        <p>chỉ cần gọi điện là có thể hẹn khám các khoa</p>
                    </div>
                </li>
                <li class="dangky">
                    <div class="dangkykham_info_tit">
                        <img src="http://trihanoi.com/public/frontend/home/image/menu/ico_email.png" alt="dien thoai">Đăng ký Email
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
                                        <option value="Sùi mào gà">Sùi mào gà</option>
                                        <option value="Bệnh lẩu">Bệnh lẩu</option>
                                        <option value="Bệnh giang mai">Bệnh giang mai</option>
                                        <option value="Mụn rộp sinh dục">Mụn rộp sinh dục</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Thời gian</div>
                                <div class="col-sm-8"><input type="text" id="thoigian" name="thoigian"></div>
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
                </li>
            </ul>
        </div>
    </div>
</li>
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

<li>
    <div class="input-group">
        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="search" style="width: 50px;">Go!</button>
                            </span>
    </div>
</li>
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
</ul>
</div>
</div>