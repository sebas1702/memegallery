<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Imagen extends Model
{

	protected $table = 'imagenes';
    protected $fillable = [
        'name', 'detalle', 'size','usuario'
    ];


  //public function setNameAttribute ($name){
  
	//$this->attributes['name'] = Carbon::now()->second.$name->getClientOriginalName();

  	//$name = Carbon::now()->second.$name->getClientOriginalName();
  	//Storage::disk('local')->put($name, \File::get($name));
  	
  	//}
  
   public function  user()
   {
   	return $this->belongsTo(User::class);
   }
}
