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
class NewsController extends Controller {
    public function Add($rewrite=null){
        //get cate
        $ModelCategories=new Categories();
        $Wcate=array(
            'cat_type'=>'news',
            'cat_status'=>'1',
            'cat_parent'=>'0'
        );
        $cate=$ModelCategories->fetchAllOption($Wcate);
        foreach($cate as $key=>$val){
            $Wcate=array(
                'cat_type'=>'news',
                'cat_status'=>'1',
                'cat_parent'=>$val['id']
            );
            $cate[$key]['lv2']=$ModelCategories->fetchAllOption($Wcate);
        }
        if($rewrite=='dieu-tri-thanh-cong'){
            return View('admin.news.adddieutrithanhcong')
                ->with('cate',$cate);
        }else{
            return View('admin.news.add')
                ->with('cate',$cate);
        }
    }
    public function postAdd(ValNewsAdd $request){
        $ModelNews=new News();
        $funs=new funs();
        $today=$funs->creat_date();
        $form = $request->all();
        $form['new_rewrite']=$funs->unicode($form['new_name']);
        $form['created_at']=$today;
        $form['updated_at']=$today;
        $form['new_type']='1';
        $form['new_status']='1';
        $form['adm_created']=$_SESSION['adm_id'];
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
                $id_max=$ModelNews->fetchIdMax();
                DB::logs('news/postAdd | Bạn đã thêm bài viết id| '.$id_max['id'].'-'.$form['new_name']);
                $funs->alert('Bạn đã thêm bài viết thành công.');
                $funs->redirect(domain.'/admin/news/index');
            }else{
                $funs->alert('Bạn thêm Bài viết không thành công.');
                $funs->refresh();
            }
        }
    }
    public function edit($id=null){
        //get cate
        $ModelCategories=new Categories();
        $Wcate=array(
            'cat_type'=>'news',
            'cat_status'=>'1',
            'cat_parent'=>'0'
        );
        $cate=$ModelCategories->fetchAll($Wcate);
        foreach($cate as $key=>$val){
            $Wcate=array(
                'cat_type'=>'news',
                'cat_status'=>'1',
                'cat_parent'=>$val['id']
            );
            $cate[$key]['lv2']=$ModelCategories->fetchAll($Wcate);
        }
        //get new
        $data = News::findOrFail($id);
        return View('admin.news.edit',compact('data'))
            ->with('cate',$cate);
    }
    public function update($id,ValNewsAdd $request){
        $funs=new funs();
        $today=$funs->creat_date();
        $form = $request->all();
        if($form['new_rewrite']==""){
            $form['new_rewrite']=$funs->unicode($form['new_name']);
        }
        $form['updated_at']=$today;
        $form['adm_updated']=$_SESSION['adm_id'];
        if(empty($form['new_status'])){
            $form['new_status']='0';
        }
        if(empty($form['new_nguyennhan'])){
            $form['new_nguyennhan']='0';
        }
        if(empty($form['new_trieuchung'])){
            $form['new_trieuchung']='0';
        }
        if(empty($form['new_nguyhai'])){
            $form['new_nguyhai']='0';
        }
        if(empty($form['new_dieutri'])){
            $form['new_dieutri']='0';
        }
        if(empty($form['new_chiphi'])){
            $form['new_chiphi']='0';
        }
        if(empty($form['new_kiemtra'])){
            $form['new_kiemtra']='0';
        }
        if(empty($form['new_hot'])){
            $form['new_hot']='0';
        }
        if(empty($form['new_dieutrithanhcong'])){
            $form['new_dieutrithanhcong']='0';
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
            DB::logs('news/update | Bạn đã sửa bài viết | id='.$id.' | '.$form['new_name']);
            $funs->redirect(domain.'/admin/news/index');
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
                    DB::logs('news/del | Bạn đã xóa bài viết | id='.$id.'-'.$data['new_name']);
                    $funs->alert('Bạn đã xóa thành công.');
                    $funs->redirect(domain.'/admin/news/index');
                }else{
                    $funs->alert('Bạn xóa không thành công.');
                    $funs->redirect(domain.'/admin/news/index');
                }
            }else{
                $funs->alert('Bạn xóa không thành công.');
                $funs->redirect(domain.'/admin/news/index');
            }
        }else{
            $funs->alert('link không đúng,mời bạn kiểm tra lại.');
            $funs->redirect(domain.'/admin/news/index');
        }
    }
    public function index($cate=null){
        manage(domain.'/admin');
        //$Wnew=array('new_type'=>'1','new_status'=>'1');
        //get cate
        $Wcate=array('cat_parent'=>0);
        $categories=DB::table('categories')->where($Wcate)->get();
        foreach($categories as $key=>$val){
            $Wcate=array('cat_parent'=>$val['id']);
            $categories[$key]['lv2']=DB::table('categories')->where($Wcate)->get();
        }
        if(!empty($cate)){
            $Wcate=array('cat_rewrite'=>$cate);
            $cat = DB::table('categories')->where($Wcate)->first();
            $cat_ids=array($cat['id']);
            if(!empty($cat)){
                //$Wnew=array('new_type'=>'1','new_status'=>'1','cat_id'=>$cat['id']);
                $Arr=array('cat_parent'=>$cat['id']);
                $sub_cat=DB::table('categories')->where($Arr)->get();
                foreach($sub_cat as $vallv2){
                    array_push($cat_ids,$vallv2['id']);
                }
            }
            //$news = DB::table('news')->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(10);
            $news = DB::table('news')
                ->leftJoin('admin','news.adm_created', '=', 'admin.id')
                ->leftJoin('admin as admin2','news.adm_updated', '=', 'admin2.id')
                ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                    'news.new_view','news.new_img','news.updated_at','admin.adm_name','admin2.adm_name AS adm_update')
                ->whereIn('cat_id',$cat_ids)
                ->orderBy('news.id','desc')
                ->paginate(10);
        }else{
            //$news = DB::table('news')->orderBy('id', 'desc')->paginate(10);
            $news = DB::table('news')
                ->leftJoin('admin','news.adm_created', '=', 'admin.id')
                ->leftJoin('admin as admin2','news.adm_updated', '=', 'admin2.id')
                ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                    'news.new_view','news.new_img','news.updated_at','admin.adm_name','admin2.adm_name AS adm_update')
                ->orderBy('news.id','desc')
                ->paginate(10);
        }
        /*$news = DB::table('news')
            ->leftJoin('admin','news.adm_created', '=', 'admin.id')
            ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                'news.new_view','news.new_img','admin.adm_name')
            ->where($Wnew)
            ->orderBy('news.id','desc')
            ->paginate(10);*/
        return View('admin.news.index')
            ->with('news',$news)
            ->with('cate',$cate)
            ->with('categories',$categories);
    }
    public function search($keyword=null){
        /*$func=new funs();
        $keyword=$func->unicode($keyword);
        $news = DB::table('news')
            ->leftJoin('admin','news.adm_created', '=', 'admin.id')
            ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                'news.new_view','news.new_img','admin.adm_name')
            ->where('news.new_rewrite','like','%'.$keyword.'%')
            ->orderBy('news.id','desc')
            ->paginate(10);
        return View('admin.news.search')
            ->with('news',$news);*/
        $funs=new funs();
        $uri=$funs->getParameteruri();
        $where='tblnews.id > 0 ';
        $new_name='';
        $adm_created='';
        if(!empty($uri['new_name'])){
            $new_name=$uri['new_name'];
            $new_rewrite=$funs->unicode($new_name);
            $where.=" AND new_rewrite LIKE '%$new_rewrite%'";
        }
        if(!empty($uri['adm_created'])){
            $adm_created=$uri['adm_created'];
            $where.=" AND adm_created = '$adm_created'";
        }
        $news = DB::table('news')
            ->leftJoin('admin','news.adm_created', '=', 'admin.id')
            ->selectRaw('tblnews.*,tbladmin.adm_name')
            ->whereRaw($where)
            ->orderBy('news.id','desc')
            ->paginate(30);
        /*$keyword=$funs->unicode($keyword);
        $news = DB::table('news')
            ->leftJoin('admin','news.adm_created', '=', 'admin.id')
            ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                'news.new_view','news.new_img','admin.adm_name')
            ->where('news.new_rewrite','like','%'.$keyword.'%')
            ->orderBy('news.id','desc')
            ->paginate(10);*/
        return View('admin.news.search')
            ->with('new_name',$new_name)
            ->with('adm_created',$adm_created)
            ->with('news',$news);
    }
    public function dieutrithanhcong($cate=null){
        manage(domain.'/admin');
        //$Wnew=array('new_type'=>'1','new_status'=>'1');
        //get cate
        $Wcate=array('cat_parent'=>0);
        $categories=DB::table('categories')->where($Wcate)->get();
        foreach($categories as $key=>$val){
            $Wcate=array('cat_parent'=>$val['id']);
            $categories[$key]['lv2']=DB::table('categories')->where($Wcate)->get();
        }
        $Wnews=array('new_dieutrithanhcong'=>1);
        if(!empty($cate)){
            $Wcate=array('cat_rewrite'=>$cate);
            $cat = DB::table('categories')->where($Wcate)->first();
            $cat_ids=array($cat['id']);
            if(!empty($cat)){
                //$Wnew=array('new_type'=>'1','new_status'=>'1','cat_id'=>$cat['id']);
                $Arr=array('cat_parent'=>$cat['id']);
                $sub_cat=DB::table('categories')->where($Arr)->get();
                foreach($sub_cat as $vallv2){
                    array_push($cat_ids,$vallv2['id']);
                }
            }
            //$news = DB::table('news')->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(10);
            $news = DB::table('news')
                ->leftJoin('admin','news.adm_created', '=', 'admin.id')
                ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                    'news.new_view','news.new_img','admin.adm_name')
                ->where($Wnews)
                ->whereIn('cat_id',$cat_ids)
                ->orderBy('news.id','desc')
                ->paginate(10);
        }else{
            //$news = DB::table('news')->orderBy('id', 'desc')->paginate(10);
            $news = DB::table('news')
                ->leftJoin('admin','news.adm_created', '=', 'admin.id')
                ->select('news.id','news.new_name','news.new_rewrite','news.new_status',
                    'news.new_view','news.new_img','admin.adm_name')
                ->where($Wnews)
                ->orderBy('news.id','desc')
                ->paginate(10);
        }
        return View('admin.news.index')
            ->with('news',$news)
            ->with('cate',$cate)
            ->with('categories',$categories);
    }
}