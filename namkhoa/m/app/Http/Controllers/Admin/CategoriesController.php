<?php namespace App\Http\Controllers\Admin;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValCategoriesAdd;
//use App\Http\Requests\Admin\ValCategoriesEdit;
use App\Model\Admin\Categories;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
use Illuminate\Support\Facades\DB;
class CategoriesController extends Controller {
    public function getAdd(){
        $configs=new configs();
        $funs=new funs();
        $ModelCategories=new Categories();
        $permission=$configs->permission();
        //get categories level 1
        $Warr=array('cat_parent'=>'0','cat_status'=>1);
        $cate=$ModelCategories->fetchAllOption($Warr);
        //get categories level 2
        foreach($cate as $key=>$val){
            $Warr=array('cat_parent'=>$val['id'],'cat_status'=>1);
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Warr);
        }
        return View('admin.categories.add')->with('cate',$cate);
    }
    public function postAdd(ValCategoriesAdd $request){
        $ModelCategories=new Categories();
        $funs=new funs();
        $form = $request->all();
        $form['cat_rewrite']=$funs->unicode($form['cat_name']);
        $form['created_at']=date('Y-m-d',strtotime('now'));
        $form['updated_at']=$form['created_at'];
        //check admin name
        $arr=array('cat_name'=>$form['cat_name']);
        $data=$ModelCategories->fetchOne($arr);
        $funs->pre($data);
        if(!empty($data)){
            $funs->alert('Tên này đã tồn tại,mời bạn nhập tên khác.');
            $funs->refresh();
        }else{
            $rs=$ModelCategories->create($form);
            if($rs==true){
                DB::logs('categories/postAdd | Bạn đã thêm danh mục | '.$form['cat_name']);
                $funs->alert('Bạn đã thêm danh mục thành công.');
                $funs->redirect(domain.'/admin/categories/index');
            }else{
                $funs->alert('Bạn thêm danh mục không thành công.');
                $funs->refresh();
            }
        }
    }
    public function edit($id){
        $funs=new funs();
        if(empty($id)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
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
    }
    public function update($id,ValCategoriesAdd $request){
        $funs=new funs();
        if(empty($id)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
        $form = $request->all();
        $form['cat_rewrite']=$funs->unicode($form['cat_name']);
        $form['updated_at']=date('Y-m-d',strtotime('now'));
        if(empty($form['cat_hot'])){
            $form['cat_hot']='0';
        }
        if(empty($form['cat_status'])){
            $form['cat_status']='0';
        }
        $cate = Categories::findOrFail($id);
        $rs=$cate->update($form);
        if($rs==true){
            DB::logs('categories/update | Bạn đã sửa danh mục | id= '.$id.' | '.$form['cat_name']);
            $funs->redirect(domain.'/admin/categories/index');
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
            $ModelCategories=new Categories();
            $Warr=array('cat_parent'=>$id);
            $cate=$ModelCategories->fetchAllOption($Warr);
            if(!empty($cate)){
                foreach($cate as $key=>$val){
                    $arr=array('id'=>$val['id']);
                    $rs=$ModelCategories->del($arr);
                }
            }
            $arr=array('id'=>$id);
            $rs=$ModelCategories->del($arr);
            if($rs>0){
                DB::logs('categories/del | Bạn đã xóa danh mục | id= '.$id);
                $funs->alert('Bạn đã xóa thành công.');
                $funs->redirect(domain.'/admin/categories/index');
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/categories/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/categories/index');
        }
    }
    public function index(){
        $ModelCategories=new Categories();
        //get cate lv1
        $Warr=array('cat_parent'=>'0');
        $cate=$ModelCategories->fetchAllOption($Warr);
        //get lv2
        foreach($cate as $key=>$val){
            $Warr=array('cat_parent'=>$val['id']);
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Warr);
            //get lv3
            foreach($cate[$key]['lv2'] as $keylv2=>$vallv2){
                $Warr=array('cat_parent'=>$vallv2['id']);
                $cate[$key]['lv2'][$keylv2]['lv3']=$ModelCategories->fetchAllOption($Warr);
            }
        }
        return View('admin.categories.index')
            ->with('cate',$cate);
    }
    public function capnhatanh($rewrite=null){
        $funs=new funs();
        $ModelCategories=new Categories();
        $Warr=array('cat_rewrite'=>$rewrite,'cat_parent'=>0);
        $cate=$ModelCategories->fetchOne($Warr);
        $Warr=array('cat_parent'=>$cate['id']);
        $sub_cate=$ModelCategories->fetchAll($Warr);
        $do_send=0;
        if(!empty($sub_cate)){
            foreach($sub_cate as $val){
                $form['cat_img']=$cate['cat_img'];
                $form['cat_img_style']=$cate['cat_img_style'];
                $form['cat_parent_name']=$cate['cat_rewrite'];
                $form['updated_at']=date('Y-m-d',strtotime('now'));
                $getcate = Categories::findOrFail($val['id']);
                $rs=$getcate->update($form);
                if($rs=="1"){
                    $do_send="1";
                }
            }
        }
        if($do_send=="1"){
            $funs->alert('Bạn đã cập nhật thành công.');
        }else{
            $funs->alert('Bạn đã cập nhật ảnh không thành công.');
        }
    }
}