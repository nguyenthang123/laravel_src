<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model {

	protected $table = 'cat';
	protected $fillable = ['id','cat_alias', 'name','admin_id', 'parent_id','sort_order'];
	public $timestamps = true;
	public function admin(){

		return $this->belongsTo('App\Admin');

	}
    public function product()
    {
        //return $this->belongsToMany('App\Product');
         return $this->hasMany('App\Product');
    }
}
