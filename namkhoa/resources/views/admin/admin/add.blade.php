@extends('admin.layouts.layout')
@section('content')
<div class="content" xmlns="http://www.w3.org/1999/html">
    <div class="header">
        <h1 class="page-title">Thêm thành viên</h1>
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
                            <label>Tên thành viên</label>
                            <input type="text" name="adm_name" value="" class="input-xlarge" placeholder="Tên thành viên">

                        <label>Tên tài khoản</label>
                        <input type="text" name="adm_account" value="" class="input-xlarge" placeholder="Tài khoản">
                            <label>Mật khẩu</label>
                            <input type="password" name="adm_password" value="" class="input-xlarge">
                            <label>Email</label>
                            <input type="email" name="adm_email" value="" class="input-xlarge" placeholder="thanhvien@gmail.com">
                            <label>Số điện thoại</label>
                            <input type="text" name="adm_mobile" value="" class="input-xlarge" placeholder="0123456789">
                            <label>Phân quyền</label>
                            <select name="adm_level" id="DropDownTimezone" class="input-xlarge">
                                <?php foreach($permission as $key=>$val){?>
                                <option value="<?php echo $val['per_level']?>"><?php echo $val['per_name'];?></option>
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