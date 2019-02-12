<?php namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Categories extends Model {
    protected $table='categories';
    protected $fillable  = [
        'id',
        'cat_name',
        'cat_rewrite',
        'cat_seotitle',
        'cat_seokeywords',
        'cat_seodescription',
        'cat_parent',
        'cat_type',
        'rewrite_parent',
        'cat_img',
        'cat_img_style',
        'cat_sort',
        'created_at',
        'updated_at',
        'cat_status',
    ];
    public function setCreatedAtAttribute($date){
        //format lại $date được gửi vào từ form
        //set +  field trong database + Attribute
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function setUpdatedAtAttribute($date){
        $this->attributes['updated_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function fetchOne($Arr){
        $data = DB::table('categories')
            ->where($Arr)
            ->first();
        return $data;
    }
    public function fetchAllOption($arr){
        $data=DB::table('categories')->where($arr)->get();
        return $data;
    }
    public function fetchAll($Arr=null){
        if(!empty($Arr)){
            $data=DB::table('categories')->where($Arr)->get();
        }else{
            $data = DB::table('categories')->get();
        }
        return $data;
    }
    public function del($Arr){
        $rs=DB::table('categories')->where($Arr)->delete();
        return $rs;
    }
}
