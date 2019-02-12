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
            $agent=$_SERVER['HTTP_USER_AGENT'];
            //if($ip[0]=='42.113.143.75' || $ip[0]=='117.4.246.37' && $agent=='Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36'){
                return View('frontend.home.index_new')
                    ->with('seo',$seo);
            //}
            /*else{
                return View('frontend.home.index')
                    ->with('seo',$seo);
            }*/

        }
    }
}