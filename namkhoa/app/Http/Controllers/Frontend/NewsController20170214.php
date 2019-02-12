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
        $funs=new funs();
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        $uri=$funs->getParameteruri();
        if(!empty($uri['new_hot'])){
            $W_arr=array('cat_id'=>$cate['id'],'new_status'=>1,'new_hot'=>'1');
        }else{
            $W_arr=array('cat_id'=>$cate['id'],'new_status'=>1);
        }
        $news = DB::table('news')->where($W_arr)->orderBy('id','desc')->paginate(10);
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
        if(deciceType=="phone"){
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->whereIn('id',$arr_not_ids)->orderBy('id','desc')->paginate(12);
            if($cate['cat_parent']==0){
                $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
                $cate_sub = DB::table('categories')->where($Arr)->get();
            }else{
                $Arr = array('cat_parent' => $cate['cat_parent'],'cat_status'=>1);
                $cate_sub = DB::table('categories')->where($Arr)->get();
            }
            return View('frontend.news.m_showlist')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
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
    public function showlist($rewrite=null){
        $Arr=array('cat_rewrite'=>$rewrite);
        $cate = DB::table('categories')->where($Arr)->first();
        $Arr=array('cat_id'=>$cate['id']);
        $news = DB::table('news')
            ->select('new_name','new_rewrite','new_description','new_img')
            ->where($Arr)
            ->orderBy('id','desc')
            ->paginate(11);
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            return View('frontend.news.m_showlist')
                ->with('seo',$seo)
                ->with('news',$news)
                ->with('cate',$cate);
        }else{
            return View('frontend.news.showlist')
                ->with('seo',$seo)
                ->with('news',$news)
                ->with('cate',$cate);
        }
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
        $ip=$funs->getIP();
        $Arr=array('ip'=>$ip,'new_id'=>$new['id']);
        $new_voited=DB::table('rating')->where($Arr)->first();
        if(deciceType=="phone"){
            return View('frontend.news.m_detail')
                ->with('new',$new)
                ->with('cate',$cate)
                ->with('baivietlienquan',$baivietlienquan)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.detail')
                ->with('new_voited',$new_voited)
                ->with('new',$new)
                ->with('cate',$cate)
                ->with('baivietlienquan',$baivietlienquan)
                ->with('seo',$seo);
        }
    }
    public function search($keyword=null){
        $funs=new funs();
        /*$news = DB::table('news')->select('id')->get();
        foreach($news as $val){
            $new_rating_count=rand(100,200);
            $new_rating_avg=rand(8,10);
            DB::table('news')->where('id', $val['id'])->update(['new_rating_count' => $new_rating_count,'new_rating_avg'=>$new_rating_avg]);
        }*/
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
    public function chinhhinhcoquansinhduc(){
        //get category parent
        $Arr=array('cat_rewrite'=>cat_rewrite_chinhhinh);
        $cate = DB::table('categories')->where($Arr)->first();
        //get danh muc
        $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
        $cat_chinhhinhcoquansinhduc = DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        foreach($cat_chinhhinhcoquansinhduc as $val){
            array_push($cat_ids,$val['id']);
        }
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $cate_sub=$cat_chinhhinhcoquansinhduc;
            $Arr=array('new_status'=>'1');
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('news',$news)
                ->with('seo',$seo);
        }else{
            //bao quy dau dai
            $Arr=array('cat_id'=>'18','new_status'=>1);
            $news_baoquydaudai = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //hep bao quy dau
            $Arr=array('cat_id'=>'19','new_status'=>1);
            $news_hepbaoquydau = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //lam to duong vat
            $Arr=array('cat_id'=>'50','new_status'=>1);
            $news_lamtoduongvat = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //keo dai duong vat
            $Arr=array('cat_id'=>'20','new_status'=>1);
            $news_keodaiduongvat = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            return View('frontend.news.chinhhinhcoquansinhduc')
                ->with('cate',$cate)
                //->with('cat_tienliettuyen',$cat_tienliettuyen)
                ->with('news_baoquydaudai',$news_baoquydaudai)
                ->with('news_hepbaoquydau',$news_hepbaoquydau)
                ->with('news_lamtoduongvat',$news_lamtoduongvat)
                ->with('news_keodaiduongvat',$news_keodaiduongvat)
                ->with('seo',$seo);
        }
    }
    public function tienliettuyen(){
        //get category parent
        $Arr=array('cat_rewrite'=>cat_rewrite_tienliettuyen);
        $cate = DB::table('categories')->where($Arr)->first();
        //get danh muc
        $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
        $cat_tienliettuyen = DB::table('categories')->where($Arr)->get();
        $cat_ids=array($cate['id']);
        foreach($cat_tienliettuyen as $val){
            array_push($cat_ids,$val['id']);
        }
        $seo=seo($cate['cat_seotitle'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $cate_sub=$cat_tienliettuyen;
            $Arr=array('new_status'=>'1');
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('news',$news)
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('seo',$seo);
        }else{
            //viem tien liet tuyen
            $Arr=array('cat_id'=>'22','new_status'=>1);
            $news_viemtienliettuyen = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //dau tien liet tuyen
            $Arr=array('cat_id'=>'23','new_status'=>1);
            $news_dautienliettuyen = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //viem tien liet tuyen cap tinh
            $Arr=array('cat_id'=>'24','new_status'=>1);
            $news_viemtienliettuyencaptinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            //viem tien liet tuyen man tinh
            $Arr=array('cat_id'=>'25','new_status'=>1);
            $news_viemtienliettuyenmantinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
            return View('frontend.news.tienliettuyen')
                ->with('cate',$cate)
                ->with('cat_tienliettuyen',$cat_tienliettuyen)
                ->with('news_viemtienliettuyen',$news_viemtienliettuyen)
                ->with('news_dautienliettuyen',$news_dautienliettuyen)
                ->with('news_viemtienliettuyencaptinh',$news_viemtienliettuyencaptinh)
                ->with('news_viemtienliettuyenmantinh',$news_viemtienliettuyenmantinh)
                ->with('seo',$seo);
        }
    }
    public function yeusinhly(){
        $Arr=array('cat_rewrite'=>'yeu-sinh-ly');
        $cate = DB::table('categories')->where($Arr)->first();
        //xuat tinh som
        $W_arr=array('new_status'=>1,'cat_id'=>'12');
        $news_xuatinhsom = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //liet duong
        $W_arr=array('new_status'=>1,'cat_id'=>'13');
        $news_lietduong = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //doi loan chuc nang cuong duong
        $W_arr=array('new_status'=>1,'cat_id'=>'14');
        $news_roiloanchucnangcuongduong = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //giam ham muon
        $W_arr=array('new_status'=>1,'cat_id'=>'15');
        $news_giamhammuon = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //di tinh
        $W_arr=array('new_status'=>1,'cat_id'=>'16');
        $news_ditinh = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //khong xuat tinh
        $W_arr=array('new_status'=>1,'cat_id'=>'17');
        $news_khongxuattinh = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $cat_ids=array($cate['id']);
            $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
            $cate_sub = DB::table('categories')->where($Arr)->get();
            foreach($cate_sub as $key=>$val){
                array_push($cat_ids,$val['id']);
            }
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->whereIn('cat_id',$cat_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('cate',$cate)
                ->with('news',$news)
                ->with('cate_sub',$cate_sub)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.yeusinhly')
                ->with('cate',$cate)
                ->with('news_xuatinhsom',$news_xuatinhsom)
                ->with('news_lietduong',$news_lietduong)
                ->with('news_roiloanchucnangcuongduong',$news_roiloanchucnangcuongduong)
                ->with('news_giamhammuon',$news_giamhammuon)
                ->with('news_ditinh',$news_ditinh)
                ->with('news_khongxuattinh',$news_khongxuattinh)
                ->with('seo',$seo);
        }
    }
    public function nhiemtrungduongtietnieu(){
        $Arr=array('cat_rewrite'=>'nhiem-trung-duong-tiet-nieu');
        $cate = DB::table('categories')->where($Arr)->first();
        //viem bao quy dau
        $W_arr=array('new_status'=>1,'cat_id'=>'26');
        $news_viembaoquydau = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //viem nieu dao
        $W_arr=array('new_status'=>1,'cat_id'=>'27');
        $news_viemnieudao = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //viem tinh hoan
        $W_arr=array('new_status'=>1,'cat_id'=>'28');
        $news_viemtinhhoan = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //viem mao tinh hoan
        $W_arr=array('new_status'=>1,'cat_id'=>'29');
        $news_viemmaotinhhoan = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //viem bang quang
        $W_arr=array('new_status'=>1,'cat_id'=>'30');
        $news_viembangquang = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //viem tui tinh
        $W_arr=array('new_status'=>1,'cat_id'=>'31');
        $news_viemtuitinh = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
            $cate_sub = DB::table('categories')->where($Arr)->get();
            $cat_ids=array($cate['id']);
            foreach($cate_sub as $val){
                array_push($cat_ids,$val['id']);
            }
            $Arr=array('new_status'=>1);
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('news',$news)
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.nhiemtrungduongtietnieu')
                ->with('cate',$cate)
                ->with('news_viembaoquydau',$news_viembaoquydau)
                ->with('news_viemnieudao',$news_viemnieudao)
                ->with('news_viemtinhhoan',$news_viemtinhhoan)
                ->with('news_viemmaotinhhoan',$news_viemmaotinhhoan)
                ->with('news_viembangquang',$news_viembangquang)
                ->with('news_viemtuitinh',$news_viemtuitinh)
                ->with('seo',$seo);
        }
    }
    public function viemnieudao(){
        $Arr=array('cat_rewrite'=>'viem-nieu-dao');
        $cate = DB::table('categories')->where($Arr)->first();
        //tieu dau
        $W_arr=array('new_status'=>1,'cat_id'=>'44');
        $news_tieudau = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        //tieu rat
        $W_arr=array('new_status'=>1,'cat_id'=>'45');
        $news_tieurat = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        //tieu buot
        $W_arr=array('new_status'=>1,'cat_id'=>'46');
        $news_tieubuot = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        //tieu ra mau
        $W_arr=array('new_status'=>1,'cat_id'=>'47');
        $news_tieuramau = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        //tieu kho
        $W_arr=array('new_status'=>1,'cat_id'=>'48');
        $news_tieukho = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        //tieu nhieu
        $W_arr=array('new_status'=>1,'cat_id'=>'49');
        $news_tieunhieu = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
            $cat_sub = DB::table('categories')->where($Arr)->get();
            foreach($cat_sub as $key=>$val){
                $W_arr=array('cat_id'=>$val['id']);
                $cat_sub[$key]['lv2'] = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(5)->get();
            }
            return View('frontend.news.m_yeusinhly')
                ->with('sub_cate',$cat_sub)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.viemnieudao')
                ->with('cate',$cate)
                ->with('news_tieudau',$news_tieudau)
                ->with('news_tieurat',$news_tieurat)
                ->with('news_tieubuot',$news_tieubuot)
                ->with('news_tieuramau',$news_tieuramau)
                ->with('news_tieukho',$news_tieukho)
                ->with('news_tieunhieu',$news_tieunhieu)
                ->with('seo',$seo);
        }
    }
    public function vosinhnam(){
        $Arr=array('cat_rewrite'=>cat_rewrite_vosinh);
        $cate = DB::table('categories')->where($Arr)->first();
        //khong tinh trung
        $W_arr=array('new_status'=>1,'cat_id'=>'32');
        $news_khongtinhtrung = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //it tinh trung
        $W_arr=array('new_status'=>1,'cat_id'=>'33');
        $news_ittinhtrung = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //tinh trung chet
        $W_arr=array('new_status'=>1,'cat_id'=>'34');
        $news_tinhtrungchet = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //tinh trung yeu
        $W_arr=array('new_status'=>1,'cat_id'=>'35');
        $news_tinhtrungyeu = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //vo sinh do bat thuong chuc nang sinh san
        $W_arr=array('new_status'=>1,'cat_id'=>'36');
        $news_vsdbtcnss = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //vo sinh do bat thuong noi tiet to
        $W_arr=array('new_status'=>1,'cat_id'=>'37');
        $news_vsdbtntt = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
            $cate_sub = DB::table('categories')->where($Arr)->get();
            $cat_ids=array($cate['id']);
            foreach($cate_sub as $key=>$val){
                array_push($cat_ids,$val['id']);
            }
            $Arr=array('new_status'=>1);
            $news=DB::table('news')->select('new_name','new_rewrite','new_description','new_img')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id','desc')->paginate(12);
            return View('frontend.news.m_showlist')
                ->with('news',$news)
                ->with('cate',$cate)
                ->with('cate_sub',$cate_sub)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.vosinhnam')
                ->with('cate',$cate)
                ->with('news_khongtinhtrung',$news_khongtinhtrung)
                ->with('news_ittinhtrung',$news_ittinhtrung)
                ->with('news_tinhtrungchet',$news_tinhtrungchet)
                ->with('news_tinhtrungyeu',$news_tinhtrungyeu)
                ->with('news_vsdbtcnss',$news_vsdbtcnss)
                ->with('news_vsdbtntt',$news_vsdbtntt)
                ->with('seo',$seo);
        }
    }
    public function benhxahoi(){
        $Arr=array('cat_rewrite'=>'benh-xa-hoi');
        $cate = DB::table('categories')->where($Arr)->first();
        //sui mao ga
        $W_arr=array('new_status'=>1,'cat_id'=>'38');
        $news_suimaoga = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //benh lau
        $W_arr=array('new_status'=>1,'cat_id'=>'39');
        $news_benhlau = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //giang mai
        $W_arr=array('new_status'=>1,'cat_id'=>'40');
        $news_giangmai = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        //herpes sinh duc
        $W_arr=array('new_status'=>1,'cat_id'=>'41');
        $news_herpessinhduc = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        $seo=seo($cate['cat_name'],$cate['cat_seokeywords'],$cate['cat_seodescription']);
        if(deciceType=="phone"){
            $Arr = array('cat_parent' => $cate['id'],'cat_status'=>1);
            $cat_sub = DB::table('categories')->where($Arr)->get();
            foreach($cat_sub as $key=>$val){
                $W_arr=array('cat_id'=>$val['id']);
                $cat_sub[$key]['lv2'] = DB::table('news')->where($W_arr)->orderBy('id', 'desc')->skip(0)->take(5)->get();
            }
            return View('frontend.news.m_yeusinhly')
                ->with('sub_cate',$cat_sub)
                ->with('seo',$seo);
        }else{
            return View('frontend.news.benhxahoi')
                ->with('cate',$cate)
                ->with('news_suimaoga',$news_suimaoga)
                ->with('news_benhlau',$news_benhlau)
                ->with('news_giangmai',$news_giangmai)
                ->with('news_herpessinhduc',$news_herpessinhduc)
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