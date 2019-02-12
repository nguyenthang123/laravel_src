@extends('admin.layouts.layout')
@section('content')
<script src="<?php echo domain;?>/public/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo domain;?>/public/admin/ckeditor/adapters/jquery.js"></script>
<div class="content">
    <div class="header">
        <h1 class="page-title">Thêm bình luận</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo  Form::open(['files' => true]);?>
            <div class="btn-toolbar">
                <input type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</input>
                <div class="btn-group">
                </div>
            </div>
            @if ( $errors->any() )
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <div class="well">
                <div id="myTabContent" class="tab-content">
                    <style>
                        .abc{padding-right: 50px;}
                    </style>
                    <div class="tab-pane active in" id="home">
                        <label>Họ tên</label>
                        {!! Form::text('hoten',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Điện thoại</label>
                        {!! Form::text('dienthoai',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Thái độ phục vụ</label>
                        <select name="thaidophucvu">
                            <?php foreach(bl_thaidophucvu() as $val){?>
                            <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Đã khám lần nào chưa</label>
                        <select name="dadenkham">
                            <?php foreach(bl_dadenkham() as $val){?>
                                <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Loại bệnh</label>
                        <select name="loaibenh">
                            <?php foreach(bl_loaibenh() as $val){?>
                                <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Hiệu quả điều trị</label>
                        <select name="hieuquadieutri">
                            <?php foreach(bl_hieuquadieutri() as $val){?>
                                <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Chi phí khám</label>
                        <select name="chiphikham">
                            <?php foreach(bl_chiphikham() as $val){?>
                                <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Môi trường phòng khám</label>
                        <select name="moitruongphongkham">
                            <?php foreach(bl_moitruongphongkham() as $val){?>
                                <option value="<?= $val['rewrite'];?>"><?= $val['name'];?></option>
                            <?php }?>
                        </select>
                        <label>Tóm tắt</label>
                        {!! Form::textarea('com_text', null, ['class' => 'input-xlarge form-control','size' => '30x3']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()