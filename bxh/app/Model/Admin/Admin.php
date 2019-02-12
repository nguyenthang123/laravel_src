<?php namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Admin extends Model {
    protected $table='admin';
    protected $fillable  = [
        'id',
        'adm_name',
        'adm_account',
        'adm_rewrite',
        'adm_password',
        'adm_email',
        'adm_mobile',
        'adm_level',
        'created_at',
        'updated_at',
        'adm_status',
    ];
    public function setCreatedAtAttribute($date){
        //format lại $date được gửi vào từ form
        //set +  field trong database + Attribute
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function setUpdatedAtAttribute($date){
        //format lại $date được gửi vào từ form
        //set +  field trong database + Attribute
        $this->attributes['updated_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function fetchOne($Arr){
        $data = DB::table($this->table)
            ->where($Arr)
            ->first();
        return $data;
    }
    public function fetchAll($Arr=null){
        $data = DB::table($this->table)->get();
        return $data;
    }
    public function del($Arr){
        $rs=DB::table($this->table)->where($Arr)->delete();
        return $rs;
    }
}
