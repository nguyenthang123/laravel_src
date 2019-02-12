@extends('admin.layouts.layout')
@section('content')
<script src="<?php echo domain;?>/public/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo domain;?>/public/admin/ckeditor/adapters/jquery.js"></script>
<div class="content" xmlns="http://www.w3.org/1999/html">
    <div class="header">
        <h1 class="page-title">Sửa Bài viết</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php /*echo  Form::open(['files' => true]);*/?>
            <?php echo  Form::model($data,['files' => true,'method' => 'PATCH', 'action' => ['Admin\AboutController@update',$data->id]]);?>
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
                        <label>Tên News</label>
                        {!! Form::text('new_name',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Title seo</label>
                        {!! Form::text('new_seotitle',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Keywords seo</label>
                        {!! Form::text('new_seokeywords',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Description seo</label>
                        {!! Form::text('new_seodescription',null,array( 'class' => 'input-xlarge form-control')) !!}
                        <label>Tóm tắt</label>
                        {!! Form::textarea('new_description', null, ['class' => 'input-xlarge form-control','size' => '30x3']) !!}
                        <label>Hình ảnh</label>
                        {!! Form::file('new_img') !!}
                        <p class="errors">{!!$errors->first('image')!!}</p>
                        @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                        <?php if(!empty($cate)){?>
                            <label>Danh mục bài viết</label>
                            <select name="cat_id">
                                <?php foreach($cate as $key=>$val){?>
                                    <option value="<?php echo $val['id'];?>" <?php if($val['id']==$data->cat_id){echo 'selected';}?>><?php echo $val['cat_name'];?></option>
                                    <?php if(!empty($cate[$key]['lv2'])){?>
                                        <?php foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){?>
                                            <option value="<?php echo $vallv2['id'];?>" <?php if($vallv2['id']==$data->cat_id){echo 'selected';}?>>|--<?php echo $vallv2['cat_name'];?></option>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            </select>
                        <?php }?>
                        <label>
                            <span class="abc">Hot :    <?php echo Form::checkbox('new_hot', '1', false);?></span>
                            <span class="abc">Nổi bật :    <?php echo Form::checkbox('new_advanced', '1', false);?></span>
                            <span class="abc">Xem nhiều :    <?php echo Form::checkbox('new_seemore', '1', false);?></span>
                            <span class="abc">Hiện :    <?php echo Form::checkbox('new_status', '1', false);?></span>
                        </label>
                        <label>Nội dung</label>
                        <script>
                            CKEDITOR.disableAutoInline = true;
                            $( document ).ready( function() {
                                $( '#new_content' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
                                $( '#editable' ).ckeditor(); // Use CKEDITOR.inline().
                            } );
                            function setValue() {
                                $( '#new_content' ).val( $( 'input#val' ).val() );
                            }
                        </script>
                        {!! Form::textarea('new_content', null, ['class' => 'input-xlarge form-control','id'=>'new_content','size' => '30x3']) !!}
                    </div>
                </div>
            </div>
            </form>
            <!--ajax-->
            <script>
                $(document).ready(function(){
                    $('#xemanh').click(function(){
                        var id=$(this).attr('data-i');
                        $.ajax({
                            method: "POST",
                            url: "<?php echo domain;?>/admin/ajaxs/editoption_viewimg/news",
                            data: {id:id}
                        })
                            .done(function( msg ) {
                                $( "#ajaxview" ).html( msg );
                            });
                    });
                })
                $(document).ready(function (e) {
                    $('#upanh').on('submit',(function(e) {
                        e.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                            type:'POST',
                            url: "<?php echo domain;?>/admin/ajaxs/editoption_addimg/news",
                            beforeSend: function (xhr) {
                                //var token = $('meta[name="csrf_token"]').attr('content');
                                var token = $('input[name="_token"]').attr('value');
                                if (token) {
                                    //return xhr.setRequestHeader('_token', token);
                                    //return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                    xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                    xhr.setRequestHeader('X-XSRF-Token', token);
                                }
                            },
                            data:formData,
                            cache:false,
                            contentType: false,
                            processData: false,
                            success:function(data){
                                $( "#ajaxview" ).html( data );
                            }
                        });
                    }));

                    $("#addimg").on("change", function() {
                        $("#upanh").submit();
                    });
                });
            </script>
            <input type="button" name="" id="xemanh" value="Xem ảnh" data-i="<?php echo $data->id;?>">
            <form method="post" id="upanh" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="file" name="upanh" id="addimg" value="Thêm ảnh">
                <input type="hidden" name="new_id" value="<?php echo $data->id;?>">
            </form>
            <div id="ajaxview"></div>
        </div>
    </div>
</div>
@stop()