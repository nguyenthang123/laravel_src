<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Session;
use Validator;
use DB;
class CatController extends Controller {

	public function index( Request $request)
	{
		$session_value='0';
		$cats1 = App\Cat::all();
		$cats = App\Cat::paginate(5);
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		//var_dump($cat_parents);

		if (Session::has('admin'))
		{
			$session_value = Session::get('admin');
		}
	//	echo $admin =App\Cat::find(6)->admin->name;
		//echo var_dump($cat);
	//	exit();
		return view('admin.cat.index')->with('cats',$cats)->with('cats1',$cats1)->with('session_value',$session_value)->with('cat_parents',$cat_parents);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cats=App\Cat::all();
		//echo var_dump($admins);
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();

		return view('admin.cat.create')->with('cats',$cats)->with('cat_parents',$cat_parents);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Request $request)
	{
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',

        ]);
        if ($validator->fails()) {
            return redirect('admin/cat')
                        ->withErrors($validator)
                        ->withInput();
        }
		$cat = new App\Cat;
		$cat->name = $request->input('name');
		//$cat->cat_alias = $request->input('cat_alias');
		$cat->cat_alias=strtolower(convert_vi_to_en($request->input('name')));
		$cat->parent_id =$request->input('parent_id');
		$cat->status_cat=1;
		$cat->admin_id=$_SESSION['admin_id'];
		$cat->save(); 
		return redirect('admin/cat');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cat = App\Cat::find($id);
		$cats = App\Cat::all();

		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();

		return view('admin/cat/edit')->with('cat',$cat)->with('id',$id)->with('cats',$cats)->with('cat_parents',$cat_parents);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$cat = App\Cat::find($id);
		$cat->name = $request->input('name');
		$cat->cat_alias = $request->input('cat_alias');
		$cat->parent_id =$request->input('parent_id');
	////	echo var_dump($cat->status);
	//	exit();


		$cat->update();
		return redirect('admin/cat');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cat = App\Cat::find($id);
		$cat->delete();
		return redirect('admin/cat');
	}
	public function s_search(Request $request) {
		$s_search = $request->input('s_search');
		$products=DB::table('cat')->where('name', 'LIKE', "%$s_search%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}
	//	exit($s_search);
		return redirect()->action('Admin\CatController@get_s_search', $s_search);
		

	}
	public function get_s_search($s_search) {
	
		$session_value='0';
		//$cats1 = App\Cat::all();
		$cats1=DB::table('cat')->where('name', 'LIKE', "%$s_search%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
	//	var_dump(count($cats1));
	//	exit();
		$cats = App\Cat::paginate(5);
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		//var_dump($cat_parents);

		if (Session::has('admin'))
		{
			$session_value = Session::get('admin');
		}
	//	echo $admin =App\Cat::find(6)->admin->name;
		//echo var_dump($cat);
	//	exit();
		return view('admin.cat.index')->with('cats',$cats)->with('cats1',$cats1)->with('session_value',$session_value)->with('cat_parents',$cat_parents)->with('s_search',$s_search);	
	}
	public function get_all_va_bannhap($all_va_bannhap)
	{
		$session_value='0';
		$cats1 = App\Cat::all();
		//echo $all_va_bannhap;
	
		//$cats = App\Cat::paginate(5);
		if($all_va_bannhap==1) {

			$cats=DB::table('cat')->orderBy('id', 'DESC')->paginate(count_phan_trang);
		}elseif ($all_va_bannhap==-1) {
			
			$cats=DB::table('cat')->where('status_cat', '=',0)->orderBy('id', 'DESC')->paginate(count_phan_trang);
			$delete_new=1;
		}
		
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		

		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}	
	//	echo $admin =App\Cat::find(6)->admin->name;
		//echo var_dump($cat);
	//	exit();
		return view('admin.cat.index')->with('cats',$cats)->with('cats1',$cats1)->with('session_value',$session_value)->with('cat_parents',$cat_parents);		
	}
	public function xu_ly_form_cat(Request $request){
	$publish_unpublish=$request->input('publish_unpublish');

		$array_menusitem=$request->input('checkbox');

	//	var_dump($array_menusitem);
		//exit();
		
		if($request->input('submit_1')=='Áp dụng') {
			if($publish_unpublish=='hoat_dong') {

					if(count($array_menusitem) >0) {
						foreach($array_menusitem as $menusitem ){
							
							$menusitem = App\Cat::find($menusitem);
							$menusitem->status_cat = 1;
							$menusitem->save(); 
						}
					}else {
						$error="Không có sản phẩm nào dc chọn";
					}
			}else if($publish_unpublish=='ban_nhap') {
					if(count($array_menusitem) >0) {
						foreach($array_menusitem as $menusitem ){

							$menusitem = App\Cat::find($menusitem);
							$menusitem->status_cat = 0;
							$menusitem->save(); 
						}
					}else {
						$error="Không có sản phẩm nào dc chọn";
					}
			}else if($publish_unpublish=='xoa_vinh_vien') {

					if(count($array_menusitem) >0) {
						foreach($array_menusitem as $menusitem ){

							$menusitem = App\Cat::find($menusitem);
							$menusitem->delete();
						}
					}				
			}
		}
		return redirect()->back();
		
	}
}
