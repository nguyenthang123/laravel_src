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
            return View('frontend.home.index_new')
                ->with('seo',$seo);
        }
    }
}