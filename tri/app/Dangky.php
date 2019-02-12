<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Dangky extends Model {
    protected $table='tbldangky';
    protected $fillable  = [
        'id',
        'hoten',
        'dienthoai',
        'khoakham',
        'mota',
        'thoigian',
        'channel',
        'created_at',
        'updated_at',
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
    public function fetchAll($Arr=null){
        if(!empty($Arr)){
            $data=DB::table($this->table)->where($Arr)->orderBy('id', 'desc')->get();
        }else{
            $data = DB::table($this->table)->orderBy('id', 'desc')->get();
        }
        return $data;
    }
    public function del($Arr){
        $rs=DB::table($this->table)->where($Arr)->delete();
        return $rs;
    }
}
