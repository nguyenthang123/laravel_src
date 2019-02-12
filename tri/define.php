<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

define('deviceType',$deviceType);
define('domain','http://'.$_SERVER['SERVER_NAME'].'/tri');
define('domain1',$_SERVER['SERVER_NAME']);
define('fixk','/tri');
/*define('link_gioithieu', '/gioi-thieu-phong-kham');*/
define('link_gioithieu', fixk.'/phong-kham-da-khoa-giai-phong-ha-noi');
define('link_kythuat', '/ky-thuat');
define('link_thietbi', '/thiet-bi-phong-kham');
define('link_diachi', '/dia-chi-phong-kham-da-khoa-giai-phong');
define('link_kiketdieutri', '/phong-kham-giai-phong-ha-noi-chuyen-dieu-tri-benh-tri,-mien-phi-thu-thuat-neu-tai-phat');
define('count_phan_trang', '20'); // hằng số phân trang là 20
define('so_san_pham_hien_thi_index', '8');
define('so_san_pham_hien_thi_index_cat', '10'); // hằng số phân trang là 20
define('link_tuvan', 'http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en');
define('link_skype','skype:phongkhamdakhoagiaiphong@gmail.com?chat');
define('link_facebook','https://www.facebook.com/phongkhamdakhoagiaiphong/');
define('link_lotrinhdenkham', '/cd6/lo-trinh-phong-kham');
define('link_quytrinhkham', '/cd6/quy-trinh-kham');
define('Host','localhost');
define('User_db','pkgpc_tri0815');
define('Pass_db','12345679');
define('Name_db','pkgpc_tri0815');
define('showQuery','0');
define('phone1','1900.2622');
//define('phone1','0432.969.666');
define('phone2','0166.352.8899');
define('phone3','');
define('cat_rewrite_tri','tri');
define('cat_rewrite_nutkehaumon','nut-ke-hau-mon');
define('cat_rewrite_apxehaumon','apxe-hau-mon');
define('cat_rewrite_eczemahaumon','eczema-hau-mon');
define('cat_rewrite_nguahaumon','ngua-hau-mon');
define('cat_rewrite_rohaumon','ro-hau-mon');
define('cat_rewrite_taobon','tao-bon');
define('cat_rewrite_daitienramau','dai-tien-ra-mau');
define('cat_rewrite_chanthuonghaumuon','chan-thuong-hau-mon');
define('cat_rewrite_trieuchungkhac',link_tuvan);

define("link_mobile_diachi", '/mobile/cd6/lo-trinh-kham');
define("link_mobile_gioithieu", '/mobile/cd6/gioi-thieu');
define("link_mobile_cdsuckhoe", 'http://namkhoa168.com/mobile/cdsuckhoe/chuyen-de-suc-khoe');
define('ico_shortcut','<link rel="shortcut icon" type="image/x-icon" href="http://trihanoi.com/public/frontend/home/image/logo.png" />');
define('link_jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
if(domain1=='m.trihanoi.com'){
    header("Location: http://trihanoi.com");
    exit();
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
function link_dangkykham(){
    $str='http://phongkhamgiaiphong.com/dangky.php?';
    return $str;
}
function dangkysdt(){
    $str='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/dkdt.js"></script>';
    //return $str;
}
function line_chat(){
    $str='<script language="javascript" src="http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&lng=en"></script>';
    return $str;
}
function cd_Addleft(){
    $str2='<script src="http://phongkhamgiaiphong.com/js/popup/popup.js"></script>';
    $str='<div class="banner-left-1" style="top:155px; left:10px;position: fixed;width: 150px;z-index: 1000000;display:block"><div id="banner-left-close" style="width: 20px;position: absolute;top: -14px;left: 136px;z-index: 99;"><img src="http://khamphukhoa168.com/images/close.png" height="19px,width:20px;"></div><a href="'.link_tuvan.'"><img style="width:150px;height:480px" src="http://phongkham168.com/js/popup/images/khamnamkhoa168.com.gif"></a></div>';
    return $str.$str2;
}
function  rewrite_number_phone($phone,$Arr=null){
    if($Arr==null){
        $Arr=array(' ','.');
        $phone=str_replace($Arr,'', $phone);
    }
    return 'tel:'.$phone;
}
function phan_trang_array($arr, $page_size = 5, $base_path, $url_folder, $page)
{
    $page_count = ceil(count($arr) / $page_size); // num of page
    $items = array_slice($arr, ($page - 1) * $page_size, $page_size, true);
    return $items;
}
function view_category($cat_parents, $cats, $cat_selected)
{
//echo $cat_parents;
    $iii = 0;
    if (count($cat_parents) >= 1) {

        foreach ($cat_parents as $cat_parent) {
            foreach ($cats as $cat) {
                if ($cat_parent->id == $cat->id) {
                    ?>
                    <option class="menu_1" style="font-size:16px;" value="<?php echo $cat->id ?>" <?php
                    if ($cat->id == $cat_selected) {
                        echo "selected='selected' ";
                        $iii = 1;
                    }
                    ?> >
                        <?php echo $cat->name ?>
                    </option>
                    <?php
                    foreach ($cats as $cat1) {
                        if ($cat->id == $cat1->parent_id) {

                            ?>
                            <option class="s-child menu_2" style="font-size:15px;" value="<?php echo $cat1->id; ?>"
                                <?php
                                if ($cat1->id == $cat_selected) {
                                    echo "selected='selected' ";
                                    $iii = 1;
                                }
                                ?>
                                >
                                &nbsp;-- <?php echo $cat1->name; ?>
                            </option>
                            <?php
                            foreach ($cats as $cat2) {

                                if ($cat1->id == $cat2->parent_id) {
                                    ?>
                                    <option class="s-child menu_3" style="font-size:14px;"
                                            value="<?php echo $cat2->id; ?>"
                                        <?php
                                        if ($cat2->id == $cat_selected) {
                                            echo "selected='selected' ";
                                            $iii = 1;
                                        }
                                        ?>
                                        >
                                        &nbsp;&nbsp;-------<?php echo $cat2->name; ?>
                                    </option>
                                <?php
                                }
                            }
                        }
                    }


                }
            }
        }
    }
    ?>

    <option style="font-size:14px;" value="0"<?php if ($iii == 0) {
        echo "selected='selected' ";
    } ?> >
        Không thuộc danh mục nào
    </option>
<?php
}
function view_category_cat($cat_parents, $cats, $cat_selected)
{
    if (count($cat_parents) >= 1) {
        $iii = 0;
        foreach ($cat_parents as $cat_parent) {

            foreach ($cats as $cat) {
                if ($cat_parent->id == $cat->id) {
                    ?>

                    <tr style="background: #eee;">

                        <td><label class="lable_checkbox"><input type="checkbox" name="checkbox[<?php echo $cat->id ?>]"
                                                                 value="<?php echo $cat->id ?>"/></label>  <?php echo $cat->name ?>
                            <br>
                            <a class="show-1" href="/admin/cat/<?php echo $cat->id ?>/edit"> edit
                            </a>
                        </td>
                        <td>  <?php echo $cat->cat_alias; ?></td>
                        <td>  <?php echo $cat->admin_id; ?></td>
                        <td> <?php echo $cat->parent_id; ?></td>
                        <td> <?php if ($cat->status_cat == 1) {
                                echo "<p class='hoat_dong'>Hoạt động </p>";

                            } else {
                                echo "<p class='ban_nhap'>Bản nháp--- </p>";
                            } ?></td>
                    </tr>
                    <?php
                    foreach ($cats as $cat1) {
                        if ($cat->id == $cat1->parent_id) {
                            ?>
                            <tr>
                                <td><label class="lable_checkbox"><input type="checkbox"
                                                                         name="checkbox[<?php echo $cat1->id ?>]"
                                                                         value="<?php echo $cat1->id ?>"/></label>-------------<?php echo $cat1->name; ?>
                                    <br/>
                                    <a class="show-1" href="/admin/cat/<?php echo $cat1->id ?>/edit"> edit </a>
                                </td>
                                <td>  <?php echo $cat1->cat_alias; ?></td>
                                <td>  <?php echo $cat1->admin_id; ?></td>
                                <td> <?php echo $cat1->parent_id; ?></td>
                                <td> <?php if ($cat1->status_cat == 1) {
                                        echo "<p class='hoat_dong'>Hoạt động </p>";
                                    } else {
                                        echo "<p class='ban_nhap'>Bản nháp--- </p>";
                                    } ?></td>
                            </tr>
                            <?php
                            foreach ($cats as $cat2) {

                                if ($cat1->id == $cat2->parent_id) {
                                    ?>
                                    <tr>
                                        <td><label class="lable_checkbox"><input type="checkbox"
                                                                                 name="checkbox[<?php echo $cat2->id ?>]"
                                                                                 value="<?php echo $cat2->id ?>"/></label>
                                            ----------------------<?php echo $cat2->name; ?>
                                            <br/>
                                            <a class="show-1" href="/admin/cat/<?php echo $cat2->id ?>/edit"> edit </a>
                                        </td>
                                        <td>  <?php echo $cat2->cat_alias; ?></td>
                                        <td>  <?php echo $cat2->admin_id; ?></td>
                                        <td> <?php echo $cat2->parent_id; ?></td>
                                        <td> <?php if ($cat2->status_cat == 1) {
                                                echo "<p>Hoạt động </p>";

                                            } else {
                                                echo "Bản nháp";
                                            } ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        }
                    }
                }
            }

        }
    }
}
function view_menus_items($menus_items_parents, $menus_items, $cat_selected)
{
    if (count($menus_items_parents) >= 1) {
        $iii = 0;
        foreach ($menus_items_parents as $menus_items_parent) {
            foreach ($menus_items as $menus_item) {
                if ($menus_items_parent->id == $menus_item->id) {

                    ?>

                    <option class="menu_1" style="font-size:16px;" value="<?php echo $menus_item->id ?>" <?php
                    if ($menus_item->id == $cat_selected) {
                        echo "selected='selected' ";
                        $iii = 1;
                    } //echo $kaka++;
                    ?> >
                        <?php echo $menus_item->name; ?>
                    </option>
                    <?php
                    foreach ($menus_items as $menus_item1) {
                        if ($menus_item->id == $menus_item1->menus_item_id_parent) {

                            ?>
                            <option class="s-child menu_2" style="font-size:15px;"
                                    value="<?php echo $menus_item1->id; ?>"
                                <?php
                                if ($menus_item1->id == $cat_selected) {
                                    echo "selected='selected' ";
                                    $iii = 1;
                                }
                                ?>
                                >
                                &nbsp;-- <?php echo $menus_item1->name; ?>
                            </option>
                            <?php
                            foreach ($menus_items as $menus_item2) {

                                if ($menus_item1->id == $menus_item2->menus_item_id_parent) {
                                    ?>
                                    <option class="s-child menu_3" style="font-size:14px;"
                                            value="<?php echo $menus_item2->id; ?>"
                                        <?php
                                        if ($menus_item2->id == $cat_selected) {
                                            echo "selected='selected' ";
                                            $iii = 1;
                                        }
                                        ?>
                                        >
                                        &nbsp;&nbsp;-------<?php echo $menus_item2->name; ?>
                                    </option>
                                <?php
                                }
                            }
                        }
                    }


                }
            }
        }
    }

}
function view_menu_item_index($menu_item_parents, $menu_items, $cat_selected)
{
    echo count($menu_items);
    if (count($menu_item_parents) >= 1) {
        $iii = 0;
        foreach ($menu_item_parents as $menu_item_parent) {

            foreach ($menu_items as $menu_item) {
                if ($menu_item_parent->id == $menu_item->id) {
                    ?>

                    <tr style="background:#ddd;border-bottom:1px solid #000">

                        <td><label class="lable_checkbox"><input type="checkbox"
                                                                 name="checkbox[<?php echo $menu_item->id ?>]"
                                                                 value="<?php echo $menu_item->id ?>"/></label>  <?php echo $menu_item->name ?>
                            <br>
                            <a class="show-1" href="/admin/menusitem/<?php echo $menu_item->id ?>/edit"> edit
                            </a>
                        </td>
                        <td>  <?php echo $menu_item->menus_alias; ?></td>
                        <td>  <?php echo $menu_item->cat_id_show; ?></td>
                        <td>  <?php echo $menu_item->menus_item_url; ?></td>
                        <td>
                            <?php if ($menu_item->status_menusitem) {
                                echo "<p class='hoat_dong'>hoạt động<p>";
                            } else {
                                echo "<p class='ban_nhap'>bản nháp<p>";
                            } ?>
                        </td>


                        <td> <?php echo $menu_item->menus_item_id_parent; ?></td>
                    </tr>
                    <?php
                    foreach ($menu_items as $menu_item1) {
                        if ($menu_item->id == $menu_item1->menus_item_id_parent) {
                            ?>
                            <tr>
                                <td><label class="lable_checkbox"><input type="checkbox"
                                                                         name="checkbox[<?php echo $menu_item1->id ?>]"
                                                                         value="<?php echo $menu_item1->id ?>"/></label>-----<?php echo $menu_item1->name; ?>
                                    <br/>
                                    <a class="show-1" href="/admin/menusitem/<?php echo $menu_item1->id ?>/edit">
                                        edit </a>
                                </td>
                                <td>  <?php echo $menu_item1->menus_alias; ?></td>
                                <td>  <?php echo $menu_item1->cat_id_show; ?></td>
                                <td>  <?php echo $menu_item1->menus_item_url; ?></td>
                                <td>
                                    <?php if ($menu_item->status_menusitem) {
                                        echo "<p class='hoat_dong'>hoạt động<p>";
                                    } else {
                                        echo "<p class='ban_nhap'>bản nháp<p>";
                                    } ?>
                                </td>
                                <td> <?php echo $menu_item1->menus_item_id_parent; ?></td>
                            </tr>
                            <?php
                            foreach ($menu_items as $menu_item2) {

                                if ($menu_item1->id == $menu_item2->menus_item_id_parent) {
                                    ?>
                                    <tr>
                                        <td><label class="lable_checkbox"><input type="checkbox"
                                                                                 name="checkbox[<?php echo $menu_item2->id ?>]"
                                                                                 value="<?php echo $menu_item2->id ?>"/></label>
                                            ---------<?php echo $menu_item2->name; ?>
                                            <br/>
                                            <a class="show-1"
                                               href="/admin/menusitem/<?php echo $menu_item2->id ?>/edit"> edit </a>
                                        </td>
                                        <td>  <?php echo $menu_item2->menus_alias; ?></td>
                                        <td>  <?php echo $menu_item2->cat_id_show; ?></td>
                                        <td>  <?php echo $menu_item2->menus_item_url; ?></td>
                                        <td>
                                            <?php if ($menu_item->status_menusitem) {
                                                echo "<p class='hoat_dong'>hoạt động<p>";
                                            } else {
                                                echo "<p class='ban_nhap'>bản nháp<p>";
                                            } ?>
                                        </td>
                                        <td> <?php echo $menu_item2->menus_item_id_parent; ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        }
                    }
                }
            }

        }
    }
}
function check_item_child($menu_items, $id)
{
    if (count($menu_items) >= 1) {
        foreach ($menu_items as $menu_item) {
            if ($menu_item->menus_item_id_parent == $id) {
                return true;
            }
        }
        return false;
    }
}
function view_menus_site_index($menus_items_parents, $menus_items, $cat_selected)
{
    if (count($menus_items_parents) >= 1) {

        echo "<ul class='level_1'>";

        foreach ($menus_items_parents as $menus_items_parent) {
            foreach ($menus_items as $menus_item) {
                if ($menus_items_parent->id == $menus_item->id) {

                    ?>
                    <li class="li_level_1"><a
                            href="/<?php echo $menus_item->menus_alias; ?>"><?php echo $menus_item->name; ?>  </a>


                        <ul class="level_2">
                            <?php

                            foreach ($menus_items as $menus_item1) {
                                if ($menus_item->id == $menus_item1->menus_item_id_parent) {


                                    echo "<li>";
                                    ?>
                                    <a href="/<?php echo $menus_item1->menus_alias; ?>"><?php echo $menus_item1->name; ?>  </a>
                                    <?php
                                    //	echo "<a href='#'>".$menus_item1->name."</a>";
                                    echo "</li>";


                                }
                            }
                            ?>

                        </ul>
                    </li>
                <?php
                }
            }
        }
        echo '</ul>';

    }

}
function convert_vi_to_en($str)
{
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace('/ /', '-', $str);
    $str = str_replace('?', '', $str);
    //var_dump($str);
    //exit();
    return $str;
}
function view_category_cat_new($cat_parents, $cats, $cat_selected)
{

    if (count($cat_parents) >= 1) {
        $iii = 0;
        foreach ($cat_parents as $cat_parent) {

            foreach ($cats as $cat) {
                if ($cat_parent->id == $cat->id) {
                    ?>

                    <tr style="background: #eee;">

                        <td><label class="lable_checkbox"><input type="checkbox" name="checkbox[<?php echo $cat->id ?>]"
                                                                 value="<?php echo $cat->id ?>"/></label>  <?php echo $cat->name ?>
                            <br>
                            <a class="show-1" href="/admin/cat-new/<?php echo $cat->id ?>/edit"> edit
                            </a>
                        </td>
                        <td>  <?php echo $cat->cat_alias; ?></td>
                        <td>  <?php echo $cat->admin_id; ?></td>
                        <td> <?php echo $cat->parent_id; ?></td>
                    </tr>
                    <?php
                    foreach ($cats as $cat1) {
                        if ($cat->id == $cat1->parent_id) {
                            ?>
                            <tr>
                                <td><label class="lable_checkbox"><input type="checkbox"
                                                                         name="checkbox[<?php echo $cat1->id ?>]"
                                                                         value="<?php echo $cat1->id ?>"/></label>-------------<?php echo $cat1->name; ?>
                                    <br/>
                                    <a class="show-1" href="/admin/cat-new/<?php echo $cat1->id ?>/edit"> edit </a>
                                </td>
                                <td>  <?php echo $cat1->cat_alias; ?></td>
                                <td>  <?php echo $cat1->admin_id; ?></td>
                                <td> <?php echo $cat1->parent_id; ?></td>
                            </tr>
                            <?php
                            foreach ($cats as $cat2) {

                                if ($cat1->id == $cat2->parent_id) {
                                    ?>
                                    <tr>
                                        <td><label class="lable_checkbox"><input type="checkbox"
                                                                                 name="checkbox[<?php echo $cat2->id ?>]"
                                                                                 value="<?php echo $cat2->id ?>"/></label>
                                            ----------------------<?php echo $cat2->name; ?>
                                            <br/>
                                            <a class="show-1" href="/admin/cat-new/<?php echo $cat2->id ?>/edit">
                                                edit </a>
                                        </td>
                                        <td>  <?php echo $cat2->cat_alias; ?></td>
                                        <td>  <?php echo $cat2->admin_id; ?></td>
                                        <td> <?php echo $cat2->parent_id; ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
function get_list_cat_chil($cat_parents, $cats, $cat_selected)
{

    if (count($cat_parents) >= 1) {
        $iii = 0;
        foreach ($cat_parents as $cat_parent) {

            foreach ($cats as $cat) {
                if ($cat_parent->id == $cat->id) {
                    echo $cat->id;
                    foreach ($cats as $cat1) {
                        if ($cat->id == $cat1->parent_id) {
                            echo $cat1->id;
                            foreach ($cats as $cat2) {
                                if ($cat1->id == $cat2->parent_id) {
                                    echo $cat2->id;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
function get_list_cat_chilrent($cats, $cat_id)
{
    if (count($cats) >= 1) {
        $array_list = [];
        foreach ($cats as $cat) {
            if ($cat->id == $cat_id) {
                array_push($array_list, $cat_id);
                foreach ($cats as $cat1) {

                    if ($cat1->parent_id == $cat_id) {
                        array_push($array_list, $cat1->id);
                    }
                }
            }

        }
        return $array_list;
    }
}
function seo($title=null,$keywords=null,$description=null){
    if(empty($title)){
        $title='bệnh trĩ tốt nhất hà nội';
    }
    if(empty($keywords)){
        $keywords='Khám bệnh trĩ tốt nhất hà nội';
    }
    if(empty($description)){
        $description='phòng khám đa khoa hà nội chuyên điều trị bệnh trĩ';
    }
    $arr=array('title'=>$title,'keywords'=>$keywords,'description'=>$description);
    return $arr;
}
function cat_home(){
    $cate=array(
        array('id'=>1,'cat_name'=>'Trĩ nội','cat_rewrite'=>'tri-noi'),
        array('id'=>2,'cat_name'=>'Trĩ ngoại','cat_rewrite'=>'tri-ngoai'),
        array('id'=>3,'cat_name'=>'Trĩ hỗn hợp','cat_rewrite'=>'tri-hon-hop'),
        array('id'=>4,'cat_name'=>'Tắc mạch trĩ','cat_rewrite'=>'tac-mach-tri'),
        array('id'=>5,'cat_name'=>'Áp xe hậu môn','cat_rewrite'=>'ap-xe-hau-mon'),
        array('id'=>6,'cat_name'=>'Kỹ thuật','cat_rewrite'=>'ky-thuat'),
    );
    return $cate;
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
function AddLeft(){
    $str='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/funs.js"></script>';
    $str2='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/left_right.js"></script>';
    return $str.$str2;
}
function AddRight(){
    $str='<style>
    .menu_hide{display:none}
    .menu_show{display:block}
    .left_nav {
    width: 85px;
    height: 490px;
    position: fixed;
    left: 15px;
    z-index: 9;
    }
    .left_menu {
        width: 84px;
        margin: 0 auto;
        float: left;
        list-style:none;
    }
    .left_menu li {
    height: 82px;
    float: left;
    color: #FFF;
    font-size: 15px;
    padding-left: 0px;
    }
    .left_menu_index{
        width: 79px;
        background:white;
    }
    .left_s_menu {
        float: left;
        position: relative;
        top: -84px;
        left: 82px;
        width: 270px;
        height: 79px;
        padding-left: 10px;
        list-style:none;
    }
    .left_s_menu li {
    float: left;
    padding: 3px 0px;
    z-index: 9;
    }
    .menu_show_fb{
        background:#bf7079;
        background-repeat: no-repeat;
    }
    .menu_show_zl{
        background:#a38e5e;
        background-repeat: no-repeat;
    }
</style>
<script>
    $(document).ready(function(){
        var h=window.innerHeight;
        $(".left_nav").css({"position":"absolute"});
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
</script>
<div class="left_nav">
    <ul style="" class="left_menu">
        <li class="left_menu_index" style="padding-top: 0px;height:82px;">
            <a href="'.link_tuvan.'" target="_blank"><img src="http://trihanoi.com/public/frontend/images/Addleft/tvcp.jpg"></a>
        </li>
        <li class="left_menu_index"><a href="'.link_tuvan.'" target="_blank"><img src="http://trihanoi.com/public/bstv.jpg"></a>
        </li>
        <li class="left_menu_index">
            <a href="'.link_skype.'" target="_blank"><img src="http://trihanoi.com/public/skype.jpg"></a>
        </li>
        <li class="left_menu_index" data-for="fb"><a href="#" target="_self"><img src="http://trihanoi.com/public/fb.jpg"></a>
            <ul class="left_s_menu menu_hide menu_show_fb">
                <li class="menu_c1" style="padding-top: 10px;"><img src="http://trihanoi.com/public/frontend/images/Addleft/logo.jpg"></li>
                <li class="menu_c2"><b style="color: #ffffff;width: 106px;display: block;float:left;padding-top: 15px;margin-left: 4px;">Phòng Khám Đa Khoa 168</b></li>
                <li class="menu_c3"><a href="https://www.facebook.com/phongkham168/">
                    <img src="http://trihanoi.com/public/frontend/images/Addleft/fb_like.jpg" style="padding-top: 22px;">
                </a>
                </li>
            </ul>
        </li>
        <li class="left_menu_index" data-for="zl" style=""><a href="#" target="_self"><img src="http://trihanoi.com/public/zalo.jpg"></a>
            <ul class="left_s_menu menu_hide menu_show_zl">
                <li class="menu_c1" style="padding-top: 0px;"><img src="http://trihanoi.com/public/frontend/images/Addleft/zl_code.jpg" style="max-width: 100%;max-height: 100%;"></li>
                <li class="menu_c2"><b style="color: #ffffff;width: 85px;display: block;float:left;padding-top: 7px;margin-left: 10px;font-size: 23px;">096 99<br>88 018</b></li>
                <li class="menu_c3"><a href="#" target="_self">
                    <img src="http://trihanoi.com/public/frontend/images/Addleft/zl_kb.jpg" style="padding-top: 22px;">
                </a>
                </li>
            </ul>
        </li>
        <li class="left_menu_index" style="margin-bottom:5px;height:79px;"><a href="#" id="backtotop" target="_self"><img src="http://trihanoi.com/public/dautrang.jpg"></a>
        </li>
    </ul>
</div>';
    $canhbao='<div style="position: fixed;top: 200px;right: 0px;"><img src="http://trihanoi.com/canhbao.gif" style="width: 140px;"></div>';
    return $str;
}
function buffer_footer(){
    $str='<script src="http://phongkhamgiaiphong.com/buffer/footer/js/footer.js" type="text/javascript"></script>';
    return $str;
}
function cdtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/addtop.js"></script>';
    return $str;
}
function Addtop($cate=null){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/funs.js"></script>';
    return $str;
}
function cd_left($num){
    $id_main1_l1='';$id_main1_l2='';$id_main1_l3='';$id_main1_l4='';$id_main1_l5='';$id_main1_l6='';$id_main1_l7='';$id_main1_l8='';
    if($num==1){$id_main1_l1='main1-l2li';}
    if($num==2){$id_main1_l2='main1-l2li';}
    if($num==3){$id_main1_l3='main1-l2li';}
    if($num==4){$id_main1_l4='main1-l2li';}
    if($num==5){$id_main1_l5='main1-l2li';}
    if($num==6){$id_main1_l6='main1-l2li';}
    if($num==7){$id_main1_l7='main1-l2li';}
    if($num==8){$id_main1_l8='main1-l2li';}
    $str='<div class="main1-l">
    <div class="main1-l1">
        <dl>
            <dd><img src="/public/images/khai/main1-l1-pic1.png" alt="" /></dd>
            <dt>
            <p>Phòng khám trực tràng hậu môn Giải Phóng Hà Nội, về kỹ thuật hay thiết bị đều là lựa chọn tốt nhất trong điều trị bệnh trĩ</p>
            <h3>-----tạo nên thương hiệu uy tín về trực tràng hậu môn trên toàn quốc----</h3>
            </dt>
        </dl>
    </div>
    <div id="main-float">
        <div class="main1-l2">
            <ul> <li><a id="'.$id_main1_l1.'" href="'.link_tuvan.'">hạng mục đặc sắc</a></li>
                <li><a id="'.$id_main1_l2.'" href="'.link_tuvan.'" style="font-size: 13px; font-weight: bold;line-height: 20px;padding-top: 5px;">phòng khám có thương<br>hiệu</a></li>
                <li><a id="'.$id_main1_l3.'" href="'.link_tuvan.'">đội ngũ bác sĩ</a></li>
                <li><a id="'.$id_main1_l4.'" href="'.domain.'/thiet-bi-phong-kham">thiết bị chẩn trị</a></li>
                <li><a id="'.$id_main1_l5.'" href="'.domain.'/hoat-dong-cong-ich">hoạt động công ích</a></li>
                <li><a id="'.$id_main1_l6.'" href="'.domain.'/dich-vu-dac-biet">dịch vụ đặc biệt</a></li>
                <li><a id="'.$id_main1_l7.'" href="'.link_tuvan.'">môi trường ấm cúng</a></li>
                <li><a id="'.$id_main1_l8.'" href="'.link_lotrinhdenkham.'">tuyến đường tới phòng khám</a></li>
            </ul>
        </div>
        <div class="cha-l-1">
            <div class="cha-l-1t">DỊCH VỤ NHANH GỌN</div>
            <div class="cha-l-1c">
                <dl class="cha-l-1c1">
                    <dd><a href="'.link_tuvan.'"></a></dd>
                    <dt><a href="'.link_tuvan.'">TƯ VẤN<br>TRỰC TUYẾN</a></dt>
                </dl>
                <dl  class="cha-l-1c2">
                    <dd><a href="'.link_tuvan.'"  ></a></dd>
                    <dt><a href="'.link_tuvan.'"  >tư vấn<br>chi phí</a></dt>
                </dl>
                <dl class="cha-l-1c3">
                    <dd><a href="'.link_tuvan.'"  ></a></dd>
                    <dt><a href="'.link_tuvan.'"  >tư vấn<br>bệnh</a></dt>
                </dl>
            </div>
        </div>
        <div class="cha-l-2">
            <div style="width: 37px; height: 37px;float: left">
                <img src="/public/images/khai/ico_dt.jpg" alt="">
            </div>
            <div style="width: 160px;height: 37px;float: left">
                <b style="color: #a77a50;font-size: 23px;">'.phone1.'</b>
                <p style="text-transform: uppercase;font-size: 11px;">điện thoại tư vấn miễn phí</p>
            </div>
            <div class="khainv_clear"></div>
            <div style="width: 37px; height: 37px;float: left">
                <img src="/public/images/khai/ico_dh.jpg" alt="">
            </div>
            <div style="width: 160px;height: 37px;float: left">
                <b style="color: #a77a50;font-size: 23px;">7:30 - 20:00</b>
                <p style="text-transform: uppercase;font-size: 11px;">không nghỉ ngày lễ tết</p>
            </div>
        </div>
    </div>
</div>';
    return $str;
}
function cd_menu_top(){
    $str='
    <link rel="stylesheet" type="text/css" href="'.domain.'/public/frontend/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="'.domain.'/public/frontend/home/css/header.css">
    <script type="text/javascript" src="'.domain.'/public/frontend/home/js/home.js"></script>
    ';
    $str.='<header>
    <div class="flex flex1 justify-content-between" style="height: 65px;">
        <div class="flex1col1">
            <h2 class="text-container-center logo">
                <a href=""><img src="'.domain.'/public/frontend/home/image/header-1.png" alt=""></a>
            </h2>
        </div>
        <div class="flex1col2">
            <div class="flex flex2 justify-content-between">
                <div class="flex2col1 text-container-center"><a href="'.link_tuvan.'"><img src="'.domain.'/public/frontend/home/image/header-2.png" alt=""></a></div>
                <div class="flex2col1 text-container-center"><a href="'.link_tuvan.'"><img src="'.domain.'/public/frontend/home/image/header-3.png" alt=""></a></div>
                <div class="flex2col1 text-container-center"><a href="'.link_lotrinhdenkham.'"><img src="'.domain.'/public/frontend/home/image/header-4.png" alt=""></a></div>
            </div>
        </div>
    </div>
</header>
<div class="home_menu">
<div class="home_main_item">
<ul class="menu">
<li class="menu_lv1">
    <a href="'.domain.'" style="padding: 0;">
        <b>
            <img src="'.domain.'/public/frontend/home/image/ico_home.png" alt="home" style="margin-top: -8px;">
            Trang chủ
        </b>
    </a>
</li>
<li class="menu_lv1" id="menu_lienquan">
    <b>
        Liên quan phòng khám
        <img src="'.domain.'/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <style>
        .home_menu .lien_quan ul{list-style: none;padding: 0 5px}
        .home_menu .lien_quan ul li{width: 100%;text-align: left;border-bottom: 1px solid #eee}
        .home_menu .lien_quan ul li:last-child{border-bottom: none;}
        .home_menu .lien_quan ul li:hover,.home_menu .lien_quan ul li:last-child:hover{background: #ccc}
        .home_menu .lien_quan ul li a{color: black;font-weight: normal;font-size: 14px;}
        .home_menu .lien_quan ul li a img{padding-right: 5px;float: left;}
        .home_menu .lien_quan ul li a span{display:block;padding-top: 5px;}
    </style>
    <div class="lien_quan menu_content menu_lienquan_content" style="width: 20%;position: absolute;">
        <ul>
            <li><a href="'.link_gioithieu.'"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_gt.png" alt="gioi thieu"><span>Giới thiệu phòng khám</span></a></li>
            <li><a href="'.link_quytrinhkham.'"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_qtk.png" alt="quy trình khám">Quy trình khám</a></li>
            <li><a href="'.link_kythuat.'" style="letter-spacing: -1px;"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_kt.png" alt="Kỹ thuật">Kỹ thuật chuyên nghiệp</a></li>
            <li><a href="'.link_thietbi.'"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_tb.png" alt="Kỹ thuật">Thiết bị hiện đại</a></li>
            <li><a href="'.link_tuvan.'"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_tvb.png" alt="Kỹ thuật">Tư vấn bệnh</a></li>
            <li><a href="'.link_diachi.'"><img src="'.domain.'/public/frontend/home/image/menu/ico_pk_dc.png" alt="Địa chỉ">Địa chỉ phòng khám</a></li>
        </ul>
    </div>
</li>
<li class="menu_lv1" id="menu_hangmuc">
    <b>
        Hạng mục điều trị
        <img src="'.domain.'/public/frontend/home/image/ico_muiten.png" alt="home">
    </b>
    <div class="menu_content menu_hangmuc_content" style="margin-left: -40%">
        <ul class="menu_content_hangmuc">
            <li>
                <ul>
                    <li><a href="/'.cat_rewrite_tri.'">Trĩ</a> </li>
                    <li><a href="/tri-noi">Trĩ nội</a> </li>
                    <li><a href="/tri-ngoai">Trĩ ngoại</a> </li>
                    <li><a href="/tri-hon-hop">Trĩ hỗn hợp</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/'.cat_rewrite_nutkehaumon.'">Nứt kẽ hậu môn</a> </li>
                    <li><a href="/'.cat_rewrite_apxehaumon.'">Áp xe hậu môn</a> </li>
                    <li><a href="/'.cat_rewrite_eczemahaumon.'">Eczema hậu môn</a> </li>
                    <li><a href="/'.cat_rewrite_nguahaumon.'">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/polyp-truc-trang">Polyp trực tràng </a> </li>
                    <li><a href="/'.cat_rewrite_daitienramau.'">Đại tiện ra máu</a> </li>
                    <li><a href="/'.cat_rewrite_rohaumon.'">Rò hậu môn</a> </li>
                    <li><a href="/'.cat_rewrite_nguahaumon.'">Ngứa hậu môn</a> </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="/'.cat_rewrite_taobon.'">Táo bón</a> </li>
                    <li><a href="/dau-hau-mon">Đau hậu môn</a> </li>
                    <li><a href="/sa-hau-mon">Sa hậu môn</a> </li>
                    <li><a href="/tac-mach-tri">Tắc mạch trĩ</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</li>
<li class="dangky_lv1 menu_lv1" id="menu_dangky">
    <b>
        <div class="clickdangky">
            Đăng ký hẹn khám
            <img src="'.domain.'/public/frontend/home/image/ico_muiten.png" alt="home">
        </div>
    </b>
    <div class="menu_content menu_dangky_content" style="margin-left: -60%; display: none;">
        <div class="menu_content_dangkykham">
            <div class="menu_content_dangkykham_tit">
                <p>Chào mừng bạn đến với hệ thống đăng ký khám qua mạng của phòng khám đa khoa Giải Phóng Hà Nội</p>
                <div id="div_menu_dangky_close" style="width: 27px;top: 10px;z-index: 99;float: right;position: absolute;right: 20px;">
                    <img src="'.domain.'/public/frontend/home/image/menu/ico_dangky_close.png" height="27px;width:27px;">
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $("#div_menu_dangky_close").click(function(){
                        $(".menu_dangky_content").css("display","none");
                    })
                                })
                                $(document).ready(function(){
                                    $(".clickdangky").click(function(){
                                        $(".menu_dangky_content").toggle();
                                    });
                                })
                                </script>
            <ul class="menu_content_dangkykham_info">
                <li class="dangkytructuyen">
                    <div class="dangkykham_info_tit">
                        <img src="'.domain.'/public/frontend/home/image/menu/ico_dk.png" alt="dang ky">Đăng ký trực tuyến
                                </div>
                    <div class="dangkykham_info_c">
                        <p><a href="'.link_tuvan.'">Đăng ký hẹn khám</a> </p><br>
                        <p>Thời gian tiếp nhận bệnh nhân:<br></p>
                        <p>
                            <i>Mùa Hè</i> : <b>7h30 - 20h:00</b>
                        </p>
                        <p>
                            <i>Mùa Đông</i> : <b>08h:00 - 20h:00</b>
                        </p>
                        <div class="dangkykham_info_c_knn">
                                Cả ngày lễ và chủ nhật
                                </div>
                    </div>
                    <div class="dangkykham_info_des">
                        <p>liên hệ trực tuyến với các bác sỹ, lựa chọn hạng mục chẩn trị, thời gian và thông tin cá nhân để đăng ký thành công</p>
                    </div>
                </li>
                <li class="dangkydienthoai">
                    <div class="dangkykham_info_tit">
                        <img src="'.domain.'/public/frontend/home/image/menu/ico_dt.png" alt="dien thoai">Đăng ký bằng điện thoại
                                </div>
                    <div class="dangkykham_info_c">
                        <p>Số điện thoại</p>
                        <p><b>'.phone1.'</b></p>
<p><b>'.phone2.'</b></p>
<p><b>'.phone3.'</b></p>
</div>
<div class="dangkykham_info_des">
    <p>chỉ cần gọi điện là có thể hẹn khám các khoa</p>
</div>
</li>
<li class="dangky">
    <div class="dangkykham_info_tit">
        <img src="'.domain.'/public/frontend/home/image/menu/ico_email.png" alt="dien thoai">Đăng ký Email
    </div>
    <div class="dangkykham_info_c">
        <form name="frmdangky" id="frmdangky" method="post" target="_self">
            <div class="row">
                <div class="col-sm-4">Họ tên</div>
                <div class="col-sm-8"><input type="text" name="hoten"></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Điện thoại</div>
                <div class="col-sm-8"><input type="text" name="dienthoai"></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Khoa khám</div>
                <div class="col-sm-8">
                    <select name="khoakham">
                        <option value="Trĩ">Trĩ</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">Thời gian</div>
                <div class="col-sm-8"><input type="text" id="thoigian"></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8"><button name="dangky" id="dangky">Đăng Ký</button></div>
            </div>
        </form>
    </div>
    <div class="dangkykham_info_des">
        <p>sau khi điền đầy đủ thông tin, nhân viên sẽ gọi điện lại xác nhận thông tin của bạn</p>
    </div>
</li>
</ul>
</div>
</div>
</li>
<li>
    <div class="input-group">
        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="search" style="width: 50px;">Go!</button>
                            </span>
    </div>
</li>
</ul>
</div>
</div>';
    $str.='
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script>
    $(function () {$("#thoigian").datepicker({dateFormat: "yy-mm-dd"});});
        $(document).ready(function(){
            $("#search").click(function(){
                var keyword=$("#keyword").val();
                if(keyword==""){
                    alert("Tìm kiếm không được để trống.");
                    window.location.href=("/");
                }else{
                    window.open("/search/"+keyword,"_blank");
                    done = true;
                }
            });
            $("#dangky").on("click", function (e) {
                                e.preventDefault();
                                var hoten = document.forms["frmdangky"]["hoten"].value;
                                var dienthoai = document.forms["frmdangky"]["dienthoai"].value;
                                var khoakham = document.forms["frmdangky"]["khoakham"].value;
                                var thoigian = document.forms["frmdangky"]["thoigian"].value;
                                var url=document.URL;
                                if(hoten=="" || dienthoai==""){
                                    alert("Họ tên và số điện thoại không được để trống.");
                                }else{
                                    var parameter="hoten="+hoten+"&dienthoai="+dienthoai+"&khoakham="+khoakham+"&thoigian="+thoigian+"&uri="+url;
                                    var link_dangky="http://phongkhamgiaiphong.com/dangky.php?"+parameter;
                                    window.location.href= link_dangky;
                                    return false;
                                }
                            });
        })
    </script>';
    return $str;
}
function cd_footer(){
    $str='<link rel="stylesheet" type="text/css" href="'.domain.'/public/frontend/home/css/footer.css">';
    $str.='<footer>
    <div class="container">
        <div class="flex flex1 justify-content-between">
            <div class="flex1col1">
                <h2>
                    <a href="'.domain.'">
                        <img src="'.domain.'/public/frontend/home/image/logo.png" alt="" class="center-block">
                    </a>
                </h2>
                <h3 class="text-uppercase text-center"><a href="">phòng khám đa khoa Giải Phóng</a></h3>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">TRUNG TÂM</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="'.link_gioithieu.'">Giới thiệu</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_thietbi.'">Thiết bị</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_tuvan.'">Trường hợp khỏi bệnh</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_tuvan.'">Tư vấn chi phí</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_tuvan.'">Tư vấn bệnh</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_diachi.'">Liên hệ</a></h5></li>
                </ul>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">HẠNG MỤC TRỊ LIỆU</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_tri.'">TRĨ</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_nutkehaumon.'">NỨT KẼ HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_apxehaumon.'">ÁP XE HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_apxehaumon.'">ECZEMA HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_nguahaumon.'">NGỨA HẬU MÔN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="/'.cat_rewrite_daitienramau.'">ĐẠI TIỆN RA MÁU</a></h5></li>
                </ul>
            </div>
            <div class="flex1col2">
                <h4 class="text-uppercase">DỊCH VỤ VÀ GIÚP ĐỠ</h4>
                <ul>
                    <li><h5 class="text-uppercase"><a href="'.link_lotrinhdenkham.'">LỘ TRÌNH PHÒNG KHÁM</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_tuvan.'">TƯ VẤN TRỰC TUYẾN</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_tuvan.'">ĐĂNG KÝ HẸN KHÁM</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_skype.'">SKYPE</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_facebook.'">FACEBOOK</a></h5></li>
                    <li><h5 class="text-uppercase"><a href="'.link_lotrinhdenkham.'">TUYẾN ĐƯỜNG</a></h5></li>
                </ul>
            </div>
            <div class="flex1col3">
                <p class="text-uppercase">Đường dây nóng tư vấn sức khỏe</p>
                <div class="clearfix">
                    <div class="pull-left">
                        <i class="dis-inline-block"></i>
                    </div>
                    <div class="pull-left">
                        <p><a href="'.link_tuvan.'"><strong>'.phone1.'</strong></a></p>
                        <p><a href="'.link_tuvan.'"><strong>'.phone2.'</strong></a></p>
                    </div>
                </div>
                <div>
                    <p><span class="text-uppercase"><strong>Địa chỉ:</strong></span> <a href="#">709 Giải Phóng - Hoàng Mai - Hà Nội</a></p>
                    <p><span class="text-uppercase"><strong>SỞ HỮU BẢN QUYỀN:</strong></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="flex flex2 justify-content-between">
            <div class="flex2col1">
                <div class="bg bg1"></div>
                <p><a href="'.link_tuvan.'">Liên hệ<br>bác sĩ</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg2"></div>
                <p><a href="'.link_tuvan.'">Kiểm tra<br>trước thủ thuật</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg3"></div>
                <p><a href="'.link_tuvan.'">Tư cách<br>bác sỹ</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg4"></div>
                <p><a href="'.link_tuvan.'">Vật tư<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg5"></div>
                <p><a href="'.link_tuvan.'">Thiết bị<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg6"></div>
                <p><a href="'.link_tuvan.'">Thủ thuật<br>an toàn</a></p>
            </div>
            <div class="flex2col1">
                <div class="bg bg7"></div>
                <p><a href="'.link_tuvan.'">Chăm sóc<br>sau thủ thuật</a></p>
            </div>
        </div>
    </div>
    <div class="footer-status text-center">
        Sở hữu bản quyền phòng khám đa khoa Giải Phóng  All rights reserved, Nội dung website này chỉ để tham khảo, không làm căn cứ để chẩn đoán điều trị. Tôn trọng ý kiến bác sĩ.
    </div>
</footer>';
    $str.=buffer_footer();
    return $str;
}
function m_Addtop(){
    $str='<script src="http://phongkhamgiaiphong.com/cd/js/m_funs.js"></script>';
    return $str;
}
function m_popup(){
    $str='<script src="http://phongkhamgiaiphong.com/popup/js/m_popfuns.js"></script>';
    return $str;
}
function m_CateOption($cate=null){
    $str='';
    $i=0;
    if($cate!=cat_rewrite_tri){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_tri.'">
                <div class="categories_list_item_content">
                    <img src="http://trihanoi.com/public/mobile/imgs/ico_cate_tri.png" alt="Trĩ">
                </div>
                <p>Trĩ</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_nutkehaumon){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_nutkehaumon.'">
                <div class="categories_list_item_content">
                    <img src="http://trihanoi.com/public/mobile/imgs/ico_cate_nkhm.png" alt="nứt kẽ hậu môn">
                </div>
                <p>Nứt kẽ hậu môn</p>
             </a>
        </div>';
    }
    if($cate!=cat_rewrite_rohaumon){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_rohaumon.'">
                <div class="categories_list_item_content">
                    <img src="http://trihanoi.com/public/mobile/imgs/ico_cate_rhm.png" alt="Rò hậu môn">
                </div>
                 <p>Rò hậu môn</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_taobon){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_taobon.'">
                <div class="categories_list_item_content">
                    <img src="http://trihanoi.com/public/mobile/imgs/ico_cate_tb.png" alt="táo bón">
                </div>
                <p>Táo bón</p>
            </a>
        </div>';
    }
    if($cate!=cat_rewrite_daitienramau){
        $i++;
        $str.='<div class="categories_list_item">
            <a href="/'.cat_rewrite_daitienramau.'">
                <div class="categories_list_item_content">
                    <img src="http://trihanoi.com/public/mobile/imgs/ico_cate_dtrm.png" alt="đại tiện ra máu">
                </div>
                <p>Đại tiện ra máu</p>
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
    if($cate['cat_alias']==cat_rewrite_tri){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_tri.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_tri.jpg';
        $txt='Trĩ （hemorrhoid）là một bệnh thường gặp ở vùng hậu môn, bất kỳ độ tuổi nào cũng có thể mắc phải, nhưng theo độ tuổi tăng cao thì tỷ lệ mắc bệnh cũng dần tăng cao. Ở Việt Nam, trĩ là bệnh về trực tràng hậu môn thường gặp nhất, trĩ ở các vị trí khác nhau mà chia thành: trĩ nội, trĩ ngoại, trĩ hỗn hợp. Ở Mỹ, tỷ lệ mắc bệnh trĩ ước tính là 5%.<br><br>
	Nhân tố gây ra bệnh trĩ có rất nhiều trong đó có táo bón, uống rượu trong thời gian dài, ăn thực phẩm cay nóng và ngồi lâu đứng lâu là những nguyên nhân chủ yếu. ';
    }
    if($cate['cat_alias']=='tri-noi'){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_tri.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_tri.jpg';
        $txt='Trĩ nội,  là bệnh được tạo thành do dãn quá mức các đám rối tĩnh mạch trĩ (hay sự phình tĩnh mạch) ở phần trên đường lược của cửa hậu môn, bề mặt được bao bởi lớp niêm mạc, thường gây đi ngoài ra máu, sa búi trĩ, táo bón và đây là các biểu hiện của các bệnh thuộc về bệnh trĩ. Trĩ nội là bệnh trực tràng hậu môn thường gặp nhất. Nếu bệnh chữa trị sớm, thường hồi phục tốt. Nhưng lại có một số người bệnh, không chữa trị kịp thời sống chung với bệnh, để bệnh gây ra những biến chứng mất nhiều máu...';
    }
    if($cate['cat_alias']=='tri-ngoai'){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_tri.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_tri.jpg';
        $txt='Trĩ ngoại, vị trí nằm dưới đường lược, do sự căng dãn quá mức của đám rối tĩnh mạch hoặc các nếp nhăn ở hậu môn bị viêm, sưng to, tăng sinh các tổ chức tế bào hoặc máu cục, đông gây mưng mủ. Bề mặt được phủ bởi da, nhìn thấy được, không dễ bị đẩy vào trong hậu môn, không dễ chảy máu, triệu chứng chủ yếu là những cơn đau dữ dội như có vật lạ ở hậu môn. Trong y học lâm sàng phân thành trĩ ngoại do tổ chức tế bào, do căng phồng dám rối tĩnh mạch, do viêm nhiễm, do máu cục đông.';
    }
    if($cate['cat_alias']=='tri-hon-hop'){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_tri.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_tri.jpg';
        $txt='Trĩ hỗn hợp là bệnh nhân xuất hiện cả trĩ nội và trĩ ngoại, vị trí nằm dưới và trên đường lược, bệnh do sự có dãn quá mức của một hoặc nhiều đám rối tĩnh mạch gây ra. Các biểu hiện lâm sàng bao gồm đi ngoài ra máu và sưng đau ở hậu môn, làm cho vùng da hậu môn nhão xuống, những cơn đau dữ dội như hậu môn đang có dị vật, có ít dịch nhầy hoặc nóng rát, nếu bệnh được chữa trị ngay ở giai đoạn đầu, dễ khỏi. Nhưng có một số người bệnh vì kéo dài không điều trị mà gây ra biến chứng thiếu máu cũng như các biến chứng nguy hiểm khác.';
    }
    if($cate['cat_alias']==cat_rewrite_nutkehaumon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_nutkehaumon.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_nutkehaumon.jpg';
        $txt='Nứt kẽ hậu môn là ống hậu môn nứt ra, nứt kẽ hậu môn（anal fissure）là vết rách ở phần da ống hậu môn dưới đường lược, là một bệnh thường tái phát nhiều lần. Vị trí thường gặp nhất của nứt kẽ hậu môn là vị trí chính giữ trước và sau hậu môn, trước kia gặp nhiều ở vị trí giữ.<br><br>
	Tỷ lệ mắc bệnh nứt kẽ hậu môn chiếm khoảng 20% trong số các bệnh trực tràng hậu môn, thường gặp ở người trẻ tuổi, nhưng nứt kẽ hậu môn thường gặp nhiều ở nữ giới, đặc biệt là những bạn trẻ tuổi. Ở nước chúng ta tỷ lệ nữ giới mặc bệnh gấp 1.8 so với nam giới, ở Nhật Bản kết quả báo cáo ở một tờ báo nổi tiếng tỉ lệ này là gấp 1.6 lần.';
    }
    if($cate['cat_alias']==cat_rewrite_apxehaumon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_apxehaumon.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_apxehaumon.jpg';
        $txt='Apxe hậu môn còn gọi là apxe quanh trực tràng ống hậu môn. Áp xe hậu môn là bệnh nhiễm trùng mủ cấp tính thường xảy ra ở hậu môn, ống hậu môn, quanh trực tràng, thuộc nhiễm trùng vi khuẩn, là tiền thân của rò hậu môn. Bệnh này và rò hậu môn là một trong 3 bệnh nghiêm trọng của trực tràng hậu môn, tỷ lệ phát bệnh ước tính khoảng 2%, chiếm 8-25% tỉ lệ bệnh về trực tràng hậu môn. Thường gặp ở nam giới độ tuổi 20-40 tuổi, tỷ lệ phát bệnh nam giới cao gấp 3-4 lần ở nữ giới, tỷ lệ phát bệnh ở trẻ nhỏ khá cao. Nếu không xử lý kịp thời, có thể dẫn đến sốc do nhiễm trùng thậm chí nguy hiểm đến tính mạng.';
    }
    if($cate['cat_alias']==cat_rewrite_eczemahaumon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_eczema.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_eczemahaumon.jpg';
        $txt='Eczema hậu môn （eczemaofanus、eczemaani）là chỉ vùng sa xung quang hậu môn, một số ít ở vùng cơ quan sinh dục. Ngứa ngáy khó chịu. Thướng ẩm ướt, lớp da sưng rộp, có thể gây lở loét. Bất kì độ tuổi nào đều có thể mắc phải.';
    }
    if($cate['cat_alias']==cat_rewrite_nguahaumon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_nguahaumon.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_nguahaumon.jpg';
        $txt='Ngứa hậu môn （Pruritus Ani）là chỉ một loại bệnh da liễu mà vùng da xung quang hậu môn không có bất kì tổn thương nào về da mà chỉ có triệu chứng ngứa rát. Bệnh này thường gặp ở người có độ tuổi từ 20-40. Thường gặp ở nam giới nhiều hơn nữ giới, để phát bệnh đối với những người không hay vận động.';
    }
    if($cate['cat_alias']==cat_rewrite_rohaumon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_rohaumon.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_rohaumon.jpg';
        $txt='Rò hậu môn (anal fistula）là tên viết tắt của rò trực tràng hậu môn, là bệnh xảy ra viêm loét quanh trực tràng hậu môn khi mủ apxe vỡ ra hoặc bệnh biến khi chảy mủ apxe qua đường rò. Bệnh thường gặp ở độ tuổi 20-40 tuổi. Trẻ nhỏ thường ít gặp, chủ yếu thường gặp ở nam gới, nữ giới ít gặp hơn, nam nữ tỉ lệ mắc bệnh là 5:1';
    }
    if($cate['cat_alias']==cat_rewrite_taobon){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_taobon.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_taobon.jpg';
        $txt='Táo bón (constipation） là triệu chứng lâm sàng phức tập thường gặp chứ không phải là một loại bệnh, chủ yếu là số lần đại tiện ít, khô cứng, đại tiện mất sức... Cần kết hợp với tính chất của phân, thói quen đại tiện bình thường và đại tiện có hay không có khăn để phán đoán có bị táo bón không. Nếu vượt quá 6 tháng là táo bón mãn tính.';
    }
    if($cate['cat_alias']==cat_rewrite_daitienramau){
        $ico_cat='http://trihanoi.com/public/mobile/imgs/ico_hm_daitienramau.png';
        $img_cat='http://trihanoi.com/public/mobile/imgs/img_cat_daitienramau.jpg';
        $txt='Đại tiện ra máu (hematochezia）là máu chảy ra từ trong hậu môn, phân có màu đỏ tươi, đỏ sẫm hoặc màu đen...đều gọi là đại tiện ra máu. Đại tiện ra máu là một triệu chứng và không phải là một loại bệnh. Đại tiện ra máu thường gặp là xuất huyết đường tiêu hóa, đặc biệt là chảy máu kết tràng và trực tràng, nhưng cũng có thể là xuất huyết trên đường tiêu hóa. Màu của đại tiện được quyết định bởi vị trí chảy máu ở đường tiêu hóa, lượng máu và thời gian máu ngưng tụ lại ở dạ dày.';
    }
    if(empty($txt)){
        $str='';
    }else{
        $str='<div class="categories_content">
        <div class="categories_des">
            <div class="categories_des_left">
                <div class="categories_des_img">
                    <a href="/'.$cate['cat_alias'].'">
                        <div class="categories_des_img2" ><img src="'.$ico_cat.'" alt="'.$cate['name'].'"></div>
                        <p style="'.$style.'">'.$cate['name'].'</p>
                    </a>
                </div>
            </div>
            <div class="categories_des_right">
                <div class="categories_des_right_img">
                <img src="'.$img_cat.'" alt="'.$cate['name'].'">
                </div>
            </div>
        </div>
        <p style="text-indent: 20px;text-align: justify">'.$txt.'</p>
    </div>';
    }
    return $str;
}