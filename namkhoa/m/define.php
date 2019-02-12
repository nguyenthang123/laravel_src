<?php
define("Namespace_Backend", "Admin");
define("namespace_Backend", "admin");
define('dir_root',getcwd());
define('Host','localhost');
define('Name_db','nkhoa168c_m1018');
define('User_db','nkhoa168c_m1018');
define('Pass_db','12345678');
define('showQuery','0');
define("showerr", "abc@");
define("phone1", '0432.969.666');
define("phone2", "0432 567 999");
define("phone3", '096 5215 398');
define('domain','http://'.$_SERVER['SERVER_NAME']);
define('uri','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define('link_tuvan','http://chat.phongkham168.com/LR/Chatpre.aspx?id=KRX41100266&lng=en');
define("link_gioithieu", "/cd6/gioi-thieu");
define("link_tintuc", "/tin-tuc");
define("link_kythuat", "/ky-thuat");
define("link_thietbi", "/thiet-bi");
define("link_dieutrithanhcong", "/dieu-tri-thanh-cong");
define("link_hoatdonguudai", "/hoat-dong-uu-dai");
define("link_skype", "skype:bacsy_tuvan168?chat");
define("link_facebook", "https://www.facebook.com/phongkham168/");
define("link_diachi", '/cd6/lo-trinh-kham');
define("link_quytrinhphongkham", '/lo-trinh-den-phong-kham');
define("ico_shortcut", '<link rel="shortcut icon" type="image/x-icon" href="http://namkhoa168.com/public/frontend/img/home/ico_logo.png" />');
define("cat_rewrite_yeusinhly", "yeu-sinh-ly");
define("cat_rewrite_tienliettuyen", "benh-tuyen-tien-liet");
define("cat_rewrite_viemnhiemcoquansinhduc", "viem-nhiem-co-quan-sinh-duc");
define("cat_rewrite_hepbaoquydau", "hep-bao-quy-dau");
define("cat_rewrite_vosinh", "vo-sinh-nam");
define("cat_rewrite_benhxahoi", "benh-xa-hoi");
define("cat_rewrite_chinhhinh", "chinh-hinh-co-quan-sinh-duc");
define("cat_rewrite_benhlybaoquydau", "benh-ly-bao-quy-dau");
define("cat_rewrite_benhlykhac", "http://chat.phongkham168.com/LR/Chatpre.aspx?id=KRX41100266&lng=en");
define("cat_rewrite_khamnamkhoa", "kham-nam-khoa");
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
function Addtop(){
    $str='
        <script src="http://phongkham168.com/cd/js/funs.js"></script>
        <script src="http://phongkham168.com/cd/js/m_namkhoa168.com.js"></script>
        ';
    return $str;
}
function line_chat(){
    $str='<script language="javascript" src="http://chat.phongkham168.com/JS/LsJS.aspx?siteid=KRX41100266&float=1&lng=en"></script>';
    return $str;
}
function CateOption($cate=null){
    //$str='<div class="categories_list">';
    $str='';
    $i=0;
    if($cate!=cat_rewrite_viemnhiemcoquansinhduc){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_viemnhiemcoquansinhduc.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_ntdtl.png" alt="viem nhiem co quan sinh duc">
                </div>
                <p>Viêm nhiễm cơ quan sinh dục</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_benhlybaoquydau){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_benhlybaoquydau.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_hbqd.png" alt="bệnh lý bao quy đầu">
                </div>
                <p>Bệnh lý bao quy đầu</p>
             </a>
        </div>';
    }
    if($cate!=cat_rewrite_yeusinhly){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_yeusinhly.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_ysl.png" alt="yeu sinh ly">
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
                    <img src="/public/frontend/imgs/ico_cate_vsn.png" alt="vo sinh nam">
                </div>
                <p>Vô sinh nam</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_benhxahoi){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_benhxahoi.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_bxh.png" alt="benh xa hoi">
                </div>
                <p>Bệnh xã hội</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_tienliettuyen){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_tienliettuyen.'">
                <div class="categories_list_item_content">
                    <img src="/public/frontend/imgs/ico_cate_tlt.png" alt="tien liet tuyen">
                </div>
                <p>Bệnh tuyến tiền liệt</p>
            </a>
        </div>';
    }
    $str.='</div>';
    $str_='<div class="categories_list categories_list'.$i.'">';
    $str=$str_.$str;
    return $str;
}
function CateSubOption($cate){
    $style='';
    if($cate['cat_rewrite']==cat_rewrite_tienliettuyen){
        $ico_cat='/public/frontend/imgs/ico_cat_tlt.png';
        $img_cat='/public/frontend/imgs/img_cat_tlt.jpg';
        $txt='Tuyến tiền liệt là một cơ quan của hệ thống sinh sản nam giới, tuyến tiền liệt tăng sinh và viêm tuyến tiền liệt là bệnh thường gặp của tuyến tiền liệt. Tuyến tiền liệt phát bệnh có thể dẫn đến các triệu chứng cục bộ hoặc toàn thân như tiểu rắt, tiểu khó khăn, tiểu buốt...';
    }
    if($cate['cat_rewrite']==cat_rewrite_yeusinhly){
        $ico_cat='/public/frontend/imgs/ico_cat_ysl.png';
        $img_cat='/public/frontend/imgs/img_cat_ysl.jpg';
        $txt='Yếu sinh lý là không hài lòng trong quan hệ tình dục và chức năng sinh lý nam giới, biểu hiện thường gặp là rối loạn ham muốn, xuất tinh sớm, di tinh, không xuất tinh, xuất tinh ngược dòng... Yếu sinh lý đa phần là do các bệnh của hệ thống sinh sản và bệnh toàn cơ thể gây ra. ';
    }
    if($cate['cat_rewrite']==cat_rewrite_benhxahoi){
        $ico_cat='/public/frontend/imgs/ico_cat_bxh.png';
        $img_cat='/public/frontend/imgs/img_cat_bxh.jpg';
        $txt='Bệnh xã hội theo quan niệm truyền thống chính là bệnh lây truyền thông qua quan hệ tình dục, chủ yếu bệnh thường gặp ở bộ phận cơ quan sinh dục. Bệnh xã hội là bệnh lây truyền thường gặp trong phạm vi rộng trên cả thế giới, bệnh có xu hướng mở rộng, độ tuổi mắc bệnh giảm thấp... Đặc biệt là bệnh AIDS gia tăng, đã trở thành vẫn đề sức khỏe cộng đồng nghiêm trọng.';
    }
    if($cate['cat_rewrite']==cat_rewrite_vosinh){
        $ico_cat='/public/frontend/imgs/ico_cat_vs.png';
        $img_cat='/public/frontend/imgs/img_cat_vs.jpg';
        $txt='Vô sinh là chỉ những cặp vợ chồng ở độ tuổi sinh đẻ có quan hệ tình dục bình thường, trong thời gian 1 năm và kéo dài hơn không mang thai, không sinh đẻ. Nguyên nhân chính dẫn đến nam giới vô sinh là tinh trùng ít, tinh trùng yếu, tinh trùng không hóa lỏng, tinh trùng có lẫn máu, giãn tĩnh mạch thừng tinh...';
    }
    if($cate['cat_rewrite']==cat_rewrite_viemnhiemcoquansinhduc){
        $ico_cat='/public/frontend/imgs/ico_cat_dtn.png';
        $img_cat='/public/frontend/imgs/img_cat_dtn.jpg';
        $txt='Viêm nhiễm cơ quan sinh dục là viêm nhiễm do vi khuẩn trực tiếp xâm nhập vào trong niệu đạo gây ra, viêm nhiễm cơ quan sinh dục biểu hiện chính là tiểu rắt, tiểu nhiều, tiểu buốt, tiểu không hết, tiểu nhỏ giọt, tiểu đêm nhiều, niệu đạo sưng đỏ... Đặc biệt ảnh hưởng đến cuộc sống thường ngày của người bệnh.';
    }
    if($cate['cat_rewrite']==cat_rewrite_benhlybaoquydau){
        $ico_cat='/public/frontend/imgs/ico_cat_blbqd.png';
        $img_cat='/public/frontend/imgs/img_cat_blbqd.jpg';
        $txt='Bao quy đầu giữ vai trò quan trọng trong đời sống tình dục cũng như hệ sinh sản của man giới, Tuy nhiên, vì là bộ phận phía ngoài nên bao quy đầu rất dễ bị chịu tác động từ các yếu tố như môi trường, thói quen sinh hoạt,…dẫn đến mắc bệnh. Những bệnh lý bao quy đầu là rất thường gặp trong đó bao gồm những bệnh lý như dài bao quy đầu, hẹp bao quy đầu...';
    }
    if($cate['cat_rewrite']==cat_rewrite_chinhhinh){
        $ico_cat='/public/frontend/imgs/ico_cat_ch.png';
        $img_cat='/public/frontend/imgs/img_cat_ch.jpg';
        $txt='Chỉnh hình cơ quan sinh dục là phục hồi tu sửa lại những khiếm khuyết bẩm sinh và dị tật bẩm sinh của cơ quan sinh dục, đạt được mục đích phục hồi và tiếp cận ngoại hình và bảo vệ chức năng sinh lý bình thường của cơ quan sinh dục, giúp nam giới tự tin hơn trong cuộc sống cũng như trong quan hệ vợ chồng';
        $style='letter-spacing: -0.5px;';
    }
    if($cate['cat_rewrite']==cat_rewrite_khamnamkhoa){
        $ico_cat='/public/frontend/imgs/ico_cat_knk.png';
        $img_cat='/public/frontend/imgs/img_cat_knk.jpg';
        $txt='Khám nam khoa là khám và phát hiện sớm các bệnh nam khoa liên quan ảnh hưởng trực tiếp đến khả năng sinh sản cũng như sức khỏe của nam giới, tiêu biểu như các bệnh về tuyến tiền liệt, bệnh lý về tinh hoàn, rối loạn cương dương, vô sinh và các bệnh lây truyền qua đường tình dục khác gây ảnh hưởng đến sức khỏe nam khoa giúp nam giới điều trị bệnh kịp thời và hiệu quả';
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
    $str='<script src="http://phongkham168.com/cd/js/m_namkhoa168.com.js"></script>';
    $str2='<script src="http://phongkham168.com/cd/js/funs.js"></script>';
    return $str2.$str;
}