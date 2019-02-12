@extends('admin.layouts.layout')
@section('content')
<script src="<?= domain;?>/public/admin/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
<div class="content">
    <div class="header">
        <h1 class="page-title">Bài viết</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain.'/admin/news/add';?>" class="btn btn-primary"><i class="icon-plus"></i> Thêm mới</a>
                <form method="get" action="/admin/news/search" style="margin: 0px;">
                    <input type="text" name="new_name" id="new_name" value="" class="input-xlarge" placeholder="Nhập từ khóa" style="margin-top: 9px;margin-left: 30px;">
                    <input class="btn" type="submit" value="tìm kiếm" id="search">
                </form>
                <select name="cate" id="cate" style="margin-top: 9px;  margin-left: 30px;">
                    <option value="">Xem theo danh mục</option>
                    <?php foreach($categories as $key=>$val){?>
                    <option value="<?php echo $val['cat_rewrite'];?>" <?php if($val['cat_rewrite']==$cate){echo 'selected';}?>><?php echo $val['cat_name'];?></option>
                        <?php if(!empty($categories[$key]['lv2'])){?>
                            <?php foreach($categories[$key]['lv2'] as $keylv2=>$vallv2){?>
                                <option value="<?php echo $vallv2['cat_rewrite'];?>" <?php if($vallv2['cat_rewrite']==$cate){echo 'selected';}?>>|--<?php echo $vallv2['cat_name'];?></option>
                                <?php }?>
                            <?php }?>
                    <?php }?>
                </select>
                <script>
                    $(document).ready(function(){
                        $("#search").click(function(){
                            var keyword=$("#keyword").val();
                            if(keyword==""){
                                alert('Bạn chưa nhập từ khóa.');
                                window.location.href=(document.URL);
                            }else{
                                var link='<?php echo domain.'/admin/news/search/';?>'+keyword;
                                window.location.href=(link);
                            }
                        });
                        $("#cate").change(function(){
                            var cate=$("#cate").val();
                            if(cate==""){
                                var link='<?php echo domain.'/admin/news/index';?>';
                                window.location.href=(link);
                            }else{
                                var link='<?php echo domain.'/admin/news/index/';?>'+cate;
                                window.location.href=(link);
                            }
                        })
                    })
                </script>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th style="width: 68px;">Trạng thái</th>
                        <th style="width: 71px;">Người viết</th>
                        <th style="width: 33px;">view</th>
                        <th style="width: 41px;">Action</th>
                        <th style="width: 13px;"><input type="checkbox"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($news)){?>
                    <?php foreach($news as $key=>$val){?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $val['new_name'];?></td>
                        <td>
                            <?php if(!empty($val['new_img'])){?>
                                <img src="<?php echo domain.$val['new_img'];?>" style="width: 50px; height: 50px;">
                            <?php }?>
                        </td>
                        <td style="text-align: center;"><?php if($val['new_status']=="1"){ echo 'Hiện';}else{ echo 'Ẩn';}?></td>
                        <td style="text-align: center;"><?php echo $val['adm_name'];?></td>
                        <td style="text-align: center;"><?php echo $val['new_view'];?></td>
                        <td>
                            <a href="<?php echo domain.'/'.$val['new_rewrite'];?>" target="_blank"><i class="icon-circle-arrow-up"></i></a>
                            <a href="<?php echo domain.'/admin/news/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/news/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i class="icon-remove"></i></a>
                        </td>
                        <td><input type="checkbox" value="<?php echo $val['id'];?>"></td>
                    </tr>
                    <?php }?>
                    <?php }?>
                    </tbody>
                </table>
            </div>
            <?php echo $news->render(); ?>
        </div>
    </div>
</div>
@stop()