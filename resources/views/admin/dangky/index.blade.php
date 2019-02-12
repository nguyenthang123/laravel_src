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
                        <th>TG khám</th>
                        <th>TG Đăng ký</th>
                        <th>Mô tả</th>
                        <th>Site DK</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($dangkys)){?>
                    <?php foreach($dangkys as $key=>$val){?>
                            <?php
                            $link=$val['link'];
                            $pos=strpos($link,'.');
                            $site=substr($link,0,$pos+4);
                            $site=str_replace('http://','',$site);
                            ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $val['hoten'];?></td>
                        <td><?php echo $val['dienthoai'];?></td>
                        <td><?php echo $val['khoakham'];?></td>
                        <td><?php echo $val['thoigian'];?></td>
                        <td><?php echo $val['created_at'];?></td>
                        <td><?php echo $val['mota'];?></td>
                        <td><?php echo $site;?></td>
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
            <?php echo $dangkys->render(); ?>
        </div>
    </div>
</div>
@stop()