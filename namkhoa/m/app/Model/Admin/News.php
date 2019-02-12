<?php namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class News extends Model {
    protected $table='news';
    protected $fillable  = [
        'id',
        'cat_id',
        'new_name',
        'new_rewrite',
        'new_seotitle',
        'new_seokeywords',
        'new_seodescription',
        'new_description',
        'new_content',
        'new_img',
        'new_hot',
        'new_trieuchung',
        'new_nguyennhan',
        'new_nguyhai',
        'new_kiemtra',
        'new_dieutri',
        'new_chiphi',
        'new_xetnghiem',
        'new_thoigian',
        'new_thuthuat',
        'new_seemore',
        'new_dieutrithanhcong',
        'new_view',
        'new_timeshow',
        'adm_created',
        'adm_updated',
        'created_at',
        'updated_at',
        'new_type',
        'new_status',
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
        $data = DB::table($this->table)
            ->where($Arr)
            ->first();
        return $data;
    }
    public function fetchAllOption($arr){
        $data=DB::table($this->table)->where($arr)->get();
        return $data;
    }
    public function fetchAll(){
        $arr=array('new_type'=>'1');
        $data = DB::table($this->table)->where($arr)->get();
        return $data;
    }
    public function del($Arr){
        $rs=DB::table($this->table)->where($Arr)->delete();
        return $rs;
    }
    public function fetchIdMax(){
        $rs= DB::table($this->table)->max('id');
        return $rs;
    }
}
