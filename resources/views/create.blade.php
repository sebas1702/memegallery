@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route ('categories.store') }}" accept-charset="UTF-8" >
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">

    			<label class="col-sm-2 control-label">Nombre</label>
  				<input class="form-control" type="text" required="required" placeholder="Nombre" name="name" id="name"><br>

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