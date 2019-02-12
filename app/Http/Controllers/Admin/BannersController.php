<?php namespace App\Http\Controllers\Admin;
use App\Model\Admin\Banners;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValbannersAdd;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\ArrayInput;
use Illuminate\Libext\funs;
use configs;
class BannersController extends Controller {
    public function getAdd(){
        $configs=new configs();
        $banners_type=$configs->banners_type();
        return View('admin.banners.add')
            ->with('banners_type',$banners_type);
    }
    public function postAdd(ValBannersAdd $request){
        $ModelBanners=new Banners();
        $funs=new funs();
        $dulieu_form = $request->all();
        $dulieu_form['ban_rewrite']=$funs->unicode($dulieu_form['ban_name']);
        $dulieu_form['created_at']=date('Y-m-d',strtotime('now'));
        $dulieu_form['updated_at']=$dulieu_form['created_at'];
        $dulieu_form['ban_status']='1';
        $file=$_FILES['ban_image'];
        //check admin name
        $arr=array('ban_rewrite'=>$dulieu_form['ban_rewrite']);
        $data=$ModelBanners->fetchOne($arr);
        if(!empty($data)){
            $funs->alert('Tên này đã tồn tại,mời bạn nhập tên khác.');
            $funs->refresh();
        }else{
            //upload image
            if(!empty($file['name'])){
                $path_img='/public/files/'.date('Y-m-d',strtotime('now'));
                $dir_date=getcwd().$path_img;
                $rs=$funs->uploadFile($dir_date,$file,$funs->allow_zise_image(),$funs->allow_type_image());
                if($rs!="-1" && $rs!="-2"){
                    $dulieu_form['ban_image']=$path_img.'/'.$rs;
                }else{
                    $dulieu_form['ban_image']='';
                }
            }else{
                $dulieu_form['ban_image']='';
            }
            $rs=$ModelBanners->create($dulieu_form);
            if($rs==true){
                $funs->alert('Bạn đã thêm Banner thành công.');
                $funs->redirect(domain.'/admin/banners/index');
            }else{
                $funs->alert('Bạn thêm Banner không thành công.');
                $funs->refresh();
            }
        }
    }
    public function edit($id=null){
        $configs=new configs();
        $ModelBanners=new Banners();
        $arr=array('id'=>$id);
        $data = Banners::findOrFail($id);
        $configs=new configs();
        $banners_type=$configs->banners_type();
        return View('admin.banners.edit',compact('data'))
            ->with('banners_type',$banners_type);
    }
    public function update($id,ValBannersAdd $request){
        $funs=new funs();
        $dulieu_form = $request->all();
        $dulieu_form['ban_rewrite']=$funs->unicode($dulieu_form['ban_name']);
        $dulieu_form['updated_at']=date('Y-m-d',strtotime('now'));
        if(empty($dulieu_form['ban_status'])){
            $dulieu_form['ban_status']='0';
        }
        $banner = Banners::findOrFail($id);
        $file_img=$_FILES['ban_image'];
        if(!empty($file_img['name'])){
            $path_date=$funs->path_date();
            $path_img=getcwd().$path_date;
            $rs=$funs->uploadFile($path_img,$file_img,$funs->allow_zise_image(),$funs->allow_type_image());
            if($rs!="-1" && $rs!="-2"){
                $dulieu_form['ban_image']=$path_date.'/'.$rs;
                //del image old
                $del_img=getcwd().'/'.$banner['ban_image'];
                $funs->delFile($del_img);
            }else{
                $dulieu_form['ban_image']=$banner['ban_image'];
            }
        }
        $rs=$banner->update($dulieu_form);
        if($rs==true){
            $funs->redirect(domain.'/admin/banners/index');
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
            $ModelBanners=new Banners();
            //del image
            $data=$ModelBanners->fetchOne($arr);
            if(!empty($data)){
                if(!empty($data['ban_image'])){
                    $path_img=getcwd().$data['ban_image'];
                    $funs->delFile($path_img);
                }
            }
            //del banner
            $rs=$ModelBanners->del($arr);
            if($rs>0){
                $funs->alert('Bạn đã xóa thành công.');
                $funs->redirect(domain.'/admin/banners/index');
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/banners/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/banners/index');
        }
    }
    public function index(){
        $ModelBanners=new Banners();
        $banners=$ModelBanners->fetchAll();
        return View('admin.banners.index')
            ->with('banners',$banners);
    }
}