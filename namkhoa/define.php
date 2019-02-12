<?php
define("Namespace_Backend", "Admin");
define("namespace_Backend", "admin");
define('dir_root',getcwd());
define('Host','localhost');
define('Name_db','pkgpc_nk0609');
define('User_db','pkgpc_nk0609');
//define('User_db','pkgpc_nk0722');
define('Pass_db','12345678');
define('showQuery','0');
define("showerr", "abc@");
//define("phone1", '0432.969.666');
define("phone1", '1900.2622');
define("phone2", "0166.352.8899");
define("phone3", '');
define('domain','http://'.$_SERVER['SERVER_NAME'].'/namkhoa');
define('domain1',$_SERVER['SERVER_NAME']);
define('fixk','/namkhoa');
define('uri','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define('link_tuvan','http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en');
/*define("link_gioithieu", "/cd6/gioi-thieu/");*/
define("link_gioithieu", "http://khamnamkhoahanoi.vn/gioi-thieu-phong-kham-da-khoa-giai-phong-ha-noi");
define("link_tintuc", "/tin-tuc");
define("link_kythuat", "/ky-thuat");
define("link_thietbi", "/thiet-bi");
define("link_lienhe", "/dia-chi-phong-kham-da-khoa-giai-phong-ha-noi");
define("link_dieutrithanhcong", "/dieu-tri-thanh-cong");
define("link_hoatdonguudai", "/hoat-dong-uu-dai");
define("link_skype", 'skype:phongkhamdakhoagiaiphong@gmail.com?chat');
define("link_facebook", 'https://www.facebook.com/phongkhamdakhoagiaiphong/');
define("link_diachi", '/lo-trinh-den-phong-kham');
define("link_quytrinhphongkham", '/cd6/quy-trinh-kham');
define("link_lotrinhphongkham", '/lo-trinh-den-phong-kham');
define("cat_rewrite_yeusinhly", 'yeu-sinh-ly');
define("cat_rewrite_chinhhinh", 'chinh-hinh-co-quan-sinh-duc');
define("cat_rewrite_nhiemtrung", 'nhiem-trung-duong-tiet-nieu');
define("cat_rewrite_tienliettuyen", 'benh-tien-liet-tuyen');
define("cat_rewrite_vosinh", 'vo-sinh-nam');
define("cat_rewrite_viemnhiem", 'viem-nhiem-co-quan-sinh-duc');
define("cat_rewrite_catbaoquydau", 'cat-bao-quy-dau');
define("cat_rewrite_benhlykhac", link_tuvan);

define("link_mobile_diachi", '/mobile/cd6/lo-trinh-kham');
define("link_mobile_gioithieu", '/mobile/cd6/gioi-thieu');
define("link_mobile_cdsuckhoe", '/mobile/cdsuckhoe/chuyen-de-suc-khoe');
define("ico_shortcut", '<link rel="shortcut icon" type="image/x-icon" href="http://trihanoi.com/public/frontend/home/image/logo.png" />');
function dangkysdt(){
    $str='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/dkdt.js"></script>';
    $str2='<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 857483198;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/857483198/?guid=ON&amp;script=0"/>
</div>
</noscript>';
    //return $str;
}
function link_dangkykham(){
    $str='http://phongkhamgiaiphong.com/dangky.php?';
    return $str;
}
/*PHAN MOBILE*/
require_once ('Mobile_Detect.php');
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
function getIPs($ip=null){
    if(!empty($ip)) return array($ip);
    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        $client_ip = $_SERVER["HTTP_CLIENT_IP"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $client_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED"])) {
        $client_ip = $_SERVER["HTTP_X_FORWARDED"];
    } else if (isset($_SERVER["HTTP_X_CLUSTER_CLIENT_IP"])) {
        $client_ip = $_SERVER["HTTP_X_CLUSTER_CLIENT_IP"];
    } else if (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        $client_ip = $_SERVER["HTTP_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_FORWARDED"])) {
        $client_ip = $_SERVER["HTTP_FORWARDED"];
    } else {
        $client_ip = $_SERVER["REMOTE_ADDR"];
    }
    $client_ipz = explode(',', $client_ip);
    //$client_ip = array();
    for ($i = 0, $size_i = count($client_ipz); $i < $size_i; $i++) {
        $client_ipz[$i] = trim($client_ipz[$i]);
        if ($client_ipz[$i] != '') {
            //$client_ip[] = $client_ipz[$i];
            $client_ip=$client_ipz[$i];
        }else{
            $client_ip='UNKNOWN';
        }
    }
    return $client_ip;
}
if($deviceType=='computer'){
    define("deciceType", $deviceType);
}else{
    define("deciceType", 'phone');
}
define("baiviet_gioithieu", "/gioi-thieu-phong-kham-da-khoa-giai-phong-ha-noi");
/*END PHAN MOBILE*/
function manage($link){
    if(empty($_SESSION['adm_id'])){
        echo '<script type="text/javascript">alert("Bạn không có quyền truy cập vào đây."); </script>';
        echo '<script type="text/javascript">window.location.href="'.$link.'"; </script>';
        exit;
    }
}
function refresh(){
    echo '<script type="text/javascript">window.location.href=(document.URL); </script>';
}
function seo($title=null,$keywords=null,$description=null){
    if(empty($title)){
        $title='phòng khám nam khoa chuyên nghiệp chăm sóc sức khỏe nam giới';
    }
    if(empty($keywords)){
        $keywords='kham nam khoa giai phong, phong kham giai phong,phong kham da khoa giai phong';
    }
    if(empty($description)){
        $description='phong kham da khoa giai phong ha noi chuyen dieu tri nam khoa';
    }
    $arr=array('title'=>$title,'keywords'=>$keywords,'description'=>$description);
    return $arr;
}
function substr_font($str,$number){
    if(strlen($str) < $number)
    {
        return $str;
}
    else {
        $str=strip_tags($str);
        $str =substr($str,0,$number);
        $count_vitri=strrpos($str,' ');
        $str =substr($str,0,$count_vitri).'...';
        return $str;
    }
}
function bl_thoigianbinhluan($time){
    $str_now=strtotime('now');
    $str_time=strtotime($time);
    $sub_time=$str_now-$str_time;
    $phut=ceil($sub_time/60);
    if($phut<60){
        return $phut.' phút ';
    }else{
        $gio=floor($phut/60);
        if($gio<24){
            return $gio.' giờ ';
        }else{
            $ngay=floor($gio/24);
            if($ngay<30){
                return $ngay.' ngày ';
            }else{
                $thang=floor($ngay/30);
                return $thang.' tháng ';
            }
        }
    }
}
function date_from_data($date=null){
    if(!empty($date)){
        $str=strtotime($date);
        $date=date('d-m-Y',$str);
    }else{
        $date=date('d-m-Y',strtotime('now'));
    }
    return $date;
}
function cdtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/addtop.js"></script>';
    return $str;
}
function Addtop($cate=null){
    $str2='</div><script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
                $(".s-hide").slideUp(2000); }
            ,15000);
    	$( "#banner-close" ).click(function() {
			$(".banner-son").hide();
		});
	});
    </script>';
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/funs.js"></script>';
    $str=$str.$str2;
    return $str;
}
function popup(){
    $str3='
<script>
    $(document).ready(function(){
        $("#popup2").hide().delay(40000).fadeIn(2000);
        var h=window.innerHeight;
        var w=window.innerWidth;
        $("#popup2").css({"position":"fixed","top":h/2 - 165,"left":w/2 - 200});
        $(".popup_close").click(function () {
            $("#popup2").hide().delay(60000).fadeIn(2000);
        });
    })
</script>
<div id="popup2" style="z-index: 9999;display:none;position;position: fixed;">
    <div class="popup_close" style="width: 30px;position: absolute;top: -15px;left: 384px;z-index: 99;">
        <img src="http://trihanoi.com/public/frontend/images/Addleft/close.png" height="30px">
    </div>
    <img src="http://trihanoi.com/public/popup.gif">
    <div class="popup_close" style="width: 107px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 161px;cursor: pointer;"></div>
    <a href="'.link_tuvan.'">
    <div style="width: 108px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 276px;"></div>
    </a>
</div>';
    return $str3;
}
function Addleft(){
    $str='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/funs.js"></script>';
    $str2='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/left_right.js"></script>';
    return $str.$str2;
}
function line_chat(){
    $str='<script language="javascript" src="http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&#038;lng=en&#038;ver=4.7.3"></script>';
    return $str;
}
function sidebar_duongdaynong(){
    $str='<div class="left">
                <dl>
                    <dd><a href="'.link_tuvan.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/tien-liet-tuyen/ico_tvtt.png"></div><p>tư vấn<br> trực tuyến</p></a></dd>
                    <dd><a href="'.link_skype.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/tien-liet-tuyen/ico_skype.png"></div><p>skype</p></a></dd>
                    <dd><a href="'.link_tuvan.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/tien-liet-tuyen/ico_dktt.png"></div><p>đăng ký <br>trực tuyến</p></a></dd>
                    <dt>
                    <p style="font-size: 12px;">đường dây tư vấn sức khỏe</p>
                    <b>'.phone1.' - '.phone2.'</b>
                    </dt>
                </dl>
            </div>';
    return $str;
}
function dangkykham(){
    $khoakham='<select name="khoakham">';
    foreach(loaibenh() as $val){
        $khoakham.='<option value="'.$val['name'].'">'.$val['name'].'</option>';
    }
    $khoakham.='</select>';
    $str='<form name="frmdkk" id="frmdkk" method="post">
        <div class="dangkykham box_bodder">
                    <div class="tit">Đăng ký khám</div>
                    <blink id="ajaxview_dkk" class="blink_dkk" style="color: #ff0000;font-size: 13px;font-weight: bold;"></blink>
                    <ul>
                        <li class=""><div class="stt">Họ tên</div><div><input type="text" name="hoten" placeholder="Họ Và Tên"></div> </li>
                        <li class="l2"><div class="stt">Điện thoại</div><div><input type="text" name="dienthoai" placeholder="01681234567"></div> </li>
                        <li class="l3"><div class="stt">Khoa khám</div><div>'.$khoakham.'</div></li>
                        <li class=""><div class="stt">Thời gian</div><div><input type="text" name="thoigian" id="thoigian3" placeholder="2016-05-20"></div> </li>
                        <li class="">

                            <div>
                            <input type="button" class="btn-success" style="background: #177fc8;" name="dangky" id="dangkykham" value="Đăng ký trực tuyến">
                            </div>
                            <div class="" style="">
                            <input type="reset" value="Nhập lại" style="width:215px;color:black;margin-top:10px;">
                            </div>
                        </li>
                    </ul>
                </div>
            </form>';
    $str2='<script>$(function () {
    $("#thoigian3").datepicker({dateFormat: "yy-mm-dd"});
});</script>';
    return $str.$str2;
}
function trieuchungOption($cate=null){
    $slides='<div class="cha_zj box_bodder">
                    <div class="pic">
                        <div class="cha_zj_left"></div>
                        <div class="cha_zj_right"></div>
                        <div class="cha_zj_con">
                            <ul style="width: 1375px; margin-left: 0px;">
                                <li><a href="'.link_tuvan.'" ><img src="'.domain.'/public/frontend/images/tienliettuyen/slide1.jpg" width="275"></a></li>
                                <li><a href="'.link_tuvan.'" ><img src="'.domain.'/public/frontend/images/tienliettuyen/slide2.jpg" width="275"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>';
    switch ($cate) {
        case 'yeu-sinh-ly':
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của yếu sinh lý</div>
                    <ul>
                        <li class=""><div class="stt">01</div>không cương cứng lên được</li>
                        <li class="l2 dong2"><div class="stt">02</div>Thời gian cương cứng ngắn, xuất tinh sớm </li>
                        <li class="l3 dong2"><div class="stt">03</div>Lãnh cảm, giảm ham muốn, đau khi xuất tinh</li>
                        <li class="l4 dong2"><div class="stt">04</div>Đau khi dương vật cương cứng, đau khi quan hệ</li>
                        <li class="l5 dong2"><div class="stt">05</div>Không xuất tinh được hoặc đau khi xuất tinh</li>
                        <li class="l6"><div class="stt">06</div>Xuất tinh ngược dòng, di tinh</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case 'vo-sinh-nam':
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của vô sinh nam</div>
                    <ul>
                        <li class="dong2"><div class="stt">01</div>Tinh dịch màu vàng, tinh dịch loãng, xuất tinh có máu</li>
                        <li class="l2 dong2"><div class="stt">02</div>Tinh dịch có mùi hôi, tinh dịch giống như nước </li>
                        <li class="l3 dong2"><div class="stt">03</div>Tinh dịch có dạng dính như keo, dạng cục</li>
                        <li class="l4 dong2"><div class="stt">04</div>Tinh hoàn bên to bên nhỏ, đau tức tinh hoàn</li>
                        <li class="l5 dong2"><div class="stt">05</div>Tinh dịch hóa lỏng thời gian dài, không hóa lỏng</li>
                        <li class="l6 dong2"><div class="stt">06</div>Đau khi xuất tinh, tinh dịch bất thường, đau khi tiểu tiện</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case 'benh-tien-liet-tuyen':
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của bệnh viêm tiền liệt tuyến</div>
                    <ul>
                        <li class="dong2"><div class="stt">01</div> Tiểu rắt, tiểu gấp, tiểu buốt, tiểu ra máu</li>
                        <li class="l2 dong2"><div class="stt">02</div>Bìu tinh hoàn ẩm ướt, nhiều nước tiểu</li>
                        <li class="l3 dong2"><div class="stt">03</div>Tiểu không hết, tiểu nhỏ giọt, tiểu tia nhỏ</li>
                        <li class="l4 dong2"><div class="stt">04</div>Tiểu chéo nhau, tiểu ít, khó tiểu tiện </li>
                        <li class="l5 "><div class="stt">05</div>Nước tiểu vẩn đục, làm đau tức</li>
                        <li class="l6"><div class="stt">06</div>Hoa mắt, chóng mặt, mất ngủ, sốt</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case 'chinh-hinh-co-quan-sinh-duc':
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của chỉnh hình cơ quan sinh dục</div>
                    <ul>
                        <li class=""><div class="stt">01</div>Dài bao quy đầu, hẹp bao quy đầu</li>
                        <li class="l2"><div class="stt">02</div>Ngứa bao quy đầu, cặn bao quy đầu</li>
                        <li class="l3 dong2"><div class="stt">03</div>Dương vật ngắn nhỏ, không thể đáp ứng được yêu cầu trong sinh hoạt vợ chồng</li>
                        <li class="l4 dong2"><div class="stt">04</div>Dương vật quá nhỏ, độ dài khi cương cứng không đạt 7cm </li>
                        <li class="l5"><div class="stt">05</div>dương vật uốn cong (gấp khúc)</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case 'nhiem-trung-duong-tiet-nieu':
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của nhiễm trùng đường tiết niệu</div>
                    <ul>
                        <li class="dong2"><div class="stt">01</div>Sưng đỏ bao quy đầu, đau ngứa rát quy đầu</li>
                        <li class="l2 dong2"><div class="stt">02</div>Ngứa, trên bao quy đầu có mụn nước nhỏ</li>
                        <li class="l3 dong2"><div class="stt">03</div> U nang tinh hoàn, sưng đau niệu đạo</li>
                        <li class="l4 dong2"><div class="stt">04</div>Sưng đỏ lỗ niệu đạo, sưng đau tinh hoàn</li>
                        <li class="l5 dong2"><div class="stt">05</div>Tiểu tiện không hết, tiểu dắt, nước tiểu vàng</li>
                        <li class="l6 dong2"><div class="stt">06</div>Bìu tinh hoàn lạnh, sa bìu, nước biểu có mùi bất thường</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        default:
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng thường gặp của vô sinh nam</div>
                    <ul>
                        <li class="dong2"><div class="stt">01</div>Tinh dịch màu vàng, tinh dịch loãng, xuất tinh có máu</li>
                        <li class="l2 dong2"><div class="stt">02</div>Tinh dịch có mùi hôi, tinh dịch giống như nước </li>
                        <li class="l3 dong2"><div class="stt">03</div>Tinh dịch có dạng dính như keo, dạng cục</li>
                        <li class="l4 dong2"><div class="stt">04</div>Tinh hoàn bên to bên nhỏ, đau tức tinh hoàn</li>
                        <li class="l5 dong2"><div class="stt">05</div>Tinh dịch hóa lỏng thời gian dài, không hóa lỏng</li>
                        <li class="l6 dong2"><div class="stt">06</div>Đau khi xuất tinh, tinh dịch bất thường, đau khi tiểu tiện</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
                break;
    }
    return $slides.$str;
}
function cd_menu_top(){

}
function bannersOpiton($cate=null,$img=null,$style=null){
    $img_default='';
    if(empty($img)){$img=$img_default;}
    if($cate=='home'){
        $str='';
    }else{
        $img='/public/frontend/images/home/banner2.jpg';
        $img2= '/public/frontend/images/home/banner.jpg';
        $style='background:#ffffff;';
        $style2 = 'background:#a0d9f4;';
        $style3 = 'padding: 0px; margin: 0px; list-style: none; font-size: 0px;width:55%;top:-86px;';
        $style4 = 'font-size: 12px; overflow: hidden;';
        $catename=' Ưu thế phòng khám';
        if($cate=='chinh-hinh-co-quan-sinh-duc'){ $catename='trung tâm chỉnh hình cơ quan sinh dục';}
        if($cate=='yeu-sinh-ly'){ $catename='trung tâm điều trị yếu sinh lý';}
        if($cate=='tien-liet-tuyen'){ $catename='trung tâm điều trị tiền liệt tuyến';}
        if($cate=='nhiem-trung-duong-tiet-nieu'){ $catename='trung tâm điều trị nhiễm trùng đường tiết niệu';}
        if($cate=='vo-sinh-nam'){ $catename='trung tâm điều trị Vô sinh nam';}
        if($cate=='benh-xa-hoi'){ $catename='trung tâm điều trị Bệnh xã hội';}
        if($cate=='lo-trinh-den-phong-kham'){$catename='Lộ trình đến phòng khám';}
        $str='<div id="banners">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
         <div class="banner_tips">
                <ul class="carousel-indicators" style="'.$style3.'">
                    <li data-target="#myCarousel" data-slide-to="0" class="item1 active" style="'.$style4.'"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="item2" style="'.$style4.'"></li>
                </ul>
            </div>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg_ban_item1" style="'.$style2.'">
                        <div class="ban_item">
                            <a href="">
                                <img src="'.domain.$img.'" alt="kham nam khoa">
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="bg_ban_item1" style="'.$style.'">
                        <div class="ban_item">
                            <a href="">
                                <img src="'.domain.$img2.'" alt="kham nam khoa">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_item" style="height: 40px;margin-top: -40px;">
            <div style="position: absolute;display: block;background: white;height: 40px;line-height: 40px;padding: 0 15px;min-width:290px;">
                <a style="font-weight: 600;text-transform: uppercase;color: #000000;">'.$catename.'</a>
            </div>
        </div>
        </div>
        ';
    }
    echo $str;
}
function loaibenh(){
    $arr=array(
        array('name'=>'Yếu sinh lý','rewrite'=>'Yếu sinh lý'),
        array('name'=>'Chỉnh hình cơ quan sinh dục','rewrite'=>'Chỉnh hình cơ quan sinh dục'),
        array('name'=>'Bệnh tiền liệt tuyến','rewrite'=>'Bệnh tiền liệt tuyến'),
        array('name'=>'Nhiễm trùng tiết niệu','rewrite'=>'Nhiễm trùng tiết niệu'),
        array('name'=>'Vô sinh','rewrite'=>'Vô sinh'),
        array('name'=>'Bệnh xã hội','rewrite'=>'Bệnh xã hội'),
    );
    return $arr;
}
function bl_thaidophucvu(){
    $arr=array(
        array('name'=>'Rất hài lòng','rewrite'=>'rất hài lòng'),
        array('name'=>'Bình thường','rewrite'=>'bình thường'),
        array('name'=>'Không hài lòng','rewrite'=>'không hài lòng'),
    );
    return $arr;
}
function bl_hieuquadieutri(){
    $arr=array(
        array('name'=>'Rất hài lòng','rewrite'=>'rất hài lòng'),
        array('name'=>'Bình thường','rewrite'=>'bình thường'),
        array('name'=>'Không hài lòng','rewrite'=>'không hài lòng'),
    );
    return $arr;
}
function bl_moitruongphongkham(){
    $arr=array(
        array('name'=>'Rất hài lòng','rewrite'=>'rất hài lòng'),
        array('name'=>'Bình thường','rewrite'=>'bình thường'),
        array('name'=>'Không hài lòng','rewrite'=>'không hài lòng'),
    );
    return $arr;
}
function bl_loaibenh(){
    $arr=array(
        array('name'=>'Kế hoạch hóa','rewrite'=>'kế hoạch hóa'),
        array('name'=>'Bệnh cổ tử cung','rewrite'=>'bệnh cổ tử cung'),
        array('name'=>'Nội tiết tố nữ','rewrite'=>'nội tiết tố nữ'),
        array('name'=>'Vô sinh','rewrite'=>'vô sinh'),
        array('name'=>'Chỉnh hình phụ khoa','rewrite'=>'chỉnh hình phụ khoa'),
        array('name'=>'Viêm nhiễm phụ khoa','rewrite'=>'viêm nhiễm phụ khoa'),
        array('name'=>'Bệnh xã hội','rewrite'=>'bệnh xã hội'),
    );
    return $arr;
}
function bl_chiphikham(){
    $arr=array(
        array('name'=>'Hợp lý','rewrite'=>'hợp lý'),
        array('name'=>'Không hợp lý','rewrite'=>'không hợp lý'),
    );
    return $arr;
}
function bl_dadenkham(){
    $arr=array(
        array('name'=>'Chưa đến','rewrite'=>'chưa đến'),
        array('name'=>'Đã đến','rewrite'=>'đã đến'),
    );
    return $arr;
}
function main_ico(){
    $str='<div class="main_item main_ico" style="overflow: hidden">
        <div class="col-lg-3">
            <img src="'.domain.'/public/frontend/img/home/dotphanghiencuu.png">
            <h4>Hệ thống an toàn</h4>
            <p>quá trình trị liệu quy phạm hóa</p>
            <p>Nâng cao chất lượng phục vụ</p>
        </div>
        <div class="col-lg-3">
            <img src="'.domain.'/public/frontend/img/home/chungnhanquocte.png">
            <h4>Hệ thống kiểm tra</h4>
            <p>Trước thủ thuật kiểm tra kĩ lưỡng</p>
            <p>Kiểm tra hồi phục sau thủ thuật</p>
        </div>
        <div class="col-lg-3" style="padding: 0px;">
            <img src="'.domain.'/public/frontend/img/home/hoinghichuyenmon.png">
            <h4>Hệ thống phục vụ</h4>
            <p>Y tá phục vụ toàn bộ quá trình</p>
            <p >Sau thủ thuật theo dõi và phục vụ</p>
        </div>
        <div class="col-lg-3">
            <img src="'.domain.'/public/frontend/img/home/giaithuong.png">
            <h4>Chính sách bảo mật</h4>
            <p>Hệ thống bảo mật thông tin</p>
            <p>Bảo vệ thông tin của bạn</p>
        </div>
        <div class="clear2" style="overflow: hidden"></div>
    </div>';
    return $str;
}
function dm_ha(){
    $str='<div class="cha_kycg">
            <dl>
                <dd class="dd1">
                <div class="pic"><img src="'.domain.'/public/frontend/images/yeu-sinh-ly/nghiencuu.jpg"></div>
                    <div class="txt">
                        <h2>Đột phá nghiên cứu khoa học</h2>
                        <p>Khoa nam khoa của phòng khám đa khoa Giải Phóng Hà Nội vượt trội so với phòng khám khác</p>
                    </div>
                </dd>
                <dd class="dd2">
                    <div class="pic"><img src="'.domain.'/public/frontend/images/yeu-sinh-ly/chungnhan.jpg"></div>
                    <div class="txt">
                        <h2 class="">Hoạt động xã hội</h2>
                        <p>phòng khám đa khoa Giải Phóng tổ chức thăm hỏi động viên các bệnh nhân và các em thiếu nhi ngày 1-6.</p>
                    </div>
                </dd>
                <dd class="dd3">
                    <div class="pic"><img src="'.domain.'/public/frontend/images/yeu-sinh-ly/hocthuat.jpg"></div>
                    <div class="txt">
                        <h2 class="">Trao đổi học thuật</h2>
                        <p>phòng khám đa khoa Giải Phóng Hà Nội tham gia trao đổi học thuật sức khỏe sinh sản nam giới quốc tế và làm báo cáo. </p>
                    </div>
                </dd>
                <dd class="dd4">
                    <div class="pic"><img src="'.domain.'/public/frontend/images/yeu-sinh-ly/kythuat.jpg"></div>
                    <div class="txt">
                        <h2 class="">thăm khám từ thiện</h2>
                        <p>phòng khám đa khoa Giải Phóng Hà Nội tổ chức  thăm khám từ thiện cho các bệnh nhân.</p>
                    </div>
                </dd>
            </dl>
        </div>';
    return $str;
}
function menu_footer(){
    $style="<style>
    .row {margin-right: -15px;margin-left: -15px;}
    #footer {height: auto;overflow: hidden;background: url(".domain."/public/frontend/img/home/fbg.gif);padding-top: 30px;}
    #footer .footer_in {height: auto;overflow: hidden;width: 1000px;margin: 0 auto 20px;}
    #footer .flogo {float: left;height: 161px;width: 215px;text-align: center;padding:0;}
    #footer .fnav {float: left;height: auto;overflow: hidden;width: 580px;}
    #footer .fnav dl {background: url(".domain."/public/frontend/img/home/fico2.png) repeat-y left top;height: 230px;overflow: hidden;width: 187px;float: left;}
    #footer .fnav dt {width: 100%;margin: 0 auto;font-size: 11px;background: url(".domain."/public/frontend/img/home/fico1.png) no-repeat left bottom;height: auto;overflow: hidden;padding-bottom: 10px;margin-bottom: 5px;text-transform: uppercase;}
    #footer .fnav dd {width: 180px;margin: 0 auto;line-height: 31px;padding-bottom: 2px;background: url(".domain."/public/frontend/img/home/foot_line.gif) repeat-x left bottom;text-transform: uppercase;font-size: 11px;}
    #footer .fnav dl.w90 dt {width: 180px;}
    #footer .fnav dl.w90 dd {width: 180px;}
    #footer .faddr {width: 200px;float: right;color: #FFFFFF;}
    #footer .faddr .t {height: 130px; padding-left: 0px;}
    #footer .faddr .t p {text-transform: uppercase;font-size: 12px;margin-top: 5px;margin-bottom: 10px;line-height: 20px;padding: 0px 0 5px 0;}
    #footer_btn_box .cons .right {text-align: center;float: right;width: 330px;}
    #footer_btn_box .cons .right .btn_i {height: auto;padding: 12px 0 10px 0;color: #ffffff;text-transform: uppercase;font-weight: bold;font-size: 12px;}
    </style>";
    $str='<div class="row" style="margin: 0;">
<div id="footer" style="padding-bottom: 90px;">
    <div class="footer_in">
        <div class="flogo">
            <img src="'.domain.'/public/frontend/img/home/flogo.png"><br>
            <div class="clear"></div>
            <div style="text-transform: uppercase;color: #ffffff">
                <b style="font-size: 16px;">phòng khám đa khoa Giải Phóng Hà Nội</b>
                <div class="clear"></div>
                <p style="font-size: 11px;">--- phòng khám uy tín ở hà nội ---</p>
            </div>
        </div>
        <div class="fnav">
            <dl>
                <dt><a>trung tâm có thương hiệu</a></dt>
                <dd><a href="'.link_gioithieu.'" >giới thiệu</a></dd>
                <dd><a href="'.link_thietbi.'" >thiết bị</a></dd>
                <dd><a href="'.domain.'/truong-hop-khoi-benh">trường hợp khỏi bệnh</a></dd>
                <dd><a href="'.link_tuvan.'" >tư vấn chi phí</a></dd>
                <dd><a href="'.link_tuvan.'" >tư vấn bệnh tình</a></dd>
                <dd><a href="'.link_lienhe.'" >liên hệ</a></dd>
            </dl>
            <dl>
                <dt><a>chẩn trị nam khoa</a></dt>
                <dd><a href="'.domain.'/benh-tien-liet-tuyen" >bệnh tiền liệt tuyến</a></dd>
                <dd><a href="'.domain.'/chinh-hinh-co-quan-sinh-duc" >chỉnh hình cơ quan sinh dục</a></dd>
                <dd><a href="'.domain.'/vo-sinh-do-bat-thuong-chuc-nang-sinh-san" >Bất thường chức năng sinh sản</a></dd>
                <dd><a href="'.domain.'/vo-sinh-nam" >vô sinh nam</a></dd>
                <dd><a href="'.domain.'/viem-nhiem-co-quan-sinh-duc" >viêm nhiêm cơ quan sinh dục</a></dd>
                <dd><a href="'.domain.'/benh-xa-hoi" >bệnh xã hội</a></dd>
            </dl>
            <dl class="w90">
                <dt class=""><a>dịch vụ và giúp đỡ</a></dt>
                <dd><a href="'.link_quytrinhphongkham.'" >lộ trình phòng khám</a></dd>
                <dd><a href="'.link_tuvan.'" >tư vấn trực tuyến</a></dd>
                <dd><a href="'.link_tuvan.'" >đăng ký hẹn khám</a></dd>
                <dd><a href="'.link_skype.'" >skype</a></dd>
                <dd><a href="'.link_facebook.'" >facebook</a></dd>
                <dd><a href="'.link_diachi.'" >tuyến đường</a></dd>
            </dl>
        </div>
        <div class="faddr">
            <div class="t">
                <div style="width: 120px;text-align: center;float: left">
                    <p>đường dây nóng tư vấn sức khỏe</p>
                    <b style="font-size: 24px;">'.phone1.'</b>
                </div>
            </div>
            <div>
                <p style="text-transform: uppercase;"><b>số điện thoại：</b></p>
                '.phone2.' - '.phone3.'
                <div class="clear"></div>
                <p style="text-transform: uppercase;"><b>Địa chỉ：</b>Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</p>
            </div>
        </div>
    </div>
    <div class="copy" style="background: #1f80c1;text-align: center;padding-top: 10px;padding-bottom: 10px;color: #fff;font-size: 14px;margin-bottom:0px;">
            Sở hữu bản quyền phòng khám đa khoa Giải Phóng,nội dung website này chỉ để tham khảo không làm căn cứ chẩn đoán y tế.Tôn trọng ý kiến bác sĩ
         </div>
    <div id="footer_btn_box">
        <div class="cons">
            <div class="bg"></div>
            <div class="in">
                <div class="left">
                    <ul>
                        <li style="line-height: 18px;"><a href="" >Sức khỏe của bạn là tâm nguyện của chúng tôi</a></li>
                        <li><a href="" >trên con đường sức khỏe luôn có chúng tôi</a></li>
                    </ul>
                </div>
                <div class="con">
                    <ul>
                        <li>
                            <a href="'.link_tuvan.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/home/fbb_ico2.png"></div><p>tư vấn trực tuyến</p></a>
                        </li>
                        <li>
                            <a href="'.link_skype.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/home/skype_btn.png" style="padding-top: 12px;"></div><p>Skype</p></a>
                        </li>
                        <li>
                            <a href="'.link_facebook.'"><div class="pic"><img src="'.domain.'/public/frontend/img/home/fb_btn.png" style="padding-top: 12px;"></div><p>facebook</p></a>
                        </li>
                        <li>
                            <a href="'.link_diachi.'" ><div class="pic"><img src="'.domain.'/public/frontend/img/home/fbb_ico5.png" style="padding-top: 12px;"></div><p>chỉ đường</p></a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <div class="btn_i">Hẹn khám qua mạng được hưởng ưu đãi
                        <img src="http://phongkhambenhxahoi.vn/public/frontend/images/ico_dangky_close.png" id="f_close" style="float: right;display: block">
                    </div>
                    <div class="btn_i">Khi đến đưa ra mã số khám bệnh</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#f_close").click(function(){
            $("#footer_btn_box").hide();
            $("#footer #fcopy").hide();
            $("#footer").css("padding-bottom", 0);
        })
</script>
</div>
</div>';
    return $style.$str;
    }
function menu_main(){
    $str='<div id="nav">
    <div class="nav_in">
        <div class="logo"><a href="/" target="_blank"><img src="http://khamnamkhoahanoi.vn/public/frontend/img/home/logo.png" /></a></div>
        <div class="nav_list fwryh">
            <div class="nav_list_bg"><span></span></div>
            <ul class="bg">
                <li class="f"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="txt">
                <li class="f">
                    <a href="'.domain.'" target="_blank"><div class="box"><p>TRANG CHỦ</p><span>HOME</span></div></a>
                </li>
                <li>
                    <a href="'.link_gioithieu.'" target="_blank"><div class="box"><p>GIỚI THIỆU</p><span>INTRODUCE</span></div></a>
                </li>
                <li>
                    <a href="'.link_tuvan.'" target="_blank"><div class="box"><p>BÁC SĨ</p><span>EXPERTS</span></div></a>
                </li>
                <li>
                    <a href="'.link_kythuat.'" target="_blank"><div class="box"><p>KỸ THUẬT</p><span>CASE</span>	</div></a>
                </li>
                <li class="last">
                    <a href="'.link_thietbi.'" target="_blank"><div class="box"><p>THIẾT BỊ</p><span>GUIDE</span></div></a>
                </li>
            </ul>
        </div>
    </div>
</div>';
    return $str;
}
    function get_cate_parent($select=null){
        $cate=get_cat();
        $selected='';
        $str='<select name="cat_parent" id="DropDownTimezone" class="input-xlarge">
        <option value="0">Chọn danh mục cha</option>
        ';
        foreach($cate as $key=>$val){
            if($val['id']==$select){$selected='selected';}else{$selected='';}
            $str.='<option value="'.$val['id'].'" '.$selected.'>'.$val['cat_name'].'</option>';
            if(!empty($cate[$key]['lv2'])){
                foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){
                    if($vallv2['id']==$select){$selected='selected';}else{$selected='';}
                    $str.='<option value="'.$vallv2['id'].'" '.$selected.'>|--'.$vallv2['cat_name'].'</option>';
                    if(!empty($cate[$key]['lv2'][$keylv2]['lv3'])){
                        foreach($cate[$key]['lv2'][$keylv2]['lv3'] as $keylv3=>$vallv3){
                            if($vallv3['id']==$select){$selected='selected';}else{$selected='';}
                            $str.='<option value="'.$vallv3['id'].'" '.$selected.'>&nbsp&nbsp&nbsp|--'.$vallv3['cat_name'].'</option>';
                        }
                    }
                }
            }
        }
        return $str;
    }
    function get_cate($select=null){
        $cate=get_cat();
        $selected='';
        $str='<select name="cat_id" id="DropDownTimezone" class="input-xlarge">
        <option value="0">Chọn danh mục</option>
        ';
        foreach($cate as $key=>$val){
            if($val['id']==$select){$selected='selected';}else{$selected='';}
            $str.='<option value="'.$val['id'].'" '.$selected.'>'.$val['cat_name'].'</option>';
            if(!empty($cate[$key]['lv2'])){
                foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){
                    if($vallv2['id']==$select){$selected='selected';}else{$selected='';}
                    $str.='<option value="'.$vallv2['id'].'" '.$selected.'>|--'.$vallv2['cat_name'].'</option>';
                    if(!empty($cate[$key]['lv2'][$keylv2]['lv3'])){
                        foreach($cate[$key]['lv2'][$keylv2]['lv3'] as $keylv3=>$vallv3){
                            if($vallv3['id']==$select){$selected='selected';}else{$selected='';}
                            $str.='<option value="'.$vallv3['id'].'" '.$selected.'>&nbsp&nbsp&nbsp|--'.$vallv3['cat_name'].'</option>';
                        }
                    }
                }
            }
        }
        $str.='</select>';
        return $str;
    }
    //=============mobile================
function  rewrite_number_phone($phone,$Arr=null){
    if($Arr==null){
        $Arr=array(' ','.');
        $phone=str_replace($Arr,'', $phone);
    }
    return 'tel:'.$phone;
}
function m_popup(){
    $str2='<script type="text/javascript">
var google_tag_params = {
dynx_itemid: "REPLACE_WITH_VALUE",
dynx_itemid2: "REPLACE_WITH_VALUE",
dynx_pagetype: "REPLACE_WITH_VALUE",
dynx_totalvalue: "REPLACE_WITH_VALUE",
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 857483183;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/857483183/?guid=ON&amp;script=0"/>
</div>
</noscript>';
    $str='<script src="http://phongkhamgiaiphong.com/popup/js/m_popfuns.js"></script>';
    return $str2.$str;
}
function m_Addtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/m_funs.js"></script>';
    return $str;
}
function m_CateOption($cate=null){
    $str='';
    $i=0;
    if($cate!=cat_rewrite_nhiemtrung){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_nhiemtrung.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_ntdtl.png" alt="viem nhiem co quan sinh duc">
                </div>
                <p>Nhiễm trùng đường tiết niệu</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_chinhhinh){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_chinhhinh.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_hbqd.png" alt="chỉnh hình cơ quan sinh dục">
                </div>
                <p>Chỉnh hình cơ quan sinh dục</p>
             </a>
        </div>';
    }
    if($cate!=cat_rewrite_yeusinhly){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_yeusinhly.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_ysl.png" alt="yeu sinh ly">
                </div>
                 <p>Yếu sinh lý</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_vosinh){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_vosinh.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_vsn.png" alt="vo sinh nam">
                </div>
                <p>Vô sinh nam</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_tienliettuyen){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_tienliettuyen.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_tlt.png" alt="tien liet tuyen">
                </div>
                <p>Bệnh tuyến tiền liệt</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_benhlykhac){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_benhlykhac.'">
                <div class="categories_list_item_content">
                    <img src="/public/mobile/imgs/ico_cate_blk.png" alt="tien liet tuyen">
                </div>
                <p>Bệnh lý khác</p>
            </a>
        </div>';
    }
    $str.='</div>';
    $str_='<div class="categories_list categories_list'.$i.'">';
    $str=$str_.$str;
    return $str;
}
function m_CateSubOption($cate){
    $style='';
    if($cate['cat_rewrite']==cat_rewrite_tienliettuyen){
        $ico_cat='/public/mobile/imgs/ico_cat_tlt.png';
        $img_cat='/public/mobile/imgs/img_cat_tlt.jpg';
        $txt='Tuyến tiền liệt là một cơ quan của hệ thống sinh sản nam giới, tuyến tiền liệt tăng sinh và viêm tuyến tiền liệt là bệnh thường gặp của tuyến tiền liệt. Tuyến tiền liệt phát bệnh có thể dẫn đến các triệu chứng cục bộ hoặc toàn thân như tiểu rắt, tiểu khó khăn, tiểu buốt...';
    }
    if($cate['cat_rewrite']==cat_rewrite_yeusinhly){
        $ico_cat='/public/mobile/imgs/ico_cat_ysl.png';
        $img_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/img_cat_ysl.jpg';
        $txt='Yếu sinh lý là không hài lòng trong quan hệ tình dục và chức năng sinh lý nam giới, biểu hiện thường gặp là rối loạn ham muốn, xuất tinh sớm, di tinh, không xuất tinh, xuất tinh ngược dòng... Yếu sinh lý đa phần là do các bệnh của hệ thống sinh sản và bệnh toàn cơ thể gây ra. ';
    }
    if($cate['cat_rewrite']==cat_rewrite_vosinh){
        $ico_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/ico_cat_vs.png';
        $img_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/img_cat_vs.jpg';
        $txt='Vô sinh là chỉ những cặp vợ chồng ở độ tuổi sinh đẻ có quan hệ tình dục bình thường, trong thời gian 1 năm và kéo dài hơn không mang thai, không sinh đẻ. Nguyên nhân chính dẫn đến nam giới vô sinh là tinh trùng ít, tinh trùng yếu, tinh trùng không hóa lỏng, tinh trùng có lẫn máu, giãn tĩnh mạch thừng tinh...';
    }
    if($cate['cat_rewrite']==cat_rewrite_nhiemtrung){
        $ico_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/ico_cat_dtn.png';
        $img_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/img_cat_dtn.jpg';
        $txt='Viêm nhiễm cơ quan sinh dục là viêm nhiễm do vi khuẩn trực tiếp xâm nhập vào trong niệu đạo gây ra, viêm nhiễm cơ quan sinh dục biểu hiện chính là tiểu rắt, tiểu nhiều, tiểu buốt, tiểu không hết, tiểu nhỏ giọt, tiểu đêm nhiều, niệu đạo sưng đỏ... Đặc biệt ảnh hưởng đến cuộc sống thường ngày của người bệnh.';
    }
    if($cate['cat_rewrite']==cat_rewrite_chinhhinh){
        $ico_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/ico_cat_ch.png';
        $img_cat='http://khamnamkhoahanoi.vn/public/mobile/imgs/img_cat_ch.jpg';
        $txt='Chỉnh hình cơ quan sinh dục là phục hồi tu sửa lại những khiếm khuyết bẩm sinh và dị tật bẩm sinh của cơ quan sinh dục, đạt được mục đích phục hồi và tiếp cận ngoại hình và bảo vệ chức năng sinh lý bình thường của cơ quan sinh dục, giúp nam giới tự tin hơn trong cuộc sống cũng như trong quan hệ vợ chồng';
        $style='letter-spacing: -0.5px;';
    }
    if(empty($txt)){
        $str='';
    }else{
        $str='<div class="categories_content">
        <div class="categories_des">
            <div class="categories_des_left">
                <div class="categories_des_img">
                    <a href="/'.$cate['cat_rewrite'].'">
                        <img src="'.$ico_cat.'" alt="'.$cate['cat_name'].'">
                        <p style="'.$style.'">'.$cate['cat_name'].'</p>
                    </a>
                </div>
            </div>
            <div class="categories_des_right">
                <div class="categories_des_right_img">
                <img src="'.$img_cat.'" alt="'.$cate['cat_name'].'">
                </div>
            </div>
        </div>
        <p style="text-indent: 20px;text-align: justify">'.$txt.'</p>
    </div>';
    }
    return $str;
}