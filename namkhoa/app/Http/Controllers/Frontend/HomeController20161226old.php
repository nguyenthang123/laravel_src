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
        /*NEWS BENH TIEN LIET TUYEN*/
        //viem tien liet tuyen
        $Arr = array('cat_id' => '22','new_status'=>1);
        $news_viemtienliettuyen = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //dau tien liet tuyen
        $Arr = array('cat_id' => '23','new_status'=>1);
        $news_dautienliettuyen = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem tien liet tuyen cap tinh
        $Arr = array('cat_id' => '24','new_status'=>1);
        $news_viemtltcaptinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem tien liet tuyen man tinh
        $Arr = array('cat_id' => '25','new_status'=>1);
        $news_viemtltmantinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS NHIEM TRUNG DUONG TIET NIEU*/
        //viem bao quy dau
        $Arr = array('cat_id' => '26','new_status'=>1);
        $news_viembaoquydau = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem nieu dao
        $Arr = array('cat_id' => '27','new_status'=>1);
        $news_viemnieudao = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem tinh hoan
        $Arr = array('cat_id' => '28','new_status'=>1);
        $news_viemtinhhoan = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem mao tinh hoan
        $Arr = array('cat_id' => '29','new_status'=>1);
        $news_viemmaotinhhoan = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem bang quang
        $Arr = array('cat_id' => '30','new_status'=>1);
        $news_viembangquang = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //viem tui tinh
        $Arr = array('cat_id' => '31','new_status'=>1);
        $news_viemtuitinh = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS VO SINH NAM*/
        //khong tinh trung
        $Arr = array('cat_id' => '32','new_status'=>1);
        $news_khongtinhtrung = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //it tinh trung
        $Arr = array('cat_id' => '33','new_status'=>1);
        $news_ittinhtrung = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //tinh trung chet
        $Arr = array('cat_id' => '34','new_status'=>1);
        $news_tinhtrungchet = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //tinh trung yeu
        $Arr = array('cat_id' => '35','new_status'=>1);
        $news_tinhtrungyeu = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //do cnssbt
        $Arr = array('cat_id' => '36','new_status'=>1);
        $news_cnssbt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //do cnnttbt
        $Arr = array('cat_id' => '37','new_status'=>1);
        $news_cnnttbt = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        /*NEWS BENH XA HOI*/
        //sui mao ga
        $Arr = array('cat_id' => '38','new_status'=>1);
        $news_suimaoga = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //benh lau
        $Arr = array('cat_id' => '39','new_status'=>1);
        $news_benhlau = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //giang mai
        $Arr = array('cat_id' => '40','new_status'=>1);
        $news_giangmai = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        //hesper sinh duc
        $Arr = array('cat_id' => '41','new_status'=>1);
        $news_hespersinhduc = DB::table('news')->where($Arr)->orderBy('id', 'desc')->skip(0)->take(9)->get();
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
                ->with('news_xuattinhsom',$news_xuattinhsom)
                ->with('news_lietduong',$news_lietduong)
                ->with('news_dlcncd',$news_dlcncd)
                ->with('news_xuattinhcham',$news_xuattinhcham)
                ->with('news_ditinh',$news_ditinh)
                ->with('news_daibaoquydau',$news_daibaoquydau)
                ->with('news_hepbaoquydau',$news_hepbaoquydau)
                ->with('news_keodaiduongvat',$news_keodaiduongvat)
                ->with('news_lamtoduongvat',$news_lamtoduongvat)
                ->with('news_viemtienliettuyen',$news_viemtienliettuyen)
                ->with('news_dautienliettuyen',$news_dautienliettuyen)
                ->with('news_viemtltcaptinh',$news_viemtltcaptinh)
                ->with('news_viemtltmantinh',$news_viemtltmantinh)
                ->with('news_viembaoquydau',$news_viembaoquydau)
                ->with('news_viemnieudao',$news_viemnieudao)
                ->with('news_viemtinhhoan',$news_viemtinhhoan)
                ->with('news_viemmaotinhhoan',$news_viemmaotinhhoan)
                ->with('news_viembangquang',$news_viembangquang)
                ->with('news_viemtuitinh',$news_viemtuitinh)
                ->with('news_khongtinhtrung',$news_khongtinhtrung)
                ->with('news_ittinhtrung',$news_ittinhtrung)
                ->with('news_tinhtrungchet',$news_tinhtrungchet)
                ->with('news_tinhtrungyeu',$news_tinhtrungyeu)
                ->with('news_cnssbt',$news_cnssbt)
                ->with('news_cnnttbt',$news_cnnttbt)
                ->with('news_suimaoga',$news_suimaoga)
                ->with('news_benhlau',$news_benhlau)
                ->with('news_giangmai',$news_giangmai)
                ->with('news_hespersinhduc',$news_hespersinhduc)
                ->with('seo',$seo);
        }
    }
}