<?php namespace App\Http\Controllers\Frontend;
use App\Model\Admin\Categories;
use Illuminate\Libext\funs;
use View;
use App\Http\Controllers\Controller;
class ChuyendeController extends Controller {
    public function index($rewrite=null){
        $funs=new funs();
        $ModelCategories=new Categories();
        $arr=array('ke-hoach-hoa','benh-co-tu-cung','noi-tiet-to-nu','vo-sinh','chinh-hinh-phu-khoa','viem-nhiem-phu-khoa','benh-xa-hoi');
        if(in_array($rewrite,$arr)){
            if($rewrite=="ke-hoach-hoa"){
                $cd_list=cd_kehoachhoa();
                $cd_name='Kế hoạch hóa';
            }
            if($rewrite=="benh-co-tu-cung"){
                $cd_list=cd_benhcotucung();
                $cd_name='Bệnh cổ tử cung';
            }
            if($rewrite=="noi-tiet-to-nu"){
                $cd_list=cd_noitiettonu();
                $cd_name='Nội tiết tố nữ';
            }
            if($rewrite=="vo-sinh"){
                $cd_list=cd_vosinh();
                $cd_name='Vô sinh';
            }
            if($rewrite=="chinh-hinh-phu-khoa"){
                $cd_list=cd_chinhhinhphukhoa();
                $cd_name='Chỉnh hình phụ khoa';
            }
            if($rewrite=="viem-nhiem-phu-khoa"){
                $cd_list=cd_viemnhiemphukhoa();
                $cd_name='Viêm nhiễm phụ khoa';
            }
            if($rewrite=="benh-xa-hoi"){
                $cd_list=cd_benhxahoi();
                $cd_name='Bệnh xã hội';
            }
        }else{
            $funs->alert('liên kết không đúng.');
            $funs->redirect('/');
            exit;
        }
        //get cat
        $arr=array('cat_rewrite'=>$rewrite);
        $cate=$ModelCategories->fetchOne($arr);
        $seo=seo('chuyên đề '.$cd_name,'chuyên đề '.$cd_name,'chuyên đề '.$cd_name);
        return View('frontend.chuyende.index')
            ->with('cd_name',$cd_name)
            ->with('cd_list',$cd_list)
            ->with('cate',$cate)
            ->with('seo',$seo);
    }
    public function quytrinhkham(){
        $seo=seo('Quy trình khám','Quy trình khám','Quy trình khám');
        return View('frontend.chuyende.quytrinhkham')
            ->with('seo',$seo);
    }
}