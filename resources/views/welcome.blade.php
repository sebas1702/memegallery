@extends('layouts.app')

@section('content')
        
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista Imagenes</div>


                <table class="table table-bordered">
                    <thead>
                        
                        <th>Lista de Imagens</th>
                        
                    </thead>
      
                @foreach($imagenes as $imagen)
                    
                        <tbody>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <img src="/upload/{{$imagen->name}}" alt="...">
                                        <div class="caption">
                                                <h3>{{$imagen->name}}</h3>
                                                <p>{{$imagen->detalle}}</p>
                                        </div>
    </div>
  </div>
</div>
        
                            </td>
                        
                       

                    </tbody>
                     
                   @endforeach
            </table>
        

@endsection