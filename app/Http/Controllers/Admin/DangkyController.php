<?php namespace App\Http\Controllers\Admin;
use App\Model\Admin\Dangky;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValDangkyAdd;
use App\Model\Admin\Categories;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use Illuminate\Support\Facades\DB;
class DangkyController extends Controller {
    public function Add(){
        $loaibenh=loaibenh();
        return View('admin.dangky.add')
            ->with('loaibenh',$loaibenh);
    }
    public function postAdd(ValDangkyAdd $request){
        $ModelDangky=new Dangky();
        $funs=new funs();
        $form = $request->all();
        $form['created_at']=date('Y-m-d',strtotime('now'));
        $form['updated_at']=$form['created_at'];
            $rs=$ModelDangky->create($form);
            if($rs==true){
                DB::logs('dangky/postAdd | Bạn đã thêm bệnh nhân | '.$form['hoten']);
                $funs->alert('Bạn đã thêm bệnh nhân thành công.');
                $funs->redirect(domain.'/admin/dangky/index');
            }else{
                $funs->alert('Bạn thêm bệnh nhân không thành công.');
                $funs->refresh();
            }
    }
    public function edit($id){
        $funs=new funs();
        if(empty($id)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
        $benhnhan = Dangky::findOrFail($id);
        $loaibenh=loaibenh();
        return View('admin.dangky.edit',compact('benhnhan'))
            ->with('loaibenh',$loaibenh)
            ->with('benhnhan',$benhnhan)
            ->with('id',$id);
    }
    public function update($id,ValDangkyAdd $request){
        $funs=new funs();
        if(empty($id)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
        $form = $request->all();
        $form['updated_at']=date('Y-m-d',strtotime('now'));
        $cate = Dangky::findOrFail($id);
        if($form['khoakham']==""){
            $form['khoakham']=$cate['khoakham'];
        }
        $rs=$cate->update($form);
        if($rs==true){
            DB::logs('dangky/update | Bạn đã sửa danh mục | id= '.$id.' | '.$form['hoten']);
            $funs->redirect(domain.'/admin/dangky/index');
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
            $ModelDangky=new Dangky();
            $arr=array('id'=>$id);
            $rs=$ModelDangky->del($arr);
            if($rs>0){
                DB::logs('dangky/del | Bạn đã xóa bệnh nhân | id= '.$id);
                $funs->alert('Bạn đã xóa thành công.');
                $funs->redirect(domain.'/admin/dangky/index');
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/dangky/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/dangky/index');
        }
    }
    public function index(){
        $dangkys = DB::table('dangky')->orderBy('id','desc')->paginate(30);
        return View('admin.dangky.index')
            ->with('dangkys',$dangkys);
    }
}