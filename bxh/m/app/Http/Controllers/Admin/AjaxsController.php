<?php namespace App\Http\Controllers\Admin;
use App\Model\Admin\News;
//use App\Model\Admin\Data;
//use App\Model\Admin\About;
use App\Model\Admin\Images;
use View;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
use Session;
class AjaxsController extends Controller {
    public $arrOption=array('news','data','about');
	public function addoption_viewimg($table=null){
        if(empty($table)){
            exit('Không có table');
        }
        $ModelOption ='';
        $ModelImages=new Images();
        if($table=="news"){$ModelOption = new News();}
        $id=$ModelOption->fetchIdMax();
        $id=$id+1;
        $Wimg='';
        if($table=="news"){
            $Wimg=array('new_id'=>$id);
        }
        $imgs=$ModelImages->fetchAllOption($Wimg);
        $strimg='';
        foreach($imgs as $key=>$val){
            if(!empty($val['ima_name'])){
                $strimg.='<li style="float: left;margin-right: 10px;"><img src="'.domain.$val['ima_name'].'"style="width: 50px; height: 50px;"><input type="text" value="'.$val['ima_name'].'"> <a class="delimg" data-i="'.$id.'" id="'.$val['id'].'" role="button"><i class="icon-remove"></i></a></li>';
            }
        }
       echo '<ul style="list-style: none;">'.$strimg.'</ul>';
        $str='<script>
    $(".delimg").click(function(){
        var id=$(this).attr("id");
        var optionid=$(this).attr("data-i");
        $.ajax({
            method: "POST",
            url: "'.domain.'/admin/ajaxs/delimg/'.$table.'",
            data: {id:id,optionid:optionid}
        })
                .done(function( msg ) {
                    $( "#ajaxview" ).html( msg );
                });
    })
</script>';
        echo $str;
	}
    public function addoption_addimg($table=null){
        if(empty($table)){
            exit('Không có table');
        }
        $file=$_FILES['upanh'];
        if($file['name']){
            $ModelImages=new Images();
            $funs=new funs();
            $ModelOption='';
            if($table=="news"){$ModelOption = new News();}
            //if($table=="data"){$ModelOption=new Data();}
            //if($table=="news"){$ModelOption=new About();}
            $rs=$ModelOption->fetchIdMax();
            $id=$rs+1;
            $path_date=$funs->path_upload_default();
            $rs=$funs->uploadFile($path_date['file'],$file,$funs->allow_zise_image(),$funs->allow_type_image());
            $str='<script>
    $(".delimg").click(function(){
        var id=$(this).attr("id");
        var optionid=$(this).attr("data-i");
        $.ajax({
            method: "POST",
            url: "'.domain.'/admin/ajaxs/delimg/'.$table.'",
            data: {id:id,optionid:optionid}
        })
                .done(function( msg ) {
                    $( "#ajaxview" ).html( msg );
                });
    })
</script>';
            if($rs!="-1" && $rs!="-2"){
                if($table=="news"){
                    $form['new_id']=$id;
                    $Wimg=array('new_id'=>$id);
                }
                if($table=="data"){
                    $form['dat_id']=$id;
                    $Wimg=array('dat_id'=>$id);
                }
                if($table=="about"){
                    $form['abo_id']=$id;
                    $Wimg=array('abo_id'=>$id);
                }
                $form['ima_name']=$path_date['link'].'/'.$rs;
                $form['created_at']=date('Y-m-d',strtotime('now'));
                $form['defaultimage	']='0';
                $rs=$ModelImages->create($form);
                //lay anh cua bai viet ra
                $imgs=$ModelImages->fetchAllOption($Wimg);
               $strimg='';
                foreach($imgs as $key=>$val){
                    if(!empty($val['ima_name'])){
                       $strimg.='<li style="float: left;margin-right: 10px;"><img src="'.domain.$val['ima_name'].'"style="width: 50px; height: 50px;"><input type="text" value="'.$val['ima_name'].'"> <a class="delimg" data-i="'.$id.'" id="'.$val['id'].'" role="button"><i class="icon-remove"></i></a></li>';
                    }
                }
                echo '<ul style="list-style: none;">'.$strimg.'</ul>';
                echo $str;
            }else{
                echo 'up file lỗi '.$rs;
            }
        }
    }
    public function editoption_viewimg($table=null){
        if(empty($table)){
            exit('Không có table');
        }
        $ModelOption ='';
        $ModelImages=new Images();
        if($table=="news"){$ModelOption = new News();}
        $id=$_GET['id'];
        $id=intval($id);
        $Wimg='';
        if($table=="news"){
            $Wimg=array('new_id'=>$id);
        }
        $imgs=$ModelImages->fetchAllOption($Wimg);
        if(empty($imgs)){
            exit('Bài viết này không có ảnh.');
        }
        $strimg='';
        foreach($imgs as $key=>$val){
            if(!empty($val['ima_name'])){
                $strimg.='<li style="float: left;margin-right: 10px;"><img src="'.domain.$val['ima_name'].'"style="width: 50px; height: 50px;"><input type="text" value="'.$val['ima_name'].'"> <a class="delimg" data-i="'.$id.'" id="'.$val['id'].'" role="button"><i class="icon-remove"></i></a></li>';
            }
        }
        echo '<ul style="list-style: none;">'.$strimg.'</ul>';
        $str='<script>
    $(".delimg").click(function(){
        var id=$(this).attr("id");
        var optionid=$(this).attr("data-i");
        $.ajax({
            method: "POST",
            url: "'.domain.'/admin/ajaxs/delimg/'.$table.'",
            data: {id:id,optionid:optionid}
        })
                .done(function( msg ) {
                    $( "#ajaxview" ).html( msg );
                });
    })
</script>';
        echo $str;
    }
    public function editoption_addimg($table=null){
        if(empty($table)){
            exit('Không có table');
        }
        $file=$_FILES['upanh'];
        if($file['name']){
            $ModelImages=new Images();
            $funs=new funs();
            $ModelOption='';
            if($table=="news"){$ModelOption = new News();}
            //if($table=="data"){$ModelOption=new Data();}
            //if($table=="news"){$ModelOption=new About();}
            $id=intval($_POST['new_id']);
            $path_date=$funs->path_upload_default();
            $rs=$funs->uploadFile($path_date['file'],$file,$funs->allow_zise_image(),$funs->allow_type_image());
            $str='<script>
    $(".delimg").click(function(){
        var id=$(this).attr("id");
        var optionid=$(this).attr("data-i");
        $.ajax({
            method: "POST",
            url: "'.domain.'/admin/ajaxs/delimg/'.$table.'",
            data: {id:id,optionid:optionid}
        })
                .done(function( msg ) {
                    $( "#ajaxview" ).html( msg );
                });
    })
</script>';
            if($rs!="-1" && $rs!="-2"){
                if($table=="news"){
                    $form['new_id']=$id;
                    $Wimg=array('new_id'=>$id);
                }
                if($table=="data"){
                    $form['dat_id']=$id;
                    $Wimg=array('dat_id'=>$id);
                }
                if($table=="about"){
                    $form['abo_id']=$id;
                    $Wimg=array('abo_id'=>$id);
                }
                $form['ima_name']=$path_date['link'].'/'.$rs;
                $form['created_at']=date('Y-m-d',strtotime('now'));
                $form['defaultimage	']='0';
                $rs=$ModelImages->create($form);
                //lay anh cua bai viet ra
                $imgs=$ModelImages->fetchAllOption($Wimg);
                $strimg='';
                foreach($imgs as $key=>$val){
                    if(!empty($val['ima_name'])){
                        $strimg.='<li style="float: left;margin-right: 10px;"><img src="'.domain.$val['ima_name'].'"style="width: 50px; height: 50px;"><input type="text" value="'.$val['ima_name'].'"> <a class="delimg" data-i="'.$id.'" id="'.$val['id'].'" role="button"><i class="icon-remove"></i></a></li>';
                    }
                }
                echo '<ul style="list-style: none;">'.$strimg.'</ul>';
                echo $str;
            }else{
                echo 'up file lỗi '.$rs;
            }
        }
    }
    public function delimg($table=null){
        if(!in_array($table,$this->arrOption)){
            exit('Không có table này.');
        }
        $funs=new funs();
        $ModelOption='';
        if($table=="news"){$ModelOption=new News(); }
        //if($table=="data"){$ModelOption=new Data(); }
        //if($table=="about"){$ModelOption=new About(); }
        $ModelImages=new Images();
        $id=intval($_REQUEST['id']);
        $optionid=intval($_REQUEST['optionid']);
        $Wimg=array('id'=>$id);
        $img=$ModelImages->fetchOne($Wimg);
        if(!empty($img)){
            if($img['ima_name']){
                $path_del=getcwd().$img['ima_name'];
                $rs=$funs->delFile($path_del);
                $ModelImages->del($Wimg);
            }
        }
    }
}