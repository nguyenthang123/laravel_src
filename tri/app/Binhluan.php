<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Binhluan extends Model {
    protected $table='tblbinhluan';
    protected $fillable  = [
        'id',
        'hoten',
        'dienthoai',
        'thaidophucvu',
        'dadenkham',
        'loaibenh',
        'hieuquadieutri',
        'chiphikham',
        'moitruongphongkham',
        'com_text',
        'created_at',
        'updated_at',
        'com_img',
        'com_status',
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
        $data = DB::table($this->table)->get();
        return $data;
    }
    public function del($Arr){
        $rs=DB::table($this->table)->where($Arr)->delete();
        return $rs;
    }
}
