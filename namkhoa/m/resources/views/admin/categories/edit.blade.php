@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Sửa danh mục</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo  Form::model($data,[ 'method' => 'PATCH', 'action' => ['Admin\CategoriesController@update',$data->id]] );?>
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
                    <div class="tab-pane active in" id="home">
                        <label>Tên danh mục</label>
                        {!! Form::text('cat_name',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Title seo</label>
                        {!! Form::text('cat_seotitle',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Keywords seo</label>
                        {!! Form::text('cat_seokeywords',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Description seo</label>
                        {!! Form::text('cat_seodescription',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Category image</label>
                        {!! Form::text('cat_img',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Category image style</label>
                        {!! Form::text('cat_img_style',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Số thứ tự</label>
                        {!! Form::text('cat_sort',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Trạng thái  => Hiện : <?php echo Form::checkbox('cat_status', '1', true);?></label>
                        <label>Kiểu hiện thị => default : {!! Form::radio('cat_type_show', 'index',true) !!} List : {!! Form::radio('cat_type_show', 'list') !!} Nguyên nhân : {!! Form::radio('cat_type_show', 'nguyennhan') !!} </label>
                        <label>Kiểu danh mục => Data : {!! Form::radio('cat_type', 'data') !!} News : {!! Form::radio('cat_type', 'news',true) !!} About : {!! Form::radio('cat_type', 'about') !!}</label>
                        <label>Danh muc hot  => Hot : <?php echo Form::checkbox('cat_hot', '1', true);?></label>
                        <label>Chọn danh mục</label>
                        <select name="cat_parent" id="DropDownTimezone" class="input-xlarge">
                            <option value="0">Chọn danh mục cha</option>
                            <?php foreach($cate as $key=>$val){?>
                                <option value="<?php echo $val['id']?>" <?php if($val['id']==$data['cat_parent']){ echo 'selected';}?>><?php echo $val['cat_name'];?></option>
                                <?php if(!empty($cate[$key]['lv2'])){?>
                                    <?php foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){?>
                                        <option value="<?php echo $vallv2['id']?>" <?php if($vallv2['id']==$data['cat_parent']){ echo 'selected';}?>>|--<?php echo $vallv2['cat_name'];?></option>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop()