
@include('admin.head')
	<div id="wrapper"  class="container admin-admin">
	<div class="row">
		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
		
			<div class="row">
			    <h2>Tất cả Admin</h2>
				@if ($errors->has()) 
				<p style="color:red;">
				  @foreach ($errors->all() as $error)
				    {!! $error !!}<br />		
				  @endforeach
				</p>
				@endif
				<table class="table table-bordered edit-son">
				<thead>
				  <tr>
				    <th>ID</th>      
				    <th>Họ tên</th>
				    <th>Điện thoại</th>
				    <th>Khoa kham</th>
				    <th>Thời gian khám</th>
				    <th>Thời gian DK</th>
				    <th>Action</th>
				  </tr>
				</thead>
				<tbody>
				@foreach( $dangkys as $val )
					<tr>
						<td> {{ $val->id }}</td>
						<td> {{ $val->hoten }}</td>
						<td>  {{ $val->dienthoai }}</td>
						<td>  {{ $val->khoakham }}</td>
						<td>  {{ $val->thoigian }}</td>
						<td> {{ $val->created_at }}</td>
						<td><a href="/admin/dangky/del/{{ $val->id }}">del</a> </td>
					</tr>
				@endforeach
				</tbody>
				</table>
			</div>
		</div>
	</div> 

	</div>
@include('admin.footer')