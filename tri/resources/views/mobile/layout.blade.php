<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('title') @show()</title>
    <meta name="keywords" content="kham nam khoa 168, phong kham 168,phong kham da khoa 168">
    <meta name="description" content="phong kham da khoa 168 ha noi chuyen dieu tri nam khoa">
    <meta property="og:url" itemprop="url" content="http://m.trihanoi.com/" />
    <link rel="stylesheet" href="http://trihanoi.com/public/mobile/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://trihanoi.com/public/mobile/css/style.css">
    <link rel="stylesheet" href="http://trihanoi.com/public/mobile/css/custorm.css">
    <link rel="stylesheet" href="http://trihanoi.com/public/mobile/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://trihanoi.com/public/mobile/bootstrap/js/bootstrap.min.js"></script>
    <?= ico_shortcut;?>
    <base target="_blank">
</head>
<?php
use Illuminate\Support\Facades\DB;
DB::setFetchMode(\PDO::FETCH_ASSOC);
$arr=array(33,34,35,36,37,38,42,43,44);
$W_arr=array('status_cat'=>'1');
$menu=DB::table('cat')->where($W_arr)->whereIn('id',$arr)->orderBy('id', 'asc')->get();
$menu=(array)$menu;
foreach($menu as $key=>$val){
    $W_arr=array('status_cat'=>'1','parent_id'=>$val['id']);
    $menu[$key]['lv2']=DB::table('cat')->where($W_arr)->orderBy('id', 'asc')->get();
}
?>
<body>
<?= m_popup();?>
<div class="container">
<div class="main_header">
    <div class="col-xs-12">
        <div class="header_left">
            <div class="click_menu">
                <i class="ico_menu"></i>
                <i class="ico_menu"></i>
                <i class="ico_menu"></i>
            </div>
        </div>
        <div class="header_content">
            <h1 class="h1">Phòng khám đa khoa chuyên nghiệp Hà Nội</h1>
        </div>
    </div>
</div>
<div class="menu_main" style="display: none;">
    <div class="menu_main_left">
        <img src="<?= fixk;?>/public/mobile/menu_images/bg_lv1.png" style="width: 100%;float: left">
        <ul class="lv1">
            <li id="menu_lv1_item1" class="menu_lv1_gioithieu active">
                <div class="menu_lv1_img">
                </div>
                <p>Giới thiệu</p>
            </li>
            <li id="menu_lv1_item2" class="menu_lv1_benhtinh">
                <div class="menu_lv1_img">
                </div>
                <p>Bệnh tình</p>
            </li>
            <li id="menu_lv1_item3" class="menu_lv1_hoatdong">
                <a href="<?= link_mobile_cdsuckhoe;?>">
                    <div class="menu_lv1_img"></div>
                    <p>Hoạt động</p>
                </a>
            </li>
            <li id="menu_lv1_item4" class="menu_lv1_diachi">
                <a href="<?= link_mobile_diachi;?>">
                    <div class="menu_lv1_img"></div>
                    <p>Địa chỉ</p>
                </a>
            </li>
            <li id="menu_lv1_item5" class="menu_lv1_thoigian">
                <div class="menu_lv1_img"></div>
                <p>Thời gian<br>Khám bệnh</p>
            </li>
        </ul>
    </div>
    <div class="menu_sub content_menu_lv1_item1 active">
        <ul class="lv2">
            <li>
                <a href="<?= link_mobile_gioithieu;?>">
                    <div class="lv2_conten">
                        <strong class="daucham"></strong>Giới thiệu phòng khám
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= link_mobile_diachi;?>">
                    <div class="lv2_conten">
                        <strong class="daucham"></strong>Lộ trình khám
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= link_kythuat;?>">
                    <div class="lv2_conten">
                        <strong class="daucham"></strong>Kỹ thuật tiên tiến
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= link_thietbi;?>">
                    <div class="lv2_conten">
                        <strong class="daucham"></strong>Thiết bị hiện đại
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= link_tuvan;?>">
                    <div class="lv2_conten">
                        <strong class="daucham"></strong>Tư vấn trực tuyến
                    </div>
                </a>
            </li>
        </ul>
        <div class="img">
            <img src="<?= fixk;?>/public/mobile/menu_images/img_gioithieu.png" alt="gioi thieu">
        </div>
    </div>
    <div class="menu_sub content_menu_lv1_item2">
        <ul class="lv2">
            <?php foreach($menu as $key=>$val){?>
                <li>
                    <div class="lv2_conten">
                        <a href="/<?= $val['cat_alias'];?>"><strong class="daucham"></strong><?= $val['name'];?></a>
                        <?php if(!empty($menu[$key]['lv2'])){?>
                        <span class="show_menu_lv3 menu_lv2_item2_<?= $key;?>" id="menu_lv2_item2_<?= $key;?>"></span>
                        <?php }?>
                    </div>
                    <?php if(!empty($menu[$key]['lv2'])){?>
                        <div class="menu_lv3 content_menu_lv2_item2_<?= $key;?>">
                            <ul class="lv3">
                                <?php foreach($menu[$key]['lv2'] as $key2=>$val2){?>
                                    <li><a href="/<?= $val2['cat_alias'];?>"><?= $val2['name'];?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                    <?php }?>
                </li>
            <?php }?>
            <li>
                <a href="<?= link_tuvan;?>">
                    <div class="lv2_conten"><strong class="daucham"></strong>Các bệnh khác</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="menu_sub content_menu_lv1_item5">
        <div class="lv2_thoigian">
            <div class="lv2_conten">
                <p><i><strong class="daucham" style="margin-top: 0.5rem"></strong>Để phục vụ tốt hơn cho việc khám chữa bệnh của đông đảo bệnh nhân, phòng khám Giải Phóng mở dịch vụ khám chữa bệnh buổi tối, thời gian khám bệnh kéo dài đến 20h hằng ngày.</i></p>
                <p><strong class="daucham" style="margin-top: 0.5rem"></strong><b>Thời gian khám bệnh</b><br><b>7:30 - 20:00 </b><i> (không nghỉ lễ)</i></p>
                <p><i><strong class="daucham" style="margin-top: 0.5rem"></strong>Cảm ơn sự tin tưởng của bạn đối với phòng khám, 168 đồng hành cùng sức khỏe của bạn.</i></p>
            </div>
        </div>
    </div>
</div>
    <?= m_Addtop();?>
<div class="clear" style="float: left"></div>
<script>
    $('#search').click(function(){
        var txt=$('#txtsearch').val();
        if(txt==''){
            alert('Từ khóa không được để trống.');
        }else{
            window.location = "/search/"+txt;
        }
    });
</script>
<script>
    $(document).ready(function(){
        $("#topcontrol").click(function(){
            $('html,body').animate({scrollTop:0},'slow')});
    })
</script>    <div class="clear" style="float: left"></div>
@yield('content')
<div class="clear2"></div>
<div class="main_item menu_f">
    <div class="menu_f_item"><a href="<?= link_mobile_gioithieu;?>">Giới thiệu<br>phòng khám</a> </div>
    <div class="menu_f_item"><a href="<?= link_tuvan;?>">Tư vấn<br>trực tuyến</a> </div>
    <div class="menu_f_item"><a href="<?= link_mobile_diachi;?>">Tuyến đường<br>phòng khám</a></div>
    <div class="menu_f_item"><a href="<?= domain;?>">Quay lại<br>đầu trang</a></div>
</div>
<div class="info">
    <p>Thời gian phòng khám làm việc: 8h:00 sáng - 20:00 tối ( không nghỉ lễ)</p>
    <p><img src="<?= fixk;?>/public/mobile/imgs/ico_f_diachi.png" alt="dia chi"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</p>
    <p><img src="<?= fixk;?>/public/mobile/imgs/ico_f_dienthoai.png" alt="dien thoai"> <?= phone1;?> – <?= phone2;?></p>
    <p>Sở hữu bản quyền: phòng khám đa khoa Giải Phóng Hà Nội</p>
</div>
<div class="footer" style="position: fixed;bottom: 0px;float: left">
    <div class="footer_item">
        <a href="<?= domain;?>">
            <img src="http://khamnamkhoahanoi.vn/public/mobile/imgs/ico_footer_home.png" alt="trang chủ">
            <p>Trở về<br>Trang chủ</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_tuvan;?>">
            <img src="http://khamnamkhoahanoi.vn/public/mobile/imgs/ico_footer_tv.png" alt="tư vấn">
            <p>Tư vấn<br>trực tuyến</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= rewrite_number_phone(phone1);?>">
            <img src="http://trihanoi.com/public/mobile/imgs/img_footer_dt.png" alt="dien thoai">
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_tuvan;?>">
            <img src="http://trihanoi.com/public/mobile/imgs/ico_footer_dk.png" alt="dang ky">
            <p>Đăng ký<br>qua mạng</p>
        </a>
    </div>
    <div class="footer_item">
        <a href="<?= link_mobile_diachi;?>">
            <img src="http://trihanoi.com/public/mobile/imgs/ico_footer_dc.png" alt="tuyen duong">
            <p>Tuyến đường</p>
        </a>
    </div>
</div>
</div>
<script src="http://trihanoi.com/public/mobile/js/menu.js"></script>
<script src="http://phongkhamgiaiphong.com/tri/public/frontend/js/rewrite_domain_tags.js"></script>
</body>
</html>