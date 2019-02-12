
@include('admin.head')
	<div id="wrapper" class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<div class="row">
				<div class="">
					<div id="icon-edit" class="icon32 icon32-posts-post"><br></div>
					<h2 class="h2_bai_viet h2_bai_viet_product">Danh mục sản phẩm </h2>
				</div>
			</div> 

			<div class="row">
				<div class="col-sm-4">
		<div class="row ">
			<h2 class="h2_bai_viet h2_bai_viet_product">Tạo Danh mục mới</h2>
				{!! Form::open(array('action' => 'Admin\CatController@store')) !!}
				<div class="row add-user">
				<label for="tag-name">Tên Danh mục</label>
					
						{!! Form::text('name','',array('class' => 'form-control')) !!}
					
				</div>
				<div class="row add-user">
				<label for="tag-name">Chọn Danh mục cha</label>

					<select class="form-control" name="parent_id">
						<?php
							view_category( $cat_parents,$cats1,-1);
						?>
				      </select>

				</div>					
				<div class="row add-user">

						{!! Form::submit('Tạo mới',array('class' => 'btn btn-default')) !!}

				</div>
				
				{!! Form::close() !!}
			

		</div>
						
				</div>
				<div class="col-sm-8">
				@if ($errors->has())
				<p style="color:red;">
				  @foreach ($errors->all() as $error)
				    {!! $error !!}<br />		
				  @endforeach
				</p>
				@endif
				@if ( !$cats->count() )
				        No Cat in Website
				@else		  
				<div class="row xuat_ban_product">
			<!--
				<ul class="subsubsub">
				<li class="all"><a href="{!!  asset('admin/cat/all-va-ban-nhap/1'); !!}" class="current">All <span class="count">({{ $cats1->count() }})</span></a> |</li>
				<li class="publish"><a href="{!!  asset('admin/cat'); !!}">Xuất bản <span class="count">(111)</span></a> |</li>
				<li class="draft"><a href="{!!  asset('admin/cat/all-va-ban-nhap/-1'); !!}">Bản nháp <span class="\&quot;count\&quot;">(2222)</span></a></li>
				</ul>
				-->
		{!! Form::open(array('method' => 'POST','action' => array('Admin\CatController@s_search',Request::input('s_search')))) !!}
	
			<p class="search-box">
				<input type="search" id="post-search-input" name="s_search" 
				value="<?php if(isset($s_search)) echo $s_search ; ?>">

				<input type="submit" name="" id="search-submit" class="button" value="Tìm kiếm Danh mục">
				</p>
		{!! Form::close() !!}				
			</div>
			{!! Form::open(array('method' => 'POST','action' => array('Admin\CatController@xu_ly_form_cat'))) !!}
			<div class="tablenav top xu_ly_du_lieu_form">
				<input type="hidden" name="action1" value="" />
								
						<div class="alignleft actions">
							<select name="publish_unpublish">
								<option value="-1" selected="selected">Chọn</option>
								<option value="hoat_dong" class="hide-if-no-js">Hoạt động</option>
								<option value="ban_nhap">Bản nháp</option>
								<option value="xoa_vinh_vien">Xóa vĩnh viễn</option>
							</select>
							<input type="submit" name="submit_1" id="doaction" class="button action" value="Áp dụng">
						</div>
				<table class="table table-bordered edit-son son_cate">
				<thead>
				  <tr>
   
				    <th><label><input type="checkbox" id="checkAll"/></label> Tên Danh mục</th>
				    <th>Alias</th>
				    <th>admin_id</th>
				    <th>parent_id</th>

				  </tr>
				</thead>
					<tbody>
					<?php
					if(!isset($s_search)) { 
					view_category_cat( $cat_parents,$cats1,-1);
					}
					else { ?>
					@foreach( $cats1 as $cat1 )
					<tr>
   
				    <td><label class="lable_checkbox"><input type="checkbox" name="checkbox[<?php echo $cat1->id ?>]" value="<?php echo $cat1->id ?>" /></label></label> {{ $cat1->name}} <br>
					<a class="show-1" href="/admin/cat/<?php echo $cat1->id ?>/edit"> edit
						</a>
					</td>
				    <td>{{ $cat1->cat_alias }}</td>
				    <td>{{ $cat1->admin_id }}</td>
				    <td>{{ $cat1->parent_id }}</td>

				  </tr>		
					
					
					@endforeach

					<?php
					}
					?>		
					</tbody>		
				</table>
				</div>
				{!! Form::close() !!}		
				@endif

				</div>
			</div>

		</div>
	</div> 

	</div>
@include('admin.footer')
<script type="text/javascript">
	
	$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
<script type="text/javascript">
	
	$("#checkAll1").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>