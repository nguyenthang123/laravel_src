
@include('admin.head')
	<div id="wrapper"  class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<div class="row">
       
			<h2 class="h2_bai_viet h2_bai_viet_product">Chỉnh sửa Danh mục Sản phẩm</h2>

			{!! Form::open(array('method' => 'PATCH','action' => array('Admin\CatController@update',$id ))) !!}

				<div class="row add-user">
				<label for="tag-name">Tên Danh mục</label>


						{!! Form::text('name',$cat->name,array('class' => 'form-control')) !!}

				</div>
				<div class="row add-user">
				<label for="tag-name">Alias</label>
						{!! Form::text('cat_alias',$cat->cat_alias, array('class' => 'form-control')) !!}
				</div>

				<div class="row add-user">
				
				<label for="tag-name">Chọn Danh mục cha</label>
						<select class="form-control" name="parent_id">
						<?php
							view_category( $cat_parents,$cats,$cat->parent_id);
						?>
						<!--
							@foreach( $cats as $cat_chi_tiet )
								@if ($cat_chi_tiet->id==$cat->parent_id)
						         <option value="{{ $cat_chi_tiet->id }}" selected>  
										{{ $cat_chi_tiet->name }} 
						         </option>	
						        @elseif ($cat_chi_tiet->id==$id) 
								
								@else

						         <option value="{{ $cat_chi_tiet->id }}">  
										{{  $cat_chi_tiet->name }} 
						         </option>					
								@endif


							@endforeach
							-->
					    </select>

				
				</div>				
				<div class="row add-user">
						{!! Form::submit('Cập nhật',array('class' => 'btn btn-default')) !!}
				</div>
				
				{!! Form::close() !!}

			</div>
		</div>
	</div> 

	</div>
@include('admin.footer')