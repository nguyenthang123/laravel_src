<?php namespace App\Http\Controllers\Frontend;
use App\Model\Admin\Dangky;
use App\Model\Admin\Binhluan;
use App\Model\Admin\News;
use App\Model\Admin\Rating;
use Illuminate\Support\Facades\DB;
use View;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Illuminate\Libext\funs;
use configs;
use Session;
class AjaxsController extends Controller {
    public $arrOption=array('news','data','about');
    public function dangky(){
        $ModelDangky=new Dangky();
        $hoten=$_POST['hoten'];
        $dienthoai=$_POST['dienthoai'];
        $khoakham=$_POST['khoakham'];
        $thoigian=$_POST['thoigian'];
        if($hoten=="" || $dienthoai==""){
            echo 'Họ tên và số điện thoại không được để trống.';
        }else{
            if(empty($thoigian)){
                $thoigian=date('Y-m-d');
            }
            $dulieu_form['hoten']=$hoten;
            $dulieu_form['dienthoai']=$dienthoai;
            $dulieu_form['khoakham']=$khoakham;
            $dulieu_form['thoigian']=$thoigian;
            $dulieu_form['created_at']=date('Y-m-d');
            $dulieu_form['updated_at']=$dulieu_form['created_at'];
            $rs=$ModelDangky->create($dulieu_form);
            if($rs==true){
                echo 'ok';
            }else{
                echo 'Bạn đăng ký không thành công.';
            }
        }
    }
    public function rating(){
        $ModelRating=new Rating();
        $ModelNews=new News();
        $funs=new funs();
        $ip=$funs->getIP();
        $id=$_GET['id'];
        $today=date('Y-m-d');
        $html='';
        if(!empty($_GET['scores'])){
            $scores=intval($_GET['scores']);
            if($scores<=8){
                $scores=8;
            }
        }else{
            $scores=9;
        }
        //check new_id
        $Arr=array('id'=>$id);
        $new=$ModelNews->fetchOne($Arr);
        if(empty($new)){
            $html='voiting error!';
        }else{
            //check voit
            $Arr=array('ip'=>$ip,'new_id'=>$id);
            $new_voited=$ModelRating->fetchOne($Arr);
            //voited
            if(!empty($new_voited)){
                $new_rating_count=$new['new_rating_count'];
                $new_rating_avg=$new['new_rating_avg'];
            }else{
                /*update table tblnews*/
                $new_rating_count=$new['new_rating_count']+1;
                $new_rating_avg=((($new['new_rating_avg']*$new['new_rating_count'])+$scores)/($new_rating_count));
                DB::table('news')->where('id', $id)->update(['new_rating_count' => $new_rating_count,'new_rating_avg'=>$new_rating_avg]);
                $form['new_id']=$id;
                $form['ip']=$ip;
                $form['scores']=$scores;
                $form['created_at']=$today;
                $form['updated_at']=$today;
                $ModelRating->create($form);
            }
            $with=30*$new_rating_avg;
            $html='<ul id="unit_ul59" class="unit-rating" style="width: 300px;">
            <li class="current-rating" style="width: '.$with.'px;">Currently '.number_format($new_rating_avg,2).'/10</li>
                    </ul>';
            $html.='<div itemscope="" itemtype="http://schema.org/Article">
			<div itemprop="name" class="title-vote"></div>
            <div class="voted" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                Điểm trung bình:
                <span itemprop="ratingValue" style="font-weight:800;">'.number_format($new_rating_avg,2).'</span> /
                <span itemprop="bestRating">10</span> (
                <span itemprop="ratingCount">'.$new_rating_count.'</span>  lượt đánh giá )           </div>
       </div>';
        }
        echo $html;
    }
    public function binhluan(){
        $ModelBinhluan=new Binhluan();
        $hoten=$_POST['hoten'];
        $dienthoai=$_POST['dienthoai'];
        $thaidophucvu=$_POST['thaidophucvu'];
        $dadenkham=$_POST['dadenkham'];
        $loaibenh=$_POST['loaibenh'];
        $hieuquadieutri=$_POST['hieuquadieutri'];
        $chiphikham=$_POST['chiphikham'];
        $moitruongphongkham=$_POST['moitruongphongkham'];
        $com_text=$_POST['com_text'];
        if($hoten=="" || $com_text=="" || $dienthoai==""){
            echo 'Họ tên,Số điện thoại và bình luận không được để trống.';
        }else{
            $dulieu_form['hoten']=$hoten;
            $dulieu_form['dienthoai']=$dienthoai;
            $dulieu_form['thaidophucvu']=$thaidophucvu;
            $dulieu_form['dadenkham']=$dadenkham;
            $dulieu_form['loaibenh']=$loaibenh;
            $dulieu_form['hieuquadieutri']=$hieuquadieutri;
            $dulieu_form['chiphikham']=$chiphikham;
            $dulieu_form['moitruongphongkham']=$moitruongphongkham;
            $dulieu_form['com_text']=$com_text;
            $dulieu_form['com_img']=rand(1,3);
            $dulieu_form['com_status']='0';
            $dulieu_form['created_at']=date('Y-m-d',strtotime('now'));
            $dulieu_form['updated_at']=$dulieu_form['created_at'];
            $rs=$ModelBinhluan->create($dulieu_form);
            if($rs==true){
                echo 'ok';
            }else{
                echo 'Bạn đăng bình luận không thành công.';
            }
        }
    }
}