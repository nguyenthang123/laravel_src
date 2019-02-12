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
<div class="row" style="margin: 20px auto;">
    <div class="main_item" style="width: 1000px; height: 70px; background: url('/public/frontend/img/home/logo_top.png') top center no-repeat;background-size: contain;">
        <a href="<?= domain;?>" style="display: block;width: 320px;height: 70px;cursor: pointer;float: left"></a>
        <a href="<?= link_tuvan;?>" style="display: block;width: 175px;height: 70px;cursor: pointer;float: right;"></a>
    </div>
</div>
<!--menu-->
<script>
    $(document).ready(function(){
        $(".hangmuc").hover(function () {
            $(".menu_ul2_hangmuc").slideDown(300);
            $(this).css("z-index", "1500");
        }, function () {
            $(".menu_ul2_hangmuc").slideUp(300);
            $(this).css("z-index", "1");
        });
    })
</script>
<style>
    .slick-slide{
        height: 110px;
        width: 180px;
        margin: 0 4px;
        overflow: hidden;
    }
    .slide2 a{
        height: 100px!important;
    }
</style>
<div class="row">
<div class="wap">
<div id="menu">
<ul class="menu_ul1">
<li class="menu_ul1_li hangmuc"><div style="font-size: 16px;">Hạng mục điều trị</div>
    <ul class="menu_ul2 menu_ul2_hangmuc" style="display: none">
        <li class="menu_ul2_li hover"><div class="menu_ul2_li_tit li_suimaoga"><a href="/<?= rewrite_suimaoga;?>">Sùi mào gà</a> </div>
            <div class="menu_ul2_li_div">
                <div class="menu_ul2_li_div_c">
                    <div class="menu_ul2_li_div_c_divtit">Sùi mào gà</div>
                    <div class="menu_ul2_li_div_c_divcate">
                        <ul>
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
                    </div>
                    <div class="menu_ul2_li_div_c_divcd">
                        <p><a href="">Chuyên đề sùi mào gà</a></p>
                        <div class="center slide2">
                            <?php foreach(cd_suimaoga() as $val){?>
                                <div>
                                    <a href="<?= $val['link'];?>"><img src="<?= $val['img'];?>"></a>
                                </div>
                            <?php }?>
                            <!--<div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/1.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/2.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/1.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/2.jpg"></a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="menu_ul2_li_div_img">
                    <img src="http://phongkhambenhxahoi.vn/public/frontend/img/menu/img_suimaoga.jpg" alt="sui mao ga">
                </div>
            </div>
        </li>
        <li class="menu_ul2_li"><div class="menu_ul2_li_tit li_lau"><a href="/<?= rewrite_benhlau;?>">Bệnh lậu</a> </div>
            <div class="menu_ul2_li_div">
                <div class="menu_ul2_li_div_c">
                    <div class="menu_ul2_li_div_c_divtit">Bệnh lậu</div>
                    <div class="menu_ul2_li_div_c_divcate">
                        <ul>
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
                    </div>
                    <div class="menu_ul2_li_div_c_divcd">
                        <p><a href="">Chuyên đề bệnh lậu</a></p>
                        <div class="center slide2">
                        </div>
                    </div>
                </div>
                <div class="menu_ul2_li_div_img">
                    <img src="http://phongkhambenhxahoi.vn/public/frontend/img/menu/img_lau.jpg" alt="benh lau">
                </div>
            </div>
        </li>
        <li class="menu_ul2_li"><div class="menu_ul2_li_tit li_giangmai"><a href="/<?= rewrite_giangmai;?>">Bệnh giang mai</a></div>
            <div class="menu_ul2_li_div">
                <div class="menu_ul2_li_div_c">
                    <div class="menu_ul2_li_div_c_divtit">Bệnh giang mai</div>
                    <div class="menu_ul2_li_div_c_divcate">
                        <ul>
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
                    </div>
                    <div class="menu_ul2_li_div_c_divcd">
                        <p><a href="">Chuyên đề bệnh giang mai</a></p>
                        <div class="center slide2">
                        </div>
                    </div>
                </div>
                <div class="menu_ul2_li_div_img">
                    <img src="http://phongkhambenhxahoi.vn/public/frontend/img/menu/img_giangmai.jpg" alt="benh giang mai">
                </div>
            </div>
        </li>
        <li class="menu_ul2_li"><div class="menu_ul2_li_tit li_munropsinhduc" style="border-bottom: none;"><a href="/<?= rewrite_munropsinhduc;?>">Mụn rộp sinh dục</a></div>
            <div class="menu_ul2_li_div">
                <div class="menu_ul2_li_div_c">
                    <div class="menu_ul2_li_div_c_divtit">Mụn rộp sinh dục</div>
                    <div class="menu_ul2_li_div_c_divcate">
                        <ul>
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
                    </div>
                    <div class="menu_ul2_li_div_c_divcd">
                        <p><a href="">Chuyên đề mụn rộp sinh dục</a></p>
                        <div class="center slide2">
                            <!--<div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/1.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/2.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/1.jpg"></a>
                            </div>
                            <div>
                                <a href="#"><img src="http://www.masterslider.com/features/templates/ms/staffcarousel/2.jpg"></a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="menu_ul2_li_div_img">
                    <img src="http://phongkhambenhxahoi.vn/public/frontend/img/menu/img_munropsinhduc.jpg" alt="mụn rộp sinh dục">
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="menu_ul1_li">
    <a href="<?= domain;?>">
        <span class="men">Trang chủ<br>Phòng khám</span>
        <span class="men_over">Trang chủ<br>Phòng khám</span>
    </a>
</li>
<li class="menu_ul1_li">
    <a href="<?= link_gioithieu;?>">
        <span class="men">Giới thiệu<br>Phòng khám</span>
        <span class="men_over">Giới thiệu<br>Phòng khám</span>
    </a>
</li>
<li class="menu_ul1_li">
    <a href="<?= link_kythuat;?>">
        <span class="men">Kỹ thuật<br>Hiện đại</span>
        <span class="men_over">Kỹ thuật<br>Hiện đại</span>
    </a>
</li>
<li class="menu_ul1_li">
    <a href="<?= link_thietbi;?>">
        <span class="men">Thiết bị<br>Tiên tiến</span>
        <span class="men_over">Thiết bị<br>Tiên tiến</span>
    </a>
</li>
<li class="menu_ul1_li">
    <a href="<?= link_lotrinhphongkham;?>">
        <span class="men">Địa chỉ<br>Phòng khám</span>
        <span class="men_over">Địa chỉ<br>Phòng khám</span>
    </a>
</li>
<li class="menu_ul1_li clickdangky" style="color: #ffffff;font-weight: bold;cursor: pointer;height: 65px;padding-top: 15px;">
    Đăng ký<br>Trực tuyến
</li>
</ul>
<script src="http://phongkhambenhxahoi.vn/public/frontend/js/menu.js"></script>
<script src="http://phongkhambenhxahoi.vn/public/frontend/slick/slick.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".slide2").slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            infinite: true,
            variableWidth: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
</div>
</div>
<div class="bg_div_menu_dangky" style="display: none">
    <div class="div_menu_dangky">
        <div id="div_menu_dangky_close" style="width: 27px;top: -11px;z-index: 99;float: right;">
            <img src="http://trihanoi.com/public/frontend/home/image/menu/ico_dangky_close.png" height="27px;width:27px;">
        </div>
        <script>
            $(document).ready(function(){
                $('#div_menu_dangky_close').click(function(){
                    $('.bg_div_menu_dangky').css("display","none");
                })
            })
        </script>
        <div class="clear2"></div>
        <div class="row" style="text-align: center">
            <label>Chào mừng bạn đến với hệ thống đăng ký khám qua mạng của phòng khám đa khoa Giải Phóng Hà Nội</label>
        </div>
        <div class="menudangky_kengang"></div>
        <div class="clear"></div>
        <div class="row menudangky_dm">
            <div class="col-sm-4">
                <p class="dm_menudangky_title"><img src="http://trihanoi.com/public/frontend/img/menu/ico_dktt.png">Đăng
                    ký trực tuyến</p>

                <div class="menudangky_dm_ct">
                    <a href="<?php echo link_tuvan; ?>" class="btn btn-dangky" style="color: #7260ac!important;">Click
                        đăng ký</a>

                    <div class="clear"></div>
                    <p>thời gian làm việc:</p>
                    <b>8h - 20h</b>
                </div>
                <p class="menudangky_dm_luuy"><img src="http://trihanoi.com/public/frontend/img/menu/saodo.png">
                    liên hệ trực tuyến với các bác sỹ, lựa chọn hạng mục chẩn trị, thời gian và thông tin cá nhân để
                    đăng ký thành công
                </p>
            </div>
            <div class="col-sm-4">
                <p class="dm_menudangky_title"><img src="http://trihanoi.com/public/frontend/img/menu/ico_dkdt.png">Đăng
                    ký bằng điện thoại</p>

                <div class="menudangky_dm_ct menudangky_dm_ct2">
                    <p>Số điện thoại:</p>
                    <b><?= phone1;?></b><br>
                    <b><?= phone2;?></b><br>
                    <b><?= phone3;?></b>
                </div>
                <p class="menudangky_dm_luuy"><img src="http://trihanoi.com/public/frontend/img/menu/saodo.png">chỉ
                    cần gọi điện là có thể hẹn khám các khoa
                </p>
            </div>
            <div class="col-sm-4" style="text-align: left">
                <p class="dm_menudangky_title" style="text-align: left;"><img
                        src="http://trihanoi.com/public/frontend/img/menu/ico_dkemail.png">Đăng ký qua
                    Email</p>

                <div class="menudangky_dm_ct menudangky_dm_c3">
                    <form name="frmdangky" id="frmdangky" method="post" target="_self">
                        <input name="_token" hidden value="{!! csrf_token() !!}"/>
                        <div class="row">
                            <div class="col-sm-3 label3">Họ tên:</div>
                            <div class="col-sm-8 input9" style="color: #000000;"><input type="text" name="hoten"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 label3">Điện thoại:</div>
                            <div class="col-sm-8 input9" style="color: #000000;"><input type="text" name="dienthoai">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 label3">Bệnh:</div>
                            <div class="col-sm-8 input9" style="color: #000000;">
                                <select name="khoakham">
                                    <option value="Sùi mào gà">Sùi mào gà</option>
                                    <option value="Bệnh lậu">Bệnh lậu</option>
                                    <option value="Bệnh giang mai">Bệnh giang mai</option>
                                    <option value="Mụn rộp sinh dục">Mụn rộp sinh dục</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 label3">Thời gian:</div>
                            <div class="col-sm-8 input9" style="color: #000000;">
                                <input type="text" name="thoigian" id="thoigian">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 label3"></div>
                            <div class="col-sm-8 input9">
                                <input type="submit" class="btn-success" name="dangky" id="dangky"
                                       value="Đăng ký trực tuyến">
                            </div>
                        </div>
                        <!--<div id="ajaxview"></div>-->
                        <blink id="ajaxview" class="blink"
                               style="color: #ff0000;font-size: 13px;font-weight: bold;"></blink>
                    </form>
                    <script>
                        $(function () {
                            $("#thoigian").datepicker({dateFormat: "yy-mm-dd"});
                        });
                        blink('blink');
                        /*$(document).ready(function (e) {
                            $('#frmdangky').on('submit', (function (e) {
                                e.preventDefault();
                                var formData = new FormData(this);
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo domain;?>/ajaxs/dangky",
                                    beforeSend: function (xhr) {
                                        var token = $('input[name="_token"]').attr('value');
                                        if (token) {
                                            xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                            xhr.setRequestHeader('X-XSRF-Token', token);
                                        }
                                    },
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function (data) {
                                        if (data == "ok") {
                                            alert('Bạn đã đăng ký thành công.');
                                            window.location.href = "<?php domain;?>";
                                        }
                                        $("#ajaxview").html(data);
                                    }
                                });
                            }));
                            $("#dangky").on("click", function () {
                                $("#frmdangky").submit();
                            });
                        });*/
                    </script>
                    <?php if(isset($_POST['dangky'])){
                        $hoten = $_POST['hoten'];
                        $dienthoai = $_POST['dienthoai'];
                        $khoakham=$_POST['khoakham'];
                        $thoigian=$_POST['thoigian'];
                        if(empty($dienthoai) && empty($hoten)){
                            echo '<script>alert("Họ tên và số điện thoại không được để trống!");</script>';
                        }else{
                            //check dang ky
                            $_SESSION['dadangky']='1';
                            $uri='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            $link=link_dangkykham().'data=';
                            $data=array(
                                'uri'=>$uri,
                                'hoten'=>$hoten,
                                'dienthoai'=>$dienthoai,
                                'khoakham'=>$khoakham,
                                'thoigian'=>$thoigian,
                            );
                            $json=json_encode($data);
                            $str_en=base64_encode($json);
                            $link=$link.$str_en;
                            echo "<script>window.location.href='".$link."';</script>";
                            exit;
                        }
                    }
                    ?>
                </div>
                <p class="menudangky_dm_luuy"><img src="http://trihanoi.com/public/frontend/home/image/menu/saodo.png">
                    sau khi điền đầy đủ thông tin, nhân viên sẽ gọi điện lại xác nhận thông tin của bạn
                </p>
            </div>
        </div>
    </div>
</div>
</div>
