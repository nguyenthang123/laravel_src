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
                        <label>Tuổi</label>
                        {!! Form::text('tuoi',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Nghề nghiệp</label>
                        {!! Form::text('nghenghiep',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Quê quán</label>
                        {!! Form::text('quequan',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Tóm tắt</label>
                        {!! Form::textarea('com_text', null, ['class' => 'input-xlarge form-control','size' => '30x3']) !!}
                        <label>Hình ảnh</label>
                        {!! Form::file('com_img') !!}
                        <p class="errors">{!!$errors->first('image')!!}</p>
                        @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                        <label>Danh mục</label>
                        <select name="com_type">
                            <option value="">Chọn Danh Mục</option>
                            <option value="hoi-nach">Hôi Nách</option>
                            <option value="nam-khoa">Nam khoa</option>
                            <option value="phu-khoa">Phụ khoa</option>
                            <option value="benh-xa-hoi">Bệnh xã hội</option>
                            <option value="benh-tri">Bệnh trĩ</option>
                            <option value="tai-mui-hong">Tai mũi họng</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()