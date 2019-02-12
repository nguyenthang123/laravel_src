<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'product';
	protected $fillable = ['id','cat_id','admin_id', 'name', 'price','content','discount','image_link','image_list','view'];

	public $timestamps = true;
	public function admin(){

		return $this->belongsTo('App\Admin');

	}
	public function cat()
    {
        //return $this->belongsToMany('App\Cat','cat_id');
         return $this->belongsTo('App\Cat');
    }

}
