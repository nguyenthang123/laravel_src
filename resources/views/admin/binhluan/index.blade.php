@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Bình luận</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <a href="<?php echo domain . '/admin/binhluan/add'; ?>" class="btn btn-primary"><i
                        class="icon-plus"></i> Thêm mới</a>

                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>images</th>
                        <th>Họ tên</th>
                        <th>Điện thoại</th>
                        <th>Bình luận</th>
                        <th>Thái độ phục vụ</th>
                        <th>Hiệu quả điều trị</th>
                        <th>Chi phí khám</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th>Auth</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <style>
                        .com_img img{width: 40px;}
                    </style>
                    <tbody>
                    <?php if (!empty($binhluan)) { ?>
                        <?php foreach ($binhluan as $key => $val) { ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td class="com_img"><img src="<?= $val['com_img']; ?>"></td>
                                <td><?php echo $val['hoten']; ?></td>
                                <td><?php echo $val['dienthoai']; ?></td>
                                <td><?php echo $val['com_text']; ?></td>
                                <td><?php echo $val['thaidophucvu']; ?></td>
                                <td><?php echo $val['hieuquadieutri']; ?></td>
                                <td><?php echo $val['chiphikham']; ?></td>
                                <td><?php echo $val['com_type']; ?></td>
                                <td><?php echo $val['created_at']; ?></td>
                                <td><?php echo $val['created_at']; ?></td>
                                <td><?php if ($val['com_status'] == "1") {
                                        echo 'Hiện';
                                    } else {
                                        echo 'Ẩn';
                                    } ?></td>
                                <td>
                                    <a href="<?php echo domain . '/admin/binhluan/edit/' . $val['id']; ?>"><i
                                            class="icon-pencil"></i></a>
                                    <a href="<?php echo domain . '/admin/binhluan/del/' . $val['id']; ?>"
                                       onclick="if(!confirm('Bạn có muốn xóa?')) return false;" role="button"><i
                                            class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
                <style>
                    .pagination {
                        margin-top: 20px;
                        float: right;
                    }
                </style>
                <?= $binhluan->render(); ?>
            </div>
        </div>
    </div>
</div>
@stop()