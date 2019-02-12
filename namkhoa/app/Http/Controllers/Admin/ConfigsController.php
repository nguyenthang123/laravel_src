<?php namespace App\Http\Controllers\Admin;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValConfigsAdd;
use App\Model\Admin\Configs as Config;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
class ConfigsController extends Controller {
    public function Add(){
        $configs=new configs();
        $funs=new funs();
        $con_element=$configs->con_element();
        $ModelCategories=new Config();
        return View('admin.configs.add')
            ->with('con_element',$con_element);
    }
    public function postAdd(ValConfigsAdd $request){
        $ModelConfigs=new Config();
        $funs=new funs();
        $form = $request->all();
        $form['con_rewrite']=$funs->unicode($form['con_name']);
        $form['created_at']=date('Y-m-d',strtotime('now'));
        $form['updated_at']=$form['created_at'];
        //check admin name
        $arr=array('con_rewrite'=>$form['con_rewrite']);
        $data=$ModelConfigs->fetchOne($arr);
        if(!empty($data)){
            $funs->alert('Tên này đã tồn tại,mời bạn nhập tên khác.');
            $funs->refresh();
        }else{
            $rs=$ModelConfigs->create($form);
            if($rs==true){
                $funs->alert('Bạn đã thêm thành viên thành công.');
                $funs->redirect(domain.'/admin/configs/index');
            }else{
                $funs->alert('Bạn thêm thành viên không thành công.');
                $funs->refresh();
            }
        }
    }
    /*public function edit($id){
        $funs=new funs();
        if(empty($id)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
        $configs=new configs();
        $data = Categories::findOrFail($id);
        $ModelCategories=new Categories();
        //get cate
        $Warr=array('cat_parent'=>'0');
        $cate=$ModelCategories->fetchAllOption($Warr);
        foreach($cate as $key=>$val){
            $Warr=array('cat_parent'=>$val['id'],'cat_status'=>'1');
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Warr);
        }
        return View('admin.categories.edit',compact('data'))
            ->with('cate',$cate)
            ->with('id',$id);
    }*/
    public function update(){
        $funs=new funs();
        $ModelConfigs=new Config;
        $cons=$ModelConfigs->fetchAll();
        foreach($cons as $key=>$val){
            //check tyle=text
            if($val['con_element']=="text"){
                $con_value=$_POST[$val['con_rewrite']];
                $Wupdate=array('con_rewrite'=>$val['con_rewrite']);
                $ArrUpdate=array('con_value'=>$con_value);
                $rs=$ModelConfigs->where($Wupdate)->update($ArrUpdate);
            }
            if($val['con_element']=="file"){
                $file=$_FILES[$val['con_rewrite']];
                //update alt
                $alt=$_POST[$val['con_rewrite']];
                $Wupdate=array('con_rewrite'=>$val['con_rewrite']);
                $ArrUpdate=array('con_alt'=>$alt );
                $rs=$ModelConfigs->where($Wupdate)->update($ArrUpdate);
                //upadte file
                if(!empty($file['name'])){
                    $path_file=$funs->Path_upload_default();
                    $rs=$funs->uploadFile($path_file['file'],$file,$funs->allow_zise_image(),$funs->allow_type_image());
                    if($rs!="-1" && $rs!="-2"){
                        //del file img old
                        $del_img=getcwd().$val['con_value'];
                        $funs->delFile($del_img);
                        $ArrUpdate=array('con_value'=>$path_file['link'].'/'.$rs);
                        $rs=$ModelConfigs->where($Wupdate)->update($ArrUpdate);
                    }
                }
            }
        }
        if($rs==true){
            $funs->redirect(domain.'/admin/configs/index');
        }else{
            $funs->alert('Bạn sửa không thành công.mời bạn sửa lại.');
            $funs->redirect_refer();
            exit;
        }
    }
    public function del($id=null){
        $funs=new funs();
        if(!empty($id)){
            $id=intval($id);
            $ModelConfigs=new config;
            $Warr=array('id'=>$id);
            $config=$ModelConfigs->fetchOne($Warr);
            /*check file*/
            if($config['con_element']=="file"){
                if(!empty($config['con_value'])){
                    $path_img=getcwd().$config['con_value'];
                    $funs->delFile($path_img);
                }
            }
            $rs=$ModelConfigs->del($Warr);
            if($rs>0){
                $funs->alert('Bạn đã xóa thành công.');
                $funs->redirect(domain.'/admin/configs/index');
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/configs/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/configs/index');
        }
    }
    public function index(){
        $configs=new configs();
        $funs=new funs();
        $ModelConfigs=new Config();
        $cons=$ModelConfigs->fetchAll();
        return View('admin.configs.index')
            ->with('cons',$cons);
    }
}