@include('admin.head')
	<div id="wrapper" class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<h2>Tạo bài viết mới</h2>

				{!! Form::open(array('action' => 'Admin\ProductController@store')) !!}
				<div class="row add-user">
					<div class="col-md-1">
						Tên
					</div>
					<div class="col-md-11">
						{!! Form::text('name','',array('class' => 'form-control')) !!}
					</div>
				</div>

				<div class="row add-user">
					<div class="col-md-1">
						Nội dung
					</div>
					<div class="col-md-11">
					        <textarea id="content" name="content"> </textarea>
						<script>CKEDITOR.replace('content');</script>
					</div>
				</div>				
				<div class="row add-user">
					<div class="col-md-1">
						Danh mục 1
					</div>
					<div class="col-md-11">
					<select class="form-control" name="cat_id">
										<?php
				if(isset($cat_parents)) {

						view_category( $cat_parents,$cats,-1);

							
						}
						//view_category( $cat_parents,$cats,-1);
				?>
				        <option value="0" selected>Không thuộc danh mục nào
				        </option>

				      </select>
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Danh mục 2
					</div>
					<div class="col-md-11">
					<select class="form-control" name="cat_id_1">
										<?php
				if(isset($cat_parents)) {

						view_category( $cat_parents,$cats,-1);

							
						}
						//view_category( $cat_parents,$cats,-1);
				?>
				        <option value="0" selected>Không thuộc danh mục nào
				        </option>

				      </select>
					</div>
				</div>	
				<div class="row add-user">
					<div class="col-md-1">
						Danh mục 3
					</div>
					<div class="col-md-11">
					<select class="form-control" name="cat_id_2">
										<?php
				if(isset($cat_parents)) {

						view_category( $cat_parents,$cats,-1);

							
						}
						//view_category( $cat_parents,$cats,-1);
				?>
				        <option value="0" selected>Không thuộc danh mục nào
				        </option>

				      </select>
					</div>
				</div>					
				<div class="row add-user">
					<div class="col-md-1">
						Thẻ từ khóa
					</div>
					<div class="col-md-11">
				
					{!! Form::text('the_tu_khoa', '', array('class' => 'form-control')) !!}
					</div>
				</div>				
				<div class="row add-user">
					<div class="col-md-1">
						Thẻ giới thiệu
					</div>
					<div class="col-md-11">
					{!! Form::textarea('the_gioi_thieu', null, ['class' => 'form-control','size' => '30x3']) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Hiển thị
					</div>
					<div class="col-md-5">
					<input type="checkbox" name="hoat_dong" value="1" >  Để bài viết Hoạt Động luôn thì check vào ô này
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