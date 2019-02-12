<?php namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Images extends Model {
    protected $table='images';
    protected $fillable  = [
        'id',
        'ima_name',
        'dat_id',
        'new_id',
        'abo_id',
        'type',
        'defaultimage',
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
    public function fetchAll($wArr){
        if(!empty($wArr)){
            $data=DB::table($this->table)->where($wArr)->get();
        }else{
            $data = DB::table($this->table)->get();
        }
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
