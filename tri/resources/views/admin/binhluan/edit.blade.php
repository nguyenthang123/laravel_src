
@include('admin.head')

	
	<div id="wrapper" class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<div class="row">
       
			<h2>Chỉnh sửa bài viết</h2>
	
			{!! Form::open(array('method' => 'PATCH','action' => array('Admin\BinhluanController@update',$data->id ))) !!}
				<div class="row add-user">
					<div class="col-md-1">
						Name
					</div>
					<div class="col-md-11">
						{!! Form::text('hoten',$data->hoten,array('class' => 'form-control')) !!}
					</div>
				</div>
                <div class="row add-user">
                    <div class="col-md-1">
                        Số điện thoại
                    </div>
                    <div class="col-md-11">
                        {!! Form::text('dienthoai',$data->dienthoai,array('class' => 'form-control')) !!}
                    </div>
                </div>
				<div class="row add-user">
					<div class="col-md-1">
						Nội dung
					</div>
					<div class="col-md-11">
					        <textarea id="com_text" name="com_text"> {{$data->com_text}} </textarea>
						<script>CKEDITOR.replace('com_text');</script>
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Hiển thị
					</div>
					<div class="col-md-5">
					<input type="checkbox" name="com_status" value="1"<?php if($data->com_status) echo 'checked'; ?> >  Để bài viết Hoạt Động luôn thì check vào ô này
					</div>
				</div>					
				
				<div class="row add-user">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-10">
						{!! Form::submit('Cập nhật',array('class' => 'btn btn-default')) !!}
					</div>
				</div>
				
				{!! Form::close() !!}

			</div>
		</div>
	</div> 

	</div>
@include('admin.footer')

