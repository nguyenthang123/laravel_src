<?php namespace App\Http\Controllers\Admin;
use App\Model\Admin\Categories;
use App\Model\Admin\News;
use App\Model\Admin\Images;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValNewsAdd;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\ArrayInput;
use Illuminate\Libext\funs;
use configs;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller {
    public function Add(){
        $configs=new configs();
        //get cate
        $ModelCategories=new Categories();
        $Wcate=array(
            'cat_type'=>'about',
            'cat_status'=>'1',
            'cat_parent'=>'0'
        );
        $cate=$ModelCategories->fetchAllOption($Wcate);
        foreach($cate as $key=>$val){
            $Wcate=array(
                'cat_type'=>'about',
                'cat_status'=>'1',
                'cat_parent'=>$val['id']
            );
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Wcate);
        }
        return View('admin.about.add')
            ->with('cate',$cate);
    }
    public function postAdd(ValNewsAdd $request){
        $ModelNews=new News();
        $funs=new funs();
        $form = $request->all();
        $form['new_rewrite']=$funs->unicode($form['new_name']);
        $form['created_at']=date('Y-m-d',strtotime('now'));
        $form['updated_at']=$form['created_at'];
        $form['new_type']='2';
        $form['new_status']='1';
        $file=$_FILES['new_image'];
        //check admin name
        $arr=array('new_rewrite'=>$form['new_rewrite']);
        $data=$ModelNews->fetchOne($arr);
        if(!empty($data)){
            $funs->alert('Tên này đã tồn tại,mời bạn nhập tên khác.');
            $funs->refresh();
        }else{
            //upload image
            if(!empty($file['name'])){
                $path_date=$funs->path_upload_default();
                $rs=$funs->uploadFile($path_date['file'],$file,$funs->allow_zise_image(),$funs->allow_type_image());
                if($rs!="-1" && $rs!="-2"){
                    $form['new_img']=$path_date['link'].'/'.$rs;
                }else{
                    $form['new_img']='';
                }
            }else{
                $form['new_img']='';
            }
            $rs=$ModelNews->create($form);
            if($rs==true){
                DB::logs('About/postAdd | Bạn đã thêm bài viết | '.$form['new_name']);
                $funs->alert('Bạn đã thêm bài viết thành công.');
                $funs->redirect(domain.'/admin/about/index');
            }else{
                $funs->alert('Bạn thêm Bài viết không thành công.');
                $funs->refresh();
            }
        }
    }
    public function edit($id=null){
        $configs=new configs();
        $ModelNews=new News();
        //get cate
        $ModelCategories=new Categories();
        $Wcate=array(
            'cat_type'=>'about',
            'cat_status'=>'1',
            'cat_parent'=>'0'
        );
        $cate=$ModelCategories->fetchAllOption($Wcate);
        foreach($cate as $key=>$val){
            $Wcate=array(
                'cat_type'=>'about',
                'cat_status'=>'1',
                'cat_parent'=>$val['id']
            );
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Wcate);
        }
        //get new
        $arr=array('id'=>$id);
        $data = News::findOrFail($id);
        $configs=new configs();
        return View('admin.about.edit',compact('data'))
            ->with('cate',$cate);
    }
    public function update($id,ValNewsAdd $request){
        $funs=new funs();
        $form = $request->all();
        $form['new_rewrite']=$funs->unicode($form['new_name']);
        $form['updated_at']=date('Y-m-d',strtotime('now'));
        $form['new_type']='2';
        if(empty($form['new_status'])){
            $form['new_status']='0';
        }
        $news = News::findOrFail($id);
        $file_img=$_FILES['new_img'];
        if(!empty($file_img['name'])){
            $path_date=$funs->path_upload_default();
            $rs=$funs->uploadFile($path_date['file'],$file_img,$funs->allow_zise_image(),$funs->allow_type_image());
            if($rs!="-1" && $rs!="-2"){
                $form['new_img']=$path_date['link'].'/'.$rs;
                //del image old
                if(!empty($news['new_img'])){
                    $del_img=getcwd().$news['new_img'];
                    $funs->delFile($del_img);
                }
            }else{
                $form['new_img']=$news['new_img'];
            }
        }
        $rs=$news->update($form);
        if($rs==true){
            DB::logs('About/update | Bạn đã sửa bài viết | id='.$id.' | '.$form['new_name']);
            $funs->redirect(domain.'/admin/about/index');
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
            $arr=array('id'=>$id);
            $ModelNews=new News();
            $ModelImages=new Images();
            //del image
            $data=$ModelNews->fetchOne($arr);
            if(!empty($data)){
                if(!empty($data['new_img'])){
                    $path_img=getcwd().$data['new_img'];
                    $funs->delFile($path_img);
                }
                $Wimg=array('new_id'=>$id);
                $images=$ModelImages->fetchAllOption($Wimg);
                if(!empty($images)){
                    foreach($images as $key=>$val){
                        if(!empty($val['ima_name'])){
                            $path_del=getcwd().$val['ima_name'];
                            $funs->delFile($path_del);
                        }
                    }
                    $rs=$ModelImages->del($Wimg);
                }
                $rs=$ModelNews->del($arr);
                if($rs>0){
                    DB::logs('news/del | Bạn đã xóa bài viết | id='.$id);
                    $funs->alert('Bạn đã xóa thành công.');
                    $funs->redirect(domain.'/admin/about/index');
                }else{
                    $funs->alert('Bạn xóa không thành công.');
                    $funs->redirect(domain.'/admin/about/index');
                }
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/about/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/about/index');
        }
    }
    public function index(){
        $ModelNews=new News();
        $Wnew=array('new_type'=>'2','new_status'=>'1');
        $news=$ModelNews->fetchAllOption($Wnew);
        return View('admin.about.index')
            ->with('news',$news);
    }
}