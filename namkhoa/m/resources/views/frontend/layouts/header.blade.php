<!--@section('sidebar')-->
<?php
use Illuminate\Support\Facades\DB;
/*$Arr = array('cat_parent' => '3', 'cat_status' => 1);
$cat_kehoachhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '12', 'cat_status' => 1);
$cat_cotucung = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '17', 'cat_status' => 1);
$cat_chinhhinhphukhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '22', 'cat_status' => 1);
$cat_viemnhiemphukhoa = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '28', 'cat_status' => 1);
$cat_vosinh = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '33', 'cat_status' => 1);
$cat_noitiettonu = DB::table('categories')->where($Arr)->get();
$Arr = array('cat_parent' => '38', 'cat_status' => 1);
$cat_benhxahoi = DB::table('categories')->where($Arr)->get();*/
?>
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
            <h1 class="h1">Phòng khám phụ khoa chuyên nghiệp Hà Nội</h1>
        </div>
    </div>
</div>
<div class="menu_main" style="display: none">
    <div class="menu_main_left">
        <img src="http://phukhoa168.com/public/mobile/menu_images/bg_lv1.png" style="width: 100%;float: left;">
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
                        <strong class="daucham"></strong>Địa Chỉ
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
            <img src="http://phukhoa168.com/public/mobile/menu_images/img_gioithieu.png" alt="gioi thieu">
        </div>
    </div>
    <?php
    $ArrIn=array(6,7,8,9,10);
    $Arr=array('cat_status'=>1);
    $menu=DB::table('categories')->where($Arr)->whereIn('id',$ArrIn)->get();
    foreach($menu as $key=>$val){
        $Arr=array('cat_status'=>'1','cat_parent'=>$val['id']);
        $menu[$key]['lv2']=DB::table('categories')->where($Arr)->get();
    }
    ?>
    <div class="menu_sub content_menu_lv1_item2">
        <ul class="lv2">
            <?php foreach($menu as $key=>$val){?>
                <li>
                    <div class="lv2_conten">
                        <a href="/<?= $val['cat_rewrite'];?>" style="letter-spacing: -0.3px;"><strong class="daucham"></strong><?= $val['cat_name'];?></a><span class="show_menu_lv3 menu_lv2_item2_<?= $key;?>" id="menu_lv2_item2_<?= $key;?>"></span>
                    </div>
                    <?php if(!empty($val['lv2'])){?>
                        <div class="menu_lv3 content_menu_lv2_item2_<?= $key;?>">
                            <ul class="lv3">
                                <?php foreach($val['lv2'] as $key2=>$val2){?>
                                    <?php if($val2['id']==36){$str='letter-spacing: -0.9px;';}else{ $str='';}?>
                                    <li><a href="/<?= $val2['cat_rewrite'];?>" style="<?= $str;?>"><?= $val2['cat_name'];?></a></li>
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
                <p><i><strong class="daucham" style="margin-top: 0.5rem"></strong>Để phục vụ tốt hơn cho việc khám chữa bệnh của đông đảo bệnh nhân, phòng khám 168 mở dịch vụ khám chữa bệnh buổi tối, thời gian khám bệnh kéo dài đến 20h hằng ngày.</i></p>
                <p><strong class="daucham" style="margin-top: 0.5rem"></strong><b>Thời gian khám bệnh</b><br><b>7:30 - 20:00 </b><i> (không nghỉ lễ)</i></p>
                <p><i><strong class="daucham" style="margin-top: 0.5rem"></strong>Cảm ơn sự tin tưởng của bạn đối với phòng khám, 168 đồng hành cùng sức khỏe của bạn.</i></p>
            </div>
        </div>
    </div>
</div>
<?= m_Addtop();?>
<div class="clear" style="float: left"></div>
<div class="main_item padding_x15 search">
    <div class="row">
        <div class="col-xs-12">
            <div class="input-group">
                <input type="text" id="txtsearch" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-timkiem" id="search" type="button">Tìm kiếm</button>
                      </span>
            </div>
        </div>
    </div>
</div>
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