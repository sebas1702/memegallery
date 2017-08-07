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
                        <th>Usuario</th>
                        <th>Accion</th>

                    </thead>
      
                @foreach($imagenes as $imagen)
                    
                        <tbody>
                            <td>{{$imagen->id}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <img src="/upload/{{$imagen->name}}" alt="...">
                                        </div>
                                    </div>
        
                            </td>
                        <td>{{$imagen->detalle}}</td>
                        <td>{{$imagen->user_id}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('imagenes.edit' , $imagen->id)}}">Editar</a>
                            <a class="btn btn-danger" href="{{route('imagenes.destroy', $imagen->id)}}">Eliminar</a>
                        </td>

                    </tbody>
                     
                   @endforeach
            </table>

                <div class="panel-body">
                     <a class="btn btn-success" href="{{ URL ('/formulario') }}" role="button">Añadir Meme</a>

                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

