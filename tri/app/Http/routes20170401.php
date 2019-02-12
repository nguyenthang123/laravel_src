<?php
use Illuminate\Pagination\Paginator;
//include('../../configuration.php');
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
use Illuminate\Support\Facades\Mail;
Route::get('thay-doi-title', 'Admin\ProductController@thay_doi_title');
Route::get('/', 'Site\SanphamController@index');
Route::post('/', 'Site\SanphamController@index');
Route::get('admin/login', function () {
    return view('admin.login');
});
Route::get('dang-ky', 'Admin\DangkyController@index');
Route::post('dang-ky', 'Admin\DangkyController@dang_ky');
Route::get('dang-ky-in-ra', 'Admin\DangkyController@index_1');

Route::post('admin/login', 'Admin\AdminController@login');
Route::get('admin/logout', 'Admin\AdminController@logout');
/*AJAX*/
Route::post('/ajaxs/dangky', 'Site\AjaxsController@dangky');
/*Route::get('them-vao-bang', function () {
    Schema::table('product', function ($table) {
        //	$table->integer('status_cat')->after('parent_id');
        //	$table->dropColumn('tu-khoa');
        //$table->string('menus_item_url')->after('menus_alias');
        //$table->integer('cat_id_show')->after('menus_id');
        //	$table->longText('the_tu_khoa')->after('content');
        //	$table->integer('ban_chay')->after('view');
        //$table->longText('ma_san_pham')->after('price');
        //$table->integer('cat_id_2')->after('cat_id_1');
        /*
        $table->longText('name');
        $table->longText('cat_new_alias');
        $table->integer('admin_id');
        $table->integer('parent_id');
        $table->longText('content');

        $table->longText('the_tu_khoa');
        $table->longText('the_gioi_thieu');
        $table->integer('status_product');
        $table->integer('view');
        $table->timestamps();
    //});
});*/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    //	echo Session::get('admin');
    //	exit();
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('dangky/index', 'Admin\DangkyController@index');
    #Route::resource('dangky/del/{id}', 'Admin\DangkyController@Del');

    Route::get('menus/link', 'Admin\MenusController@link');
    Route::resource('admin', 'Admin\AdminController');
    Route::resource('cat', 'Admin\CatController');
    Route::resource('product', 'Admin\ProductController');
    Route::resource('menus', 'Admin\MenusController');
    Route::resource('menusitem', 'Admin\MenusitemController');

    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/create', 'Admin\NewsController@create');
    Route::post('news/create', 'Admin\NewsController@store');
    Route::get('news/{id}/edit', 'Admin\NewsController@edit');
    Route::post('news/{id}/edit', 'Admin\NewsController@update');

    Route::get('news/search/{s_search?}', 'Admin\NewsController@get_s_search');
    Route::post('news/search/{s_search?}', 'Admin\NewsController@s_search');
    Route::get('news/all-va-ban-nhap/{all_va_bannhap?}', 'Admin\NewsController@get_all_va_bannhap');
    Route::post('news/loc-san-pham', 'Admin\NewsController@xu_ly');
    Route::get('news/loc-san-pham/{tac_gia}/{cat_id?}', 'Admin\NewsController@loc_san_pham');

    Route::get('cat-new/', 'Admin\CatnewsController@index');
    Route::get('cat-new/create', 'Admin\CatnewsController@create');
    Route::post('cat-new/create', 'Admin\CatnewsController@store');
    Route::get('cat-new/{id}/edit', 'Admin\CatnewsController@edit');
    Route::post('cat-new/{id}/edit', 'Admin\CatnewsController@update');

    Route::get('product/loc-san-pham/{tac_gia}/{cat_id?}', 'Admin\ProductController@loc_san_pham');
    Route::post('product/loc-san-pham', 'Admin\ProductController@delete_s_code');
    Route::any('/product/sua/{id?}/{date?}', 'Admin\ProductController@sua');
    //Route::resource('media', 'Admin\MediaController');
    Route::post('cat/search/{search?}', 'Admin\CatController@s_search');
    Route::get('cat/search/{search?}', 'Admin\CatController@get_s_search');
    Route::get('cat/all-va-ban-nhap/{all_va_bannhap?}', 'Admin\CatController@get_all_va_bannhap');
    Route::post('/cat/chinh-sua', 'Admin\CatController@xu_ly_form_cat');
    Route::get('upload', function () {
        return view('upload');
    });
    Route::post('upload', 'Admin\AdminController@upload');
    Route::post('upload-edit/{id?}', 'Admin\ProductController@upload_edit');
    Route::post('media/delete_image/{all_file_1?}', 'Admin\MediaController@delete_image');
    Route::get('media/{name?}/{name1?}/{name2?}', 'Admin\MediaController@get_view_folder');
    Route::post('media/{name?}/{name1?}/{name2?}', 'Admin\MediaController@view_folder');
    Route::post('/menusitem/chinh-sua', 'Admin\MenusitemController@xu_ly_form_menusitem');
    Route::get('product/search/{s_search?}', 'Admin\ProductController@get_s_search');
    Route::post('product/search/{s_search?}', 'Admin\ProductController@s_search');
    Route::get('product/all-va-ban-nhap/{all_va_bannhap?}', 'Admin\ProductController@get_all_va_bannhap');
    Route::post('xoa-session-images/{name?}', 'Admin\AdminController@xoa_session_images');
    Route::post('xoa-session-edit-images/{id?}/{name?}', 'Admin\ProductController@xoa_session_edit_images');
    Route::post('them-anh-dai-dien/{id?}', 'Admin\ProductController@them_anh_dai_dien');
    Route::post('xoa-anh-dai-dien/{id?}/{number?}', 'Admin\ProductController@xoa_anh_dai_dien');
    Route::post('them-anh-dai-dien-create', 'Admin\ProductController@them_anh_dai_dien_create');
    Route::post('xoa-anh-dai-dien-create/{id?}', 'Admin\ProductController@xoa_anh_dai_dien_create');
    Route::get('edit-footer', 'Admin\AdminController@getfileindexfooter');
    Route::post('edit-footer', 'Admin\AdminController@edit_file_index_footer');
    Route::get('edit-lien-he', 'Admin\AdminController@getfileindexlienhe');
    Route::post('edit-lien-he', 'Admin\AdminController@edit_file_index_lienhe');
});
Route::get('themvao', 'Admin\ProductController@themvao');
Route::get('san-pham/tim-kiem/{search_site?}', 'Site\SanphamController@get_search_site');
Route::post('san-pham/tim-kiem/{search_site?}', 'Site\SanphamController@search_site');
Route::get('san-pham-phuong-trang', function () {
    //$cat=0;
    $title = "Sản phẩm vật tư Phương Trang";
    $cat_parent_breadcrumb = 0;
    $products = DB::table('product')->orderBy('id', 'DESC')->where('status_product', '=', '1')->paginate(so_san_pham_hien_thi_index_cat);
    return view('site.all-product')->with('products', $products)->with('cat_parent_breadcrumb', $cat_parent_breadcrumb)->with('title', $title);
});
Route::get('gioi-thieu-phong-kham', function () {
    $ky_thuats = DB::table('product')->where('cat_id', '=', 39)->where('status_product', '=', '1')->orderBy('id', 'DESC')->get();
    $seo=seo();
    if(deviceType =='tablet' || deviceType =='phone'){
        $san_pham_lien_quan=array();
        $product = DB::table('product')->where('id', '=', 1207)->where('status_product', '=', '1')->first();
        return view('mobile.detail')
            ->with('seo', $seo)
            ->with('product', $product)
            ->with('san_pham_lien_quan', $san_pham_lien_quan);
    }else{
        return view('site.gioi-thieu.index')->with('ky_thuats', $ky_thuats);
    }
});
Route::get('dich-vu-dac-biet', function () {
    $ky_thuats = DB::table('product')->where('cat_id', '=', 39)->where('status_product', '=', '1')->orderBy('id', 'DESC')->get();
    $ky_thuats='';
        return view('site.dieu-tri.chamsocdacbiet')->with('ky_thuats', $ky_thuats);
});
Route::get('thiet-bi-phong-kham', function () {
    if(deviceType =='tablet' || deviceType =='phone'){
        return redirect('thiet-bi');
    }else{
        return view('site.thiet-bi.index');
    }
});
Route::get('dieu-tri-benh-tri', function () {
    return view('site.dieu-tri.index');
});
Route::get('hoat-dong-cong-ich', function () {
    return view('site.dieu-tri.hoatdongcongich');
});
Route::get('{cat_alias?}', function ($cat_alias = null) { 
    $cat = DB::table('cat')->where('cat_alias', '=', $cat_alias)->first();
    if (count($cat)) {
        $cat = App\Cat::find($cat->id);
        $seo=seo($cat->name,$cat->name,$cat->name);
        if(deviceType =='tablet' || deviceType =='phone'){
            $Arr=array('cat_alias'=>$cat_alias);
            $cate = DB::table('cat')->where($Arr)->first();
            $cate=(array)$cate;
            if($cate['parent_id']==0){
                $Arr=array('parent_id'=>$cate['id'],'status_cat'=>'1');
            }else{
                $Arr=array('parent_id'=>$cate['parent_id'],'status_cat'=>'1');
            }
            $cate_sub=DB::table('cat')->where($Arr)->get();
            $cate_sub=(array)$cate_sub;
            $cat_ids=array($cate['id']);
            foreach($cate_sub as $val){
                array_push($cat_ids,$val->id);
            }
            $Arr=array('status_product'=>1);
            $products = DB::table('product')->where($Arr)->whereIn('cat_id',$cat_ids)->orderBy('id', 'desc')->paginate(10);
            return view('mobile.showlist')
                ->with('seo', $seo)
                ->with('products', $products)
                ->with('cate_sub', $cate_sub)
                ->with('cate', $cate);
        }else{
            $cats = App\Cat::all();
            $array_list = get_list_cat_chilrent($cats, $cat->id);
            $cat_parent_breadcrumb = DB::table('cat')->where('id', '=', $cat->parent_id)->first();
            $san_pham_lien_quan = DB::table('product')->where('cat_id', '=', 1)->where('status_product', '=', '1')->orderBy('id', 'DESC')->take(10)->get();
            $products = DB::table('product')->whereIn('cat_id', $array_list)
                ->orWhere(function ($query) use ($array_list) {
                    $query->whereIn('cat_id_1', $array_list);
                })
                ->orWhere(function ($query) use ($array_list) {
                    $query->whereIn('cat_id_2', $array_list);
                })
                ->orderBy('id', 'DESC')->where('status_product', '=', '1')
                ->paginate(so_san_pham_hien_thi_index_cat);
            $tin_nong_cat = DB::table('product')->where('status_product', '=', '1')->orderBy('id', 'DESC')->take(10)->get();
            $ky_thuats = DB::table('product')->where('cat_id', '=', 39)->where('status_product', '=', '1')->orderBy('id', 'DESC')->get();
            return view('site.cat')
                ->with('cat', $cat)
                ->with('products', $products)
                ->with('cat_parent_breadcrumb', $cat_parent_breadcrumb)
                ->with('title', $cat->name)
                ->with('san_pham_lien_quan', $san_pham_lien_quan)
                ->with('ky_thuats', $ky_thuats)
                ->with('tin_nong_cat', $tin_nong_cat);
        }
    } else {
        $product = DB::table('product')->where('product_alias', '=', $cat_alias)->first();
        if ($product) {
            $product = App\Product::find($product->id);
            //echo $product->id;
            $title = $product->name;
            $cat = App\Cat::find($product->cat_id);
            $cat_parent_breadcrumb = DB::table('cat')->where('id', '=', $cat->parent_id)->first();
            //	echo count($cat_parent_breadcrumb);
            //	var_dump($cat_parent_breadcrumb->name);
            //	exit();
            $san_pham_ban_chay = DB::table('product')->where('ban_chay', '=', "1")->where('status_product', '=', '1')->take(5)->orderBy('id', 'DESC')->get();
            $san_pham_ban_chay_1 = DB::table('product')->where('ban_chay', '=', "1")->where('status_product', '=', '1')->skip(5)->orderBy('id', 'DESC')->take(5)->get();
            $san_pham_lien_quan = DB::table('product')->where('cat_id', '=', $product->cat_id)->where('id', '!=', $product->id)->where('status_product', '=', '1')->orderBy('id', 'DESC')->take(10)->get();
            $ky_thuats = DB::table('product')->where('cat_id', '=', 39)->orderBy('id', 'DESC')->take(10)->get();
            $seo = seo($product->name, $product->name, $product->name);
            if (deviceType =='tablet' || deviceType =='phone') {
                $Arr=array('id'=>$product->cat_id);
                $cate = DB::table('cat')->where($Arr)->first();
                return view('mobile.detail')
                    ->with('seo', $seo)
                    ->with('cate', $cate)
                    ->with('san_pham_lien_quan', $san_pham_lien_quan)
                    ->with('product', $product);
            } else {
                return view('site.single')
                    ->with('product', $product)
                    ->with('title', $title)
                    ->with('san_pham_ban_chay', $san_pham_ban_chay)
                    ->with('san_pham_ban_chay_1', $san_pham_ban_chay_1)
                    ->with('san_pham_lien_quan', $san_pham_lien_quan)
                    ->with('cat', $cat)->with('cat_parent_breadcrumb', $cat_parent_breadcrumb)
                    ->with('ky_thuats', $ky_thuats);
            }
        } else {
            $active = 1;
            $new = DB::table('news')->where('new_alias', '=', $cat_alias)->first();
            if ($new) {
                if(deviceType =='tablet' || deviceType =='phone'){
                    $seo=seo();
                    return view('mobile.detail_new')
                        ->with('new', $new)
                        ->with('seo', $seo)
                        ->with('active', $active);
                }else{
                    return view('site.new')->with('new', $new)->with('active', $active);
                }
            } else {
                //return view('site.404');
                return redirect(domain);
            }
        }
    }
});


