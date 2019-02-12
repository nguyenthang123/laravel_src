@extends('admin.layouts.layout')
@section('content')
<div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Sign In</p>
            <div class="block-body">
                <!--<form name="frm" method="post" enctype="multipart/form-data">-->
                <?php echo  Form::open();?>
                    <label>Username</label>
                    <input type="text" name="adm_name" class="span12">
                    <label>Password</label>
                    <input type="password" name="adm_password" class="span12">
                    <input type="submit" name="login" class="btn btn-primary pull-right">Sign In</a>
                    <label class="remember-me"><input type="checkbox"> Remember me</label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p><a href="#">Forgot your password?</a></p>
    </div>
</div>
@stop()
@if ( $errors->any() )
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif