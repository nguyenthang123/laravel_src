<!--@section('sidebar')-->
<?php
use Illuminate\Support\Facades\DB;
$Arr = array('cat_parent' => '3', 'cat_status' => 1);
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
$cat_benhxahoi = DB::table('categories')->where($Arr)->get();
?>
<div class="main_header">
    <div class="col-xs-12">
        <div class="logo_top">
            <a href="<?= domain;?>">
                <img src="/public/frontend/imgs/logo_top.png" alt="logo">
            </a>
        </div>
        <div class="header_right">
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img src="/public/frontend/imgs/ico_dienthoai.gif" alt="dien thoai" style="max-width: 100%;max-height: 61px;">
            </a>
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
        <!--<div class="col-xs-3">
            <a href="<?/*= link_tuvan;*/?>" class="btn btn-hoibacsy">Hỏi bác sỹ</a>
        </div>-->
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