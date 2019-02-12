@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Thành viên</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain.'/admin/admin/add';?>" class="btn btn-primary"><i class="icon-plus"></i> Thêm mới</a>
                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>nhóm quyền</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($admins as $key=>$val){?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $val['adm_name'];?></td>
                        <td><?php echo $val['adm_email'];?></td>
                        <td><?php echo $val['adm_mobile'];?></td>
                        <td><?php foreach($permission as $keyper=>$valper){if($valper['per_level']==$val['adm_level']){echo $valper['per_name'];}}?></td>
                        <td>
                            <?php if($_SESSION['adm_level']=="1"){?>
                            <a href="<?php echo domain.'/admin/admin/edit/'.$val['id'];?>"><i class="icon-pencil"></i></a>
                            <a href="<?php echo domain.'/admin/admin/del/'.$val['id'];?>" role="button"><i class="icon-remove"></i></a>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop()