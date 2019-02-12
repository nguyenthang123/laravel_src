@include('admin.head')
	<div id="wrapper" class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<h2>Chỉnh sửa Tin tức</h2>


				{!! Form::open(array('method' => 'POST','action' => array('Admin\NewsController@update',$new->id))) !!} 
				<div class="row add-user">
					<div class="col-md-1">
						Name
					</div>
					<div class="col-md-11">
						{!! Form::text('name',$new->name,array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Alias
					</div>
					<div class="col-md-11">
						{!! Form::text('new_alias',$new->new_alias,array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Nội dung
					</div>
					<div class="col-md-11">
					        <textarea id="content" name="content"> {{$new->content}} </textarea>
						<script>CKEDITOR.replace('content');</script>
					</div>
				</div>				
				<div class="row add-user">
					<div class="col-md-1">
						Danh mục
					</div>
					<div class="col-md-11">
					<select class="form-control" name="cat_id">
										<?php
				if(isset($catnews_parents)) {

						view_category( $catnews_parents,$catnews,$new->cat_new_id);

							
						}
						//view_category( $cat_parents,$cats,-1);
				?>


				      </select>
					</div>
				</div>	
				<div class="row add-user">
					<div class="col-md-1">
						Thẻ từ khóa
					</div>
					<div class="col-md-11">
				
					{!! Form::text('the_tu_khoa',$new->the_tu_khoa, array('class' => 'form-control')) !!}
					</div>
				</div>				
				<div class="row add-user">
					<div class="col-md-1">
						Thẻ giới thiệu
					</div>
					<div class="col-md-11">
					{!! Form::textarea('the_gioi_thieu', $new->the_gioi_thieu, ['class' => 'form-control','size' => '30x3']) !!}
					</div>
				</div>
				
				<div class="row add-user">
					<div class="col-md-1">
						Hoạt động luôn
					</div>
					<div class="col-md-11">
						<input type="checkbox" name="hoat_dong" value="1" <?php
						if($new->status_new){echo "checked";}
						?>>
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-10">
						{!! Form::submit('Tạo mới',array('class' => 'btn btn-default')) !!}
					</div>
				</div>
				
				{!! Form::close() !!}
			

		</div>
		
	</div> 

	</div>
@include('admin.footer')