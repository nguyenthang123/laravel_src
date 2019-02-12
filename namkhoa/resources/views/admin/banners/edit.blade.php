@extends('admin.layouts.layout')
@section('content')
<div class="content" xmlns="http://www.w3.org/1999/html">
    <div class="header">
        <h1 class="page-title">Sửa banner</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo  Form::model($data,['files' => true,'method' => 'PATCH', 'action' => ['Admin\BannersController@update',$data->id]]);?>
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
                            <label>Tên banner</label>
                        {!! Form::text('ban_name',null,array( 'class' => 'input-xlarge form-control')) !!}
                            <label>Link banners</label>
                        {!! Form::text('ban_link',null,array( 'class' => 'input-xlarge form-control')) !!}
                            <label>Hình ảnh</label>
                            {!! Form::file('ban_image') !!}
                        <p class="errors">{!!$errors->first('image')!!}</p>
                        @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                        <label>Trạng thái  => Hiện : <?php echo Form::checkbox('ban_status', '1', true);?></label>
                            <label>Kiểu banner</label>
                            <select name="ban_type">
                                <?php foreach($banners_type as $key=>$val){?>
                                <option value="<?php echo $val['cat_rewrite'];?>"<?php if($val['cat_rewrite']==$data['ban_type']){echo 'selected';}?>><?php echo $val['cat_name'];?></option>
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