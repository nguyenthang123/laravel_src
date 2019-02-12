<?php
define("Namespace_Backend", "Admin");
define("namespace_Backend", "admin");
define('dir_root',getcwd());
define('Host','localhost');
define('User_db','pkgpc_0609');
define('Pass_db','12345678');
define('Name_db','pkgpc_0609');
define('showQuery','0');
define("showerr", "abc@");
define('domain','http://'.$_SERVER['SERVER_NAME']);
define('domain1',$_SERVER['SERVER_NAME']);
define('link_tuvan','http://swt.pk709.com/lr/chatpre.aspx?id=ktf27288478&lng=en');
define("link_gioithieu", "/cd6/gioi-thieu");
define("link_tintuc", "/tin-tuc");
define("link_kythuat", 'http://khamnamkhoahanoi.vn/ky-thuat');
define("link_thietbi", "http://khamnamkhoahanoi.vn/thiet-bi");
define("link_lienhe", "/cd6/lo-trinh-kham");
define("link_skype", "skype:phongkhamdakhoagiaiphong@gmail.com?chat");
define("link_facebook", "https://www.facebook.com/phongkhamdakhoagiaiphong/");
define("link_diachi", '/cd6/lo-trinh-kham');
define("mobile_link_gioithieu", '/mobile/cd6/gioi-thieu');
define("mobile_link_lotrinhphongkham", '/mobile/cd6/lo-trinh-kham');
define("link_lotrinhphongkham", '/cd6/lo-trinh-kham');
define("link_quytrinhkham", '/cd6/quy-trinh-kham');
//define("site_benhnamkhoa", 'http://phongkhamgiaiphong.com/namkhoa');
define("site_benhnamkhoa", 'http://khamnamkhoahanoi.vn');
define("site_benhphukhoa", link_tuvan);
//define("site_benhtri", 'http://phongkhamgiaiphong.com/tri');
define("site_benhtri", 'http://trihanoi.com');
//define("site_benhxahoi", 'http://phongkhamgiaiphong.com/bxh');
define("site_benhxahoi", 'http://phongkhambenhxahoi.vn');
define("site_benhdaday", link_tuvan);
define("site_benhhoinach", 'http:/khambenhhoinach.com');
//define("site_benhtaimuihong", 'http://phongkhamgiaiphong.com/tmh');
define("site_benhtaimuihong", 'http://khamtaimuihonghanoi.net/');
define("site_hoinach",'http://khambenhhoinach.com/');
define("phone1", '1900.2622');
define("phone2", '1900.2662');
define("phone3", '0166.352.8899');
define("link_mobile_diachi", 'http://phongkhamgiaiphong.com/mobile/cd6/lo-trinh-kham');
define("link_mobile_gioithieu", 'http://phongkhamgiaiphong.com/mobile/cd6/gioi-thieu');
define("link_mobile_cdsuckhoe", 'http://phongkhamgiaiphong.com//mobile/cdsuckhoe/chuyen-muc-suc-khoe');
define("cat_rw_viemtienliettuyen", 'viem-tien-liet-tuyen');
define("cat_rw_vosinhnam", 'vo-sinh-nam');
define("cat_rw_viemnhiemcoquansinhduc", 'viem-nhiem-co-quan-sinh-duc');
define("cat_rw_lietduong", 'liet-duong');
define("cat_rw_xuattinhsom", 'xuat-tinh-som');
define("cat_rw_hepbaoquydau", 'hep-bao-quy-dau');
define("cat_rw_nutkehaumon", 'nut-ke-hau-mon');
define("cat_rw_polyphaumon", 'polyp-hau-mon');
define("cat_rw_taobon", 'tao-bon');
define("cat_rw_daitienramau", 'dai-tien-ra-mau');
define("cat_rw_gioithieu_tri", 'phong-kham-da-khoa-giai-phong-ha-noi');
define("cat_rw_kythuat_tri", 'ky-thuat');
define("cat_rw_suimaoga", 'sui-mao-ga');
define("cat_rw_benhgiangmai", 'benh-giang-mai');
define("cat_rw_benhlau", 'benh-lau');
define("cat_rw_munropsinhduc", 'mun-rop-sinh-duc');
define("cat_rw_gioithieu_bxh", 'doi-net-ve-phong-kham-da-khoa-giai-phong-ha-noi');
define("cat_rw_kythuat_bxh", 'ky-thuat');
define("cat_rw_mui", 'benh-ve-mui');
define("cat_rw_tai", 'benh-ve-tai');
define("cat_rw_hong", 'benh-ve-hong');
define("cat_rw_gioithieu_tmh", 'gioi-thieu-phong-kham');
define("cat_rw_kythuat_tmh", 'ky-thuat-chuyen-nghiep');
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
define("baiviet_gioithieu", "/gioi-thieu-phong-kham-da-khoa-giai-phong-ha-noi");
function dangkysdt(){
    $str='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/dkdt.js"></script>';
    return $str;
}
function  rewrite_number_phone($phone,$Arr=null){
    if($Arr==null){
        $Arr=array(' ','.');
        $phone=str_replace($Arr,'', $phone);
    }
    return 'tel:'.$phone;
}
function link_facebook() {
      $str = "
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '396918310746091');
  fbq('track', 'PageView');
</script>"."
<noscript><img height='1' width='1' style='display:none'
  src='https://www.facebook.com/tr?id=396918310746091&ev=PageView&noscript=1'
/>
</noscript>";
}
function link_dangkykham(){
    $str='http://phongkhamgiaiphong.com/dangky.php?';
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
        $title='phòng khám đa khoa giải phóng hà nội địa chỉ uy tín tin cậy';
    }
    if(empty($keywords)){
        $keywords='Phòng khám đa khoa giải phóng hà nội chuyên điều trị nam khoa uy tín. Phòng khám đi tiên phong trong lĩnh vực khám chữa bệnh tại hà nội';
    }
    if(empty($description)){
        $description='Phòng khám đa khoa giải phóng hà nội chuyên điều trị nam khoa uy tín. Phòng khám đi tiên phong trong lĩnh vực khám chữa bệnh tại hà nội';
    }
    $arr=array('title'=>$title,'keywords'=>$keywords,'description'=>$description);
    return $arr;
}
function loaibenh(){
    $Arr=array(
        array('name'=>'Bệnh nam giới'),
        array('name'=>'Bệnh nữ giới'),
        array('name'=>'Bệnh trĩ'),
        array('name'=>'Bệnh xã hội'),
        array('name'=>'Bệnh dạ dày'),
        array('name'=>'Bệnh hôi nách'),
        array('name'=>'Tai mũi họng'),
    );
    return $Arr;
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
    $str='
    <script src="http://phongkham168.com/popup/js/popfuns.js"></script>
        <script src="http://phongkham168.com/popup/js/popnamkhoa168.com.js"></script>
    ';
    //return $str;
}
function Addleft(){
    $css='<style>
    #swt_lt_right_box{
    height:501px;
    width:79px;
    background:url(http://namkhoa168.com/public/frontend/img/home/swt_right_box2.png) no-repeat left top;
    z-index: 2147483647;
    position: fixed !important;
    left:9px;
    top:80px;
}
#swt_lt_right_box ul,#swt_lt_right_box li{ list-style:none;}
#swt_lt_right_box ul{ height:auto; padding-top:10px;margin: 0;
    padding: 0;}
#swt_lt_right_box li{ height:92px; cursor:pointer;width: 100%;}
#swt_lt_right_box li a{ display:block; height:82px; cursor:pointer; width: 100%; text-align:center; padding-top:10px;text-decoration: none}
#swt_lt_right_box li a img{ display:inline;}
#swt_lt_right_box li .duongke{width: 80%;border-bottom: 1px dashed #ccc;margin: auto;}
#swt_lt_right_box li a p{
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
    font-size: 9px;
    font-weight: bold;
    margin-top: 8px;
    text-decoration: none;
}
#swt_lt_right_box li.hover a img{transform:rotateY(360deg);-ms-transform:rotateY(360deg);-webkit-transform:rotateY(360deg);-o-transform:rotateY(360deg);-moz-transform:rotateY(360deg);transition: all .5s ease-out;moz-transition: all .5s ease-out;-webkit-transition: all .5s ease-out;-o-transition: all .5s ease-out;}
</style>
';
    $str='<div id="swt_lt_right_box">
        <ul>
            <li class="">
                <a href="'.link_tuvan.'">
                    <img src="http://namkhoa168.com/public/frontend/img/home/ico_bstv.png">
                    <p>bác sỹ tư vấn</p>
                </a>
            </li>
            <li class="">
                <div class="duongke" style=""></div>
                <a href="'.link_tuvan.'">
                    <img src="http://namkhoa168.com/public/frontend/img/home/ico_dttv.png">
                    <p>điện thoại<br>tư vấn</p>
                </a>
            </li>
            <li class="">
                <div class="duongke" style="margin-top: 10px;"></div>
                <a href="'.link_skype.'">
                    <img src="http://namkhoa168.com/public/frontend/img/home/ico_skype_r.png">
                    <p>skype</p>
                </a>
            </li>
            <li class="">
                <div class="duongke" style=""></div>
                <a href="'.link_facebook.'">
                    <img src="http://namkhoa168.com/public/frontend/img/home/ico_fb.png">
                    <p>facebook</p>
                </a>
            </li>
        </ul>
        <script>
            $(document).ready(function(){
                $("#swt_lt_right_box li").hover(function(){
                    $(this).addClass("hover");
                },function(){
                    $(this).removeClass("hover");
                });
            })
        </script>
    </div>';
    $js='<script>
    var h = screen.height;
    var h_top =((h-500)/2);
    $("#swt_lt_right_box").css("top",h_top);
    </script>';
    $str2='<script src="http://phongkham168.com/addleft/js/leffuns.js"></script>
        <script src="http://phongkham168.com/addleft/js/lefnamkhoa168.com.js"></script>';
    //return $str2;
}
function line_chat(){
    $str='<script language="javascript" src="http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&amp;lng=en"></script>';
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
                        <li class=""><div class="stt" style="margin-left: 77px;">
                            <input type="button" class="btn-success" style="background: #177fc8;" name="dangky" id="dangkykham" value="Đăng ký trực tuyến"></div>
                        </li>
                    </ul>
                </div>
            </form>';
    $str2='<script>$(function () {
    $("#thoigian3").datepicker({dateFormat: "yy-mm-dd"});
});</script>';
    return $str.$str2;
}
    //=============mobile================
    function m_popup(){
        $str='<div id="popup" style="padding-top: 12px;width: 280px;display: none;position: fixed;z-index: 1000;
  border: 2px solid rgb(211, 21, 121);
  border-radius: 6px;
  padding-bottom: 7px;
  background: rgb(255, 255, 255);"  class="ui-draggable">
			<div style="">	<div id="popup-close" style="  width: 26px;
    position: absolute;
    top: -16px;
    left: 268px;
    z-index: 99;"><img src="http://khamphukhoa168.com/images/close.png" height=""></div>
			</div>
			<div style="  clear: both;">
			<p style="   padding-top: 0px;  text-align: center;  font-weight: 600;  margin-bottom: 11px;  font-size: 16px;">Click bác sỹ tư vấn trực tuyến </p>
			</div>
			<div class="tu-van-dien-thoai" style="  clear: both;  padding-top: 8px;">
				<p style="  background: #0257b7;  background-image: linear-gradient( #0257b7, #03336a );"><a target="_blank" href="'.link_tuvan.'"> Tư vấn trực tuyến </a> </p>
				<p style="  background: #fc861d;  background-image: linear-gradient( #fc861d, #df6a01);"><a href="tel:18006166"> Điện thoại tư vấn</a> </p>
			</div>
</div>';
        $str2='<script type="text/javascript" src="http://phongkhamgiaiphong.com/shake/js/shake.js"></script>';
    return $str.$str2;
}
function m_Addtop(){
    return ;
}
function danhmuc(){
    $arr=array(
        array('id'=>'1','name'=>'Nam Khoa','link'=>site_benhnamkhoa,'class'=>'hm_namkhoa',
            'cate'=>array(
                array('id'=>'11','name'=>'Yếu sinh lý','link'=>'http://namkhoa168.com/yeu-sinh-ly'),
                array('id'=>'12','name'=>'Chỉnh hình cơ quan sinh dục','link'=>'http://namkhoa168.com/chinh-hinh-co-quan-sinh-duc'),
                array('id'=>'13','name'=>'Bệnh tiền liệt tuyến','link'=>'http://namkhoa168.com/benh-tien-liet-tuyen'),
                array('id'=>'14','name'=>'Nhiễm trùng đường tiết niệu','link'=>'http://namkhoa168.com/nhiem-trung-duong-tiet-nieu'),
                array('id'=>'15','name'=>'Vô sinh nam','link'=>'http://namkhoa168.com/vo-sinh-nam'),
                array('id'=>'16','name'=>'Xuất tinh sơm','link'=>'http://namkhoa168.com/xuat-tinh-som'),
                array('id'=>'17','name'=>'Liệt dương','link'=>'http://namkhoa168.com/liet-duong'),
                array('id'=>'18','name'=>'Di tinh','link'=>'http://namkhoa168.com/di-tinh'),
                array('id'=>'19','name'=>'Viêm quy đầu','link'=>'http://namkhoa168.com/viem-quy-dau'),
            ),
            'chuyende'=>array(
                array('id'=>'111','name'=>'Cắt bao quy đầu','link'=>'http://namkhoa168.com/cd6/chinh-hinh/cat-bao-quy-dau/','img'=>'http://khamnamkhoa168.com/images/stories/cd/cd1.jpg'),
                array('id'=>'111','name'=>'Vô sinh nam','link'=>'http://namkhoa168.com/cd6/viem-duong-tiet-nieu/viem-nhiem-co-quan-sinh-duc/','img'=>'http://khamnamkhoa168.com/images/stories/chuyen-de/vo-sinh-nam-1.jpg'),
                array('id'=>'112','name'=>'Xuất tinh sớm','link'=>'http://namkhoa168.com/cd6/xuat-tinh-som/','img'=>'http://khamnamkhoa168.com/viemtuyentienliet/css/images/sinh-ly-yeu.png')
            ),
            'banner'=>'/public/frontend/images/home/namgioi.jpg'
        ),
        /*array('id'=>'2','name'=>'Phụ khoa','link'=>site_benhphukhoa,'class'=>'hm_phukhoa',
            'cate'=>array(
                array('id'=>'21','name'=>'Kế hoạch hóa','link'=>'http://phukhoa168.com/ke-hoach-hoa'),
                array('id'=>'22','name'=>'Bệnh cổ tử cung','link'=>'http://phukhoa168.com/benh-co-tu-cung'),
                array('id'=>'23','name'=>'Chỉnh hình phụ khoa','link'=>'http://phukhoa168.com/chinh-hinh-phu-khoa'),
                array('id'=>'24','name'=>'Viêm nhiễm phụ khoa','link'=>'http://phukhoa168.com/viem-nhiem-phu-khoa'),
                array('id'=>'25','name'=>'Vô sinh','link'=>'http://phukhoa168.com/vo-sinh'),
                array('id'=>'26','name'=>'Nội tiết tố nữ','link'=>'http://phukhoa168.com/noi-tiet-to-nu'),
                array('id'=>'27','name'=>'Viêm cổ tử cung','link'=>'http://phukhoa168.com/viem-co-tu-cung'),
                array('id'=>'28','name'=>'U nang cổ tử cung','link'=>'http://phukhoa168.com/u-nang-co-tu-cung'),
                array('id'=>'29','name'=>'Viêm âm đạo','link'=>'http://phukhoa168.com/viem-am-dao')
            ),
            'chuyende'=>array(
                array('id'=>'221','name'=>'Viêm niệu đạo','link'=>'http://phukhoa168.com/cd6/viem-nhiem-phu-khoa/viem-nieu-dao/','img'=>'http://phukhoa168.com/cd6/viem-nhiem-phu-khoa/viem-nieu-dao/images/default.jpg'),
                array('id'=>'223','name'=>'Viêm lộ tuyến','link'=>'http://phukhoa168.com/cd5/benh-co-tu-cung/viem-lo-tuyen/','img'=>'http://phukhoa168.com/cd5/benh-co-tu-cung/viem-lo-tuyen/images/default.jpg')
            ),
            'banner'=>'/public/frontend/images/home/nugioi.jpg'
        ),*/
        array('id'=>'3','name'=>'Bệnh trĩ','link'=>site_benhtri,'class'=>'hm_tri',
            'cate'=>array(
                array('id'=>'31','name'=>'Bệnh Trĩ','link'=>'http://benhtri168.com/tri'),
                array('id'=>'32','name'=>'Trĩ nội','link'=>'http://benhtri168.com/tri-noi'),
                array('id'=>'33','name'=>'Trĩ ngoại','link'=>'http://benhtri168.com/tri-ngoai'),
                array('id'=>'34','name'=>'Trĩ hỗn hợp','link'=>'http://benhtri168.com/tri-hon-hop'),
                array('id'=>'35','name'=>'Nứt kẽ hậu môn','link'=>'http://benhtri168.com/nut-ke-hau-mon'),
                array('id'=>'36','name'=>'Apxe hậu môn','link'=>'http://benhtri168.com/ap-xe-hau-mon'),
                array('id'=>'37','name'=>'Rò hậu môn','link'=>'http://benhtri168.com/ro-hau-mon'),
                array('id'=>'38','name'=>'Tắc mạch trĩ','link'=>'http://benhtri168.com/tac-mach-tri'),
                array('id'=>'39','name'=>'Đại tiện ra máu','link'=>'http://benhtri168.com/dai-tien-ra-mau')
            ),
            'chuyende'=>array(
                array('id'=>'321','name'=>'Hoạt động công ích','link'=>'http://benhtri168.com/hoat-dong-cong-ich','img'=>'http://tructranghaumon.com/images/bi-benh-tri-do-tao-bon-phai-lam-the-nao.jpg'),
                array('id'=>'322','name'=>'Thiết bị','link'=>'http://benhtri168.com/thiet-bi-phong-kham','img'=>'http://tructranghaumon.com/images/banners/tri-noi.jpg'),
                array('id'=>'323','name'=>'Dịch vụ đặc biệt','link'=>'http://benhtri168.com/dich-vu-dac-biet','img'=>'http://tructranghaumon.com/images/banners/tri-ngoai.jpg')
            ),
            'banner'=>'/public/frontend/images/home/benhtri.jpg'
        ),
        array('id'=>'4','name'=>'Bệnh xã hội','link'=>site_benhxahoi,'class'=>'hm_bxh',
            'cate'=>array(
                array('id'=>'41','name'=>'Bệnh Lậu','link'=>'http://benhxahoi168.net/benh-lau'),
                array('id'=>'42','name'=>'Bệnh giang mai','link'=>'http://benhxahoi168.net/benh-giang-mai'),
                array('id'=>'43','name'=>'Sùi mào gà','link'=>'http://benhxahoi168.net/sui-mao-ga'),
                array('id'=>'42','name'=>'Mụn rộp sinh dục','link'=>'http://benhxahoi168.net/mun-rop-sinh-duc')
            ),
            'chuyende'=>array(
                array('id'=>'421','name'=>'Sùi mào gà','link'=>'http://chuabenhxahoi.net/2015/sui-mao-ga/','img'=>'http://chuabenhxahoi.net/images/banners/poster3.gif'),
                array('id'=>'422','name'=>'Bệnh lậu','link'=>'http://chuabenhxahoi.net/benh-lau/phu-nu-nam-gioi-bi-benh-lau-thi-phai-lam-sao','img'=>'http://chuabenhxahoi.net/images/banners/poster1.gif'),
                array('id'=>'423','name'=>'Bệnh giang mai','link'=>'http://chuabenhxahoi.net/benh-giang-mai/benh-giang-mai-bam-sinh-bieu-hien-nhu-the-nao','img'=>'http://chuabenhxahoi.net/images/banners/poster2.gif')
            ),
            'banner'=>'/public/frontend/images/home/benhxahoi.jpg'
        ),
        /*array('id'=>'5','name'=>'Bệnh dạ dày','link'=>site_benhdaday,'class'=>'hm_daday',
            'cate'=>array(
                array('id'=>'51','name'=>'Co thắt dạ dày','link'=>'http://daday168.com/co-that-da-day'),
                array('id'=>'52','name'=>'Polyp dạ dày','link'=>'http://daday168.com/polyp-da-day'),
                array('id'=>'53','name'=>'Viêm dạ dày','link'=>'http://daday168.com/viem-da-day'),
                array('id'=>'54','name'=>'Viêm loét dạ dày','link'=>'http://daday168.com/viem-loet-da-day'),
                array('id'=>'55','name'=>'Helicobacter pylori','link'=>'http://daday168.com/helicobacter-pylori'),
                array('id'=>'56','name'=>'Sa dạ dày','link'=>'http://daday168.com/sa-da-day'),
                array('id'=>'57','name'=>'Viêm hạng vị','link'=>'http://daday168.com/viem-hang-vi'),
                array('id'=>'58','name'=>'Xuất huyết dạ dày','link'=>'http://daday168.com/xuat-huyet-da-day')
            ),
            'chuyende'=>array(
                array('id'=>'521','name'=>'Đau dạ dày','link'=>'http://dieutridaday.net/dau-da-day-an-gi-va-khong-nen-an-gi','img'=>'http://dieutridaday.net/wp-content/uploads/2015/06/meo-nhanh-chong-tri-day-bung-cho-dan-van-phong-300x169.jpg'),
                array('id'=>'522','name'=>'Co thắt dạ dày','link'=>'http://dieutridaday.net/mot-so-meo-phong-tranh-co-that-da-day','img'=>'http://dieutridaday.net/wp-content/uploads/2015/05/mot-so-meo-phong-tranh-co-that-da-day.jpg'),
                array('id'=>'523','name'=>'Nguyên nhân co thắt dạ dày','link'=>'http://dieutridaday.net/nguyen-nhan-gay-co-that-da-day','img'=>'http://dieutridaday.net/wp-content/uploads/2015/05/nguyen-nhan-gay-co-that-da-day.jpg')
            ),
            'banner'=>'/public/frontend/images/home/benhdaday.jpg'
        ),*/
        array('id'=>'6','name'=>'Bệnh hôi nách','link'=>site_benhhoinach,'class'=>'hm_hoinach',
            'cate'=>array(
                array('id'=>'61','name'=>'Nguyên nhân bệnh','link'=>'http://khambenhhoinach.com/benh-hoi-nach/nguyen-nhan-benh-hoi-nach'),
                array('id'=>'62','name'=>'Nguy hại bệnh','link'=>'http://khambenhhoinach.com/benh-hoi-nach/nguy-hai'),
                array('id'=>'63','name'=>'Chẩn đoán bệnh','link'=>'http://khambenhhoinach.com/benh-hoi-nach/chan-doan-benh-hoi-nach'),
                array('id'=>'64','name'=>'Cách chăm sóc','link'=>'http://khambenhhoinach.com/benh-hoi-nach/cach-cham-soc-benh-hoi-nach'),
                array('id'=>'65','name'=>'Phương pháp điều trị','link'=>'http://khambenhhoinach.com/dieu-tri-benh/phuong-phap'),
                array('id'=>'66','name'=>'Chi phí bệnh','link'=>'http://khambenhhoinach.com/dieu-tri-benh/chi-phi'),
                array('id'=>'67','name'=>'Thời gian điều trị','link'=>'http://khambenhhoinach.com/dieu-tri-benh/thoi-gian'),
                array('id'=>'68','name'=>'Chuyên khoa','link'=>'http://khambenhhoinach.com/dieu-tri-benh/pk-chuyen-khoa'),
                array('id'=>'68','name'=>'Quy trình phẫu thuật','link'=>'http://khambenhhoinach.com/qua-trinh-phau-thuat-hoi-nach')
            ),
            'chuyende'=>array(
                array('id'=>'621','name'=>'Điều trị hôi nách','link'=>'http://khambenhhoinach.com/2015/chuyen-de-hoi-nach/','img'=>'http://khambenhhoinach.com/images/kbm/1.jpg'),
                array('id'=>'622','name'=>'Giải quyết chứng hôi nách','link'=>'http://khambenhhoinach.com/giai-quyet-chung-hoi-nach-lau-nam-khong-kho','img'=>'http://khambenhhoinach.com/images/kbm/2.jpg'),
                array('id'=>'623','name'=>'Chữa bệnh hôi nách như thế nào','link'=>'http://khambenhhoinach.com/chua-benh-hoi-nach-nhu-nao','img'=>'http://khambenhhoinach.com/images/kbm/4.jpg')
            ),
            'banner'=>'/public/frontend/images/home/benhhoinach.jpg'
        ),
        array('id'=>'7','name'=>'Tai mũi họng','link'=>site_benhtaimuihong,'class'=>'hm_taimuihong',
            'cate'=>array(
                array('id'=>'71','name'=>'Viêm mũi','link'=>'http://taimuihong168.net/category/trung-tam-khoa-mui/viem-mui/'),
                array('id'=>'72','name'=>'Viêm xoang mũi','link'=>'http://taimuihong168.net/category/trung-tam-khoa-mui/viem-xoang-mui/'),
                array('id'=>'73','name'=>'Xuất huyết mũi','link'=>'http://taimuihong168.net/category/trung-tam-khoa-mui/xuat-huyet-mui/'),
                array('id'=>'74','name'=>'Viêm amindan','link'=>'http://taimuihong168.net/category/trung-tam-ve-hong/viem-amindan/'),
                array('id'=>'75','name'=>'Viêm hầu họng','link'=>'http://taimuihong168.net/category/trung-tam-ve-hong/viem-hau-hong/'),
                array('id'=>'76','name'=>'Viêm họng','link'=>'http://taimuihong168.net/category/trung-tam-ve-hong/viem-hong/'),
                array('id'=>'77','name'=>'Viêm tai giữa','link'=>'http://taimuihong168.net/category/trung-tam-ve-tai/viem-tai-giua/'),
                array('id'=>'78','name'=>'Ù tai','link'=>'http://taimuihong168.net/category/trung-tam-ve-tai/u-tai/'),
                array('id'=>'79','name'=>'Điếc tai','link'=>'http://taimuihong168.net/category/trung-tam-ve-tai/diec-tai/'),
            ),
            'chuyende'=>array(
                array('id'=>'721','name'=>'Tìm hiểu bệnh viêm mũi','link'=>'http://taimuihong168.net/benh-ve-mui/tim-hieu-benh-viem-mui/','img'=>'http://taimuihong168.net/wp-content/uploads/2016/06/viem-xoang-1.jpg'),
                array('id'=>'722','name'=>'Tác hại chứng ù tai','link'=>'http://taimuihong168.net/trung-tam-ve-tai/tac-hai-cua-chung-u-tai-nhu-the-nao-3/','img'=>'http://taimuihong168.net/wp-content/uploads/2016/05/images-16.jpg'),
                array('id'=>'723','name'=>'Viêm họng có nhiều đờm','link'=>'http://taimuihong168.net/benh-ve-hong/cach-chua-viem-hong-co-nhieu-dom/','img'=>'http://taimuihong168.net/wp-content/uploads/2016/06/kham-hong-hieu-qua-672x372.jpg')
            ),
            'banner'=>'/public/frontend/images/home/benhtaimuihong.jpg'
        ),
    );
    return $arr;
}
function trieuchungOption($cate=null){
    $slides='<div id="carousel-id" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="http://khamnamkhoahanoi.vn/public/frontend/images/tienliettuyen/slide1.jpg">        
                    </div>
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="http://khamnamkhoahanoi.vn/public/frontend/images/tienliettuyen/slide2.jpg">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
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
function sidebar_duongdaynong(){
    $str='<div class="left">
                <dl>
                    <dd><a href="'.link_tuvan.'" ><div class="pic"><img src="/public/frontend/img/tien-liet-tuyen/ico_tvtt.png"></div><p>tư vấn<br> trực tuyến</p></a></dd>
                    <dd><a href="'.link_skype.'" ><div class="pic"><img src="/public/frontend/img/tien-liet-tuyen/ico_skype.png"></div><p>skype</p></a></dd>
                    <dd><a href="'.link_tuvan.'" ><div class="pic"><img src="/public/frontend/img/tien-liet-tuyen/ico_dktt.png"></div><p>đăng ký <br>trực tuyến</p></a></dd>
                    <dt>
                    <p style="font-size: 12px;">đường dây tư vấn sức khỏe</p>
                    <b>'.phone1.' - '.phone2.'</b>
                    </dt>
                </dl>
            </div>';
    return $str;
}