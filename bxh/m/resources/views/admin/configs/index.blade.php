@extends('admin.layouts.layout')
@section('content')
<div class="content">
    <div class="header">

        <h1 class="page-title">Configs</h1>
    </div>
    <script type="text/javascript">
        function add(){
            window.location.href="<?php echo domain.'/admin/configs/add';?>";
        }
    </script>
    <div class="container-fluid">
        <!--<form name="frm" method="post" action="<?php /*echo domain.'/admin/configs/update'*/?>" enctype="multipart/form-data">-->
        <?php echo  Form::model($cons,['files' => true,'method' => 'PATCH', 'action' => ['Admin\ConfigsController@update']]);?>
            <div class="row-fluid">
                <div class="btn-toolbar">
                    <input class="btn btn-primary" type="submit" name="editcon" value="Cập nhật">
                    <button class="btn btn-primary" type="button" onclick="add();"><i class="icon-save"></i> Add Config</button>
                    <div class="btn-group">
                    </div>
                </div>
                <div class="well">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <style type="text/css">
                            #tab label{width: 200px;}
                            .input-w1010{width: 97%;}
                        </style>
                        <div class="tab-pane active in" id="home">
                            <?php foreach($cons as $key=>$val){?>
                            <label><?php echo $val['con_name'];?></label>
                                <!--text-->
                                <?php if($val['con_element']=="text"){?>
                                <input type="text" name="<?php echo $val['con_rewrite'];?>" value="<?php echo $val['con_value']?>" class="input-xlarge input-w1010">
                                <?php }?>
                                <!--file-->
                                <?php if($val['con_element']=="file"){?>
                                    <?php if(!empty($val['con_value'])){?>
                                        <img src="<?php echo domain.$val['con_value'];?>">
                                        <?php }?>
                                    <input type="file" name="<?php echo $val['con_rewrite'];?>">
                                    Alt : <input type="text" name="<?php echo $val['con_rewrite'];?>" value="<?php echo $val['con_alt']?>">
                                    <?php }?>
                            <a href="<?php echo domain.'/admin/configs/del/'.$val['id'];?>" class="del" role="button" onclick="if(!confirm('Bạn có muốn xóa?')) return false;"><i class="icon-remove"></i></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop()