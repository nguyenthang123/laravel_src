<?php namespace App\Http\Controllers\Site;
use App\Dangky;
use View;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
class AjaxsController extends Controller {
    public $arrOption=array('news','data','about');
    public function dangky(){
        $ModelDangky=new Dangky();
        $hoten=$_POST['hoten'];
        $dienthoai=$_POST['dienthoai'];
        $khoakham=$_POST['khoakham'];
        $thoigian=$_POST['thoigian'];
        if($hoten=="" || $dienthoai==""){
            echo 'Họ tên và số điện thoại không để trống.';
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