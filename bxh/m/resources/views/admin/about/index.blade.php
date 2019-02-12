@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Banners</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain.'/admin/about/add';?>" class="btn btn-primary"><i class="icon-plus"></i> Thêm mới</a>
                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Trạng thái</th>
                        <th style="width: 26px;"></th>
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
                        <td>
                            <a href="<?php echo domain.'/admin/about/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/about/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php }?>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop()