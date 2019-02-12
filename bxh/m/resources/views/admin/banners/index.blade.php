@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Banners</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain.'/admin/banners/add';?>" class="btn btn-primary"><i class="icon-plus"></i> Thêm mới</a>
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
                        <th>Link</th>
                        <th>Kiểu</th>
                        <th>Trạng thái</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($banners)){?>
                    <?php foreach($banners as $key=>$val){?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $val['ban_name'];?></td>
                        <td>
                            <?php if(!empty($val['ban_image'])){?>
                                <img src="<?php echo domain.$val['ban_image'];?>" style="width: 50px; height: 50px;">
                            <?php }?>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $val['ban_link'];?>">
                        </td>
                        <td><?php echo $val['ban_type'];?></td>
                        <td><?php if($val['ban_status']=="1"){ echo 'Hiện';}else{ echo 'Ẩn';}?></td>
                        <td>
                            <a href="<?php echo domain.'/admin/banners/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/banners/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i class="icon-remove"></i></a>
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