<link href="<?php echo domain;?>/public/admin/css/custom.css" rel="stylesheet" type="text/css">
<!--<script src="http://shopweb365.com/public/backend/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>-->

@extends('admin.layouts.layout')
@section('content')
<div class="content">
<div class="header">
    <h1 class="page-title">Danh mục</h1>
</div>
<div class="container-fluid">
<div class="row-fluid">
<style type="text/css">
    .tbnsubmit {
        margin-left: 70px;
        margin-bottom: 10px;
    }
    .txtmenu {
        width: 264px;
    }
</style>
<!--end validate-->
<div class="well">
<div class="block divview">
    <ul class="level1">
        <?php foreach($cate as $key=>$val){?>
        <li class="stt">
            <div class="menu_tit">
                <a><?php if($val['cat_status']==0){echo 'Ẩn';}else{ echo 'Hiện';}?></a>
                <input type="text" value="<?php echo $val['cat_sort'];?>"><?php echo $val['cat_name'];?>
                <a href="<?php echo domain.'/admin/categories/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;"><i class="icon-remove"></i></a>
                <a href="<?php echo domain.'/admin/categories/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                <a><?= $val['cat_type'];?></a>
                <a><?= $val['cat_type_show'];?></a>
            </div>
            <?php if(!empty($cate[$key]['lv2'])){?>
            <ul class="level2">
                <?php foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){?>
                    <li class="stt">
                        <div class="menu_tit">
                            <a><?php if($vallv2['cat_status']==0){echo 'Ẩn';}else{ echo 'Hiện';}?></a>
                            <input type="text" value="<?php echo $vallv2['cat_sort']?>"> <?php echo $vallv2['cat_name'];?>
                            <a href="<?php echo domain.'/admin/categories/del?id='.$vallv2['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;"><i class="icon-remove"></i></a>
                            <a href="<?php echo domain.'/admin/categories/edit/'.$vallv2['id'];?>"><i class="icon-pencil"></i></a>
                            <a><?= $vallv2['cat_type'];?></a>
                            <a><?= $vallv2['cat_type_show'];?></a>
                        </div>
                        <?php if(!empty($cate[$key]['lv2'][$keylv2]['lv3'])){?>
                            <ul class="level3">
                                <?php foreach($cate[$key]['lv2'][$keylv2]['lv3'] as $vallv3){?>
                                <li class="stt">
                                    <div class="menu_tit">
                                        <a><?php if($vallv3['cat_status']==0){echo 'Ẩn';}else{ echo 'Hiện';}?></a>
                                        <input type="text" value="<?php echo $vallv3['cat_sort']?>"> <?php echo $vallv3['cat_name'];?>
                                        <a href="<?php echo domain.'/admin/categories/del?id='.$vallv3['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;"><i class="icon-remove"></i></a>
                                        <a href="<?php echo domain.'/admin/categories/edit/'.$vallv3['id'];?>"><i class="icon-pencil"></i></a>
                                        <a><?= $vallv3['cat_type'];?></a>
                                        <a><?= $vallv3['cat_type_show'];?></a>
                                    </div>
                                 </li>
                                <?php }?>
                            </ul>
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
        </li>
        <?php }?>
    </ul>
</div>
</div>
</div>
</div>
</div>
@stop()