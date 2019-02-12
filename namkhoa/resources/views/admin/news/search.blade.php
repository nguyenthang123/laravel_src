@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Tìm kiếm bài viết</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <form method="get" action="/admin/news/search">
                    <input type="text" name="new_name" id="new_name" value="<?php if(!empty($new_name)){echo $new_name;}?>" class="input-xlarge" placeholder="Nhập từ khóa" style="margin-top: 9px;margin-left: 30px;">
                    <input class="tbn input-xlarge" type="submit" value="Search">
                    <br>
                    <input type="checkbox" name="adm_created" <?php if(!empty($adm_created)){echo 'checked';}?> value="<?= $_SESSION['adm_id'];?>"><span style="font-size: 14px;">Bài viết của tôi</span>
                </form>
                <!--<input type="text" name="new_name" id="new_name" value="<?php /*if(!empty($new_name)){echo $new_name;}*/?>" class="input-xlarge" placeholder="Nhập từ khóa" style="margin-top: 9px;margin-left: 30px;">
                <button class="btn" type="buttonu" name="search" id="search">Tìm kiếm</button>
                <br>
                <input type="checkbox" name="adm_created" <?php /*if(!empty($adm_created)){echo 'checked';}*/?> value="<?/*= $_SESSION['adm_id'];*/?>"><span style="font-size: 14px;">Bài viết của tôi</span>
                <script>
                    $("#search").click(function(){
                        var keyword=$("#keyword").val();
                        if(keyword==""){
                            alert('Bạn chưa nhập từ khóa.');
                            window.location.href=(document.URL);
                        }else{
                            var link='<?php /*echo domain.'/admin/news/search/';*/?>'+keyword;
                            window.location.href=(link);
                        }
                    })
                </script>-->
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Trạng thái</th>
                        <th>Auth</th>
                        <th style="width: 41px;">Action</th>
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
                        <td><?php if($val['new_status']=="1"){ echo 'Hiện';}else{ echo 'Ẩn';}?></td>
                        <td><?= $val['adm_name'];?></td>
                        <td>
                            <a href="<?php echo domain.'/'.$val['new_rewrite'];?>" target="_blank"><i class="icon-circle-arrow-up"></i></a>
                            <a href="<?php echo domain.'/admin/news/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/news/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php }?>
                    <?php }?>
                    </tbody>
                </table>
            </div>
            <?php echo $news->appends(['new_name' => $new_name,'adm_created'=>$adm_created])->render(); ?>
        </div>
    </div>
</div>
@stop()