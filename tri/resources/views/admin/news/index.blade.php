
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
					<h2 class="h2_bai_viet h2_bai_viet_product">Tin tức <a href="{!!  asset('admin/news/create'); !!}">Thêm mới </a> </h2>
				</div>

	<div class="row xuat_ban_product">
		<ul class="subsubsub">

		<?php 
			
			if(!isset($s_search)) {
		//		$s_search="";
			}

		?>
			<li class="all"><a href="{!!  asset('admin/news/all-va-ban-nhap/1'); !!}" class="current">All <span class="count">({{ $all_news }})</span></a> |</li>
			<li class="publish"><a href="{!!  asset('admin/news'); !!}">Xuất bản <span class="count">({{ $all_news_1 }})</span></a> |</li>
			<li class="draft"><a href="{!!  asset('admin/news/all-va-ban-nhap/-1'); !!}">Bản nháp <span class="\&quot;count\&quot;">({{ $all_news_0 }})</span></a></li>
		</ul>
		{!! Form::open(array('method' => 'POST','action' => array('Admin\NewsController@s_search',Request::input('s_search')))) !!}
	
			<p class="search-box">
				<input type="search" id="post-search-input" name="s_search" 
				value="<?php if(isset($s_search)) echo $s_search ; ?>">

				<input type="submit" name="" id="search-submit" class="button" value="Tìm kiếm bài viết">
				</p>
		{!! Form::close() !!}
	</div>
	<div class="row">
		<div class="tablenav top xu_ly_du_lieu_form">
				{!! Form::open(array('method' => 'POST','action' => array('Admin\NewsController@xu_ly'))) !!} 
		<input type="hidden" name="action" value="" />

		<div class="alignleft actions">
			<select name="publish_unpublish">
				<option value="-1" selected="selected">Chọn</option>
				<option value="hoat_dong" class="hide-if-no-js">Hoạt động</option>
				<option value="ban_nhap">Bản nháp</option>
					<?php if(isset($delete_new)){
						if($delete_new==1) {
					?>
					<option value="xoa_vinh_vien">Xóa vĩnh viễn</option>
						<?php }
				}			
				?>
				
			</select>
			<input type="submit" name="submit_1" id="doaction" class="button action" value="Áp dụng">
		</div>



		<div class="alignleft actions" style="padding-left: 29px;padding-right: 0;">
				<select name="tac_gia"  class="postform">
					<option value="-1" >Tác giả</option>
					<?php if(isset($admin_changes)) {  ?>
					@foreach( $admin_changes as $admin_change )
						
						<option value="{{ $admin_change->id }}" <?php 
					if(isset($tac_gia)) {
						if($admin_change->id==$tac_gia)
							echo "selected='selected' ";
					}
						?> >{{ $admin_change->username }}</option>
					@endforeach
					<?php } ?>
				</select>
		</div>	

		<div class="alignleft actions">
			<select name="cat" id="cat" class="postform">
				<?php
				if(isset($catnew_parents)) {
					if(isset($cat11)) {
						view_category( $catnew_parents,$catnews,$cat11);
					}else {
						view_category( $catnew_parents,$catnews,-1);
					}
						}
						//view_category( $cat_parents,$cats,-1);
				?>
			</select>
			<input type="submit" name="submit_1" id="post-query-submit" class="button" value="Lọc">
		</div>

				<?php 
				
				if(isset($s_search)){
					$news->setPath($s_search);
				}else {
				$news->setPath('news');
			}
				echo $news->render(); 
				
				
				?>

	</div>
	</div>

				@if ($errors->has())
				<p style="color:red;">
				  @foreach ($errors->all() as $error)
				    {!! $error !!}<br />		
				  @endforeach
				</p>
				@endif
				@if ( !count($news) )
					<div class="no_height_noi_dung_admin " >
						 Không có sản phẩm nào.
					</div>
				        No Product in Website
				@else	

				<table class="table table-bordered edit-son ">
				<thead class="thead_background">
				  <tr>
   				    <th><label><input type="checkbox" id="checkAll"/></label> Tiêu đề</th>
				    
				    <th>Đường dẫn</th>
				    <th>Nội dung</th>
				    <th>Mục tin tức</th>
				    <th>Trạng thái</th>
					
					<th>Ngày đăng</th>
					<th>Người tạo</th>
				  </tr>
				</thead>
				<tbody>


				@foreach( $news as $new )
					<tr>

						<td>	
							
							<label class="lable_checkbox"><input type="checkbox" name="checkbox[{{ $new->id }}]" value="{{ $new->id }}" /></label> 
							<a class="show-2" href="{{ asset('admin/news') }}/{{$new->id}}/edit "> {{$new->name}} </a>	
							<br/>
						<a target="_blank" class="show-1" href="{{ asset('') }}{{$new->new_alias}}">view
						</a>							

						<a class="show-1" href="{{ asset('admin/news') }}/{{$new->id}}/edit"> edit
						</a>	

						</td>
						
						<td style=""> {{$new->new_alias}}
						</td>
						<td style="    width: 18%;">
						<?php
							$content1 = $new->content;
							$str=trim($content1); 
							$text = strip_tags($str, ""); 
							
							 if(strlen($text)<40)
							 {
							 echo $str;
							 }
							 else {
							$str =substr($text,0,80);
							$count_vitri=strrpos($str,' ');
							$str =substr($str,0,$count_vitri); 
							
							echo $str.'...';
							}
						?>	
						
						</td>
						<td> 
						{{$new->cat_new_id}}
						</td>
						<td>
					{{ $new->status_new}}
						</td>
						<td>{{ $new->created_at}}
						</td>
						<td> 
							<?php
							if(App\Admin::find($new->admin_id) ){
								echo App\Admin::find($new->admin_id)->name;
							}else{
								echo "N/A";
							}
						?>
						</td>
					</tr>
				@endforeach
				 
				</tbody>
				<thead class="thead_background">
				  <tr>
   				    <th><label><input type="checkbox" id="checkAll1"/></label> Tiêu đề</th>
				   
				    <th>Đường dẫn</th>
				    <th>Nội dung</th>
				    <th>Mục tin tức</th>
				    <th>Trạng thái</th>
					
					<th>Ngày đăng</th>
					<th>Người tạo</th>
				  </tr>
				</thead>				
				</table>
				
				@endif
				<div class="row">
				
				<div class="tablenav top xu_ly_du_lieu_form">
									<div class="alignleft actions">
			<select name="publish_unpublish_1">
				<option value="-1" selected="selected">Chọn</option>
				<option value="hoat_dong" class="hide-if-no-js">Hoạt động</option>
				<option value="ban_nhap">Bản nháp</option>
					<?php if(isset($delete_new)){
						if($delete_new==1) {
					?>
					<option value="xoa_vinh_vien">Xóa vĩnh viễn</option>
						<?php }
				}			
				?>

			</select>
			<input type="submit" name="submit_1" id="doaction" class="button action" value="Áp dụng">
			</div>
				
			<div class="alignleft actions" style="padding-left: 29px;padding-right: 0;">
				<select name="tac_gia1"  class="postform">
					<option value="-1" >Tác giả</option>
					<?php if(isset($admin_changes)) {  ?>
					@foreach( $admin_changes as $admin_change )
						
						<option value="{{ $admin_change->id }}" <?php 
					if(isset($tac_gia)) {
						if($admin_change->id==$tac_gia)
							echo "selected='selected' ";
					}
						?> >{{ $admin_change->username }}</option>
					@endforeach
					<?php } ?>
				</select>
			</div>
		<div class="alignleft actions">
			<select name="cat1" id="cat1" class="postform">
				<?php
				if(isset($catnew_parents)) {
					if(isset($cat11)) {
						view_category( $catnew_parents,$catnews,$cat11);
					}else {
						view_category( $catnew_parents,$catnews,-1);
					}
				}
				?>
			</select>

			<input type="submit" name="submit_2" id="post-query-submit" class="button" value="Lọc">

		</div>		
		<?php 
		
				if(isset($s_search)){
					$news->setPath($s_search);
				}else {
				$news->setPath('news');
			}
				echo $news->render(); 
				
				
				?>
		</div>	
				</div>
				{!! Form::close() !!}	


			
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