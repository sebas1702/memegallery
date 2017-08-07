<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Imagen extends Model
{

	protected $table = 'imagenes';

    protected $fillable = [
        'name', 'detalle','user_id','category_id'
    ];


  //public function setNameAttribute ($name){
  
	//$this->attributes['name'] = Carbon::now()->second.$name->getClientOriginalName();

  	//$name = Carbon::now()->second.$name->getClientOriginalName();
  	//Storage::disk('local')->put($name, \File::get($name));
  	
  	//}
  
   public function  category()
   {
   	return $this->belongsTo('App\Category'); //nombre de la clase 
   }

 public function  user()
   {
    return $this->belongsTo('App\User'); //nombre de la clase 
   }


public function  tags()
   {
    return $this->belongsToMany('App\Tag'); //nombre de la clase 
   }

 public function scopeSearch($query , $name)
    {

        return $query->where('name' , 'LIKE' , "%$name%");
    }


}
