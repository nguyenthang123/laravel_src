<?php
$domain='';
$img='http://phongkhamgiaiphong.com/banner_tet/nk.jpg';
$css='background:#ffec86';
$status='0';
$device='';
if($_GET['domain']){
    $domain=$_GET['domain'];
}
if($_GET['device']){
    $device=$_GET['device'];
}
if($device=='mobile'){
    $img='http://phongkhamgiaiphong.com/banner_tet/m_nk.jpg';
}
$arr_tmh=array(
    'benhtaimuihong.com',
    'dieutritaimuihong.com',
    'dieutritaimuihong.net',
    'khamchuataimuihong.com',
    'khamtaimuihong.net',
    'khamtaimuihong.org',
    'khamtaimuihonghanoi.net',
    'phongkhamhong.com',
    'phongkhammui.com',
    'phongkhamtai.com',
);
$arr_quangcao=array(
    'trihanoi.com',
    'phongkhambenhxahoi.vn',
    'khamnamkhoahanoi.vn',
    'khamchuataimuihong.com'
);
if(in_array($domain,$arr_tmh)){
    $status='1';
    if($device=='mobile'){
        $img='http://phongkhamgiaiphong.com/banner_tet/m_tmh.jpg';
    }else{
        $img='http://phongkhamgiaiphong.com/banner_tet/tmh.jpg';
    }
}
if(in_array($domain,$arr_quangcao)){
    //$status=0;
}
$arr=array('status'=>$status,'img'=>$img,'css'=>$css);
$js=json_encode ($arr);
echo $js;