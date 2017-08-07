<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;
use App\Imagen;
use App\User;
use App\Auth;



class StorageController extends Controller
{
    public function index()
   {
      return view ('new'); 
   }


  public function save(Request $request)
        {

 
 //Manejo de Archivos
  if($request->file('file'))
    {

      $file = $request->file('file');   //obtenemos el campo file definido en el formulario 
       $nombre = $file->getClientOriginalName(); //obtenemos el nombre del archivo
        \Storage::disk('local')->put($nombre,  \File::get($file));  //indicamos que queremos guardar un nuevo archivo en el disco local

        } 

      $imagen = new Imagen($request->all());
      $imagen->user_id = \Auth::user()->id; //usuario autenticado
      $imagen->name = $nombre ;
      $imagen->save();

     //if(Auth::user()->name)
    //nombre unico
    //$nombre= 'memegallery' . time() . '.' . $file->getClientOriginalExtension(); 

           $imagenes = Imagen::all();
     return view ('home', compact('imagenes'));

      }
}


      