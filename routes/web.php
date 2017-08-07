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

//Route::get('/', function () {
  //  return view('welcome');
//});


//Login y Register
Auth::routes();

//welcome
Route::get('/', 'ImagenesController@index');

// HomeController
Route::get('/home', 'HomeController@index')->name('home');



// ImagenController
Route::resource ('imagenes','ImagenesController');
Route::get('/listado', 'ImagenesController@listar');
Route::post('/imagenes' , 'ImagenesController@store');


// storageC

Route::get('formulario', 'StorageController@index');
Route::post('storage/create', 'StorageController@save');



//UsersController

   Route::resource('users' ,'UsersController');

   // Ruta para eliminar imagen
   Route::get('imagenes/{id}/destroy' ,[

         'uses' => 'ImagenesController@destroy' ,
         'as' => 'imagenes.destroy'

    ]);

