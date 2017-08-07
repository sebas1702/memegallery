<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use App\Storage;
use App\Category;
use App\Auth;



class ImagenesController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $imagenes = Imagen::all();
    return view ('welcome', compact('imagenes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    return view ('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
       
     //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       dd(file);
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));

     
       // return view ('home', compact('imagenes'));

           


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
           




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagen::find($id);

        $imagen->delete();

        $imagenes = Imagen::all();
        return view('home' , compact('imagenes'));
    }

    public function  listar(Request $request)
    {
         $imagenes = Imagen::Search($request->name)->orderBy('id','DESC')->paginate(5);

        return view ('listado', compact('imagenes'));

     
    }


    //prueba
    public function view($id)
    {
                
        //Auth::user()->name 
        
       // $imagen = Imagen::find($id);
        //$imagen->category;
        //$imagen->user;

    //dd($imagen);


    } 


}
