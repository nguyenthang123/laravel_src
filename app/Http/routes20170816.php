<?php
//FRONTEND
$uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$funs=new \Illuminate\Libext\funs();
$ext=$funs->getExt_uri($uri);
$pos=strrpos($ext,'?gclid');
if($pos>0){
    $ext=substr($ext,0,$pos);
}
$pos=strrpos($ext,'?page');
if($pos>0){
    $ext=substr($ext,0,$pos);
}
$pos=strrpos($ext,'?');
if($pos>0){
    $ext=substr($ext,0,$pos);
}
use Illuminate\Support\Facades\DB;
if(empty($_SESSION['visit'])){
    $cate=DB::table('categories')->get();
    $ArrCate=array();
    foreach($cate as $val){
        array_push($ArrCate,$val['cat_rewrite']);
    }
    $_SESSION['ArrCate']=$ArrCate;
    $_SESSION['visit']="1";
}
//$funs->pre($_SESSION['ArrCate']);
Route::get('/search/{keyword?}', 'Frontend\NewsController@search');
//AJAX
Route::post('/ajaxs/dangky', 'Frontend\AjaxsController@dangky');
Route::any('/ajaxs/binhluan', 'Frontend\AjaxsController@binhluan');
//CHUYEN DE
Route::get('/cd/{rewrite}','Frontend\ChuyendeController@index');
Route::get('/lo-trinh-den-phong-kham','Frontend\ChuyendeController@quytrinhkham');
//DANHMUC
Route::any('/khoa-phong','Frontend\NewsController@Khoaphong');
Route::any('/dieu-tri-thanh-cong','Frontend\NewsController@dieutrithanhcong');
Route::any('/dieu-tri-thanh-cong/{rewrite?}','Frontend\NewsController@dieutrithanhconglist');
if($ext=="admin"){
    $funs->redirect(domain.'/admin/admin/login');
    exit;
}
if($ext=="delcache"){
    Route::any('/delcache', 'Frontend\HomeController@delcache');
}
Route::any('/{rewrite}/{rewrite2}','Frontend\NewsController@showlist');
if(in_array($ext,$_SESSION['ArrCate'])){
    Route::any('/{rewrite}', 'Frontend\NewsController@index');
}else{
    Route::any('/{rewrite}', 'Frontend\NewsController@detail');
}
Route::get('/', 'Frontend\HomeController@index');
Route::post('/', 'Frontend\HomeController@index');
//=========ADMIN=============
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function() {
    Route::pattern('id', '[0-9]+');
    //ADMIN
    Route::get('/admin/index', 'AdminController@index');
    Route::any('/admin/login', 'AdminController@login');
    Route::any('/admin/edit/{id?}', 'AdminController@edit');
    Route::any('/admin/update/{id?}', 'AdminController@update');
    Route::get('/admin/add', 'AdminController@getadd');
    Route::post('/admin/add', 'AdminController@postadd');
    Route::any('/admin/del/{id?}', 'AdminController@del');
    Route::any('/admin/logout', 'AdminController@logout');
    //BANNERS
    Route::any('/banners/index', 'BannersController@index');
    Route::any('/banners/edit/{id?}', 'BannersController@edit');
    Route::any('/banners/update/{id?}', 'BannersController@update');
    Route::get('/banners/add', 'BannersController@getadd');
    Route::post('/banners/add', 'BannersController@postadd');
    Route::any('/banners/del/{id?}', 'BannersController@del');
    //CATEGORIES
    Route::any('/categories/index', 'CategoriesController@index');
    Route::any('/categories/edit/{id?}', 'CategoriesController@edit');
    Route::any('/categories/update/{id?}', 'CategoriesController@update');
    Route::get('/categories/add', 'CategoriesController@getadd');
    Route::post('/categories/add', 'CategoriesController@postadd');
    Route::any('/categories/del/{id?}', 'CategoriesController@del');
    Route::any('/categories/capnhatanh/{rewrite?}', 'CategoriesController@capnhatanh');
    //CONFIGS
    Route::any('/configs/index', 'ConfigsController@index');
    Route::any('/configs/del/{id?}', 'ConfigsController@del');
    Route::any('/configs/add', 'ConfigsController@add');
    Route::post('/configs/add', 'ConfigsController@postadd');
    Route::any('/configs/update', 'ConfigsController@update');
    //NEWS
    Route::any('/news/index/{cate?}', 'NewsController@index');
    Route::any('/news/add/{rewrite?}', 'NewsController@add');
    Route::post('/news/add/{rewrite?}', 'NewsController@postadd');
    Route::any('/news/edit/{id?}', 'NewsController@edit');
    Route::any('/news/update/{id?}', 'NewsController@update');
    Route::any('/news/del/{id?}', 'NewsController@del');
    Route::any('/news/search/{keyword?}', 'NewsController@search');
    Route::any('/news/dieutrithanhcong', 'NewsController@dieutrithanhcong');
    //ABOUT
    Route::any('/about/index', 'AboutController@index');
    Route::any('/about/add', 'AboutController@add');
    Route::post('/about/add', 'AboutController@postadd');
    Route::any('/about/edit/{id?}', 'AboutController@edit');
    Route::any('/about/update/{id?}', 'AboutController@update');
    Route::any('/about/del/{id?}', 'AboutController@del');
    //AJAXS
    Route::get('/ajaxs/addoption_viewimg/{table?}', 'AjaxsController@addoption_viewimg');
    Route::post('/ajaxs/addoption_addimg/{table?}', 'AjaxsController@addoption_addimg');
    Route::get('/ajaxs/delimg/{table?}', 'AjaxsController@delimg');
    Route::get('/ajaxs/editoption_viewimg/{table?}', 'AjaxsController@editoption_viewimg');
    Route::post('/ajaxs/editoption_addimg/{table?}', 'AjaxsController@editoption_addimg');
    //Bình luận
    Route::any('/binhluan/index', 'BinhluanController@index');
    Route::any('/binhluan/add', 'BinhluanController@add');
    Route::post('/binhluan/add', 'BinhluanController@postadd');
    Route::any('/binhluan/edit/{id?}', 'BinhluanController@edit');
    Route::any('/binhluan/update/{id?}', 'BinhluanController@update');
    Route::any('/binhluan/del/{id?}', 'BinhluanController@del');
    //DANG KY
    Route::any('/dangky/index', 'DangkyController@index');
    Route::any('/dangky/add', 'DangkyController@add');
    Route::post('/dangky/add', 'DangkyController@postadd');
    Route::any('/dangky/edit/{id?}', 'DangkyController@edit');
    Route::any('/dangky/update/{id?}', 'DangkyController@update');
    Route::any('/dangky/del/{id?}', 'DangkyController@del');
});
//lay danh muc
function get_cat(){
    $Warr=array('cat_parent'=>'0','cat_status'=>1);
    $cate=DB::table('categories')->where($Warr)->get();
    //get categories level 2
    foreach($cate as $key=>$val){
        $Warr=array('cat_parent'=>$val['id'],'cat_status'=>1);
        $cate[$key]['lv2']=DB::table('categories')->where($Warr)->get();
        if(!empty($cate[$key]['lv2'])){
            foreach($cate[$key]['lv2'] as $key2=>$val2){
                $Warr=array('cat_parent'=>$val2['id'],'cat_status'=>1);
                $cate[$key]['lv2'][$key2]['lv3']=DB::table('categories')->where($Warr)->get();
            }
        }
    }
    return $cate;
}