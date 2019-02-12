<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
class SanphamController extends Controller {
	public function index()
	{
		$array_cat_nhap_khau=[7,14,22,25,17];
		//$array_cat_nhap_khau=[7];
		$array_cat_bao_ho_lao_dong=[10,15,18,19,16];
		$san_pham_nhap_khau=DB::table('product')->whereIn('cat_id',$array_cat_nhap_khau)
			->orWhere(function($query)use ($array_cat_nhap_khau)
			{
				$query->whereIn('cat_id_1',$array_cat_nhap_khau);
			})
			->where('status_product','=','1')->orderBy('id', 'DESC')->take(10)->get();
		$trang_bi_bao_ho_lao_dong=DB::table('product')->whereIn('cat_id',$array_cat_bao_ho_lao_dong)
			->orWhere(function($query)use ($array_cat_bao_ho_lao_dong)
			{
				$query->whereIn('cat_id_1',$array_cat_bao_ho_lao_dong);
			})
			->orWhere(function($query)use ($array_cat_bao_ho_lao_dong)
			{
				$query->whereIn('cat_id_2',$array_cat_bao_ho_lao_dong);
			})
			->where('status_product','=','1')->orderBy('id', 'DESC')->take(10)->get();
		$trang_bi_pccc=DB::table('product')->where('cat_id', '=', "10")->orWhere('cat_id_1',"10")->orWhere('cat_id_2',"10")->where('status_product','=','1')->orderBy('id', 'DESC')->take(10)->get();
		
		$thiet_bi_an_toan_giao_thong=DB::table('product')->where('cat_id', '=', "11")->orWhere('cat_id_1',"11")->orWhere('cat_id_2',"11")->where('status_product','=','1')->orderBy('id', 'DESC')->take(10)->get();
		
		$lap_dat_luoi_cong_trinh=DB::table('product')->where('cat_id', '=', "12")->orWhere('cat_id_1',"12")->orWhere('cat_id_2',"12")->where('status_product','=','1')->orderBy('id', 'DESC')->take(4)->get();
		
		$lap_dat_gian_giao=DB::table('product')->where('cat_id', '=', "21")->orWhere('cat_id_1',"21")->orWhere('cat_id_2',"21")->where('status_product','=','1')->orderBy('id', 'DESC')->take(4)->get();
		
		$lap_dat_lan_can_an_toan=DB::table('product')->where('cat_id', '=', "23")->orWhere('cat_id_1',"23")->orWhere('cat_id_2',"23")->where('status_product','=','1')->orderBy('id', 'DESC')->take(4)->get();
		
		$lap_dat_bien_bao_an_toan=DB::table('product')->where('cat_id', '=', "24")->orWhere('cat_id_1',"24")->orWhere('cat_id_2',"24")->where('status_product','=','1')->orderBy('id', 'DESC')->take(4)->get();
		
		$thi_cong_an_toan=DB::table('product')->where('cat_id', '=', "13")->orWhere('cat_id_1',"13")->orWhere('cat_id_2',"13")->where('status_product','=','1')->take(5)->orderBy('id', 'DESC')->get();
		
		$san_pham_ban_chay=DB::table('product')->where('ban_chay', '=', "1")->where('status_product','=','1')->take(5)->orderBy('id', 'DESC')->get();
		
		$san_pham_ban_chay_1=DB::table('product')->where('ban_chay', '=', "1")->where('status_product','=','1')->skip(5)->orderBy('id', 'DESC')->take(5)->get();
        $seo=seo();
        if(deviceType=='tablet'){
            //tri noi
            $trinoi=DB::table('product')->where('cat_id', '=', "51")->orWhere('cat_id_1',"51")->orWhere('cat_id_2',"51")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            $tringoai=DB::table('product')->where('cat_id', '=', "52")->orWhere('cat_id_1',"52")->orWhere('cat_id_2',"52")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            $trihonhop=DB::table('product')->where('cat_id', '=', "53")->orWhere('cat_id_1',"53")->orWhere('cat_id_2',"53")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            $tacmachtri=DB::table('product')->where('cat_id', '=', "54")->orWhere('cat_id_1',"54")->orWhere('cat_id_2',"54")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            $apxehaumon=DB::table('product')->where('cat_id', '=', "50")->orWhere('cat_id_1',"50")->orWhere('cat_id_2',"50")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            $kythuat=DB::table('product')->where('cat_id', '=', "39")->orWhere('cat_id_1',"39")->orWhere('cat_id_2',"39")->where('status_product','=','1')->orderBy('id', 'DESC')->take(6)->get();
            return view('mobile.home')
                ->with('seo',$seo)
                ->with('tringoai',$tringoai)
                ->with('trihonhop',$trihonhop)
                ->with('tacmachtri',$tacmachtri)
                ->with('apxehaumon',$apxehaumon)
                ->with('kythuat',$kythuat)
                ->with('trinoi',$trinoi);
        }else{
            return view('site.index')
                ->with('san_pham_nhap_khau',$san_pham_nhap_khau)
                ->with('trang_bi_bao_ho_lao_dong',$trang_bi_bao_ho_lao_dong)
                ->with('trang_bi_pccc',$trang_bi_pccc)
                ->with('thiet_bi_an_toan_giao_thong',$thiet_bi_an_toan_giao_thong)
                ->with('lap_dat_luoi_cong_trinh',$lap_dat_luoi_cong_trinh)
                ->with('lap_dat_gian_giao',$lap_dat_gian_giao)
                ->with('lap_dat_lan_can_an_toan',$lap_dat_lan_can_an_toan)
                ->with('lap_dat_bien_bao_an_toan',$lap_dat_bien_bao_an_toan)
                ->with('thi_cong_an_toan',$thi_cong_an_toan)
                ->with('san_pham_ban_chay',$san_pham_ban_chay)
                ->with('san_pham_ban_chay_1',$san_pham_ban_chay_1);
        }
	}
	public function create()
	{
		//
	}
	public function store()
	{
		//
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		//
	}
	public function update($id)
	{
		//
	}
	public function destroy($id)
	{
		//
	}
	public function search_site(Request $request){
	//	exit("vao toi ham search_site");
		$search_site = $request->input('search_site');
		$products=DB::table('product')->where('name', 'LIKE', "%$search_site%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
		return redirect()->action('Site\SanphamController@get_search_site', $search_site);
	}
	public function get_search_site($search_site){
		//exit("vao toi ham get_search_site");
		$products=DB::table('product')->where('name', 'LIKE', "%$search_site%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
		$title='từ khóa:'.$search_site;
        $seo=seo();
        if(deviceType=='tablet' || deviceType=='phone'){
            $cat=$title;
            return view('mobile.showlist')
                ->with('seo', $seo)
                ->with('products', $products)
                ->with('cat', $cat);
        }else{
            return view('site.search')->with('products',$products)->with('title',$title);
        }
	}
}
