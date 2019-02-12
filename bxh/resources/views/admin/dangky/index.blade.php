@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Bệnh nhân</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain.'/admin/dangky/add';?>" class="btn btn-primary"><i class="icon-plus"></i> Thêm mới</a>
                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Điện thoại</th>
                        <th>Khám bệnh</th>
                        <th>Thời gian</th>
                        <th>Mô tả</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($dangkys)){?>
                    <?php foreach($dangkys as $key=>$val){?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $val['hoten'];?></td>
                        <td><?php echo $val['dienthoai'];?></td>
                        <td><?php echo $val['khoakham'];?></td>
                        <td><?php echo $val['thoigian'];?></td>
                        <td><?php echo $val['mota'];?></td>
                        <td>
                            <a href="<?php echo domain.'/admin/dangky/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/dangky/del/'.$val['id'];?>" onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i class="icon-remove"></i></a>
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