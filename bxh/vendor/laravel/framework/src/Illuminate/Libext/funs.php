<?php
namespace Illuminate\Libext;

class funs{
    public function breadcum($arr){
        $str='<a href="'.domain.'"> Trang chủ </a>';
        $link=domain;
        foreach($arr as $val){
            if(!empty($val['rewrite'])){
                if($val['type']=="a"){
                    $str.='<a href="'.$link.'/'.$val['rewrite'].'"> >> '.$val['name'].'</a>';
                    $link=$link.'/'.$val['rewrite'];
                }
                if($val['type']=="h1"){
                    $str.='<h1> '.$val['name'].'</h1>';
                }
                if(empty($val['type'])){
                    $str.=' >> '.$val['name'];
                }
            }
        }
        return $str;
    }
    public function pre($arr){
        echo '<pre>';print_r($arr);echo '<pre>';
    }
    //===phan javascript===
    public function confirm($mes,$link){
        echo '<script type="application/javascript">if( !confirm("'.$mes.'")){window.location.href="'.$link.'";};</script>';
        //if( !confirm('Quý khách muốn đăng ký sử dụng dịch vụ mWorks. Vui lòng xác nhận.') ) return false;
    }
    public function confirm2($mes,$link=null,$link2=null){
        echo '<script type="application/javascript">if( !confirm("'.$mes.'")){window.location.href="'.$link.'";}else{window.location.href="'.$link2.'";};</script>';
    }
    public function alert($mes){
        echo '<script type="text/javascript">alert("'.$mes.'"); </script>';
    }
    public function redirect($link){
        echo '<script type="text/javascript">window.location.href="'.$link.'"; </script>';
    }
    public function refresh(){
        echo '<script type="text/javascript">window.location.href=(document.URL); </script>';
    }
    public function getRefer(){
        if(!empty($_SERVER['HTTP_REFERER'])){
            $link=$_SERVER['HTTP_REFERER'];
        }else{
            $link='/';
        }
        return $link;
    }
    public function redirect_refer(){
        if(!empty($_SERVER['HTTP_REFERER'])){
            $link=$_SERVER['HTTP_REFERER'];
        }else{
            $link='/';
        }
        echo '<script type="text/javascript">window.location.href="'.$link.'"; </script>';
    }
    //het phan javacrip
    //===phan xu ly so dien thoai
    //convert to 84
    public function mobiledefault($phone_number){
        $fist=substr($phone_number,0,1);
        if($fist=="0"){
            $len=strlen($phone_number);
            $strphone=substr($phone_number,1,$len-1);
            $phone_number='84'.$strphone;
            return $phone_number;
        }
        if($fist=="9" || $fist=="1"){
            $phone_number='84'.$phone_number;
            return $phone_number;
        }
        return $phone_number;
    }
    public function mobiledefault0($phone_number){
        $fist=substr($phone_number,0,2);
        if($fist=="84"){
            $len=strlen($phone_number);
            $strphone=substr($phone_number,2,$len-2);
            $phone_number='0'.$strphone;
            return $phone_number;
        }
        if($fist=="9" || $fist=="1"){
            $phone_number='0'.$phone_number;
            return $phone_number;
        }
        return $phone_number;
    }
    public function dausomobi(){
        $arr=array('090','8490','093','8493','0120','84120','0121','84121','0122','84122','0126','84126','0128','84128');
        return $arr;
    }
    public function dausoviettel(){
        $arr=array('096','8496','097','8497','098','8498','0162','84162','0163','84163','0164','84164','0165','84165','0166','84166','0167','84167','0168','84168','0169','84169');
        return $arr;
    }
    public function dausovinaphone(){
        $arr=array();
        return $arr;
    }
    public function dausovietnammobile(){
        $arr=array();
        return $arr;
    }
    public function checkdauso($sdt,$arr){
        $sdt=strip_tags($sdt);
        $flag="-1";
        foreach($arr as $val){
            $len=strlen($val);
            $strsdt=substr($sdt,0,$len);
            if($strsdt==$val){
                return $flag="1";
            }
        }
        return $flag;
    }
    function checksdt($sdt,$mang=null){
        //-1 sdt null,-2 sdt khong phai dang so,-3 k nam trong khoang sdt,-4 khong phai sdt,-5 khong thuc nha mang x
        if(empty($sdt)){
            return '-1';
        }
        else{
            if(!is_numeric($sdt)){
                return '-2';
            }else{
                $len=strlen($sdt);
                if($len>13 || $len<9){
                    return '-3';
                }else{
                    $a=array('0','84','+84','9','1');
                    $flag='';
                    foreach($a as $key=>$val){
                        $len=strlen($val);
                        $substr=substr($sdt,0,$len);
                        if($substr==$val){
                            $lensdt=strlen($sdt);
                            $subsdt=substr($sdt,$len,$lensdt);
                            $sdt='0'.$subsdt;
                            $flag=1;
                            break;
                        }
                    }
                    if($flag!="1"){
                        return '-4';
                    }else{
                        //mac dinh la mang viettel
                        if(empty($mang)){
                            $mang=$this->dausoviettel();
                        }
                        if(!empty($mang)){
                            $flag='';
                            foreach($mang as $key=>$val){
                                $len=strlen($val);
                                $substr=substr($sdt,0,$len);
                                if($substr==$val){
                                    $flag=1;
                                    break;
                                }
                            }
                            if($flag!="1"){
                                return '-5';
                            }else{
                                return 1;
                            }
                        }
                    }
                }
            }
        }
    }
    public function infochecksdt($sdt,$mang=null){
        if($mang=="1"){
            $nhamang=' Vinaphone ';
            $dauso=$this->dausovinaphone();
        }
        elseif($mang=="2"){
            $nhamang=' Mobifone ';
            $dauso=$this->dausomobi();
        }
        elseif($mang=="3"){
            $nhamang=' Vietnammobile ';
            $dauso=$this->dausovietnammobile();
        }
        else{
            $nhamang=' Viettel ';
            $dauso=$this->dausoviettel();
        }
        $info=$this->checksdt($sdt,$dauso);
        $mes='';
        $flag='';
        if($info=="-1"){
            $mes='Số điện thoại không được để trống. \n';
            $flag="-1";
        }
        if($info=="-2"){
            $mes='Số điện thoại bao gồm các chữ số. \n';
            $flag="-1";
        }elseif($info=="-3"){
            $mes='Số điện thoại phải có độ dài 10-11 chữa số. \n';
            $flag='-1';
        }elseif($info=="-4"){
            $mes='Số điện thoại không đúng định dạng. \n';
            $flag='-1';
        }elseif($info=="-5"){
            $mes='Số điện thoại không phải mạng '.$nhamang.'. \n';
            $flag='-1';
        }
        $arr=array('flag'=>$flag,'mes'=>$mes);
        return $arr;
    }
    //===het phan xu ly so dien thaoi===

    //fetch extention;
    public function getExt_uri($str){
        $posDot=strrpos($str,'/');
        if(isset($posDot)){
            $ext=substr($str,$posDot+1);
        }
        return strtolower($ext);
    }
    public function getUri(){
        $uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        return $uri;
    }
    public function getParameteruri(){
        $uri=$this->getUri();
        $parts = parse_url($uri);
        if(!empty($parts['query'])){
            parse_str($parts['query'], $query);
        }else{
            $query='';
        }
        return $query;
    }
    public function getExt($str){
        $posDot=strrpos($str,'.');
        if(isset($posDot)){
            $ext=substr($str,$posDot);
        }
        return strtolower($ext);
    }
    public function allow_type_image(){
        $arr=array(".jpg", ".jpeg",".gif",".png");
        return $arr;
    }
    public function allow_zise_image(){
        $zise=10*1024*1024;
        return $zise;
    }
    public function allow_type_video(){
        $arr=array(".mp4",".MP4", ".mp3",".webm",".ogg");
        return $arr;
    }
    public function allow_zise_video(){
        $zise=100*1024*1024;
        return $zise;
    }
    public function creat_date($format=null){
        if(empty($format)){
            $str=gmdate('Y-m-d');
        }else{
            $str=gmdate($format);
        }
        return $str;
    }
    public function uploadFile($url,$files,$filesize,$allowType,$rewrite_name=null){
        $fName		=$files['name'];
        $ftmpName	=$files['tmp_name'];
        $fSize		=$files['size'];
        $fExt		=$this->getExt($fName);
        $fileSize   =$filesize;
        $do_up=0;
        if(!in_array($fExt,$allowType)){
            $do_up=-1;
            return "-1";
            die;
        }
        if($fSize>$fileSize){
            $do_up=-1;
            return "-2";
            die;
        }
        if($do_up==0){
            /*$fName=str_replace(" ","-",$fName);
            $fName=time()."_".$fName;
            $url=$url.'/'.$fName;
            if(move_uploaded_file($ftmpName,$url)){
                return $fName;
            }*/
            if(!empty($rewrite_name)){
                $fName=$rewrite_name;
            }else{
                $posDot=strrpos($fName,'.');
                if(isset($posDot)){
                    $fName=substr($fName,0,$posDot);
                }
            }
            $fName=$this->unicode($fName);
            $fName=$this->substr_font($fName,40,'-');
            $fName=time()."-".$fName.$fExt;
            $url=$url.'/'.$fName;
            if(move_uploaded_file($ftmpName,$url)){
                return $fName;
            }
        }
    }
    public function delFile($path_file){
        if(file_exists($path_file)){
            if( !is_dir( $path_file ) ){
                unlink($path_file);
            }
        }
    }
    public function path_date(){
        $path_date='/public/files/'.date('Y-m-d',strtotime('now'));
        return $path_date;
    }
    //create diriect
    public function dir_create($dir_path=null){
        if ( !file_exists($dir_path)) {
            $result = mkdir($dir_path,0777);
            return $dir_path;
        }
        else{
            return $dir_path;
        }
    }
    public function path_upload_default(){
        $path_date='/public/files/'.date('Y',strtotime('now')).'/'.date('m',strtotime('now')).'/'.date('d',strtotime('now'));
        $path_full=getcwd().$path_date;
        if (is_dir($path_full)) {
            return array(
                'file'=>$path_full,
                'link'=>$path_date
            );
        }
        else{
            $path_Y=getcwd().'/public/files/'.date('Y',strtotime('now'));
            if(!is_dir($path_Y)){
                $result = mkdir($path_Y,0777);
            }
            $path_m=$path_Y.'/'.date('m',strtotime('now'));
            if(!is_dir($path_m)){
                $result = mkdir($path_m,0777);
            }
            $path_d=$path_m.'/'.date('d',strtotime('now'));
            if(!is_dir($path_d)){
                $result = mkdir($path_d,0777);
            }
            return array(
                'file'=>$path_full,
                'link'=>$path_date
            );
        }
    }
    //===phan rewirte===
    public function strtolower($str) {
        $str = preg_replace("/(A)/", 'a', $str);
        $str = preg_replace("/(Â)/", 'â', $str);
        $str = preg_replace("/(Ấ)/", 'ấ', $str);
        $str = preg_replace("/(Ẫ)/", 'ẫ', $str);
        $str = preg_replace("/(Ầ)/", 'ầ', $str);
        $str = preg_replace("/(Ậ)/", 'ậ', $str);
        $str = preg_replace("/(Ẩ)/", 'ẩ', $str);
        $str = preg_replace("/(Ắ)/", 'ắ', $str);
        $str = preg_replace("/(Ằ)/", 'ằ', $str);
        $str = preg_replace("/(Ẳ)/", 'ẳ', $str);
        $str = preg_replace("/(Ặ)/", 'ặ', $str);
        $str = preg_replace("/(Ẵ)/", 'ẵ', $str);
        $str = preg_replace("/(B)/", 'b', $str);
        $str = preg_replace("/(C)/", 'c', $str);
        $str = preg_replace("/(Đ)/", 'đ', $str);
        $str = preg_replace("/(D)/", 'd', $str);
        $str = preg_replace("/(E)/", 'e', $str);
        $str = preg_replace("/(Ê)/", 'ê', $str);
        $str = preg_replace("/(Ế)/", 'ế', $str);
        $str = preg_replace("/(Ề)/", 'ề', $str);
        $str = preg_replace("/(Ể)/", 'ể', $str);
        $str = preg_replace("/(Ễ)/", 'ễ', $str);
        $str = preg_replace("/(Ệ)/", 'ệ', $str);
        $str = preg_replace("/(F)/", 'f', $str);
        $str = preg_replace("/(G)/", 'g', $str);
        $str = preg_replace("/(H)/", 'h', $str);
        $str = preg_replace("/(I)/", 'i', $str);
        $str = preg_replace("/(Í)/", 'í', $str);
        $str = preg_replace("/(Ì)/", 'ì', $str);
        $str = preg_replace("/(Ĩ)/", 'ĩ', $str);
        $str = preg_replace("/(Ỉ)/", 'ỉ', $str);
        $str = preg_replace("/(Ị)/", 'ị', $str);
        $str = preg_replace("/(J)/", 'j', $str);
        $str = preg_replace("/(K)/", 'k', $str);
        $str = preg_replace("/(L)/", 'l', $str);
        $str = preg_replace("/(M)/", 'm', $str);
        $str = preg_replace("/(N)/", 'n', $str);
        $str = preg_replace("/(O)/", 'o', $str);
        $str = preg_replace("/(Ò)/", 'ò', $str);
        $str = preg_replace("/(Ó)/", 'ó', $str);
        $str = preg_replace("/(Ọ)/", 'ọ', $str);
        $str = preg_replace("/(Õ)/", 'õ', $str);
        $str = preg_replace("/(Ỏ)/", 'ỏ', $str);
        $str = preg_replace("/(Ô)/", 'ô', $str);
        $str = preg_replace("/(Ồ)/", 'ồ', $str);
        $str = preg_replace("/(Ố)/", 'ố', $str);
        $str = preg_replace("/(Ổ)/", 'ổ', $str);
        $str = preg_replace("/(Ỗ)/", 'ỗ', $str);
        $str = preg_replace("/(Ộ)/", 'ộ', $str);
        $str = preg_replace("/(Ơ)/", 'ơ', $str);
        $str = preg_replace("/(Ớ)/", 'ớ', $str);
        $str = preg_replace("/(Ờ)/", 'ờ', $str);
        $str = preg_replace("/(Ở)/", 'ở', $str);
        $str = preg_replace("/(Ỡ)/", 'ỡ', $str);
        $str = preg_replace("/(Ợ)/", 'ợ', $str);
        $str = preg_replace("/(P)/", 'p', $str);
        $str = preg_replace("/(Q)/", 'q', $str);
        $str = preg_replace("/(R)/", 'r', $str);
        $str = preg_replace("/(S)/", 's', $str);
        $str = preg_replace("/(T)/", 't', $str);
        $str = preg_replace("/(U)/", 'u', $str);
        $str = preg_replace("/(Ù)/", 'ù', $str);
        $str = preg_replace("/(Ú)/", 'ú', $str);
        $str = preg_replace("/(Ụ)/", 'ụ', $str);
        $str = preg_replace("/(Ũ)/", 'ũ', $str);
        $str = preg_replace("/(Ủ)/", 'ủ', $str);
        $str = preg_replace("/(Ư)/", 'ư', $str);
        $str = preg_replace("/(Ứ)/", 'ứ', $str);
        $str = preg_replace("/(Ừ)/", 'ừ', $str);
        $str = preg_replace("/(Ử)/", 'ử', $str);
        $str = preg_replace("/(Ự)/", 'ự', $str);
        $str = preg_replace("/(Ữ)/", 'ữ', $str);
        $str = preg_replace("/(V)/", 'v', $str);
        $str = preg_replace("/(X)/", 'x', $str);
        $str = preg_replace("/(Y)/", 'y', $str);
        $str = preg_replace("/(Z)/", 'z', $str);
        $str = preg_replace("/(W)/", 'w', $str);
        return $str;
    }
    public function unicode($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|A)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|E)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ|I)/", 'i', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|O)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|U)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ|Y)/", 'y', $str);
        //xu ly dau
        $str = preg_replace("/()/", '', $str);
        $str = preg_replace("/(̃)/", '', $str);
        $str = preg_replace("/(́)/", '', $str);
        $str = preg_replace("/(̉)/", '', $str);
        $str = preg_replace("/(̀)/", '', $str);
        $str = preg_replace("/(̣)/", '', $str);
        //end xu ly dau
        $str = preg_replace("/(Đ)/", 'd', $str);
        $str = preg_replace("/(S)/", 's', $str);
        $str = preg_replace("/(J)/", 'j', $str);
        $str = preg_replace("/(K)/", 'k', $str);
        $str = preg_replace("/(F)/", 'f', $str);
        $str = preg_replace("/(P)/", 'p', $str);
        $str = preg_replace("/(N)/", 'n', $str);
        $str = preg_replace("/(M)/", 'm', $str);
        $str = preg_replace("/(C)/", 'c', $str);
        $str = preg_replace("/(B)/", 'b', $str);
        $str = preg_replace("/(W)/", 'w', $str);
        $str = preg_replace("/(T)/", 't', $str);
        $str = preg_replace("/(R)/", 'r', $str);
        $str = preg_replace("/(D)/", 'd', $str);
        $str = preg_replace("/(Q)/", 'q', $str);
        $str = preg_replace("/(G)/", 'g', $str);
        $str = preg_replace("/(H)/", 'h', $str);
        $str = preg_replace("/(L)/", 'l', $str);
        $str = preg_replace("/(Z)/", 'z', $str);
        $str = preg_replace("/(X)/", 'x', $str);
        $str = preg_replace("/(V)/", 'v', $str);
        $str = preg_replace("/(&)/", '-', $str);
        $str = preg_replace('/(")/', '-', $str);
        $str = preg_replace('/(”)/', '-', $str);
        $str = preg_replace('/(“)/', '-', $str);
        $str = str_replace("(", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(".", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(":", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(")", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("'", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("%", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("$", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("*", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(",", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("!", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("[", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("]", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("|", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(" ", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("--", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("---", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("?", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("+", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace(">", "-", str_replace("&amp;*#39;","",$str));
        $str = str_replace("<", "-", str_replace("&amp;*#39;","",$str));
        $str = preg_replace("/(--)/", '-', $str);
        $str = preg_replace("/(_)/", '-', $str);
        return $str;
    }
    public function substr_font($str,$number,$symbol=null){
        if(strlen($str) < $number)
        {
            return $str;
        }
        else {
            $str =substr($str,0,$number);
            if(empty($symbol)){
                $count_vitri=strrpos($str,' ');
            }else{
                $count_vitri=strrpos($str,$symbol);
            }
            $str =substr($str,0,$count_vitri);
            return $str;
        }
    }
    //===het phan rewrite===
}