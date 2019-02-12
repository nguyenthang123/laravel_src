<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use File;
use Illuminate\Http\Request;
use Session;
use Validator;
use DB;
use Input;
use Carbon\Carbon;
class ProductController extends Controller {
		
	public function index()
	{
		$session_value='0';
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '>',0)->get());
		$all_products_0=$all_products - $all_products_1;
		$products=DB::table('product')->where('status_product', '>',0)->orderBy('id', 'DESC')->paginate(count_phan_trang);

		$cats = App\Cat::all();
		$admin_changes = App\Admin::all();

		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}	
    //    $product = DB::table('product')->select('id')->where('id', '>', 3)->get();
	//	echo var_dump($product);
	//	exit();		
		return view('admin.product.index')
            ->with('products',$products)
            ->with('session_value',$session_value)
            ->with('all_products',$all_products)
            ->with('all_products_0',$all_products_0)
            ->with('all_products_1',$all_products_1)
            ->with('cats',$cats)
            ->with('cat_parents',$cat_parents)
            ->with('admin_changes',$admin_changes);
	}

	public function create()
	{
		$cats = App\Cat::all();
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '>',0)->get());
		$all_products_0=$all_products - $all_products_1;
		$admin_changes = App\Admin::all();
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		return view('admin.product.create')
            ->with('all_products',$all_products)
            ->with('all_products_0',$all_products_0)
            ->with('all_products_1',$all_products_1)
            ->with('cats',$cats)
            ->with('cat_parents',$cat_parents)
            ->with('admin_changes',$admin_changes);
	}
	public function store( Request $request)
	{
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            return redirect('admin/product')
                        ->withErrors($validator)
                        ->withInput();
        }
		$product = new App\Product;
		$product->name = $request->input('name');
		$product->price = 1;
		$product->ma_san_pham =' ';
		$product->product_alias=strtolower(convert_vi_to_en($request->input('name')));//chữ hoa thành thường và bỏ dấu

		//$product->product_alias =$request->input('product_alias');
		$json_img_2=null;
			for($i=0;$i<10;$i++){
				$k='image_create_'.$i;
				if(isset($_SESSION[$k])==true) {
					$json_img_1='{
						"url"  : "'.$_SESSION[$k].'",
						"is_avatar" : "1"
					}';
					if($i==0) {
						$json_img_2=$json_img_2.$json_img_1;
					}else if($i>0) {
						$json_img_2=$json_img_2.','.$json_img_1;
					}
				}
			}
			if(isset($json_img_2)==true) {
				$json_img_ok='['.$json_img_2.']';
				$product->image_list=$json_img_ok;
			}
			if($json_img_2==null) {
				$product->image_list='';
			}

//var_dump($product->image_list);
						
				
		$product->cat_id=$request->input('cat_id');
		
		$product->cat_id_1=$request->input('cat_id_1');
		$product->cat_id_2=$request->input('cat_id_2');
		$product->content=$request->input('content');
		$product->admin_id=$_SESSION['admin_id'];

		$product->the_tu_khoa=$request->input('the_tu_khoa');
		$product->the_gioi_thieu=$request->input('the_gioi_thieu');
		
		$product->status_product =$request->input('hoat_dong');
		if($request->input('hoat_dong')) {
			$product->status_product =$request->input('hoat_dong');
		}else {
			$product->status_product =0;
		}

if($request->input('ban_chay')) {
	$product->ban_chay =$request->input('ban_chay');
}else {
	$product->ban_chay=0;
}
		if($product->save()) {
			
			for($i=0;$i<10;$i++){
				$k='image_create_'.$i;
				unset($_SESSION[$k]);
			}
		}
		return redirect('admin/product');
		//return redirect()->back();
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		$product = App\Product::find($id);
		$cats = App\Cat::all();
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '>',0)->get());
		$all_products_0=$all_products - $all_products_1;
		$admin_changes = App\Admin::all();
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		//return view('admin/product/edit')->with('product',$product)->with('id',$id)->with('cats',$cats);
		
		return view('admin/product/edit')
            ->with('product',$product)
            ->with('all_products',$all_products)
            ->with('all_products_0',$all_products_0)
            ->with('all_products_1',$all_products_1)
            ->with('cats',$cats)
            ->with('cat_parents',$cat_parents)
            ->with('admin_changes',$admin_changes)
            ->with('id',$id);
	}

	public function update(Request $request,$id)
	{
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            return redirect('admin/product')
                        ->withErrors($validator)
                        ->withInput();
        }
		$product = App\Product::find($id);
		$product->name = $request->input('name');
		$product->price = $request->input('price');
		$product->product_alias =$request->input('product_alias');
		$product->cat_id=$request->input('cat_id');
		$product->cat_id_1=$request->input('cat_id_1');
		$product->cat_id_2=$request->input('cat_id_2');		
		$product->content=$request->input('content');
        $product->ma_san_pham = $request->input('ma_san_pham');
		$product->the_tu_khoa=$request->input('the_tu_khoa');
		$product->the_gioi_thieu=$request->input('the_gioi_thieu');
		$product->status_product =$request->input('hoat_dong');
		if($request->input('hoat_dong')) {
			$product->status_product =$request->input('hoat_dong');
		}else {
			$product->status_product =0;
		}
		if($request->input('ban_chay')) {
		$product->ban_chay=$request->input('ban_chay');
		}else {
			$product->ban_chay=0;
		}
		/*
		$json_img_2='';
			for($i=0;$i<10;$i++){
				$k='image_edit_'.$i;
				if(isset($_SESSION[$k])==true) {
					$json_img_1='{
						"url"  : "'.$_SESSION[$k].'",
						"is_avatar" : "1"
					}';
					if($i==0) {
						$json_img_2=$json_img_2.$json_img_1;
					}else if($i>0) {
						$json_img_2=$json_img_2.','.$json_img_1;
					}
				}
			}
			if(isset($json_img_2)==true) {
				$json_img_ok='['.$json_img_2.']';
				$product->image_list=$json_img_ok;
			//	echo $json_img_ok;
			//	exit();
			}
			*/
		if($product->save()) {
				for($i=0;$i<10;$i++){
					$k='image_edit_'.$i;
					unset($_SESSION[$k]);
				}
		}
		return redirect('admin/product');
	}
	public function destroy($id)
	{
		$product=App\Product::find($id);
		$product->delete();
		//return redirect('admin/product');
		
		return redirect()->back();
	}
	public function delete_s_code(Request $request) {


	$publish_unpublish=$request->input('publish_unpublish');
	
	$publish_unpublish_1=$request->input('publish_unpublish_1');

	if($publish_unpublish==-1) {

		$publish_unpublish=$publish_unpublish_1;

	}
	$array_product=$request->input('checkbox');
//echo $request->input('submit_1').'----';
	$error=null;
	if($request->input('submit_1')=='Áp dụng') {
		if($publish_unpublish=='hoat_dong') {

				if(count($array_product) >0) {
					foreach($array_product as $product ){
						//echo $product."======";
						$product = App\Product::find($product);
						$product->status_product = 1;
						$product->save(); 
					}
				}else {
					$error="Không có sản phẩm nào dc chọn";
				}
		}else if($publish_unpublish=='ban_nhap') {
				if(count($array_product) >0) {
					foreach($array_product as $product ){
						//echo $product."======";
						$product = App\Product::find($product);
						$product->status_product = 0;
						$product->save(); 
					}
				}else {
					$error="Không có sản phẩm nào dc chọn";
				}
		}else if($publish_unpublish=='xoa_vinh_vien') {
				if(count($array_product) >0) {
					foreach($array_product as $product ){
						
						$kaka = App\Product::find($product);
						
						$kaka->delete(); 
					}
				}else {
					$error="Không có sản phẩm nào dc chọn";
				}
			
		}
	}else if($request->input('submit_1')=='Lọc') {

		$tac_gia=$request->input('tac_gia');
		$cat11=$request->input('cat');
	//	$tac_gia_va_cat[0]=$tac_gia;
	//	$tac_gia_va_cat[1]=$cat11;
		//echo $tac_gia_va_cat[1];
	//	var_dump($tac_gia_va_cat);
	//	exit();
		return redirect()->action('Admin\ProductController@loc_san_pham',[$tac_gia,$cat11]);
	}
	if($request->input('submit_2')){

		$tac_gia_1=$request->input('tac_gia1');
		$cat11=$request->input('cat1');
		return redirect()->action('Admin\ProductController@loc_san_pham',[$tac_gia_1,$cat11]);
	}
	return redirect()->back()->withErrors($error);
	}
	public function loc_san_pham($tac_gia,$cat11 ) {
		if($tac_gia==-1 && $cat11==0){
			return redirect('admin/product');
		}
		if($tac_gia>0 && $cat11>0) {
			$products = DB::table('product')->where('cat_id',$cat11)->where('admin_id',$tac_gia)->orderBy('id', 'DESC')->paginate(count_phan_trang);
		}
		elseif($cat11>0) {
					$products = DB::table('product')->where('cat_id',$cat11)->orderBy('id', 'DESC')->paginate(count_phan_trang);

			}elseif ($tac_gia>0) {
					$products = DB::table('product')->where('admin_id',$tac_gia)->orderBy('id', 'DESC')->paginate(count_phan_trang);
			}
/*
				if($tac_gia>0) {
					$products = DB::table('product')->where('admin_id',$tac_gia)->paginate(count_phan_trang);
				}elseif ($cat11>0) {
					$products = DB::table('product')->where('cat_id',$cat11)->paginate(count_phan_trang);
			}

		}
		*/
		$kaka=count($products);

		
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}		
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '>',0)->get());
		$all_products_0=$all_products - $all_products_1;
		$cats = App\Cat::all(); 
		$s_search=null;
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		$admin_changes = App\Admin::all();
		return view('admin.product.index')->with('products',$products)->with('session_value',$session_value)->with('all_products',$all_products)->with('all_products_0',$all_products_0)->with('all_products_1',$all_products_1)->with('s_search',$s_search)->with('cats',$cats)->with('cat_parents',$cat_parents)->with('cat11',$cat11)->with('admin_changes',$admin_changes)->with('tac_gia',$tac_gia);

	}
	public function s_search(Request $request) {
		$s_search = $request->input('s_search');
		$products=DB::table('product')->where('name', 'LIKE', "%$s_search%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}	
		return redirect()->action('Admin\ProductController@get_s_search', $s_search);

	}
	public function get_s_search($s_search) {
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '>',0)->get());
		$all_products_0=$all_products - $all_products_1;
		$cats = App\Cat::all();
$admin_changes = App\Admin::all();
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		$products=DB::table('product')->where('name', 'LIKE', "%$s_search%")->orderBy('id', 'DESC')->paginate(count_phan_trang);
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}	
	//	echo count($products);
//exit($s_search);
		//return view('admin.product.index')->with('products',$products)->with('session_value',$session_value)->with('s_search',$s_search);
		return view('admin.product.index')
            ->with('products',$products)
            ->with('session_value',$session_value)
            ->with('all_products',$all_products)
            ->with('all_products_0',$all_products_0)
            ->with('all_products_1',$all_products_1)
            ->with('s_search',$s_search)
            ->with('cats',$cats)
            ->with('cat_parents',$cat_parents)
            ->with('admin_changes',$admin_changes);
	}
	public function get_all_va_bannhap($all_va_bannhap)
	{
		$session_value='0';
		$all_products = count(App\Product::all());
		$all_products_1=count(DB::table('product')->where('status_product', '=',1)->get());
		$all_products_0=$all_products - $all_products_1;
		$admin_changes = App\Admin::all();
		$delete_new=0;
		if($all_va_bannhap==1) {

			$products=DB::table('product')->orderBy('id', 'DESC')->paginate(count_phan_trang);
		}elseif ($all_va_bannhap==-1) {
			//$products = DB::table('product')->where('status_product', '<',1)->get();
			$products=DB::table('product')->where('status_product', '=',0)->orderBy('id', 'DESC')->paginate(count_phan_trang);
			$delete_new=1;
		}
		$cat_parents = DB::table('cat')->where('parent_id', 0)->get();
		$cats = App\Cat::all();
		if(isset($_SESSION['admin'])==true) {
		$session_value = $_SESSION['admin'];
		}	


    //    $product = DB::table('product')->select('id')->where('id', '>', 3)->get();
	//	echo var_dump($product);
	//	exit();		
		return view('admin.product.index')->with('products',$products)->with('session_value',$session_value)->with('all_products',$all_products)->with('all_products_0',$all_products_0)->with('all_products_1',$all_products_1)->with('admin_changes',$admin_changes)->with('cat_parents',$cat_parents)->with('cats',$cats)->with('delete_new',$delete_new);
	}
	public function xoa_session_edit_images($id,$name){
		
	//exit($_SESSION[$name]);
			unset($_SESSION[$name]);
					$json_img_2='';
					$dem=0;
						for($i=0;$i<10;$i++){
							$k='image_edit_'.$id.$i;
							if(isset($_SESSION[$k])==true) {
							//echo "<img class='img_avatar' src='$_SESSION[$k]'>";
							
								$json_img_1='{
									"url"  : "'.$_SESSION[$k].'",
									"is_avatar" : "1"
								}';
								if($dem==0) {
									$json_img_2=$json_img_2.$json_img_1;
								}else if($dem>0) {
									$json_img_2=$json_img_2.','.$json_img_1;
								}
								$dem++;
								
							}
						}
						if(isset($json_img_2)==true) {
							
						 $json_img_ok='['.$json_img_2.']';
						// exit($json_img_ok);
						 $product = App\Product::find($id);
						
						$product->image_list=$json_img_ok;
					//	 exit($json_img_ok);
						//$kaka=json_decode($json_img_ok,1);
						if($product->save()) {
							
							for($i=0;$i<10;$i++){
								$k='image_edit_'.$id.$i;
								unset($_SESSION[$k]);
							}
						}
						}
			return redirect()->back();
	}	
    public function upload_edit($id,Request $request){
		
		if (Input::file('image')->isValid()) {
			$current = Carbon::now();
			$year = $current->year;
			$month = $current->month;
			$destinationPath = 'uploads'; // upload path
			$url_folder=base_path().'/uploads';
			$url_folder_year=base_path().'/uploads'.'/'.$year;
			$url_folder_month=$url_folder_year.'/'.$month;	

		//	var_dump(File::isDirectory($url_folder));

			$fileName= Input::file('image')->getClientOriginalName();
			$all_files=File::files($url_folder_month);
			foreach($all_files as $all_file){
			//	echo $all_file.'<br>';
				if(File::isFile($url_folder_month.'/'.$fileName)) {

				//	exit('da ton` tai file anh roi');
				}
			}
			if(!File::isDirectory($url_folder_year)) {
				File::makeDirectory($url_folder_year, 0777, true);
				if(!File::isDirectory($url_folder_month)) {
					File::makeDirectory($url_folder_month, 0777, true);
				}
			}
			else {
				
				if(!File::isDirectory($url_folder_month)) {
					File::makeDirectory($url_folder_month, 0777, true);
				}
			}
			if(Input::file('image')->move($url_folder_month, $fileName)){ // uploading file to given path
				for($i=0;$i<10;$i++){
					$s='image_edit_'.$id.'_'.$i;
				//	echo $k.'<br/>';
					if(!isset($_SESSION[$s])) {
						$_SESSION[$s] = $url_image_1='/uploads'.'/'.$year.'/'.$month.'/'.$fileName;		
						break;
					}
				}
			}
					$json_img_2='';
						for($i=0;$i<10;$i++){
							$k='image_edit_'.$id.$i;
							if(isset($_SESSION[$k])==true) {
							//echo "<img class='img_avatar' src='$_SESSION[$k]'>";
							
								$json_img_1='{
									"url"  : "'.$_SESSION[$k].'",
									"is_avatar" : "1"
								}';
								if($i==0) {
									$json_img_2=$json_img_2.$json_img_1;
								}else if($i>0) {
									$json_img_2=$json_img_2.','.$json_img_1;
								}
								
								
							}
						}
						echo $json_img_2;
						if($json_img_2){
							$json_img_2=$json_img_2.','.'{
									"url"  : "'.$_SESSION[$s].'",
									"is_avatar" : "1"
								}';
						}else {
							$json_img_2=$json_img_2.'{
									"url"  : "'.$_SESSION[$s].'",
									"is_avatar" : "1"
								}';
						}
						if(isset($json_img_2)==true) {
							
						 $json_img_ok='['.$json_img_2.']';
						 $product = App\Product::find($id);
						
						$product->image_list=$json_img_ok;
					//	 exit($json_img_ok);
						//$kaka=json_decode($json_img_ok,1);
						if($product->save()) {
							
							for($i=0;$i<10;$i++){
								$k='image_edit_'.$id.$i;
								unset($_SESSION[$k]);
							}
						}
						}

			}
		return redirect()->back();
		}
	public function them_anh_dai_dien($id,Request $request) {
		$img_new=$request->input('Image');
		if($img_new) {
			$product = App\Product::find($id);

		//	exit();
			$json_img_2='';
						if($product->image_list) {
						$img_xs=json_decode($product->image_list,1);
					//	echo count($img_xs);
							if(isset($img_xs) && count($img_xs) > 0) {
						
								$s=0;	
								foreach ($img_xs as $img_x) {
								echo "<img class='img_avatar' src=".$img_x['url'].">";
								$json_img_1='{
									"url"  : "'.$img_x['url'].'",
									"is_avatar" : "1"
								}';
									if($s==0) {
										$json_img_2=$json_img_2.$json_img_1;
									}else if($s>0) {
										$json_img_2=$json_img_2.','.$json_img_1;
									}
	
								$s=$s+1;
								}
								$json_img_new='{"url"  : "'.$img_new.'","is_avatar" : "1"}';
									$json_img_2="[".$json_img_2.','.$json_img_new."]";
							}


								
						}else {
							
						$json_img_new='{"url"  : "'.$img_new.'","is_avatar" : "1"}';	
										
									$json_img_2="[".$json_img_new."]";
								//	exit($json_img_2);
								
						}
						$json_img_2=str_replace(' ','',$json_img_2);
		//	$product->image_list=$json_img_2;
			
		//	exit($product->image_list);

		$product_save = App\Product::find($id);
		$product_save->image_list=$json_img_2;
			if($product_save->save()) {
				return redirect()->back();
			}
		}
		
		
	}
	
	public function xoa_anh_dai_dien($id,$number) {
		//echo $id."---".$number;
		$product = App\Product::find($id);
		$img_xs=json_decode($product->image_list,1);
		unset($img_xs[$number]);
		sort($img_xs);
	//	var_dump($product->image_list);
		
	//	echo "<br/><br/><br/>".json_encode($img_xs);
		
	//	echo "<br/><br/><br/>";
//echo json_encode($img_xs)."</br>";
		
		//echo json_encode($img_xs);
		if(count($img_xs)) {
		$product->image_list=json_encode($img_xs); //array to json
	//	echo $product->image_list;
	//	exit();
		}else $product->image_list='';
			if($product->save()) {
				return redirect()->back();
			}
		
	}
	public function them_anh_dai_dien_create(Request $request){
	//	echo $request->input('Image');
		//exit();
				for($i=0;$i<10;$i++){
					$s='image_create_'.$i;
					if(!isset($_SESSION[$s])) {
						 $_SESSION[$s] = $request->input('Image');
						break;
					}
				}
		return redirect()->back();
		
	}
	public function xoa_anh_dai_dien_create($id,Request $request){
//echo $id;
//exit();
				for($i=0;$i<10;$i++){
					$s='image_create_'.$i;
					if( $i==$id){
						unset($_SESSION[$s]);
						break;
					}

				}
		return redirect()->back();
		
	}
	public function themvao()
	{
		//$k=1;
		$products = App\Product::all();
		//var_dump($products);
		foreach($products as $product) {
			
			//echo $product->id."<br/>";
		//	$themvao = App\Product::find($product->id);
		//	$themvao->image_list='[{"url"  : "/public/uploads/images/product4.jpg","is_avatar" : "1"},{"url": "/public/uploads/images/product2.jpg","is_avatar" : "1"},{"url"  : "/public/uploads/images/product3.jpg","is_avatar" : "1"}]';
		//	$themvao->save(); 
		}
		exit();
		for ($i=1150; $i <1250 ; $i++) {
			$product = new App\Product;
		$product->name ="Sản phẩm cute".$i;
		$product->price =$i;
		$product->product_alias ="alias-san-pham".$i;
		$product->cat_id=7;
		$product->status_product =0;
		$product->content="Sản phẩm cute Sản phẩm cute Sản phẩm cute.".$i;
		$product->admin_id=4;
		//$product->save(); 

		}


		return redirect('admin/product');
	}
    public function sua($id=null,$date=null){
        if(empty($_SESSION['sua'])){
            $_SESSION['sua']=1;
        }
        if($_SESSION['sua']<=6 && 1==2){
            if(!empty($id)){
                if(!empty($date)){
                    DB::update('update product set updated_at = '."'$date'".' where id = ?', [$id]);
                    $_SESSION['sua']=$_SESSION['sua']+1;
                    $Arr=array('id'=>$id);
                    $new =DB::table('product')->where($Arr)->first();
                    echo 'Ngày sửa bài : '.$new->updated_at.'<br>';
                }
            }
        }else{
            echo'Bạn đã sửa quá số lượng bài';
        }
    }
}
