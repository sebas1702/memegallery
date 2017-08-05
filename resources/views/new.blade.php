@extends('layouts.app')


@section('content')
 
<div class="container">
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivos</div>
        <div class="panel-body">


<div class="panel-body">
          <form method="POST" action="{{ action('StorageController@save') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
            </div>


          </form>
        </div>


      </div>
    </div>
  </div>
</div>
 
@endsection