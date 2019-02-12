<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{!!  asset('public/css/bootstrap.min.css'); !!}">
	<link rel="stylesheet" href="{!!  asset('public/admin/css/style.css'); !!}">
	<script src="{!!  asset('public/js-s/jquery-1.11.3.min.js'); !!}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container login-son">
	<div class="row">
			
				{!! Form::open(array('url' => 'http://localhost/demolaravel5/kaka')) !!}
				<div class="row add-user">
					Username
				</div>
				<div class="row add-user">
						{!! Form::text('username', '', array('class' => 'form-control')) !!}
				</div>
				<div class="row add-user">
					Password
				</div>
				<div class="row add-user">
						{!! Form::text('password', '', array('class' => 'form-control')) !!}
				</div>
			
				<div class="row add-user">
						{!! Form::submit('Login',array('class' => 'btn btn-default')) !!}
				</div>
				
				{!! Form::close() !!}
</div>
</body>

</html>