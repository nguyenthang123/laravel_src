
{!! Form::open(array('method' => 'post','enctype' => 'multipart/form-data','action' => array('Admin\AdminController@upload' ))) !!}
<!--
 {!! Form::open(array('url'=>'admin/upload','method'=>'POST', 'files'=>true)) !!}
 -->
<div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
	{!! Form::submit('Update',array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}
</div>
<?php
						for($i=0;$i<10;$i++){
							$k='image_'.$i;
			if(isset($_SESSION[$k])==true) { 
			echo $_SESSION[$k];
			
			}
						}
?>			