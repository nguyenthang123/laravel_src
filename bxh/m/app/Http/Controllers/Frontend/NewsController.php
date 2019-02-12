<?php namespace App\Http\Controllers\Frontend;
use View;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\ArrayInput;
use Illuminate\Libext\funs;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\Categories;
class NewsController extends Controller {
    public function index($rewrite=null){
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        $cat_parent=0;
        if($cate['cat_parent']==0){
            $Arr=array('cat_parent'=>$cate['id'],'cat_status'=>'1');
            $cat_parent=1;
        }else{
            $Arr=array('cat_parent'=>$cate['cat_parent'],'cat_status'=>'1');
        }
        $cate_sub=DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        if($cat_parent==1){
            foreach($cate_sub as $val){
                array_push($cat_ids,$val['id']);
            }
        }
        //nguyennhan
        $W_arr=array('new_nguyennhan'=>1,'new_status'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //trieuchung
        $W_arr=array('new_trieuchung'=>1,'new_status'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //nguyhai
        $W_arr=array('new_nguyhai'=>1,'new_status'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //dieutri
        $W_arr=array('new_dieutri'=>1,'new_status'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //chiphi
        $W_arr=array('new_chiphi'=>1,'new_status'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        return View('frontend.news.nguyennhan')
            ->with('cate',$cate)
            ->with('cate_sub',$cate_sub)
            ->with('news_nguyennhan',$news_nguyennhan)
            ->with('news_trieuchung',$news_trieuchung)
            ->with('news_nguyhai',$news_nguyhai)
            ->with('news_dieutri',$news_dieutri)
            ->with('news_chiphi',$news_chiphi)
            ->with('seo',$seo);
    }
    public function index2($rewrite=null){
        $funs=new funs();
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        if($cate['cat_parent']==0){
            $Arr=array('cat_parent'=>$cate['id'],'cat_status'=>'1');
        }else{
            $Arr=array('cat_parent'=>$cate['cat_parent'],'cat_status'=>'1');
        }
        $cate_sub=DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        foreach($cate_sub as $val){
            array_push($cat_ids,$val['id']);
        }
        $uri=$funs->getParameteruri();
        if(!empty($uri['new_hot'])){
            $W_arr=array('new_status'=>1,'new_hot'=>'1');
        }else{
            $W_arr=array('new_status'=>1);
        }
        $news = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //get news 2
        $arr_not_ids=array();
        foreach($news as $val){
            array_push($arr_not_ids,$val['id']);
        }
        /*
        $W_arr=array('new_status'=>1,'cat_id'=>$cate['id']);
        $news2=DB::table('news')->select('new_name','new_rewrite','new_description')->where($W_arr)->whereNotIn('id',$arr_not_ids)->orderBy('id','desc')->paginate(12);*/
        //tin nong
        $W_arr=array('cat_id'=>$cate['id'],'new_status'=>1,'new_hot'=>'1');
        $news_hot = DB::table('news')
            ->select('new_name','new_rewrite','new_img')
            ->where($W_arr)
            ->orderBy('id', 'desc')
            ->skip(0)->take(7)->get();
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->whereIn('id',$arr_not_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.index')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news',$news)
                ->with('news_hot',$news_hot)
                ->with('seo',$seo);
    }
    public function showlist($rewrite=null){
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        if($cate['cat_parent']==0){
            $Arr=array('cat_parent'=>$cate['id'],'cat_status'=>'1');
        }else{
            $Arr=array('cat_parent'=>$cate['cat_parent'],'cat_status'=>'1');
        }
        $cate_sub=DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        foreach($cate_sub as $val){
            array_push($cat_ids,$val['id']);
        }
        $Arr=array('new_status'=>1);
        $news = DB::table('news')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(10);
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);

            return View('frontend.news.showlist')
                ->with('seo',$seo)
                ->with('news',$news)
                ->with('cate_sub',$cate_sub)
                ->with('cate',$cate);

    }
    public function nguyennhan($rewrite=null){
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        if($cate['cat_parent']==0){
            $Arr=array('cat_parent'=>$cate['id'],'cat_status'=>'1');
        }else{
            $Arr=array('cat_parent'=>$cate['cat_parent'],'cat_status'=>'1');
        }
        $cate_sub=DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        foreach($cate_sub as $val){
            array_push($cat_ids,$val['id']);
        }
        //nguyennhan
        $W_arr=array('new_nguyennhan'=>1,'new_status'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //trieuchung
        $W_arr=array('new_trieuchung'=>1,'new_status'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //nguyhai
        $W_arr=array('new_nguyhai'=>1,'new_status'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //dieutri
        $W_arr=array('new_dieutri'=>1,'new_status'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        //chiphi
        $W_arr=array('new_chiphi'=>1,'new_status'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(6);
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        return View('frontend.news.nguyennhan')
            ->with('cate',$cate)
            ->with('cate_sub',$cate_sub)
            ->with('news_nguyennhan',$news_nguyennhan)
            ->with('news_trieuchung',$news_trieuchung)
            ->with('news_nguyhai',$news_nguyhai)
            ->with('news_dieutri',$news_dieutri)
            ->with('news_chiphi',$news_chiphi)
            ->with('seo',$seo);
    }
    public function detail($rewrite=null){
        $funs=new funs();
        $Arr=array('new_rewrite'=>$rewrite);
        $new =DB::table('news')->where($Arr)->first();
        if(empty($new)){
            $funs->alert('Không có bài viết này.mời bạn quay lại');
            $funs->redirect_refer();
        }
        DB::update('update tblnews set new_view = new_view+1 where new_rewrite = ?', [$rewrite]);
        $Arr=array('id'=>$new['cat_id']);
        $cate=DB::table('categories')->where($Arr)->first();
        //lay hinh anh trong muc dieu tri thanh cong
        /*if(!empty($img_cate)){
            $cate['cat_img']=$img_cate['cat_img'];
            $cate['cat_img_style']=$img_cate['cat_img_style'];
        }*/
        /*$ArrBread=array(
            array('rewrite'=>$cate['cat_rewrite'],'name'=>$cate['cat_name'],'type'=>'a'),
            array('rewrite'=>$rewrite,'name'=>$new['new_name'],'type'=>'a')
        );
        $breadcum=$funs->breadcum($ArrBread);*/
        //bai viet lien quan
        $Arr=array('cat_id'=>$new['cat_id']);
        $baivietlienquan=DB::table('news')
            ->select('new_name','new_rewrite')
            ->where($Arr)
            ->whereNotIn('new_rewrite',array($rewrite))
            ->orderBy('id','desc')
            ->skip(0)->take(10)
            ->get();
        $seo=seo($new['new_seotitle'],$new['new_seokeywords'],$new['new_seodescription']);
            return View('frontend.news.detail')
                ->with('new',$new)
                ->with('cate',$cate)
                ->with('baivietlienquan',$baivietlienquan)
                ->with('seo',$seo);
    }
    public function dmbenh($dmbenh,$rewrite){
        $funs=new funs();
        if(empty($dmbenh) || empty($rewrite)){
            $funs->alert('Liên kết của bạn không đúng.');
            $funs->redirect_refer();
        }
        $Arr=array('cat_rewrite'=>$dmbenh);
        $cate = DB::table('categories')->where($Arr)->first();
        if(empty($cate)){
            $funs->alert('Không tồn tại danh mục này.');
            $funs->redirect_refer();
        }
        $cat_ids=array($cate['id']);
        if($cate['cat_parent']=="0"){
            $Arr=array('cat_parent'=>$cate['id']);
            $cate_sub = DB::table('categories')->where($Arr)->get();
            if(!empty($cate_sub)){
                foreach($cate_sub as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $Arr_new=array('id'=>0);
        $txt_nguyennhan='';
        if($rewrite==rewrite_nguyennhan){
            $Arr_new=array('new_nguyennhan'=>1,'new_status'=>1);
            $txt_nguyennhan='Nguyên nhân ';
        }
        if($rewrite==rewrite_nguyhai){
            $Arr_new=array('new_nguyhai'=>1,'new_status'=>1);
            $txt_nguyennhan='Nguy hại ';
        }
        if($rewrite==rewrite_dieutri){
            $Arr_new=array('new_dieutri'=>1,'new_status'=>1);
            $txt_nguyennhan='Điều trị ';
        }
        if($rewrite==rewrite_chiphi){
            $Arr_new=array('new_chiphi'=>1,'new_status'=>1);
            $txt_nguyennhan='Chi phí ';
        }
        if($rewrite==rewrite_trieuchung){
            $Arr_new=array('new_trieuchung'=>1,'new_status'=>1);
            $txt_nguyennhan='Triệu chứng ';
        }
        $news = DB::table('news')
            ->select('new_name','new_rewrite','new_description','new_img')
            ->where($Arr_new)
            ->whereIn('cat_id',$cat_ids)
            ->orderBy('id','desc')
            ->paginate(11);
        if(empty($news)){
            $funs->alert('Không có bài viết trong mục này.');
            $funs->redirect_refer();
        }
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        return View('frontend.news.showlist')
            ->with('seo',$seo)
            ->with('txt_nguyennhan',$txt_nguyennhan)
            ->with('news',$news)
            ->with('cate',$cate);
    }
    public function search($keyword=null){
        $funs=new funs();
        if(empty($keyword)){
            $funs->alert('Keyword không được để trống.');
            $funs->redirect(domain);
        }
        $rewrite=$funs->unicode($keyword);
        $news = DB::table('news')
            ->where('new_name','like','%'.$keyword.'%')
            ->orWhere('new_rewrite', 'like',"'%".$rewrite."%'")
            ->orderBy('id','desc')
            ->paginate(9);
        $seo=seo();
        return View('frontend.news.search')
            ->with('news',$news)
            ->with('keyword',$keyword)
            ->with('seo',$seo);
    }
}