@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">
        <h1 class="page-title">Thêm config</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo  Form::open();?>
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
                            <label>Tên Config</label>
                            <input type="text" name="con_name" value="" class="input-xlarge" placeholder="Tên Config">
                            <label>Value Config</label>
                            <input type="text" name="con_value" value="" class="input-xlarge" placeholder="Giá trị">
                            <label>Kiểu Config</label>
                            <input type="text" name="con_type" value="" class="input-xlarge" placeholder="Kiểu config">
                            <label>Số thứ tự</label>
                            <input type="text" name="adm_mobile" value="" class="input-xlarge" placeholder="0123456789">
                            <label>Type Config</label>
                            <select name="con_element" id="DropDownTimezone" class="input-xlarge">
                                <?php foreach($con_element as $key=>$val){?>
                                <option value="<?php echo $val['cat_rewrite']?>"><?php echo $val['cat_name'];?></option>
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