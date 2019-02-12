<?php namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Rating extends Model {
    protected $table='rating';
    protected $fillable  = [
        'id',
        'new_id',
        'ip',
        'scores',
        'created_at',
        'updated_at'
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
