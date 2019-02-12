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
        $seo=seo();
        if(deciceType=="phone"){
            return View('frontend.home.m_index')
                ->with('seo',$seo);
        }else{
            $ip=getIP();
            $arr=array('118.70.180.15','117.4.246.37');
            //if(in_array($ip[0],$arr)){
            if(1==1){
                $Arr_news_nk=array('com_status'=>1,'com_type'=>'nam-khoa');
                $binhluan_nk = DB::table('binhluan')->where($Arr_news_nk)->skip(0)->take(5);
                $Arr_news_pk=array('com_status'=>1,'com_type'=>'phu-khoa');
                $binhluan_pk = DB::table('binhluan')->where($Arr_news_pk)->skip(0)->take(5);
                $Arr_news_hn=array('com_status'=>1,'com_type'=>'hoi-nach');
                $binhluan_hn = DB::table('binhluan')->where($Arr_news_hn)->skip(0)->take(5);
                $Arr_news=array('com_status'=>1,'com_type'=>'benh-xa-hoi');
                $binhluan = DB::table('binhluan')->where($Arr_news)->unionAll($binhluan_nk)->unionAll($binhluan_pk)->unionAll($binhluan_hn)->orderBy('id', 'desc')->skip(0)->take(20)->get();
                $Arr_news=array('new_status'=>1,'new_hot'=>'1');
                $news_quantam = DB::table('news')->where($Arr_news)->orderBy('id', 'desc')->skip(0)->take(4)->get();
                return View('frontend.home.index')
                    ->with('seo',$seo)
                    ->with('binhluan',$binhluan)
                    ->with('news_quantam',$news_quantam);
            }
            else{
                return View('frontend.home.index_new')
                    ->with('seo',$seo);
            }

        }
    }
}