@extends('layouts.app')

@section('content')

<table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Size</th>

                    </thead>
      
                     @foreach($imagenes as $imagen)
                    <tbody>
                        <td>{{$imagen->id}}</td>
                        <td>{{$imagen->name}} </td>
                        <td>{{$imagen->detalle}}</td>
                        <td>{{$imagen->size}}</td>

                    </tbody>
                   @endforeach
      </table>

@endsection


   