<div class="">
	<?php

		$menusitems =App\Menus::find($menu->id)->menusitem;
		//var_dump($menus);
		//echo count($menus);
		foreach ($menusitems as $menusitem) {
    		//echo $menusitem = $menusitem->menus_alias;
    		?>
sdsdsds
	{!! Form::open(array('method' => 'PATCH','action' => array('Admin\MenusitemController@update',$menusitem->id ))) !!}

		<input class="form-control" name="menus_alias" type="text" value="<?php echo $menusitem->menus_alias;?>">

	{!! Form::submit('Update',array('class' => 'btn btn-default')) !!}

	{!! Form::close() !!}
			<?php
		}
	?>
</div>