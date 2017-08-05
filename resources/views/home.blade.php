@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista Imagenes</div>


                <table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Size</th>
                        <th>Accion</th>

                    </thead>
      
                     @foreach($imagenes as $imagen)
                    <tbody>
                        <td>{{$imagen->id}}</td>
                        <td>{{$imagen->name}} </td>
                        <td>{{$imagen->detalle}}</td>
                        <td>{{$imagen->size}}</td>
                        <td>
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>

                    </tbody>
                   @endforeach
            </table>

                <div class="panel-body">
                     <a class="btn btn-info" href="{{ URL ('/formulario') }}" role="button">Añadir Meme</a>

                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

