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
        /*NEWS YEU SINH LY*/
        //xuat tinh som
        $Arr = array('cat_id' => '12','new_status'=>1);
        $news_xuattinhsom = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //liet duong
        $Arr = array('cat_id' => '13','new_status'=>1);
        $news_lietduong = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //doi loan chuc nang cuong duong
        $Arr = array('cat_id' => '14','new_status'=>1);
        $news_dlcncd = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //xuat tinh cham
        $Arr = array('cat_id' => '15','new_status'=>1);
        $news_xuattinhcham = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //di tinh
        $Arr = array('cat_id' => '16','new_status'=>1);
        $news_ditinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS CHINH HINH CO QUAN SINH DUC*/
        //dai bao quy dau
        $Arr = array('cat_id' => '18','new_status'=>1);
        $news_daibaoquydau = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //hep  bao quy dau
        $Arr = array('cat_id' => '19','new_status'=>1);
        $news_hepbaoquydau = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //keo dai duong vat
        $Arr = array('cat_id' => '20','new_status'=>1);
        $news_keodaiduongvat = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //lam to duong vat
        $Arr = array('cat_id' => '50','new_status'=>1);
        $news_lamtoduongvat = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*truong hop khoi benh*/
        $Arr = array('cat_id' => '28','new_status'=>1);
        $news_truonghopkhoibenh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(5)->get();
        $seo=seo();
            return View('frontend.home.index')
                ->with('news_truonghopkhoibenh',$news_truonghopkhoibenh)
                //->with('news_chinhhinhcoquansinhduc',$news_chinhhinhcoquansinhduc)
                //->with('news_tienliettuyen',$news_tienliettuyen)
                //->with('news_nhiemtrungduongtietnieu',$news_nhiemtrungduongtietnieu)
                //->with('news_vosinhnam',$news_vosinhnam)
                //->with('news_benhxahoi',$news_benhxahoi)
                ->with('seo',$seo);
    }
}