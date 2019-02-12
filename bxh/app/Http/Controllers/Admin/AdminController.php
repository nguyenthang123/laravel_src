<?php namespace App\Http\Controllers\Admin;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValAdminAdd;
use App\Http\Requests\Admin\ValAdminEdit;
use App\Model\Admin\Admin;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
use Session;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller {
	public function login(){
        $funs=new funs();
        if(!empty($_SESSION['adm_id'])){
            $funs->redirect(domain.'/admin/news/index');
            die();
        }
        if(isset($_POST['login'])){
            $ModelAdmin=new Admin();
            $adm_account=$_POST['adm_account'];
            $adm_password=$_POST['adm_password'];
            $adm_password=md5($adm_password);
            echo $adm_account.'<br>'.$adm_password;
            $arr=array('adm_account'=>$adm_account,'adm_password'=>$adm_password,'adm_status'=>'1');
            $admin=$ModelAdmin->fetchOne($arr);
            if(!empty($admin)){
				Session::put('adm_id', $admin['id']);
                $_SESSION['adm_id']=$admin['id'];
                $_SESSION['adm_name']=$admin['adm_name'];
                $_SESSION['adm_level']=$admin['adm_level'];
                $funs->redirect(domain.'/admin/news/index');
            }else{
                $funs->alert('Đăng nhập không thành công,mời bạn đăng nhập lại.');
                $funs->refresh();
            }
        }
        return View('admin.admin.login');
	}
    public function getAdd(){
        $configs=new configs();
        $permission=$configs->permission();
        return View('admin.admin.add')->with('permission',$permission);
    }
    public function postAdd(ValAdminAdd $request){
        $ModelAdmin=new Admin();
        $funs=new funs();
        $dulieu_form = $request->all();
        $dulieu_form['adm_rewrite']=$funs->unicode($dulieu_form['adm_name']);
        $dulieu_form['created_at']=date('Y-m-d',strtotime('now'));
        $dulieu_form['updated_at']=$dulieu_form['created_at'];
        $dulieu_form['adm_status']='1';
        $dulieu_form['adm_password']=md5($dulieu_form['adm_password']);
        //check admin name
        $arr=array('adm_account'=>$dulieu_form['adm_account'],'adm_rewrite'=>$dulieu_form['adm_rewrite']);
        $data=$ModelAdmin->fetchOne($arr);
        if(!empty($data)){
            $funs->alert('Tên này đã tồn tại,mời bạn nhập tên khác.');
            $funs->refresh();
        }else{
            $rs=$ModelAdmin->create($dulieu_form);
            if($rs==true){
                DB::logs('admin/postAdd | Bạn đã thêm thành viên | '.$dulieu_form['adm_name']);
                $funs->alert('Bạn đã thêm thành viên thành công.');
                $funs->redirect(domain.'/admin/admin/index');
            }else{
                $funs->alert('Bạn thêm thành viên không thành công.');
                $funs->refresh();
            }
        }
    }
    public function edit($id=null){
        $configs=new configs();
        $ModelAdmin=new Admin();
        $arr=array('adm_id'=>$id);
        $data = Admin::findOrFail($id);
        $permission=$configs->permission();
        $permis2=array();
        foreach($permission as $key=>$val){
            $permis=array([$val['per_level']=>$val['per_name']]);
            $permis2=array_merge($permis2,$permis);
        }
        return View('admin.admin.edit',compact('data'))
            ->with('permis2',$permis2);
    }
    public function update($id,ValAdminEdit $request){
        $funs=new funs();
        $form = $request->all();
        $form['adm_rewrite']=$funs->unicode($form['adm_name']);
        $form['updated_at']=date('Y-m-d',strtotime('now'));
        $admin = Admin::findOrFail($id);
        $rs=$admin->update($form);
        if($rs==true){
            DB::logs('admin/update | Bạn đã sửa thành viên | id='.$id.' | '.$form['adm_name']);
            $funs->redirect(domain.'/admin/admin/index');
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
            $ModelAdmin=new Admin();
            $rs=$ModelAdmin->del($arr);
            if($rs>0){
                DB::logs('admin/del | Bạn đã xóa thành viên | id='.$id);
                $funs->alert('Bạn đã xóa thành công.');
                $funs->redirect(domain.'/admin/admin/index');
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/admin/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/admin/index');
        }
    }
    public function index(){
        $configs=new configs();
        $ModelAdmin=new Admin();
        $admins=$ModelAdmin->fetchAll();
        $permission=$configs->permission();
        return View('admin.admin.index')
            ->with('admins',$admins)
            ->with('permission',$permission);
    }
    public function myaccount(){
        //chưa code
    }
    public function logout(){
        $funs=new funs();
        session_destroy();
        $funs->redirect(domain);
    }
}