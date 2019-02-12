<?php namespace App\Http\Controllers\Admin;
use App\Model\Admin\Binhluan;
use App\Model\Admin\Categories;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValBinhluanAdd;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\ArrayInput;
use Illuminate\Libext\funs;
use configs;
use Illuminate\Support\Facades\DB;
class BinhluanController extends Controller {
    public function Add(){
        return View('admin.binhluan.add');
    }
    public function postAdd(ValBinhluanAdd $request){
        $ModelBinhluan=new Binhluan();
        $funs=new funs();
        $form = $request->all();
        $form['created_at']=date('Y-m-d',strtotime('now'));
        $form['updated_at']=$form['created_at'];
        $form['com_status']='1';
            $rs=$ModelBinhluan->create($form);
            if($rs==true){
                DB::logs('About/BinhluanAdd | Bạn đã thêm bài viết | '.$form['com_text']);
                $funs->alert('Bạn đã thêm bài viết thành công.');
                $funs->redirect(domain.'/admin/binhluan/index');
            }else{
                $funs->alert('Bạn thêm Bài viết không thành công.');
                $funs->refresh();
            }
        }
    public function edit($id=null){
        $ModelBinhluan=new Binhluan();
        //get new
        $arr=array('id'=>$id);
        $data = Binhluan::findOrFail($id);
        return View('admin.binhluan.edit',compact('data'))
            ->with('data',$data);
    }
    public function update($id,ValBinhluanAdd $request){
        $funs=new funs();
        $form = $request->all();
        if(empty($form['com_status'])){
            $form['com_status']='0';
        }
        $form['updated_at']=$form['created_at'];
        $news = Binhluan::findOrFail($id);
        $rs=$news->update($form);
        if($rs==true){
            DB::logs('binhluan/update | Bạn đã sửa bình luận | id='.$id.' | '.$form['com_text']);
            $funs->redirect(domain.'/admin/binhluan/index');
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
            $ModelBinhluan=new Binhluan();
            //del image
            $data=$ModelBinhluan->fetchOne($arr);
            if(!empty($data)){
                $rs=$ModelBinhluan->del($arr);
                if($rs>0){
                    DB::logs('binhluan/del | Bạn đã xóa bài viết | id='.$id);
                    $funs->alert('Bạn đã xóa thành công.');
                    $funs->redirect(domain.'/admin/binhluan/index');
                }else{
                    $funs->alert('Bạn xóa không thành công.');
                    $funs->redirect(domain.'/admin/binhluan/index');
                }
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/binhluan/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/binhluan/index');
        }
    }
    public function index(){
        $ModelBinhLuan=new Binhluan();
        //$binhluan=$ModelBinhLuan->fetchAll();
        $binhluan = DB::table('binhluan')
            ->orderBy('binhluan.id','desc')
            ->paginate(10);
        return View('admin.binhluan.index')
            ->with('binhluan',$binhluan);
    }
}