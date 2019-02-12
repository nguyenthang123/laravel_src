<?php
define("Namespace_Backend", "Admin");
define("namespace_Backend", "admin");
define('dir_root',getcwd());
define('Host','localhost');
define('Name_db','bxh168ne_m1121');
define('User_db','bxh168ne_m1121');
define('Pass_db','12345678');
define('showQuery','0');
define("showerr", "abc@");
define("phone1", '1800 6356');
define("phone2", "043.2343.888");
define("phone3", '096.5213.598');
define('domain','http://'.$_SERVER['SERVER_NAME']);
define('domain1',$_SERVER['SERVER_NAME']);
define('uri','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define('link_tuvan','http://chat.phongkham168.com/LR/Chatpre.aspx?id=KRX41100266&lng=en');
define("link_gioithieu", "/cd6/gioi-thieu");
define("link_tintuc", "/tin-tuc");
define("link_kythuat", "/ky-thuat");
define("link_thietbi", "/thiet-bi");
define("link_lienhe", "http://chat.phongkham168.com/LR/Chatpre.aspx?id=KRX41100266&lng=en");
define("link_dieutrithanhcong", "/dieu-tri-thanh-cong");
define("link_hoatdonguudai", "/hoat-dong-uu-dai");
define("link_skype", "skype:bacsy_tuvan168?chat");
define("link_facebook", "https://www.facebook.com/phongkham168/");
define("link_diachi", '/cd6/lo-trinh-kham');
define("ico_shortcut", '<link rel="shortcut icon" type="image/x-icon" href="http://namkhoa168.com/public/frontend/img/home/ico_logo.png" />');
define("cat_rewrite_suimaoga", "sui-mao-ga");
define("cat_rewrite_suimaoganu", "sui-mao-ga-nu-gioi");
define("cat_rewrite_suimaoganam", "sui-mao-ga-nam-gioi");
define("cat_rewrite_benhlau", "benh-lau");
define("cat_rewrite_giangmai", "benh-giang-mai");
define("cat_rewrite_herpes", "herpes-sinh-duc");
define("baiviet_gioithieu", "/gioi-thieu-phong-kham-da-khoa-168-ha-noi");
define("new_nguyennhan", 'nguyen-nhan');
define("new_trieuchung", 'trieu-chung');
define("new_nguyhai", 'nguy-hai');
define("new_dieutri", 'dieu-tri');
define("new_chiphi", 'chi-phi');
function link_dangkykham(){
    $str='http://phongkhamdakhoa168.com/dangky.php?';
    return $str;
}
function link_nguyennhan($cate,$nn_tc){
    $str='/'.$cate.'/'.$nn_tc;
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
        $title='phòng khám nam khoa chuyên nghiệp chăm sóc sức khỏe nam giới';
    }
    if(empty($keywords)){
        $keywords='kham nam khoa 168, phong kham 168,phong kham da khoa 168';
    }
    if(empty($description)){
        $description='phong kham da khoa 168 ha noi chuyen dieu tri nam khoa';
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
function date_from_data($date=null){
    if(!empty($date)){
        $str=strtotime($date);
        $date=date('d-m-Y',$str);
    }else{
        $date=date('d-m-Y',strtotime('now'));
    }
    return $date;
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
    if($cate=="benh-xa-hoi"){
        $str='
        <script src="http://phongkham168.com/cd/js/funs.js"></script>
        <script src="http://phongkham168.com/cd/js/c_chuabenhxahoi.net.js"></script>
        ';
    }else{
        $str='
        <script src="http://phongkham168.com/cd/js/funs.js"></script>
        <script src="http://phongkham168.com/cd/js/c_namkhoa168.com.js"></script>
        ';
    }
    $str=$str.$str2;
    return $str;
}
function CateOption($cate=null){
    //$str='<div class="categories_list">';
    $str='';
    $i=0;
    if($cate!=cat_rewrite_suimaoga){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_suimaoga.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_smg.png" alt="sui mao ga">
                </div>
                <p>Sùi mào gà</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_suimaoganam){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_suimaoganam.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_smg_nam.png" alt="sui mao ga nam gioi">
                </div>
                <p>Sùi mào gà nam giới</p>
             </a>
        </div>';
    }
    if($cate!=cat_rewrite_suimaoganu){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_suimaoganu.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_smg_nu.png" alt="sui mao ga nu gioi">
                </div>
                 <p>Sùi mào gà nữ giới</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_benhlau){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_benhlau.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_bl.png" alt="benh lau">
                </div>
                <p>Bệnh lậu</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_giangmai){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_giangmai.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_gm.png" alt="benh giang mai">
                </div>
                <p>Bệnh giang mai</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_herpes){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_herpes.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_herpes.png" alt="herpes sinh dục">
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
function CateSubOption($cate){
    if($cate['cat_rewrite']==cat_rewrite_suimaoga){
        $ico_cat='/public/frontend/imgs/ico_cat_smg.png';
        $img_cat='/public/frontend/imgs/img_cat_smg.jpg';
        $txt='Sùi mào gà（pointed condyloma）là bệnh do nhiễm Human Papilloma Virus (HPV) gây ra, là bệnh lây qua đường tình dục, biểu hiện chủ yếu là gây ra các tổn thương ở vùng hậu môn, cơ quan sinh sản. Phần lớn phát sinh ở những người ở độ tuổi trung niên từ 18~50 tuổi. trải qua tầm nửa tháng đến 8 tháng, bình quân là 3 tháng ủ bệnh thì phát bệnh. Là bệnh thường gặp, chủ yếu lây qua đường tình dục không an toàn.';
    }
    if($cate['cat_rewrite']==cat_rewrite_suimaoganam){
        $ico_cat='/public/frontend/imgs/ico_cat_smg_nam.png';
        $img_cat='/public/frontend/imgs/img_cat_smg_nam.jpg';
        $txt='Sau khi cơ thể bị lây nhiễm Human Papilloma Virus, thời gian ủ bệnh từ nửa tháng đến 8 tháng, bình quân tầm 3 tháng phát bệnh, do sùi mào gà ở giai đoạn đầu không ngứa không rát, các nhú gai cũng không rõ ràng, vì thế phần lớn người bệnh không có triệu chứng nào. Sùi mào gà nếu phát hiện sớm và điều trị kịp thời thì không quá nghiêm trọng. Nếu phát hiện muộn hoặc tiến hành điều trị không kịp thời, các nốt sùi phát triển tương đối lớn hoặc khi đã lan rộng, thì thông thường phải trải qua điều trị nhiều lần mới có thể loại bỏ hết các nốt sùi.';
    }
    if($cate['cat_rewrite']==cat_rewrite_suimaoganu){
        $ico_cat='/public/frontend/imgs/ico_cat_smg_nu.png';
        $img_cat='/public/frontend/imgs/img_cat_smg_nu.jpg';
        $txt='Sùi mào gà ở nữ giới là do Human Papilloma Virus gây ra bệnh biến ở trên lớp biểu bì tăng sinh, là một trong số các bệnh lây qua đường tình dục. Thời gian ủ bệnh sùi mào gà ở nữ bình quân là 2~3 tháng, triệu chứng bệnh gây ngứa rát cục bộ, đau đớn, số ít người bệnh không có triệu chứng. Sinh trưởng ở các bộ phận: vùng kín, âm đạo, cổ tử cung, quang vùng hậu môn, thường mọc đồng thời ở hai bộ phận, biểu hiện có những nốt mụn màu hồng hoặc màu nâu nhạt, các nốt mụn mọc nhiều dần lên rồi liên kết với nhau trông giống như hoa súp lơ, có tiền sử quan hệ tình dục không an toàn.';
    }
    if($cate['cat_rewrite']==cat_rewrite_benhlau){
        $ico_cat='/public/frontend/imgs/ico_cat_bl.png';
        $img_cat='/public/frontend/imgs/img_cat_bl.jpg';
        $txt='Bệnh lậu (Gonorrhea) là bệnh lây truyền qua đường tình dục do vi khuẩn Neisseria gonorrhea gây ra (gọi tắt là lậu cầu khuẩn). Là bệnh có tỉ lệ phát bệnh đứng thứ 2 trong các bệnh lây qua đường tình dục ở nước ta. Lậu cầu khuẩn là vi khuẩn Neisseria gonorrhea song cầu, khi rời khỏi cơ thể người nó không còn khả năng sinh tồn, khi đó thuốc diệt khuẩn thông thường đều dễ dàng tiêu diệt được vi khuẩn này. Bệnh lậu phần lớn phát sinh ở nam nữ thanh niên đang ở độ tuổi sinh sản';
    }
    if($cate['cat_rewrite']==cat_rewrite_giangmai){
        $ico_cat='/public/frontend/imgs/ico_cat_gm.png';
        $img_cat='/public/frontend/imgs/img_cat_gm.jpg';
        $txt='Giang mai (syphilis）là bệnh mãn tính lây qua đường tình dục do xoắn khuẩn Treponema pallidum (xoắn khuẩn giang mai) gây ra. Chủ yếu lây qua đường tình dục, biểu hiện lâm sàng chia làm giang mai giai đoạn 1, giang mai giai đoạn 2, giang mai giai đoạn 3, giang mai tiềm ẩn và giang mai bẩm sinh...';
    }
    if($cate['cat_rewrite']==cat_rewrite_herpes){
        $ico_cat='/public/frontend/imgs/ico_cat_herpes.png';
        $img_cat='/public/frontend/imgs/img_cat_herpes.jpg';
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
    $str3='<script src="http://phongkham168.com/popup/js/m_popfuns.js"></script>';
    return $str3;
}
function m_Addtop(){
    $str='<script src="http://phongkham168.com/cd/js/m_phongkhambenhxahoi.vn.js"></script>';
    $str2='<script src="http://phongkham168.com/cd/js/funs.js"></script>';
    return $str2.$str;
}