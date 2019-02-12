<?php 

//use App;
?>
@include('admin.head')
	<div id="wrapper" class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
				@if ($errors->has())
				<p style="color:red;">
				  @foreach ($errors->all() as $error)
				    {!! $error !!}<br />		
				  @endforeach
				</p>
				@endif
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<div class="row menus_select_1" style="">
				<h2 class="h2_bai_viet h2_bai_viet_product">Danh Sách Menu</h2>

					{!! Form::open(array('method' => 'GET','url' => 'admin/menus/link', 'files' => true)) !!}
							<div class="menus_select">
								Chọn 1 Menu để thêm hoạc chỉnh sửa
							</div>
							
							<div class="col-sm-6">
								<select class="form-control" name="name">
									 <option  value="0" > ----Chọn Menu----
									 </option>
									@foreach( $menus as $menu1 )
								         <option  value="{{$menu1->id}}" <?php 
										 if(isset($menu))
											if($menu->id==$menu1->id) {
											echo 'selected';	} ?> >  
												{{  $menu1->name }} 
								         </option>

									@endforeach

							    </select>
								
						    </div>
						    <div class="col-sm-6" style="margin-top:0;padding-left:0">
						    	{!! Form::submit('Select',array('class' => 'btn btn-default')) !!}
						    </div>
					{!! Form::close() !!}
			</div>


				<?php 
					if(isset($menusitems)) {
						?>
							<div class="row edit_menu_son_kaka">		
					<div class="col-md-4">
					<h2 class="h2_bai_viet h2_bai_viet_product">Tạo item mới cho Menu</h2>
						{!! Form::open(array('method' => 'POST','action' => array('Admin\MenusitemController@store'))) !!}
						
						<div class="row change_select_menu">
							<div class="menus_select">
									Name
							</div>
							<div class="col-sm-12">
							{!! Form::text('name_create_menusitem','',array('class' => 'form-control')) !!}
								
							<input style="display:none;" name="name_create_menusitem_id" type="text" value="{!! $menu->id !!}">
								
							</div>
						</div>
						<div class="row change_select_menu" >
							<div class="menus_select">
									Alias
								</div>
							<div class="col-sm-12">
								{!! Form::text('alias_create_menusitem','',array('class' => 'form-control')) !!}
								
							</div>		
						</div>
						<div class="row change_select_menu">
							<div class="menus_select">
									Chọn Menu item cha
								</div>
							<div class="col-sm-12">
						<?php
							//$all_menus_item=
							$all_menus_item1s = App\Menusitem::all();
					
							$all_menus_item =new App\Menusitem;
							$all_menus_item1 =new App\Menusitem;

							$all_menus_item_parents=$all_menus_item->how_menu_s($menu->id);
							
							$parent=$all_menus_item1->how_menu_s_parent($menu->id,0);
						?>
								<select class="form-control" name="menus_item_id">
									 <option  value="0" > ----Chọn Menu Cha----
									 </option>
									<?php
									view_menus_items( $parent,$all_menus_item_parents,-1);

									?>
									

							    </select>
							</div>		
						</div>		
						<div class="row change_select_menu">
							<div class="menus_select">
									Điền url vào Menu item
								</div>
								
							<div class="col-sm-11"> 
							{!! Form::text('menu_item_url','',array('class' => 'form-control')) !!}
							</div>		
							<div class="col-sm-1 radio_s_change">
								<input type="radio" name="change_s_s" value="1" checked>
							</div>
						</div>							
						<div class="row ">
							<div class="menus_select">
									Chọn Danh mục hiển thị Sản phẩm
								</div>
								
							<div class="col-sm-11">
							
							<select class="form-control" name="cat_id_show">
						<?php
							$cat1s = App\Cat::all();

							$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
						
						view_category( $cat_parents,$cat1s,-1);
						
						?>
						</select>
							</div>		
							<div class="col-sm-1 radio_s_change">
							<input type="radio" name="change_s_s" value="2" >
							</div>
						</div>	
						
						
						<div class="col-md-6" style="padding-top:15px;">
							{!! Form::submit('Tạo mới',array('class' => 'btn btn-default')) !!}
						</div>
						{!! Form::close() !!}
					</div>
				<div class="col-md-8">
					<div class="tablenav top xu_ly_du_lieu_form">
						{!! Form::open(array('method' => 'POST','action' => array('Admin\MenusitemController@xu_ly_form_menusitem'))) !!}
						<input type="hidden" name="action1" value="" />
									<h2 class="h2_bai_viet h2_bai_viet_product">Tên Menu: {{ $menu->name }}</h2>
						<div class="alignleft actions">
							<select name="publish_unpublish">
								<option value="-1" selected="selected">Chọn</option>
								<option value="hoat_dong" class="hide-if-no-js">Hoạt động</option>
								<option value="ban_nhap">Bản nháp</option>
								<option value="xoa_vinh_vien">Xóa vĩnh viễn</option>
							</select>
							<input type="submit" name="submit_1" id="doaction" class="button action" value="Áp dụng">
						</div>
						<table class="table table-bordered edit-son">
						<thead>
						  <tr>
		   
							<th><label><input type="checkbox" id="checkAll"/></label> Tên </th>
							<th>Alias</th>
							<th>Danh mục hiển thị</th>
							<th>Menu url</th>
							<th>Trạng Thái</th>
							<th>Menu cha</th>

						  </tr>
						</thead>
						
							<?php
							$all_menus_item_parents=$all_menus_item->how_menu_s_all($menu->id);
						view_menu_item_index( $parent,$all_menus_item_parents,-1); 
							?>
						</table>
					{!! Form::close() !!}	

					</div>	
					</div>
					</div>
					
						<?php
					}
				?>
				
			

		</div>
	</div> 
	</div>
@include('admin.footer')