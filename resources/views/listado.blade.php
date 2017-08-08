@extends('layouts.app')

@section('content')



<form method="POST" class="navbar-form navbar-left pull-right" action="{{ url('/listado') }}" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>


<table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>User_id</th>

                    </thead>

                   @if(Auth::user()->id == user_id)
      
                     @foreach($imagenes as $imagen)
                     
                    <tbody>
                        <td>{{$imagen->id}}</td>
                        <td>{{$imagen->name}} </td>
                        <td>{{$imagen->detalle}}</td>
                        <td>{{$imagen->user_id}}</td>
                       
                    </tbody>
                   @endforeach
                  @else  
                  <p>no tiene imagenes</p>
                @endif  


      </table>

@endsection


   