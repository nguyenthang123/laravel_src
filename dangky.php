<?php
ob_start();
$domain=$_SERVER['HTTP_HOST'];
$t=time()+(7*60*60);
$today=date('Y-m-d H:i:s',$t);
$flag='0';
$hoten='';
$dienthoai='';
$khoakham='';
$mota='';
$channel='';
$ip='';
if(!empty($_SERVER['HTTP_REFERER'])){
    $link_back=$_SERVER['HTTP_REFERER'];
}else{
    $link_back=$domain;
}
require_once('Mobile_Detect.php');
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$user_agent = $detect->getUserAgent();
require_once('define.php');
$dbHost =Host;
$dbUsername = User_db;
$dbPassword = Pass_db;
$dbDatabase = Name_db;
$mysqli=new mysqli($dbHost, $dbUsername, $dbPassword,$dbDatabase) or die ("Unable to connect to Database Server.");
//giam ma khoi
if(!empty($_GET['data'])){
    $data=$_GET['data'];
    $data_de=base64_decode($data);
    $json=json_decode($data_de);
    $Arr=(array)$json;
    if(!empty($Arr['uri'])){$link_back=$Arr['uri'];}
    if(!empty($Arr['hoten'])){$hoten=$Arr['hoten'];}
    if(!empty($Arr['dienthoai'])){$dienthoai=$Arr['dienthoai'];}
    if(!empty($Arr['khoakham'])){$khoakham=$Arr['khoakham'];}
    if(!empty($Arr['mota'])){$mota=$Arr['mota'];}
    if(!empty($Arr['thoigian'])){$thoigian=$Arr['thoigian'];}
    if(!empty($Arr['ip'])){$ip=$Arr['ip'];}
}else{//url base
    if(!empty($_GET['hoten'])){$hoten=$_GET['hoten'];}
    if(!empty($_GET['dienthoai'])){$dienthoai=$_GET['dienthoai'];}
    if(!empty($_GET['khoakham'])){$khoakham=$_GET['khoakham'];}
    if(!empty($_GET['mota'])){$mota=$_GET['mota'];}
    if(!empty($_GET['thoigian'])){$thoigian=$_GET['thoigian'];}
    if(!empty($_GET['thoigian'])){$thoigian=$_GET['thoigian'];}
    if(!empty($_GET['ip'])){$ip=$_GET['ip'];}
}
if($hoten!='' && $dienthoai!=''){
    $flag='1';
}
if($flag!='0'){
    $sql="SELECT id FROM tbldangky WHERE hoten=N'".$hoten."' AND dienthoai='".$dienthoai."' AND date(created_at)='".date('Y-m-d')."' LIMIT 1";
    $rs=$mysqli->query($sql);
    if($rs->num_rows > 0){
        echo 'Bạn đã đăng ký, Xin cảm ơn';
        header("Location: ".$link_back);
        exit();
    }else{
        $sql="insert into tbldangky(ip,hoten,dienthoai,khoakham,thoigian,mota,channel,link,device,user_agent,created_at,updated_at) values (N'".$ip."',N'".$hoten."',N'".$dienthoai."',N'".$khoakham."',N'".$thoigian."',N'$mota',N'$channel',N'$link_back',N'$deviceType',N'$user_agent',N'$today',N'$today')";
        $rs=$mysqli->query($sql);
        if($rs=="1"){
           /* echo "<script>alert('Bạn đã đặt hẹn thành công.');</script>";
            header("Location: ".$link_back);*/
            echo "<script>alert('Bạn đã đặt hẹn thành công'); window.location.href='".$link_back."';</script>";
            exit();
        }else{
            echo "<script>alert('Bạn đặt hẹn không thành công.Mời bạn đặt hẹn lại.');</script>";
            header("Location: ".$link_back);
            exit();
        }
    }
}else{
    header("Location: ".$link_back);
    exit();
}
die();