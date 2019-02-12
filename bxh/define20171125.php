<?php
define("Namespace_Backend", "Admin");
define("namespace_Backend", "admin");
define('dir_root',getcwd());
define('Host','localhost');
define('User_db','pkgpc_bxh0815');
define('Pass_db','12345679');
define('Name_db','pkgpc_bxh0815');
define('showQuery','0');
define("showerr", "abc@");
define('domain','http://'.$_SERVER['SERVER_NAME'].'/bxh');
define('domain1',$_SERVER['SERVER_NAME']);
define('fixk','/bxh');
define('link_tuvan','http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en');
/*define("link_gioithieu", "/cd6/gioi-thieu/");*/
define("link_gioithieu", "http://phongkhambenhxahoi.vn/doi-net-ve-phong-kham-da-khoa-giai-phong-ha-noi");
define("link_tintuc", domain."/tin-tuc");
define("link_kythuat", domain."/ky-thuat");
define("link_thietbi", domain."/thiet-bi");
define("link_lienhe", domain."/dia-chi-phong-kham-da-khoa-giai-phong-ha-noi");
define("link_dieutrithanhcong", domain."/dieu-tri-thanh-cong");
define("link_hoatdonguudai", domain."/hoat-dong-uu-dai");
define("link_skype",'skype:phongkhamdakhoagiaiphong@gmail.com?chat');
define("link_facebook",'https://www.facebook.com/phongkhamdakhoagiaiphong/');
define("link_lotrinhphongkham", domain.'/cd6/lo-trinh-phong-kham');
define("link_quytrinhkham", domain.'/cd6/quy-trinh-kham');
define("rewrite_munropsinhduc", 'mun-rop-sinh-duc');
define("rewrite_suimaoga", 'sui-mao-ga');
define("rewrite_suimaoganam", 'sui-mao-ga-nam');
define("rewrite_suimaoganu", 'sui-mao-ga-nu');
define("rewrite_benhlau", 'benh-lau');
define("rewrite_giangmai", 'benh-giang-mai');
define("rewrite_nguyennhan", 'nguyen-nhan');
define("rewrite_trieuchung", 'trieu-chung');
define("rewrite_nguyhai", 'nguy-hai');
define("rewrite_dieutri", 'dieu-tri');
define("rewrite_chiphi", 'chi-phi');
define("rewrite_kiemtra", 'kiem-tra');
define("num_dm_name", '33');
define("num_dm_name2", '36');
define("num_dm_des", '120');
define("num_dm_des_img", '80');
define("phone1", '0432.969.666');
define("phone2", '0166.352.8899');
define("phone3", '');

define("link_mobile_diachi", 'http://phongkhambenhxahoi.vn/mobile/cd6/lo-trinh-kham');
define("link_mobile_gioithieu", 'http://phongkhambenhxahoi.vn/mobile/cd6/gioi-thieu');
define("link_mobile_cdsuckhoe", 'http://phongkhambenhxahoi.vn/mobile/cdsuckhoe/chuyen-de-suc-khoe');
define("ico_shortcut", '<link rel="shortcut icon" type="image/x-icon" href="http://trihanoi.com/public/frontend/home/image/logo.png" />');
/*PHAN MOBILE*/
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
if($deviceType=='computer'){
    define("deciceType", $deviceType);
}else{
    define("deciceType", 'phone');
}
define("baiviet_gioithieu", "/gioi-thieu-phong-kham-da-khoa-nhan-ai-ha-noi");
function link_dangkykham(){
    $str='http://phongkhamgiaiphong.com/dangky.php?';
    return $str;
}
function dangkysdt(){
    $str='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/dkdt.js"></script>';
    //return $str;
}
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
        $title='phòng khám đa khoa chữa bệnh xã hội chuyên nghiệp chăm sóc sức khỏe bệnh nhân';
    }
    if(empty($keywords)){
        $keywords='kham benh xa hoi giai phong,phong kham da khoa giai phong, khám chữa bệnh xã hội giải phóng';
    }
    if(empty($description)){
        $description='Phong Kham Da Khoa Giai Phong Ha Noi chuyen dieu tri benh xa hoi';
    }
    $arr=array('title'=>$title,'keywords'=>$keywords,'description'=>$description);
    return $arr;
}
function linkto($link1=null,$link2=null,$link3=null){
    //$array=array('link1','link2');
    $link='';
    if(!empty($link1)){
        if(is_array($link1)){
            foreach($link1 as $val){
                $link.='/'.$val;
            }
        }else{
            if(!empty($link1)){
                $link.='/'.$link1;
            }
            if(!empty($link2)){
                $link.='/'.$link2;
            }
            if(!empty($link3)){
                $link.='/'.$link3;
            }
        }
    }
    return $link;
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
        array('name'=>'Sùi mào gà','rewrite'=>'Sùi mào gà'),
        array('name'=>'Bệnh lậu','rewrite'=>'Bệnh lậu'),
        array('name'=>'Bệnh giang mai','rewrite'=>'Bệnh giang mai'),
        array('name'=>'Mụn rộp sinh dục','rewrite'=>'Mụn rộp sinh dục')
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
function Addtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/funs.js"></script>
';
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
    <img src="'.domain.'/public/frontend/images/popup.gif">
    <div class="popup_close" style="width: 107px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 161px;cursor: pointer;"></div>
    <a href="'.link_tuvan.'">
    <div style="width: 108px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 276px;"></div>
    </a>
</div>';
    return $str3;
}
function Addleft(){
    $str='<style>
    .menu_hide{display:none}
    .menu_show{display:block}
    .left_nav {width: 85px;height: 490px;position: absolute;left: 15px;z-index: 9;}
    .left_menu {width: 84px;margin: 0 auto;float: left;list-style:none;}
    .left_menu li {height: 82px;float: left;color: #FFF;font-size: 15px;padding-left: 0px;}
    .left_menu_index{width: 79px;}
    .left_s_menu {float: left;position: relative;top: -163px;left: 82px;width: 300px;height: 162px;padding-left: 10px;list-style:none;}
    .left_s_menu li {float: left;padding: 3px 0px;z-index: 9;}
    .left_s_menu li img{max-width: 100%;height: 100%}
    ul li.menu_c1{height: 140px;width: 134px;margin-top: 10px;margin-right: 10px;}
    ul li.menu_c2{height: 140px;width: 145px;padding-top: 10px;color: #000;font-weight: bold;}
    ul li.menu_c2 a.btn_ketban{display: inline-block;border: 1px solid #000;color:#17bdb0;text-decoration: none;background: #fff;float: left;padding: 2px 10px;margin-top: 30px; }
    .menu_show_fb{background:#bf7079;background-repeat: no-repeat;}
    .menu_show_zl{background:#f0f0f0;background-repeat: no-repeat;}
</style>';
    $str.='<script>
    $(document).ready(function(){
        var h=window.innerHeight;
        $(".left_nav").css({"position":"absolute","top":h/2 - 250});
        $("#backtotop").click(function () {
            $("body,html").animate({scrollTop: 0}, "slow");
        });
        $(".left_menu_index").hover(function(){
            var id=$(this).attr("data-for");
            $(".menu_show_"+id).removeClass("menu_hide");
            $(".menu_show_"+id).addClass("menu_show");
        }, function(){
            var id=$(this).attr("data-for");
            $(".menu_show_"+id).removeClass("menu_show");
            $(".menu_show_"+id).addClass("menu_hide");
        });
    })
</script>';
    $str.='<div id="divAdLeft" class="left_nav">
    <ul style="" class="left_menu">
        <li class="left_menu_index" style="padding-top: 0px;height:82px;">
            <a href="'.link_tuvan.'" target="_blank"><img src="http://trihanoi.com/addleft/imgs/tvcp.png"></a>
        </li>
        <li class="left_menu_index"><a href="'.link_tuvan.'" target="_blank"><img src="http://trihanoi.com/addleft/imgs/bstv.png"></a>
        </li>
        <li class="left_menu_index">
            <a href="'.link_skype.'" target="_blank"><img src="http://trihanoi.com/addleft/imgs/skype.png"></a>
        </li>
        <li class="left_menu_index" data-for="zl" style=""><a href="#" target="_self"><img src="http://trihanoi.com/addleft/imgs/zalo.png"></a>
            <ul class="left_s_menu menu_show_zl menu_hide">
                <li class="menu_c1"><img src="http://trihanoi.com/addleft/imgs/zl_code.png"></li>
                <li class="menu_c2">
                    Phòng khám<br>Đa Khoa Giải Phóng
                    <b style="color: #17bdb0;display: block;float:left;padding-top: 7px;font-size: 21px;">0166.352.8899</b>
                    <a href="" class="btn_ketban">Kết bạn</a>
                 </li>
            </ul>
        </li>
        <li class="left_menu_index" style="margin-bottom:5px;height:79px;"><a href="#" id="backtotop" target="_self"><img src="http://trihanoi.com/addleft/imgs/dautrang.png"></a>
        </li>
    </ul>
</div>';
    $str.='<script type="text/javascript" src="http://trihanoi.com/public/frontend/home/js/left_right.js"></script>';
    $str='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/funs.js"></script>';
    $str2='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/left_right.js"></script>';
    return $str.$str2;
}
function line_chat(){
    $str='<script language="javascript" src="http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&lng=en"></script>';
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
function trieuchungOption($cate=null){
    $slides='<div class="cha_zj box_bodder">
                    <div class="pic">
                        <div class="cha_zj_left"></div>
                        <div class="cha_zj_right"></div>
                        <div class="cha_zj_con">
                            <ul style="width: 1375px; margin-left: 0px;">
                                <li><a href="'.link_tuvan.'" ><img src="'.domain.'/public/frontend/images/tienliettuyen/slide1.jpg" width="265"></a></li>
                                <li><a href="'.link_tuvan.'" ><img src="'.domain.'/public/frontend/images/tienliettuyen/slide2.jpg" width="265"></a></li>
                                <li><a href="'.link_tuvan.'" ><img src="'.domain.'/public/frontend/images/tienliettuyen/slide3.jpg" width="265"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<p>Một số hình ảnh 168</p>-->
                </div>';
    switch ($cate) {
        case rewrite_suimaoga:
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng biểu hiện <br>của bệnh</div>
                    <ul>
                        <li class=""><div class="tchung"><div class="stt">01</div></div>Nốt sùi nhỏ, đường kính 1-3mm, một hoặc nhiều nốt, chủ yếu thường ở chỗ khô, đặc biệt là ở dương vật</li>
                        <li class="l2"><div class="tchung"><div class="stt">02</div></div>Nốt sùi nhô lên, có lúc hợp thành giống như những đám sùi</li>
                        <li class="l3"><div class="tchung"><div class="stt">03</div></div>Ngoại quan thường là thương tổn da, chủ yếu thường gặp ở dương vật, âm hộ nữ giới, cổ tử cung và âm đạo.</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case rewrite_giangmai:
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng biểu hiện<br>của bệnh</div>
                    <ul>
                        <li class=""><div class="tchung"><div class="stt">01</div></div>Giang mai giai đoạn 1 biểu hiện chủ yếu là vùng âm hộ hạ cam không đau, thông thường gọi là hạ cam cứng</li>
                        <li class="l2"><div class="tchung"><div class="stt">02</div></div>Giang mai giai đoạn 2 đầu tiên là xuất hiện biểu hiện triệu chứng toàn thân, tiếp theo là xuất hiện nhiều lần các săng giang mai.</li>
                        <li class="l3"><div class="tchung"><div class="stt">03</div></div>Thời gian xảy ra thường là sau 2 năm phát bệnh, nhưng cũng có người thời gian dài hơn 3-5 năm. Thường gặp ở độ tuổi 40-50.</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        case rewrite_munropsinhduc:
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">3 triệu chứng<br>biểu hiện thường gặp</div>
                    <ul>
                        <li class="dong4"><div class="tchung"><div class="stt">01</div></div>Vùng âm hộ có cảm giác nóng rát, sau đó nổi nốt từng đám, có thể một hoặc nhiều đám, tiếp tục hình thành mụn nước. </li>
                        <li class="l2 dong5"><div class="tchung"><div class="stt">02</div></div>Xuất hiện mụn mủ, sau khi vỡ hình thành các vết loét, đau đớn, có cảm giác đau, cuối cùng hình thành sẹo tự lành, thương tổn vùng da thường gặp ở bao quy đầu, quy đầu, rãnh dương vật hoặc dương vật, đôi khi có ở lỗ niệu đạo.</li>
                        <li class="l3 dong4"><div class="tchung"><div class="stt">03</div></div>Toàn thân khó chịu, sốt nhẹ, đau đầu; hạch bạch huyết sưng to.<br>Trực tràng hậu môn đau, táo bón, nhiều dịch, xung quanh hậu môn có vết loét dạng mụn.</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
            break;
        default:
            $str='<div class="cha_zz box_bodder">
                    <div class="tit">Triệu chứng biểu hiện<br>của bệnh</div>
                    <ul>
                        <li class="" style="height: 80px;overflow: hidden;"><div class="tchung"><div class="stt">01</div></div>Lỗ niệu đạo ngứa, đau, sưng đỏ và lật ra ngoài. </li>
                        <li class="l2" style="height: 80px;overflow: hidden;"><div class="tchung"><div class="stt">02</div></div>Khi tiểu tiện đau rát, thường kèm theo hiện tượng tiểu nhiều lần.</li>
                        <li class="l3" style="height: 70px;overflow: hidden;"><div class="tchung"><div class="stt">03</div></div>Lỗ niệu đạo có dịch nhầy màu vàng hoặc màu trắng nhạt.</li>
                        <li class="l3" style="height: 90px;overflow: hidden;"><div class="tchung"><div class="stt">04</div></div>Xuất hiện dịch mủ, khi tiểu tiện đau buốt, quy đầu và bao quy đầu sưng đỏ.</li>
                        <li class="l3" style="height: 70px;overflow: hidden;"><div class="tchung"><div class="stt">05</div></div>Trong niệu đạo có dịch lẫn máu, do lỗ niệu đạo tràn dịch ra quần lót.</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                </div>';
                break;
    }
    return $slides.$str;
}
function bannersOpiton($cate=null,$img=null,$style=null){
    $img_default='';
    if(empty($img)){$img=$img_default;}
    if($cate=='home'){
        $str='';
    }else{
        if(empty($img)){
            $img='/public/frontend/images/quy-trinh-kham/banner.jpg';
        }
        $style='background:#f4f4f6;';
        $catename=' trung tâm điều trị';
        if($cate=='sui-mao-ga'){ $catename='trung tâm điều trị sùi mào gà';}
        if($cate==rewrite_giangmai){ $catename='trung tâm điều trị giang mai';}
        if($cate=='mun-rop-sinh-duc'){ $catename='trung tâm điều trị mụn rộp sinh dục';}
        if($cate==rewrite_benhlau){ $catename='trung tâm điều trị bệnh lậu';}
        if($cate=='lo-trinh-den-phong-kham'){$catename='Lộ trình đến phòng khám';}
        $str='<div id="banners">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg_ban_item1" style="'.$style.'">
                        <div class="ban_item">
                            <a href="">
                                <img src="'.domain.$img.'" alt="kham phu khoa">
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
        array('name'=>'Sùi mào gà','rewrite'=>'Sùi mào gà'),
        array('name'=>'Bệnh lậu','rewrite'=>'Bệnh lậu'),
        array('name'=>'Bệnh giang mai','rewrite'=>'Bệnh giang mai'),
        array('name'=>'Mụn rộp sinh dục','rewrite'=>'Mụn rộp sinh dục'),
    );
    return $arr;
}
function main_ico(){
    $str='<div class="main_item main_ico" style="overflow: hidden">
        <div class="col-lg-3">
            <img src="'.domain.'/public/frontend/img/home/dotphanghiencuu.png">
            <h4>Hệ thống an toàn</h4>
            <p>Quá trình trị liệu quy phạm hóa</p>
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
            <h4>Hệ thống dịch vụ</h4>
            <p>Y tá phục vụ toàn bộ quá trình</p>
            <p style="letter-spacing: -1px;">Sau thủ thuật theo dõi và phục vụ</p>
        </div>
        <div class="col-lg-3">
            <img src="'.domain.'/public/frontend/img/home/giaithuong.png">
            <h4>Chính sách bảo mật</h4>
            <p>Hệ thống bảo mật thông tin</p>
            <p>Bảo vệ thông tin của bạn.</p>
        </div>
        <div class="clear2" style="overflow: hidden"></div>
    </div>';
    return $str;
}
function dm_ha(){
    $str='<div class="cha_kycg">
            <dl>
                <dd class="dd1">
                <div class="pic"><img src="'.domain.'/public/frontend/images/tienliettuyen/nghiencuu.jpg" alt="doi pha nghien cuu"></div>
                    <div class="txt">
                        <h2>ĐỘT PHÁ NGHIÊN CỨU KHOA HỌC</h2>
                        <p>Khoa nam khoa của phòng khám đa khoa Giải Phóng Hà Nội vượt trội so với phòng khám khác</p>
                    </div>
                </dd>
                <dd class="dd2">
                    <div class="pic"><img src="'.domain.'/public/frontend/images/tienliettuyen/chungnhan.jpg" alt="hoat dong xa hoi"></div>
                    <div class="txt">
                        <h2 class="">HOẠT ĐỘNG XÃ HỘI</h2>
                        <p>Phòng khám đa khoa Giải Phóng tổ chức thăm hỏi động viên các bệnh nhân và các em thiếu nhi ngày 1-6.</p>
                    </div>
                </dd>
                <dd class="dd3">
                <div class="pic"><img src="'.domain.'/public/frontend/images/tienliettuyen/hocthuat.jpg" alt="trao doi hoc thuat"></div>
                    <div class="txt">
                        <h2 class="">TRAO ĐỔI HỌC THUẬT</h2>
                        <p>phòng khám đa khoa Giải Phóng Hà Nội tham gia trao đổi học thuật sức khỏe sinh sản nam giới quốc tế và làm báo cáo.</p>
                    </div>
                </dd>
                <dd class="dd4">
                    <div class="pic"><img src="'.domain.'/public/frontend/images/tienliettuyen/kythuat.jpg" alt="tham kham tu thien"></div>
                    <div class="txt">
                        <h2 class="">THĂM KHÁM TỪ THIỆN</h2>
                        <p>phòng khám đa khoa Giải Phóng Hà Nội tổ chức thăm khám từ thiện cho các bệnh nhân.</p>
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
    #footer .fnav dl {background: url(".domain."/public/frontend/img/home/fico2.png) repeat-y left top;height: 230px;overflow: hidden;width: 190px;float: left;}
    #footer .fnav dt {width: 100%;margin: 0 auto;font-size: 11px;background: url(".domain."/public/frontend/img/home/fico1.png) no-repeat left bottom;height: auto;overflow: hidden;padding-bottom: 10px;margin-bottom: 5px;text-transform: uppercase;}
    #footer .fnav dd {width: 180px;margin: 0 auto;line-height: 31px;padding-bottom: 2px;background: url(".domain."/public/frontend/img/home/foot_line.gif) repeat-x left bottom;text-transform: uppercase;font-size: 11px;}
    #footer .fnav dl.w90 dt {width: 180px;}
    #footer .fnav dl.w90 dd {width: 180px;}
    #footer .faddr {width: 200px;float: right;color: #FFFFFF;}
    #footer .faddr .t {height: 130px;}
    #footer .faddr .t p {text-transform: uppercase;font-size: 12px;margin-top: 5px;margin-bottom: 10px;line-height: 20px;padding: 0px 0 5px 0;}
    #footer_btn_box .cons .right {text-align: center;float: right;width: 330px;}
    #footer_btn_box .cons .right .btn_i {height: auto;padding: 12px 0 10px 0;color: #ffffff;text-transform: uppercase;font-weight: bold;font-size: 12px;}
    </style>";
    $str='<div class="row">
<div id="footer">
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
                <img src="'.domain.'/public/frontend/img/home/fwx.gif" style="width: 80px;float: left;">
                <div style="width: 120px;text-align: center;float: left">
                    <p>đường dây nóng<br>tư vấn sức khỏe</p>
                    <b style="font-size: 24px;">'.phone1.'</b>
                </div>
            </div>
            <div>
                <p style="text-transform: uppercase;"><b>số điện thoại：</b></p>
                '.phone2.' - '.phone3.'
                <div class="clear"></div>
                <p style="text-transform: uppercase;"><b>Địa chỉ：</b> 709 - Hoàng Mai - Hà Nội</p>
            </div>
        </div>
    </div>
    <div class="fcopy" id="fcopy"></div>
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
                            <a href="'.link_tuvan.'" ><div class="pic"><img src="/public/frontend/img/home/fbb_ico2.png"></div><p>tư vấn trực tuyến</p></a>
                        </li>
                        <li>
                            <a href="'.link_skype.'" ><div class="pic"><img src="/public/frontend/img/home/skype_btn.png" style="padding-top: 12px;"></div><p>Skype</p></a>
                        </li>
                        <li>
                            <a href="'.link_facebook.'"><div class="pic"><img src="/public/frontend/img/home/fb_btn.png" style="padding-top: 12px;"></div><p>facebook</p></a>
                        </li>
                        <li>
                            <a href="'.link_diachi.'" ><div class="pic"><img src="/public/frontend/img/home/fbb_ico5.png" style="padding-top: 12px;"></div><p>chỉ đường</p></a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <div class="btn_i">Hẹn khám qua mạng được hưởng ưu đãi
                        <img src="http://phukhoa168.com/public/frontend/img/home/ico_dangky_close.png" id="f_close" style="float: right;display: block">
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
        })
</script>
</div>
</div>';
    return $style.$str;
    }
function dangkykham(){
    $khoakham='<select name="khoakham">';
    foreach(loaibenh() as $val){
        $khoakham.='<option value="'.$val['name'].'">'.$val['name'].'</option>';
    }
    $khoakham.='</select>';
    $str='<form name="frmdkk" id="frmdkk" method="post" target="_self">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
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
                                <input type="button" class="btn-success" style="background: #39bbd1;" name="dangkykham" id="dangkykham" value="Đăng ký trực tuyến">
                            </div>
                            <div class="" style="margin-top: 10px;">
                                <input type="reset" class="btn-success" style="" name="nhaplai" value="Nhập lại">
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
function menu_main(){
    $str='<div id="nav">
    <div class="nav_in">
        <div class="logo"><a href="/" target="_blank"><img src="http://namkhoa168.com/public/frontend/img/home/logo.png" /></a></div>
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
    //=============mobile================
function  rewrite_number_phone($phone,$Arr=null){
    if($Arr==null){
        $Arr=array(' ','.');
        $phone=str_replace($Arr,'', $phone);
    }
    return 'tel:'.$phone;
}
function m_popup(){
    $str='<script src="http://phongkhamgiaiphong.com/popup/js/m_popfuns.js"></script>';
    return $str;
}
function m_Addtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/m_funs.js"></script>';
    return $str;
}
function m_CateOption($cate=null){
    //$str='<div class="categories_list">';
    $str='';
    $i=0;
    if($cate!=rewrite_suimaoga){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_suimaoga.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_smg.png" alt="sui mao ga">
                </div>
                <p>Sùi mào gà</p>
            </a>
        </div>';
    }
    if($cate!=rewrite_suimaoganam){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_suimaoganam.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_smg_nam.png" alt="sui mao ga nam gioi">
                </div>
                <p>Sùi mào gà nam giới</p>
             </a>
        </div>';
    }
    if($cate!=rewrite_suimaoganu){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_suimaoganu.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_smg_nu.png" alt="sui mao ga nu gioi">
                </div>
                 <p>Sùi mào gà nữ giới</p>
            </a>
        </div>';
    }
    if($cate!=rewrite_benhlau){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_benhlau.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_bl.png" alt="benh lau">
                </div>
                <p>Bệnh lậu</p>
            </a>
        </div>';
    }
    if($cate!=rewrite_giangmai){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_giangmai.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_gm.png" alt="benh giang mai">
                </div>
                <p>Bệnh giang mai</p>
            </a>
        </div>';
    }
    if($cate!=rewrite_munropsinhduc){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="'.domain.'/'.rewrite_munropsinhduc.'">
                <div class="categories_list_item_content">
                    <img src="http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cate_herpes.png" alt="herpes sinh dục">
                </div>
                <p>Herpes sinh dục</p>
            </a>
        </div>';
    }
    $str.='</div>';
    $str_='<div class="categories_list categories_list'.$i.'">';
    $str=$str_.$str;
    return $str;
}
function m_CateSubOption($cate){
    if($cate['cat_rewrite']==rewrite_suimaoga){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_smg.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_smg.jpg';
        $txt='Sùi mào gà（pointed condyloma）là bệnh do nhiễm Human Papilloma Virus (HPV) gây ra, là bệnh lây qua đường tình dục, biểu hiện chủ yếu là gây ra các tổn thương ở vùng hậu môn, cơ quan sinh sản. Phần lớn phát sinh ở những người ở độ tuổi trung niên từ 18~50 tuổi. trải qua tầm nửa tháng đến 8 tháng, bình quân là 3 tháng ủ bệnh thì phát bệnh. Là bệnh thường gặp, chủ yếu lây qua đường tình dục không an toàn.';
    }
    if($cate['cat_rewrite']==rewrite_suimaoganam){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_smg_nam.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_smg_nam.jpg';
        $txt='Sau khi cơ thể bị lây nhiễm Human Papilloma Virus, thời gian ủ bệnh từ nửa tháng đến 8 tháng, bình quân tầm 3 tháng phát bệnh, do sùi mào gà ở giai đoạn đầu không ngứa không rát, các nhú gai cũng không rõ ràng, vì thế phần lớn người bệnh không có triệu chứng nào. Sùi mào gà nếu phát hiện sớm và điều trị kịp thời thì không quá nghiêm trọng. Nếu phát hiện muộn hoặc tiến hành điều trị không kịp thời, các nốt sùi phát triển tương đối lớn hoặc khi đã lan rộng, thì thông thường phải trải qua điều trị nhiều lần mới có thể loại bỏ hết các nốt sùi.';
    }
    if($cate['cat_rewrite']==rewrite_suimaoganu){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_smg_nu.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_smg_nu.jpg';
        $txt='Sùi mào gà ở nữ giới là do Human Papilloma Virus gây ra bệnh biến ở trên lớp biểu bì tăng sinh, là một trong số các bệnh lây qua đường tình dục. Thời gian ủ bệnh sùi mào gà ở nữ bình quân là 2~3 tháng, triệu chứng bệnh gây ngứa rát cục bộ, đau đớn, số ít người bệnh không có triệu chứng. Sinh trưởng ở các bộ phận: vùng kín, âm đạo, cổ tử cung, quang vùng hậu môn, thường mọc đồng thời ở hai bộ phận, biểu hiện có những nốt mụn màu hồng hoặc màu nâu nhạt, các nốt mụn mọc nhiều dần lên rồi liên kết với nhau trông giống như hoa súp lơ, có tiền sử quan hệ tình dục không an toàn.';
    }
    if($cate['cat_rewrite']==rewrite_benhlau){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_bl.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_bl.jpg';
        $txt='Bệnh lậu (Gonorrhea) là bệnh lây truyền qua đường tình dục do vi khuẩn Neisseria gonorrhea gây ra (gọi tắt là lậu cầu khuẩn). Là bệnh có tỉ lệ phát bệnh đứng thứ 2 trong các bệnh lây qua đường tình dục ở nước ta. Lậu cầu khuẩn là vi khuẩn Neisseria gonorrhea song cầu, khi rời khỏi cơ thể người nó không còn khả năng sinh tồn, khi đó thuốc diệt khuẩn thông thường đều dễ dàng tiêu diệt được vi khuẩn này. Bệnh lậu phần lớn phát sinh ở nam nữ thanh niên đang ở độ tuổi sinh sản';
    }
    if($cate['cat_rewrite']==rewrite_giangmai){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_gm.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_gm.jpg';
        $txt='Giang mai (syphilis）là bệnh mãn tính lây qua đường tình dục do xoắn khuẩn Treponema pallidum (xoắn khuẩn giang mai) gây ra. Chủ yếu lây qua đường tình dục, biểu hiện lâm sàng chia làm giang mai giai đoạn 1, giang mai giai đoạn 2, giang mai giai đoạn 3, giang mai tiềm ẩn và giang mai bẩm sinh...';
    }
    if($cate['cat_rewrite']==rewrite_munropsinhduc){
        $ico_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/ico_cat_herpes.png';
        $img_cat='http://phongkhambenhxahoi.vn/public/mobile/imgs/img_cat_herpes.jpg';
        $txt='Herpes sinh dục（genital herpes) là bệnh nhiễm trùng đường sinh dục do virus herpes simplex (HSV) gây ra. Chủ yếu là do loại HSV-2 gây ra, số nhỏ do HSV-1 gây ra. Là một trong số các bệnh xã hội thường gặp. Herpes sinh dục tái phát nhiều lần, ảnh hưởng lớn đến sức khỏe và tâm lí người bệnh; có thể lây nhiễm chothai nhi qua nhau thai và quá trình đứa trẻ sinh ra bằng đường âm đạo, gây nhiễm bệnh bẩm sinh cho trẻ sơ sinh. Do đó bệnh này cũng là một trong số những vấn đề nghiêm trọng trong vệ sinh công cộng, nên được đề cao việc phòng tránh và điều trị có hiệu quả.';
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
                        <p>'.$cate['cat_name'].'</p>
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
function cd_suimaoga(){
    $Arr=array(
        array('id'=>'1','name'=>'liệu pháp pso','link'=>'/cd6/sui-mao-ga/lieu-phap-pso/','img'=>'/cd6/sui-mao-ga/lieu-phap-pso/lieuphappso.gif')
    );
    return $Arr;
}
