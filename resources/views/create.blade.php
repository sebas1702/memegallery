@extends('layouts.app')

@section('content')


<form role="form" method="post" action="{{ action('ImagenesController@store')}}" accept-charset="UTF-8" nctype=”multipart/form-data”>

<!--<form method="POST" action="{{ action('StorageController@save') }}" accept-charset="UTF-8" enctype="multipart/form-data">-->


  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

	<div class="form-group">

  	<label class="col-sm-2 control-label">Nombre</label>
	<input class="form-control" type="text" required="required" placeholder="Nombre" name="name" id="name"><br>

  </div>

  <div class="form-group">

  	<label class="col-sm-2 control-label">Detalle</label>

	<input class="form-control" type="text" required="required" placeholder="Detalle" name="detalle" id="detalle"><br>

  </div>

  <div class="form-group">

  	<label class="col-sm-2 control-label">Tamaño</label>
	<input class="form-control" type="text" required="required" placeholder="Tamaño" name="size" id="size"><br>

  </div>

 <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>

</form>
@endsection 
