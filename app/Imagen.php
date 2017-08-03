<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

	protected $table = 'imagenes';
    protected $fillable = [
        'name', 'detalle', 'size',
    ];

   public function  user()
   {
   	return $this->belongsTo(User::class);
   }
}
