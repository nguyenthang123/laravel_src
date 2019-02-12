@extends('admin.layouts.layout')
@section('content')
<script src="<?php echo domain;?>/public/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo domain;?>/public/admin/ckeditor/adapters/jquery.js"></script>
<div class="content" xmlns="http://www.w3.org/1999/html">
    <div class="header">
        <h1 class="page-title">Sửa Bệnh nhân</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php /*echo  Form::open(['files' => true]);*/?>
            <?php echo  Form::model($benhnhan,['files' => true,'method' => 'PATCH', 'action' => ['Admin\DangkyController@update',$benhnhan->id]]);?>
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
                        <label>Thời gian</label>
                        {!! Form::text('thoigian',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Mô tả bệnh</label>
                        {!! Form::textarea('mota', null, ['class' => 'input-xlarge form-control','size' => '30x3']) !!}
                        <?php if(!empty($loaibenh)){?>
                            <label>Danh mục bệnh</label>
                            <select name="khoakham">
                                <?php foreach($loaibenh as $key=>$val){?>
                                    <option value="<?php echo $val['name'];?>" <?php if($val['name']==$benhnhan['khoakham']){echo 'selected';}?>><?php echo $val['name'];?></option>
                                <?php }?>
                            </select>
                        <?php }?>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop()