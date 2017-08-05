<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;
use App\Imagen;


class StorageController extends Controller
{
    public function index()
   {
      return view ('new'); 
   }


  public function save(Request $request)
        {

Imagen::create(array(
    'name' => $request->get('name'),
    'detalle' => $request->get('detalle'),
    'size'=> $request->get('size')


    ));

 
       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));


             $imagenes = Imagen::all();
        return view ('home', compact('imagenes'));

      }
}


      