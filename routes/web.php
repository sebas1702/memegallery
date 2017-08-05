<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Login y Register
Auth::routes();



// HomeController
Route::get('/home', 'HomeController@index')->name('home');



// ImagenController
Route::resource ('imagenes','ImagenesController');
Route::get('/listado', 'ImagenesController@listar');
Route::post('/imagenes' , 'ImagenesController@store');


// storageC

Route::get('formulario', 'StorageController@index');
Route::post('storage/create', 'StorageController@save');









//Route::get('storage/{archivo}', function ($archivo) {
  //   $public_path = public_path();

    // $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     //if (Storage::exists($archivo))
     //{
      // return response()->download($url);
     //}
     //si no se encuentra lanzamos un error 404.
     //abort(404);

     //$public_path = public_path();
     //$url = $public_path.'/upload/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     //if (Storage::exists($archivo))
     //{
       //return response()->download($url);
     //}
     //si no se encuentra lanzamos un error 404.
     //abort(404);

//});




 


//Route::get('/addMeme', 'ImageController@add')->name('addMeme');

//Route::get('/', array('as' => 'index','uses' => 'AlbumsController@getList'));
//Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
//Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
//Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
//Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));
//Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
//Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
//Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
//Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));
//Route::get('/list', array('as' => 'list' , 'uses' => 'AlbumsController@getList'));