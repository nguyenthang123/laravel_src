<?php namespace App\Http\Controllers\Frontend;
use View;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
use Session;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller {
    public function index(){
        $Arr = array('cat_parent' => '6','cat_status'=>1);
        $cat_yeusinhly = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        $Arr = array('cat_parent' => '7','cat_status'=>1);
        $cat_chinhhinhcoquansinhduc = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        $Arr = array('cat_parent' => '8','cat_status'=>1);
        $cat_tienliettuyen = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        $Arr = array('cat_parent' => '9','cat_status'=>1);
        $cat_nhiemtrungduongtietnieu = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        $Arr = array('cat_parent' => '10','cat_status'=>1);
        $cat_vosinhnam = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        $Arr = array('cat_parent' => '11','cat_status'=>1);
        $cat_benhxahoi = DB::table('categories')->where($Arr)->orderBy('cat_sort', 'asc')->get();
        /*tin tuc phong kham*/
        $Arr_news=array('new_status'=>1,'cat_id'=>'2');
        $news_phongkham = DB::table('news')->where($Arr_news)->where('new_hot', '<>', 1)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        /*tin tuc phong kham hot*/
        $Arr_news=array('new_status'=>1,'cat_id'=>'2','new_hot'=>'1');
        $news_phongkhamhot = DB::table('news')->where($Arr_news)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $Arr_news=array('new_status'=>'1');
        /*NEWS SUI MAO GA*/
        //nguyennhan
        $Arr = array('cat_id' => '6','new_status'=>1,'new_nguyennhan'=>1);
        $news_smg_nn = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //trieuchung
        $Arr = array('cat_id' => '6','new_status'=>1,'new_trieuchung'=>1);
        $news_smg_tc = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //nguyhai
        $Arr = array('cat_id' => '6','new_status'=>1,'new_nguyhai'=>1);
        $news_smg_nh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //dieutri
        $Arr = array('cat_id' => '6','new_status'=>1,'new_dieutri'=>1);
        $news_smg_dt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //chiphi
        $Arr = array('cat_id' => '6','new_status'=>1,'new_chiphi'=>1);
        $news_smg_cp = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //kiemtra
        $Arr = array('cat_id' => '6','new_status'=>1,'new_kiemtra'=>1);
        $news_smg_kt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS BENH LAU*/
        //nguyennhan
        $Arr = array('cat_id' => '7','new_status'=>1,'new_nguyennhan'=>1);
        $news_l_nn = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //trieuchung
        $Arr = array('cat_id' => '7','new_status'=>1,'new_trieuchung'=>1);
        $news_l_tc = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //nguyhai
        $Arr = array('cat_id' => '7','new_status'=>1,'new_nguyhai'=>1);
        $news_l_nh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //dieutri
        $Arr = array('cat_id' => '7','new_status'=>1,'new_dieutri'=>1);
        $news_l_dt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //chiphi
        $Arr = array('cat_id' => '7','new_status'=>1,'new_chiphi'=>1);
        $news_l_cp = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //kiemtra
        $Arr = array('cat_id' => '7','new_status'=>1,'new_kiemtra'=>1);
        $news_l_kt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS GIANG MAI*/
        //nguyennhan
        $Arr = array('cat_id' => '8','new_status'=>1,'new_nguyennhan'=>1);
        $news_gm_nn = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //trieuchung
        $Arr = array('cat_id' => '8','new_status'=>1,'new_trieuchung'=>1);
        $news_gm_tc = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //nguyhai
        $Arr = array('cat_id' => '8','new_status'=>1,'new_nguyhai'=>1);
        $news_gm_nh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //dieutri
        $Arr = array('cat_id' => '8','new_status'=>1,'new_dieutri'=>1);
        $news_gm_dt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //chiphi
        $Arr = array('cat_id' => '8','new_status'=>1,'new_chiphi'=>1);
        $news_gm_cp = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //kiemtra
        $Arr = array('cat_id' => '8','new_status'=>1,'new_kiemtra'=>1);
        $news_gm_kt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS MUN ROP SINH DUC*/
        //nguyennhan
        $Arr = array('cat_id' => '9','new_status'=>1,'new_nguyennhan'=>1);
        $news_mrsd_nn = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //trieuchung
        $Arr = array('cat_id' => '9','new_status'=>1,'new_trieuchung'=>1);
        $news_mrsd_tc = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //nguyhai
        $Arr = array('cat_id' => '9','new_status'=>1,'new_nguyhai'=>1);
        $news_mrsd_nh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //dieutri
        $Arr = array('cat_id' => '9','new_status'=>1,'new_dieutri'=>1);
        $news_mrsd_dt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //chiphi
        $Arr = array('cat_id' => '9','new_status'=>1,'new_chiphi'=>1);
        $news_mrsd_cp = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //kiemtra
        $Arr = array('cat_id' => '9','new_status'=>1,'new_kiemtra'=>1);
        $news_mrsd_kt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        $seo=seo();
        if(deciceType=="phone"){
            /*yeu sinh ly*/
            $Arr_news=array('new_status'=>1);
            $cat_ids=array(6);
            foreach($cat_yeusinhly as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_yeusinhly = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            //chinh hinh co quan sinh duc
            $cat_ids=array(7);
            foreach($cat_chinhhinhcoquansinhduc as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_chinhhinhcoquansinhduc = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            //tien liet tuyen
            $cat_ids=array(8);
            foreach($cat_tienliettuyen as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_tienliettuyen = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            //nhiem trung duong tiet nieu
            $cat_ids=array(9);
            foreach($cat_nhiemtrungduongtietnieu as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_nhiemtrungduongtietnieu = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            //vo sinh nam
            $cat_ids=array(10);
            foreach($cat_vosinhnam as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_vosinhnam = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            //benh xa hoi
            $cat_ids=array(11);
            foreach($cat_benhxahoi as $val){
                array_push($cat_ids,$val['id']);
            }
            $news_benhxahoi = DB::table('news')->where($Arr_news)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->skip(0)->take(16)->get();
            return View('frontend.home.m_index')
                ->with('news_yeusinhly',$news_yeusinhly)
                ->with('news_chinhhinhcoquansinhduc',$news_chinhhinhcoquansinhduc)
                ->with('news_tienliettuyen',$news_tienliettuyen)
                ->with('news_nhiemtrungduongtietnieu',$news_nhiemtrungduongtietnieu)
                ->with('news_vosinhnam',$news_vosinhnam)
                ->with('news_benhxahoi',$news_benhxahoi)
                ->with('seo',$seo);
        }else{
            return View('frontend.home.index')
                ->with('seo',$seo)
                ->with('news_phongkham',$news_phongkham)
                ->with('news_phongkhamhot',$news_phongkhamhot)
                ->with('news_smg_nn',$news_smg_nn)
                ->with('news_smg_tc',$news_smg_tc)
                ->with('news_smg_nh',$news_smg_nh)
                ->with('news_smg_dt',$news_smg_dt)
                ->with('news_smg_cp',$news_smg_cp)
                ->with('news_smg_kt',$news_smg_kt)
                ->with('news_l_nn',$news_l_nn)
                ->with('news_l_tc',$news_l_tc)
                ->with('news_l_nh',$news_l_nh)
                ->with('news_l_dt',$news_l_dt)
                ->with('news_l_cp',$news_l_cp)
                ->with('news_l_kt',$news_l_kt)
                ->with('news_gm_nn',$news_gm_nn)
                ->with('news_gm_tc',$news_gm_tc)
                ->with('news_gm_nh',$news_gm_nh)
                ->with('news_gm_dt',$news_gm_dt)
                ->with('news_gm_cp',$news_gm_cp)
                ->with('news_gm_kt',$news_gm_kt)
                ->with('news_mrsd_nn',$news_mrsd_nn)
                ->with('news_mrsd_tc',$news_mrsd_tc)
                ->with('news_mrsd_nh',$news_mrsd_nh)
                ->with('news_mrsd_dt',$news_mrsd_dt)
                ->with('news_mrsd_cp',$news_mrsd_cp)
                ->with('news_mrsd_kt',$news_mrsd_kt)
                ->with('seo',$seo);
        }
    }
}