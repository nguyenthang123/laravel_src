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
<?= popup();?>
<!--menu-->
<div class="row" id="nav">
    <div class="main_item logo_menu">
        <div class="logo" style="width:350px;">
            <a href="<?= link_tuvan;?>"><img src="/public/frontend/img/home/logo.png" alt="namkhoanhanai.com"></a>
        </div>
        <div class="nav_list">
            <div class="nav_list_bg" style="opacity: 0; left: 0px;"><span style="display: none;"></span></div>
            <ul class="bg">
                <li class="f"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="txt">
                <li class="f">
                    <a href="<?= domain;?>"><div class="box"><p>trang chủ</p></div></a>
                </li>
                <li class="">
                    <a href="<?= link_gioithieu;?>"><div class="box"><p>giới thiệu</p></div></a>
                </li>
                <li class="">
                    <a href="<?= link_kythuat;?>"><div class="box"><p>kỹ thuật</p></div></a>
                </li>
                <li class="">
                    <a href="<?= link_thietbi;?>"><div class="box"><p>Thiết bị</p></div></a>
                </li>
                <li >
                    <a href="<?= link_diachi;?>"><div class="box"><p>địa chỉ</p></div></a>
                </li>
                <li class="last">
                    <a class="clickdangky" style="cursor: pointer"><div class="box"><p>đăng ký</p></div></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="bg_div_menu_dangky" style="display: none">
    <div class="div_menu_dangky">
        <div id="div_menu_dangky_close" style="width: 27px;top: -11px;z-index: 99;float: right;">
            <img src="http://phongkhambenhxahoi.vn/public/frontend/images/ico_dangky_close.png" height="27px;width:27px;">
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
                                    <option value="Yếu sinh lý">Yếu sinh lý</option>
                                    <option value="Chỉnh hình cơ quan sinh dục">Chỉnh hình cơ quan sinh dục</option>
                                    <option value="Bệnh tiền liệt tuyến">Bệnh tiền liệt tuyến</option>
                                    <option value="Viêm nhiễm đường tiết niệu">Viêm nhiễm đường tiết niệu</option>
                                    <option value="Vô sinh nam">Vô sinh nam</option>
                                    <option value="Viêm nhiễm cơ quan sinh dục">Viêm nhiễm cơ quan sinh dục</option>
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
                                <input type="button" class="btn-success" name="dangky" id="dangky"
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
                        $(document).ready(function (e) {
                            /*$('#frmdangky').on('submit', (function (e) {
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
                                            alert('Bạn đã đăng ký thành công.')
                                            window.location.href = "<?php domain;?>";
                                        }
                                        $("#ajaxview").html(data);
                                    }
                                });
                            }));*/
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
                                    var Arr={
                                        hoten:hoten,
                                        dienthoai:dienthoai,
                                        khoakham:khoakham,
                                        thoigian:thoigian,
                                        uri:url
                                    };
                                    var Jsonstr = JSON.stringify(Arr);
                                    //var data=btoa(Jsonstr);
                                    var data=btoa(unescape(encodeURIComponent(Jsonstr)))
                                    var link_dangky="<?= link_dangkykham();?>data="+data;
                                    window.location.href= link_dangky;
                                    return false;
                                }
                            });
                        });
                    </script>
                </div>
                <p class="menudangky_dm_luuy"><img src="http://trihanoi.com/public/frontend/img/menu/saodo.png">
                    sau khi điền đầy đủ thông tin, nhân viên sẽ gọi điện lại xác nhận thông tin của bạn
                </p>
            </div>
        </div>
    </div>
</div>