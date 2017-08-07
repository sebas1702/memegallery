<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

	protected $table = 'tags';
    protected $fillable = ['name'];


 public function  imagenes()
   {
    return $this->belongsToMany('App\Imagen')->withTimeStamps(); //nombre de la clase 
   }
}