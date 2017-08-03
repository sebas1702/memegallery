@extends('layouts.app')

@section('content')

<form method="post" action="{{ action('ImagenesController@store') }}" accept-charset="UTF-8">

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
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection 
