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
        //trieu chung
        $W_arr=array('cat_id'=>$cate['id'],'new_status'=>1);
        $news = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->paginate(6);
        //get news 2
        $arr_not_ids=array();
        foreach($news as $val){
            array_push($arr_not_ids,$val['id']);
        }
        $W_arr=array('new_status'=>1,'cat_id'=>$cate['id']);
        $news2=DB::table('news')->select('new_name','new_rewrite','new_description')->where($W_arr)->whereNotIn('id',$arr_not_ids)->orderBy('id','desc')->paginate(12);
        //tin nong
        $W_arr=array('cat_id'=>$cate['id'],'new_status'=>1,'new_hot'=>'1');
        $news_hot = DB::table('news')
            ->select('new_name','new_rewrite','new_img')
            ->where($W_arr)
            ->orderBy('id', 'desc')
            ->skip(0)->take(7)->get();
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->whereIn('id',$arr_not_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('cate',$cate)
                ->with('news',$news)
                ->with('news_hot',$news_hot)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.index')
                ->with('cate',$cate)
                ->with('news',$news)
                ->with('news_hot',$news_hot)
                ->with('seo',$seo);
        }
    }
    public function showlist($rewrite=null,$rewrite2=null){
        $funs=new funs();
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        if(empty($cate)){
            $funs->alert('Link không đúng.');
            $funs->redirect_refer();
        }
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

        $txt_nguyennhan='';
        if(empty($rewrite2)){
            $rewrite2='';
        }
        if($rewrite2=='nguyen-nhan'){
            $Arr=array('cat_id'=>$cate['id'],'new_nguyennhan'=>1);
            $txt_nguyennhan='Nguyên nhân';
        }
        if($rewrite2=='trieu-chung'){
            $Arr=array('cat_id'=>$cate['id'],'new_trieuchung'=>1);
            $txt_nguyennhan='Triệu chứng';
        }
        if($rewrite2=='nguy-hai'){
            $Arr=array('cat_id'=>$cate['id'],'new_nguyhai'=>1);
            $txt_nguyennhan='Nguy hại';
        }
        if($rewrite2=='dieu-tri'){
            $Arr=array('cat_id'=>$cate['id'],'new_dieutri'=>1);
            $txt_nguyennhan='Điều trị';
        }
        if($rewrite2=='chi-phi'){
            $Arr=array('cat_id'=>$cate['id'],'new_chiphi'=>1);
            $txt_nguyennhan='Chi phí';
        }
        if($rewrite2=='kiem-tra'){
            $Arr=array('cat_id'=>$cate['id'],'new_kiemtra'=>1);
            $txt_nguyennhan='Kiểm tra';
        }
        $news = DB::table('news')
            ->select('new_name','new_rewrite','new_description','new_img')
            ->where($Arr)
            ->whereIn('cat_id',$cat_ids)
            ->orderBy('id','desc')
            ->paginate(11);
        $ArrBread=array(
            array('rewrite'=>$cate['cat_rewrite'],'name'=>$cate['cat_name'],'type'=>'a'),
            array('rewrite'=>$rewrite2,'name'=>$txt_nguyennhan,'type'=>'')
        );
        $breadcum=$funs->breadcum($ArrBread);
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_showlist')
                ->with('seo',$seo)
                ->with('txt_nguyennhan',$txt_nguyennhan)
                ->with('news',$news)
                ->with('cate',$cate);
        }else{
            return View('frontend.news.showlist')
                ->with('seo',$seo)
                ->with('news',$news)
                ->with('breadcum',$breadcum)
                ->with('cate',$cate);
        }
    }
    public function detail($rewrite=null){
        $funs=new funs();
        /*$refer=$funs->getRefer();
        $getExt=$funs->getExt_uri($refer);
        if($getExt=='dieu-tri-thanh-cong'){
            $Arr=array('cat_rewrite'=>$getExt);
            $img_cate=DB::table('categories')->where($Arr)->first();
        }*/
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
        if(deciceType=="phone"){
            return View('frontend.news.m_detail')
                ->with('new',$new)
                ->with('cate',$cate)
                ->with('baivietlienquan',$baivietlienquan)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.detail')
                ->with('new',$new)
                ->with('cate',$cate)
                ->with('baivietlienquan',$baivietlienquan)
                ->with('seo',$seo);
        }
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
        if(deciceType=="phone"){
            return View('frontend.news.m_search')
                ->with('news',$news)
                ->with('keyword',$keyword)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.search')
                ->with('news',$news)
                ->with('keyword',$keyword)
                ->with('seo',$seo);
        }
    }
    public function suimaoga(){
        $Arr=array('cat_rewrite'=>rewrite_suimaoga);
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
        //nguyen nhan
        //$W_arr=array('new_status'=>1,'cat_id'=>'6','new_nguyennhan'=>1);
        //$news_nguyennhan = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $W_arr=array('new_nguyennhan'=>1,'new_status'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //trieu chung
        $W_arr=array('new_status'=>1,'new_trieuchung'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //nguy hai
        $W_arr=array('new_status'=>1,'new_nguyhai'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //dieu tri
        $W_arr=array('new_status'=>1,'new_dieutri'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //chi phi
        $W_arr=array('new_status'=>1,'new_chiphi'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //kiem tra
        $W_arr=array('new_status'=>1,'new_kiemtra'=>1);
        $news_kiemtra = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_yeusinhly')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.suimaoga')
                ->with('cate',$cate)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }
    }
    public function benhlau(){
        $Arr=array('cat_rewrite'=>rewrite_benhlau);
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
        //nguyen nhan
        $W_arr=array('new_status'=>1,'new_nguyennhan'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //trieu chung
        $W_arr=array('new_status'=>1,'new_trieuchung'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //nguy hai
        $W_arr=array('new_status'=>1,'new_nguyhai'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //dieu tri
        $W_arr=array('new_status'=>1,'new_dieutri'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //chi phi
        $W_arr=array('new_status'=>1,'new_chiphi'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //kiem tra
        $W_arr=array('new_status'=>1,'new_kiemtra'=>1);
        $news_kiemtra = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_yeusinhly')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.benhlau')
                ->with('cate',$cate)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }
    }
    public function giangmai(){
        $Arr=array('cat_rewrite'=>rewrite_giangmai);
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
        //nguyen nhan
        $W_arr=array('new_status'=>1,'new_nguyennhan'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //trieu chung
        $W_arr=array('new_status'=>1,'new_trieuchung'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //nguy hai
        $W_arr=array('new_status'=>1,'new_nguyhai'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //dieu tri
        $W_arr=array('new_status'=>1,'new_dieutri'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //chi phi
        $W_arr=array('new_status'=>1,'new_chiphi'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //kiem tra
        $W_arr=array('new_status'=>1,'new_kiemtra'=>1);
        $news_kiemtra = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_yeusinhly')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.giangmai')
                ->with('cate',$cate)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }
    }
    public function munropsinhduc(){
        $Arr=array('cat_rewrite'=>rewrite_munropsinhduc);
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
        //nguyen nhan
        $W_arr=array('new_status'=>1,'new_nguyennhan'=>1);
        $news_nguyennhan = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //trieu chung
        $W_arr=array('new_status'=>1,'new_trieuchung'=>1);
        $news_trieuchung = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //nguy hai
        $W_arr=array('new_status'=>1,'new_nguyhai'=>1);
        $news_nguyhai = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //dieu tri
        $W_arr=array('new_status'=>1,'new_dieutri'=>1);
        $news_dieutri = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //chi phi
        $W_arr=array('new_status'=>1,'new_chiphi'=>1);
        $news_chiphi = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        //kiem tra
        $W_arr=array('new_status'=>1,'new_kiemtra'=>1);
        $news_kiemtra = DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_yeusinhly')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.munropsinhduc')
                ->with('cate',$cate)
                ->with('news_nguyennhan',$news_nguyennhan)
                ->with('news_trieuchung',$news_trieuchung)
                ->with('news_nguyhai',$news_nguyhai)
                ->with('news_dieutri',$news_dieutri)
                ->with('news_chiphi',$news_chiphi)
                ->with('news_kiemtra',$news_kiemtra)
                ->with('seo',$seo);
        }
    }
    public function dieutrithanhcong(){
        $ModelCategories=new Categories();
        $wcate=array('cat_rewrite'=>'dieu-tri-thanh-cong');
        $cate=$ModelCategories->fetchOne($wcate);
        //ke hoach hoa
        $W_arr=array('cat_rewrite'=>'ke-hoach-hoa');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_kehoachhoa=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //benh co tu cung
        $W_arr=array('cat_rewrite'=>'benh-co-tu-cung');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_benhcotucung=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //chinh hinh phu khoa
        $W_arr=array('cat_rewrite'=>'chinh-hinh-phu-khoa');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_chinhhinhphukhoa=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //viem nhiem phu khoa
        $W_arr=array('cat_rewrite'=>'viem-nhiem-phu-khoa');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_viemnhiemphukhoa=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //vo sinh
        $W_arr=array('cat_rewrite'=>'vo-sinh');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_vosinh=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //noi tiet to nu
        $W_arr=array('cat_rewrite'=>'noi-tiet-to-nu');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_noitiettonu=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //benh xa hoi
        $W_arr=array('cat_rewrite'=>'benh-xa-hoi');
        $cat=$ModelCategories->fetchOne($W_arr);
        $cat_ids=array();
        if(!empty($cat)){
            array_push($cat_ids,$cat['id']);
            $W_arr=array('cat_parent'=>$cat['id']);
            $sub_cat=$ModelCategories->fetchAll($W_arr);
            if(!empty($sub_cat)){
                foreach($sub_cat as $val){
                    array_push($cat_ids,$val['id']);
                }
            }
        }
        $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news_benhxahoi=DB::table('news')->where($W_arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        $seo=seo('điều trị thành công','điều trị thành công','diều trị thành công');
        if(deciceType=="phone"){
            $W_arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
            $news = DB::table('news')
                ->select('new_name','new_rewrite','new_description','new_img')
                ->where($W_arr)
                ->orderBy('id','desc')
                ->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('seo',$seo)
                ->with('news',$news)
                ->with('cate',$cate);
        }else{
            return View('frontend.news.dieutrithanhcong')
                ->with('news_kehoachhoa',$news_kehoachhoa)
                ->with('news_benhcotucung',$news_benhcotucung)
                ->with('news_chinhhinhphukhoa',$news_chinhhinhphukhoa)
                ->with('news_viemnhiemphukhoa',$news_viemnhiemphukhoa)
                ->with('news_vosinh',$news_vosinh)
                ->with('news_noitiettonu',$news_noitiettonu)
                ->with('news_benhxahoi',$news_benhxahoi)
                ->with('cate',$cate)
                ->with('seo',$seo);
        }
    }
    public function dieutrithanhconglist($rewrite=null){
        $funs=new funs();
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        if(empty($cate)){
            $funs->alert('không tồn tại danh mục bệnh này.');
            $funs->redirect('/dieu-tri-thanh-cong');
        }
        $cat_ids=array($cate['id']);
        $Arr=array('cat_parent'=>$cate['id']);
        $cates = DB::table('categories')->where($Arr)->get();
        if(!empty($cates)){
            foreach($cates as $val){
                array_push($cat_ids,$val['id']);
            }
        }
        //lay banner cua muc dieu tri thanh cong
        $Arr=array('cat_rewrite'=>'dieu-tri-thanh-cong');
        $img_cate=DB::table('categories')->where($Arr)->first();
        if(!empty($img_cate)){
            $cate['cat_img']=$img_cate['cat_img'];
            $cate['cat_img_style']=$img_cate['cat_img_style'];
        }
        $Arr=array('new_status'=>1,'new_dieutrithanhcong'=>1);
        $news = DB::table('news')
            ->select('new_name','new_rewrite','new_description','new_img')
            ->where($Arr)
            ->whereIn('cat_id',$cat_ids)
            ->orderBy('id','desc')
            ->paginate(12);
        //sidebar
        $Arr=array('cat_id'=>$cate['id'],'new_dieutrithanhcong'=>1);
        $baivietsidebar=DB::table('news')
            ->select('new_name','new_rewrite','new_description','new_img')
            ->where($Arr)
            ->orderBy('id','desc')
            ->skip(0)->take(10)
            ->get();
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        return View('frontend.news.dieutrithanhconglist')
            ->with('seo',$seo)
            ->with('news',$news)
            ->with('baivietsidebar',$baivietsidebar)
            ->with('cate',$cate);
    }
}