@extends('admin.layouts.layout')
@section('content')
<div class="content" xmlns="">
    <div class="header">
        <h1 class="page-title">Thêm thành viên</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo  Form::model($data,[ 'method' => 'PATCH', 'action' => ['Admin\AdminController@update', $data->id] ]);?>
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
                            <!--<input type="text" name="adm_name" value="" class="input-xlarge" placeholder="Tên thành viên">-->
                        {!! Form::text('adm_name',null,array( 'class' => 'input-xlarge form-control')) !!}
                            <label>Email</label>
                            <!--<input type="email" name="adm_email" value="" class="input-xlarge" placeholder="thanhvien@gmail.com">-->
                        {!! Form::text('adm_email',null,array( 'class' => 'input-xlarge form-control')) !!}
                            <label>Số điện thoại</label>
                            <!--<input type="text" name="adm_mobile" value="" class="input-xlarge" placeholder="0123456789">-->
                        {!! Form::text('adm_mobile',null,array( 'class' => 'input-xlarge form-control')) !!}
                            <label>Phân quyền</label>
                        {!! Form::select('adm_level', $permis2) !!}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop()