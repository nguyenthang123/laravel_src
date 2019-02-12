
@include('admin.head')
	<div id="wrapper" class="container admin-admin">
	<div class="row">

		<div id="sidebar-wrapper" class="col-md-3">
			@include('admin.sitebar')
		</div>
		<div id="page-content-wrapper" class="col-md-9 admin-content">
			<div class="row">
				<h1>Edit Menus</h1>
				<div class="col-md-3">
					@include('admin.menus.sitebar_menus')
				</div>
				<div class="col-md-9">
					<?php
						//echo Input::get('name');
					?>

					{!! Form::open(array('method' => 'PATCH','action' => array('Admin\MenusController@update',$menu->id ))) !!}
					<div class="row add-user">
						<div class="col-md-1" style="padding-top:5px;">
							Name
						</div>
						<div class="col-md-5">
							{!! Form::text('name',$menu->name,array('class' => 'form-control')) !!}
							{!! $menu->id !!}
						</div>
						<div class="col-md-1">
							{!! Form::submit('Update',array('class' => 'btn btn-default')) !!}
						</div>
					</div>
					
					{!! Form::close() !!}
				</div>
			</div>

		</div>
	</div> 

	</div>
@include('admin.footer')